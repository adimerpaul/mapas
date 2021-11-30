<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
    
    public function index(){
        $this->session->sess_destroy();
        $this->load->view('login');
    }

    public function login(){
        
    }

    public function verifica() 
    {	
        $this->load->view('recorridos');
		
		
    	$usr=$this->input->post('user');
		$con=$this->input->post('pass');
	
		$resultado=$this->db->query("SELECT * FROM usuarios where cuenta='$usr' and clave='$con'");
		if ($resultado->num_rows()>0)

    	{   $respuesta=$resultado->result();
    		$datosusr = array(
                'nombre' =>$respuesta[0]->nombre,
                'id' =>$respuesta[0]->id,
                'login'=>1
		  );
		  $this->session->set_userdata($datosusr);
		  $this->load->view('recorridos');
		 }
		 else
			//echo $respuesta;
		redirect('');
	}

	public function listuser(){
		$query=$this->db->query('SELECT id,nombre from usuarios');
        echo json_encode($query->result_array());

	}
}