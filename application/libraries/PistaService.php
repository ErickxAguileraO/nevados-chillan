<?php

/**
 * Esta clase agrega los campos con formato
 * a cada pista para poder usarlos más fácil
 * en la web, dado que en la base de datos se
 * almacenan valores numéricos en columnas como
 * "estado_pista" o "condicion", por ejemplo.
 */
class PistaService
{
    public static function generarEstadoPista($pistas)
    {
        $pistasMap = array_map(function($pista) {
            switch ($pista->estado_pista) {
                case 0:
                    $pista->texto_estado_pista = 'Cerrada';
                    $pista->clase_estado_pista = 'est-cerrado';

                    return $pista;

                case 1:
                    $pista->texto_estado_pista = 'Abierta';
                    $pista->clase_estado_pista = 'est-abierto';

                    return $pista;
                
                case 2:
                    $pista->texto_estado_pista = 'Agendada';
                    $pista->clase_estado_pista = 'est-agendado';

                    return $pista;

                case 3:
                    $pista->texto_estado_pista = 'En espera';
                    $pista->clase_estado_pista = 'est-espera';

                    return $pista;

                default:
                    return $pista;
            }
        }, $pistas);
        
        return $pistasMap;
    }

    public static function generarDificultad($pistas)
    {
        $pistasMap = array_map(function($pista) {
            switch ($pista->dificultad) {
                case 'Principiante':
                    $pista->icono_dificultad = 'icon-circle';

                    return $pista;

                case 'Intermedio':
                    $pista->icono_dificultad = 'icon-cube';

                    return $pista;
                
                case 'Avanzado':
                    $pista->icono_dificultad = 'icon-diamond';

                    return $pista;

                case 'Experto':
                    $pista->icono_dificultad = 'icon-diamond';

                    return $pista;

                default:
                    return $pista;
            }
        }, $pistas);
        
        return $pistasMap;
    }
}