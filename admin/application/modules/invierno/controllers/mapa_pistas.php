<?php if ( ! defined('BASEPATH')) exit('No puede acceder a este archivo');

class Mapa_pistas extends CI_Controller {
	    
	private $modulo = 45;
    public $img;
    
	function __construct(){
		parent::__construct();
        
        #medidas imagen
        $this->img->ancho_min_1 = 1170;
        $this->img->alto_min_1 = 0;
	}
	
	public function index(){
        
		#Title
		$this->layout->title('Mapa de Pistas');

        #JS - Editor
        $this->layout->js('/js/jquery/ckeditor-standard/ckeditor.js');
        
        #js
        $this->layout->js('/js/sistema/invierno/mapa-pistas/index.js');
        
		#contenido
        $contenido["encabezado"] = $informacion = $this->ws->obtener(80, "enc_seccion = 'mapa_pista'");

        // Listado de mapas
        $url = count($_GET) > 0 ? '?'.http_build_query($_GET, '', "&") : '';

		$config['uri_segment'] = 3;
		$config['base_url'] = '/invierno/mapa-pistas/';
		$config['per_page'] = 10;
		$config['total_rows'] = count($this->ws->listar(45));
        $config['suffix'] = '/'.$url;
        $config['first_url'] = $config['base_url'].$url;
		$this->pagination->initialize($config);
        
        $this->ws->order("map_codigo DESC");
        $pagina = ($this->uri->segment($config['uri_segment']))?$this->uri->segment($config['uri_segment'])-1:0;
        $this->ws->limit($config['per_page'], ($config['per_page'] * $pagina));

        $contenido["mapas"] = $this->ws->listar(45);
        $contenido['pagination'] = $this->pagination->create_links();
		#Nav
		$this->layout->nav(array("Mapa de Pistas" => '/'));
		
		#view
		$this->layout->view('mapa_pistas/index', $contenido);
	}
	
