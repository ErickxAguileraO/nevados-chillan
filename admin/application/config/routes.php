<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "inicio";
$route['404_override'] = '';


/* RUTAS PYME */


#LOGIN

#login
$route['login']                 = "inicio/login";
$route['logout']                = "inicio/logout";
$route['recuperar-contrasena']  = "inicio/recuperar_contrasena";

#FIN LOGIN

#PERFIL
$route['perfil']            = "perfil";
$route['perfil/guardar']    = "perfil/guardar";
#FIN PERFIL


#HOTELES

#slider
$route['hoteles/(:any)/slider']                 = "hoteles/slider";
$route['hoteles/(:any)/slider/(:num)']          = "hoteles/slider";
$route['hoteles/(:any)/slider/agregar']         = "hoteles/slider/agregar";
$route['hoteles/(:any)/slider/editar/(:num)']   = "hoteles/slider/editar/$2";
$route['hoteles/(:any)/slider/eliminar']        = "hoteles/slider/eliminar";
$route['hoteles/slider/cargar-imagen']          = "hoteles/slider/cargar_imagen";
$route['hoteles/slider/cortar-imagen']          = "hoteles/slider/cortar_imagen";
$route['hoteles/slider/eliminar-imagen']        = "hoteles/slider/eliminar_imagen";

#introduccion
$route['hoteles/(:any)/introduccion']                 = "hoteles/introduccion";
$route['hoteles/(:any)/introduccion/agregar']         = "hoteles/introduccion/agregar";

#habitaciones
$route['hoteles/(:any)/habitaciones']                   = "hoteles/habitaciones";
$route['hoteles/(:any)/habitaciones/(:num)']            = "hoteles/habitaciones";
$route['hoteles/(:any)/habitaciones/agregar']           = "hoteles/habitaciones/agregar";
$route['hoteles/(:any)/habitaciones/editar/(:num)']     = "hoteles/habitaciones/editar/$2";
$route['hoteles/(:any)/habitaciones/eliminar']          = "hoteles/habitaciones/eliminar";
$route['hoteles/habitaciones/cargar-imagen']            = "hoteles/habitaciones/cargar_imagen";
$route['hoteles/habitaciones/cortar-imagen']            = "hoteles/habitaciones/cortar_imagen";
$route['hoteles/habitaciones/eliminar-imagen']          = "hoteles/habitaciones/eliminar_imagen";
$route['hoteles/habitaciones/eliminar-imagen-adjunta']  = "hoteles/habitaciones/eliminar_imagen_adjunta";

#actividades
$route['hoteles/(:any)/actividades']                = "hoteles/actividades";
$route['hoteles/(:any)/actividades/(:num)']         = "hoteles/actividades";
$route['hoteles/(:any)/actividades/agregar']        = "hoteles/actividades/agregar";
$route['hoteles/(:any)/actividades/editar/(:num)']  = "hoteles/actividades/editar/$2";
$route['hoteles/(:any)/actividades/eliminar']       = "hoteles/actividades/eliminar";
$route['hoteles/actividades/cargar-imagen']         = "hoteles/actividades/cargar_imagen";
$route['hoteles/actividades/cortar-imagen']         = "hoteles/actividades/cortar_imagen";
$route['hoteles/actividades/eliminar-imagen']       = "hoteles/actividades/eliminar_imagen";

#calendario diario
$route['hoteles/(:any)/calendario']                 = "hoteles/calendario";
$route['hoteles/(:any)/calendario/(:num)']          = "hoteles/calendario";
$route['hoteles/(:any)/calendario/agregar']         = "hoteles/calendario/agregar";
$route['hoteles/(:any)/calendario/editar/(:num)']   = "hoteles/calendario/editar/$2";
$route['hoteles/(:any)/calendario/eliminar']        = "hoteles/calendario/eliminar";

#secciones
$route['hoteles/(:any)/secciones']                  = "hoteles/secciones";
$route['hoteles/(:any)/secciones/(:num)']           = "hoteles/secciones";
$route['hoteles/(:any)/secciones/agregar']          = "hoteles/secciones/agregar";
$route['hoteles/(:any)/secciones/editar/(:num)']    = "hoteles/secciones/editar/$2";
$route['hoteles/(:any)/secciones/eliminar']         = "hoteles/secciones/eliminar";
$route['hoteles/secciones/cargar-imagen']           = "hoteles/secciones/cargar_imagen";
$route['hoteles/secciones/cortar-imagen']           = "hoteles/secciones/cortar_imagen";
$route['hoteles/secciones/eliminar-imagen']         = "hoteles/secciones/eliminar_imagen";
$route['hoteles/secciones/eliminar-imagen-adjunta'] = "hoteles/secciones/eliminar_imagen_adjunta";

#testimonios
$route['hoteles/(:any)/testimonios']                = "hoteles/testimonios";
$route['hoteles/(:any)/testimonios/(:num)']         = "hoteles/testimonios";
$route['hoteles/(:any)/testimonios/agregar']        = "hoteles/testimonios/agregar";
$route['hoteles/(:any)/testimonios/editar/(:num)']  = "hoteles/testimonios/editar/$2";
$route['hoteles/(:any)/testimonios/eliminar']       = "hoteles/testimonios/eliminar";
$route['hoteles/testimonios/cargar-imagen']         = "hoteles/testimonios/cargar_imagen";
$route['hoteles/testimonios/cortar-imagen']         = "hoteles/testimonios/cortar_imagen";
$route['hoteles/testimonios/eliminar-imagen']       = "hoteles/testimonios/eliminar_imagen";

#banners
$route['hoteles/(:any)/banners']                = "hoteles/banners";
$route['hoteles/(:any)/banners/(:num)']         = "hoteles/banners";
$route['hoteles/(:any)/banners/agregar']        = "hoteles/banners/agregar";
$route['hoteles/(:any)/banners/editar/(:num)']  = "hoteles/banners/editar/$2";
$route['hoteles/(:any)/banners/eliminar']       = "hoteles/banners/eliminar";
$route['hoteles/banners/cargar-imagen']         = "hoteles/banners/cargar_imagen";
$route['hoteles/banners/cortar-imagen']         = "hoteles/banners/cortar_imagen";
$route['hoteles/banners/eliminar-imagen']       = "hoteles/banners/eliminar_imagen";









