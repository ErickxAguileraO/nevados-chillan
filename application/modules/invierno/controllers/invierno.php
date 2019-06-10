<?php if (!defined('BASEPATH')) exit('No puede acceder a este archivo');

class Invierno extends CI_Controller {

    function __construct() {

        parent::__construct();

	#current
        $this->layout->current = 5;
    }

    public function index() {
		
        $tipo_seccion = 9;

	#Title
    $this->layout->title('Actividades Invierno');
	
	#Metas
    $this->layout->setMeta('title', 'Descúbrenos');
    $this->layout->setMeta('description', 'Descúbrenos');
    $this->layout->setMeta('keywords', 'Descúbrenos');

	#flexslider
    $this->layout->css('/js/jquery/flexslider/flexslider.css');
    $this->layout->js('/js/jquery/flexslider/jquery.flexslider.js');

	#WebFont
    $this->layout->css('/css/webfont/stylesheet.css');

	#Venobox
    $this->layout->css('/js/jquery/venobox/venobox.css');
    $this->layout->js('/js/jquery/venobox/venobox.min.js');


	#Layout promociones
    $this->layout->js('/js/jquery/promociones/jquery.mixitup.min.js');
    $this->layout->css('/js/jquery/promociones/layout.css');

//Contenido
//slider
        $this->ws->order('sli_orden ASC');
        $data['sliders'] = $this->ws->listar(13, 'sli_tipo_seccion = 9 and sli_estado = 1');

//Secciones
    
  

        $this->ws->order('secc_orden ASC');
        $secciones = $this->ws->listar(19, 'secc_tipo_seccion = 9 and secc_estado = 1');
        foreach($secciones as $sec){
          $sec->galeria = $this->ws->listar(76, "sec2_seccion = ".$sec->codigo);
        }
    
        $data['secciones']  = $secciones;


//Cafeteria
        $this->ws->order('caf_orden ASC');
        $data['cafeterias'] = $this->ws->listar(44, 'caf_estado = 1');

//Servicios complementarios
        $this->ws->order('sec_orden ASC');
        $this->ws->joinInner(36, 'scts_servicio_complementario = sec_codigo');
        $data['servicios'] = $this->ws->listar(16, 'scts_tipo_seccion = 9 and sec_estado = 1');

//Programas y Valores
        $data['valores'] = $this->ws->obtener(27, 'prv_tipo_seccion = 9');

//Promociones
        $this->ws->order('pro_orden ASC');
        $data['promociones'] = $this->ws->listar(23, 'pro_estado = 1 and pro_invierno = 1');

        //introduccion
        $data['introduccion'] = $this->ws->obtener(69, 'int_tipo_seccion = ' . $tipo_seccion . ' and int_visible = 1');


        $this->ws->order('prog_orden ASC');
        $programas = $this->ws->listar(72,'prog_estado = 1 and prog_tipo = "invierno"');
        foreach($programas as $pro){
                $this->ws->order('opc_orden ASC');
                $pro->opciones = $this->ws->listar(73, "opc_programa_verano = ".$pro->codigo);
        }

        $data["programas"] = $programas;

#Nav
        $this->layout->nav(array("Invierno" => "/"));

#La vista siempre,  debe ir cargada al final de la función
        $this->layout->view('index', $data);
    }


    public function Mapa_de_pistas()
    {
#Title
        $this->layout->title('Mapa de pistas');

#Metas
        $this->layout->setMeta('title', 'Mapa de pistas');
        $this->layout->setMeta('description', 'Mapa de pistas');
        $this->layout->setMeta('keywords', 'Mapa de pistas');

#flexslider
        $this->layout->css('/js/jquery/flexslider/flexslider.css');
        $this->layout->js('/js/jquery/flexslider/jquery.flexslider.js');

#WebFont
        $this->layout->css('/css/webfont/stylesheet.css');

#Venobox
        $this->layout->css('/js/jquery/venobox/venobox.css');
        $this->layout->js('/js/jquery/venobox/venobox.min.js');


#Layout promociones
        $this->layout->js('/js/jquery/promociones/jquery.mixitup.min.js');
        $this->layout->css('/js/jquery/promociones/layout.css');

//Contenido
//slider
        $this->ws->order('sli_orden ASC');
        $data['sliders'] = $this->ws->listar(13, 'sli_tipo_seccion = 9 and sli_estado = 1');

//Mapa de pistas
        $data['mapa'] = $this->ws->obtener(45, 'map_codigo = 1 and map_estado = 1');
#Nav
        $this->layout->nav(array("Invierno" => "invierno", "Mapa de pistas" => "/"));

#La vista siempre,  debe ir cargada al final de la función
        $this->layout->view('mapa_de_pistas', $data);
    }


