<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geral extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function quemSomos()
	{
		$this->load->view('quemSomos');
	}

	public function projetos()
	{
		$this->load->view('projetos');
	}

	public function logado()
	{
		$this->load->view('logado');
	}

	public function contacts()
	{
		$this->load->view('contacts');
	}

	public function typography()
	{
		$this->load->view('typography');
	}

	public function orfanatos()
	{
		$this->load->view('orfanatos');
	}

	public function asilos()
	{
		$this->load->view('asilos');
	}

	public function pagInsti()
	{
		$this->load->view('instituicao');
	}

}
