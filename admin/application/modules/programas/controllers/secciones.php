<?php if ( ! defined('BASEPATH')) exit('No puede acceder a este archivo');
#CAMBIO DE NOMBRE DE "PROGRAMAS" A "EXPERIENCIAS" HECHO EL 07/06/2021
class Secciones extends CI_Controller {
	    
    private $modulo = 19;
    private $modulo_imagenes = 76; //sec2_ 76 
    public $img;
    
	function __construct(){
		parent::__construct();
        

        
        
        #IMAGEN FONDO
        #define el tamaño del contenedor en la vista
        $this->img->min_ancho_1 = 395;
        $this->img->min_alto_1 = 137.5;
        
        #define el tamaño de la imagen grande
        $this->img->max_ancho_1 = 2370;
        $this->img->max_alto_1 = 2370;
        
        #define el tamaño del recorte
        $this->img->recorte_ancho_1 = 2370;
        $this->img->recorte_alto_1 = 525;
        
        
        
        #IMAGEN LATERAL
        #define el tamaño del contenedor en la vista
        $this->img->min_ancho_2 = 270;
        $this->img->min_alto_2 = 172.5;
        
          
        #define el tamaño de la imagen grande
        $this->img->max_ancho_2 = 810;
        $this->img->max_alto_2 = 810;
        
        #define el tamaño del recorte
        $this->img->recorte_ancho_2 = 810;
        $this->img->recorte_alto_2 = 517;
        
        $this->img->upload_dir = '/imagenes/modulos/programas/secciones/';
        
        #lib imagenes
        $this->load->model('inicio/imagen','objImagen');
	}
	
	public function index(){
        
		#Title
		$this->layout->title('Secciones');
		
        #js
        $this->layout->js('/js/sistema/programas/secciones/index.js');
        
        $where = $and = "";
        $url = "";
        
        $where = "secc_tipo_seccion = 99";
        $and = " and ";
        
        if(count($_GET) > 0)
            $url = '?'.http_build_query($_GET, '', "&");
        
		$config['uri_segment'] = 3;
		$config['base_url'] = '/programas/secciones/';
		$config['per_page'] = 20;
		$config['total_rows'] = count($this->ws->listar($this->modulo,$where));
        $config['suffix'] = '/'.$url;
        $config['first_url'] = $config['base_url'].$url;
		$this->pagination->initialize($config);
        
        #obtiene el numero de pagina
		$pagina = ($this->uri->segment($config['uri_segment']))?$this->uri->segment($config['uri_segment'])-1:0;

		#contenido
        $this->ws->order("secc_orden ASC");
        $this->ws->limit($config['per_page'], ($config['per_page'] * $pagina));
		$contenido["secciones"] = $this->ws->listar($this->modulo,$where);
        $contenido['pagination'] = $this->pagination->create_links();
        
		#Nav
		$this->layout->nav(array("Secciones" => '/'));
		
		#view
		$this->layout->view('secciones/index', $contenido);
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
            
            #agrega la imagen adjunta
            if($_FILES['imagen']['name']){
                $imagen = $_FILES['imagen'];
                $ruta = $this->img->upload_dir;
                crear_directorio($ruta);
                
                #config archivo
                $config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].$ruta;
                $config['allowed_types'] = 'jpg|jpeg|png';
                #$config['max_size']	= '100';
                $this->load->library('upload');
                
                $extension = array_pop(explode('.',$imagen['name']));
                
                                    $dif = time()+rand(1,543543453);
                $config['file_name'] = ($this->input->post('nombre_imagen_adjunta'))?slug($this->input->post('nombre_imagen_adjunta')).$dif.'.'.$extension  : 'imagen'.$dif.'.'.$extension;
                #$config['file_name'] = ($this->input->post('nombre_imagen_adjunta'))?slug($this->input->post('nombre_imagen_adjunta')).'.'.$extension:basename($imagen['name']);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('imagen'))
        		{
        			$error .= "<div>* Ha ocurrido un error al subir la imagen</div>";
        		}
                
                $datos['secc_imagen_adjunta'] = $ruta.$config['file_name'];
            }
            
            
              
             #agrega la imagen adjunta 2
            if($_FILES['imagen2']['name']){
                
                $imagen = $_FILES['imagen2'];
                $ruta = $this->img->upload_dir;
                crear_directorio($ruta);
                
                #config archivo
                $config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].$ruta;
                $config['allowed_types'] = 'jpg|jpeg|png';
                #$config['max_size']	= '100';
                $this->load->library('upload');
            
                
                $extension = array_pop(explode('.',$imagen['name']));
                                    $dif = time()+rand(1,543543453);
                $config['file_name'] = ($this->input->post('nombre_imagen_adjunta2'))?slug($this->input->post('nombre_imagen_adjunta2')).$dif.'.'.$extension  : 'imagen'.$dif.'.'.$extension;
                #$config['file_name'] = ($this->input->post('nombre_imagen_adjunta2'))?slug($this->input->post('nombre_imagen_adjunta2')).'.'.$extension:basename($imagen['name']);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('imagen2'))
        		{
        			$error .= "<div>* Ha ocurrido un error al subir la imagen</div>";
        		}
                