	public function agregar()
    {
        if ( $this->input->post() ) {
            
			#validaciones
			$this->form_validation->set_rules('nombre','Nombre','required');
			
            $this->form_validation->set_message('required', '* %s es obligatorio');
            $this->form_validation->set_error_delimiters('<div>','</div>');
            
            $error = "";
            if(!$this->form_validation->run())
				$error .= validation_errors();

            #subir imagen
            if($_FILES['imagen']['name']){
                
                $upload_dir = '/imagenes/modulos/invierno/mapa-pistas/';
                creaDirectoriosUrl($upload_dir);
                
                $extension = array_pop(explode('.',$_FILES['imagen']['name']));
                $nombre_grande = slug($this->input->post('titulo')).time().'-grande.'.$extension;
                
                $configU['upload_path'] = $_SERVER['DOCUMENT_ROOT'].$upload_dir;
        		$configU['allowed_types'] = 'jpeg|jpg|png';
                $configU['file_name'] = $nombre_grande;
        		#$configU['max_size']	= '100';
        		$this->load->library('upload', $configU);
                
        		if(!$this->upload->do_upload('imagen'))
        			#$error .= $this->upload->display_errors();
                    $error .= "<div>* Ha ocurrido un error al subir la imagen. Inténtelo nuevamente.</div>";
        		else{
                    #datos de la imagen cargada
                    $dataUpload = $this->upload->data();
                    
                    #si la imagen es mayor 1170 se ajusta
                    if($dataUpload['image_width'] >= $this->img->ancho_min_1){
                        
                        #si el alto no esta definido se mantiene el actual
                        $this->img->alto_min_1 = ($this->img->alto_min_1)?$this->img->alto_min_1:$dataUpload['image_height'];
                        
                        $configR['image_library'] = 'gd2';
                        $configR['source_image']	= $_SERVER['DOCUMENT_ROOT'].$upload_dir.$nombre_grande;
                        $configR['maintain_ratio'] = TRUE;
                        $configR['master_dim'] = 'auto';
                        $configR['width'] = $this->img->ancho_min_1;
                        $configR['height'] = $this->img->alto_min_1;
                        $this->load->library('image_lib', $configR); 
                        
                        #procesa la imagen
                        if(!$this->image_lib->resize())
                            #$this->image_lib->display_errors();
                            $error .= "<div>* Ha ocurrido un error al subir la imagen. Inténtelo nuevamente.</div>";
                    }
                    else{
                        $error .= "<div>* La imagen debe tener un tamaño mínimo de ".$this->img->ancho_min_1."px de ancho</div>";
                    }
                    
                    #se guarda la imagen en la db
                    $datos['map_imagen_adjunta'] = $upload_dir.$nombre_grande;
        		}
            }

            if(isset($_FILES['archivo']['name']) && $_FILES['archivo']['name']){
                if($archivo = $_FILES['archivo']){
                    $ruta = '/archivos/pdf/mapa-pista/';
                    crear_directorio($ruta);
                    
                    #libreria upload
                    $this->load->library('upload');
                    
                    $extension = array_pop(explode('.',$archivo['name']));
                    $file_name = 'mapa-pista-'.time().'.'.$extension;
                    
                    #config archivo
                    $config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].$ruta;
                    $config['allowed_types'] = '|pdf|';
                    #$config['max_size']	= '100';
                    $config['file_name'] = $file_name;
                    $this->upload->initialize($config);
                    
                    if(!$this->upload->do_upload('archivo'))
            		{
            			//$error .= $this->upload->display_errors();
            			$error .= "<div>* Ha ocurrido un error al subir el archivo. Compruebe que el tipo de archivo sea .pdf.</div>";
            		}
                    
                    
                    $datos['map_documento'] = $ruta.$file_name;
                }
            }
            
            if(!$this->form_validation->run()) {
                $error .= validation_errors();
            }
				
            if($error){
                echo json_encode(array("result"=>false,"msg"=>$error));
                exit;
            }
            
            $datos['map_nombre'] = $this->input->post('nombre');
            $datos['map_url'] = slug($this->input->post('nombre'));
            $datos['map_descripcion'] = $this->input->post('descripcion');
            $datos['map_estado'] = 1;
            
            $this->ws->insertar($this->modulo, $datos);
            
            echo json_encode(array("result"=>true));
            
        } else {
            $this->layout->title('Agregar mapa');
            $this->layout->js('/js/jquery/ckeditor-standard/ckeditor.js');
            $this->layout->js('/js/sistema/invierno/mapa-pistas/agregar.js');
            $this->layout->nav(array("Agregar mapa" => '/invierno/mapa-pistas/agregar', "Agregar mapa" => "/"));
		    $this->layout->view('mapa_pistas/agregar');
        }
	}

    public function editar($codigo)
    {
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
                
                $upload_dir = '/imagenes/modulos/invierno/mapa-pistas/';
                creaDirectoriosUrl($upload_dir);
                
                $extension = array_pop(explode('.',$_FILES['imagen']['name']));
                $nombre_grande = slug($this->input->post('titulo')).time().'-grande.'.$extension;
                
                $configU['upload_path'] = $_SERVER['DOCUMENT_ROOT'].$upload_dir;
        		$configU['allowed_types'] = 'jpeg|jpg|png';
                $configU['file_name'] = $nombre_grande;
        		#$configU['max_size']	= '100';
        		$this->load->library('upload', $configU);
                
        		if(!$this->upload->do_upload('imagen'))
        			#$error .= $this->upload->display_errors();
                    $error .= "<div>* Ha ocurrido un error al subir la imagen. Inténtelo nuevamente.</div>";
        		else{
                    #datos de la imagen cargada
                    $dataUpload = $this->upload->data();
                    
                    #si la imagen es mayor 1170 se ajusta
                    if($dataUpload['image_width'] >= $this->img->ancho_min_1){
                        
                        #si el alto no esta definido se mantiene el actual
                        $this->img->alto_min_1 = ($this->img->alto_min_1)?$this->img->alto_min_1:$dataUpload['image_height'];
                        
                        $configR['image_library'] = 'gd2';
                        $configR['source_image']	= $_SERVER['DOCUMENT_ROOT'].$upload_dir.$nombre_grande;
                        $configR['maintain_ratio'] = TRUE;
                        $configR['master_dim'] = 'auto';
                        $configR['width'] = $this->img->ancho_min_1;
                        $configR['height'] = $this->img->alto_min_1;
                        $this->load->library('image_lib', $configR); 
                        
                        #procesa la imagen
                        if(!$this->image_lib->resize())
                            #$this->image_lib->display_errors();
                            $error .= "<div>* Ha ocurrido un error al subir la imagen. Inténtelo nuevamente.</div>";
                    }
                    else{
                        $error .= "<div>* La imagen debe tener un tamaño mínimo de ".$this->img->ancho_min_1."px de ancho</div>";
                    }
                    
                    #se guarda la imagen en la db
                    $datos['map_imagen_adjunta'] = $upload_dir.$nombre_grande;
        		}
            }

            if(isset($_FILES['archivo']['name']) && $_FILES['archivo']['name']){
                if($archivo = $_FILES['archivo']){
                    $ruta = '/archivos/pdf/mapa-pista/';
                    crear_directorio($ruta);
                    
                    #libreria upload
                    $this->load->library('upload');
                    
                    $extension = array_pop(explode('.',$archivo['name']));
                    $file_name = 'mapa-pista-'.time().'.'.$extension;
                    
                    #config archivo
                    $config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].$ruta;
                    $config['allowed_types'] = '|pdf|';
                    #$config['max_size']	= '100';
                    $config['file_name'] = $file_name;
                    $this->upload->initialize($config);
                    
                    if(!$this->upload->do_upload('archivo'))
            		{
            			//$error .= $this->upload->display_errors();
            			$error .= "<div>* Ha ocurrido un error al subir el archivo. Compruebe que el tipo de archivo sea .pdf.</div>";
            		}
                    
                    
                    $datos['map_documento'] = $ruta.$file_name;
                }
            }
            
            if(!$this->form_validation->run()) {
                $error .= validation_errors();
            }
				
            if($error){
                echo json_encode(array("result"=>false,"msg"=>$error));
                exit;
            }
            
            $datos['map_nombre'] = $this->input->post('nombre');
            $datos['map_url'] = slug($this->input->post('nombre'));
            $datos['map_descripcion'] = $this->input->post('descripcion');
            $datos['map_estado'] = 1;
            
            $this->ws->actualizar($this->modulo, $datos, "map_codigo = $codigo");
            
            echo json_encode(array("result"=>true));
            
        } else {
            $contenido['mapa'] = $this->ws->obtener($this->modulo, "map_codigo = $codigo");
            
            $this->layout->title('Modificar mapa');
            $this->layout->js('/js/jquery/ckeditor-standard/ckeditor.js');
            $this->layout->js('/js/sistema/invierno/mapa-pistas/editar.js');
            $this->layout->nav(array("Mapas de pista" => '/invierno/mapa-pistas/', "Modificar mapa" => "/"));
		    $this->layout->view('mapa_pistas/editar', $contenido);
        }
    }

    public function descargarDocumento($codigo) 
    {
        $mapa = $this->ws->obtener($this->modulo,"map_codigo = $codigo");
        
        $this->load->helper('download');
        $nombreDocumento = basename($mapa->documento);
        $data = file_get_contents($_SERVER['DOCUMENT_ROOT'] . $mapa->documento);
        
        force_download($nombreDocumento, $data);
    }

    public function eliminarDocumento()
    {
        $codigo = $this->input->post('codigo');
        $mapa = $this->ws->obtener($this->modulo,"map_codigo = $codigo");
        
        if ( file_exists($_SERVER['DOCUMENT_ROOT'] . $mapa->documento) ) {
            unlink($_SERVER['DOCUMENT_ROOT'] . $mapa->documento);
        }
            
        $this->ws->actualizar($this->modulo, array("map_documento" => ""), "map_codigo = $codigo");
        
        echo json_encode(array("result" => true));
    }

    public function eliminarImagen()
    {
        $codigo = $this->input->post('codigo');
        $mapa = $this->ws->obtener($this->modulo,"map_codigo = $codigo");
        
        if ( file_exists($_SERVER['DOCUMENT_ROOT'] . $mapa->imagen_adjunta) ) {
            unlink($_SERVER['DOCUMENT_ROOT'] . $mapa->imagen_adjunta);
        }
            
        $this->ws->actualizar($this->modulo, array("map_imagen_adjunta" => ""), "map_codigo = $codigo");
        
        echo json_encode(array("result" => true));
    }

    public function eliminar() {
		try {
			$this->ws->eliminar($this->modulo, "map_codigo = {$this->input->post('codigo')}");
			echo json_encode(array("result" => true));
		} catch (Exception $e) {
			echo json_encode(array("result" => false, "msg" => "Ha ocurrido un error inesperado. Por favor, inténtelo nuevamente."));
		}
    }
}