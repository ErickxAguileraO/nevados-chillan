<?php if ( ! defined('BASEPATH')) exit('No puede acceder a este archivo');

class Verano extends CI_Controller {

function __construct(){

parent::__construct();

#current
$this->layout->current = 6;
}

public function index()	{
#Title
$this->layout->title('Verano');

#Metas
$this->layout->setMeta('title','Verano');
$this->layout->setMeta('description','Verano');
$this->layout->setMeta('keywords','Verano');

/*#flexslider
$this->layout->css('/js/jquery/flexslider/flexslider.css');
$this->layout->css('/js/jquery/flexslider/jquery.flexslider.js');*/

#Nivoslider 3.2
$this->layout->css('/js/jquery/nivoslider/3.2/nivo-slider.css');
$this->layout->css('/js/jquery/nivoslider/3.2/nivoslider_custom.css');
$this->layout->js('/js/jquery/nivoslider/3.2/jquery.nivo.slider.pack.js');
$this->layout->js('/js/jquery/nivoslider/3.2/nivoslider_init.js');

//Contenido
//slider
$this->ws->order('sli_orden ASC');
$data['sliders'] = $this->ws->listar(13,'sli_tipo_seccion = 11 and sli_estado = 1');

//Bikepark
$data['bikepark'] = $this->ws->listar(54,'bip_codigo = 1');
//print_array($data['bikepark']);die;
//Secciones
$this->ws->order('secc_orden ASC');
$data['secciones'] = $this->ws->listar(19,'secc_tipo_seccion = 11 and secc_estado = 1');

//Programas y Valores
$data['valores'] = $this->ws->obtener(27,'prv_tipo_seccion = 11');


#Nav
$this->layout->nav(array("Verano"=>"/"));

#La vista siempre,  debe ir cargada al final de la función
$this->layout->view('index');
}




public function bikepark()	{
#Title
$this->layout->title('Bike Park');

#Metas
$this->layout->setMeta('title','Verano');
$this->layout->setMeta('description','Verano');
$this->layout->setMeta('keywords','Verano');

#flexslider
$this->layout->css('/js/jquery/flexslider/flexslider.css');
$this->layout->js('/js/jquery/flexslider/jquery.flexslider.js');

#Venobox
$this->layout->css('/js/jquery/venobox/venobox.css');
$this->layout->js('/js/jquery/venobox/venobox.min.js');

#WebFont
$this->layout->css('/css/webfont/stylesheet.css');

//Contenido
//slider
$this->ws->order('sli_orden ASC');
$data['sliders'] = $this->ws->listar(13,'sli_tipo_seccion = 10 and sli_estado = 1');
//print_array($data['sliders']);die;
//Bikepark
$data['bikepark'] = $this->ws->obtener(54,'bip_codigo = 1');

//Secciones
$this->ws->order('secc_orden ASC');
$data['secciones'] = $this->ws->listar(19,'secc_tipo_seccion = 11 and secc_estado = 1');

//Programas y Valores
$data['valores'] = $this->ws->obtener(27,'prv_tipo_seccion = 11');

#Nav
$this->layout->nav(array("Bikepark"=>"/"));

#La vista siempre,  debe ir cargada al final de la función
$this->layout->view('bikepark',$data);
}




public function Calendario()	{
#Title
$this->layout->title('Calendario');

#Metas
$this->layout->setMeta('title','Calendario');
$this->layout->setMeta('description','Calendario');
$this->layout->setMeta('keywords','Calendario');

#flexslider
$this->layout->css('/js/jquery/flexslider/flexslider.css');
$this->layout->js('/js/jquery/flexslider/jquery.flexslider.js');


#Venobox
$this->layout->css('/js/jquery/venobox/venobox.css');
$this->layout->js('/js/jquery/venobox/venobox.min.js');

#WebFont
$this->layout->css('/css/webfont/stylesheet.css');

//Contenido
//slider
$this->ws->order('sli_orden ASC');
$data['sliders'] = $this->ws->listar(13,'sli_tipo_seccion = 10 and sli_estado = 1');

//Calendario Actividades
$where = "calg_estado = 1";
$data['categoria'] = 0;
if($this->uri->segment(4)!=''){
  $this->ws->joinInner(29,"cac_codigo = calg_categoria");
  $where .= " and cac_url = '".$this->uri->segment(4)."'";
  $data['categoria'] = $this->uri->segment(4);
}

$this->ws->order('calg_fecha_inicio ASC');
$data['calendarios'] = $this->ws->listar(35,$where);

//categorias
$this->ws->order('cac_orden ASC');
$data['categorias'] = $this->ws->listar(29,'cac_estado = 1');


#Nav
$this->layout->nav(array("Calendario"=>"/"));

#La vista siempre,  debe ir cargada al final de la función
$this->layout->view('calendario',$data);
}

    public function Detalle_calendario(){
    
        #Metas
        $this->layout->setMeta('title','Detalle Calendario');
        $this->layout->setMeta('description','Detalle Calendario');
        $this->layout->setMeta('keywords','Detalle Calendario');
        
        #redes sociales
        $this->layout->js('/js/sistema/index/rs.js');
                
        #flexslider
        $this->layout->css('/js/jquery/flexslider/flexslider.css');
        $this->layout->js('/js/jquery/flexslider/jquery.flexslider.js');
        
        
        #Venobox
        $this->layout->css('/js/jquery/venobox/venobox.css');
        $this->layout->js('/js/jquery/venobox/venobox.min.js');
        
        #WebFont
        $this->layout->css('/css/webfont/stylesheet.css');
        
        //Contenido
        //slider
        $this->ws->order('sli_orden ASC');
        $data['sliders'] = $this->ws->listar(13,'sli_tipo_seccion = 10 and sli_estado = 1');
        
        $url = $this->uri->segment(2);
        $url = explode("-",$url);
        $codigo = $url[0];
        
        //Detalle Actividades
        $data['actividad'] = $this->ws->obtener(35,'calg_codigo = '.$codigo.'');

        #Nav
        $this->layout->nav(array('Calendario'=>'calendario', $data['actividad']->titulo=>"/"));
        #Title
        $this->layout->title($data['actividad']->titulo);
        
        #datos compartir facebook
        $data['compartir_rs'] = new stdClass();
        $data['compartir_rs']->titulo = $data['actividad']->titulo;
        $data['compartir_rs']->resumen = $data['actividad']->resumen;
        $data['compartir_rs']->imagen = ($data["actividad"]->imagen_adjunta)?URL_ADMINISTRACION.$data['actividad']->imagen_adjunta:'';
        
        #La vista siempre,  debe ir cargada al final de la función
        $this->layout->view('detalle_calendario',$data);
    }
}