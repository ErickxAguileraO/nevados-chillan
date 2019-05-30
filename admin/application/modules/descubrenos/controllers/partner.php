<?php if ( ! defined('BASEPATH')) exit('No puede acceder a este archivo');

class partner extends CI_Controller {
	    
	private $modulo = 74;
    
	function __construct(){
		parent::__construct();
	}
    
   
	public function index(){
        
		#Title
		$this->layout->title('Partner');
		
        #js
        $this->layout->js('/js/sistema/descubrenos/partner/index.js');
        
        $where = $and = "";
        $url = "";
        
        if(count($_GET) > 0)
            $url = '?'.http_build_query($_GET, '', "&");
        
		$config['uri_segment'] = 3;
		$config['base_url'] = '/descubrenos/partner/';
		$config['per_page'] = 20;
		$config['total_rows'] = count($this->ws->listar($this->modulo,$where));
        $config['suffix'] = '/'.$url;
        $config['first_url'] = $config['base_url'].$url;
		$this->pagination->initialize($config);
        
        #obtiene el numero de pagina
		$pagina = ($this->uri->segment($config['uri_segment']))?$this->uri->segment($config['uri_segment'])-1:0;

		#contenido
        $this->ws->order(array("par_orden ASC"));
        $this->ws->limit($config['per_page'], ($config['per_page'] * $pagina));
		$contenido["partner"] = $this->ws->listar($this->modulo,$where);
        $contenido['pagination'] = $this->pagination->create_links();
        
		#Nav
		$this->layout->nav(array("partner" => '/'));
		
		#view
		$this->layout->view('partner/index', $contenido);
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

            #subir imagen
            if($_FILES['imagen']['name']){
                
                $upload_dir = '/imagenes/modulos/descubrenos/partner/';
                creaDirectoriosUrl($upload_dir);
                
                $extension = array_pop(explode('.',$_FILES['imagen']['name']));
                $nombre = slug($this->input->post('nombre')).time().'.'.$extension;
                
                $configU['upload_path'] = $_SERVER['DOCUMENT_ROOT'].$upload_dir;
        		$configU['allowed_types'] = 'png';
                $configU['file_name'] = $nombre;
        		#$configU['max_size']	= '100';
                $config['max_width']  = '130';
                $config['max_height']  = '100';
        		$this->load->library('upload', $configU);
                
        		if(!$this->upload->do_upload('imagen'))
        			#$error .= $this->upload->display_errors();
                    $error .= "<div>* Ha ocurrido un error al subir la imagen. Inténtelo nuevamente.</div>";
        		else{
                    
                    $datos['par_imagen_adjunta'] = $upload_dir.$nombre;
        		}
            }
            
            if($error){
                echo json_encode(array("result"=>false,"msg"=>$error));
                exit;
            }
            
            $datos['par_nombre'] = $this->input->post('nombre');
            $datos['par_url'] = slug($this->input->post('nombre'));
            $datos['par_orden'] = $this->input->post('orden');
            $datos['par_estado'] = $this->input->post('estado');
            
            $this->ws->insertar($this->modulo,$datos);
            
            echo json_encode(array("result"=>true));
            
        }
        else{

    		#Title
    		$this->layout->title('Agregar Auspiciador');
    		
            #js
            $this->layout->js('/js/sistema/descubrenos/partner/agregar.js');
            
    		#Nav
    		$this->layout->nav(array("partner" => '/descubrenos/partner/', "Agregar Auspiciador" => "/"));
    		
    		#view
    		$this->layout->view('partner/agregar');
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
            
            
            #subir imagen
            if($_FILES['imagen']['name']){
                $upload_dir = '/imagenes/modulos/descubrenos/partner/';
                creaDirectoriosUrl($upload_dir);
                
                $extension = array_pop(explode('.',$_FILES['imagen']['name']));
                $nombre = slug($this->input->post('titulo')).time().'.'.$extension;
                
                $configU['upload_path'] = $_SERVER['DOCUMENT_ROOT'].$upload_dir;
        		$configU['allowed_types'] = 'png';
                $configU['file_name'] = $nombre;
        		#$configU['max_size']	= '100';
                $config['max_width']  = '130';
                $config['max_height']  = '100';
        		$this->load->library('upload', $configU);
                
        		if(!$this->upload->do_upload('imagen'))
        			#$error .= $this->upload->display_errors();
                    $error .= "<div>* Ha ocurrido un error al subir la imagen. Inténtelo nuevamente.</div>";
        		else{
                    
                    $datos['par_imagen_adjunta'] = $upload_dir.$nombre;
        		}
            }
            
            if($error){
                echo json_encode(array("result"=>false,"msg"=>$error));
                exit;
            }
            
            $datos['par_nombre'] = $this->input->post('nombre');
            $datos['par_url'] = slug($this->input->post('nombre'));
            $datos['par_orden'] = $this->input->post('orden');
            $datos['par_estado'] = $this->input->post('estado');

            $this->ws->actualizar($this->modulo,$datos,"par_codigo = $codigo");
            
            echo json_encode(array("result"=>true));
            
        }
        else{
            
            #registro
            if($contenido['auspiciador'] = $auspiciador = $this->ws->obtener($this->modulo,"par_codigo = '$codigo'"));
            else show_error('');
        
    		#Title
    		$this->layout->title('Editar Auspiciador');
            
            #js
            $this->layout->js('/js/sistema/descubrenos/partner/editar.js');
            
    		#Nav
    		$this->layout->nav(array("partner" => '/descubrenos/partner/', "Editar Auspiciador" => "/"));
    		
    		#view
    		$this->layout->view('partner/editar',$contenido);
        }
	}
    
    public function eliminar() {
		try {
			$this->ws->eliminar($this->modulo, "par_codigo = {$this->input->post('codigo')}");
			echo json_encode(array("result" => true));
		} catch (Exception $e) {
			echo json_encode(array("result" => false, "msg" => "Ha ocurrido un error inesperado. Por favor, int�ntelo nuevamente."));
		}
    }
}