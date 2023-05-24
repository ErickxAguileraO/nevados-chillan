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
		
        #Nav
        $this->layout->nav(array("Reportes" => "/"));

        #La vista siempre,  debe ir cargada al final de la función
        $this->layout->view('reporte', $data);
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
