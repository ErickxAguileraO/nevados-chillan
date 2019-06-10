<?php if ( ! defined('BASEPATH')) exit('No puede acceder a este archivo');

class Alojamiento extends CI_Controller {
private $modulo = 18, $modulo_hotel = 14;
function __construct(){

parent::__construct();


#current
$this->layout->current = 2;
}

public function index()	{

  
    $hotel = $this->ws->obtener(14, "ho_url = '" . $this->uri->segment(2) . "'");

    if ($hotel->url == 'hotel-nevados')
        $tipo_seccion = 5;
    elseif ($hotel->url == 'hotel-alto-nevados')
        $tipo_seccion = 6;

    //introduccion
    $data['introduccion'] = $this->ws->obtener(69, 'int_tipo_seccion = ' . $tipo_seccion . ' and int_visible = 1');


    #Title
  $this->layout->title('Alojamiento '.$hotel->nombre);


  #Metas
  #$this->layout->setMeta('title','Alojamiento');
  #$this->layout->setMeta('description','Alojamiento');
  #$this->layout->setMeta('keywords','Alojamiento');


/*
  #Venobox
  $this->layout->css('/js/jquery/venobox/venobox.css');
  $this->layout->js('/js/jquery/venobox/venobox.min.js');
  */
  #flexslider
  $this->layout->css('/js/jquery/flexslider/flexslider.css');
  $this->layout->js('/js/jquery/flexslider/jquery.flexslider.js');

  #WebFont
  $this->layout->css('/css/webfont/stylesheet.css');

  #Venobox
  $this->layout->css('/js/jquery/venobox/venobox.css');
  $this->layout->js('/js/jquery/venobox/venobox.min.js');

  //Contenido
  //slider
  $this->ws->order('sli_orden ASC');
  $data['sliders'] = $this->ws->listar(13,'sli_hotel = '.$hotel->codigo.' and sli_estado = 1');

  //Habitaciones
  $this->ws->order('hab_orden ASC');
  $habitaciones = $this->ws->listar(15,'hab_hotel = '.$hotel->codigo.' and hab_estado = 1');
  $array_habitaciones = array();
  foreach($habitaciones as $habitacion):
    $obj = new stdClass();
    $obj = $habitacion;
    $this->ws->group('habi_codigo');
    $obj->imagenes = $this->ws->listar(22,'habi_habitacion = '.$habitacion->codigo.'');
    $array_habitaciones[] = $obj;
  endforeach;
  $data['habitaciones'] = $array_habitaciones;

  //Servicios complementarios
  if($hotel->codigo == 1)
    $tipoSeccion = 5;//5,6,7
  if($hotel->codigo == 2)
    $tipoSeccion = 6;//5,6,7
  if($hotel->codigo == 3)
    $tipoSeccion = 7;//5,6,7
  $this->ws->order('sec_orden ASC');
  $this->ws->joinInner(36,'scts_servicio_complementario = sec_codigo');
  $data['servicios'] = $this->ws->listar(16,'scts_tipo_seccion = '.$tipoSeccion.' and sec_estado = 1');

  //Actividades
  if($hotel->codigo == 3)
    $this->ws->limit(3);
  else
    $this->ws->limit(2);
  $this->ws->order('act_orden ASC');
  $data['actividades'] = $this->ws->listar(17,'act_hotel = '.$hotel->codigo.' and act_estado = 1');

  //Calendarios Diarios
  $this->ws->order('cad_hora_inicio ASC');
  $data['calendarios'] = $this->ws->listar(18,'cad_hotel = '.$hotel->codigo.' and cad_estado = 1');

  //Secciones
  $this->ws->order('secc_orden ASC');
  $secciones =  $this->ws->listar(19,'secc_hotel = '.$hotel->codigo.' and secc_tipo_seccion = 1 and secc_estado = 1');
  foreach($secciones as $sec){
    $sec->galeria = $this->ws->listar(76, "sec2_seccion = ".$sec->codigo);
  }

  $data['secciones']  = $secciones;









  //Testimonios
  $this->ws->order('tes_orden ASC');
  $data['testimonios'] = $this->ws->listar(20,'tes_hotel = '.$hotel->codigo.' and tes_estado = 1');

  //Banner
  $this->ws->order('ban_orden ASC');
  $data['banners'] = $this->ws->listar(21,'ban_hotel = '.$hotel->codigo.' and ban_tipo_seccion = 1 and ban_estado = 1');

  

  #La vista siempre,  debe ir cargada al final de la función
  if($hotel->codigo == 1){
    #Nav
  $this->layout->nav(array("Alojamiento: Hotel Nevados"=>"/",));
  $this->layout->view('/alojamiento/hotel_nevados',$data);
    
    }
  if($hotel->codigo == 2){
    #Nav
  $this->layout->nav(array("Alojamiento: Hotel Alto Nevados"=>"/",));
  $this->layout->view('/alojamiento/hotel_alto_nevado',$data);
    
    }
  if($hotel->codigo == 3){
    #Nav
  $this->layout->nav(array("Alojamiento: Valle Hermoso"=>"/",));
  $this->layout->view('/alojamiento/deptos_valle_hermoso',$data);
    
    }
  //$this->layout->view('index');
}

public function descargarCalendario()	{
    #OBTENESMOS EL ID DEL HOTEL SEGUN LA URL 
    $where = "ho_url = '{$this->uri->segment(2)}'";  
    $hoteles = $this->ws->obtener(14,$where);  
    #FILTRAMOS SOLOS HORARIOS POR EL HOTEL OBTENIDO EN LA URL
    $where = "cad_hotel =". $hoteles->codigo;
    $calendarios = $this->ws->listar($this->modulo, $where);   
    #print_array($calendarios);die;    
  $html= '<style type="text/css">

table {
	border-collapse: collapse;
	text-align: center;
}
table th {
	background: #f2f2f2;
}
table th, table td {
	padding: 7px 0;
	font-size: 14px;
}
.contenedor {
	width: 80%;
	margin: 0 auto;
}
.cabecera {
	margin-bottom: 30px;
}


.datos{
	font-size: 13px;
	margin-top: 20px;
	line-height:22px;
}
</style>

<body>
<div class="contenedor">
  <div class="cabecera"> <img src="https://www.nevadosdechillan.com/imagenes/logo-header.jpg" style="float: left; margin-right: 40px;" />
    <h1>Calendario de Actividades</h1>
    <div class="clear"></div>
  </div>
  <table width="100%" border="1px" align="center"  >';
                                foreach($calendarios as $aux){
                                    $html .= '<tr>
                                        <td>'.$aux->hora_inicio." ".$aux->hora_termino.'</td>
                                        <td>'.$aux->titulo.'</td>
                                        <td>'.$aux->sector.'</td>
                                    </tr>';
                                }
                            $html .= '
  </table>
  <div class="datos"> <strong>Oficina Chillán:</strong> +56 (42) 220 6100 |
    operadora@nevadosdechillan.com |
    Lunes a viernes 09:00 a 13:00 | 14:30 a 18:00 hrs. <br />
    
    <strong>Oficina Concepción:</strong> +56 (41) 237 1503 |
    concepcion@nevadosdechillan.com |
    Lunes a viernes 09:00 a 13:00 | 14:00 a 18:00 hrs </div>
</div>
</div>
</body>';
    #contenido
    $rutaPdf = "/archivos/";
		if(!file_exists($_SERVER['DOCUMENT_ROOT'].$rutaPdf))
		  mkdir($_SERVER['DOCUMENT_ROOT'].$rutaPdf, 0777);
        
		$rutaPdf .= "pdf/";
		if(!file_exists($_SERVER['DOCUMENT_ROOT'].$rutaPdf))
		  mkdir($_SERVER['DOCUMENT_ROOT'].$rutaPdf, 0777);

		$nombrePdf = "pdf-calendario-".time().'.pdf';
		require $_SERVER['DOCUMENT_ROOT']."/application/libraries/mpdf60/mpdf.php";

		$mpdf->use_embeddedfonts_1252 = true; // false is default

		ob_start();
		$mpdf=new mPDF('utf-8','A4','','',0,0,0,0,6,3);
		$mpdf->SetDisplayMode('fullpage');
		$mpdf->SetTitle('Calendario Nevados');
		$mpdf->SetAuthor('Nevados');
		$mpdf->WriteHTML($html);
		$mpdf->Output($nombrePdf,'D');  
    }

}
