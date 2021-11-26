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

    public function registro(){
        $user_id=$_POST['user_id'];
        $lugar_id=$_POST['poste'];
        $listmaterial=$_POST['mat'];
        $fec=$_POST['fecha'];
        $hor=$_POST['hora'];
        $in=$this->db->insert('arreglos',['fecha'=>$fec,'hora'=>$hor,'lugar_id'=>$lugar_id,'user_id'=>$user_id]);
        $id=$this->db->insert_id();

        foreach ($listmaterial as $row) {
            $this->db->insert('arreglo_material',['arreglo_id'=>$id,'material_id'=>$row['material'],'cantidad'=>$row['cantidad'],'observacion'=>$row['observacion'],'codigo'=>$row['codigo']]);
        }
        $this->db->query('UPDATE lugares set estado= "CORRECTO" where id='.$lugar_id);
        echo true;
    }
}