$route['hoteles/(:any)/programas']                  = "hoteles/programas";
$route['hoteles/(:any)/programas/(:num)']           = "hoteles/programas";
$route['hoteles/(:any)/programas/agregar']          = "hoteles/programas/agregar";
$route['hoteles/(:any)/programas/editar/(:num)']    = "hoteles/programas/editar/$1";
$route['hoteles/(:any)/programas/eliminar']         = "hoteles /programas/eliminar";













#FIN HOTELES



#PROMOCIONES
$route['promociones']                           = "promociones";
$route['promociones/(:num)']                    = "promociones";
$route['promociones/agregar']                   = "promociones/agregar";
$route['promociones/editar/(:num)']             = "promociones/editar/$1";
$route['promociones/eliminar']                  = "promociones/eliminar";
$route['promociones/cargar-imagen']             = "promociones/cargar_imagen";
$route['promociones/cortar-imagen']             = "promociones/cortar_imagen";
$route['promociones/eliminar-imagen']           = "promociones/eliminar_imagen";
$route['promociones/descargar-archivo/(:num)']  = "promociones/descargar_archivo/$1";
$route['promociones/eliminar-archivo']          = "promociones/eliminar_archivo";
#FIN PROMOCIONES



#SERVICIOS COMPLEMENTARIOS
$route['servicios-complementarios']                 = "servicios_complementarios";
$route['servicios-complementarios/(:num)']          = "servicios_complementarios";
$route['servicios-complementarios/agregar']         = "servicios_complementarios/agregar";
$route['servicios-complementarios/editar/(:num)']   = "servicios_complementarios/editar/$1";
$route['servicios-complementarios/eliminar']        = "servicios_complementarios/eliminar";
$route['servicios-complementarios/cargar-imagen']   = "servicios_complementarios/cargar_imagen";
$route['servicios-complementarios/cortar-imagen']   = "servicios_complementarios/cortar_imagen";
$route['servicios-complementarios/eliminar-imagen'] = "servicios_complementarios/eliminar_imagen";
#FIN SERVICIOS COMPLEMENTARIOS



#PARQUE DE AGUA

#slider
$route['parque-agua/slider']                    = "parque_agua/slider";
$route['parque-agua/slider/(:num)']             = "parque_agua/slider";
$route['parque-agua/slider/agregar']            = "parque_agua/slider/agregar";
$route['parque-agua/slider/editar/(:num)']      = "parque_agua/slider/editar/$1";
$route['parque-agua/slider/eliminar']           = "parque_agua/slider/eliminar";
$route['parque-agua/slider/cargar-imagen']      = "parque_agua/slider/cargar_imagen";
$route['parque-agua/slider/cortar-imagen']      = "parque_agua/slider/cortar_imagen";
$route['parque-agua/slider/eliminar-imagen']    = "parque_agua/slider/eliminar_imagen";



$route['parque-agua/programas']                  = "parque_agua/programas";
$route['parque-agua/programas/(:num)']           = "parque_agua/programas";
$route['parque-agua/programas/agregar']          = "parque_agua/programas/agregar";
$route['parque-agua/programas/editar/(:num)']    = "parque_agua/programas/editar/$1";
$route['parque-agua/programas/eliminar']         = "parque_agua /programas/eliminar";

#introduccion
$route['parque-agua/introduccion']                  = "parque_agua/introduccion";
$route['parque-agua/introduccion/agregar']          = "parque_agua/introduccion/agregar";

#programas y valores
$route['parque-agua/programas-valores']         = "parque_agua/programas_valores";
$route['parque-agua/programas-valores/agregar'] = "parque_agua/programas_valores/agregar";

#secciones
$route['parque-agua/secciones']                  = "parque_agua/secciones";
$route['parque-agua/secciones/(:num)']           = "parque_agua/secciones";
$route['parque-agua/secciones/agregar']          = "parque_agua/secciones/agregar";
$route['parque-agua/secciones/editar/(:num)']    = "parque_agua/secciones/editar/$1";
$route['parque-agua/secciones/eliminar']         = "parque_agua/secciones/eliminar";
$route['parque-agua/secciones/cargar-imagen']    = "parque_agua/secciones/cargar_imagen";
$route['parque-agua/secciones/cortar-imagen']    = "parque_agua/secciones/cortar_imagen";
$route['parque-agua/secciones/eliminar-imagen']  = "parque_agua/secciones/eliminar_imagen";
$route['parque-agua/secciones/eliminar-imagen-adjunta'] = "parque_agua/secciones/eliminar_imagen_adjunta";

#banners
$route['parque-agua/banners']                = "parque_agua/banners";
$route['parque-agua/banners/(:num)']         = "parque_agua/banners";
$route['parque-agua/banners/agregar']        = "parque_agua/banners/agregar";
$route['parque-agua/banners/editar/(:num)']  = "parque_agua/banners/editar/$1";
$route['parque-agua/banners/eliminar']       = "parque_agua/banners/eliminar";
$route['parque-agua/banners/cargar-imagen']         = "parque_agua/banners/cargar_imagen";
$route['parque-agua/banners/cortar-imagen']         = "parque_agua/banners/cortar_imagen";
$route['parque-agua/banners/eliminar-imagen']       = "parque_agua/banners/eliminar_imagen";


#FIN PARQUE DE AGUA



