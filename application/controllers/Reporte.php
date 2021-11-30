<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reporte extends CI_Controller
{

    public function index()
    {
        $this->load->view('reporte');
    }

    public function listado(){
        $user=$_POST['user_id'];
        $inicio=$_POST['ini'];
        $fin=$_POST['fin'];

        $query=$this->db->query("SELECT * FROM arreglos a 
           inner join lugares l on a.lugar_id=l.id
           inner join arreglo_material am on a.id=am.arreglo_id
           inner join materiales m on am.material_id=m.id 
           WHERE a.user_id=$user and a.fecha>='$inicio' and a.fecha<='$fin'");

        echo json_encode($query->result_array());
    }

    public function listmaterial(){
        $idarreglo=$_POST['id'];
        $query=$this->db->query('SELECT * from arreglo_material am inner join material m on am.material_id=m.id 
        where am.arreglo_id='.$idarreglo);
        echo json_encode($query);
    }
}