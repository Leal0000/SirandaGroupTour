<?php
class Models extends CI_Model {

    
	public function __construct(){
        parent::__construct();
    }


    public function register($name, $last_name, $email, $password){
        $data=array(
        'nombre'=>$name,
        'apellido'=>$last_name,
        'correo'=>$email,
        'password'=>$password
        );
        $this->db->insert('users_travel',$data);
         return true;
    }

    public function login($email, $password)
    {
        $this->db->where('correo', $email);
        $this->db->where('password', $password);
        $q = $this->db->get('users_travel');
        if($q->num_rows() > 0){
            return true;
        }
        else
        {
            return false;
        }
    }


    public function datos(){
        $this->db->join('destinos', 'destinos.iddestinos=viajes.destino', 'left');
        $q = $this->db->get('viajes');
        if($q->num_rows()>0){
             return $q;
        }
        else{
            return false;
        }
       
    }

    public function agregar($titulo, $descripcion, $destino, $fecha_inicio, $fecha_final, $costo){
        date_default_timezone_set('America/Mexico_City');
        $diff = abs(strtotime($fecha_final) - strtotime($fecha_inicio));
        $dias = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
        if($dias > 0){
            $status = true;
        }
        else{
            $status = false;
        }
        $data = array(
            'titulo' => $titulo, 
            'descripcion' => $descripcion,
            'destino' => $destino,
            'fecha_inicio' => $fecha_inicio,
            'fecha_finaL' => $fecha_final,
            'costo' => $costo,
            'status' => $status,
            'dias' => $dias
        );
        $this->db->insert('viajes', $data);
        return true;
    }

    public function add_destino($nombre){
        $data = array(
            'nombre_destino' => $nombre, 
        );
        $this->db->insert('destinos', $data);
        return true;
    }

    public function getUser($email){
        $this->db->where('correo', $email);
        $this->db->limit('1');
        $query = $this->db->get('users_travel');
        if($query->num_rows()>0){
            return $query->row();
        }
        else{
            return false;
        }
    }

    public function deleteViaje($id){
        $this->db->where('idviajes', $id);
        $query = $this->db->get('viajes');
        if($query->num_rows()>0){
            $this->db->delete('viajes', array('idviajes' => $id));
            return true;
        }
        else{
            return false;
        }
    }

    public function deleteDestino($id){
        $this->db->where('iddestinos', $id);
        $query = $this->db->get('destinos');
        if($query->num_rows()>0){
            $this->db->delete('destinos', array('iddestinos' => $id));
            return true;
        }
        else{
            return false;
        }
    }

    public function getUserData($id){
        $this->db->where('idusers_travel', $id);
        $query = $this->db->get('users_travel');
        if($query->num_rows() > 0){
            return $query;
        }
        else{
            return false;
        }
    }


    public function getDestino(){
        $this->db->select('*');
        $this->db->order_by('nombre_destino');
        $query = $this->db->get('destinos');
        if($query->num_rows() > 0){
            return $query;
        }
        else{
            return false;
        }
    }


	public function getDestinoid($id){
		$this->db->where('iddestinos', $id);
		$query = $this->db->get('destinos');
		if($query->num_rows() > 0){
			return $query->row();
        }
		else{
			return false;
        }
    }

    public function getViaje($id){
        $this->db->where('idviajes',$id);
        $this->db->limit('1');
        $query = $this->db->get('viajes');
        if($query->num_rows() > 0){
            return $query->row();
        }
        else{
            return false;
        }
    }

    public function updateViaje($id, $titulo, $descripcion, $destino, $fecha_inicio, $fecha_final, $costo){

        $diff = abs(strtotime($fecha_final) - strtotime($fecha_inicio));
        $dias = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
        if($dias > 0){
            $status = true;
        }
        else{

            $status = false;
        }
        $data = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'destino' => $destino,
            'fecha_inicio' => $fecha_inicio,
            'fecha_finaL' => $fecha_final,
            'costo' => $costo,
            'status' => $status,
            'dias' => $dias
        );
        $this->db->where('idviajes', $id);
        $this->db->update('viajes', $data);
        return true;
    }

    public function updateDestino($id, $nombre){
        $data = array(
            'nombre_destino' => $nombre,
        );
        $this->db->where('iddestinos', $id);
        $this->db->update('destinos', $data);
        return true;

    }

}