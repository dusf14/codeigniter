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
			O índice do array assoc. passa a ser var. no destino(views/home.php)
		*/
		$this->load->view('home', $data);
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

}
