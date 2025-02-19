<?php if ( ! defined('BASEPATH')) exit('No puede acceder a este archivo');

class Servicios_complementarios extends CI_Controller {
	    
	private $modulo = 16, $modulo_servicio_seccion = 36;
    public $img;
    
	function __construct(){
		parent::__construct();
        
        #define el tamaño del contenedor en la vista
        $this->img->min_ancho_1 = 115;
        $this->img->min_alto_1 = 115;
        
        #define el tamaño de la imagen grande
        $this->img->max_ancho_1 = 115;
        $this->img->max_alto_1 = 115;
        
        #define el tamaño del recorte
        $this->img->recorte_ancho_1 = 115;
        $this->img->recorte_alto_1 = 115;
        
        $this->img->upload_dir = '/imagenes/modulos/servicios-complementarios/';
        
        #lib imagenes
        $this->load->model('inicio/imagen','objImagen');
	}
	
	public function index(){
        
		#Title
		$this->layout->title('Servicios Complementarios');
		
        #js
        $this->layout->js('/js/sistema/servicios-complementarios/index.js');
        
        $where = $and = "";
        $url = "";
        
        if(count($_GET) > 0)
            $url = '?'.http_build_query($_GET, '', "&");
        
		$config['uri_segment'] = 2;
		$config['base_url'] = '/servicios-complementarios/';
		$config['per_page'] = 20;
		$config['total_rows'] = count($this->ws->listar($this->modulo,$where));
        $config['suffix'] = '/'.$url;
        $config['first_url'] = $config['base_url'].$url;
		$this->pagination->initialize($config);
        
        #obtiene el numero de pagina
		$pagina = ($this->uri->segment($config['uri_segment']))?$this->uri->segment($config['uri_segment'])-1:0;

		#contenido
        $this->ws->order("sec_orden ASC");
        $this->ws->limit($config['per_page'], ($config['per_page'] * $pagina));
		$contenido["servicios_complementarios"] = $this->ws->listar($this->modulo,$where);
        $contenido['pagination'] = $this->pagination->create_links();
        
		#Nav
		$this->layout->nav(array("Servicios Complementarios" => '/'));
		
		#view
		$this->layout->view('/servicios_complementarios/index', $contenido);
	}
	
	public function agregar(){
	   
        if($this->input->post()){
            
			#validaciones
			$this->form_validation->set_rules('nombre','Nombre','required');
			
            $this->form_validation->set_message('required', '* %s es obligatorio');
            $this->form_validation->set_error_delimiters('<div>','</div>');
            
            $error = "";
            if(!$this->form_validation->run())
				$error .= validation_errors();
            
            if($error){
                echo json_encode(array("result"=>false,"msg"=>$error));
                exit;
            }
            
            $datos['sec_nombre'] = $this->input->post('nombre');
            $datos['sec_imagen_adjunta'] = $this->input->post('ruta_interna_1');
            $datos['sec_orden'] = $this->input->post('orden');
            $datos['sec_url'] = slug($this->input->post('nombre'));
            $datos['sec_estado'] = $this->input->post('estado');
            
            $id = $this->ws->insertar($this->modulo,$datos);
            $codigo = $id->sec_codigo;
            
            #asocia el servicio complementario con las secciones
            if($secciones = $this->input->post('secciones')){
                foreach($secciones as $aux){
                    if($aux){
                        unset($datos);
                        $datos['scts_servicio_complementario'] = $codigo;
                        $datos['scts_tipo_seccion'] = $aux;
                        
                        $this->ws->insertar($this->modulo_servicio_seccion,$datos);
                    }
                }
            }
            
            echo json_encode(array("result"=>true));
            
        }
        else{

    		#Title
    		$this->layout->title('Agregar Servicio Complementario');
    		
            #js Imagen Cropic
            $this->layout->js('/js/jquery/croppic/croppic.js');
            $this->layout->css('/js/jquery/croppic/croppic.css');
            $this->layout->js('/js/sistema/imagenes/simple.js');
            
            #js
            $this->layout->js('/js/sistema/servicios-complementarios/agregar.js');
    		
            #secciones
            $this->ws->order("cts_orden ASC");
            $contenido['tipo_secciones'] = $this->ws->listar(26,"cts_para_select = 1");
            
    		#Nav
    		$this->layout->nav(array("Servicios Complementarios" => '/servicios-complementarios/', "Agregar Servicio Complementario" => "/"));
    		
    		#view
    		$this->layout->view('/servicios_complementarios/agregar',$contenido);
        }
	}
    
