<?php
class PlayerModel extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function insert_update_player($player_data)
	{
		if ($player_data["player_id"] == 0)
		{
			$this->db->insert("player", $player_data);
			return $this->db->insert_id();
		}
	}
	
	public function select_players()
	{
		$players = $this->db->get("player");
		return $players;
	}
	
}
?>