#VALLE HERMOSO
/*
#slider
$route['valle-hermoso/slider']                  = "valle_hermoso/slider";
$route['valle-hermoso/slider/(:num)']           = "valle_hermoso/slider";
$route['valle-hermoso/slider/agregar']          = "valle_hermoso/slider/agregar";
$route['valle-hermoso/slider/editar/(:num)']    = "valle_hermoso/slider/editar/$1";
$route['valle-hermoso/slider/eliminar']         = "valle_hermoso/slider/eliminar";
$route['valle-hermoso/slider/cargar-imagen']    = "valle_hermoso/slider/cargar_imagen";
$route['valle-hermoso/slider/cortar-imagen']    = "valle_hermoso/slider/cortar_imagen";
$route['valle-hermoso/slider/eliminar-imagen']  = "valle_hermoso/slider/eliminar_imagen";

#habitaciones
$route['valle-hermoso/habitaciones']                    = "valle_hermoso/habitaciones";
$route['valle-hermoso/habitaciones/(:num)']             = "valle_hermoso/habitaciones";
$route['valle-hermoso/habitaciones/agregar']            = "valle_hermoso/habitaciones/agregar";
$route['valle-hermoso/habitaciones/editar/(:num)']      = "valle_hermoso/habitaciones/editar/$1";
$route['valle-hermoso/habitaciones/eliminar']           = "valle_hermoso/habitaciones/eliminar";
$route['valle-hermoso/habitaciones/cargar-imagen']      = "valle_hermoso/habitaciones/cargar_imagen";
$route['valle-hermoso/habitaciones/cortar-imagen']      = "valle_hermoso/habitaciones/cortar_imagen";
$route['valle-hermoso/habitaciones/eliminar-imagen']    = "valle_hermoso/habitaciones/eliminar_imagen";

#actividades
$route['valle-hermoso/actividades']                 = "valle_hermoso/actividades";
$route['valle-hermoso/actividades/(:num)']          = "valle_hermoso/actividades";
$route['valle-hermoso/actividades/agregar']         = "valle_hermoso/actividades/agregar";
$route['valle-hermoso/actividades/editar/(:num)']   = "valle_hermoso/actividades/editar/$1";
$route['valle-hermoso/actividades/eliminar']        = "valle_hermoso/actividades/eliminar";
$route['valle-hermoso/actividades/cargar-imagen']   = "valle_hermoso/actividades/cargar_imagen";
$route['valle-hermoso/actividades/cortar-imagen']   = "valle_hermoso/actividades/cortar_imagen";
$route['valle-hermoso/actividades/eliminar-imagen'] = "valle_hermoso/actividades/eliminar_imagen";

#secciones
$route['valle-hermoso/secciones']                   = "valle_hermoso/secciones";
$route['valle-hermoso/secciones/(:num)']            = "valle_hermoso/secciones";
$route['valle-hermoso/secciones/agregar']           = "valle_hermoso/secciones/agregar";
$route['valle-hermoso/secciones/editar/(:num)']     = "valle_hermoso/secciones/editar/$1";
$route['valle-hermoso/secciones/eliminar']          = "valle_hermoso/secciones/eliminar";
$route['valle-hermoso/secciones/cargar-imagen']     = "valle_hermoso/secciones/cargar_imagen";
$route['valle-hermoso/secciones/cortar-imagen']     = "valle_hermoso/secciones/cortar_imagen";
$route['valle-hermoso/secciones/eliminar-imagen']   = "valle_hermoso/secciones/eliminar_imagen";

#banners
$route['valle-hermoso/banners']                 = "valle_hermoso/banners";
$route['valle-hermoso/banners/(:num)']          = "valle_hermoso/banners";
$route['valle-hermoso/banners/agregar']         = "valle_hermoso/banners/agregar";
$route['valle-hermoso/banners/editar/(:num)']   = "valle_hermoso/banners/editar/$1";
$route['valle-hermoso/banners/eliminar']        = "valle_hermoso/banners/eliminar";
$route['valle-hermoso/banners/cargar-imagen']   = "valle_hermoso/banners/cargar_imagen";
$route['valle-hermoso/banners/cortar-imagen']   = "valle_hermoso/banners/cortar_imagen";
$route['valle-hermoso/banners/eliminar-imagen'] = "valle_hermoso/banners/eliminar_imagen";
*/
#FIN VALLE HERMOSO



#CONFIGURACION

#administradores
$route['configuracion/administradores']                  = "configuracion/administradores";
$route['configuracion/administradores/(:num)']           = "configuracion/administradores";
$route['configuracion/administradores/agregar']          = "configuracion/administradores/agregar";
$route['configuracion/administradores/editar/(:num)']    = "configuracion/administradores/editar/$1";
$route['configuracion/administradores/eliminar']         = "configuracion/administradores/eliminar";

#temporadas de calendario
$route['configuracion/temporadas-calendario']                  = "configuracion/temporadas_calendario";
$route['configuracion/temporadas-calendario/(:num)']           = "configuracion/temporadas_calendario";
$route['configuracion/temporadas-calendario/agregar']          = "configuracion/temporadas_calendario/agregar";
$route['configuracion/temporadas-calendario/editar/(:num)']    = "configuracion/temporadas_calendario/editar/$1";
$route['configuracion/temporadas-calendario/eliminar']         = "configuracion/temporadas_calendario/eliminar";

#categorias de calendario
$route['configuracion/categorias-calendario']                  = "configuracion/categorias_calendario";
$route['configuracion/categorias-calendario/(:num)']           = "configuracion/categorias_calendario";
$route['configuracion/categorias-calendario/agregar']          = "configuracion/categorias_calendario/agregar";
$route['configuracion/categorias-calendario/editar/(:num)']    = "configuracion/categorias_calendario/editar/$1";
$route['configuracion/categorias-calendario/eliminar']         = "configuracion/categorias_calendario/eliminar";

#categorias de noticias
$route['configuracion/categorias-noticias']                  = "configuracion/categorias_noticias";
$route['configuracion/categorias-noticias/(:num)']           = "configuracion/categorias_noticias";
$route['configuracion/categorias-noticias/agregar']          = "configuracion/categorias_noticias/agregar";
$route['configuracion/categorias-noticias/editar/(:num)']    = "configuracion/categorias_noticias/editar/$1";
$route['configuracion/categorias-noticias/eliminar']         = "configuracion/categorias_noticias/eliminar";

