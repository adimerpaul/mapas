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
    public function rutas(){
        header('Content-type: application/json');
//        echo json_encode($array);
        $query=$this->db->query("SELECT * FROM rutas");
        $array=array();
        foreach ($query->result() as $row){
            $a['id']=$row->id;
            $a['nombre']=$row->nombre;
            $q=$this->db->query("SELECT * FROM rutaspuntos WHERE ruta_id='".$row->id."'");
            $arrayp=[];
            $arraypuntos=[];
            foreach ($q->result() as $puntos){
                $arrayp['lat']=$puntos->lat;
                $arrayp['lng']=$puntos->lng;
                $arraypuntos[]=$arrayp;
            }
            $a['puntos']=$arraypuntos;
            $array[]=$a;
        }
        echo json_encode($array);
    }
    public function crear(){
        $codigo=$this->input->post('codigo');
        $potencia=$this->input->post('potencia');
        $tipo=$this->input->post('tipo');
        $poste=$this->input->post('poste');
        $lat=$this->input->post('lat');
        $lng=$this->input->post('lng');
        $this->db->query("INSERT INTO  lugares SET codigo='$codigo',
        potencia='$potencia',
        poste='$poste',
        tipo='$tipo',

        lat='$lat',lng='$lng'");
	    echo 1;
    }
    public function eliminar($id){
        $this->db->query("DELETE FROM  lugares WHERE id='$id'");
        echo 1;
    }
    public function eliminarruta($id){
        $this->db->query("DELETE FROM  rutas WHERE id='$id'");
        echo 1;
    }
    public function recorridos(){
        $this->load->view('recorridos');
    }
    public function crearruta(){
//	     var_dump(['a'=>'b']);
//        foreach (json_decode ($_POST['datos']) as $dat){
//            echo $dat;
//        }
//        echo json_decode($_POST['datos']);
//        $jsonText = $_POST['datos'];
//        $myArray = json_decode($jsonText, true);
        $nombre=$this->input->post('nombre');
        $this->db->query("INSERT INTO  rutas SET nombre='$nombre'");
        $id=$this->db->insert_id();
        foreach (json_decode($_POST['datos'], true) as $dat){
            $lat=$dat['lat'];
            $lng=$dat['lng'];
            $this->db->query("INSERT INTO  rutaspuntos SET lat='$lat',lng='$lng',ruta_id='$id'");
        }
        echo 1;
//         var_dump($myArray);
//        echo json_last_error(); //Returns 4 - Syntax error;
    }

    public function enviarmtto($id){
        $this->db->query("UPDATE lugares set estado='MTTO' WHERE id='$id'");
        echo 1;
    }
}