                $datos['secc_imagen_adjunta2'] = $ruta.$config['file_name'];
            }
              
            
            #agrega la imagen adjunta 3
            if($_FILES['imagen3']['name']){
                $imagen = $_FILES['imagen3'];
                $ruta = $this->img->upload_dir;
                crear_directorio($ruta);
                
                #config archivo
                $config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].$ruta;
                $config['allowed_types'] = 'jpg|jpeg|png';
                #$config['max_size']	= '100';
                $this->load->library('upload');
                
                $extension = array_pop(explode('.',$imagen['name']));
                
                                    $dif = time()+rand(1,543543453);
                $config['file_name'] = ($this->input->post('nombre_imagen_adjunta3'))?slug($this->input->post('nombre_imagen_adjunta3')).$dif.'.'.$extension  : 'imagen'.$dif.'.'.$extension;
                #$config['file_name'] = ($this->input->post('nombre_imagen_adjunta3'))?slug($this->input->post('nombre_imagen_adjunta3')).'.'.$extension:basename($imagen['name']);
                
                
                $this->upload->initialize($config);
                  
                if(!$this->upload->do_upload('imagen3'))
        		{
        			$error .= "<div>* Ha ocurrido un error al subir la imagen</div>";
        		}
                
                $datos['secc_imagen_adjunta3'] = $ruta.$config['file_name'];
            }
            
            
            if($error){
                echo json_encode(array("result"=>false,"msg"=>$error));
                exit;
            }
            
            $datos['secc_titulo'] = $this->input->post('titulo');
            $datos['secc_bajada'] = $this->input->post('bajada');
            $datos['secc_imagen_adjunta_fondo'] = $this->input->post('ruta_interna_1');
           // $datos['secc_imagen_adjunta_lateral'] = $this->input->post('ruta_interna_2');
            $datos['secc_link'] = $this->input->post('link');
            $datos['secc_nombre_link'] = $this->input->post('nombre_link');
            $datos['secc_link_2'] = $this->input->post('link_2');
            $datos['secc_nombre_link_2'] = $this->input->post('nombre_link_2');
            $datos['secc_link_3'] = $this->input->post('link_3');
            $datos['secc_nombre_link_3'] = $this->input->post('nombre_link_3');
            $datos['secc_nombre_imagen_adjunta'] = $this->input->post('nombre_imagen_adjunta');
            $datos['secc_posicion'] = $this->input->post('posicion');
            
            $datos['secc_embed_video'] = $this->input->post('embed_video');
                        
            $datos['secc_nombre_imagen_adjunta2'] = $this->input->post('nombre_imagen_adjunta2');
            $datos['secc_nombre_imagen_adjunta3'] = $this->input->post('nombre_imagen_adjunta3');
            
            
            $datos['secc_tipo_de_imagen'] = $this->input->post('tipo_imagen');
            $datos['secc_orden'] = $this->input->post('orden');
            $datos['secc_url'] = slug($this->input->post('titulo'));
            $datos['secc_estado'] = $this->input->post('estado');
            $datos['secc_tipo_seccion'] = 99;
            
            $id = $this->ws->insertar($this->modulo,$datos);

            $codigo = $id->secc_codigo;
            
            unset($datos);


            $internas = $this->input->post('ruta_interna_2');
            $grandes = $this->input->post('ruta_grande_2');
            
            if($grandes){
                foreach($grandes as $k=>$aux){
                    if($aux){
                        $datos['sec2_ruta_interna'] = $internas[$k];
                        $datos['sec2_ruta_grande'] = $aux;
                        $datos['sec2_seccion'] = $codigo;                
                        $this->ws->insertar(76,$datos);
                    }
                }
            }
            
            
            echo json_encode(array("result"=>true));
            
        }
        else{

    		#Title
    		$this->layout->title('Agregar Sección');
    		
            #js Imagen Cropic
            $this->layout->js('/js/jquery/croppic/croppic.js');
            $this->layout->css('/js/jquery/croppic/croppic.css');
            $this->layout->js('/js/sistema/imagenes/simple.js');
            
            #js
            $this->layout->js('/js/sistema/programas/secciones/agregar.js');         #js
            $this->layout->js('/js/jquery/ckeditor-standard/ckeditor.js');
    		
    		#Nav
    		$this->layout->nav(array("Secciones" => '/programas/secciones/', "Agregar Sección" => "/"));
    		
    		#view
    		$this->layout->view('secciones/agregar');
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
            
            #agrega la imagen adjunta
            if($_FILES['imagen']['name']){
                $imagen = $_FILES['imagen'];
                $ruta = $this->img->upload_dir;
                crear_directorio($ruta);
                
                #config archivo
                $config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].$ruta;
                $config['allowed_types'] = 'jpg|jpeg|png';
                #$config['max_size']	= '100';
                $this->load->library('upload');
                
                $extension = array_pop(explode('.',$imagen['name']));
                                    $dif = time()+rand(1,543543453);
                $config['file_name'] = ($this->input->post('nombre_imagen_adjunta'))?slug($this->input->post('nombre_imagen_adjunta')).$dif.'.'.$extension  : 'imagen'.$dif.'.'.$extension;
                #$config['file_name'] = ($this->input->post('nombre_imagen_adjunta'))?slug($this->input->post('nombre_imagen_adjunta')).'.'.$extension:basename($imagen['name']);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('imagen'))
        		{
        			$error .= "<div>* Ha ocurrido un error al subir la imagen</div>";
        		}
                
                $datos['secc_imagen_adjunta'] = $ruta.$config['file_name'];
            }
            
            
            
            #agrega la imagen adjunta 2
            if($_FILES['imagen2']['name']){
                
                $imagen = $_FILES['imagen2'];
                $ruta = $this->img->upload_dir;
                crear_directorio($ruta);
                
                #config archivo
                $config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].$ruta;
                $config['allowed_types'] = 'jpg|jpeg|png';
                #$config['max_size']	= '100';
                $this->load->library('upload');
            
                
                $extension = array_pop(explode('.',$imagen['name']));
                
                                    $dif = time()+rand(1,543543453);
                $config['file_name'] = ($this->input->post('nombre_imagen_adjunta2'))?slug($this->input->post('nombre_imagen_adjunta2')).$dif.'.'.$extension  : 'imagen'.$dif.'.'.$extension;
                
                #$config['file_name'] = ($this->input->post('nombre_imagen_adjunta2'))?slug($this->input->post('nombre_imagen_adjunta2')).'.'.$extension:basename($imagen['name']);
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('imagen2'))
        		{
        			$error .= "<div>* Ha ocurrido un error al subir la imagen</div>";
        		}
                
                $datos['secc_imagen_adjunta2'] = $ruta.$config['file_name'];
            }  
              
            
            #agrega la imagen adjunta 3
            if($_FILES['imagen3']['name']){
                $imagen = $_FILES['imagen3'];
                $ruta = $this->img->upload_dir;
                crear_directorio($ruta);
                
                #config archivo
                $config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].$ruta;
                $config['allowed_types'] = 'jpg|jpeg|png';
                #$config['max_size']	= '100';
                $this->load->library('upload');
                
                $extension = array_pop(explode('.',$imagen['name']));
                #$config['file_name'] = ($this->input->post('nombre_imagen_adjunta3'))?slug($this->input->post('nombre_imagen_adjunta3')).'.'.$extension:basename($imagen['name']);
                
                                    $dif = time()+rand(1,543543453);
                $config['file_name'] = ($this->input->post('nombre_imagen_adjunta3'))?slug($this->input->post('nombre_imagen_adjunta3')).$dif.'.'.$extension  : 'imagen'.$dif.'.'.$extension;
                
                
                $this->upload->initialize($config);
                  
                if(!$this->upload->do_upload('imagen3'))
        		{
        			$error .= "<div>* Ha ocurrido un error al subir la imagen</div>";
        		}
                
                $datos['secc_imagen_adjunta3'] = $ruta.$config['file_name'];
            }
            
            
            if($error){
                echo json_encode(array("result"=>false,"msg"=>$error));
                exit;
            }
            
            $datos['secc_titulo'] = $this->input->post('titulo');
            $datos['secc_bajada'] = $this->input->post('bajada');
            $datos['secc_link'] = $this->input->post('link');
            $datos['secc_nombre_link'] = $this->input->post('nombre_link');
            $datos['secc_link_2'] = $this->input->post('link_2');
            $datos['secc_nombre_link_2'] = $this->input->post('nombre_link_2');
            $datos['secc_link_3'] = $this->input->post('link_3');
            $datos['secc_nombre_link_3'] = $this->input->post('nombre_link_3');
            $datos['secc_nombre_imagen_adjunta'] = $this->input->post('nombre_imagen_adjunta');
            $datos['secc_posicion'] = $this->input->post('posicion');
            
            $datos['secc_embed_video'] = $this->input->post('embed_video');
                         
            $datos['secc_nombre_imagen_adjunta2'] = $this->input->post('nombre_imagen_adjunta2');
            $datos['secc_nombre_imagen_adjunta3'] = $this->input->post('nombre_imagen_adjunta3');
            
            
            $datos['secc_tipo_de_imagen'] = $this->input->post('tipo_imagen');
            $datos['secc_orden'] = $this->input->post('orden');
            $datos['secc_url'] = slug($this->input->post('titulo'));
            $datos['secc_estado'] = $this->input->post('estado');
            
            if($this->input->post('ruta_interna_1'))
                $datos['secc_imagen_adjunta_fondo'] = $this->input->post('ruta_interna_1');
           /* 
            if($this->input->post('ruta_interna_2'))
                $datos['secc_imagen_adjunta_lateral'] = $this->input->post('ruta_interna_2');*/
            
            $this->ws->actualizar($this->modulo,$datos,"secc_codigo = $codigo");

            unset($datos);


            $internas = $this->input->post('ruta_interna_2');
            $grandes = $this->input->post('ruta_grande_2');
            
            if($grandes){
                foreach($grandes as $k=>$aux){
                    if($aux){
                        $datos['sec2_ruta_interna'] = $internas[$k];
                        $datos['sec2_ruta_grande'] = $aux;
                        $datos['sec2_seccion'] = $codigo;                
                        $this->ws->insertar(76,$datos);
                    }
                }
            }
            
            echo json_encode(array("result"=>true));
            
        }
        else{
            
            #registro
            if($contenido['seccion'] = $seccion = $this->ws->obtener($this->modulo,"secc_codigo = '$codigo' and secc_tipo_seccion = 99"));
            else show_error('');
        

                       
            $contenido['seccion']->imagenes = $this->ws->listar($this->modulo_imagenes,"sec2_seccion = $codigo");

    		#Title
    		$this->layout->title('Editar Sección');
    		
            #js Imagen Cropic
            $this->layout->js('/js/jquery/croppic/croppic.js');
            $this->layout->css('/js/jquery/croppic/croppic.css');
            $this->layout->js('/js/sistema/imagenes/simple.js');
                     #js
           $this->layout->js('/js/jquery/ckeditor-standard/ckeditor.js');
            #js
            $this->layout->js('/js/sistema/programas/secciones/editar.js');
    		
    		#Nav
    		$this->layout->nav(array("Secciones" => '/programas/secciones/', "Editar Sección" => "/"));
    		
    		#view
    		$this->layout->view('secciones/editar',$contenido);
        }
	}
    
    public function eliminar() {
		try {
			$this->ws->eliminar($this->modulo, "secc_codigo = {$this->input->post('codigo')}");
			echo json_encode(array("result" => true));
		} catch (Exception $e) {
			echo json_encode(array("result" => false, "msg" => "Ha ocurrido un error inesperado. Por favor, int�ntelo nuevamente."));
		}
    }
    
    
    ### IMAGEN ADJUNTA
    public function eliminar_imagen_adjunta(){
        if($codigo = $this->input->post('codigo')){
            $imagen = $this->ws->obtener($this->modulo,"secc_codigo = $codigo");
            if(file_exists($_SERVER['DOCUMENT_ROOT'].$imagen->imagen_adjunta))
                unlink($_SERVER['DOCUMENT_ROOT'].$imagen->imagen_adjunta);
            
            $this->ws->actualizar($this->modulo,array("secc_imagen_adjunta"=>""),"secc_codigo = $codigo");
            
            echo json_encode(array("result"=>true));
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
            if($imagen = $this->ws->obtener($this->modulo,"secc_codigo = $codigo")){
                
                if($this->input->post('tipo') == 1){
                    $ruta_imagen = $imagen->imagen_adjunta_fondo;
                    $campo = "secc_imagen_adjunta_fondo";
                }
                else{
                    $ruta_imagen = $imagen->imagen_adjunta_lateral;
                    $campo = "secc_imagen_adjunta_lateral";
                }
                
                if(file_exists($_SERVER['DOCUMENT_ROOT'].$ruta_imagen))
                    unlink($_SERVER['DOCUMENT_ROOT'].$ruta_imagen);
                    
                $this->ws->actualizar($this->modulo,array($campo=>""),"secc_codigo = $codigo");
            }
        }
        if($imagen = $this->ws->obtener(76,"sec2_codigo = $codigo")){
                
                
            if(file_exists($_SERVER['DOCUMENT_ROOT'].$ruta_imagen))
                unlink($_SERVER['DOCUMENT_ROOT'].$ruta_imagen);

                $data = array(
                    "sec2_visible"=>0,
                );
                
            $this->ws->actualizar(76,$data, "sec2_codigo = $codigo");
        }
        
        echo json_encode(array("result"=>true, "reload" => true));
    }
	
}