#categorias de noticias
$route['configuracion/categorias-promociones']                  = "configuracion/categorias_promociones";
$route['configuracion/categorias-promociones/(:num)']           = "configuracion/categorias_promociones";
$route['configuracion/categorias-promociones/agregar']          = "configuracion/categorias_promociones/agregar";
$route['configuracion/categorias-promociones/editar/(:num)']    = "configuracion/categorias_promociones/editar/$1";
$route['configuracion/categorias-promociones/eliminar']         = "configuracion/categorias_promociones/eliminar";

#camaras en vivo
$route['configuracion/camaras-vivo']                  = "configuracion/camaras_vivo";
$route['configuracion/camaras-vivo/(:num)']           = "configuracion/camaras_vivo";
$route['configuracion/camaras-vivo/agregar']          = "configuracion/camaras_vivo/agregar";
$route['configuracion/camaras-vivo/editar/(:num)']    = "configuracion/camaras_vivo/editar/$1";
$route['configuracion/camaras-vivo/eliminar']         = "configuracion/camaras_vivo/eliminar";

#asuntos de contactos
$route['configuracion/asuntos-contacto']                  = "configuracion/asuntos_contacto";
$route['configuracion/asuntos-contacto/(:num)']           = "configuracion/asuntos_contacto";
$route['configuracion/asuntos-contacto/agregar']          = "configuracion/asuntos_contacto/agregar";
$route['configuracion/asuntos-contacto/editar/(:num)']    = "configuracion/asuntos_contacto/editar/$1";
$route['configuracion/asuntos-contacto/eliminar']         = "configuracion/asuntos_contacto/eliminar";

#areas de trabajo
$route['configuracion/areas-trabajo']                  = "configuracion/areas_trabajo";
$route['configuracion/areas-trabajo/(:num)']           = "configuracion/areas_trabajo";
$route['configuracion/areas-trabajo/agregar']          = "configuracion/areas_trabajo/agregar";
$route['configuracion/areas-trabajo/editar/(:num)']    = "configuracion/areas_trabajo/editar/$1";
$route['configuracion/areas-trabajo/eliminar']         = "configuracion/areas_trabajo/eliminar";

#datos generales
$route['configuracion/datos-generales']                  = "configuracion/datos_generales";
$route['configuracion/datos-generales/agregar']          = "configuracion/datos_generales/agregar";

#FIN CONFIGURACION



#PORTADA

#slider
$route['portada/slider']                  = "portada/slider";
$route['portada/slider/(:num)']           = "portada/slider";
$route['portada/slider/agregar']          = "portada/slider/agregar";
$route['portada/slider/editar/(:num)']    = "portada/slider/editar/$1";
$route['portada/slider/eliminar']         = "portada/slider/eliminar";
$route['portada/slider/cargar-imagen']    = "portada/slider/cargar_imagen";
$route['portada/slider/cortar-imagen']    = "portada/slider/cortar_imagen";
$route['portada/slider/eliminar-imagen']  = "portada/slider/eliminar_imagen";

#calendario general
$route['portada/calendario']                  = "portada/calendario_general";
$route['portada/calendario/(:num)']           = "portada/calendario_general";
$route['portada/calendario/agregar']          = "portada/calendario_general/agregar";
$route['portada/calendario/editar/(:num)']    = "portada/calendario_general/editar/$1";
$route['portada/calendario/eliminar']         = "portada/calendario_general/eliminar";

#noticias
$route['portada/noticias']                  = "portada/noticias";
$route['portada/noticias/(:num)']           = "portada/noticias";
$route['portada/noticias/agregar']          = "portada/noticias/agregar";
$route['portada/noticias/editar/(:num)']    = "portada/noticias/editar/$1";
$route['portada/noticias/eliminar']         = "portada/noticias/eliminar";
$route['portada/noticias/cargar-imagen']    = "portada/noticias/cargar_imagen";
$route['portada/noticias/cortar-imagen']    = "portada/noticias/cortar_imagen";
$route['portada/noticias/eliminar-imagen']  = "portada/noticias/eliminar_imagen";

#accesos directos 
$route['portada/accesos-directos']                  = "portada/accesos_directos";
$route['portada/accesos-directos/(:num)']           = "portada/accesos_directos";
$route['portada/accesos-directos/agregar']          = "portada/accesos_directos/agregar";
$route['portada/accesos-directos/editar/(:num)']    = "portada/accesos_directos/editar/$1";
$route['portada/accesos-directos/eliminar']         = "portada/accesos_directos/eliminar";
$route['portada/accesos-directos/cargar-imagen']    = "portada/accesos_directos/cargar_imagen";
$route['portada/accesos-directos/cortar-imagen']    = "portada/accesos_directos/cortar_imagen";
$route['portada/accesos-directos/eliminar-imagen']  = "portada/accesos_directos/eliminar_imagen";

#auspiciadores
$route['portada/auspiciadores']                  = "portada/auspiciadores";
$route['portada/auspiciadores/(:num)']           = "portada/auspiciadores";
$route['portada/auspiciadores/agregar']          = "portada/auspiciadores/agregar";
$route['portada/auspiciadores/editar/(:num)']    = "portada/auspiciadores/editar/$1";
$route['portada/auspiciadores/eliminar']         = "portada/auspiciadores/eliminar";


#partner
$route['descubrenos/partner']                  = "descubrenos/partner";
$route['descubrenos/partner/(:num)']           = "descubrenos/partner";
$route['descubrenos/partner/agregar']          = "descubrenos/partner/agregar";
$route['descubrenos/partner/editar/(:num)']    = "descubrenos/partner/editar/$1";
$route['descubrenos/partner/eliminar']         = "descubrenos/partner/eliminar";



#informacion para prensa
$route['portada/informacion-prensa']                            = "portada/informacion_prensa";
$route['portada/informacion-prensa/agregar']                    = "portada/informacion_prensa/agregar";
$route['portada/informacion-prensa/cargar-imagen']              = "portada/informacion_prensa/cargar_imagen";
$route['portada/informacion-prensa/cortar-imagen']              = "portada/informacion_prensa/cortar_imagen";
$route['portada/informacion-prensa/eliminar-imagen']            = "portada/informacion_prensa/eliminar_imagen";
$route['portada/informacion-prensa/descargar-archivo/(:num)']   = "portada/informacion_prensa/descargar_archivo/$1";
$route['portada/informacion-prensa/eliminar-archivo']           = "portada/informacion_prensa/eliminar_archivo";

