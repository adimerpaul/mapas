<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function lugares(){
        $query=$this->db->query("SELECT * FROM lugares");
        echo json_encode($query->result_array());
    }
    public function crear(){
        $nombre=$this->input->post('nombre');
        $lat=$this->input->post('lat');
        $lng=$this->input->post('lng');
        $this->db->query("INSERT INTO  lugares SET name='$nombre',lat='$lat',lng='$lng'");
	    echo 1;
    }
    public function eliminar($id){
        $this->db->query("DELETE FROM  lugares WHERE id='$id'");
        echo 1;
    }
    public function recorridos(){
        $this->load->view('recorridos');
    }
}
