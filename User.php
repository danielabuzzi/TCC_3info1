<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
	}
	public function index(){
		//load session library
		$this->load->library('session');
		//restrict users to go back to login if session has been set
		if($this->session->userdata('logado')){
			redirect('welcome');
		}
		else{
			$this->load->view('cabecalho');
		}
	}
	public function login(){
		//load session library
		$this->load->library('session');
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];
		$data = $this->users_model->login($usuario, $senha);
		if($data){
			//$this->session->set_userdata('welcome', $data);
			//redirect(base_url('logado.php'));
			$this->session->set_userdata($data);
			$this->load->view('logado', $data);
		}
		else{
			header('location:'.base_url().$this->index());
			$this->session->set_flashdata('error','Invalid login.User not found');
		}
	}
	public function home(){
		//load session library
		$this->load->library('session');
		//restrict users to go to home if not logged in
		if($this->session->userdata('welcome')){
			$this->load->view('logado');
		}
		else{
			redirect(site_url());
	}
	}
	public function logout(){
		//load session library
		$this->load->library('session');
		$this->session->unset_userdata('welcome');
		//redirect('/');
		//usar base ou site_url
		redirect(site_url());
	}

	public function go_home()
	{
		$this->load->view('home');
	}
}