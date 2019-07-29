<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InstituicoesController extends CI_Controller {
	public function __construct(){

		parent::__construct();
		$this->load->model('Instituicoes_model');
	}

	public function index()
	{
		$data['result'] = $this->instituicoes_model->getAllData();
		$this->load->view('listaInstituicoes', $data);
	}
	/*Chama a pagina*/
	public function cadInsti()
	{
		$data['result'] = $this->instituicoes_model->getAllData();
		$this->load->view('cadastroInsti', $data);
	}
	
	public function create(){

		$this->instituicoes_model->createData();
		redirect("InstituicoesController");
	}

	public function editar($cnpj){

		$data['row'] = $this->instituicoes_model->getData($cnpj);
		$this->load->view('editInstituicao', $data);
	}

	//public function update($cnpj){

		//$this->instituicoes_model->updateData($cnpj);
		//redirect("InstituicoesController");
	//}

	public function delete($cnpj){

		$this->instituicoes_model->deleteData($cnpj);
		redirect("InstituicoesController");
	}
}
