<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mantenimiento extends CI_Controller {

    public function index(){
		$this->load->view('mantenimiento');

    }

    public function listado()
    {
        $codigo=$this->input->post('codigo');
        $re= $this->db->query("SELECT * from arreglos a inner join lugares l on a.lugar_id=l.id where l.codigo='$codigo'");
        echo json_encode($re->result_array());
    }

    public function listmtto(){
        $re= $this->db->query("SELECT * from  lugares  where estado='mtto'");
        echo json_encode($re->result_array());
    }

    public function validar(){
        $codigo=$this->input->post('codigo');
        $re= $this->db->query("SELECT * from  lugares where codigo='$codigo'");
        echo $re->num_rows();

    }
}