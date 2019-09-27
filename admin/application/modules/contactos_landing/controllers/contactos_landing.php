<?php if ( ! defined('BASEPATH')) exit('No puede acceder a este archivo');

class Contactos_Landing extends CI_Controller {
	    
	private $modulo = 67, $modulo_landing = 65,  $modulo_imagenes = 68, $modulo_hotel = 14;
    public $img;
    
	function __construct(){
		parent::__construct();
        
        /*#define el tamaño del contenedor en la vista
        $this->img->min_ancho_1 = 260;
        $this->img->min_alto_1 = 188.3;
        
        #define el tamaño de la imagen grande
        $this->img->max_ancho_1 = 780;
        $this->img->max_alto_1 = 780;
        
        #define el tamaño del recorte
        $this->img->recorte_ancho_1 = 780;
        $this->img->recorte_alto_1 = 565;
        
        $this->img->upload_dir = '/imagenes/modulos/landing/';
        
        #lib imagenes
        $this->load->model('inicio/imagen','objImagen');*/
	}
	
	public function index(){
        
		#Title
		$this->layout->title('Contactos Landing Pages');
		
        #js
        $this->layout->js('/js/sistema/contactos_landing/index.js');
        $url = "";
        /*$where = $and = "";
        
        
        $where = "sli_tipo_seccion = 9";
        $and = " and ";*/
        
        if(count($_GET) > 0)
            $url = '?'.http_build_query($_GET, '', "&");
        
		$config['uri_segment'] = 3;
		$config['base_url'] = '/contactos_landing/';
		$config['per_page'] = 20;
		$config['total_rows'] = count($this->ws->listar($this->modulo));
        $config['suffix'] = '/'.$url;
        $config['first_url'] = $config['base_url'].$url;
		$this->pagination->initialize($config);
        
        #obtiene el numero de pagina
		$pagina = ($this->uri->segment($config['uri_segment']))?$this->uri->segment($config['uri_segment'])-1:0;

		#contenido
        $this->ws->limit($config['per_page'], ($config['per_page'] * $pagina));
		$contactos = $this->ws->listar($this->modulo);
        foreach($contactos as $contacto){
            $contacto->nombre_landing = $this->ws->obtener($this->modulo_landing,'lan_codigo = '.$contacto->landing);
        }
        
        $contenido["contactos"] = $contactos;
        //print_array($contactos); 
        $contenido['pagination'] = $this->pagination->create_links();
      
		#Nav
		$this->layout->nav(array("Newsletter" => '/'));
		
		#view
		$this->layout->view('index', $contenido);
	}
	
	public function agregar(){        
        if($this->input->post()){
            
			#validaciones
			$this->form_validation->set_rules('nombre','Nombre','required');
			
            $this->form_validation->set_message('required', '* %s es obligatorio');
            $this->form_validation->set_error_delimiters('<div>','</div>');
            
            $error = "";
            if(!$this->form_validation->run())
				$error .= validation_errors();
            
            if($error){
                echo json_encode(array("result"=>false,"msg"=>$error));
                exit;
            }
            
            $datos['cont_nombre'] = $this->input->post('nombre');
            $datos['cont_telefono'] = $this->input->post('telefono');
            $datos['cont_correo'] = $this->input->post('correo');
            $datos['cont_mensaje'] = $this->input->post('mensaje');
            $datos['cont_landing'] = $this->input->post('landing');
 
            
            $this->ws->insertar($this->modulo,$datos);
            unset($datos);
            
            echo json_encode(array("result"=>true));
            
        }
        else{

    		#Title
    		$this->layout->title('Agregar Contacto Langing Pages');
    		
            #js - Imagen Cropic
            $this->layout->js('/js/jquery/croppic/croppic.js');
            $this->layout->css('/js/jquery/croppic/croppic.css');
            $this->layout->js('/js/sistema/imagenes/simple.js');
            
            #JS - Editor
    		$this->layout->js('/js/jquery/ckeditor-standard/ckeditor.js');
            
            #js
            $this->layout->js('/js/sistema/contactos_landing/agregar.js');
    		
    		#Nav
    		$this->layout->nav(array("Contacto Landing" => '/contacto_landing', "Agregar Contacto Landing" => "/"));
            $this->ws->order('lan_nombre DESC');
    		$contenido['landings'] = $this->ws->listar($this->modulo_landing);
            //print_array($contenido['landings']);
    		#view
    		$this->layout->view('agregar', $contenido);
        }
	}
    
