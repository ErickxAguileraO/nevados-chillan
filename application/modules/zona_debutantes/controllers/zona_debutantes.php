<?php if (!defined('BASEPATH')) exit('No puede acceder a este archivo');

class Zona_debutantes extends CI_Controller
{

    function __construct()
    {

        parent::__construct();

#current
        $this->layout->current = 3;
    }

    public function index()
    {
        $seccion = 16; // ----> Acá es enlace al codigo de config_tipo_seccion

        #Title
        $this->layout->title('Zona Debutantes');

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

        //Contenido
        //slider
        $this->ws->order('sli_orden ASC');
        $data['sliders'] = $this->ws->listar(13, 'sli_tipo_seccion = 16 and sli_estado = 1');

        //Servicios complementarios
        $this->ws->order('sec_orden ASC');
        $this->ws->joinInner(36, 'scts_servicio_complementario = sec_codigo');
        $data['servicios'] = $this->ws->listar(16, 'scts_tipo_seccion = 16 and sec_estado = 1');

        //Programas y Valores
        $data['valores'] = $this->ws->obtener(27, 'prv_tipo_seccion = 16');

        //introduccion
        $data['introduccion'] = $this->ws->obtener(69, 'int_tipo_seccion = ' . $seccion . ' and int_visible = 1');

        //Secciones
        $this->ws->order('secc_orden ASC');
        $secciones = $this->ws->listar(19,'secc_tipo_seccion = ' . $seccion . ' and secc_estado = 1');
        foreach($secciones as $sec){
          $sec->galeria = $this->ws->listar(76, "sec2_seccion = ".$sec->codigo);
        }
    
        $data['secciones']  = $secciones;










        //Banner
        $this->ws->order('bann_orden ASC');
        $data['banners'] = $this->ws->listar(70,'bann_tipo_seccion = ' . $seccion . ' and bann_estado = 1');



        $this->ws->order('prog_orden ASC');
        $programas = $this->ws->listar(72,'prog_estado = 1 and prog_tipo = "zona-debutantes"');
        foreach($programas as $pro){
                $this->ws->order('opc_orden ASC');
                $pro->opciones = $this->ws->listar(73, "opc_programa_verano = ".$pro->codigo);
        }


        $data["programas"] = $programas;
        #Nav
        $this->layout->nav(array("Zona Debutantes" => "/"));

        #La vista siempre,  debe ir cargada al final de la función
        $this->layout->view('index', $data);
    }

}