#FIN PORTADA



#DESCUBRENOS

#slider
$route['descubrenos/slider']                  = "descubrenos/slider";
$route['descubrenos/slider/(:num)']           = "descubrenos/slider";
$route['descubrenos/slider/agregar']          = "descubrenos/slider/agregar";
$route['descubrenos/slider/editar/(:num)']    = "descubrenos/slider/editar/$1";
$route['descubrenos/slider/eliminar']         = "descubrenos/slider/eliminar";
$route['descubrenos/slider/cargar-imagen']    = "descubrenos/slider/cargar_imagen";
$route['descubrenos/slider/cortar-imagen']    = "descubrenos/slider/cortar_imagen";
$route['descubrenos/slider/eliminar-imagen']  = "descubrenos/slider/eliminar_imagen";

#introduccion
$route['descubrenos/introduccion']                  = "descubrenos/introduccion";
$route['descubrenos/introduccion/agregar']          = "descubrenos/introduccion/agregar";

#hoteles
$route['descubrenos/hoteles']                  = "descubrenos/hoteles";
$route['descubrenos/hoteles/(:num)']           = "descubrenos/hoteles";
$route['descubrenos/hoteles/agregar']          = "descubrenos/hoteles/agregar";
$route['descubrenos/hoteles/editar/(:num)']    = "descubrenos/hoteles/editar/$1";
$route['descubrenos/hoteles/eliminar']         = "descubrenos/hoteles/eliminar";
$route['descubrenos/hoteles/cargar-imagen']    = "descubrenos/hoteles/cargar_imagen";
$route['descubrenos/hoteles/cortar-imagen']    = "descubrenos/hoteles/cortar_imagen";
$route['descubrenos/hoteles/eliminar-imagen']  = "descubrenos/hoteles/eliminar_imagen";

#secciones
$route['descubrenos/secciones']                  = "descubrenos/secciones";
$route['descubrenos/secciones/(:num)']           = "descubrenos/secciones";
$route['descubrenos/secciones/agregar']          = "descubrenos/secciones/agregar";
$route['descubrenos/secciones/editar/(:num)']    = "descubrenos/secciones/editar/$1";
$route['descubrenos/secciones/eliminar']         = "descubrenos/secciones/eliminar";
$route['descubrenos/secciones/cargar-imagen']    = "descubrenos/secciones/cargar_imagen";
$route['descubrenos/secciones/cortar-imagen']    = "descubrenos/secciones/cortar_imagen";
$route['descubrenos/secciones/eliminar-imagen']  = "descubrenos/secciones/eliminar_imagen";
$route['descubrenos/secciones/eliminar-imagen-adjunta'] = "descubrenos/secciones/eliminar_imagen_adjunta";

#FIN DESCUBRENOS

#NUESTRA HISTORIA

#slider
$route['historia/slider']                  = "historia/slider";
$route['historia/slider/(:num)']           = "historia/slider";
$route['historia/slider/agregar']          = "historia/slider/agregar";
$route['historia/slider/editar/(:num)']    = "historia/slider/editar/$1";
$route['historia/slider/eliminar']         = "historia/slider/eliminar";
$route['historia/slider/cargar-imagen']    = "historia/slider/cargar_imagen";
$route['historia/slider/cortar-imagen']    = "historia/slider/cortar_imagen";
$route['historia/slider/eliminar-imagen']  = "historia/slider/eliminar_imagen";

#introduccion
$route['historia/introduccion']                  = "historia/introduccion";
$route['historia/introduccion/agregar']          = "historia/introduccion/agregar";

#secciones
$route['historia/secciones']                  = "historia/secciones";
$route['historia/secciones/(:num)']           = "historia/secciones";
$route['historia/secciones/agregar']          = "historia/secciones/agregar";
$route['historia/secciones/editar/(:num)']    = "historia/secciones/editar/$1";
$route['historia/secciones/eliminar']         = "historia/secciones/eliminar";
$route['historia/secciones/cargar-imagen']    = "historia/secciones/cargar_imagen";
$route['historia/secciones/cortar-imagen']    = "historia/secciones/cortar_imagen";
$route['historia/secciones/eliminar-imagen']  = "historia/secciones/eliminar_imagen";
$route['historia/secciones/eliminar-imagen-adjunta'] = "historia/secciones/eliminar_imagen_adjunta";

#FIN NUESTRA HISTORIA

#VALLE LAS TRANCAS

#slider
$route['valle-las-trancas/slider']                  = "valle_trancas/slider";
$route['valle-las-trancas/slider/(:num)']           = "valle_trancas/slider";
$route['valle-las-trancas/slider/agregar']          = "valle_trancas/slider/agregar";
$route['valle-las-trancas/slider/editar/(:num)']    = "valle_trancas/slider/editar/$1";
$route['valle-las-trancas/slider/eliminar']         = "valle_trancas/slider/eliminar";
$route['valle-las-trancas/slider/cargar-imagen']    = "valle_trancas/slider/cargar_imagen";
$route['valle-las-trancas/slider/cortar-imagen']    = "valle_trancas/slider/cortar_imagen";
$route['valle-las-trancas/slider/eliminar-imagen']  = "valle_trancas/slider/eliminar_imagen";

#introduccion
$route['valle-las-trancas/introduccion']                  = "valle_trancas/introduccion";
$route['valle-las-trancas/introduccion/agregar']          = "valle_trancas/introduccion/agregar";

