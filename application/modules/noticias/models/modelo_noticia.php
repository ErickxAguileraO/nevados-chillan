<?php
if (!defined ('BASEPATH')) exit ('no direct script acces allowed');
class Modelo_noticia extends CI_Model {
	var $url;
	var $titulo;
	var $resumen;
    var $detalle;
    var $fecha;
    private $prefijo = "/admin";
	
	function __construct() {
		parent::__construct();
	}

	public function total() {
		$this->db->where('n_estado = 1');
		return $this->db->count_all_results('np_noticias');
	}

	public function listar($pagina, $cantidad){
		$desde = ($pagina - 1) * $cantidad;

		$sql= $this->db->select('*')
					->from('np_noticias as n')
					->join('np_noticias_imagen as i', 'i.n_codigo = n.n_codigo and i.imagen_orden = 1', 'left')
					->where('n_estado = 1')
					->order_by('n_fecha desc, n.n_codigo desc')
					->limit($cantidad, $desde)
					->get();
		
		$resultado = $sql->result();
		
		$listado = array();
		
		foreach($resultado as $aux){
			$obj = new stdClass();
			$obj->url = "/noticias/".str_replace("-", "/", $aux->n_fecha)."/".$aux->n_url."/";
			$obj->titulo = $aux->n_titulo;
			$obj->fecha = fecha_real($aux->n_fecha);
			$obj->resumen = $aux->n_resumen;
			$obj->imagen = ($aux->imagen_ruta_galeria) ? $this->prefijo.$aux->imagen_ruta_galeria : "/imagenes/sitio/default_gallery_2.jpg";
			$listado[]=$obj;
		}  
		$sql->free_result();
		return $listado;
	}
	
	public function get($fecha, $url) {
		$sql = $this->db->select('*')
				->from('np_noticias')
				->where("n_fecha = '$fecha' and n_url = '$url' and n_estado = 1")
				->get();
			
		$aux = $sql->row();
		
		if($aux) {
			$obj = new stdClass();
			$obj->titulo = $aux->n_titulo;
			$obj->fecha = fecha_real($aux->n_fecha);
			$obj->resumen = $aux->n_resumen;
			$obj->detalle = $aux->n_detalle;
			$obj->imagenes = $this->imagenes($aux->n_codigo);
		} else {
			$obj = false;
		}
		return $obj;
		$sql->free_result();
	}
	
	public function imagenes($codigo) {
		$sql = $this->db->select('*')
				->from('np_noticias_imagen as i')
				->where('n_codigo = '.$codigo.' and imagen_estado = 1')
				->join('np_noticias_imagen_idioma as ii', 'ii.id_imagen = i.id_imagen', 'left')
				->order_by('imagen_orden asc')
				->get();
				
		$resultado = $sql->result();
		
		$listado = array();
		
		if(count($resultado) > 0) {
			foreach($resultado as $aux){
				$obj = new stdClass();
				$obj->ruta_galeria = $this->prefijo.$aux->imagen_ruta_galeria;
				$obj->ruta_interna = $this->prefijo.$aux->imagen_ruta_interna;
				$obj->ruta_grande = $this->prefijo.$aux->imagen_ruta_grande;
				$obj->descripcion = $aux->imagen_descripcion;
				$listado[] = $obj;
			}
			return $listado;
		} else {
			return false;
		}
	}
}   