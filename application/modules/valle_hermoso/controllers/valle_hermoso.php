<?php if ( ! defined('BASEPATH')) exit('No puede acceder a este archivo');

class Valle_hermoso extends CI_Controller {

function __construct(){

parent::__construct();

#current
$this->layout->current = 4;
}

  public function index()	{
      $tipo_seccion = 7;

    $hotel->codigo = 3;
    #Title
    $this->layout->title('Valle Hermoso');

    #Metas
    $this->layout->setMeta('title','Alojamiento');
    $this->layout->setMeta('description','Alojamiento');
    $this->layout->setMeta('keywords','Alojamiento');

    #flexslider
    $this->layout->css('/js/jquery/flexslider/flexslider.css');
    $this->layout->js('/js/jquery/flexslider/jquery.flexslider.js');

    #Venobox
    $this->layout->css('/js/jquery/venobox/venobox.css');
    $this->layout->js('/js/jquery/venobox/venobox.min.js');

    #WebFont
    $this->layout->css('/css/webfont/stylesheet.css');

    #Nivoslider 3.2
    $this->layout->css('/js/jquery/nivoslider/3.2/nivo-slider.css');
    $this->layout->css('/js/jquery/nivoslider/3.2/nivoslider_custom.css');
    $this->layout->js('/js/jquery/nivoslider/3.2/jquery.nivo.slider.pack.js');
    $this->layout->js('/js/jquery/nivoslider/3.2/nivoslider_init.js');

    //Contenido
    //slider
    $this->ws->order('sli_orden ASC');
    $data['sliders'] = $this->ws->listar(13,'sli_hotel = '.$hotel->codigo.' and sli_estado = 1');

    //Habitaciones
    $this->ws->order('hab_orden ASC');
    $habitaciones = $this->ws->listar(15,'hab_hotel = '.$hotel->codigo.' and hab_estado = 1');
    $array_habitaciones = array();
    foreach($habitaciones as $habitacion):
      $obj = new stdClass();
      $obj = $habitacion;
      $this->ws->group('habi_codigo');
      $obj->imagenes = $this->ws->listar(22,'habi_habitacion = '.$habitacion->codigo.'');
      $array_habitaciones[] = $obj;
    endforeach;
    $data['habitaciones'] = $array_habitaciones;

    //Servicios complementarios
      $tipoSeccion = 7;//5,6,7
    $this->ws->order('sec_orden ASC');
    $this->ws->joinInner(36,'scts_servicio_complementario = sec_codigo');
    $data['servicios'] = $this->ws->listar(16,'scts_tipo_seccion = '.$tipoSeccion.' and sec_estado = 1');

    //Actividades
      $this->ws->limit(3);
    $this->ws->order('act_orden ASC');
    $data['actividades'] = $this->ws->listar(17,'act_hotel = '.$hotel->codigo.' and act_estado = 1');

    //Calendarios Diarios
    $this->ws->order('cad_hora_inicio ASC');
    $data['calendarios'] = $this->ws->listar(18,'cad_hotel = '.$hotel->codigo.' and cad_estado = 1');

    //Secciones
    $this->ws->order('secc_orden ASC');
    $secciones = $this->ws->listar(19,'secc_hotel = '.$hotel->codigo.' and secc_tipo_seccion = 1 and secc_estado = 1');
    foreach($secciones as $sec){
      $sec->galeria = $this->ws->listar(76, "sec2_seccion = ".$sec->codigo);
    }

    $data['secciones']  = $secciones;


   // PRINT_ARRAY($data["secciones"]);

    //Testimonios
    $this->ws->order('tes_orden ASC');
    $data['testimonios'] = $this->ws->listar(20,'tes_hotel = '.$hotel->codigo.' and tes_estado = 1');

    //Banner
    $this->ws->order('ban_orden ASC');
    $data['banners'] = $this->ws->listar(21,'ban_hotel = '.$hotel->codigo.' and ban_tipo_seccion = 1 and ban_estado = 1');

      //introduccion
      $data['introduccion'] = $this->ws->obtener(69, 'int_tipo_seccion = ' . $tipo_seccion . ' and int_visible = 1');


    #Nav
    $this->layout->nav(array("Valle Hermoso"=>"/"));



    $this->ws->order('prog_orden ASC');
    $programas = $this->ws->listar(72,'prog_estado = 1 and prog_tipo = "deptos-valle-hermoso"');
    foreach($programas as $pro){
            $this->ws->order('opc_orden ASC');
            $pro->opciones = $this->ws->listar(73, "opc_programa_verano = ".$pro->codigo);
    }
    $data["programas"] = $programas;


    #La vista siempre,  debe ir cargada al final de la función
    $this->layout->view('index',$data);
  }




}
