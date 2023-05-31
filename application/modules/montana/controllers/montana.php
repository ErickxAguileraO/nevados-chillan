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
        $data["programas"] = $programas;
		
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


        //Contenido
        $data["programas"] = $programas;
		
        #Nav
        $this->layout->nav(array("Info Ski" => "/"));

        #La vista siempre,  debe ir cargada al final de la función
        $this->layout->view('info_ski', $data);
    }
}
