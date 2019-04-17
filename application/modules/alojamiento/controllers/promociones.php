<?php if (!defined('BASEPATH')) exit('No puede acceder a este archivo');

class Promociones extends CI_Controller
{

    function __construct()
    {

        parent::__construct();

        #current
        $this->layout->current = 2;


    }

    public function index()
    {

        #Title
        $this->layout->title('Promociones');

        #Metas
        $this->layout->setMeta('title', 'Promociones');
        $this->layout->setMeta('description', 'Promociones');
        $this->layout->setMeta('keywords', 'Promociones');

        #WebFont
        $this->layout->css('/css/webfont/stylesheet.css');

        #flexslider
        $this->layout->css('/js/jquery/flexslider/flexslider.css');
        $this->layout->js('/js/jquery/flexslider/jquery.flexslider.js');

        #Nivoslider 3.2
        $this->layout->css('/js/jquery/nivoslider/3.2/nivo-slider.css');
        $this->layout->css('/js/jquery/nivoslider/3.2/nivoslider_custom.css');
        $this->layout->js('/js/jquery/nivoslider/3.2/jquery.nivo.slider.pack.js');
        $this->layout->js('/js/jquery/nivoslider/3.2/nivoslider_init.js');

        #Selector promociones
        $this->layout->js('/js/jquery/promociones/jquery.mixitup.min.js');
        $this->layout->css('/js/jquery/promociones/layout.css');

        //slider
        $this->ws->order('sli_orden ASC');
        $data['sliders'] = $this->ws->listar(13, 'sli_tipo_seccion = 4 and sli_estado = 1');

        #Nav
        $this->layout->nav(array("Alojamiento: Promociones" => "/"));
        $this->ws->order('pro_orden ASC');
        $promociones = $this->ws->listar(23, 'pro_estado = 1');
        /*
         * $prom = array();
        foreach($promociones as $item):
          $obj = new stdClass();
          $obj = $item;
          $obj->hoteles = $this->ws->listar(24,"proh_promocion = ".$item->codigo);
          $prom[] = $obj;
        endforeach;
        */

        #print_array($prom);die;

        #$data['promociones'] = $prom;

        $data['promociones'] = $promociones;

        #print_array($promociones);die;

        $this->ws->order("cae_orden ASC");
        $data['categorias'] = $this->ws->listar(71, "cae_estado = 1");

        #print_array($data['categorias']);

        #La vista siempre,  debe ir cargada al final de la función
        $this->layout->view('/promociones/index', $data);


    }


    public function detalle_promocion()
    {


        #print_array($this->session->userdata); die; 


        #redes sociales  
        $this->layout->js('/js/sistema/index/rs.js');

        #flexslider
        $this->layout->css('/js/jquery/flexslider/flexslider.css');
        $this->layout->js('/js/jquery/flexslider/jquery.flexslider.js');

        #WebFont
        $this->layout->css('/css/webfont/stylesheet.css');

        #Selector promociones
        $this->layout->js('/js/jquery/promociones/jquery.mixitup.min.js');
        $this->layout->css('/js/jquery/promociones/layout.css');


        //slider
        $this->ws->order('sli_orden ASC');
        $data['sliders'] = $this->ws->listar(13, 'sli_tipo_seccion = 4 and sli_estado = 1');

        $data['promocion'] = $this->ws->obtener(23, 'pro_estado = 1 and pro_url = "' . $this->uri->segment(3) . '"');
        #print_array($data['promocion']);die;
        if (isset($data['promocion']->codigo))
            $data["archivos"] = $this->ws->listar(25, 'proa_promocion =' . $data['promocion']->codigo);

        #datos compartir facebook
        $data['compartir_rs'] = new stdClass();
        if (isset($data['promocion']->nombre)) {
            $data['compartir_rs']->titulo = $data['promocion']->nombre;
            $data['compartir_rs']->resumen = $data['promocion']->nombre;
        }
        if (isset($data['promocion']->imagen_adjunta_detalle))
            $data['compartir_rs']->imagen = ($data["promocion"]->imagen_adjunta_detalle) ? URL_ADMINISTRACION . $data['promocion']->imagen_adjunta_detalle : '';

        #Nav Alojamiento: Promociones > Nombre promoción
        if (isset($data['promocion']->nombre)) {
            $this->layout->nav(array("Alojamiento: Promociones" => "alojamiento/promociones", $data['promocion']->nombre => "/"));

            #Title
            $this->layout->title($data['promocion']->nombre);

            #Metas
            $this->layout->setMeta('title', $data['promocion']->nombre);
            $this->layout->setMeta('description', $data['promocion']->nombre);
            $this->layout->setMeta('keywords', $data['promocion']->nombre);
        }


        //listar promociones asociadas a la última categría asociada
        $cate = $this->session->userdata('cate_promo');

        #echo $cate; die; 

        $promos_categoria = array();

        $where_promo = ' and pro_codigo !=' . $data['promocion']->codigo;

        if ($cate != 0) {

            //hotel
            if ($cate != 4 && $cate != 5) {

                $this->ws->joinLeft(24, "proh_promocion = pro_codigo");
                $this->ws->order('pro_orden ASC');
                $this->ws->group('pro_codigo');
                $promos_categoria = $this->ws->listar(23, "pro_estado = 1 and proh_hotel = '$cate'" . $where_promo);


            }

            //eventos
            if ($cate == 4) {

                $this->ws->joinLeft(24, "proh_promocion = pro_codigo");
                $this->ws->order('pro_orden ASC');
                $this->ws->group('pro_codigo');
                $promos_categoria = $this->ws->listar(23, "pro_estado = 1 and pro_evento = 1" . $where_promo);


            }

            //todos
            if ($cate == 5) {

                $this->ws->joinLeft(24, "proh_promocion = pro_codigo");
                $this->ws->order('pro_orden ASC');
                $this->ws->group('pro_codigo');
                $promos_categoria = $this->ws->listar(23, "pro_estado = 1" . $where_promo);


            }


        }


        foreach ($promos_categoria as $item) {

            $item->hoteles = $this->ws->listar(24, "proh_promocion = " . $item->codigo);

        }

        #print_array($promos_categoria); die; 

        $data['promociones'] = $promos_categoria;

        #La vista siempre,  debe ir cargada al final de la función
        $this->layout->view('/promociones/detalle', $data);
    }


    public function categoria_sesion()
    {
        $this->ws->order("cae_orden ASC");
        $data['categorias'] = $this->ws->listar(71, "cae_estado = 1");
        /*
        ctodos = todos = 5
        
        //hoteles
        cnevados = 1
        canevados = 2
        cvalle = 3
        
         //categoria especial eventos
        ceventos = 4  
        */
        #echo $this->input->post('categoria');
        $id = $this->input->post('categoria');

        #echo $id; die;
        $valor = 1;

        if ($id == 'cnevados')
            $valor = 1;

        if ($id == 'canevados')
            $valor = 2;

        if ($id == 'cvalle')
            $valor = 3;


        if ($id == 'ceventos')
            $valor = 4;


        if ($id == 'ctodos')
            $valor = 5;


        # echo $valor; die;               


        $this->session->set_userdata('cate_promo', $valor);


        echo json_encode(array("result" => true));

    }


    public function descargar_archivo()
    {
        $codigo = $this->uri->segment(4);
        $archivo = $this->ws->obtener(25, "proa_codigo = $codigo");
        #print_array($archivo);die;
        $this->load->helper('download');
        $data = file_get_contents(URL_ADMINISTRACION . $archivo->ruta);
        $name = slug($archivo->nombre) . '.' . $archivo->extension;


        force_download($name, $data);
    }


}
