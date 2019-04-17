<?php if ( ! defined('BASEPATH')) exit('No puede acceder a este archivo');

class En_vivo extends CI_Controller {

function __construct(){

parent::__construct();

#current
$this->layout->current = 1;
}

public function index()	{
#Title
$this->layout->title('En vivo');

#Metas
$this->layout->setMeta('title','En vivo');
$this->layout->setMeta('description','En vivo');
$this->layout->setMeta('keywords','En vivo');

#flexslider
$this->layout->css('/js/jquery/flexslider/flexslider.css');
$this->layout->js('/js/jquery/flexslider/jquery.flexslider.js');

#WebFont
$this->layout->css('/css/webfont/stylesheet.css');

//slider
$this->ws->order('sli_orden ASC');
$data['sliders'] = $this->ws->listar(13,'sli_tipo_seccion = 4 and sli_estado = 1');

#$this->ws->limit(2);
$this->ws->order('camv_orden ASC');
$data['camaras'] = $this->ws->listar(31,'camv_estado = 1');

#Nav
$this->layout->nav(array("En Vivo"=>"/"));

#La vista siempre,  debe ir cargada al final de la función
$this->layout->view('index',$data);
}

}
