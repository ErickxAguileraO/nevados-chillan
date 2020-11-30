<?php if ( ! defined('BASEPATH')) exit('No puede acceder a este archivo');

class Inicio extends CI_Controller {
    private $modulo_news= 64;

	public function index()	{
 
  
		#title
		$this->layout->title('');

        if($this->input->post()) {



            if($this->input->post('id')==''){
                $this->session->set_userdata('idioma', 'es');
            }
            else {
                $this->session->set_userdata('idioma', $this->input->post('id'));
            }

        }

		$data['home_indicador'] = true;

		#WebFont
		$this->layout->css('/css/webfont/stylesheet.css');
		$this->layout->js('/js/sistema/portada/index.js');

		#flexslider
		$this->layout->css('/js/jquery/flexslider/flexslider.css');
		$this->layout->js('/js/jquery/flexslider/jquery.flexslider.js');
		$this->layout->js('/js/jquery/flexslider/jquery.flexslider_init.js');

		#Animacion
		$this->layout->css('/js/jquery/wow/animate.css');
		$this->layout->js('/js/jquery/wow/wow.js');
		$this->layout->js('/js/jquery/wow/wow-init.js');

		#Carrousel
		$this->layout->css('/js/jquery/carousel/slick.css');
		$this->layout->js('/js/jquery/carousel/slick.min.js');
		$this->layout->js('/js/jquery/carousel/scripts.js');
		

	//Contenido
	  //slider
	  $this->ws->order('sli_orden ASC');
	  $data['sliders'] = $this->ws->listar(13,'sli_tipo_seccion = 4 and sli_estado = 1');

		//Noticias
	  $this->ws->order('not_fecha_publicacion DESC');
		$this->ws->limit(6);
		#$this->ws->joinLeft(38,"not_codigo = noti_noticia");
	  $data['noticias'] = $this->ws->listar(37,'not_estado = 1');

        foreach ($data['noticias'] as $item):
            $item->noticias_imagenes = $this->ws->listar(38, 'noti_noticia = ' . $item->codigo);
        endforeach;

		//Accesos Directos
	  $this->ws->order('acd_orden ASC');
		$this->ws->limit(5);
	  $data['accesosDirectos'] = $this->ws->listar(39,'acd_estado = 1');

		//Calendario Actividades
	  $this->ws->order('calg_fecha_inicio ASC');
		$this->ws->limit(3);
	  $data['calendarios'] = $this->ws->listar(35,'calg_estado = 1 and calg_fecha_inicio >= "'.date('Y-m-d').'"');

	  $data['popup'] = $this->ws->obtener(78,"p_codigo = 1");
	  
      #Nav
	  $this->layout->nav(array("¿Necesitas ayuda?: Cómo llegar"=>"/"));
		//print_array($data['noticias']);die;
		$this->layout->view('inicio',$data);
        
	}

	public function login(){

		if($this->input->post()){

			#models
			$this->load->model('usuario','objUsuario');

			#validacion
			$this->form_validation->set_message('required', '* %s es obligatorio');
			$this->form_validation->set_message('valid_email', '* El email no es válido');
			$this->form_validation->set_error_delimiters('<div>','</div>');

			if(!$this->form_validation->run('login')){
				$error = validation_errors();
				echo json_encode(array("result"=>false,"msg"=>$error));
			}
			else
			{
				try{
					if($usuario = $this->objUsuario->login($this->input->post('email'),$this->input->post('contrasena'))){
						$this->session->set_userdata('usuario',$usuario);
						echo json_encode(array("result"=>true));
					}
					else
						echo json_encode(array("result"=>false,"msg"=>"Los datos ingresados no son validos."));

				}
				catch(Exception $e){
					echo json_encode(array("result"=>false,"msg"=>$e->getMessage()));
					// echo json_encode(array("result"=>false,"msg"=>"Ha ocurrido un error inesperado. Por favor, inténtelo nuevamente."));
				}
			}
		}
		else
			redirect('/');

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('/');
	}

	public function mapaDelSitio() {
		
		#title
		$this->layout->title('Mapa de sitio');
		
		#WebFont
		$this->layout->css('/css/webfont/stylesheet.css');
		
		#Nav
		$this->layout->nav(array("Mapa de sitio"=>"/"));
		
        $this->layout->view('mapa-del-sitio');

    }

    public function accesibilidad()
    {
    	#nav
		$this->layout->nav(array("Accesibilidad"=>"/"));

     	$this->layout->view('accesibilidad');
    }
    public function registrarnewsletter(){
        if($this->input->post()){
			$this->form_validation->set_rules('nombre', 'nombre', 'required');
            $this->form_validation->set_rules('email', 'email', 'required|valid_email'); 
            //$this->form_validation->set_rules('nombre', 'nombre', 'required');
           
           	#validacion
			$this->form_validation->set_message('required', '* %s es obligatorio');
			$this->form_validation->set_message('valid_email', '* El email no es válido');
			$this->form_validation->set_error_delimiters('<div>','</div>');
            
            if($this->ws->obtener($this->modulo_news, "new_email = '".$this->input->post('email')."'")){
                $error = "Correo registrado anteriormente";
				echo json_encode(array("result"=>false,"msg"=>$error));
                exit;
            }
            
            if(!$this->form_validation->run('login')){
				$error = validation_errors();
				echo json_encode(array("result"=>false,"msg"=>$error));
			}  
			else{

				$texto ='';
				$intereses = $this->input->post('intereses');
				foreach($intereses as $item){

					$texto .= $item.','; 
				}
				$texto = rtrim($texto, ',');
			    $data = array(
					//'clie_nombre' => $this->input->post('nombre', true),
					'new_nombre' => $this->input->post('nombre'),
					'new_intereses' => $texto,
                    'new_email' => $this->input->post('email')
			     );
                $this->ws->insertar($this->modulo_news, $data);
                echo json_encode(array("result"=>true));
            }
        }
    }

}
