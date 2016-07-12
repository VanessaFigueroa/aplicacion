<?php 
	/**
	* 
	*/
	class Extenciones extends CI_Controller
	{
		
		public function extencion()
		{

			$data = array('titulo' => 'Extenciones');
			$this -> load -> view("invitado/head",$data);
			$this -> load -> view("invitado/jumbotron");
			$this -> load -> view("invitado/extenciones/navegacion");
			$this -> load -> view("invitado/extenciones/vertical");
			$this -> load -> view("invitado/pie");
		}
	}
?>
