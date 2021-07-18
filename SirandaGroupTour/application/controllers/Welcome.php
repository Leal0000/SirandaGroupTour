<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	//use application\model\Models;
class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('getmenu', 'url'));
		$this->load->library(array('session', 'pagination'));
	}
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
		$data['menu'] = main_menu();
		$this->load->view('login', $data);
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function proof()
	{
		$this->load->view('proof');
	}

	public function add(){
		$this->load->model('Models');
		if($this->Models->register($_POST['name'],$_POST['last_name'],$_POST['email'], $_POST['password'])){
			$this->load->view('login');
		}
		else{

			$this->load->view('register');

		}
	}

	public function page(){
		if($this->session->userdata('is_logged')){
			$this->load->model('Models');
			$dato['dashboard'] = "active";
			$dato['content'] = "table";
			$dato['viajes'] = $this->Models->datos();
			$dato['destinos'] = $this->Models->getDestino();
			$this->load->view('templates/dashboard', $dato);
		}
		else{
			show_404();
		}
		
	}
	public function destinos(){
		if($this->session->userdata('is_logged')){
			$this->load->model('Models');
			$dato['destino'] = "active";
			$dato['content'] = "destinos";
			$dato['destinos'] = $this->Models->getDestino();
			$this->load->view('templates/dashboard', $dato);
		}
		else{
			show_404();
		}
		
	}

	public function add_destino(){
		$this->load->model('Models');
		if($this->Models->add_destino($_POST['nombre'], $_POST['dir'])){
			redirect('index.php/Welcome/destinos');
		}
	}

	public function paquetes(){
		if($this->session->userdata('is_logged')){
			$this->load->model('Models');
			$dato['paquetes'] = "active";
			$dato['content'] = "table";
			$dato['viajes'] = $this->Models->datos();
			$this->load->view('templates/dashboard', $dato);
		}
		else{
			show_404();
		}
		
	}








	public function login()
	{
		$this->load->model('Models');
		if($this->Models->login($_POST['email'], $_POST['password'])){
			$this->load->model('Models');
			$query = $this->Models->getUser($_POST['email']);
			$dato = array(
				"url" => base_url('index.php/Welcome/page'),
			);
			$data = array(
				'id' => $query->idusers_travel,
				'nombre' => $query->nombre,
				'apellido' => $query->apellido,
				'correo' => $query->correo,
				'is_logged' => TRUE,
			);
			$this->session->set_userdata($data);
			$this->session->set_flashdata('msg', '¡Bienvenido al sistema '.$data['nombre'].'!');
			echo json_encode($dato);
		}
		else{
			$dato = array(
				"error" => "Usuario o contraseña invalidos",
				"user"=> $_POST['email'],
			);
			$this->output->set_status_header(401);
			echo json_encode($dato);
		}
	}

	public function logout(){
		$vars = array('id', 'nombre', 'apellido', 'correo', 'is_logged');
		$this->session->unset_userdata($vars);
		$this->session->sess_destroy();
		redirect('/');
	}

	public function profile(){
		$this->load->model('Models');
		if($this->session->userdata('is_logged')){
			$dato['dashboard'] = "active";
			$dato['content'] = "profile";
			$this->load->view('templates/dashboard', $dato);	
		}
	}

	public function agregar(){
		$this->load->model('Models');
		if($this->Models->agregar($_POST['titulo'], $_POST['desc'], $_POST['destino'], $_POST['fecha_i'], $_POST['fecha_f'], $_POST['costo'])){
			redirect('index.php/Welcome/page');
		}
		else{
			redirect('index.php/Welcome/page');
		}
	}

	public function eliminarViaje(){
		if(empty($_POST['id'])){
			$this->output
				->set_status_header(400)
				->set_output(json_encode(array('msg' => 'El id no puede estar Vacio')));
		}
		else{
			$this->load->model('Models');
			if($this->Models->deleteViaje($_POST['id'])){
				$this->output->set_status_header(200);
			}
			else{
				$this->output
				->set_status_header(401)
				->set_output(json_encode(array('msg' => 'El Registro no existe')));
			}

		}
	}
	public function eliminarDestino(){
		if(empty($_POST['id'])){
			$this->output
				->set_status_header(400)
				->set_output(json_encode(array('msg' => 'El id no puede estar Vacio')));
		}
		else{
			$this->load->model('Models');
			if($this->Models->deleteDestino($_POST['id'])){
				$this->output->set_status_header(200);
			}
			else{
				$this->output
				->set_status_header(401)
				->set_output(json_encode(array('msg' => 'El Registro no existe')));
			}

		}
	}
	public function editar($id = 0){
		$id = $id;
		if($this->session->userdata('is_logged')){
			$this->load->model('Models');
			$query = $this->Models->getViaje($id);
			if(isset($query)){
				$dato['dashboard'] = "active";
				$dato['content'] = "edit";
				$dato['destinos'] = $this->Models->getDestino();
				$dato['registro'] = $query;
				$this->load->view('templates/dashboard', $dato);
			}			
			
		}
		else{
			show_404();
		}
	}

	public function editarDestinos($id = 0){
		$id = $id;
		if($this->session->userdata('is_logged')){
			$this->load->model('Models');
			$query = $this->Models->getDestinoid($id);
			if(isset($query)){
				$dato['destino'] = "active";
				$dato['content'] = "edit_destino";
				$dato['destinos'] = $this->Models->getDestino();
				$dato['registro'] = $query;
				$this->load->view('templates/dashboard', $dato);
			}			
			
		}
		else{
			show_404();
		}
	}

	public function updateViaje(){
		$this->load->model('Models');
		if($this->Models->updateViaje($_POST['id'], $_POST['titulo'], $_POST['desc'], $_POST['destino'], $_POST['fecha_i'], $_POST['fecha_f'], $_POST['costo'])){
			redirect('index.php/Welcome/page');
		}
		else{
			redirect('index.php/Welcome/page');
		}
	}

	public function updateDestino(){
		$this->load->model('Models');
		if($this->Models->updateDestino($_POST['id'], $_POST['titulo'])){
			redirect('index.php/Welcome/destinos');
		}
		else{
			redirect('index.php/Welcome/page');
		}
	}
}
