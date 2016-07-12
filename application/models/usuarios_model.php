<?php
	class Usuarios_model extends CI_Model {
		function guardar($data){
			$this->db->insert("usuario",$data);
		}
		public function verificar_usuario($email, $password){
			$this->db->where('EmailUsu', $email);
			 $this->db->where('ContraseniaUsu', $password);
			  
			$query = $this->db->get('usuario');
			  
			if($query->num_rows() >0){

			return TRUE;
			   
			}else{
			       
			        return FALSE;
			}
		}
		function valid_user_ajax($username){ 
           
	    $this->db->where('EmailUsu', $username);
	    $query = $this->db->get('usuario');
	         
	         if($query->num_rows() >0){
	               
	             echo $query->num_rows();
	             
	             }
	  	}
	}
?>