<?php
class Player extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('player/login');
	}
	
	public function signup()
	{
		$this->load->view('player/signup');
	}
	
	public function new_player()
	{
		$this->load->model("PlayerModel");
		$player_data["player_id"] = 0;
		$player_data["player_name"] = "NA";
		$player_data["player_email"] = $this->input->post("txtPlayerEmail");
		$player_data["player_password"] = $this->input->post("txtPlayerPassword");
		$player_data["player_country"] = $this->input->post("cmbCountry");
		$player_data["player_image"] = "NA";
		$player_data["player_date_created"] = date('Y/m/d');
		$player_data["remarks"] = "New Member";
		$player_id = $this->PlayerModel->insert_update_player($player_data);
		$this->login($player_data["player_email"], $player_data["player_password"]);
	}
	
	public function perform_login()
	{
		$player_email = $this->input->post("txtPlayerEmail");
		$player_password = $this->input->post("txtPlayerPassword");
		$this->login($player_email, $player_password);
	}
	
	public function login($player_email, $player_password)
	{
		$this->load->model("PlayerModel");
		$players = $this->PlayerModel->select_players();
		foreach($players->result() as $player)
			if ($player->player_email == $player_email && $player->player_password == $player_password)
			{
				$this->session->set_userdata('player_data', $player);
				$this->load->view("player/profile");
			}
	}
	
	public function change_password()
	{
		$this->load->view('player/change_password');
	}
	
	
}

?>