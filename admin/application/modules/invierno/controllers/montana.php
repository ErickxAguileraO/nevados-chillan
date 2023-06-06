<?php if ( ! defined('BASEPATH')) exit('No puede acceder a este archivo');

class Montana extends CI_Controller 
{
	function __construct(){
		parent::__construct();
	}
	
	public function index(){
        
		#Title
		$this->layout->title('Montaña');

        #JS - Editor
        $this->layout->js('/js/jquery/ckeditor-standard/ckeditor.js');
        
        #js
        $this->layout->js('/js/sistema/invierno/montana/index.js');
        
		#contenido
        $contenido["montana"] = $this->ws->obtener(81, 'mon_codigo = (SELECT MAX(mon_codigo) FROM montana)');

		#Nav
		$this->layout->nav(array("Montaña" => '/'));
		
		#view
		$this->layout->view('montana/index', $contenido);
	}
	
	public function modificar()
    {
        if ($this->input->post()) {

            $error = "";
            if ($error) {
                echo json_encode(array("result" => false, "msg" => $error));
                exit;
            }

            $datos['mon_titulo'] = $this->input->post('titulo');
            $datos['mon_introduccion'] = $this->input->post('introduccion');
            $datos['mon_ultima_actualizacion'] = $this->input->post('ultimaActualizacion');

            if ($codigo = $this->input->post('codigo')) {
                $this->ws->actualizar(81, $datos, "mon_codigo = ". $codigo);
            } else {
                $this->ws->insertar(81, $datos);
            }

            echo json_encode(array("result" => true));
        }
	}
}