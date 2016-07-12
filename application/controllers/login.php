<?php 
	/**
	* 
	*/
	class Login extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this -> load -> model("usuarios_model");
			$this->load->library(array('session','form_validation'));
		}
		
		public function loginn()
		{
			$this -> load -> library('form_validation');
			$this ->form_validation -> set_rules('Username', 'Username', 'required|valid_email');
			$this ->form_validation -> set_rules('password', 'password', 'min_length[6]');
			$this ->form_validation -> set_message('valid_email', 'el campo %s no cumple los requisitos para ser un Email valido');
			$this ->form_validation -> set_message('required', 'el campo %s esta vacio');
			$this ->form_validation -> set_message('min_length', 'el campo %s debe tener minimo 6 caracteres');
			$this -> form_validation -> set_error_delimiters('<ul><li>', '</li></ul>');
			if ($this ->form_validation -> run() !== false) {
				$this -> load -> model("usuarios_model");
				$res = $this
						->usuarios_model
						->verificar_usuario(
							$this -> input -> post('Username'),
							$this -> input -> post('password')
						);
				if ($res == false) {
					$_SESSION['username'] = $this -> input -> post('Username');
					redirect('index_re/iniciore');
				}
			}

			$data = array('titulo' => 'Login');
			$this -> load -> view("invitado/head",$data);
			$this -> load -> view("invitado/jumbotron");
			$this -> load -> view("invitado/repositorio/navegacion");
			$this -> load -> view("invitado/repositorio/login");

		}
		
		public function registro()
		{

			$data = array('titulo' => 'Registro');
			$this -> load -> view("invitado/head",$data);
			$this -> load -> view("invitado/jumbotron");
			$this -> load -> view("invitado/repositorio/navegacion");
			$this -> load -> view("invitado/repositorio/registro");

		}
		public function guardar(){
			$email = $this-> input ->post("email");
			$pass = $this->input->post("pass");
			$cpass = $this->input->post("cpass");
			$nombre = $this->input->post("nombre");
			$apellido = $this->input->post("apellido");
			$telefono = $this->input->post("telefono");
			$fecha = $this->input->post("fecha");
			$direccion = $this->input->post("direccion");
			$datos = array(
				'EmailUsu' =>  $email,
				'ContraseniaUsu' => $pass,
				'CcontraseniaUsu' => $cpass,
				'NombreUsu' => $nombre,
				'ApellidoUsu' => $apellido,
				'TelefonoUsu' => $telefono,
				'FechaNacimientoUsu' => $fecha,
				'Direccion' => $direccion,
				);
			$this->usuarios_model->guardar($datos);
			$data = array('titulo' => 'Exito');
			$this -> load -> view("invitado/head",$data);
			$this -> load -> view ('invitado/repositorio/exito');

		}
	}
?>
