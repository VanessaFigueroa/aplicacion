<?php 
	/**
	* 
	*/
	class Nominas extends CI_Controller
	{
		
		public function nomina()
		{

			$data = array('titulo' => 'Nominas');
			$this -> load -> view("invitado/head",$data);
			$this -> load -> view("invitado/jumbotron");
			$this -> load -> view("invitado/navegacion");
			$this -> load -> view("invitado/nomina/navegacion-vertical");
			$this -> load -> view("invitado/pie");

		}
	}
?>