    public function Infonieve()
    {
#Title
        $this->layout->title('Infonieve');

#Metas
        $this->layout->setMeta('title', 'Infonieve');
        $this->layout->setMeta('description', 'Infonieve');
        $this->layout->setMeta('keywords', 'Infonieve');

#flexslider
        $this->layout->css('/js/jquery/flexslider/flexslider.css');
        $this->layout->js('/js/jquery/flexslider/jquery.flexslider.js');

#WebFont
        $this->layout->css('/css/webfont/stylesheet.css');

#Venobox
        $this->layout->css('/js/jquery/venobox/venobox.css');
        $this->layout->js('/js/jquery/venobox/venobox.min.js');


#Layout promociones
        $this->layout->js('/js/jquery/promociones/jquery.mixitup.min.js');
        $this->layout->css('/js/jquery/promociones/layout.css');

//Contenido
//slider
        $this->ws->order('sli_orden ASC');
        $data['sliders'] = $this->ws->listar(13, 'sli_tipo_seccion = 9 and sli_estado = 1');

//Estado del Camino
        $data['estadoCamino'] = $this->ws->obtener(46, 'edc_codigo = 1');

//Nieve
        $data['nieve'] = $this->ws->obtener(47, 'niv_codigo = 1');

//Estado de Pistas
        $this->ws->order('edp_orden ASC');
        $data['estadoPistas'] = $this->ws->listar(48, 'edp_estado = 1');
//Andariveles
        $this->ws->order('eda_orden ASC');
        $data['andariveles'] = $this->ws->listar(49, 'eda_estado = 1');
//print_array($data['andariveles']);die;
#Nav
        $this->layout->nav(array("Invierno" => "invierno", "Infonieve" => "/"));

#La vista siempre,  debe ir cargada al final de la función
        $this->layout->view('infonieve', $data);
    }


    public function Freeride()
    {
#Title
        $this->layout->title('Backcountry');

#Metas
        $this->layout->setMeta('title', 'Backcountry');
        $this->layout->setMeta('description', 'Backcountry');
        $this->layout->setMeta('keywords', 'Backcountry');

#flexslider
        $this->layout->css('/js/jquery/flexslider/flexslider.css');
        $this->layout->js('/js/jquery/flexslider/jquery.flexslider.js');
        $this->layout->js('/js/jquery/ckeditor-standard/ckeditor.js');

#WebFont
        $this->layout->css('/css/webfont/stylesheet.css');

#Venobox
        $this->layout->css('/js/jquery/venobox/venobox.css');
        $this->layout->js('/js/jquery/venobox/venobox.min.js');


#Layout promociones
        $this->layout->js('/js/jquery/promociones/jquery.mixitup.min.js');
        $this->layout->css('/js/jquery/promociones/layout.css');

//Contenido
//slider
        $this->ws->order('sli_orden ASC');
        $data['sliders'] = $this->ws->listar(13, 'sli_tipo_seccion = 9 and sli_estado = 1');

//Freeride
        $data['freeride'] = $this->ws->obtener(55, 'fre_codigo = 1');

#Nav
        $this->layout->nav(array("Invierno" => "invierno", "Backcountry" => "/"));

#La vista siempre,  debe ir cargada al final de la función
        $this->layout->view('freeride', $data);
    }