    public function editar($codigo = 0){        
        if($this->input->post()){
            
			#validaciones
			$this->form_validation->set_rules('nombre','Nombre','required');
			
            $this->form_validation->set_message('required', '* %s es obligatorio');
            $this->form_validation->set_error_delimiters('<div>','</div>');
            
            $error = "";
            if(!$this->form_validation->run())
				$error .= validation_errors();
            
            if($error){
                echo json_encode(array("result"=>false,"msg"=>$error));
                exit;
            }
            
            $datos['cont_nombre'] = $this->input->post('nombre');
            $datos['cont_telefono'] = $this->input->post('telefono');
            $datos['cont_correo'] = $this->input->post('correo');
            $datos['cont_mensaje'] = $this->input->post('mensaje');
            $datos['cont_landing'] = $this->input->post('landing');
            //print_array($datos);
            
            if($this->ws->actualizar($this->modulo,$datos,"cont_codigo = ".$this->input->post('codigo'))){
                unset($datos);
            
                echo json_encode(array("result"=>true));  
                exit;                
            }else{
                $error = "Error al actualizar";
                echo json_encode(array("result"=>false,"msg"=>$error));
                exit;
            }
              
        }
        else{
            #registro
            if($contenido['contacto'] = $this->ws->obtener($this->modulo,"cont_codigo = $codigo"));
            else show_error('');
            
            $this->ws->order('lan_nombre DESC');
    		$contenido['landings'] = $this->ws->listar($this->modulo_landing);
            
    		#Title
    		$this->layout->title('Editar Contacto Landing Page');
    		
            #JS - Editor
    		$this->layout->js('/js/jquery/ckeditor-standard/ckeditor.js');
            
            #js Imagen Cropic
            $this->layout->js('/js/jquery/croppic/croppic.js');
            $this->layout->css('/js/jquery/croppic/croppic.css');
            $this->layout->js('/js/sistema/imagenes/simple.js');
            
            #js
            $this->layout->js('/js/sistema/contactos_landing/editar.js');
    		
    		#Nav
    		$this->layout->nav(array("Editar Landing" => "/"));
    		//print_array($contenido);
    		#view
    		$this->layout->view('editar',$contenido);
        }
	}
    
    public function eliminar() {
		try {
			$this->ws->eliminar($this->modulo, "cont_codigo = {$this->input->post('codigo')}");
			echo json_encode(array("result" => true));
		} catch (Exception $e) {
			echo json_encode(array("result" => false, "msg" => "Ha ocurrido un error inesperado. Por favor, int�ntelo nuevamente."));
		}
    }


