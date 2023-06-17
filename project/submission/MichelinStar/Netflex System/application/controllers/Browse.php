<?php
/*
* Product Name : Neoflex Video Subscription Cms
* Developer : Creativeitem
* Date : November, 2018
* Support : http://support.creativeitem.com
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Browse extends CI_Controller {

	// constructor
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->login_check();

		$called_function	=	$this->router->fetch_method();

		// CHECK IF SAME USER HAS LOGGEDIN FROM DIFFERENT DEVICE/SESSION
		// CHECK IF USER HAS ACTIVE SUBSCRIPTION
		// CHECK IF USER HAS ACTIVE SUBSCRIPTION, THEN IS THERE ANY ACTIVE USER
		if($called_function == 'search' || $called_function == 'process_list' || $called_function == 'home' ||
		  		$called_function == 'movie' || $called_function == 'mylist' || $called_function == 'series' ||
		  		$called_function == 'playmovie' || $called_function == 'playseries') {
			$this->subscription_check();
			$this->multi_device_access_check();
			$this->active_user_check();
		}

		// CHECK IF SAME USER HAS LOGGEDIN FROM DIFFERENT DEVICE/SESSION
		if($called_function == 'search' || $called_function == 'process_list' || $called_function == 'home' ||
		  		$called_function == 'movie' || $called_function == 'mylist' || $called_function == 'series' ||
		  		$called_function == 'playmovie' || $called_function == 'playseries') {

		}
	}



	function search($search_key = '')
	{
		if (isset($_POST) && !empty($_POST))
		{
			$search_key = $this->input->post('search_key');
			redirect(base_url().'index.php?browse/search/'.$search_key , 'refresh');
		}
		$page_data['page_name']		=	'search';
		$page_data['search_key']	=	$search_key;
		$page_data['page_title']	=	'Search result';
		$this->load->view('frontend/index', $page_data);

	}

	function process_list($type = '', $task = '', $id = '')
	{

		// Getting the active user and user account id
		$user_id 		=	$this->session->userdata('user_id');
		$active_user 	=	$this->session->userdata('active_user');

		// Choosing the list between movie and series
		if ($type == 'movie')
			$list_field	=	$active_user.'_movielist';
		else if ($type == 'series')
			$list_field	=	$active_user.'_serieslist';


		// Getting the old list
		$old_list	=	$this->db->get_where('user', array('user_id'=>$user_id))->row()->$list_field;
		if ($old_list == NULL)
			$old_list = '[]';
		$old_list_array	=	json_decode($old_list);

		// Adding the new element to old list
		if ($task == 'add')
		{
			if (!in_array($id, $old_list_array))
			{
				array_push($old_list_array , $id);
			}

			$new_list	=	json_encode($old_list_array);
		}

		//Delete the submitted element from old list
		else if ($task == 'delete')
		{
			if (in_array($id, $old_list_array))
			{
				$key		=	array_search($id, $old_list_array);
				unset($old_list_array[$key]);
			}

			$new_list_array	=	array_values($old_list_array);
			$new_list	=	json_encode($new_list_array);
		}

		// Push back the new list to old place and update db table
		$this->db->update('user' , array($list_field => $new_list) , array('user_id' => $user_id));
		print_r($new_list);
	}

	function home()
	{
		$this->subscription_check();
		$this->active_user_check();
		$page_data['check_movie']	=	true;
		$page_data['page_name']		=	'home';
		$page_data['page_title']	=	'Home';
		$this->load->view('frontend/index', $page_data);
	}

	function movie($genre_id = '', $offset = '')
	{
		$page_data['check_movie']   = true;
		$page_data['page_name']		=	'movie';
		$page_data['page_title']	=	'Watch Movie';
		$page_data['genre_id']	=	$genre_id;

		// pagination configuration
		$url = base_url() . 'index.php?browse/movie/' . $genre_id;
        $per_page = 20;
		$this->db->where('genre_id' , $genre_id);
        $total_result = $this->db->count_all_results('movie');
        $config = $this->crud_model->paginate($url, $total_result, $per_page, 4);
        $this->pagination->initialize($config);

        $page_data['movies'] = $this->crud_model->get_movies($genre_id , $per_page, $this->uri->segment(4));

        $this->db->distinct('year');
		$this->db->select('year');
        $page_data['years'] = $this->db->get_where('movie')->result_array();
		$page_data['total_result']	=	$total_result;

		$this->load->view('frontend/index', $page_data);
	}

	function filter($type = '', $genre_id = '', $actor_id = '', $director_id ='', $year = '', $country = '')
	{
		if (empty($type) || empty($genre_id) || empty($actor_id)) {
			redirect(base_url().'index.php?browse/home' , 'refresh');
		}
		if ($actor_id == 'all' && $director_id == 'all' && $year == 'all' && $country == 'all' && $type == 'movie') {
			redirect(base_url().'index.php?browse/movie/'.$genre_id , 'refresh');
		}else if ($actor_id == 'all' && $director_id == 'all' && $year == 'all' && $country == 'all' && $type == 'series') {
			redirect(base_url().'index.php?browse/series/'.$genre_id , 'refresh');
		}

		$page_data['type']   = $type;
		$page_data['page_name']		= 'filter';
		$page_data['page_title']	= get_phrase('filter_result');
		$page_data['genre_id']	=	$genre_id;
		$page_data['actor_id']	=	$actor_id;
		$page_data['director_id']	=	$director_id;
		$page_data['search_key_year']	=	$year;
		$page_data['search_key_country']	=	$country;

		$this->db->distinct('year');
		$this->db->select('year');
        $page_data['years'] = $this->db->get_where($type)->result_array();

		$page_data['items'] = $this->crud_model->get_actor_genre_wise_movies_and_tv_series($actor_id, $type, $genre_id, $director_id, $year, $country);
        $total_result = count($page_data['items']);

		$page_data['total_result']	=	$total_result;
		$this->load->view('frontend/index', $page_data);
	}

	//Save movie progress
	function movie_progress($param1 = '', $param2 = '', $param3 = '', $param4 = ''){

		$progreses = $this->db->get_where('progress', array('user_id' => $param1, 'movie_id' => $param2, 'active_user' => $param4));
		if($progreses->num_rows() > 0){
			$data['progress_value'] = $param3;
			$this->db->where('user_id', $param1);
			$this->db->where('movie_id', $param2);
			$this->db->where('active_user', $param4);
			$this->db->update('progress', $data);
		}else{
			$data['user_id'] = $param1;
			$data['movie_id'] = $param2;
			$data['progress_value'] = $param3;
			$data['active_user'] = $param4;
			$this->db->insert('progress', $data);
		}
	}

	function mylist()
	{
		$page_data['page_name']		=	'mylist';
		$page_data['page_title']	=	'My List';
		$this->load->view('frontend/index', $page_data);
	}

	function series($genre_id = '', $offset = '')
	{
		$page_data['page_name']		=	'series';
		$page_data['page_title']	=	'Watch Tv Series';
		$page_data['genre_id']	=	$genre_id;

		// pagination configuration
		$url = base_url() . 'index.php?browse/series/' . $genre_id;
        $per_page = 20;
		$this->db->where('genre_id' , $genre_id);
        $total_result = $this->db->count_all_results('series');
        $config = $this->crud_model->paginate($url, $total_result, $per_page, 4);
        $this->pagination->initialize($config);

        $this->db->distinct('year');
		$this->db->select('year');
        $page_data['years'] = $this->db->get_where('series')->result_array();

        $page_data['series'] = $this->crud_model->get_series($genre_id , $per_page, $this->uri->segment(4));
		$page_data['total_result']	=	$total_result;

		$this->load->view('frontend/index', $page_data);
	}

	function playmovie($movie_id = '')
	{
		$page_data['page_name']		=	'playmovie';
		$page_data['page_title']	=	'Watch Movie';
		$page_data['movie_id']		=	$movie_id;
		$this->load->view('frontend/index', $page_data);
	}

	function playseries($series_id = '', $season_id = '', $episode_id = "")
	{
		if ($season_id == '')
		{
        	$seasons	=	$this->db->get_where('season', array('series_id'=>$series_id))->result_array();
        	$first_season_id = null;
			foreach ($seasons as $row)
			{
				$first_season_id	=	$row['season_id'];
				break;
			}
			$page_data['season_id']		=	$first_season_id;
		}
		else{
			$page_data['season_id']		=	$season_id;
		}

		if ($episode_id == "") {
			$episodes	=	$this->db->get_where('episode', array('season_id'=>$page_data['season_id']))->row_array();
			$page_data['episode_id']		= $episodes['episode_id'];
		}else{
			$page_data['episode_id']		= $episode_id;
		}

		$page_data['series_id']		=	$series_id;
		$page_data['page_name']		=	'playseries';
		$page_data['page_title']	=	'Watch Tv Series';
		//$page_data['series_id']		=	$series_id;
		$this->load->view('frontend/index', $page_data);
	}

	function youraccount()
	{
		$page_data['page_name']		=	'youraccount';
		$page_data['page_title']	=	'Your Account';
		$this->load->view('frontend/index', $page_data);
	}

	function switchprofile()
	{
		$this->subscription_check();
		$page_data['page_name']			=	'switchprofile';
		$page_data['page_title']		=	'Switch Profile';
		$page_data['current_plan_id']	=	$this->crud_model->get_current_plan_id();
		$this->load->view('frontend/index', $page_data);

	}

	function doswitch($user_number)
	{
		$this->session->set_userdata('active_user', $user_number);
		// SET USER SESSION HERE WITH TIMESTAMP FOR MULTI DEVICE ACCESS PROHIBITION
		$user_entering_timestamp		=	strtotime(date("Y-m-d H:i:s"));
		$this->session->set_userdata('user_entering_timestamp' , $user_entering_timestamp);

		$user_id						=	$this->session->userdata('user_id');
		$data[$user_number.'_session']	=	$user_entering_timestamp;
		$this->db->update('user' , $data , array('user_id' => $user_id));

		redirect(base_url().'index.php?browse/home' , 'refresh');
	}

	function manageprofile()
	{
		$this->subscription_check();
		$page_data['page_name']			=	'manageprofile';
		$page_data['page_title']		=	'Manage Profile';
		$page_data['current_plan_id']	=	$this->crud_model->get_current_plan_id();
		$this->load->view('frontend/index', $page_data);

	}

	function editprofile($user = '')
	{
		if (isset($_POST) && !empty($_POST))
		{
			$user_id 		=	$this->session->userdata('user_id');
			$user_field		=	$user;
			$username		=	$this->input->post('username');

			if (!empty($_FILES['userimage']['name'])) {
				$image_name = $user_id.'_'.$user_field.'.jpg';
				$path = 'assets/global/user_thumb';
				if (!file_exists($path)) {
				    mkdir($path, 0777, true);
				}
				move_uploaded_file($_FILES['userimage']['tmp_name'], $path.'/'.$image_name);
			}

			$this->db->update('user', array($user_field => $username), array('user_id' => $user_id));
			redirect(base_url().'index.php?browse/manageprofile' , 'refresh');
		}
		$page_data['page_name']			=	'editprofile';
		$page_data['page_title']		=	'Edit Profile';
		$page_data['user']				=	$user;
		$this->load->view('frontend/index', $page_data);

	}

	function emailchange()
	{
		if (isset($_POST) && !empty($_POST))
		{
			$user_id							=	$this->session->userdata('user_id');
			$old_password_encrypted				=	$this->crud_model->get_current_user_detail()->password;
			$old_password_submitted_encrypted	=	sha1($this->input->post('old_password'));
			$new_email							=	$this->input->post('new_email');

			// DUPLICATE EMAIL DENIES EMAIL CHANGE
			$this->db->where('email' , $new_email);
			$this->db->from('user');
        	$total_number_of_matching_user = $this->db->count_all_results();
			if ($total_number_of_matching_user > 0)
			{
				$this->session->set_flashdata('status', 'email_change_failed');
				redirect(base_url().'index.php?browse/emailchange' , 'refresh');
			}

			// CORRECT PASSWORD NEEDED TO CHANGE EMAIL
			if ($old_password_encrypted 		==	$old_password_submitted_encrypted)
			{
				$this->db->update('user', array('email'=>$new_email), array('user_id'=>$user_id));
				$this->session->set_flashdata('status', 'email_changed');
				redirect(base_url().'index.php?browse/youraccount' , 'refresh');
			}
			else
			{
				$this->session->set_flashdata('status', 'email_change_failed');
				redirect(base_url().'index.php?browse/emailchange' , 'refresh');
			}

			$this->db->update('user', array($user_field => $username), array('user_id' => $user_id));
			redirect(base_url().'index.php?browse/manageprofile' , 'refresh');
		}
		$page_data['page_name']			=	'emailchange';
		$page_data['page_title']		=	'Chane email address';
		$this->load->view('frontend/index', $page_data);

	}

	function passwordchange()
	{
		if (isset($_POST) && !empty($_POST))
		{
			$user_id							=	$this->session->userdata('user_id');
			$old_password_encrypted				=	$this->crud_model->get_current_user_detail()->password;
			$old_password_submitted_encrypted	=	sha1($this->input->post('old_password'));
			$new_password						=	$this->input->post('new_password');
			$new_password_encrypted				=	sha1($this->input->post('new_password'));

			// NEW PASSWORD MUST BE 6 CHARACTER LONG
			if (strlen($new_password) <6)
			{
				$this->session->set_flashdata('status', 'password_change_failed');
				redirect(base_url().'index.php?browse/passwordchange' , 'refresh');
			}

			// CORRECT OLD PASSWORD NEEDED TO CHANGE PASSWORD
			if ($old_password_encrypted 		==	$old_password_submitted_encrypted)
			{
				$this->db->update('user', array('password'=>$new_password_encrypted), array('user_id'=>$user_id));
				$this->session->set_flashdata('status', 'password_changed');
				redirect(base_url().'index.php?browse/youraccount' , 'refresh');
			}
			else
			{
				$this->session->set_flashdata('status', 'password_change_failed');
				redirect(base_url().'index.php?browse/passwordchange' , 'refresh');
			}

			$this->db->update('user', array($user_field => $username), array('user_id' => $user_id));
			redirect(base_url().'index.php?browse/manageprofile' , 'refresh');
		}
		$page_data['page_name']			=	'passwordchange';
		$page_data['page_title']		=	'Change Password';
		$this->load->view('frontend/index', $page_data);

	}

	function cancelplan()
	{
		if (isset($_POST) && !empty($_POST))
		{
			$subscription_id	=	$this->crud_model->validate_subscription();
			$this->db->update('subscription', array('status' => 0), array('subscription_id' => $subscription_id));
			$this->session->set_flashdata('status', 'subscription_cancelled');
			redirect(base_url().'index.php?browse/youraccount' , 'refresh');
		}
		$page_data['page_name']			=	'cancelplan';
		$page_data['page_title']		=	'Cancel Plan';
		$this->load->view('frontend/index', $page_data);

	}

	function purchaseplan()
	{
		if (isset($_POST) && !empty($_POST))
		{

			redirect(base_url().'index.php?browse/youraccount' , 'refresh');
		}
		$page_data['page_name']			=	'purchaseplan';
		$page_data['page_title']		=	'Purchase Package';
		$this->load->view('frontend/index', $page_data);

	}

	function purchasestripe()
	{
		$active_theme					=	$this->crud_model->get_active_theme();
		$page_data['plan_id']			=	$this->input->post('plan_id');
		$page_data['page_title']		=	'Purchase Package';
		$this->load->view('frontend/'.$active_theme.'/purchasestripe', $page_data);
	}


	function billinghistory()
	{
		$page_data['page_name']		=	'billinghistory';
		$page_data['page_title']	=	'Billing History';
		$this->load->view('frontend/index', $page_data);
	}

	function report_invoice($param1 = '', $param2 = ''){
		$page_data['subscription_id'] = $param1;
		$page_data['user_id']	  = $param2;
		$page_data['page_title']			=	'Subscription & payment invoice';
		$this->load->view('frontend/flixer/report_invoice', $page_data);
	}

	// CHECK IF LOGGED IN USER ACCOUNT HAS SELECTED ANY OF HIS PROFILE(S), MUST BE CHECKED AFTER SUBSCRIPTION CHECK
	function active_user_check()
	{
		// admin can access all frontend pages
		if ($this->session->userdata('login_type') == 1)
			return;

		$active_user	=	$this->session->userdata('active_user');
		if ($active_user == '')
			redirect(base_url().'index.php?browse/switchprofile' , 'refresh');
	}

	// CHECK IF LOGGED IN USER HAS ACTIVE SUBSCRIPTION, IF NOT THEN REDIRECT TO ACCOUNT MANAGING PAGE
	function subscription_check()
	{
		// admin can access all frontend pages
		if ($this->session->userdata('login_type') == 1)
			return;

		$subscription_validation	=	$this->crud_model->validate_subscription();
		if ($subscription_validation == false)
			redirect(base_url().'index.php?browse/youraccount' , 'refresh');
	}

	function login_check()
	{
		if ($this->session->userdata('user_login_status') != 1)
			redirect(base_url().'index.php?home/signin' , 'refresh');
	}

	function multi_device_access_check()
	{
		// admin can access all frontend pages
		if ($this->session->userdata('login_type') == 1)
			return;

		// checking the same profile trying to access multiple devices/sessions
		$logged_in_user_id			=	$this->session->userdata('user_id');
		$active_user_session 		=	$this->session->userdata('active_user').'_session';
		$user_entering_db_timestamp	=	$this->db->get_where('user', array('user_id' => $logged_in_user_id))->row($active_user_session);

		$user_entering_timestamp	=	$this->session->userdata('user_entering_timestamp');

		if ($user_entering_timestamp != $user_entering_db_timestamp)
			redirect(base_url().'index.php?browse/switchprofile' , 'refresh');
	}

	public function checkout($planId = "") {
		if (empty($planId)) {
			redirect(base_url().'index.php?browse/purchaseplan' , 'refresh');
		}

		$checker = array('status' => 1, 'plan_id' => $planId);
		$this->db->where($checker);
		$query   = $this->db->get('plan');

		if ($query->row_array() == 0) {
			redirect(base_url().'index.php?browse/purchaseplan' , 'refresh');
		}
		$plan_details = $query->row_array();
		$page_data['plan_details'] = $plan_details;
		$page_data['total_price_of_checking_out'] = $plan_details['price'];
        $page_data['page_title'] = get_phrase("payment_gateway");
        $this->load->view('payment/index', $page_data);
	}
}
