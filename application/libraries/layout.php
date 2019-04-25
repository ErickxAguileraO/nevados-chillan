<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout {
    private $obj;
    private $layout_view;
    private $title = '';
    private $titleDefault = '';
    private $css_list = array(), $js_list = array();
	private $metas = array();
	private $navegacion = array();
	public $current = '';

    function Layout() {

		#obj
        $this->obj =& get_instance();
        $this->layout_view = "layout/default.php";

		#css
		$this->css('https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i" rel="stylesheet');
		$this->css('/css/hoja-estilos.css');
		#$this->css('https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet');


		#css
		#$this->css('https://fonts.googleapis.com/css?family=Raleway');
		#$this->css('https://fonts.googleapis.com/css?family=Rock+Salt');
		#$this->css('https://fonts.googleapis.com/css?family=Amiko:400,700');
		#$this->css('https://fonts.googleapis.com/css?family=Lato:400,700');

		#js
		$this->js('/js/jquery/1.11.1/jquery-1.11.1.min.js');
		$this->js('https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.5.3/modernizr.min.js');
		$this->js('/js/jquery/scrollto/jquery.goup.js');
		$this->js('/js/jquery/ui/1.12.1/jquery-ui-1.12.1.custom.js');
		$this->js('/js/jquery/ui/1.10.4/jquery.ui.datepicker-es.js');
		$this->js('/js/sistema/template/index.js');
		


		#Menu responsive
		$this->css('/js/jquery/responsive-nav/responsive-nav.css');
		$this->js('/js/jquery/responsive-nav/responsive-nav.js');

		#datepicker
		#$this->css('/js/jquery/ui/1.10.4/smoothness/jquery-ui-1.10.4.custom.min.css');
		#$this->js('/js/jquery/ui/1.10.4/jquery-ui-1.10.4.custom.min.js');
		#$this->js('/js/jquery/ui/1.10.4/jquery.ui.datepicker-es.js');

		#notificaciones
		$this->js('/js/jquery/noty/packaged/jquery.noty.packaged.js');
        $this->css('/js/jquery/validation-engine/css/validationEngine.jquery.css');
        $this->js('/js/jquery/validation-engine/js/jquery.validationEngine.js');
        $this->js('/js/jquery/validation-engine/js/languages/jquery.validationEngine-es.js');
        #NEWSLETTER
        $this->js('/js/sistema/newsletter/index.js');
        
        //$this->js('/js/sistema/anclas.js');

        #layout
        if(isset($this->obj->layout_view))
			$this->layout_view = $this->obj->layout_view;

    }

    function view($view, $data = null, $return = false) {
        
        //echo "gol";
        if($a = $this->obj->ws->listar(23,'pro_estado = 1 and pro_verano = 1')){
           
            //print_array($a);
            $data['super_promociones_verano'] = true;
        }

		#render template
        $data['content_for_layout'] = $this->obj->load->view($view, $data, true);

        #Información Top y Footer
        $this->obj->load->library("ws");
        
        #Datos generales
        $data['generales'] = $this->obj->ws->obtener(34,"dag_codigo = 1");
        
        #Auspiciadores
        $this->obj->ws->order("aus_orden");
        $data['auspiciadores'] = $this->obj->ws->listar(40,"aus_estado = 1");

        #template
        $this->block_replace = true;
        $output = $this->obj->load->view($this->layout_view, $data, $return);

        return $output;
    }

    /**
     * Agregar title a la pagina actual
     *
     * @param $title
     */
    function title($title) {
      #Información Top y Footer
      $this->obj->load->library("ws");
      #Datos generales
      $generales = $this->obj->ws->obtener(34,"dag_codigo = 1");
      if($title)
        $this->title = $title.' - '.$generales->metadato_titulo;
      else
        $this->title = $generales->metadato_titulo;
    }

	function getTitle(){
        return $this->title;
	}

    /**
     * Agregar Javascript a la pagina actual
     * @param $item
     */
    function js($item){
        $this->js_list[] = $item;
    }

	function getJs(){
		$js = '';
		if($this->js_list){
			foreach ($this->js_list as $aux){
				$js .= '<script type="text/javascript" src="'.$aux.'"></script>
		';
			}
		}
		return $js;
    }

    /**
     * Agregar CSS a la pagina actual
     * @param $item
     */
    function css($item){
        $this->css_list[] = $item;
    }

	function getCss(){
		$css = '';
		if($this->css_list){
			foreach ($this->css_list as $aux){
				$css .= '<link rel="stylesheet" type="text/css"  href="'.$aux.'" />
		';
			}
		}
		return $css;
    }

	/**
     * Agregar Metas a la pagina actual
     * @param $name, $content
     */
    function setMeta($name,$content) {
        $meta->name = $name;
        $meta->content = $content;
        #$this->metas[] = $meta;

    }

	function headMeta() {
		$metas = '';
    #Información Top y Footer
    $this->obj->load->library("ws");
    #Datos generales
    $generales = $this->obj->ws->obtener(34,"dag_codigo = 1");
    $meta->name = 'title';
    $meta->content = $generales->metadato_titulo;
    $this->metas[] = $meta;
    unset($meta);
    $meta->name = 'description';
    $meta->content = $generales->metadato_descripcion;
    $this->metas[] = $meta;
    unset($meta);
    $meta->name = 'keywords';
    $meta->content = $generales->metadato_keywords;
    $this->metas[] = $meta;
    unset($meta);
		if($this->metas){
			foreach($this->metas as $aux){
				$metas .= '<meta name="'.$aux->name.'" content="'.$aux->content.'" />
		';
			}
		}
        return $metas;
    }

	/**
     * Agregar Navegacion a la pagina actual
     * @param $nav
     */
    function nav($nav) {
		$this->navegacion = $nav;
    }

	function getNav() {
		$html = '';
		if($this->navegacion){
			$html = '<nav id="navigation">Usted está en: <a href="/">Inicio</a>';
			$i = 1;
			$ruta_master = '/';

			$html .= ' &gt; ';
			foreach($this->navegacion as $nombre=>$ruta)
			{
				$ruta_master = "/".$ruta."/";
				$html .= ($i==count($this->navegacion))? '<span>'.$nombre.'</span>':'<a href="'.$ruta_master.'">'.$nombre.'</a> &gt; ';
				$i++;
			}

			 $html .='</nav>';
		}
		return $html;
	}

}
