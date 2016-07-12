<?php 
	/**
	* 
	*/
	class Inicio extends CI_Controller
	{
		
		public function index()
		{

			$data = array('titulo' => 'Inicio');
			$this -> load -> view("invitado/head",$data);
			$this -> load -> view("invitado/jumbotron");
			$this -> load -> view("invitado/navegacion");
			$this -> load -> view("invitado/contenido");
			$this -> load -> view("invitado/pie");

		}
	}
?>
