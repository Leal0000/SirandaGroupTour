<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	//use application\model\Models;
class Ticket extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('getmenu', 'url'));
		$this->load->library(array('session', 'pagination'));
	}

    public function index(){
        if($this->session->userdata('is_logged')){
            $this->load->model('Timodel');
			$query = $this->Timodel->getTickets();
			$this->load->model('Tmodel');
			$dato['transportes'] = $this->Tmodel->getTransportes();
			$dato['ticket'] = "active";
			$dato['tickets'] = $query;
			$dato['content'] = "tickets/tickets";
			$this->load->view('templates/dashboard', $dato);
        }
        else{
            show_error();
        }
    }

	public function addTicket(){
			if($this->session->userdata('is_logged')){
				$this->load->model('Timodel');
				if($this->Timodel->addTicket($_POST['agencia'],$_POST['folio'],$_POST['inicio'],$_POST['final'],$_POST['paquetes'],$_POST['transporte'],$_POST['itinerario'],$_POST['costo'])){
					redirect('index.php/Ticket');
				}
				else{
					show_error();
				}
			}
			else{
				show_error();
			}
	}

	public function getTicket($id = 0){
        $id = $id;
        if($this->session->userdata('is_logged')){
            $this->load->model('Timodel');
            $query = $this->Timodel->getTicket($id);
            if($query){
				$this->load->model('Tmodel');
				$dato['transportes'] = $this->Tmodel->getTransportes();
                $dato['ticket'] = "active";
                $dato['tickets'] = $query;
                $dato['content'] = "tickets/editTicket";
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


	public function updateTicket(){
		if($this->session->userdata('is_logged')){
			$this->load->model('Timodel');
			if($this->Timodel->updateTicket($_POST['id'],$_POST['agencia'],$_POST['folio'],$_POST['inicio'],$_POST['final'],$_POST['paquetes'],$_POST['transporte'],$_POST['itinerario'],$_POST['costo'] )){
				redirect('index.php/Ticket');

			}
			else{
				redirect('index.php/Ticket');

			}
		}
		else{
			show_error();
		}
	}

	public function deleteTicket(){
		if(empty($_POST['id'])){
			$this->output
				->set_status_header(400)
				->set_output(json_encode(array('msg' => 'El id no puede estar Vacio')));
		}
		else{
			$this->load->model('Timodel');
			if($this->Timodel->deleteTicket($_POST['id'])){
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