﻿<div class="col-sm-10 text-left marg-fix">
  	<div class="titulo-btn">
        <h1>Agregar Sección</h1>
    </div>
    
    <form action="#" method="post" id="form-agregar" >
        <div class="row" style="margin-top:30px; margin-bottom:30px;">
        	<div class="col-md-5">
            	<label>Título (*) </label>
                <input type="text" class="form-control validate[required]" name="titulo" />
                
                <label>Bajada</label>
                <textarea class="form-control" rows="3"  id="bajada" name="bajada"></textarea>
                
                <label>Adjuntar imagen fondo tamaño mínimo <?php echo $this->img->recorte_ancho_1; ?>px x <?php echo $this->img->recorte_alto_1; ?>px</label>
                <div class="multi-imagen" style="margin-bottom:20px;">
                    <div style="display:none;" id="replicar-1" class="box">
            			<div class="img" style="width:<?php echo $this->img->min_ancho_1+2; ?>px; height:<?php echo $this->img->min_alto_1+2; ?>px;" ></div>
            		</div>
                    <div id="cont-imagenes-1"></div>
                    <div id="rutas-imagenes"></div>
                </div>
                
                <label>Adjuntar imagen lateral tamaño mínimo <?php echo $this->img->recorte_ancho_2; ?>px x <?php echo $this->img->recorte_alto_2; ?>px</label>
                <div class="multi-imagen" style="margin-bottom:20px;">
                    <div style="display:none;" id="replicar-2" class="box">
            			<div class="img" style="width:<?php echo $this->img->min_ancho_2+2; ?>px; height:<?php echo $this->img->min_alto_2+2; ?>px;" ></div>
            		</div>
                    <div id="cont-imagenes-2"></div>
                </div>


                <label>Tipo Imagen</label>
				<select class="form-control validate[required]" name="tipo_imagen">
				    <option value="1" >Fondo</option>
				    <option value="2" >Lateral</option>
				</select>
                

                <label>Posición</label>
				<select class="form-control validate[required]" name="posicion">
				    <option value="1" >Derecha</option>
				    <option value="0" >Izquierda</option>
				</select>

                
                    
                <label>Video</label>
                <textarea class="form-control" rows="3"  id="embed_video" name="embed_video"></textarea>
                <script>
                CKEDITOR.replace('embed_video');
                </script>

                <label>Link</label>
                <input type="text" class="form-control" name="link" />
                
                <label>Nombre Link</label>
                <input type="text" class="form-control" name="nombre_link" />
                
                <label>Link 2</label>
                <input type="text" class="form-control" name="link_2" />
                
                <label>Nombre Link 2</label>
                <input type="text" class="form-control" name="nombre_link_2" />
                
                <label>Link 3</label>
                <input type="text" class="form-control" name="link_3" />
                
                <label>Nombre Link 3</label>
                <input type="text" class="form-control" name="nombre_link_3" />
                
                <label>Imagen adjunta</label>
                <input type="file" class="form-control" name="imagen" />
                
                <label>Nombre imagen adjunta</label>
                <input type="text" class="form-control" name="nombre_imagen_adjunta" />
                
                
    
                <label>Imagen adjunta 2</label>
                <input type="file" class="form-control" name="imagen2" />
                
                <label>Nombre imagen adjunta 2</label>
                <input type="text" class="form-control" name="nombre_imagen_adjunta2" />
                
                  
                <label>Imagen adjunta 3</label>
                <input type="file" class="form-control" name="imagen3" />
                
                <label>Nombre imagen adjunta 3</label>
                <input type="text" class="form-control" name="nombre_imagen_adjunta3" />
                
                
                <label>Orden</label>
                <input type="number" min="0" class="form-control validate[numeric]" name="orden" />
                
                <label>Estado</label>
				<select class="form-control validate[required]" name="estado">
				    <option value="1" >Activo</option>
				    <option value="0" >Inactivo</option>
				</select>
                
        	</div>
            
			<div class="col-xs-12">
				<div class="text-left" style="margin-top:20px;">
					<a href="/verano/secciones/" class="btn btn-can">Cancelar</a>
					<button type="submit" class="btn btn-primary">Guardar</button>
                </div>
			</div>
        </div>
    </form>
</div>

<script>
    //configuracion para imagenes
	var id = 1;
	var urlDelete = '/verano/secciones/eliminar-imagen/';
    var urlCargar = '/verano/secciones/cargar-imagen/';
    var urlCortar = '/verano/secciones/cortar-imagen/';
    var galeria = false; 
    
    var cargar = [];
    cargar.push(1);
    //cargar.push(2);
    cargar_imagen(cargar);


    var nuevo_cargar = [];
    nuevo_cargar.push(2);
    cargar_imagenes(nuevo_cargar);
</script> 

<style type="text/css">
.multi-imagen .box{
	width: 100%;
}
</style>