<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "inicio";
$route['404_override'] = '';

#Descubrenos
$route['descubrenos/historia'] = 'descubrenos/historia';
$route['descubrenos/valle-las-trancas'] = 'descubrenos/valle_las_trancas';

#Montaña
$route['montana/mapa-de-pistas'] = 'invierno/mapa_de_pistas';
$route['montana/reporte'] = 'montana/reporte';
$route['montana/info-ski'] = 'montana/info_ski';

#ALOJAMIENTO
$route['alojamiento/hotel-nevados'] = 'alojamiento';
//$route['alojamiento/hotel-nevados/(:any)'] = 'alojamiento/index/$1';
$route['alojamiento/hotel-alto-nevados'] = 'alojamiento';
//$route['alojamiento/hotel-alto-nevados/(:any)'] = 'alojamiento/index/$1';
$route['alojamiento/deptos-valle-hermoso'] = 'alojamiento';
$route['alojamiento/promociones'] = 'alojamiento/promociones';
$route['alojamiento/promocion/descargar_archivo/(:num)'] = 'alojamiento/promociones/descargar_archivo/$1';
$route['alojamiento/promocion/(:any)'] = 'alojamiento/promociones/detalle_promocion';
$route['alojamiento/(:any)/descargarcalendario'] = 'alojamiento/descargarcalendario';

#PARQUE DE AGUA
$route['parque-de-agua'] = 'parque_de_agua';

#VALLE HERMOSO
$route['valle-hermoso'] = 'valle_hermoso';
//$route['valle-hermoso/($any)'] = 'valle_hermoso/index/$1';


#Necesitas ayuda
$route['necesitas-ayuda'] = 'necesitas_ayuda/index';
$route['necesitas-ayuda/contacto'] = 'necesitas_ayuda/contacto';
$route['necesitas-ayuda/contacto/enviado'] = 'necesitas_ayuda/contacto';
$route['necesitas-ayuda/contacto/envio'] = 'necesitas_ayuda/envio';
$route['necesitas-ayuda/faqs'] = 'necesitas_ayuda/faqs';
$route['necesitas-ayuda/trabaja-con-nosotros'] = 'necesitas_ayuda/trabaja_nosotros';
$route['necesitas-ayuda/trabaja-con-nosotros/enviado'] = 'necesitas_ayuda/trabaja_nosotros';
$route['necesitas-ayuda/faqs/enviado'] = 'necesitas_ayuda/faqs';
$route['necesitas-ayuda/faqs/envio'] = 'necesitas_ayuda/envio_trabaja';
$route['necesitas-ayuda/como-llegar'] = 'necesitas_ayuda/como_llegar';
$route['necesitas-ayuda/condiciones'] = 'necesitas_ayuda/condiciones';
$route['necesitas-ayuda/condiciones/descargar_archivo/(:num)'] = 'necesitas_ayuda/descargar_archivo';

$route['noticias/prensa'] = 'noticias/prensa';
$route['noticias/prensa/descargar_archivo/(:num)'] = 'noticias/descargar_archivo';

$route['en-vivo'] = 'en_vivo/index';

#Verano
$route['bikepark'] = 'verano/bikepark';
$route['calendario/categoria/(:any)'] = 'verano/calendario';
$route['calendario/(:any)'] = 'verano/detalle_calendario';
$route['calendario'] = 'verano/calendario';

/* Invierno */
/*$route['invierno/mapa-de-pistas'] = 'invierno/mapa_de_pistas';*/
/*$route['invierno/infornieve'] = 'invierno/infonieve';*/
$route['invierno/backcountry'] = 'invierno/freeride';
$route['invierno/rental'] = 'invierno/rental';
$route['invierno/escuela'] = 'invierno/escuela';
$route['invierno/bikepark'] = 'verano/bikepark';
$route['invierno/calendario'] = 'verano/calendario';
$route['invierno/descargar_archivo'] = 'invierno/descargar_archivo';

/**EXPERIENCIAS */
#CAMBIO DE NOMBRE DE "PROGRAMAS" A "EXPERIENCIAS" HECHO EL 07/06/2021
$route['experiencias'] = 'programas/index';


/* RUTAS PYME */
$route['quienes-somos'] = 'editable_no-se-usa/editable/index';

#Rutas Producto
// $route['productos'] = 			'productos';
// $route['productos/detalle'] =	'productos/detalle/$1';
// $route['productos/page'] =

#Rutas Mapa del Sitio
$route['mapa-del-sitio'] = 'inicio/mapaDelSitio';

#Rutas Teclas de Acceso
$route['accesibilidad'] = 'inicio/accesibilidad';

#Exito newsletter
$route['exito'] = 'inicio';

#Rutas Contacto
$route['contacto'] = "contactos/index";
$route['contacto/envio'] = "contactos/envio";
$route['contacto/enviado'] = "contactos/index";

//$route['carro-de-compras'] = "carro_de_compra";
//$route['carro-de-compras/agregar/(:num)'] = "carro_de_compra/agregar/$1";

#Rutas Noticia
$route['noticias'] = "noticias";
$route['noticias/(:num)'] = "noticias/index/$1";
$route['noticias/(:num)/(:num)/(:num)/(:any)'] = "noticias/detalle/$1/$2/$3/$4";
#prueba
// $route['form'] = "prueba/formulario";
// $route['form/form'] = "prueba/formulario";
// $route['form/(:any)'] = "prueba/formulario";
// $route['form/(:num)'] = "prueba/formulario/$1";
$route['landing/envio'] = "landing/envio";
$route['landing/(:any)'] = "landing/detalle/$1";
$route['landing/(:any)/exito'] = "landing/detalle/$1";
//$route['landing/envio'] = "landing/envio";
//$route['/landing/suscripcion-newsletter-exito'] = = "landing/envio";






/* End of file routes.php */
/* Location: ./application/config/routes.php */
