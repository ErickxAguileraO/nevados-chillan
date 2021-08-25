<?php if ( ! defined('BASEPATH')) exit('No puede acceder a este archivo');

class Promociones extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        redirect('/alojamiento/promociones/');
    }
}