#secciones
$route['valle-las-trancas/secciones']                  = "valle_trancas/secciones";
$route['valle-las-trancas/secciones/(:num)']           = "valle_trancas/secciones";
$route['valle-las-trancas/secciones/agregar']          = "valle_trancas/secciones/agregar";
$route['valle-las-trancas/secciones/editar/(:num)']    = "valle_trancas/secciones/editar/$1";
$route['valle-las-trancas/secciones/eliminar']         = "valle_trancas/secciones/eliminar";
$route['valle-las-trancas/secciones/cargar-imagen']    = "valle_trancas/secciones/cargar_imagen";
$route['valle-las-trancas/secciones/cortar-imagen']    = "valle_trancas/secciones/cortar_imagen";
$route['valle-las-trancas/secciones/eliminar-imagen']  = "valle_trancas/secciones/eliminar_imagen";
$route['valle-las-trancas/secciones/eliminar-imagen-adjunta'] = "valle_trancas/secciones/eliminar_imagen_adjunta";

#FIN VALLE LAS TRANCAS


#INVIERNO

#slider
$route['invierno/slider']                  = "invierno/slider";
$route['invierno/slider/(:num)']           = "invierno/slider";
$route['invierno/slider/agregar']          = "invierno/slider/agregar";
$route['invierno/slider/editar/(:num)']    = "invierno/slider/editar/$1";
$route['invierno/slider/eliminar']         = "invierno/slider/eliminar";
$route['invierno/slider/cargar-imagen']    = "invierno/slider/cargar_imagen";
$route['invierno/slider/cortar-imagen']    = "invierno/slider/cortar_imagen";
$route['invierno/slider/eliminar-imagen']  = "invierno/slider/eliminar_imagen";

#introduccion
$route['invierno/introduccion']                  = "invierno/introduccion";
$route['invierno/introduccion/agregar']          = "invierno/introduccion/agregar";

#secciones
$route['invierno/secciones']                  = "invierno/secciones";
$route['invierno/secciones/(:num)']           = "invierno/secciones";
$route['invierno/secciones/agregar']          = "invierno/secciones/agregar";
$route['invierno/secciones/editar/(:num)']    = "invierno/secciones/editar/$1";
$route['invierno/secciones/eliminar']         = "invierno/secciones/eliminar";
$route['invierno/secciones/cargar-imagen']    = "invierno/secciones/cargar_imagen";
$route['invierno/secciones/cortar-imagen']    = "invierno/secciones/cortar_imagen";
$route['invierno/secciones/eliminar-imagen']  = "invierno/secciones/eliminar_imagen";
$route['invierno/secciones/eliminar-imagen-adjunta'] = "invierno/secciones/eliminar_imagen_adjunta";

#cafeterias
$route['invierno/cafeterias']                  = "invierno/cafeterias";
$route['invierno/cafeterias/(:num)']           = "invierno/cafeterias";
$route['invierno/cafeterias/agregar']          = "invierno/cafeterias/agregar";
$route['invierno/cafeterias/editar/(:num)']    = "invierno/cafeterias/editar/$1";
$route['invierno/cafeterias/eliminar']         = "invierno/cafeterias/eliminar";
$route['invierno/cafeterias/cargar-imagen']    = "invierno/cafeterias/cargar_imagen";
$route['invierno/cafeterias/cortar-imagen']    = "invierno/cafeterias/cortar_imagen";
$route['invierno/cafeterias/eliminar-imagen']  = "invierno/cafeterias/eliminar_imagen";

#programas y valores
$route['invierno/programas-valores']         = "invierno/programas_valores";
$route['invierno/programas-valores/agregar'] = "invierno/programas_valores/agregar";

#mapa de pistas
$route['invierno/mapa-pistas']         = "invierno/mapa_pistas";
$route['invierno/mapa-pistas/agregar'] = "invierno/mapa_pistas/agregar";

#FIN INVIERNO

#VERANO

#slider
$route['verano/slider']                  = "verano/slider";
$route['verano/slider/(:num)']           = "verano/slider";
$route['verano/slider/agregar']          = "verano/slider/agregar";
$route['verano/slider/editar/(:num)']    = "verano/slider/editar/$1";
$route['verano/slider/eliminar']         = "verano/slider/eliminar";
$route['verano/slider/cargar-imagen']    = "verano/slider/cargar_imagen";
$route['verano/slider/cortar-imagen']    = "verano/slider/cortar_imagen";
$route['verano/slider/eliminar-imagen']  = "verano/slider/eliminar_imagen";


#programas
$route['verano/programas']                  = "verano/programas";
$route['verano/programas/(:num)']           = "verano/programas";
$route['verano/programas/agregar']          = "verano/programas/agregar";
$route['verano/programas/editar/(:num)']    = "verano/programas/editar/$1";
$route['verano/programas/eliminar']         = "verano/programas/eliminar";


#introduccion
$route['verano/introduccion']                  = "verano/introduccion";
$route['verano/introduccion/agregar']          = "verano/introduccion/agregar";

#secciones
$route['verano/secciones']                  = "verano/secciones";
$route['verano/secciones/(:num)']           = "verano/secciones";
$route['verano/secciones/agregar']          = "verano/secciones/agregar";
$route['verano/secciones/editar/(:num)']    = "verano/secciones/editar/$1";
$route['verano/secciones/eliminar']         = "verano/secciones/eliminar";
$route['verano/secciones/cargar-imagen']    = "verano/secciones/cargar_imagen";
$route['verano/secciones/cortar-imagen']    = "verano/secciones/cortar_imagen";
$route['verano/secciones/eliminar-imagen']  = "verano/secciones/eliminar_imagen";
$route['verano/secciones/eliminar-imagen-adjunta'] = "verano/secciones/eliminar_imagen_adjunta";

#programas y valores
$route['verano/programas-valores']         = "verano/programas_valores";
$route['verano/programas-valores/agregar'] = "verano/programas_valores/agregar";

#FIN VERANO

#INFO NIEVE

#estado del camino
$route['info-nieve/estado-camino']          = "info_nieve/estado_camino";
$route['info-nieve/estado-camino/agregar']  = "info_nieve/estado_camino/agregar";

#nieve
$route['info-nieve/nieve']          = "info_nieve/nieve";
$route['info-nieve/nieve/agregar']  = "info_nieve/nieve/agregar";

