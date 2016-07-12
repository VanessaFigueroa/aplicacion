<?php
	/**
	*  
	*/
	class Servicios extends CI_Controller
	{
		
		Public function servicio() 
		{
			$data = array('titulo' => 'Servicios');
			$this -> load -> view("invitado/head",$data);
			$this -> load -> view("invitado/jumbotron");
			$this -> load -> view("invitado/extenciones/navegacion");
			$this -> load -> view("invitado/pie");

		}
	}
?>