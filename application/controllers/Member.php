<?php
class Member extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('member/login');
	}
	
	public function signup()
	{
		$this->load->view('member/signup.php');
	}
}

?>