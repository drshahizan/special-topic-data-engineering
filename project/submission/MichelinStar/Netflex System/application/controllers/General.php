<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {

	// constructor
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('crud_model');
	}
	
	public function index()
	{
	}
	
	function faq()
	{
		$page_data['page_name']		=	'faq';
		$page_data['page_title']	=	'Frequently Asked Questions';
		$this->load->view('frontend/index', $page_data);
		
	}
	
	function refundpolicy()
	{
		$page_data['page_name']		=	'refundpolicy';
		$page_data['page_title']	=	'Refund Policy';
		$this->load->view('frontend/index', $page_data);
		
	}
	
	function privacypolicy()
	{
		$page_data['page_name']		=	'privacypolicy';
		$page_data['page_title']	=	'Privacy Policy';
		$this->load->view('frontend/index', $page_data);
		
	}

	function cookie_policy()
	{
		$page_data['page_name']		=	'cookie_policy';
		$page_data['page_title']	=	get_phrase('cookie_policy');
		$this->load->view('frontend/index', $page_data);
		
	}
	
	


}
