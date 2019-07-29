<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instituicoes_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	 public function createData(){

	 	$data = array (

	 		'cnpj' => $this->input->post('cnpj'),
	 		'usuario' => $this->input->post('usuario'),
	 		'nome' => $this->input->post('nome'),
	 		'tipo_inst' => $this->input->post('tipo_inst'),
	 		'logradouro' => $this->input->post('logradouro'),
	 		'cep' => $this->input->post('cep'),
	 		'descri' => $this->input->post('descri'),
	 		'quant_abrig' => $this->input->post('quant_abrig'),
	 		'email' => $this->input->post('email'),
	 		'nome_resp' => $this->input->post('nome_resp'),
	 		'cpf' => $this->input->post('cpf'),
	 		'senha' => $this->input->post('senha')

	 	);

	 	$simbolo = array(".","/","-","(",")");
	 	$data['cnpj']=str_replace($simbolo,"", $data['cnpj']);
	 	$this->db->insert('instituicoes', $data);
	 }

	 function getAllData(){

	 	$query = $this->db->query('SELECT * FROM instituicoes');
	 	return $query->result();
	 }

	 function getData($cnpj){

	 	$query = $this->db->query('SELECT * FROM instituicoes WHERE "cnpj" ='.$cnpj);
	 	return $query->row();
	 }

	 /*function updateData($cnpj){

	 $data = array(

	 		'cnpj' => $this->input->post('cnpj'),
	 		'usuario' => $this->input->post('usuario'),
	 		'nome' => $this->input->post('nome'),
	 		'tipo_inst' => $this->input->post('tipo_inst'),
	 		'logradouro' => $this->input->post('logradouro'),
	 		'cep' => $this->input->post('cep'),
	 		'tele' => $this->input->post('tele'),
	 		'descri' => $this->input->post('descri'),
	 		'quant_abrig' => $this->input->post('quant_abrig'),
	 		'email' => $this->input->post('email'),
	 		'nome_resp' => $this->input->post('nome_resp'),
	 		'cpf' => $this->input->post('cpf'),
	 		'senha' => $this->input->post('senha')

	 	);

	 $this->db->where('cnpj', $cnpj);
	 $this->db->update('instituicoes', $data);

	  }*/

	 function deleteData($cnpj){

	 	$this->db->where('cnpj', $cnpj);
	 	$this->db->delete('instituicoes');
	 }

	 public function retorna($cnpj){
	 	return $this->db->get_where("instituicoes",array("cnpj" => $cnpj))->row_array();
	 }

	 public function login($usuario, $senha){
		$query = $this->db->get_where('instituicoes', array('usuario'=>$usuario,'senha'=>$senha));
		return $query->row_array();
}
}