    public function Escuela()
    {
#Title
        $this->layout->title('Escuela');

#Metas
        $this->layout->setMeta('title', 'Escuela');
        $this->layout->setMeta('description', 'Escuela');
        $this->layout->setMeta('keywords', 'Escuela');

#flexslider
        $this->layout->css('/js/jquery/flexslider/flexslider.css');
        $this->layout->js('/js/jquery/flexslider/jquery.flexslider.js');

#WebFont
        $this->layout->css('/css/webfont/stylesheet.css');

#Venobox
        $this->layout->css('/js/jquery/venobox/venobox.css');
        $this->layout->js('/js/jquery/venobox/venobox.min.js');


#Layout promociones
        $this->layout->js('/js/jquery/promociones/jquery.mixitup.min.js');
        $this->layout->css('/js/jquery/promociones/layout.css');

//Contenido
//slider
        $this->ws->order('sli_orden ASC');
        $data['sliders'] = $this->ws->listar(13, 'sli_tipo_seccion = 9 and sli_estado = 1');

//Conoce nuestras instalaciones
        $data['instalaciones'] = $this->ws->obtener(51, 'cni_codigo = 1');
//Imágenes instalaciones
        $this->ws->order('sli_orden ASC');
        $data['imagenes'] = $this->ws->listar(52, 'cnii_conoce_nuestras_instalaciones = 1');

//Profesor Guía
        $data['profesor'] = $this->ws->obtener(53, 'prg_codigo = 1');

//Programas y Valores
        $data['valores'] = $this->ws->obtener(27, 'prv_tipo_seccion = 10');


//Secciones
   
        $this->ws->order('secc_orden ASC');
        $secciones =  $this->ws->listar(19, 'secc_tipo_seccion = 13 and secc_estado = 1');
        foreach($secciones as $sec){
          $sec->galeria = $this->ws->listar(76, "sec2_seccion = ".$sec->codigo);
        }
    
        $data['secciones']  = $secciones;






#Nav
        $this->layout->nav(array("Invierno" => "invierno", "Escuela" => "/"));

#La vista siempre,  debe ir cargada al final de la función
        $this->layout->view('escuela', $data);
    }

