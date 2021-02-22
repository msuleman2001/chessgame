<?php
class PlayerLogin extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function insert_update_player_login($player_login)
	{
		if ($player_login["player_login_id"] == 0)
		{
			$this->db->insert("player_login", $player_login);
			return $this->db->insert_id();
		}
		else
		{
			$this->db->replace("player_login", $player_login);
			return $player_login["player_login_id"];
		}
	}
	
	public function get_logged_players()
	{
		$this->db->select("*");
		$this->db->from("player_login");
		$this->db->join("player", "player_login.player_id = player.player_id");
		$logged_players = $this->db->get();
		return $logged_players->result();
	}
	
	public function get_player_login_by_id($player_login_id)
	{
		$player_logins = $this->db->get_where("player_login", "player_login_id=$player_login_id");
		return $player_logins->row();
	}
	
	public function logout_player($player_id)
	{
		$this->db->delete('player_login', "player_id=$player_id"); 
	}
}
?>