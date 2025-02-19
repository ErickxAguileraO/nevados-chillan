<?php if ( ! defined('BASEPATH')) exit('No puede acceder a este archivo');

class Asuntos_contacto extends CI_Controller {
	    
	private $modulo = 32;
    
	function __construct(){
		parent::__construct();
	}
	
	public function index(){
        
		#Title
		$this->layout->title('Asuntos de Contactos');
		
        #js
        $this->layout->js('/js/sistema/configuracion/asuntos-contacto/index.js');
        
        $where = $and = "";
        $url = "";
        
        if(count($_GET) > 0)
            $url = '?'.http_build_query($_GET, '', "&");
        
		$config['uri_segment'] = 3;
		$config['base_url'] = '/configuracion/asuntos-contacto/';
		$config['per_page'] = 20;
		$config['total_rows'] = count($this->ws->listar($this->modulo,$where));
        $config['suffix'] = '/'.$url;
        $config['first_url'] = $config['base_url'].$url;
		$this->pagination->initialize($config);
        
        #obtiene el numero de pagina
		$pagina = ($this->uri->segment($config['uri_segment']))?$this->uri->segment($config['uri_segment'])-1:0;

		#contenido
        $this->ws->order("asuc_orden ASC");
        $this->ws->limit($config['per_page'], ($config['per_page'] * $pagina));
		$contenido["asuntos"] = $this->ws->listar($this->modulo,$where);
        $contenido['pagination'] = $this->pagination->create_links();
        
		#Nav
		$this->layout->nav(array("Asuntos de Contactos" => '/'));
		
		#view
		$this->layout->view('asuntos-contacto/index', $contenido);
	}
	
	public function agregar(){
        
        if($this->input->post()){
            
			#validaciones
			$this->form_validation->set_rules('nombre','Nombre','required');
			$this->form_validation->set_rules('email_destino','Email Destino','valid_email');
			
            $this->form_validation->set_message('required', '* %s es obligatorio');
            $this->form_validation->set_message('valid_email', '* %s no es válido');
            $this->form_validation->set_error_delimiters('<div>','</div>');
            
            $error = "";
            if(!$this->form_validation->run())
				$error .= validation_errors();
            
            if($error){
                echo json_encode(array("result"=>false,"msg"=>$error));
                exit;
            }
            
            $datos['asuc_nombre'] = $this->input->post('nombre');
            $datos['asuc_email_destino'] = $this->input->post('email_destino');
            $datos['asuc_orden'] = $this->input->post('orden');
            $datos['asuc_url'] = slug($this->input->post('nombre'));
            $datos['asuc_estado'] = $this->input->post('estado');
            
            $this->ws->insertar($this->modulo,$datos);
            
            echo json_encode(array("result"=>true));
            
        }
        else{

    		#Title
    		$this->layout->title('Agregar Asunto de Contactos');
            
            #js
            $this->layout->js('/js/sistema/configuracion/asuntos-contacto/agregar.js');
    		
    		#Nav
    		$this->layout->nav(array("Asuntos de Contactos" => '/configuracion/asuntos-contacto/', "Agregar Asunto de Contactos" => "/"));
    		
    		#view
    		$this->layout->view('asuntos-contacto/agregar');
        }
	}
    
    public function editar($codigo){
        
        if($this->input->post()){
            
			#validaciones
			$this->form_validation->set_rules('nombre','Nombre','required');
            $this->form_validation->set_rules('email_destino','Email Destino','valid_email');
			
            $this->form_validation->set_message('required', '* %s es obligatorio');
            $this->form_validation->set_error_delimiters('<div>','</div>');
            
            $error = "";
            if(!$this->form_validation->run())
				$error .= validation_errors();
            
            if($error){
                echo json_encode(array("result"=>false,"msg"=>$error));
                exit;
            }
            
            $datos['asuc_nombre'] = $this->input->post('nombre');
            $datos['asuc_email_destino'] = $this->input->post('email_destino');
            $datos['asuc_orden'] = $this->input->post('orden');
            $datos['asuc_url'] = slug($this->input->post('nombre'));
            $datos['asuc_estado'] = $this->input->post('estado');
            
            $this->ws->actualizar($this->modulo,$datos,"asuc_codigo = $codigo");
            
            echo json_encode(array("result"=>true));
            
        }
        else{
            
            #registro
            if($contenido['asunto'] = $asunto = $this->ws->obtener($this->modulo,"asuc_codigo = '$codigo'"));
            else show_error('');
            
    		#Title
    		$this->layout->title('Editar Asunto de Contactos');
            
            #js
            $this->layout->js('/js/sistema/configuracion/asuntos-contacto/editar.js');
    		
    		#Nav
    		$this->layout->nav(array("Asuntos de Contactos" => '/configuracion/asuntos-contacto/', "Editar Asunto de Contactos" => "/"));
    		
    		#view
    		$this->layout->view('asuntos-contacto/editar',$contenido);
        }
	}
    
    public function eliminar() {
		try {
			$this->ws->eliminar($this->modulo, "asuc_codigo = {$this->input->post('codigo')}");
			echo json_encode(array("result" => true));
		} catch (Exception $e) {
			echo json_encode(array("result" => false, "msg" => "Ha ocurrido un error inesperado. Por favor, int�ntelo nuevamente."));
		}
    }
}