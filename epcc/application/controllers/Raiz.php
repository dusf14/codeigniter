<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Raiz extends CI_Controller {
	/*
	Ativar o helper que permite controlar a URL, deve ser feita no contrutor. Para que seja visivel em todo o controller.
	*/
	function __construct(){
		parent::__construct;
		$this->load->helper('url');
	}

	public function index(){
		// Carregar apenas no método
		//array associativo
		$data = array(
			'title' => 'Duarte Page',
			'heading' => 'Esta é a minha Grande Página!'
		);

		$this->load->view('home', $data, true);
	}
	public function empresa(){
			$data['title'] = 'Duarte Page';
			$data['header'] = 'Serviços';
			$this->load->view('empresa', $data);
	}
	public function servicos(){
		$data['title'] = 'Duarte Page';
			$data['header'] = 'Serviços';
			$this->load->view('servicos', $data);
	}
	/*
	ROTAS: São caminhos referentes a páginas de uma app, invocadas via metodo de um controller.
	CI controla as rotas:
		dominio/controller/method/var
	SEO-> a url deve ser curta e amigável. (.htaccess)
	*/
	
}
