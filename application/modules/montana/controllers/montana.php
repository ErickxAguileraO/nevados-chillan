<?php if (!defined('BASEPATH')) exit('No puede acceder a este archivo');

class montana extends CI_Controller {

    function __construct() {

        parent::__construct();

	#current
        $this->layout->current = 1;
    }

    public function index() {

        #Title
        $this->layout->title('Zona Montaña');

        #Metas
        $this->layout->setMeta('title', 'Montaña');
        $this->layout->setMeta('description', 'Montaña');
        $this->layout->setMeta('keywords', 'Montaña');

        #WebFont
        $this->layout->css('/css/webfont/stylesheet.css');


        //Contenido
        $data["programas"] = $programas;
		
        #Nav
        $this->layout->nav(array("Zona Debutantes" => "/"));

        #La vista siempre,  debe ir cargada al final de la función
        $this->layout->view('index', $data);
    }
}
