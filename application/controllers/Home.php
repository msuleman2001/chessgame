<?php
class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->library('session');
	}
	public function index()
	{
		$data['user_data'] = $this->session->userdata('user_data');
		$data['user_menu'] = $this->load->view('home/user_menu', $data, true);
		$this->load->view('home/home');
	}
	
	public function game()
	{
		$this->load->view('home/game');
	}
}

?>