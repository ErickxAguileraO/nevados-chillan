<?php if ( ! defined('BASEPATH')) exit('No puede acceder a este archivo');

class programas extends CI_Controller {
	    
	private $modulo = 72;
    public $img;
    
	function __construct(){
		parent::__construct();
        
    
	}
	
	public function index(){
        
		#Title
		$this->layout->title('Programas');
		
        #js
        $this->layout->js('/js/sistema/verano/programas/index.js');
        
        $where = $and = "";
        $url = "";
       
        $and = " and ";
        
        if(count($_GET) > 0)
            $url = '?'.http_build_query($_GET, '', "&");
        
		$config['uri_segment'] = 3;
		$config['base_url'] = '/verano/programas/';
		$config['per_page'] = 20;
		$config['total_rows'] = count($this->ws->listar($this->modulo,"prog_tipo = 'verano'"));
        $config['suffix'] = '/'.$url;
        $config['first_url'] = $config['base_url'].$url;
		$this->pagination->initialize($config);
        
        #obtiene el numero de pagina
		$pagina = ($this->uri->segment($config['uri_segment']))?$this->uri->segment($config['uri_segment'])-1:0;

		#contenido
        $this->ws->order("prog_orden ASC");
        $this->ws->limit($config['per_page'], ($config['per_page'] * $pagina));
        $contenido["programas"] = $this->ws->listar($this->modulo,"prog_tipo = 'verano'");
        



        $contenido['pagination'] = $this->pagination->create_links();
        
		#Nav
		$this->layout->nav(array("programas" => '/'));
		
		#view
		$this->layout->view('programas/index', $contenido);
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
            
          
            $datos['prog_titulo'] = $this->input->post('titulo');
            $datos['prog_bajada_uno'] = $this->input->post('bajada_uno');
            $datos['prog_bajada_dos'] = $this->input->post('bajada_dos');
            $datos['prog_orden'] = $this->input->post('orden');
            $datos['prog_estado'] = $this->input->post('estado');
            $datos['prog_tipo'] = 'verano';
              
            if($programa = $this->ws->insertar($this->modulo,$datos)){

                $nombre_opcion = $this->input->post("nombre_opcion"); 
                $monto_opcion = $this->input->post("monto_opcion"); 
                $resumen_opcion = $this->input->post("resumen_opcion"); 
                $orden_opcion = $this->input->post("orden_opcion"); 

                foreach($nombre_opcion as $key => $nom){
                    $data['opc_nombre'] = $nombre_opcion[$key];
                    $data['opc_monto'] = $monto_opcion[$key];
                    $data['opc_resumen'] = $resumen_opcion[$key];
                    $data['opc_orden'] = $orden_opcion[$key];
                    $data['opc_programa_verano'] = $programa->prog_codigo;

                    $this->ws->insertar(73, $data);
                    unset($data);
                }


            }
            
            echo json_encode(array("result"=>true));
            
        }
        else{

    		#Title
    		$this->layout->title('Agregar programas');
    		
            #js Imagen Cropic
            $this->layout->js('/js/jquery/croppic/croppic.js');
            $this->layout->css('/js/jquery/croppic/croppic.css');
            $this->layout->js('/js/sistema/imagenes/simple.js');
            
            #js
            $this->layout->js('/js/sistema/verano/programas/agregar.js');
    		
    		#Nav
    		$this->layout->nav(array("Programas" => '/verano/programas/', "Agregar programas" => "/"));
    		
    		#view
    		$this->layout->view('programas/agregar');
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
            
            
            $datos['prog_titulo'] = $this->input->post('titulo');
            $datos['prog_bajada_uno'] = $this->input->post('bajada_uno');
            $datos['prog_bajada_dos'] = $this->input->post('bajada_dos');
            $datos['prog_orden'] = $this->input->post('orden');
            $datos['prog_estado'] = $this->input->post('estado');
            $datos['prog_tipo'] = 'verano';

          
              
            if($this->ws->actualizar($this->modulo,$datos,"prog_codigo = $codigo")){

                $nombre_opcion = $this->input->post("nombre_opcion"); 
                $monto_opcion = $this->input->post("monto_opcion"); 
                $resumen_opcion = $this->input->post("resumen_opcion"); 
                $orden_opcion = $this->input->post("orden_opcion"); 

                foreach($nombre_opcion as $key => $nom){
                    $data['opc_nombre'] = $nombre_opcion[$key];
                    $data['opc_monto'] = $monto_opcion[$key];
                    $data['opc_resumen'] = $resumen_opcion[$key];
                    $data['opc_orden'] = $orden_opcion[$key];
                    $data['opc_programa_verano'] = $codigo;

                    $this->ws->insertar(73, $data);
                    unset($data);
                }


                $editar_codigo = $this->input->post("editar_codigo"); 
                $editar_nombre = $this->input->post("editar_nombre"); 
                $editar_monto = $this->input->post("editar_monto"); 
                $editar_resumen = $this->input->post("editar_resumen"); 
                $editar_orden = $this->input->post("editar_orden"); 


               
                if($editar_codigo){
                    foreach($editar_codigo as $j => $cod){
                     
                            $data['opc_nombre'] = $editar_nombre[$j];
                            $data['opc_monto'] = $editar_monto[$j];
                            $data['opc_resumen'] = $editar_resumen[$j];
                            $data['opc_orden'] = $editar_orden[$j];
                            $this->ws->actualizar(73, $data, "opc_codigo = $cod");
                            unset($data);
                        
                    }
                }









            }
            echo json_encode(array("result"=>true));
            exit;
            
        }
        else{
            
            #registro
            if($contenido['programa'] = $programa = $this->ws->obtener($this->modulo,"prog_codigo = $codigo")){

            $contenido["opciones"] = $this->ws->listar(73, "opc_programa_verano = ".$programa->codigo);

            }else show_error('');
        
    		#Title
    		$this->layout->title('Editar programa');
    		
            #js Imagen Cropic
            $this->layout->js('/js/jquery/croppic/croppic.js');
            $this->layout->css('/js/jquery/croppic/croppic.css');
            $this->layout->js('/js/sistema/imagenes/simple.js');
            
            #js
            $this->layout->js('/js/sistema/verano/programas/editar.js');
    		
    		#Nav
    		$this->layout->nav(array("programas" => '/verano/programas/', "Editar Sección" => "/"));
            
          
    		#view
    		$this->layout->view('programas/editar',$contenido);
        }
	}
    
    public function eliminar() {
		try {
			$this->ws->eliminar($this->modulo, "prog_codigo = {$this->input->post('codigo')}");
			echo json_encode(array("result" => true));
		} catch (Exception $e) {
			echo json_encode(array("result" => false, "msg" => "Ha ocurrido un error inesperado. Por favor, int�ntelo nuevamente."));
		}
    }
     
    public function eliminar_opcion() {
		try {
			$this->ws->eliminar(73, "opc_codigo = {$this->input->post('codigo')}");
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
        
        echo json_encode(array("result"=>true));
    }
	
}