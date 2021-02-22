<?php
class Player extends CI_Controller 
{
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
		$player_data["player_name"] = $this->input->post("txtPlayerEmail");
		$player_data["player_email"] = $this->input->post("txtPlayerEmail");
		$player_data["player_password"] = $this->input->post("txtPlayerPassword");
		$player_data["player_country"] = $this->input->post("cmbCountry");
		$player_data["player_image"] = "avatar-1.png";
		$player_data["player_date_created"] = date("Y-m-d H:i:s");
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
				$this->session->set_userdata("player_data", $player);
				$this->load->model("PlayerLogin");
				$player_login["player_login_id"] = 0;
				$player_login["player_id"] = $player->player_id;
				$player_login["last_seen"] = date("Y-m-d H:i:s");
				$player_login["time_elapsed"] = $this->get_time_elapsed(date("Y-m-d H:i:s"), date("Y-m-d H:i:s"));
				$player_login["remarks"] = "NA";
				$player_login_id = $this->PlayerLogin->insert_update_player_login($player_login);
				$this->session->set_userdata("player_login_id", $player_login_id);
				redirect("Player/profile");
			}
	}
	
	public function profile()
	{
		$player = $_SESSION["player_data"];
		$player_menu_data["player"] = $player;
		$player_menu_view = $this->load->view("player/player_menu", $player_menu_data, true);
		$player_menu["player_menu_view"] = $player_menu_view;
		$this->load->view("player/profile", $player_menu);
	}
	
	public function update_last_seen()
	{
		$player_login_id = $this->session->userdata("player_login_id");
		$this->load->model("PlayerLogin");
		$player_login_data = $this->PlayerLogin->get_player_login_by_id($player_login_id);
		$player_login_update_data["player_login_id"] = $player_login_id;
		$player_login_update_data["player_id"] = $player_login_data->player_id;
		$time_elapsed = $this->get_time_elapsed(date("Y-m-d h:i:s a"), $player_login_data->last_seen);
		$player_login_update_data["last_seen"] = date("Y-m-d h:i:s a");
		$player_login_update_data["time_elapsed"] = $time_elapsed;
		$player_login_update_data["remarks"] = $player_login_data->remarks;
		$player_login_id = $this->PlayerLogin->insert_update_player_login($player_login_update_data);
		$this->remove_dormant_players();
		echo date("Y-m-d h:i:s a");
	}
	
	public function change_password()
	{
		$this->load->view('player/change_password');
	}
	
	public function remove_dormant_players()
	{
		$current_date_time = new DateTime(date("Y-m-d H:i:s"));
		$this->load->model("PlayerLogin");
		$logged_players = $this->PlayerLogin->get_logged_players();
		
		foreach ($logged_players as $player)
		{
			$player_time = new DateTime($player->last_seen);
			$time_elapsed = $current_date_time->diff($player_time);
			
			if ($time_elapsed->s > 10)
				$this->PlayerLogin->logout_player($player->player_id);
		}
	}
	
	public function list_player()
	{
		$player = $_SESSION["player_data"];
		$player_menu_data["player"] = $player;
		$player_menu_view = $this->load->view("player/player_menu", $player_menu_data, true);
		$players_data["player_menu_view"] = $player_menu_view;
		$players_data["loggedin_players"] = $this->get_loggedin_players();
		$this->load->view ("player/list_players", $players_data);
	}
	
	private function get_loggedin_players()
	{
		$this->load->model("PlayerLogin");
		$logged_players = $this->PlayerLogin->get_logged_players();
		return $logged_players;
	}
	
	private function get_time_elapsed($current_date_time, $old_date_time)
	{
		$a = new DateTime($current_date_time);
		$b = new DateTime($old_date_time);
		$diff = $a->diff($b);
		
		$time_elapsed = "";
		
		if ($diff->y != 0)
			$time_elapsed .= $diff->y . " years";
		if ($diff->m != 0)
			$time_elapsed .= $diff->m . " months";
		if ($diff->d != 0)
			$time_elapsed .= $diff->d . " days";
		if ($diff->h != 0)
			$time_elapsed .= $diff->h . " hours";
		if ($diff->i != 0)
			$time_elapsed .= $diff->i . " mins";
		if ($diff->s != 0)
			$time_elapsed .= $diff->s . " secs";
		
		return $time_elapsed;
	}
}

?>