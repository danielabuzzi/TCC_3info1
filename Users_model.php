<?php
class Users_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function login($usuario, $senha){
		$query = $this->db->get_where('instituicoes', array('usuario'=>$usuario,'senha'=>$senha));
		return $query->row_array();
	}
}
?>