<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Email_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->library('email');
    }
	
	function reset_password() {
		// Checking email existence
		$email		=	$this->input->post('email');
        $query 		=	$this->db->get_where('user', array('email' => $email));
		if($query->num_rows() > 0) {
			$new_password = rand(100000, 999999);
			$this->db->where('user_id', $query->row('user_id'));
			$this->db->update('user', array('password' => sha1($new_password)));

			$email_data['subject'] = "Password reset request";
			$email_data['from'] = get_settings('site_email');
			$email_data['to'] = $email;
			$email_data['to_name'] = $query->row('name');
			$email_data['message'] = 'Your password has been changed. Your new password is : <b style="cursor: pointer;"><u>'.$new_password.'</u></b><br />';
			$email_template = $this->load->view('email/common_template', $email_data, TRUE);
			$this->send_smtp_mail($email_template, $email_data['subject'], $email_data['to'], $email_data['from']);
			return true;
		}else {
			$this->session->set_flashdata('password_reset', 'failed');
		}

	}

	public function send_email_verification_mail($to = "", $verification_code = "") {
		$to_name = $this->db->get_where('user', array('email' => $to))->row_array();

		$email_data['subject'] = "Verify email address";
		$email_data['from'] = get_settings('site_email');
		$email_data['to'] = $to;
		$email_data['to_name'] = $to_name['name'];
		$email_data['verification_code'] = $verification_code;
		$email_template = $this->load->view('email/email_verification', $email_data, TRUE);
		$this->send_smtp_mail($email_template, $email_data['subject'], $email_data['to'], $email_data['from']);
	}


	public function send_smtp_mail($msg=NULL, $sub=NULL, $to=NULL, $from=NULL) {
		//Load email library
		$this->load->library('email');

		if($from == NULL)
			$from		=	$this->db->get_where('settings' , array('type' => 'site_email'))->row('value');

		//SMTP & mail configuration
		$config = array(
			'protocol'  => get_settings('protocol'),
			'smtp_host' => get_settings('smtp_host'),
			'smtp_port' => get_settings('smtp_port'),
			'smtp_user' => get_settings('smtp_user'),
			'smtp_pass' => get_settings('smtp_pass'),
			'mailtype'  => 'html',
			'charset'   => 'utf-8'
		);
		$this->email->set_header('MIME-Version', 1.0);
		$this->email->set_header('Content-type', 'text/html');
		$this->email->set_header('charset', 'UTF-8');
		
		$this->email->initialize($config);
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");

		$this->email->to($to);
		$this->email->from($from, get_settings('site_name'));
		$this->email->subject($sub);
		$this->email->message($msg);

		//Send email
		$this->email->send();
	}
}