#estado de pistas
$route['info-nieve/estado-pistas']                  = "info_nieve/estado_pistas";
$route['info-nieve/estado-pistas/(:num)']           = "info_nieve/estado_pistas";
$route['info-nieve/estado-pistas/agregar']          = "info_nieve/estado_pistas/agregar";
$route['info-nieve/estado-pistas/editar/(:num)']    = "info_nieve/estado_pistas/editar/$1";
$route['info-nieve/estado-pistas/eliminar']         = "info_nieve/estado_pistas/eliminar";

#estado de andariveles
$route['info-nieve/estado-andariveles']                  = "info_nieve/estado_andariveles";
$route['info-nieve/estado-andariveles/(:num)']           = "info_nieve/estado_andariveles";
$route['info-nieve/estado-andariveles/agregar']          = "info_nieve/estado_andariveles/agregar";
$route['info-nieve/estado-andariveles/editar/(:num)']    = "info_nieve/estado_andariveles/editar/$1";
$route['info-nieve/estado-andariveles/eliminar']         = "info_nieve/estado_andariveles/eliminar";

#FIN INFO NIEVE




#ESCUELA

#conoce nuestras instalaciones
$route['escuela/conoce-nuestras-instalaciones']                 = "escuela/conoce_instalaciones";
$route['escuela/conoce-nuestras-instalaciones/agregar']         = "escuela/conoce_instalaciones/agregar";
$route['escuela/conoce-nuestras-instalaciones/cargar-imagen']   = "escuela/conoce_instalaciones/cargar_imagen";
$route['escuela/conoce-nuestras-instalaciones/cortar-imagen']   = "escuela/conoce_instalaciones/cortar_imagen";
$route['escuela/conoce-nuestras-instalaciones/eliminar-imagen'] = "escuela/conoce_instalaciones/eliminar_imagen";

#profesor guia
$route['escuela/profesor-guia']                             = "escuela/profesor_guia";
$route['escuela/profesor-guia/agregar']                     = "escuela/profesor_guia/agregar";
$route['escuela/profesor-guia/cargar-imagen']               = "escuela/profesor_guia/cargar_imagen";
$route['escuela/profesor-guia/cortar-imagen']               = "escuela/profesor_guia/cortar_imagen";
$route['escuela/profesor-guia/eliminar-imagen']             = "escuela/profesor_guia/eliminar_imagen";
$route['escuela/profesor-guia/descargar-archivo/(:num)']    = "escuela/profesor_guia/descargar_archivo/$1";
$route['escuela/profesor-guia/eliminar-archivo']            = "escuela/profesor_guia/eliminar_archivo";
$route['escuela/secciones/cargar-imagen']          = "escuela/secciones/cargar_imagen";
$route['escuela/secciones/cortar-imagen']          = "escuela/secciones/cortar_imagen";
$route['escuela/secciones/eliminar-imagen']        = "escuela/secciones/eliminar_imagen";

#programas y valores
$route['escuela/programas-valores']          = "escuela/programas_valores";
$route['escuela/programas-valores/agregar']  = "escuela/programas_valores/agregar";

#FIN ESCUELA



#INVIERNO
#programas
$route['invierno/programas']                  = "invierno/programas";
$route['invierno/programas/(:num)']           = "invierno/programas";
$route['invierno/programas/agregar']          = "invierno/programas/agregar";
$route['invierno/programas/editar/(:num)']    = "invierno/programas/editar/$1";
$route['invierno/programas/eliminar']         = "invierno/programas/eliminar";





#slider
$route['bike-park/slider']                  = "bike_park/slider";
$route['bike-park/slider/(:num)']           = "bike_park/slider";
$route['bike-park/slider/agregar']          = "bike_park/slider/agregar";
$route['bike-park/slider/editar/(:num)']    = "bike_park/slider/editar/$1";
$route['bike-park/slider/eliminar']         = "bike_park/slider/eliminar";
$route['bike-park/slider/cargar-imagen']    = "bike_park/slider/cargar_imagen";
$route['bike-park/slider/cortar-imagen']    = "bike_park/slider/cortar_imagen";
$route['bike-park/slider/eliminar-imagen']  = "bike_park/slider/eliminar_imagen";



$route['bike-park/programas']                  = "bike_park/programas";
$route['bike-park/programas/(:num)']           = "bike_park/programas";
$route['bike-park/programas/agregar']          = "bike_park/programas/agregar";
$route['bike-park/programas/editar/(:num)']    = "bike_park/programas/editar/$1";
$route['bike-park/programas/eliminar']         = "bike_park/programas/eliminar";


#secciones
$route['bike-park/secciones']                  = "bike_park/secciones";
$route['bike-park/secciones/(:num)']           = "bike_park/secciones";
$route['bike-park/secciones/agregar']          = "bike_park/secciones/agregar";
$route['bike-park/secciones/editar/(:num)']    = "bike_park/secciones/editar/$1";
$route['bike-park/secciones/eliminar']         = "bike_park/secciones/eliminar";
$route['bike-park/secciones/cargar-imagen']    = "bike_park/secciones/cargar_imagen";
$route['bike-park/secciones/cortar-imagen']    = "bike_park/secciones/cortar_imagen";
$route['bike-park/secciones/eliminar-imagen']  = "bike_park/secciones/eliminar_imagen";
$route['bike-park/secciones/eliminar-imagen-adjunta'] = "bike_park/secciones/eliminar_imagen_adjunta";

#bike park
$route['bike-park']                             = "bike_park";
$route['bike-park/agregar']                     = "bike_park/agregar";
$route['bike-park/cargar-imagen']               = "bike_park/cargar_imagen";
$route['bike-park/cortar-imagen']               = "bike_park/cortar_imagen";
$route['bike-park/eliminar-imagen']             = "bike_park/eliminar_imagen";

#programas y valores
$route['bike-park/programas-valores']          = "bike_park/programas_valores";
$route['bike-park/programas-valores/agregar']  = "bike_park/programas_valores/agregar";

#FIN INVIERNO



#AYUDA

