<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Man extends CI_Controller
{

    public function index()
    {
        $this->load->view('man');
    }
    public function lugares(){
        $query=$this->db->query("SELECT * FROM lugares WHERE estado='MTTO'");
        echo json_encode($query->result_array());
    }
}