<?php if ( ! defined('BASEPATH')) exit('No puede acceder a este archivo');

class Necesitas_ayuda extends CI_Controller {

function __construct(){

parent::__construct();

#current
$this->layout->current = 7;
}

public function index()	{
#Title
$this->layout->title('¿Necesitas Ayuda?');

#Metas
$this->layout->setMeta('title','Alojamiento');
$this->layout->setMeta('description','Alojamiento');
$this->layout->setMeta('keywords','Alojamiento');

/*$this->layout->css('/js/jquery/flexslider/flexslider.css');
$this->layout->css('/js/jquery/flexslider/jquery.flexslider.js');*/

#Nivoslider 3.2
$this->layout->css('/js/jquery/nivoslider/3.2/nivo-slider.css');
$this->layout->css('/js/jquery/nivoslider/3.2/nivoslider_custom.css');
$this->layout->js('/js/jquery/nivoslider/3.2/jquery.nivo.slider.pack.js');
$this->layout->js('/js/jquery/nivoslider/3.2/nivoslider_init.js');

#Nav
$this->layout->nav(array("necesitas ayuda"=>"/"));

#La vista siempre,  debe ir cargada al final de la función
$this->layout->view('index');
}





public function Como_llegar()	{
  #Title
  $this->layout->title('Como Llegar');

  #Metas
  $this->layout->setMeta('title','Como Llegar');
  $this->layout->setMeta('description','Como Llegar');
  $this->layout->setMeta('keywords','Como Llegar');

  #flexslider
  $this->layout->css('/js/jquery/flexslider/flexslider.css');
  $this->layout->js('/js/jquery/flexslider/jquery.flexslider.js');

  #WebFont
  $this->layout->css('/css/webfont/stylesheet.css');

  //Contenido
  //slider
  $this->ws->order('sli_orden ASC');
  $data['sliders'] = $this->ws->listar(13,'sli_tipo_seccion = 12 and sli_estado = 1');

  //Como Llegar
  $this->ws->order('col_orden ASC');
  $data['comoLlegar'] = $this->ws->listar(56,'col_estado = 1');

    #Nav
    $this->layout->nav(array("¿Necesitas ayuda?: Cómo llegar”"=>"/"));

  #La vista siempre,  debe ir cargada al final de la función
  $this->layout->view('como_llegar',$data);
}

public function Contacto()	{
#Title
$this->layout->title('Contacto');

#Metas
$this->layout->setMeta('title','Alojamiento');
$this->layout->setMeta('description','Alojamiento');
$this->layout->setMeta('keywords','Alojamiento');

#flexslider
$this->layout->css('/js/jquery/flexslider/flexslider.css');
$this->layout->js('/js/jquery/flexslider/jquery.flexslider.js');

#validador
$this->layout->css('/js/jquery/validation-engine/css/validationEngine.jquery.css');
$this->layout->js('/js/jquery/validation-engine/js/jquery.validationEngine.js');
$this->layout->js('/js/jquery/validation-engine/js/languages/jquery.validationEngine-es.js');
$this->layout->js('/js/jquery/noty/packaged/jquery.noty.packaged.js');
$this->layout->js('/js/jquery/validador-rut/jquery.Rut.min.js');
$this->layout->js('/js/sistema/contacto/index.js');

#WebFont
$this->layout->css('/css/webfont/stylesheet.css');

//Contenido
//slider
$this->ws->order('sli_orden ASC');
$data['sliders'] = $this->ws->listar(13,'sli_tipo_seccion = 12 and sli_estado = 1');

$data['generales'] = $this->ws->obtener(34,"dag_codigo = 1");

//Asuntos
$this->ws->order('asuc_orden ASC');
$data['asunto'] = $this->ws->listar(32,'asuc_estado = 1');

#Nav
$this->layout->nav(array("¿Necesitas ayuda?: Contáctenos"=>"/"));

#La vista siempre,  debe ir cargada al final de la función
$this->layout->view('contacto',$data);
}

public function envio(){
  if($this->input->post()){
    #validaciones
    $this->form_validation->set_rules('nombre', 'Nombre', 'required');
    $this->form_validation->set_rules('telefono', 'Tel&eacute;fono', 'required');
    $this->form_validation->set_rules('correo', 'Correo', 'required');
    $this->form_validation->set_rules('motivo', 'Motivo', 'required');
    $this->form_validation->set_rules('mensaje', 'Mensaje', 'required');


    $this->form_validation->set_message('required', '* %s es obligatorio');
    $this->form_validation->set_error_delimiters('<div>','</div>');

    if(!$this->form_validation->run()){
      echo json_encode(array("result"=>false,"msg"=>validation_errors()));
      exit;
    }
    $data['con_nombre_completo'] = $this->input->post('nombre');
    $data['con_telefono'] = $this->input->post('telefono');
    $data['con_email'] = $this->input->post('correo');
    $data['con_fecha'] = date('Y-m-d');
    $hora = strtotime ( '-1 hour' , strtotime(date('Y-m-d H:i:s')));
    $data['con_hora'] = date('H:i:s',$hora);
    $data['con_asunto'] = $this->input->post('motivo');
    $data['con_mensaje'] = $this->input->post('mensaje');

    if($this->ws->insertar(60,$data)){
      $envio = $this->ws->obtener(32,'asuc_codigo = '.$this->input->post('motivo'));
      $data['asunto'] = $envio->nombre;
      $cuerpo = $this->load->view("_email_contacto", $data, true);


              #print_array($cuerpo); die;
              # print_array($envio); die;

      if($envio){
     

        //die("hola");
        #$this->load->library("email",$config);
        $this->email->from('nevadoshelp@nevadosdechillan.com', utf8_decode('Nevados de Chillán'));

        $this->email->to($envio->email_destino);

        $asunto = "Envío formulario contacto web";
         $this->email->subject($asunto);
         $this->email->message(utf8_decode($cuerpo));
         if($this->email->send()){
          echo json_encode(array("result"=>true)); exit;
        }else {
          
          echo json_encode(array("result"=>false,"msg"=>"Problemas al env&iacute;ar el mensaje, intentalo más tarde"));
          exit;
        }
      }

    }else{
      echo json_encode(array("result"=>false,"msg"=>"Problemas al env&iacute;ar el mensaje, intentalo m&acute;s tarde"));
      exit;
    }
  }else {
    echo json_encode(array("result"=>false,"msg"=>"Problemas al env&iacute;ar el mensaje, intentalo m&acute;s tarde"));
    exit;
  }

}


public function faqs()	{
#Title
$this->layout->title('Faqs');

#Metas
$this->layout->setMeta('title','Alojamiento');
$this->layout->setMeta('description','Alojamiento');
$this->layout->setMeta('keywords','Alojamiento');

#flexslider
$this->layout->css('/js/jquery/flexslider/flexslider.css');
$this->layout->js('/js/jquery/flexslider/jquery.flexslider.js');

#WebFont
$this->layout->css('/css/webfont/stylesheet.css');

#Accordeon
$this->layout->js('/js/jquery/accordeon/accordeon.js');
#validador
$this->layout->css('/js/jquery/validation-engine/css/validationEngine.jquery.css');
$this->layout->css('/js/jquery/validation-engine/css/validationEngine.jquery.css');
$this->layout->js('/js/jquery/validation-engine/js/jquery.validationEngine.js');
$this->layout->js('/js/jquery/validation-engine/js/languages/jquery.validationEngine-es.js');
$this->layout->js('/js/jquery/noty/packaged/jquery.noty.packaged.js');
$this->layout->js('/js/jquery/validador-rut/jquery.Rut.min.js');
$this->layout->js('/js/sistema/trabaje-con-nosotros/trabaje-con-nosotros.js');

//Contenido
//slider
$this->ws->order('sli_orden ASC');
$data['sliders'] = $this->ws->listar(13,'sli_tipo_seccion = 12 and sli_estado = 1');

//Preguntas frecuentes
$this->ws->order('prf_orden ASC');
$data['faqs'] = $this->ws->listar(57,'prf_estado = 1');

//Area
$this->ws->order('art_orden ASC');
$data['areas'] = $this->ws->listar(33,'art_estado = 1');

#Nav
$this->layout->nav(array("¿Necesitas ayuda?: FAQs"=>"/")); 

#La vista siempre,  debe ir cargada al final de la función
$this->layout->view('faqs',$data);
}

public function trabaja_nosotros()	{
  #Title
  $this->layout->title('Trabaja con nosotros');
  
  #Metas
  $this->layout->setMeta('title','Trabaja con nosotros');
  $this->layout->setMeta('description','Trabaja con nosotros');
  $this->layout->setMeta('keywords','Trabaja con nosotros');
  
  #flexslider
  $this->layout->css('/js/jquery/flexslider/flexslider.css');
  $this->layout->js('/js/jquery/flexslider/jquery.flexslider.js');
  
  #WebFont
  $this->layout->css('/css/webfont/stylesheet.css');
  
  #Accordeon
  $this->layout->js('/js/jquery/accordeon/accordeon.js');
  #validador
  $this->layout->css('/js/jquery/validation-engine/css/validationEngine.jquery.css');
  $this->layout->css('/js/jquery/validation-engine/css/validationEngine.jquery.css');
  $this->layout->js('/js/jquery/validation-engine/js/jquery.validationEngine.js');
  $this->layout->js('/js/jquery/validation-engine/js/languages/jquery.validationEngine-es.js');
  $this->layout->js('/js/jquery/noty/packaged/jquery.noty.packaged.js');
  $this->layout->js('/js/jquery/validador-rut/jquery.Rut.min.js');
  $this->layout->js('/js/sistema/trabaje-con-nosotros/trabaje-con-nosotros.js');
  
  //Contenido
  //slider
  $this->ws->order('sli_orden ASC');
  $data['sliders'] = $this->ws->listar(13,'sli_tipo_seccion = 12 and sli_estado = 1');
  
  //Preguntas frecuentes
  $this->ws->order('prf_orden ASC');
  $data['faqs'] = $this->ws->listar(57,'prf_estado = 1');
  
  //Area
  $this->ws->order('art_orden ASC');
  $data['areas'] = $this->ws->listar(33,'art_estado = 1');
  
  #Nav
  $this->layout->nav(array("¿Necesitas ayuda?: Trabaja con nosotros"=>"/")); 
  
  #La vista siempre,  debe ir cargada al final de la función
  $this->layout->view('trabaja_nosotros',$data);
  }

public function envio_trabaja(){
  if($this->input->post()){
    #validaciones
    $this->form_validation->set_rules('nombre', 'Nombre', 'required');
    $this->form_validation->set_rules('telefono', 'Tel&eacute;fono', 'required');
    $this->form_validation->set_rules('correo', 'Correo', 'required');
    $this->form_validation->set_rules('area', '&Aacute;rea', 'required');


    $this->form_validation->set_message('required', '* %s es obligatorio');
    $this->form_validation->set_error_delimiters('<div>','</div>');

    if(!$this->form_validation->run()){
      echo json_encode(array("result"=>false,"msg"=>validation_errors()));
      exit;
    }

    #subir imagen
    if($_FILES['adjunto']['name']){

        $upload_dir = '/archivos/cv/';
        //creaDirectoriosUrl($upload_dir);

        $extension = array_pop(explode('.',$_FILES['adjunto']['name']));
        $nombre = slug($this->input->post('nombre')).time().'.'.$extension;

        $configU['upload_path'] = $_SERVER['DOCUMENT_ROOT'].$upload_dir;
        $configU['allowed_types'] = 'doc|docx|ppt|pptx|pdf';
        $configU['file_name'] = $nombre;
        $configU["overwrite"] = 1;
        $configU["max_size"] = 10000;
    #$configU['max_size']	= '100';
        #$config['max_width']  = '130';
        #$config['max_height']  = '100';
    $this->load->library('upload', $configU);

    if(!$this->upload->do_upload('adjunto')){
      echo json_encode(array("result"=>false,"msg"=>"Ha ocurrido un error al subir el archivo. Inténtelo nuevamente."));
      exit;
            // $error .= "<div>* Ha ocurrido un error al subir la imagen. Inténtelo nuevamente.</div>";
    }
    else{

            $data['tcn_archivo_adjunto'] = $upload_dir.$nombre;
    }

    $data['tcn_nombre_completo'] = $this->input->post('nombre');
    $data['tcn_telefono'] = $this->input->post('telefono');
    $data['tcn_email'] = $this->input->post('correo');
    $data['tcn_fecha'] = date('Y-m-d');
    $hora = strtotime ( '-1 hour' , strtotime(date('Y-m-d H:i:s')));
    $data['tcn_hora'] = date('H:i:s',$hora);
    $data['tcn_area_de_trabajo'] = $this->input->post('area');

    if($this->ws->insertar(59,$data)){
      $cuerpo_respuesta = $this->load->view("_email_respuesta_cliente", $data, true);

      $asunto = "Envío formulario Trabaja con nosotros web";

      $this->email->from('nevadoshelp@nevadosdechillan.com', utf8_decode('Nevados de Chillán'));

      
      

      $this->email->to($data['tcn_email']);
      $this->email->subject($asunto);
         $this->email->message(utf8_decode($cuerpo_respuesta));
         $this->email->send();

      $envio = $this->ws->obtener(33,'art_codigo = '.$this->input->post('area'));
      $data['asunto'] = $envio->nombre;
      $cuerpo = $this->load->view("_email_trabaja", $data, true);


              #print_array($cuerpo); die;
              # print_array($envio); die;

              if($envio){
                


                #$this->load->library("email",$config);
                $this->email->from('nevadoshelp@nevadosdechillan.com', utf8_decode('Nevados de Chillán'));

               $this->email->to($envio->email_destino);
               
                if($_FILES['adjunto']['tmp_name'] != ''){
                  $this->email->attach($_SERVER['DOCUMENT_ROOT'].$upload_dir.$nombre);
                }
        
         $this->email->subject($asunto);
         $this->email->message(utf8_decode($cuerpo));
         if($this->email->send()){
          echo json_encode(array("result"=>true));exit;
        }else {
         
          echo json_encode(array("result"=>false,"msg"=>"Problemas al env&iacute;ar el mensaje, intentalo más tarde1"));
          exit;
        }
      }

    }else{
      echo json_encode(array("result"=>false,"msg"=>"Problemas al env&iacute;ar el mensaje, intentalo m&acute;s tarde2"));
      exit;
    }
  }else {
    echo json_encode(array("result"=>false,"msg"=>"Problemas al env&iacute;ar el mensaje, intentalo m&acute;s tarde3"));
    exit;
  }
  } //si hay ARCHIVO


}


public function condiciones()	{
    #Title
    $this->layout->title('Condiciones');

    #Metas
    $this->layout->setMeta('title','Alojamiento');
    $this->layout->setMeta('description','Alojamiento');
    $this->layout->setMeta('keywords','Alojamiento');

    #flexslider
    $this->layout->css('/js/jquery/flexslider/flexslider.css');
    $this->layout->js('/js/jquery/flexslider/jquery.flexslider.js');

    #WebFont
    $this->layout->css('/css/webfont/stylesheet.css');

    #Accordeon
    $this->layout->js('/js/jquery/accordeon/accordeon.js');

    //Contenido
    //slider
    $this->ws->order('sli_orden ASC');
    $data['sliders'] = $this->ws->listar(13,'sli_tipo_seccion = 12 and sli_estado = 1');

    //Condiciones
    $this->ws->order('cor_orden ASC');
    $data['condiciones'] = $this->ws->listar(58,'cor_estado = 1');

    #Nav
    $this->layout->nav(array("¿Necesitas ayuda?: Condiciones"=>"/"));

    #La vista siempre,  debe ir cargada al final de la función
    $this->layout->view('condiciones',$data);
}

public function descargar_archivo(){

      $codigo = $this->uri->segment(4);
      #print_array($codigo);
      $archivo = $this->ws->obtener(58,"cor_codigo = $codigo");
    
     
      $this->load->helper('download');
      $name = basename($archivo->archivo_adjunto);
      $data = file_get_contents(URL_ADMIN.$archivo->archivo_adjunto);

      force_download($name, $data);

      exit;

   }



}
