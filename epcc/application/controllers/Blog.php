<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	/* 	//.../epcc/index.php/Blog/
	    //.../epcc/index.php/Blog/index
	*/
	public function index(){
		//array associativo
		$data = array(
			'title' => 'Duarte Page',
			'heading' => 'Esta é a minha Grande Página!'
		);
		/*
			O indice do array assoc. passa a ser var. no destino(views/home.php)
		*/
		$this->load->view('comuns/header', $data);
		$this->load->view('home', $data);
		$this->load->view('comuns/footer');
	}
	//.../epcc/index.php/Blog/comments
	public function comments(){
		echo "Comments.......";
	}
	/*
	Segmentos são parametros de entrada para os metodos(ações).
	SINTAXE: metodos(arg1, arg2, argN)
	São determinados pela separação das barras
	Ex: lista/12/13/14
	*/
	// .../index.php/Blog/listar/12/duarte/123123123
	public function listar($id, $nome, $valor){
		echo "Listar<br />";
		echo "ID->". $id;
		echo "Nome->". $nome;
		echo "Valor->". $valor;
	}

	/*
	CI_Controller-> fornece um mecanismo de controlo de segmentos
	SINTAXE : $this->uri->segment(index)
	*/
	public function listarSeg(){
		echo "Listar<br />";
		echo "Seg(0)->". $this->uri->segment(0)."<br />";
		echo "Seg(1)->". $this->uri->segment(1)."<br />";
		echo "Seg(2)->". $this->uri->segment(2)."<br />";
		echo "Seg(3)->". $this->uri->segment(3)."<br />";
	}
	// .../epcc/index.php/Blog/contactos
	public function contactos(){
		//array associativo
		$data = array(
			'title' => 'Contactos Page',
			'heading' => 'Esta é a minha Grande Página!'
		);
		/*
			O indice do array assoc. passa a ser var. no destino(views/home.php)
		*/
		$this->load->view('comuns/header', $data);
		$this->load->view('contactos', $data);
		$this->load->view('comuns/footer');
	}
	//http://localhost/codeigniter/epcc/index.php/blog/servicos
	public function servicos(){
		//array associativo
		$data = array(
			'title' => 'Serviços Page',
			'heading' => 'Esta é a minha Grande Página!'
		);
		/*
			O indice do array assoc. passa a ser var. no destino(views/home.php)
		*/
		$this->load->view('comuns/header', $data);
		$this->load->view('servicos', $data);
		$this->load->view('comuns/footer');
	}

	public function gallery(){
		//array associativo
		$data = array(
			'title' => 'Gallery Page',
			'heading' => 'Esta é a minha Grande Página!'
		);
		/*
			O indice do array assoc. passa a ser var. no destino(views/home.php)
		*/
		$this->load->view('comuns/header', $data);
		$this->load->view('gallery', $data);
		$this->load->view('comuns/footer');
	}

}
