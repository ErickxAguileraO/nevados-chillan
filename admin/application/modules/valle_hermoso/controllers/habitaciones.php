<?php if ( ! defined('BASEPATH')) exit('No puede acceder a este archivo');

class Habitaciones extends CI_Controller {
	    
	private $modulo = 15, $modulo_imagenes = 22;
    public $img;
    
	function __construct(){
		parent::__construct();
        
        #define el tamaño del contenedor en la vista
        $this->img->min_ancho_1 = 260;
        $this->img->min_alto_1 = 188.3;
        
        #define el tamaño de la imagen grande
        $this->img->max_ancho_1 = 780;
        $this->img->max_alto_1 = 780;
        
        #define el tamaño del recorte
        $this->img->recorte_ancho_1 = 780;
        $this->img->recorte_alto_1 = 565;
        
        $this->img->upload_dir = '/imagenes/modulos/valle-hermoso/habitaciones/';
        
        #lib imagenes
        $this->load->model('inicio/imagen','objImagen');
	}
	
	public function index(){
        
		#Title
		$this->layout->title('Habitaciones');
		
        #js
        $this->layout->js('/js/sistema/valle-hermoso/habitaciones/index.js');
        
        $where = $and = "";
        $url = "";
        
        $where = "hab_tipo_seccion = 3";
        $and = " and ";
        
        if(count($_GET) > 0)
            $url = '?'.http_build_query($_GET, '', "&");
        
		$config['uri_segment'] = 3;
		$config['base_url'] = '/valle-hermoso/slider/';
		$config['per_page'] = 20;
		$config['total_rows'] = count($this->ws->listar($this->modulo,$where));
        $config['suffix'] = '/'.$url;
        $config['first_url'] = $config['base_url'].$url;
		$this->pagination->initialize($config);
        
        #obtiene el numero de pagina
		$pagina = ($this->uri->segment($config['uri_segment']))?$this->uri->segment($config['uri_segment'])-1:0;

		#contenido
        $this->ws->order("hab_orden ASC");
        $this->ws->limit($config['per_page'], ($config['per_page'] * $pagina));
		$contenido["habitaciones"] = $this->ws->listar($this->modulo,$where);
        $contenido['pagination'] = $this->pagination->create_links();
        
		#Nav
		$this->layout->nav(array("Habitaciones" => '/'));
		
		#view
		$this->layout->view('habitaciones/index', $contenido);
	}
	
	public function agregar(){
        
        if($this->input->post()){
            
			#validaciones
			$this->form_validation->set_rules('titulo','Título','required');
			
            $this->form_validation->set_message('required', '* %s es obligatorio');
            $this->form_validation->set_error_delimiters('<div>','</div>');
            
            $error = "";
            if(!$this->form_validation->run())
				$error .= validation_errors();
            
            if($error){
                echo json_encode(array("result"=>false,"msg"=>$error));
                exit;
            }
            
            $datos['hab_titulo'] = $this->input->post('titulo');
            $datos['hab_descripcion'] = $this->input->post('descripcion');
            $datos['hab_alineacion_galeria'] = $this->input->post('alineacion_galeria');
            $datos['hab_orden'] = $this->input->post('orden');
            $datos['hab_url'] = slug($this->input->post('titulo'));
            $datos['hab_estado'] = $this->input->post('estado');
            $datos['hab_tipo_seccion'] = 3;
            
            $id = $this->ws->insertar($this->modulo,$datos);
            $codigo = $id->hab_codigo;
            unset($datos);
            
            #galeria de imagenes
            $internas = $this->input->post('ruta_interna_1');
            $grandes = $this->input->post('ruta_grande_1');
            if($grandes){
                foreach($grandes as $k=>$aux){
                    if($aux){
                        $datos['habi_ruta_interna'] = $internas[$k];
                        $datos['habi_ruta_grande'] = $aux;
                        $datos['habi_habitacion'] = $codigo;
                        
                        $this->ws->insertar($this->modulo_imagenes,$datos);
                    }
                }
            }
            
            echo json_encode(array("result"=>true));
            
        }
        else{

    		#Title
    		$this->layout->title('Agregar Habitación');
    		
            #js - Imagen Cropic
            $this->layout->js('/js/jquery/croppic/croppic.js');
            $this->layout->css('/js/jquery/croppic/croppic.css');
            $this->layout->js('/js/sistema/imagenes/simple.js');
            
            #JS - Editor
    		$this->layout->js('/js/jquery/ckeditor-standard/ckeditor.js');
            
            #js
            $this->layout->js('/js/sistema/valle-hermoso/habitaciones/agregar.js');
    		
    		#Nav
    		$this->layout->nav(array("Habitaciones" => '/valle-hermoso/habitaciones/', "Agregar Habitación" => "/"));
    		
    		#view
    		$this->layout->view('habitaciones/agregar');
        }
	}
    
