<?php if ( ! defined('BASEPATH')) exit('No puede acceder a este archivo');

class Noticias extends CI_Controller {

	function __construct(){

		parent::__construct();

		#current
		$this->layout->current = 6;
	}

	public function index($pagina = 0) {
		#title
		$this->layout->title('Noticias');

		#metas
		$this->layout->setMeta('title','Noticias');
		$this->layout->setMeta('description','Noticias');
		$this->layout->setMeta('keywords','Noticias');

		#JS - pagination
		$this->layout->js('/js/jquery/rpage-master/responsive-paginate.js');
		$this->layout->js('/js/jquery/rpage-master/paginate-init.js');

		#flexslider
		$this->layout->css('/js/jquery/flexslider/flexslider.css');
		$this->layout->js('/js/jquery/flexslider/jquery.flexslider.js');

		#WebFont
		$this->layout->css('/css/webfont/stylesheet.css');


		#nav
		$this->layout->nav(array("Noticias"=>"/"));

		//Contenido
	  //slider
	  $this->ws->order('sli_orden ASC');
	  $data['sliders'] = $this->ws->listar(13,'sli_tipo_seccion = 4 and sli_estado = 1');

		#Paginación
		$this->load->library('pagination');
		$config['uri_segment'] = 2;
		$config['base_url'] = base_url().'/noticias/';
		$config['per_page'] = 5;

		$this->ws->limit($config['per_page'],$pagina);
		$this->ws->order('not_fecha_publicacion DESC');
		#$this->ws->joinLeft(38,"not_codigo = noti_noticia");
	    $data['noticias'] = $this->ws->listar(37,'not_estado = 1');

        foreach ($data['noticias'] as $item):
            $item->noticias_imagenes = $this->ws->listar(38, 'noti_noticia = ' . $item->codigo);
        endforeach;

	  #print_array($data['noticias']);

		$config['total_rows'] = count($data['noticias']);
		$this->pagination->initialize($config);
		//print_array($data);die;
		#La vista siempre debe ir cargada al final de la función
		$this->layout->view('index', $data);
	}

	public function detalle($ano, $mes, $dia, $url) {
		$where = "not_fecha_publicacion = '".$ano."-".$mes."-".$dia."' and not_url = '".$url."'";
		$noticia = $this->ws->obtener(37,$where);

		if($noticia) {
			#title
			$this->layout->title($noticia->titulo);

			#metas
			$this->layout->setMeta('title',$noticia->titulo);
			$this->layout->setMeta('description',$noticia->resumen);
			$this->layout->setMeta('keywords',$noticia->titulo);
            
            #redes sociales
            $this->layout->js('/js/sistema/index/rs.js');
            
			#flexslider
			$this->layout->css('/js/jquery/flexslider/flexslider.css');
			$this->layout->js('/js/jquery/flexslider/jquery.flexslider.js');

			#WebFont
			$this->layout->css('/css/webfont/stylesheet.css');

			#Venobox
			$this->layout->css('/js/jquery/venobox/venobox.css');
			$this->layout->js('/js/jquery/venobox/venobox.min.js');

			#nav
			$this->layout->nav(array("Noticias"=>"noticias", $noticia->titulo =>"/"));

			$data["noticia"] = $noticia;
			$data["imagenes"] = $this->ws->listar(38,"noti_noticia = $noticia->codigo");

			$this->ws->limit(2);
			$this->ws->order('not_fecha_publicacion DESC');
			$this->ws->joinLeft(38,"not_codigo = noti_noticia");
            $data['noticias'] = $this->ws->listar(37,'not_estado = 1 and not_categoria = '.$data['noticia']->categoria.' and not_codigo != '.$data['noticia']->codigo.'');

			//slider
            $this->ws->order('sli_orden ASC');
            $data['sliders'] = $this->ws->listar(13,'sli_tipo_seccion = 4 and sli_estado = 1');
            
            #datos compartir facebook
            $data['compartir_rs'] = new stdClass();
            $data['compartir_rs']->titulo = $noticia->titulo;
            $data['compartir_rs']->resumen = $noticia->resumen;
            $data['compartir_rs']->imagen = ($data["imagenes"])?URL_ADMINISTRACION.$data["imagenes"][0]->ruta_interna:'';
            
		} else {
			show_404();
		}

		$this->layout->view('detalle', $data);

	}



	public function prensa()	{
		#Title
		$this->layout->title('Prensa');

		#Metas
		$this->layout->setMeta('title','Prensa');
		$this->layout->setMeta('description','Prensa');
		$this->layout->setMeta('keywords','Prensa');

		#flexslider
		$this->layout->css('/js/jquery/flexslider/flexslider.css');
		$this->layout->js('/js/jquery/flexslider/jquery.flexslider.js');

		#Venobox
		$this->layout->css('/js/jquery/venobox/venobox.css');
		$this->layout->js('/js/jquery/venobox/venobox.min.js');

		#WebFont
		$this->layout->css('/css/webfont/stylesheet.css');
        
        

		#Nav
		$this->layout->nav(array("noticias"=>"/"));

		//slider
		$this->ws->order('sli_orden ASC');
		$data['sliders'] = $this->ws->listar(13,'sli_tipo_seccion = 4 and sli_estado = 1');

		$where = "ipp_codigo = 1";
		$data['prensa'] = $this->ws->obtener(41,$where);
		$data['imagenes'] = $this->ws->listar(42,"ippi_informacion_para_prensa = 1");
		$data['archivos'] = $this->ws->listar(43,"ippa_informacion_para_prensa = 1");

		#La vista siempre,  debe ir cargada al final de la función
		$this->layout->view('prensa',$data);
}
public function descargar_archivo(){
				$codigo = $this->uri->segment(4);
       $archivo = $this->ws->obtener(43,"ippa_codigo = $codigo");

       $this->load->helper('download');
       $data = file_get_contents(URL_ADMINISTRACION.$archivo->ruta);
       $name = slug($archivo->nombre).'.'.$archivo->extension;
			 
       force_download($name, $data);
   }


}
