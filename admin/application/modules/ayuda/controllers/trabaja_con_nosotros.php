<?php if ( ! defined('BASEPATH')) exit('No puede acceder a este archivo');

class Trabaja_con_nosotros extends CI_Controller {
	    
	private $modulo = 59;
    public $sitio_url = SITIO_URL;
    
	function __construct(){
		parent::__construct();
	}
	
	public function index(){
        
		#Title
		$this->layout->title('Trabaja con Nosotros');
		
        $where = $and = "";
        $url = "";
        
        if(count($_GET) > 0)
            $url = '?'.http_build_query($_GET, '', "&");
        
		$config['uri_segment'] = 3;
		$config['base_url'] = '/ayuda/trabaja-con-nosotros/';
		$config['per_page'] = 20;
		$config['total_rows'] = count($this->ws->listar($this->modulo,$where));
        $config['suffix'] = '/'.$url;
        $config['first_url'] = $config['base_url'].$url;
		$this->pagination->initialize($config);
        
        #obtiene el numero de pagina
		$pagina = ($this->uri->segment($config['uri_segment']))?$this->uri->segment($config['uri_segment'])-1:0;

		#contenido
        $this->ws->order(array("tcn_fecha DESC","tcn_hora DESC"));
        $this->ws->limit($config['per_page'], ($config['per_page'] * $pagina));
		$contenido["trabaja"] = $this->ws->listar($this->modulo,$where);
        $contenido['pagination'] = $this->pagination->create_links();
        
		#Nav
		$this->layout->nav(array("Trabaja con Nosotros" => '/'));
		
		#view
		$this->layout->view('trabaja_con_nosotros/index', $contenido);
	}
    
    public function detalle($codigo){
        
        #registro
        $this->ws->joinInner(33,"tcn_area_de_trabajo = art_codigo");
        if($contenido['trabaja'] = $trabaja = $this->ws->obtener($this->modulo,"tcn_codigo = '$codigo'"));
        else show_error('');
        
		#Title
		$this->layout->title('Detalle Trabaja con Nosotros');
        
		#Nav
		$this->layout->nav(array("Trabaja con Nosotros" => '/ayuda/trabaja-con-nosotros/', "Detalle Trabaja con Nosotros" => "/"));
		
		#view
		$this->layout->view('trabaja_con_nosotros/detalle',$contenido);
        
	}
    
    ### ARCHIVO ADJUNTO
    public function descargar_archivo($codigo){
        $archivo = $this->ws->obtener($this->modulo,"tcn_codigo = $codigo");
        
        $this->load->helper('download');
        $name = basename($archivo->archivo_adjunto);
        $data = file_get_contents($this->sitio_url.$archivo->archivo_adjunto);
        
        force_download($name, $data);
    }

	### EXPORTACION EXCEL
	public function exportar(){

		require APPPATH."libraries/PHPExcel/PHPExcel.php";
		$this->ws->joinLeft(33, "tcn_area_de_trabajo = art_codigo");
		$formularios = $this->ws->listar($this->modulo);

		// print_array($formularios);die;

		$objPHPExcel = new PHPExcel();
		$objPHPExcel->
		getProperties()
		->setCreator("Aeurus.cl")
		->setLastModifiedBy("Aeurus.cl")
		->setTitle("Excel Trabaja-con-nosotros")
		->setSubject("Excel Trabaja-con-nosotros")
		->setDescription("Excel Trabaja-con-nosotros")
		->setKeywords("Trabaja-con-nosotros")
		->setCategory("Trabaja-con-nosotros");


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

		$objPHPExcel->getActiveSheet()->getStyle('1:5')->applyFromArray($styleFont);

		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);


		$i=1;

		$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, 'Nombre');
		$objPHPExcel->getActiveSheet()->getStyle('A'.$i)->applyFromArray($styleArray);

		$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$i, 'Telefono');
		$objPHPExcel->getActiveSheet()->getStyle('B'.$i)->applyFromArray($styleArray);

		$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$i, 'Correo');
		$objPHPExcel->getActiveSheet()->getStyle('C'.$i)->applyFromArray($styleArray);
		
		$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, 'Area de Trabajo');
		$objPHPExcel->getActiveSheet()->getStyle('D'.$i)->applyFromArray($styleArray);
		
		$objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$i, 'CV'); 
		$objPHPExcel->getActiveSheet()->getStyle('E'.$i)->applyFromArray($styleArray);
		

		$i++;

		//carga de datos

		foreach($formularios as  $n){

			if(($n->nombre_completo)){ $nombre_completo = $n->nombre_completo; }else{ $nombre_completo = '';}
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i,$nombre_completo);
			$objPHPExcel->getActiveSheet()->getStyle('A'.$i)->applyFromArray($styleArraInfo);

			if(($n->telefono)){ $telefono = $n->telefono; }else{ $telefono = '';}
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$i, $telefono );
			$objPHPExcel->getActiveSheet()->getStyle('B'.$i)->applyFromArray($styleArraInfo);

			if(($n->email)){ $email = $n->email; }else{ $email = '';}
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$i, $email );
			$objPHPExcel->getActiveSheet()->getStyle('C'.$i)->applyFromArray($styleArraInfo);

			if(($n->areas_trabajo->nombre)){ $area_de_trabajo = $n->areas_trabajo->nombre; }else{ $area_de_trabajo = '';}
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, $area_de_trabajo );
			$objPHPExcel->getActiveSheet()->getStyle('D'.$i)->applyFromArray($styleArraInfo);

			if(($n->archivo_adjunto)){ $archivo_adjunto = $n->archivo_adjunto; }else{ $archivo_adjunto = '';}
			$objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$i, SITIO_URL . $archivo_adjunto );
			$objPHPExcel->getActiveSheet()->getStyle('E'.$i)->applyFromArray($styleArraInfo);

			$i++;

		}


		// URL DEL ARCHIVO EN EL DETALLE DEL ADMIN: "SITIO_URL . $trabaja->archivo_adjunto"


		$objPHPExcel->getActiveSheet()->setTitle("EXCEL TRABAJA CON NOSOTROS");

		$objPHPExcel->setActiveSheetIndex(0);


		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Trabaja-con-nosotros - '.date('d-m-Y H:i:s').'.xls"');
		header('Cache-Control: max-age=0');

		$objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel5');
        ob_end_clean();
		$objWriter->save('php://output');
		exit;

	}
}