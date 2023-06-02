<?php if (!defined('BASEPATH')) exit('No puede acceder a este archivo');

class montana extends CI_Controller {

    function __construct() {

        parent::__construct();

	#current
        $this->layout->current = 1;
    }

    public function index() {

        #Title
        $this->layout->title('Mapa de pistas');

        #Metas
        $this->layout->setMeta('title', 'Montaña');
        $this->layout->setMeta('description', 'Montaña');
        $this->layout->setMeta('keywords', 'Montaña');
		
		#CSS
        $this->layout->css('/css/reportes.css');

        #WebFont
        $this->layout->css('/css/webfont/stylesheet.css');


        //Contenido
        //$data["programas"] = $programas;
		$data['encabezadoMapaPista'] = $this->ws->obtener(80, "enc_seccion = 'mapa_pista'");
        #Nav
        $this->layout->nav(array("Mapa de pistas" => "/"));

        #La vista siempre,  debe ir cargada al final de la función
        $this->layout->view('index', $data);
    }

    public function reporte() {

        #Title
        $this->layout->title('Reportes');

        #Metas
        $this->layout->setMeta('title', 'Montaña');
        $this->layout->setMeta('description', 'Montaña');
        $this->layout->setMeta('keywords', 'Montaña');
		
		#CSS
        $this->layout->css('/css/reportes.css');

        #WebFont
        $this->layout->css('/css/webfont/stylesheet.css');
		
		#Tabs
        $this->layout->css('/js/jquery/tabs/tabs.css');
        $this->layout->js('/js/jquery/tabs/index.js');

        //Noticias
        $idNoticia = [];
        $idCategoria = $this->ws->obtener(30, "can_url = 'reporte-montana'")->codigo;
        $this->ws->order("not_codigo DESC");
        $this->ws->limit(3);
        $data["noticiaReporte"] = $this->ws->listar(37, "not_categoria = " . $idCategoria);
        foreach ($data["noticiaReporte"] as $noticia) {
            $imagenes = $this->ws->listar(38, "noti_noticia = ". $noticia->codigo);
            foreach ($imagenes as $imagen) {
                $idNoticia[] = $imagen;
            }
        } 
        $data["imagenNoticiaReporte"] = $idNoticia;


        //Contenido
        $data["programas"] = $programas;

        #Andariveles
                
        #contenido
        $this->ws->order("eda_orden ASC");
        
        $data["andariveles"] = $this->ws->listar(49);
        $data['andarivelesAbiertos'] = count($this->ws->listar(49, 'eda_estado_andarivel = 1'));
        $data['pagination'] = $this->pagination->create_links();

        /**
         * Obtención de datos de pistas
         */
        $pistas = $this->ws->listar(48);
        $cantidadPistasAbiertas = count($this->ws->listar(48, 'edp_estado_pista = 1'));
        $pistas = PistaService::generarEstadoPista($pistas);
        $pistas = PistaService::generarDificultad($pistas);

        $data['pistas'] = $pistas;
        $data['cantidadPistasAbiertas'] = $cantidadPistasAbiertas;
        
        #Nav
        $this->layout->nav(array("Reportes" => '/'));

        #view
        $this->layout->view('montana/reporte', $data);

    }

    public function Info_ski() {

        #Title
        $this->layout->title('Reportes');

        #Metas
        $this->layout->setMeta('title', 'Montaña');
        $this->layout->setMeta('description', 'Montaña');
        $this->layout->setMeta('keywords', 'Montaña');
		
		#CSS
        $this->layout->css('/css/reportes.css');

        #WebFont
        $this->layout->css('/css/webfont/stylesheet.css');
		
		#Tabs
        $this->layout->css('/js/jquery/tabs/tabs.css');
        $this->layout->js('/js/jquery/tabs/index.js');


        //Noticias
        $idCategoria = $this->ws->obtener(30, "can_url = 'clima'")->codigo;
        $data["noticiaClima"] = $this->ws->listar(37, "not_categoria = " . $idCategoria);
        $idNoticiaClima = end($this->ws->listar(37, "not_categoria = " . $idCategoria))->codigo;
        $data["imagenNoticiaClima"] = $this->ws->obtener(38, "noti_noticia = ".$idNoticiaClima);
		
        #Nav
        $this->layout->nav(array("Info Ski" => "/"));

        #La vista siempre,  debe ir cargada al final de la función
        $this->layout->view('info_ski', $data);
    }
}
