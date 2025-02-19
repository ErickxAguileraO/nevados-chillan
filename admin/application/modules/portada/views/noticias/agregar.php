﻿<div class="col-sm-10 text-left marg-fix">
  	<div class="titulo-btn">
        <h1>Agregar Noticia</h1>
    </div>
    
    <form action="#" method="post" id="form-agregar" >
        <div class="row" style="margin-top:30px; margin-bottom:30px;">
        	<div class="col-md-5">
            	<label>Título (*) </label>
                <input type="text" class="form-control validate[required]" name="titulo" />
                
                <label>Fecha publicación</label>
                <div class="input-group date">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                    </div>
                    <input type="text" class="form-control pull-right datepicker" name="fecha_publicacion" />
                </div>
                
                <label>Resumen</label>
                <textarea class="form-control" rows="3" name="resumen"></textarea>
                
                <label>Descripción</label>
                <textarea class="form-control" rows="3"  id="descripcion" name="descripcion"></textarea>
                
                <label>Categoría</label>
				<select class="form-control" name="categoria">
				    <option value="">Seleccione</option>
				    <?php if($categorias){ ?>
    				    <?php foreach($categorias as $aux){ ?>
                            <option value="<?php echo $aux->codigo; ?>"><?php echo $aux->nombre; ?></option>
                        <?php } ?>
                    <?php } ?>
				</select>
                
                <label>Enlace (*) </label>
                <input type="text" class="form-control validate[required]" name="enlace" />

                <label>Estado</label>
				<select class="form-control validate[required]" name="estado">
				    <option value="1">Activo</option>
				    <option value="0">Inactivo</option>
				</select>
                
        	</div>
            
            <!-- imagenes -->
            <div class="col-md-5">
            
                <label>Adjuntar imágenes tamaño mínimo <?php echo $this->img->recorte_ancho_1; ?>px x <?php echo $this->img->recorte_alto_1; ?>px</label>
                <div class="multi-imagen" style="margin-bottom:20px;">
                    <div style="display:none;" id="replicar-1" class="box">
            			<div class="img" style="width:<?php echo $this->img->min_ancho_1+2; ?>px; height:<?php echo $this->img->min_alto_1+2; ?>px;" ></div>
            		</div>
                    <div id="cont-imagenes-1"></div>
                    <div id="rutas-imagenes"></div>
                </div>
        	</div>
            
			<div class="col-xs-12">
				<div class="text-left" style="margin-top:20px;">
					<a href="/portada/noticias/" class="btn btn-can">Cancelar</a>
					<button type="submit" class="btn btn-primary">Guardar</button>
                </div>
			</div>
        </div>
    </form>
</div>

<script>
    //configuracion para imagenes
	var id = 1;
	var urlDelete = '/portada/noticias/eliminar-imagen/';
    var urlCargar = '/portada/noticias/cargar-imagen/';
    var urlCortar = '/portada/noticias/cortar-imagen/';
	cargar_imagenes();
</script> 

<style type="text/css">
.multi-imagen .box{
	width: 100%;
}
</style>
