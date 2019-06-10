<?php if (!defined('BASEPATH')) exit('No puede acceder a este archivo');

class Descubrenos extends CI_Controller
{


    function __construct()
    {

        parent::__construct();

        #current
        $this->layout->current = 1;
    }

    public function index()
    {
        #Title
        $this->layout->title('Descúbrenos');

        #Metas
        $this->layout->setMeta('title', 'Descúbrenos');
        $this->layout->setMeta('description', 'Descúbrenos');
        $this->layout->setMeta('keywords', 'Descúbrenos');

        #flexslider
        $this->layout->css('/js/jquery/flexslider/flexslider.css');
        $this->layout->js('/js/jquery/flexslider/jquery.flexslider.js');

        #Venobox
        $this->layout->css('/js/jquery/venobox/venobox.css');
        $this->layout->js('/js/jquery/venobox/venobox.min.js');

        #WebFont
        $this->layout->css('/css/webfont/stylesheet.css');



#Animacion
$this->layout->css('/js/jquery/wow/animate.css');
$this->layout->js('/js/jquery/wow/wow.js');
$this->layout->js('/js/jquery/wow/wow-init.js');

#Carrousel
$this->layout->css('/js/jquery/carousel/slick.css');
$this->layout->js('/js/jquery/carousel/slick.min.js');
$this->layout->js('/js/jquery/carousel/scripts.js');


$this->layout->css('/css/webfont/stylesheet.css');
		$this->layout->js('/js/sistema/portada/index.js');

        //Contenido
        //slider
        $this->ws->order('sli_orden ASC');
        $data['sliders'] = $this->ws->listar(13, 'sli_tipo_seccion = 8 and sli_estado = 1');

        //Hoteles
        $this->ws->order('hop_orden ASC');
        $this->ws->limit(2);
        $data['hoteles'] = $this->ws->listar(50, 'hop_estado = 1');

        //Secciones
      

        $secciones = $this->ws->listar(19, 'secc_tipo_seccion = 8 and secc_estado = 1');
        foreach($secciones as $sec){
          $sec->galeria = $this->ws->listar(76, "sec2_seccion = ".$sec->codigo);
        }
    
        $data['secciones']  = $secciones;

        

        $this->ws->order("par_orden");
        $data['auspiciadores'] = $this->ws->listar(74,"par_estado = 1");


       

        #Nav
        $this->layout->nav(array("Descúbrenos" => "/"));

        #La vista siempre,  debe ir cargada al final de la función
        $this->layout->view('index', $data);
    }


    public function Valle_las_trancas()
    {
        $tipo_seccion = 10;

        #Title
        $this->layout->title('Valle Las Trancas');

        #Metas
        $this->layout->setMeta('title', 'Valle Las Trancas');
        $this->layout->setMeta('description', 'Valle Las Trancas');
        $this->layout->setMeta('keywords', 'Valle Las Trancas');

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
        $data['sliders'] = $this->ws->listar(13, 'sli_tipo_seccion = 11 and sli_estado = 1');

        //Secciones
        $this->ws->order('secc_orden ASC');
        $secciones = $this->ws->listar(19, 'secc_tipo_seccion = 10 and secc_estado = 1');
        foreach($secciones as $sec){
          $sec->galeria = $this->ws->listar(76, "sec2_seccion = ".$sec->codigo);
        }
    
        $data['secciones']  = $secciones;




        //introduccion
        $data['introduccion'] = $this->ws->obtener(69, 'int_tipo_seccion = ' . $tipo_seccion . ' and int_visible = 1');

        #Nav
        $this->layout->nav(array("Descúbrenos" => "/"));

        #La vista siempre,  debe ir cargada al final de la función
        $this->layout->view('valle_las_trancas', $data);
    }

    public function historia()
    {
        $tipo_seccion = 15;

        #Title
        $this->layout->title('Historia');

        #Metas
        $this->layout->setMeta('title', 'Historia');
        $this->layout->setMeta('description', 'Historia');
        $this->layout->setMeta('keywords', 'Historia');

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
        $data['sliders'] = $this->ws->listar(13, 'sli_tipo_seccion = ' . $tipo_seccion . ' and sli_estado = 1');

        //introduccion
        $data['introduccion'] = $this->ws->obtener(69, 'int_tipo_seccion = ' . $tipo_seccion . ' and int_visible = 1');

        //Secciones
        $secciones = $this->ws->listar(19, 'secc_tipo_seccion = ' . $tipo_seccion . ' and secc_estado = 1');
        foreach($secciones as $sec){
          $sec->galeria = $this->ws->listar(76, "sec2_seccion = ".$sec->codigo);
        }
    
        $data['secciones']  = $secciones;





        #Nav
        $this->layout->nav(array("Descúbrenos" => "/"));

        #La vista siempre,  debe ir cargada al final de la función
        $this->layout->view('historia', $data);
    }
}