    public function editar($codigo){
        
        if($this->input->post()){
            
			#validaciones
			$this->form_validation->set_rules('titulo','Título','required');
			
            $this->form_validation->set_message('required', '* %s es obligatorio');
            $this->form_validation->set_error_delimiters('<div>','</div>');
            
            $error = "";
            if(!$this->form_validation->run())
				$error .= validation_errors();
            
            if($error){
                echo json_encode(array("result"=>false,"msg"=>$error));
                exit;
            }
            
            $datos['hab_titulo'] = $this->input->post('titulo');
            $datos['hab_descripcion'] = $this->input->post('descripcion');
            $datos['hab_alineacion_galeria'] = $this->input->post('alineacion_galeria');
            $datos['hab_orden'] = $this->input->post('orden');
            $datos['hab_url'] = slug($this->input->post('titulo'));
            $datos['hab_estado'] = $this->input->post('estado');
            
            $this->ws->actualizar($this->modulo,$datos,"hab_codigo = $codigo");
            unset($datos);
            
            #galeria de imagenes
            $internas = $this->input->post('ruta_interna_1');
            $grandes = $this->input->post('ruta_grande_1');
            if($grandes){
                foreach($grandes as $k=>$aux){
                    if($aux){
                        $datos['habi_ruta_interna'] = $internas[$k];
                        $datos['habi_ruta_grande'] = $aux;
                        $datos['habi_habitacion'] = $codigo;
                        
                        $this->ws->insertar($this->modulo_imagenes,$datos);
                    }
                }
            }
            
            echo json_encode(array("result"=>true));
            
        }
        else{
            
            #registro
            if($contenido['habitacion'] = $this->ws->obtener($this->modulo,"hab_codigo = '$codigo' and hab_tipo_seccion = 3"));
            else show_error('');
            
            $contenido['habitacion']->imagenes = $this->ws->listar($this->modulo_imagenes,"habi_habitacion = $codigo");
            
    		#Title
    		$this->layout->title('Editar Habitación');
    		
            #JS - Editor
    		$this->layout->js('/js/jquery/ckeditor-standard/ckeditor.js');
            
            #js Imagen Cropic
            $this->layout->js('/js/jquery/croppic/croppic.js');
            $this->layout->css('/js/jquery/croppic/croppic.css');
            $this->layout->js('/js/sistema/imagenes/simple.js');
            
            #js
            $this->layout->js('/js/sistema/valle-hermoso/habitaciones/editar.js');
    		
    		#Nav
    		$this->layout->nav(array("Habitaciones" => '/valle-hermoso/habitaciones/', "Editar Habitación" => "/"));
    		
    		#view
    		$this->layout->view('habitaciones/editar',$contenido);
        }
	}
    
    public function eliminar() {
		try {
			$this->ws->eliminar($this->modulo, "hab_codigo = {$this->input->post('codigo')}");
			echo json_encode(array("result" => true));
		} catch (Exception $e) {
			echo json_encode(array("result" => false, "msg" => "Ha ocurrido un error inesperado. Por favor, int�ntelo nuevamente."));
		}
    }
    
    
    
    ###IMAGENES
	public function cargar_imagen(){
        
        #se realiza la configuracion para cada imagen
        $this->img->id = $this->input->post('id');
        $this->objImagen->config($this->img);
        
        $response = $this->objImagen->cargar_imagen($_FILES);
        echo json_encode($response);
	}
	
	public function cortar_imagen(){
        
        #se realiza la configuracion para cada imagen
        $this->img->id = $this->input->post('id');
        $this->objImagen->config($this->img);
        
        $response =  $this->objImagen->cortar_imagen($_POST);
        echo json_encode($response);
	}
    
    public function eliminar_imagen(){
        if($ruta = $this->input->post('ruta_imagen')){
            if(file_exists($_SERVER['DOCUMENT_ROOT'].$ruta))
                unlink($_SERVER['DOCUMENT_ROOT'].$ruta);
        }
        
        if($codigo = $this->input->post('codigo')){
            if($imagen = $this->ws->obtener($this->modulo_imagenes,"habi_codigo = $codigo")){
                if(file_exists($_SERVER['DOCUMENT_ROOT'].$imagen->ruta_grande))
                    unlink($_SERVER['DOCUMENT_ROOT'].$imagen->ruta_grande);
                
                if(file_exists($_SERVER['DOCUMENT_ROOT'].$imagen->ruta_interna))
                    unlink($_SERVER['DOCUMENT_ROOT'].$imagen->ruta_interna);
                    
                $this->ws->eliminar($this->modulo_imagenes,"habi_codigo = $codigo");
            }
        }
        
        echo json_encode(array("result"=>true));
    }
	
}