<?php if (!defined('BASEPATH')) exit('No puede acceder a este archivo');

class Texto_slider extends CI_Controller
{
    private $modulo = 79;
    // private $seccion = 8;

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        #Title
        $this->layout->title('Texto Slider');

        #JS - Editor
        $this->layout->js('/js/jquery/ckeditor-standard/ckeditor.js');

        #js
        $this->layout->js('/js/sistema/portada/texto_slider/index.js');

        #contenido
        $contenido["texto_slider"] = $informacion = $this->ws->obtener($this->modulo, "tex_codigo = 1"); // , "tex_codigo = '$codigo'"

        #Nav
        $this->layout->nav(array("Texto Slider" => '/'));

        #view
        $this->layout->view('texto_slider/index', $contenido);
    }

    public function agregar()
    {

        if ($this->input->post()) {

            $error = "";
            if ($error) {
                echo json_encode(array("result" => false, "msg" => $error));
                exit;
            }

            $datos['tex_texto'] = $this->input->post('texto');
            // $datos['int_tipo_seccion'] = $this->seccion;

            // print_array($this->input->post('codigo'));die;

            if ($codigo = $this->input->post('codigo')) {
                $this->ws->actualizar($this->modulo, $datos, "tex_codigo = 1");
            } else {
                $this->ws->insertar($this->modulo, $datos);
            }
            echo json_encode(array("result" => true));

        }
    }

}