<?php if (!defined('BASEPATH')) exit('No puede acceder a este archivo');

class programas extends CI_Controller
{

    function __construct()
    {

        parent::__construct();

#current
        $this->layout->current = 6;
    }

    public function index()
    {
        $tipo_seccion = 99;

#Title
        $this->layout->title('Programas');

#Metas
        $this->layout->setMeta('title', 'Programas');
        $this->layout->setMeta('description', 'Programas');
        $this->layout->setMeta('keywords', 'Programas');

#flexslider
        $this->layout->css('/js/jquery/flexslider/flexslider.css');
        $this->layout->js('/js/jquery/flexslider/jquery.flexslider.js');

#WebFont
        $this->layout->css('/css/webfont/stylesheet.css');

#Venobox
        $this->layout->css('/js/jquery/venobox/venobox.css');
        $this->layout->js('/js/jquery/venobox/venobox.min.js');


#Layout promociones
        $this->layout->js('/js/jquery/promociones/jquery.mixitup.min.js');
        $this->layout->css('/js/jquery/promociones/layout.css');


        $this->ws->order('secc_orden ASC');
        $secciones = $this->ws->listar(19, 'secc_tipo_seccion = 99 and secc_estado = 1');
        foreach($secciones as $sec){
          $sec->galeria = $this->ws->listar(76, "sec2_seccion = ".$sec->codigo);
        }
    
        $data['secciones']  = $secciones;

        

        //introduccion
        $data['introduccion'] = $this->ws->obtener(69, 'int_tipo_seccion = ' . $tipo_seccion . ' and int_visible = 1');


        $this->layout->nav(array("Programas" => "/"));



        $this->layout->view('index', $data);
    }


}