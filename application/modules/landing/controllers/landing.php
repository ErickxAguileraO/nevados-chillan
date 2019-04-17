<?php if ( ! defined('BASEPATH')) exit('No puede acceder a este archivo');

class Landing extends CI_Controller {
    private $modulo_landing = 65;
    private $modulo_landing_galeria = 68;
    private $modulo_contacto = 67;
	function __construct(){

		parent::__construct();

		#current
		$this->layout->current = 6;
	}

	public function index() {
		#title
		$this->layout->title('Noticias');

		$this->layout->view('indexx');
	}
    
    public function envio(){     
      if($this->input->post()){
        #validaciones
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('telefono', 'Tel&eacute;fono', 'required');
        $this->form_validation->set_rules('email', 'Correo', 'required');
        $this->form_validation->set_rules('mensaje', 'Mensaje', 'required');
        $this->form_validation->set_rules('landing', 'Landing', 'required');
    
    
        $this->form_validation->set_message('required', '* %s es obligatorio');
        $this->form_validation->set_error_delimiters('<div>','</div>');
    
        if(!$this->form_validation->run()){
          echo json_encode(array("result"=>false,"msg"=>validation_errors()));
          exit;
        }
        $data['cont_nombre'] = $this->input->post('nombre');
        $data['cont_telefono'] = $this->input->post('telefono');
        $data['cont_correo'] = $this->input->post('email');
        $data['cont_fecha'] = date('Y-m-d');
        $data['cont_mensaje'] = $this->input->post('mensaje');
        $data['cont_landing'] = $this->input->post('landing');
        
        if($this->ws->insertar($this->modulo_contacto,$data)){
            echo json_encode(array("result"=>true)); exit;
        }else{
          echo json_encode(array("result"=>false,"msg"=>"Problemas al env&iacute;ar el mensaje, intentalo m&acute;s tarde"));
        }
      }else {
        echo json_encode(array("result"=>false,"msg"=>"Problemas al env&iacute;ar el mensaje, intentalo m&acute;s tarde"));
      }
    
    }

	public function detalle($codigo) {
	    //$this->layout->css('/css/estilos-landing.css');
        //$this->layout->css('/css/venobox/venobox.css');
        $obj = new stdClass();
        
        $where = "lan_url = '$codigo'";
        $obj = $this->ws->obtener($this->modulo_landing, $where);
        
   		#Venobox
        //$this->layput->js('js/sistema/landing/detalle.js');
        
        $where = "land_landing = ".$obj->codigo;
        $obj->galeria = $this->ws->listar($this->modulo_landing_galeria, $where);
        
        //print_array($obj);
        $data['landing'] = $obj;

		$this->load->view('detalle', $data);

	}
}
