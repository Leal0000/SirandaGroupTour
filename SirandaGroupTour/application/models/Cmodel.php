<?php
class Cmodel extends CI_Model {

    
	public function __construct(){
        parent::__construct();
    }


    public function getClientes(){
        $this->db->order_by('nombre_c');
        $this->db->select('*');
        $query = $this->db->get('clientes');
        if($query->num_rows() > 0){
            return $query;
        }
        else{
            return false;
        }
    }

    public function getCliente($id){
        $this->db->select('*');
        $this->db->where('idclientes', $id);
        $query = $this->db->get('clientes');
        if($query->num_rows() > 0){
            return $query->row();
        }
        else{
            return false;
        }
    }

    public function addClientes($nombre,$apellido,$correo,$telefono,$direccion){
        $data = array(
            'nombre_c' => $nombre,
            'apellidos' => $apellido,
            'correo' => $correo,
            'telefono' => $telefono,
            'direccion' => $direccion
        );
        $this->db->insert('clientes',$data);
    
    }


    public function updateClient($id,$nombre,$apellido,$correo,$telefono,$direccion){
		$data = array(
			'nombre_c' => $nombre, 
			'apellidos' => $apellido, 
			'correo' => $correo,
			'telefono' => $telefono,
			'direccion' => $direccion
		);
		$this->db->where('idclientes', $id);
		$this->db->update('clientes', $data);
		return true;
	}




    public function deleteClientes($id){
        $this->db->where('idclientes', $id);
        $query = $this->db->get('clientes');
        if($query->num_rows()>0){
            $this->db->delete('clientes', array('idclientes' => $id));
            return true;
        }
        else{
            return false;
        }   
    }











}