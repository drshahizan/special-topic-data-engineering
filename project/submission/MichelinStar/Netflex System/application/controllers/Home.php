<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// constructor
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('crud_model');
		$this->load->model('email_model');
		$this->load->library('session');
		$this->load->helper('directory');

	}


	// Home browsing page
	public function index()
	{
		$this->login_check();
		$page_data['page_name']		=	'landing';
		$page_data['page_title']	=	'Welcome';
		$this->load->view('frontend/index', $page_data);
	}

	function signup()
	{
		$this->login_check();
		if (isset($_POST) && !empty($_POST))
		{
			if(!$this->crud_model->check_recaptcha() && get_settings('recaptcha') == 1){
				$this->session->set_flashdata('error_message', get_phrase('recaptcha_verification_failed'));
				redirect(base_url().'index.php?home/signup' , 'refresh');
			}

			$signup_result = $this->crud_model->signup_user();
			if ($signup_result == true){
				sleep(2);
				$trial_period	=	$this->crud_model->get_settings('trial_period');

				if ($trial_period == 'on')
					redirect(base_url().'index.php?browse/switchprofile' , 'refresh');
				else if ($trial_period == 'off')
					redirect(base_url().'index.php?browse/youraccount' , 'refresh');
			} else if ($signup_result == false){
				redirect(base_url().'index.php?home/signup' , 'refresh');
			}
			
		}
		$page_data['page_name']		=	'signup';
		$page_data['page_title']	=	get_phrase('sign_up');
		$this->load->view('frontend/index', $page_data);

	}

	public function verification_code(){
		if($this->session->userdata('register_email') == null){
			redirect(base_url().'index.php?home/signin' , 'refresh');
		}
		$page_data['page_name']		=	'verify_email_address';
		$page_data['page_title']	=	get_phrase('verify_email_address');
		$this->load->view('frontend/index', $page_data);
	}

	public function resend_verification_code(){
        $email = $this->input->post('email');
        $verification_code = $this->db->get_where('user', array('email' => $email))->row('verification_code');
        $this->email_model->send_email_verification_mail($email, $verification_code);
        
        return true;
    }

    public function verify_email_address() {
        $email = $this->input->post('email');
        $verification_code = $this->input->post('verification_code');
        $user_details = $this->db->get_where('user', array('email' => $email, 'verification_code' => $verification_code));
        if($user_details->num_rows() > 0) {        
            $user_details = $user_details->row_array();
            $updater = array(
                'status' => 1
            );
            $this->db->where('user_id', $user_details['user_id']);
            $this->db->update('user', $updater);
            $this->session->set_flashdata('flash_message', get_phrase('congratulations').'!'.get_phrase('your_email_address_has_been_successfully_verified').'.');
            $this->session->set_userdata('register_email', null);
            echo true;
        }else{
            $this->session->set_flashdata('error_message', get_phrase('the_verification_code_is_wrong').'.');
            echo false;
        }
    }

    public function redirect_after_signup(){
    	$this->login_check();
    	$trial_period	=	$this->crud_model->get_settings('trial_period');
		if ($trial_period == 'on')
			redirect(base_url().'index.php?browse/switchprofile' , 'refresh');
		else if ($trial_period == 'off')
			redirect(base_url().'index.php?browse/youraccount' , 'refresh');
    }

	function signin($param1 = "")
	{
		$this->login_check();
		if (isset($_POST) && !empty($_POST))
		{
			if(!$this->crud_model->check_recaptcha() && get_settings('recaptcha') == 1){
				$this->session->set_flashdata('error_message', get_phrase('recaptcha_verification_failed'));
				if($param1 == 'admin'){
					redirect(base_url().'index.php?home/signin/admin' , 'refresh');
				}else{
					redirect(base_url().'index.php?home/signin' , 'refresh');
				}
			}

			$email 			= $this->input->post('email');
			$password 		= $this->input->post('password');
			$signin_result 	= $this->crud_model->signin($email, $password);
			if ($signin_result == true)
			{
				if ($this->session->userdata('login_type') == 1){
					$this->session->set_userdata('active_user', 'admin');
					redirect(base_url().'index.php?admin/dashboard' , 'refresh');
				}else if ($this->session->userdata('login_type') == 0){
					redirect(base_url().'index.php?browse/switchprofile' , 'refresh');
				}
			}
			else if ($signin_result == false){
				if ($param1 == 'admin') {
					$this->session->set_flashdata('error_message', get_phrase('Login_failed'));
					redirect(base_url().'index.php?home/signin/admin' , 'refresh');
				}else {
					redirect(base_url().'index.php?home/signin' , 'refresh');
				}
			}
		}
		if ($param1 == 'admin') {
			$this->load->view('backend/login.php');
		}else {
			$page_data['page_name']		=	'signin';
			$page_data['page_title']	=	'Sign in';
			$this->load->view('frontend/index', $page_data);
		}
	}

	function forget($param1 = "")
	{
		$this->login_check();
		if($param1 == 'admin') {
			if (isset($_POST) && !empty($_POST))
			{
				$signup_result = $this->email_model->reset_password();
				redirect(base_url().'index.php?home/signin/admin' , 'refresh');
			}
		} 
		else {
			if (isset($_POST) && !empty($_POST))
			{
				$signup_result = $this->email_model->reset_password();
				redirect(base_url().'index.php?home/forget' , 'refresh');
			}
		}
		$page_data['page_name']		=	'forget';
		$page_data['page_title']	=	'Forget Password';
		$this->load->view('frontend/index', $page_data);
	}

	function signout()
	{
		$this->session->set_userdata('user_login_status', '');
        $this->session->set_userdata('user_id', '');
        $this->session->set_userdata('login_type', '');
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url().'index.php?home/signin', 'refresh');
	}

	function login_check()
	{
		if ($this->session->userdata('user_login_status') == 1)
			redirect(base_url().'index.php?browse/home' , 'refresh');
	}

}
