<?php
if (!defined ('BASEPATH')) exit ('no direct script acces allowed');

class Tipo_asociacion_model extends CI_Model {
    
    private $tabla = 's_tipos_asociacion';
    function __construct(){
        parent::__construct();
    }

    public function obtener_por_codigo($codigo){
        return $this->obtener(array('tias_codigo'=>$codigo));
	}

	public function obtener($where){

		$sql= $this->db->select('*')
					->from($this->tabla)
					->where($where)
					->get();

		$aux = $sql->row();
		if($aux){
            $obj = new stdClass();
			$obj->codigo = $aux->tias_codigo;
			$obj->nombre = $aux->tias_nombre;
            
			return $obj;
		}
		return false;

	}
    
    public function listar($where = false, $limit = false, $offset = false){
        
        if($where)
            $this->db->where($where);
            
        if($limit && is_numeric($limit) && $offset && is_numeric($offset))
            $this->db->limit($limit,$offset);
        elseif($limit && is_numeric($limit))
            $this->db->limit($limit);
        
		$sql= $this->db->select('*')
					->from($this->tabla)
					->get();

		$result = $sql->result();
        $lista = array();
        
		foreach($result as $aux){
            $obj = new stdClass();
			$obj->codigo = $aux->tias_codigo;
			$obj->nombre = $aux->tias_nombre;
            
			$lista[] = $obj;
		}
		return $lista;

	}
}
