<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	//use application\model\Models;
class Transporte extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('getmenu', 'url'));
		$this->load->library(array('session', 'pagination'));
	}


    public function index(){
        if($this->session->userdata('is_logged')){
            $this->load->model('Tmodel');
            $query = $this->Tmodel->getTransportes();
            $dato['transporte'] = "active";
            $dato['transportes'] = $query;
            $dato['content'] = "transporte/transporte";
            $this->load->view('templates/dashboard',$dato);
        }
        else{
            show_error();
        }
    }

    public function addTransporte(){
        if($this->session->userdata('is_logged')){
            $this->load->model('Tmodel');
            if($this->Tmodel->addTransporte($_POST['nombre'],$_POST['costo'],$_POST['marca'],$_POST['matricula'])){
                redirect('index.php/Transporte');
            }
            else{
                show_error();
            }
        }
        else{
            show_error();
        }
    }

    public function getTransporte($id = 0){
        $id = $id;
        if($this->session->userdata('is_logged')){
            $this->load->model('Tmodel');
            $query = $this->Tmodel->getTransporte($id);
            if($query){
                $dato['transporte'] = "active";
                $dato['transportes'] = $query;
                $dato['content'] = "transporte/edittransporte";
                $this->load->view('templates/dashboard',$dato);
            }
            else{
                show_error();
            }
        }
        else{
            show_error();
        }   
    }

    public function editTransporte(){       
        if($this->session->userdata('is_logged')){
            $this->load->model('Tmodel');
            if($this->Tmodel->updateTransporte($_POST['id'],$_POST['nombre'],$_POST['costo'],$_POST['marca'],$_POST['matricula'])){
                redirect('index.php/Transporte');
            }
            else{
                show_error();
            }
        }
        else{
            show_error();
        }   
    }

    public function deleteTransporte(){
        if(empty($_POST['id'])){
			$this->output
				->set_status_header(400)
				->set_output(json_encode(array('msg' => 'El id no puede estar Vacio')));
		}
		else{
			$this->load->model('Tmodel');
			if($this->Tmodel->deleteTransporte($_POST['id'])){
				$this->output->set_status_header(200);
			}
			else{
				$this->output
				->set_status_header(401)
				->set_output(json_encode(array('msg' => 'El Registro no existe')));
			}

		}	
    }

}