#slider
$route['ayuda/slider']                  = "ayuda/slider";
$route['ayuda/slider/(:num)']           = "ayuda/slider";
$route['ayuda/slider/agregar']          = "ayuda/slider/agregar";
$route['ayuda/slider/editar/(:num)']    = "ayuda/slider/editar/$1";
$route['ayuda/slider/eliminar']         = "ayuda/slider/eliminar";
$route['ayuda/slider/cargar-imagen']    = "ayuda/slider/cargar_imagen";
$route['ayuda/slider/cortar-imagen']    = "ayuda/slider/cortar_imagen";
$route['ayuda/slider/eliminar-imagen']  = "ayuda/slider/eliminar_imagen";

#como llegar
$route['ayuda/como-llegar']                 = "ayuda/como_llegar";
$route['ayuda/como-llegar/(:num)']          = "ayuda/como_llegar";
$route['ayuda/como-llegar/agregar']         = "ayuda/como_llegar/agregar";
$route['ayuda/como-llegar/editar/(:num)']   = "ayuda/como_llegar/editar/$1";
$route['ayuda/como-llegar/eliminar']        = "ayuda/como_llegar/eliminar";

#preguntas frecuentes
$route['ayuda/preguntas-frecuentes']                 = "ayuda/preguntas_frecuentes";
$route['ayuda/preguntas-frecuentes/(:num)']          = "ayuda/preguntas_frecuentes";
$route['ayuda/preguntas-frecuentes/agregar']         = "ayuda/preguntas_frecuentes/agregar";
$route['ayuda/preguntas-frecuentes/editar/(:num)']   = "ayuda/preguntas_frecuentes/editar/$1";
$route['ayuda/preguntas-frecuentes/eliminar']        = "ayuda/preguntas_frecuentes/eliminar";

#condiciones y reglamentos
$route['ayuda/condiciones-reglamentos']                            = "ayuda/condiciones_reglamentos";
$route['ayuda/condiciones-reglamentos/(:num)']                     = "ayuda/condiciones_reglamentos";
$route['ayuda/condiciones-reglamentos/agregar']                    = "ayuda/condiciones_reglamentos/agregar";
$route['ayuda/condiciones-reglamentos/editar/(:num)']              = "ayuda/condiciones_reglamentos/editar/$1";
$route['ayuda/condiciones-reglamentos/eliminar']                   = "ayuda/condiciones_reglamentos/eliminar";
$route['ayuda/condiciones-reglamentos/descargar-archivo/(:num)']   = "ayuda/condiciones_reglamentos/descargar_archivo/$1";
$route['ayuda/condiciones-reglamentos/eliminar-archivo']           = "ayuda/condiciones_reglamentos/eliminar_archivo";

#trabaja con nosotros
$route['ayuda/trabaja-con-nosotros']                            = "ayuda/trabaja_con_nosotros";
$route['ayuda/trabaja-con-nosotros/(:num)']                     = "ayuda/trabaja_con_nosotros";
$route['ayuda/trabaja-con-nosotros/detalle/(:num)']             = "ayuda/trabaja_con_nosotros/detalle/$1";
$route['ayuda/trabaja-con-nosotros/descargar-archivo/(:num)']   = "ayuda/trabaja_con_nosotros/descargar_archivo/$1";

#contactos
$route['ayuda/contactos']                   = "ayuda/contactos";
$route['ayuda/contactos/(:num)']            = "ayuda/contactos";
$route['ayuda/contactos/detalle/(:num)']    = "ayuda/contactos/detalle/$1";

#FIN AYUDA

#FreeRide
$route['freeride']          = "freeride";
$route['freeride/agregar']  = "freeride/agregar";
#FIN FreeRide

#NEWSLETTER
$route['newsletter']         = "newsletter";
$route['newsletter/(:num)'] = "newsletter";


#Landing Pages
$route['landing_pages']                 = "landing_pages";
$route['landing_pages/(:num)']          = "landing_pages";
$route['landing_pages/agregar']         = "landing_pages/agregar";
$route['landing_pages/editar/(:num)']   = "landing_pages/editar/$1";
$route['landing_pages/eliminar']        = "landing_pages/eliminar";
$route['landing_pages/cargar-imagen']          = "landing_pages/cargar_imagen";
$route['landing_pages/cortar-imagen']          = "landing_pages/cortar_imagen";
$route['landing_pages/eliminar-imagen']        = "landing_pages/eliminar_imagen";

#Landing Pages
$route['contactos_landing']                 = "contactos_landing";
$route['contactos_landing/(:num)']          = "landing_pages";
$route['contactos_landing/agregar']         = "contactos_landing/agregar";
$route['contactos_landing/editar/(:num)']   = "contactos_landing/editar/$1";
$route['contactos_landing/eliminar']        = "contactos_landing/eliminar";
$route['contactos_landing/cargar-imagen']          = "contactos_landing/cargar_imagen";
$route['contactos_landing/cortar-imagen']          = "contactos_landing/cortar_imagen";
$route['contactos_landing/eliminar-imagen']        = "contactos_landing/eliminar_imagen";

/* End of file routes.php */
/* Location: ./application/config/routes.php */



//PROGRAMAS

#introduccion
$route['programas/introduccion']                  = "programas/introduccion";
$route['programas/introduccion/agregar']          = "programas/introduccion/agregar";

#secciones
$route['programas/secciones']                  = "programas/secciones";
$route['programas/secciones/(:num)']           = "programas/secciones";
$route['programas/secciones/agregar']          = "programas/secciones/agregar";
$route['programas/secciones/editar/(:num)']    = "programas/secciones/editar/$1";
$route['programas/secciones/eliminar']         = "programas/secciones/eliminar";
$route['programas/secciones/cargar-imagen']    = "programas/secciones/cargar_imagen";
$route['programas/secciones/cortar-imagen']    = "programas/secciones/cortar_imagen";
$route['programas/secciones/eliminar-imagen']  = "programas/secciones/eliminar_imagen";
$route['programas/secciones/eliminar-imagen-adjunta'] = "programas/secciones/eliminar_imagen_adjunta";