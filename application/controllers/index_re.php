<?php
	/**
	* 
	*/
	class Index_re extends CI_Controller {
		public function iniciore(){
			$data = array('titulo' => 'Inicio');
			$this -> load -> view("invitado/head",$data);
			$this -> load -> view("invitado/jumbotron");
			$this -> load -> view("invitado/repositorio/navegacion");
			$this -> load -> view("invitado/repositorio/index_re");
			$this -> load -> view("invitado/pie");
		}
	}
?>