    public function editar($codigo){
        
        if($this->input->post()){
            
			#validaciones
			$this->form_validation->set_rules('nombre','Nombre','required');
			
            $this->form_validation->set_message('required', '* %s es obligatorio');
            $this->form_validation->set_error_delimiters('<div>','</div>');
            
            $error = "";
            if(!$this->form_validation->run())
				$error .= validation_errors();
            
            if($error){
                echo json_encode(array("result"=>false,"msg"=>$error));
                exit;
            }
            
            $datos['sec_nombre'] = $this->input->post('nombre');
            $datos['sec_orden'] = $this->input->post('orden');
            $datos['sec_url'] = slug($this->input->post('nombre'));
            $datos['sec_estado'] = $this->input->post('estado');
            
            if($this->input->post('ruta_interna_1'))
                $datos['sec_imagen_adjunta'] = $this->input->post('ruta_interna_1');
            
            $this->ws->actualizar($this->modulo,$datos,"sec_codigo = $codigo");
            
            #asocia el servicio complementario con las secciones
            $this->ws->eliminar($this->modulo_servicio_seccion,"scts_servicio_complementario = $codigo");
            if($secciones = $this->input->post('secciones')){
                foreach($secciones as $aux){
                    if($aux){
                        unset($datos);
                        $datos['scts_servicio_complementario'] = $codigo;
                        $datos['scts_tipo_seccion'] = $aux;
                        
                        $this->ws->insertar($this->modulo_servicio_seccion,$datos);
                    }
                }
            }
            
            echo json_encode(array("result"=>true));
            
        }
        else{
            
            #registro
            if($contenido['servicio_complementario'] = $servicio_complementario = $this->ws->obtener($this->modulo,"sec_codigo = '$codigo'"));
            else show_error('');
            
            #obtiene las secciones
            $contenido['servicio_complementario']->secciones = $this->ws->listar($this->modulo_servicio_seccion,"scts_servicio_complementario = '$servicio_complementario->codigo'");
            
            #secciones
            $this->ws->order("cts_orden ASC");
            $contenido['tipo_secciones'] = $this->ws->listar(26,"cts_para_select = 1");
            
    		#Title
    		$this->layout->title('Editar Servicio Complementario');
    		
            #js Imagen Cropic
            $this->layout->js('/js/jquery/croppic/croppic.js');
            $this->layout->css('/js/jquery/croppic/croppic.css');
            $this->layout->js('/js/sistema/imagenes/simple.js');
            
            #js
            $this->layout->js('/js/sistema/servicios-complementarios/editar.js');
    		
    		#Nav
    		$this->layout->nav(array("Servicios Complementarios" => '/servicios-complementarios/', "Editar Servicio Complementario" => "/"));
    		
    		#view
    		$this->layout->view('/servicios_complementarios/editar',$contenido);
        }
	}
    
    public function eliminar() {
		try {
			$this->ws->eliminar($this->modulo, "sec_codigo = {$this->input->post('codigo')}");
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
            if($imagen = $this->ws->obtener($this->modulo,"sec_codigo = $codigo")){
                if(file_exists($_SERVER['DOCUMENT_ROOT'].$imagen->imagen_adjunta))
                    unlink($_SERVER['DOCUMENT_ROOT'].$imagen->imagen_adjunta);
                    
                $this->ws->actualizar($this->modulo,array("sec_imagen_adjunta"=>""),"sec_codigo = $codigo");
            }
        }
        
        echo json_encode(array("result"=>true));
    }
	
}