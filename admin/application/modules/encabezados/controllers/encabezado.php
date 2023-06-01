<?php if ( ! defined('BASEPATH')) exit('No puede acceder a este archivo');

class Encabezado extends CI_Controller {
	    
	private $modulo = 45;
    public $img;
    
	function __construct(){
		parent::__construct();
        
	}
	
	public function modificar(){
        
        if ($this->input->post()) {

            $error = "";
            if ($error) {
                echo json_encode(array("result" => false, "msg" => $error));
                exit;
            }

            $datos['enc_texto'] = $this->input->post('descripcion');
            $datos['enc_seccion'] = 'mapa_pista';

            if ($codigo = $this->input->post('codigo')) {
                $this->ws->actualizar(80, $datos, "enc_codigo = ". $codigo);
            } else {
                $this->ws->insertar(80, $datos);
            }
            echo json_encode(array("result" => true));

        }
	}
}