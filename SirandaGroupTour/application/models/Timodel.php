<?php
class Timodel extends CI_Model {

    
	public function __construct(){
        parent::__construct();
    }

    public function getTickets(){
        $this->db->order_by('idtickets');
        $this->db->join('transporte', 'transporte.idtransporte=tickets.tipo_transporte');
        $this->db->select('*');
        $query = $this->db->get('tickets');
        if($query->num_rows() > 0){
            return $query;
        }
        else{
            return false;
        }
    }

    public function addTicket($agencia,$folio,$inicio,$final,$paquetes,$transporte,$itinerario,$costo){
        date_default_timezone_set('America/Mexico_City');
        $diff = abs(strtotime($final) - strtotime($inicio));
        $dias = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
        $dias_total = $dias + 1;
        $total_dia = $costo * $paquetes;
        $total_net= $total_dia * $dias_total;
        $total_persona = $total_net / $paquetes;
        $data = array(
            'agencia' => $agencia,
            'folio' => $folio,
            'fecha_i' => $inicio,
            'fecha_f' => $final,
            'tipo_transporte' => $transporte,
            'dias' => $dias_total,
            'paquetes' => $paquetes,
            'itinerario' => $itinerario,
            'costodia' => $costo,
            'costo_persona' => $total_persona,
            'costo_dia_t' => $total_dia,
            'total_neto' => $total_net

        );
        $this->db->insert('tickets',$data);
        return true;
        
    }

    public function getTicket($id){
        $this->db->join('transporte', 'transporte.idtransporte=tickets.tipo_transporte');
        $this->db->select('*');
        $this->db->where('idtickets', $id);
        $query = $this->db->get('tickets');
        if($query->num_rows() > 0){
            return $query->row();
        }
        else{
            return false;
        }
    }


    public function updateTicket($id,$agencia,$folio,$inicio,$final,$paquetes,$transporte,$itinerario,$costo){
        date_default_timezone_set('America/Mexico_City');
        $diff = abs(strtotime($final) - strtotime($inicio));
        $dias = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
        $dias_total = $dias + 1;
        $total_dia = $costo * $paquetes;
        $total_net= $total_dia * $dias_total;
        $total_persona = $total_net / $paquetes;
        $data = array(
            'agencia' => $agencia,
            'folio' => $folio,
            'fecha_i' => $inicio,
            'fecha_f' => $final,
            'tipo_transporte' => $transporte,
            'dias' => $dias_total,
            'paquetes' => $paquetes,
            'itinerario' => $itinerario,
            'costodia' => $costo,
            'costo_persona' => $total_persona,
            'costo_dia_t' => $total_dia,
            'total_neto' => $total_net

        );
		$this->db->where('idtickets', $id);
		$this->db->update('tickets', $data);
		return true;
	}

    public function deleteTicket($id){
        $this->db->where('idtickets', $id);
        $query = $this->db->get('tickets');
        if($query->num_rows()>0){
            $this->db->delete('tickets', array('idtickets' => $id));
            return true;
        }
        else{
            return false;
        }
    }

}