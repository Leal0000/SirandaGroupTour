<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	//use application\model\Models;
class Clientes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('getmenu', 'url'));
		$this->load->library(array('session', 'pagination'));
	}




    public function index(){
			$this->load->model('Cmodel');
			$query = $this->Cmodel->getClientes();
			$dato['cliente'] = "active";
			$dato['clientes'] = $query;
			$dato['content'] = "clientes/table_clientes";
			$this->load->view('templates/dashboard', $dato);
		
       
    }

	public function addClientes(){
		$this->session->userdata('is_logged');
		if($this->session->userdata('is_logged')){
			$this->load->model('Cmodel');
			if($this->Cmodel->addClientes($_POST['nombre'], $_POST['apellido'], $_POST['correo'], $_POST['telefono'], $_POST['direccion'])){
				redirect('index.php/Clientes');
			}
			else{
				redirect('index.php/Clientes');
			}
		}
		else{
			show_error();
		}
	}

	public function deleteCliente(){
		if(empty($_POST['id'])){
			$this->output
				->set_status_header(400)
				->set_output(json_encode(array('msg' => 'El id no puede estar Vacio')));
		}
		else{
			$this->load->model('Cmodel');
			if($this->Cmodel->deleteClientes($_POST['id'])){
				$this->output->set_status_header(200);
			}
			else{
				$this->output
				->set_status_header(401)
				->set_output(json_encode(array('msg' => 'El Registro no existe')));
			}

		}	
	}

	public function editClient($id = 0){
		$id = $id;
		if($this->session->userdata('is_logged')){
			$this->load->model('Cmodel');
			$query = $this->Cmodel->getCliente($id);
			if(isset($query)){
				$dato['cliente'] = "active";
				$dato['content'] = "clientes/editCliente";
				$dato['clientes'] = $query;
				$this->load->view('templates/dashboard', $dato);

			}
		}
	}

	public function updateCliente(){
		if($this->session->userdata('is_logged')){
			$this->load->model('Cmodel');
			if($this->Cmodel->updateClient($_POST['id'],$_POST['nombre'], $_POST['apellido'], $_POST['correo'], $_POST['telefono'], $_POST['direccion'])){
				redirect('index.php/Clientes');

			}
			else{
				redirect('index.php/Clientes');

			}
		}
		else{
			show_error();
		}
	}



}