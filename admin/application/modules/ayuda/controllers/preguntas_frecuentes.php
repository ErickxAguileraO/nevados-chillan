<?php if ( ! defined('BASEPATH')) exit('No puede acceder a este archivo');

class Preguntas_frecuentes extends CI_Controller {
	    
	private $modulo = 57;
    public $img;
    
	function __construct(){
		parent::__construct();
	}
	
	public function index(){
        
		#Title
		$this->layout->title('Preguntas Frecuentes');
		
        #js
        $this->layout->js('/js/sistema/ayuda/preguntas-frecuentes/index.js');
        
        $where = $and = "";
        $url = "";
        
        if(count($_GET) > 0)
            $url = '?'.http_build_query($_GET, '', "&");
        
		$config['uri_segment'] = 3;
		$config['base_url'] = '/ayuda/preguntas-frecuentes/';
		$config['per_page'] = 20;
		$config['total_rows'] = count($this->ws->listar($this->modulo,$where));
        $config['suffix'] = '/'.$url;
        $config['first_url'] = $config['base_url'].$url;
		$this->pagination->initialize($config);
        
        #obtiene el numero de pagina
		$pagina = ($this->uri->segment($config['uri_segment']))?$this->uri->segment($config['uri_segment'])-1:0;

		#contenido
        $this->ws->order("prf_orden ASC");
        $this->ws->limit($config['per_page'], ($config['per_page'] * $pagina));
		$contenido["preguntas"] = $this->ws->listar($this->modulo,$where);
        $contenido['pagination'] = $this->pagination->create_links();
        
		#Nav
		$this->layout->nav(array("Preguntas Frecuentes" => '/'));
		
		#view
		$this->layout->view('preguntas-frecuentes/index', $contenido);
	}
	
	public function agregar(){
        
        if($this->input->post()){
            
			#validaciones
			$this->form_validation->set_rules('pregunta','Pregunta','required');
			
            $this->form_validation->set_message('required', '* %s es obligatorio');
            $this->form_validation->set_error_delimiters('<div>','</div>');
            
            $error = "";
            if(!$this->form_validation->run())
				$error .= validation_errors();
            
            if($error){
                echo json_encode(array("result"=>false,"msg"=>$error));
                exit;
            }
            
            $datos['prf_pregunta'] = $this->input->post('pregunta');
            $datos['prf_descripcion'] = $this->input->post('descripcion');
            $datos['prf_orden'] = $this->input->post('orden');
            $datos['prf_url'] = slug($this->input->post('pregunta'));
            $datos['prf_estado'] = $this->input->post('estado');
            
            $this->ws->insertar($this->modulo,$datos);
            
            echo json_encode(array("result"=>true));
            
        }
        else{

    		#Title
    		$this->layout->title('Agregar Pregunta Frecuente');
    		
            #JS - Editor
            $this->layout->js('/js/jquery/ckeditor-standard/ckeditor.js');
        
            #js
            $this->layout->js('/js/sistema/ayuda/preguntas-frecuentes/agregar.js');
    		
    		#Nav
    		$this->layout->nav(array("Preguntas Frecuentes" => '/ayuda/preguntas-frecuentes/', "Agregar Pregunta Frecuente" => "/"));
    		
    		#view
    		$this->layout->view('preguntas-frecuentes/agregar');
        }
	}
    
    public function editar($codigo){
        
        if($this->input->post()){
            
			#validaciones
			$this->form_validation->set_rules('pregunta','Pregunta','required');
			
            $this->form_validation->set_message('required', '* %s es obligatorio');
            $this->form_validation->set_error_delimiters('<div>','</div>');
            
            $error = "";
            if(!$this->form_validation->run())
				$error .= validation_errors();
            
            if($error){
                echo json_encode(array("result"=>false,"msg"=>$error));
                exit;
            }
            
            $datos['prf_pregunta'] = $this->input->post('pregunta');
            $datos['prf_descripcion'] = $this->input->post('descripcion');
            $datos['prf_orden'] = $this->input->post('orden');
            $datos['prf_url'] = slug($this->input->post('pregunta'));
            $datos['prf_estado'] = $this->input->post('estado');
            
            $this->ws->actualizar($this->modulo,$datos,"prf_codigo = $codigo");
            
            echo json_encode(array("result"=>true));
            
        }
        else{
            
            #registro
            if($contenido['pregunta'] = $preguta = $this->ws->obtener($this->modulo,"prf_codigo = '$codigo'"));
            else show_error('');
            
    		#Title
    		$this->layout->title('Editar Pregunta Frecuente');
    		
            #JS - Editor
            $this->layout->js('/js/jquery/ckeditor-standard/ckeditor.js');
        
            #js
            $this->layout->js('/js/sistema/ayuda/preguntas-frecuentes/editar.js');
    		
    		#Nav
    		$this->layout->nav(array("Preguntas Frecuentes" => '/ayuda/preguntas-frecuentes/', "Editar Pregunta Frecuente" => "/"));
    		
    		#view
    		$this->layout->view('preguntas-frecuentes/editar',$contenido);
        }
	}
    
    public function eliminar() {
		try {
			$this->ws->eliminar($this->modulo, "prf_codigo = {$this->input->post('codigo')}");
			echo json_encode(array("result" => true));
		} catch (Exception $e) {
			echo json_encode(array("result" => false, "msg" => "Ha ocurrido un error inesperado. Por favor, int�ntelo nuevamente."));
		}
    }
}