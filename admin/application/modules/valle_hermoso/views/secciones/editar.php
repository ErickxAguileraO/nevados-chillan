<style>
#croppicModalObj{
    margin-top: 200px !important;
}</style>
<div class="col-sm-10 text-left marg-fix">
  	<div class="titulo-btn">
        <h1>Editar Sección</h1>
    </div>
    
    <form action="#" method="post" id="form-editar" >
        <div class="row" style="margin-top:30px; margin-bottom:30px;">
        	<div class="col-md-5">
            	<label>Título (*) </label>
                <input type="text" class="form-control validate[required]" name="titulo" value="<?php echo $seccion->titulo; ?>" />
                
                <label>Bajada</label>
                <textarea class="form-control" rows="3"  id="bajada" name="bajada"><?php echo $seccion->bajada; ?></textarea>
                
                <label>Adjuntar imagen fondo tamaño mínimo <?php echo $this->img->recorte_ancho_1; ?>px x <?php echo $this->img->recorte_alto_1; ?>px</label>
                <div class="multi-imagen" style="margin-bottom:20px;">
                    <div style="display:none;" id="replicar-1" class="box">
            			<div class="img" style="width:<?php echo $this->img->min_ancho_1+2; ?>px; height:<?php echo $this->img->min_alto_1+2; ?>px;" ></div>
            		</div>
                    <div id="cont-imagenes-1">
                        <?php if($seccion->imagen_adjunta_fondo){ ?>
                            <div class="box" >
                    			<div rel="1" class="img" style="width:<?php echo $this->img->min_ancho_1+2; ?>px; height:<?php echo $this->img->min_alto_1+2; ?>px;" >
                                    <img class="croppedImg" src="<?php echo $seccion->imagen_adjunta_fondo; ?>" />
                                    <div class="cropControls cropControlsUpload">
                                        <i class="cropControlRemoveCroppedImage eliminar_imagen" rel="<?php echo $seccion->codigo; ?>"></i>
                                    </div>
                                </div>
                    		</div>
                        <?php } ?>
                    </div>
                    <div id="rutas-imagenes"></div>
                </div>
                
                <label>Adjuntar imagen lateral tamaño mínimo <?php echo $this->img->recorte_ancho_2; ?>px x <?php echo $this->img->recorte_alto_2; ?>px</label>
                <div class="multi-imagen" style="margin-bottom:20px;">
                    <div style="display:none;" id="replicar-2" class="box">
            			<div class="img" style="width:<?php echo $this->img->min_ancho_2+2; ?>px; height:<?php echo $this->img->min_alto_2+2; ?>px;" ></div>
            		</div>
                    <div id="cont-imagenes-2">
                        <?php if($seccion->imagenes){ ?>
                            <?php foreach($seccion->imagenes as $aux){ ?>
                            <div class="box" >
                    			<div rel="2"  gal="1" class="img" style="width:<?php echo $this->img->min_ancho_2+2; ?>px; height:<?php echo $this->img->min_alto_2+2; ?>px;" >
                                    <img class="croppedImg" src="<?php echo $aux->ruta_interna; ?>" />
                                    <div class="cropControls cropControlsUpload">
                                        <i class="cropControlRemoveCroppedImage eliminar_imagen" rel="<?php echo $aux->codigo; ?>"></i>
                                    </div>
                                </div>
                    		</div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>


                <label>Posición</label>
				<select class="form-control validate[required]" name="posicion">
				    <option  <?php if($seccion->posicion == 1) echo 'selected'; ?> value="1" >Derecha</option>
				    <option  <?php if($seccion->posicion == 0) echo 'selected'; ?> value="0" >Izquierda</option>
				</select>
                
                <label>Tipo Imagen</label>
				<select class="form-control validate[required]" name="tipo_imagen">
				    <option value="1" <?php if($seccion->tipo_de_imagen == 1) echo 'selected'; ?>>Fondo</option>
				    <option value="2" <?php if($seccion->tipo_de_imagen == 2) echo 'selected'; ?>>Lateral</option>
				</select>
                
                <label>Link</label>
                <input type="text" class="form-control" name="link" value="<?php echo $seccion->link; ?>" />
                
                <label>Nombre Link</label>
                <input type="text" class="form-control" name="nombre_link" value="<?php echo $seccion->nombre_link; ?>" />
                
                <label>Orden</label>
                <input type="number" min="0" class="form-control validate[numeric]" name="orden" value="<?php echo $seccion->orden; ?>" />
                
                <label>Estado</label>
				<select class="form-control validate[required]" name="estado">
				    <option value="1" <?php if($seccion->estado) echo 'selected'; ?>>Activo</option>
				    <option value="0" <?php if(!$seccion->estado) echo 'selected'; ?>>Inactivo</option>
				</select>
                
        	</div>
            
            <input type="hidden" id="codigo" value="<?php echo $seccion->codigo; ?>" />
			<div class="col-xs-12">
				<div class="text-left" style="margin-top:20px;">
					<a href="/valle-hermoso/secciones/" class="btn btn-can">Cancelar</a>
					<button type="submit" class="btn btn-primary">Guardar</button>
                </div>
			</div>
        </div>
    </form>
</div>

<script>
    //configuracion para imagenes
	var id = 1;
	var urlDelete = '/valle-hermoso/secciones/eliminar-imagen/';
    var urlCargar = '/valle-hermoso/secciones/cargar-imagen/';
    var urlCortar = '/valle-hermoso/secciones/cortar-imagen/';
    var galeria = false;
    var cargar = [];
    <?php if(!$seccion->imagen_adjunta_fondo){ ?>
	   cargar.push(1);
       cargar_imagen(cargar);
    <?php } ?>
    
    
        var nuevo_cargar = [];
        nuevo_cargar.push(2);
        cargar_imagenes(nuevo_cargar);
</script> 

<style type="text/css">
.multi-imagen .box{
	width: 100%;
}
</style>