     public function exportar(){    
        require APPPATH."libraries/PHPExcel/PHPExcel.php";
        # Contenido        
        
        #echo "1";die;
                
        $datas = $this->ws->listar($this->modulo);
        
        foreach($datas as $res){
            $res->landing = $this->ws->obtener($this->modulo_landing, 'lan_codigo ='.$res->landing)->url;
        }
          #print_array($datas);die;      
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->
            getProperties()
                ->setCreator("Aeurus.cl")
                ->setLastModifiedBy("Aeurus.cl")
                ->setTitle("Excel Mensajes")
                ->setSubject("Excel Mensajes")
                ->setDescription("Excel Mensajes")
                ->setKeywords("Mensajes")
                ->setCategory("Mensajes"); 


        $styleArray = array(
               'borders' => array(
                     'outline' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN,
                            'color' => array('argb' => '000000'),
                     ),
               ),
                'font'    => array(
                 'bold'      => true,
                 'italic'    => false,
                 'strike'    => false,
             ),
            'alignment' => array(
                    'wrap'       => true,
              'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
              'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
            ),
            'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => 'b0c47c')
            ),
        );
        
        $styleArraInfo = array(
                'font'    => array(
                 'bold'      => false,
                 'italic'    => false,
                 'strike'    => false,
                 'size' => 10
                 ),
                 'borders' => array(
                     'outline' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN,
                            'color' => array('argb' => '000000'),
                     ),
               ),
               'alignment' => array(
                    'wrap'       => true,
              'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
              'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
              )
        );
        
        
        $styleFont = array(
             'font'    => array(
                 'bold'      => true,
                 'italic'    => false,
                 'strike'    => false,  
             ),
            'alignment' => array(
                    'wrap'       => true,
              'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
              'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
            ),
        );

        $objPHPExcel->getActiveSheet()->getStyle('1:3')->applyFromArray($styleFont); 
        
        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(40);
        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(40);
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(40);
        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(40);
        
        
        $i=1;
        
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, 'Nombre');
        $objPHPExcel->getActiveSheet()->getStyle('A'.$i)->applyFromArray($styleArray);
        
    
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$i, 'Teléfono');
        $objPHPExcel->getActiveSheet()->getStyle('B'.$i)->applyFromArray($styleArray);
        
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$i, 'Correo');
        $objPHPExcel->getActiveSheet()->getStyle('C'.$i)->applyFromArray($styleArray);
        
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, 'Mensaje');
        $objPHPExcel->getActiveSheet()->getStyle('D'.$i)->applyFromArray($styleArray);

        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$i, 'Landing');
        $objPHPExcel->getActiveSheet()->getStyle('E'.$i)->applyFromArray($styleArray);

        /*
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$i, 'Región');
        $objPHPExcel->getActiveSheet()->getStyle('F'.$i)->applyFromArray($styleArray);
        
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$i, 'Asunto');
        $objPHPExcel->getActiveSheet()->getStyle('G'.$i)->applyFromArray($styleArray);
        
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$i, 'Mensaje');
        $objPHPExcel->getActiveSheet()->getStyle('H'.$i)->applyFromArray($styleArray);
        */
          
        $i++; 
        
        //carga de datos
        
        foreach($datas as $data){  
  
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, $data->nombre);
                    $objPHPExcel->getActiveSheet()->getStyle('A'.$i)->applyFromArray($styleArraInfo);
                    
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$i, $data->telefono);
                    $objPHPExcel->getActiveSheet()->getStyle('B'.$i)->applyFromArray($styleArraInfo);
                    
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$i, $data->correo);
                    $objPHPExcel->getActiveSheet()->getStyle('C'.$i)->applyFromArray($styleArraInfo);
                    
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, $data->mensaje);
                    $objPHPExcel->getActiveSheet()->getStyle('D'.$i)->applyFromArray($styleArraInfo);
                    
                    
                    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$i, SITIO_URL.'/landing/'.$data->landing.'/');
                    $objPHPExcel->getActiveSheet()->getStyle('E'.$i)->applyFromArray($styleArraInfo);
                    
                                    
                    

                    $i++;   
   
            }         

/*
        $objPHPExcel->getActiveSheet()->setTitle("EXCEL MENSAJES");

        $objPHPExcel->setActiveSheetIndex(0);

    
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Mensajes - '.date('d/m/Y').'.xls"');
        header('Cache-Control: max-age=0');

        $objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel5');
        $objWriter->save('php://output');
        exit;*/

        ob_end_clean();
        $objPHPExcel->setActiveSheetIndex(0);
        $objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,"Excel5");
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment;filename=inscripcion.xls");
        header("Cache-Control: max-age=0");

        $objWriter->save("php://output");
        exit;

      }    


    	
}