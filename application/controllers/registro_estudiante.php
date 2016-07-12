<?php 
	/**
	* 
	*/
	class Registro_Estudiante extends CI_Controller
	{
		
		public function registro_estudiantes()
		{

			$data = array('titulo' => 'Nominas');
			$this -> load -> view("invitado/head",$data);
			$this -> load -> view("invitado/jumbotron");
			$this -> load -> view("invitado/navegacion");
			$this -> load -> view("invitado/nomina/navegacion-vertical");
			$this -> load -> view("invitado/nomina/registro");
			$this -> load -> view("invitado/pie");

		}
	}
?>