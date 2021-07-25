<?php
class Tmodel extends CI_Model {

    
	public function __construct(){
        parent::__construct();
    }

    public function getTransportes(){
        $this->db->select('*');
        $this->db->order_by('nombre_t');
        $query = $this->db->get('transporte');
        if($query->num_rows() > 0){
            return $query;
        }
        else{
            return false;
        }
    }

    public function addTransporte($nombre,$costo,$marca,$matricula){
        $data=array(
            'nombre_t' => $nombre,
            'costo_dia' => $costo,
            'marca' => $marca,
            'matricula' => $matricula
        );
        $this->db->insert('transporte',$data);
        return true;
    }

    public function getTransporte($id){
        $this->db->select('*');
        $this->db->where('idtransporte',$id);
        $this->db->order_by('nombre_t');
        $query = $this->db->get('transporte');
        if($query->num_rows() > 0){
            return $query->row();
        }
        else{
            return false;
        }
    }
    public function updateTransporte($id,$nombre,$costo,$marca,$matricula){
            $data = array(
                'nombre_t' => $nombre,
                'costo_dia' => $costo,
                'marca' => $marca,
                'matricula' => $matricula
            );
            $this->db->where('idtransporte', $id);
            $this->db->update('transporte', $data);
            return true;
    }


    public function deleteTransporte($id){
        $this->db->where('idtransporte', $id);
        $query = $this->db->get('transporte');
        if($query->num_rows()>0){
            $this->db->delete('transporte', array('idtransporte' => $id));
            return true;
        }
        else{
            return false;
        }   
    }
}