    public function createPdf()
    {

        //Estado del Camino
        $data['estadoCamino'] = $this->ws->obtener(46, 'edc_codigo = 1');

//Nieve
        $data['nieve'] = $this->ws->obtener(47, 'niv_codigo = 1');

//Estado de Pistas
        $this->ws->order('edp_orden ASC');
        $data['estadoPistas'] = $this->ws->listar(48, 'edp_estado = 1');
        # print_array($data['estadoPistas']);die;
//Andariveles
        $this->ws->order('eda_orden ASC');
        $data['andariveles'] = $this->ws->listar(49, 'eda_estado = 1');


        $html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Documento sin título</title>
<style type="text/css">
body{
	font-family: sans-serif;
}
table {
	border: 0;
	border-collapse: collapse;
}
table td {
	font-size: 14px;
	line-height: 20px;
}
.icono {
	vertical-align: middle;
	margin-right: 10px;
}
h1 {
	margin: 10px 0;
	padding: 0;
	font-size: 25px;
    color: #00274c;
}
h3 {
	margin: 0;
	padding: 0;
	font-size: 16px;
    color: #00274c;
}
strong{
	color: #00274c;
}
.icono2 {
	vertical-align: middle;
	margin-left: 10px;
	float: right;
}
.cabecera {
	width:90%;
	margin: 20px auto 50px auto;
}
.clear {
	clear: both;
}
</style>
</head>

<body>
<div class="cabecera"> <img src="imagenes/template/logo-header.jpg" style="float: left; margin-right: 40px;" />
    <h1 style="font-size: 30px; float: left; padding-top: 40px;">Infonieve</h1>
    <div class="clear"></div>
  </div>
<table style="width:90%; margin: 0 auto; margin-bottom: 50px;">
  <tr>
    <td colspan="3"><h1 style="padding-bottom: 30px">Estado del Camino</h1></td>
  </tr>
  <tr>
    <td><table  width="200px" style=" border-right: 1px solid #aeafb1;">
        <tr>
          <td style="padding: 10px 40px 10px 0;">Etado del camino: <br />
            <strong>';
        echo ($data['estadoCamino']->estado_de_camino == 1) ? "Abierto" : "Cerrado";

        $html .= '</strong></td>
        </tr>
        <tr>
          <td style="padding: 10px 40px 10px 0;">Tránsito: <br />
            <strong>' . $data['estadoCamino']->transito . '</strong></td>
        </tr>
        <tr>
          <td style="padding: 10px 40px 10px 0;">Porte de cadenas: <br />
            <strong>' . $data['estadoCamino']->porte_de_cadenas . '</strong></td>
        </tr>
        <tr>
          <td style="padding: 10px 40px 10px 0;">Uso de cadenas: <br />
            <strong>' . $data['estadoCamino']->uso_de_cadenas . '</strong></td>
        </tr>
      </table></td>
    <!-- Observaciones -->
    <td><table style="width: 90%;">
        <tr>
          <td style="padding: 10px 20px 10px 20px;"><strong>Observaciones</strong> <br />
            ' . $data['estadoCamino']->observaciones . '</td>
        </tr>
        <tr>
          <td style="padding: 10px 0px 10px 20px;"><strong>Horarios de subida y bajada</strong>
          ' . $data['estadoCamino']->horarios . '
          </td>
        </tr>
      </table></td>
    <td><!-- Aquí debe ir widget en caso de que se pueda imprimir --></td>
  </tr>
</table>
<!-- Tabla nieve -->
<table style="width:90%; margin: 0 auto 50px auto; border-top: 1px solid #aeafb1;">
  <tr>
    <td style="padding-top:30px;" colspan="3"><h1>Nieve</h1></td>
  </tr>
  <tr>
    <td style="padding:10px 0 20px 0"><img src="imagenes/template/nieve-icono.png" class="icono" />Nieve acumulada: <strong>"' . $data['nieve']->nieve_acumulada . '"</strong></td></tr>
	<tr>
    <td style="padding:10px 0 20px 0"><img src="imagenes/template/nieve-icono.png" class="icono"/>Nieve Caida en Las Ultimas 24 Horas: <strong>"' . $data['nieve']->nieve_caida_24h . '"</strong></td></tr>
	<tr>
    <td style="padding:10px 0 20px 0"><img src="imagenes/template/nieve-icono.png" class="icono"/>Calidad de la nieve: <strong>"' . $data['nieve']->calidad_nieve . '"</strong></td></tr>
  <tr>
    <td style="padding:10px 0 20px 0"><img src="imagenes/template/viento-icono.png" class="icono"/>Velocidad del viento: <strong>' . $data['nieve']->velocidad_viento . '</strong></td>
  </tr>
</table>
<br /><br /><br /><br /><br /><br />
<!-- Tabla estado pistas -->
<table style="width:90%; margin: 0 auto; margin-bottom: 50px;">
  <tr>
    <td colspan="3" style="padding:50px 0;"><h1>Estado de Pistas</h1></td>
  </tr>
  <tr>
     <tr>
       <td style="padding: 10px 20px 10px 0;"><strong>Dificultad:</strong></td></tr>
	   <tr>
       <td style="padding: 10px 20px 10px 0;"><img src="imagenes/template/principiante.png" class="icono" />Principiante </td>
       <td style="padding: 10px 20px 10px 0;"><img src="imagenes/template/intermedio.png" class="icono" />Intermedio</td>
       <td style="padding: 10px 20px 10px 0;"><img src="imagenes/template/avanzado.png" class="icono" />Avanzado</td>
       <td style="padding: 10px 20px 10px 0;"><img src="imagenes/template/experto.png" class="icono" />Experto </td></tr>
        <tr>
              <tr>
                <td style="padding-bottom:10px;"><strong>Estado:</strong></td></tr>
              <tr>
			  <tr>
                <td style="padding-right: 10px;"><img src="imagenes/template/verde.png" class="icono" />Abierto</td>
                <td><img src="imagenes/template/rojo.png" class="icono" />Cerrado</td>
              </tr>
      </table>
	  
    <table >';
        $html .= '<tr>';
        $j = 1;
        #print_array($data['estadoPistas']);die;
        foreach ($data['estadoPistas'] as $item) {


            $html .= '
                                        <td  style="width: 150px; padding-bottom:30px; padding-right: 30px; padding-left:20px;"><h3>"' . $item->nombre . '"</h3>  
                                        <br>
                                        Dificultad:';

            if ($item->dificultad == 'Principiante')
                $html .= '<img class="icono2" src="imagenes/template/principiante.png" />';
            if ($item->dificultad == 'Intermedio')
                $html .= '<img class="icono2" src="imagenes/template/intermedio.png" />';
            if ($item->dificultad == 'Avanzado')
                $html .= '<img class="icono2" src="imagenes/template/avanzado.png" />';
            if ($item->dificultad == 'Experto')
                $html .= '<img class="icono" src="imagenes/template/experto.png" />';

            $html .= '<br >
                                     Estado:';

            if ($item->estado_pista == 1)
                $html .= '<img class="icono2" src="imagenes/template/verde.png" />';
            else {
                $html .= '<img class="icono2" src="imagenes/template/rojo.png"  />';
            }
            $html .= '</td><br> ';
            if ($j % 5 == 0) $html .= '</tr><tr>';
            if (!next($item)) $html .= '</tr>';

            $j++;
        }

        $html .= '</table>

<!-- Tabla estado andariveles -->
<table style="width:90%; margin: 0 auto; margin-bottom: 50px;">
  <tr>
    <td colspan="2" style="padding:50px 0;"><h1>Andariveles</h1></td>
  </tr>
        <tr>
                <td style="padding-bottom:10px;"><strong>Estado:</strong></td>
              </tr>
			  
              <tr>
                <td style="padding-right: 10px;"><img src="imagenes/template/verde.png" class="icono" />Abierto</td></tr>
				<tr>
                <td><img src="imagenes/template/rojo.png" class="icono" />Cerrado</td>
              </tr>
			  
      </table>
    <!-- Observaciones -->
    <table>';
        $html .= '<tr>';
        $j = 1;
        foreach ($data['andariveles'] as $item) {

            $html .= '
                                        <td  style="width: 150px; padding-bottom:30px; padding-right: 30px; padding-left:20px;"><h3>"' . $item->nombre . '"</h3>  
                                        <br>
                                        Estado:';

            if ($item->estado_andarivel == 1)
                $html .= '<img class="icono2" src="imagenes/template/verde.png" />';
            else {
                $html .= '<img class="icono2" src="imagenes/template/rojo.png"  />';
            }
            $html .= '</td><br> ';
            if ($j % 5 == 0) $html .= '</tr><tr>';
            if (!next($item)) $html .= '</tr>';
            $j++;
        }
        # $html.='</tr>';


        $html .= ' </table>
                </body>
                </html>';

        $nombrePdf = "pdf" . time() . '.pdf';
        require APPPATH . "libraries/mpdf60/mpdf.php";

        $rutaPdf = "/archivos/";
        if (!file_exists($_SERVER['DOCUMENT_ROOT'] . $rutaPdf))
            mkdir($_SERVER['DOCUMENT_ROOT'] . $rutaPdf, 0777);
        $rutaPdf .= "pdf/";
        if (!file_exists($_SERVER['DOCUMENT_ROOT'] . $rutaPdf))
            mkdir($_SERVER['DOCUMENT_ROOT'] . $rutaPdf, 0777);

        ob_start();
        $mpdf = new mPDF('utf-8', 'A4', '', '', 14, 14, 25, 20, 6, 3);
        $mpdf->use_embeddedfonts_1252 = true; // false is default
        $mpdf->SetDisplayMode('fullpage');
        $mpdf->SetTitle('Aeurus');
        $mpdf->SetAuthor('Aeurus');
        $mpdf->SetHeader($header);
        $mpdf->WriteHTML($html);
        $mpdf->SetFooter($footer);
        $mpdf->Output($_SERVER['DOCUMENT_ROOT'] . $rutaPdf . $nombrePdf, 'F');

        redirect($rutaPdf . $nombrePdf);

    }



public function descargar_archivo(){
               // $codigo = $this->uri->segment(4);
       //$archivo = $this->ws->obtener(43,"ippa_codigo = $codigo");
       $archivo=false;
       $archivo->ruta='/imagenes/modulos/invierno/mapa-pistas/';
       $archivo->nombre='1528829058-grande';
       $archivo->extension='.jpg';
    $URL_ADMINISTRACION='adminevados.aeurus.cl';

       $this->load->helper('download');
       //$data = file_get_contents($URL_ADMINISTRACION.$archivo->ruta);
       $data = file_get_contents('/admin/imagenes/modulos/invierno/mapa-pistas/1528829058-grande.jpg');
       $name = slug($archivo->nombre).'.'.$archivo->extension;
             
       force_download($name, $data);
   }


}
