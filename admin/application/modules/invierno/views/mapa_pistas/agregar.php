<div class="col-sm-10 text-left marg-fix">
  	<div class="titulo-btn">
        <h1>Agregar mapa</h1>
    </div>

    <form action="#" method="post" id="form-agregar" enctype="multipart/form-data" >
        <div class="row" style="margin-top:30px; margin-bottom:30px;">
        	<div class="col-md-5">
            	<label>Nombre (*) </label>
                <input type="text" class="form-control validate[required]" name="nombre" />

                <label>Descripción</label>
                <textarea class="form-control" rows="3"  id="descripcion" name="descripcion"></textarea>

                <label>Archivo Adjunto (PDF)</label>
                <input type="file" class="form-control" name="archivo" />
                
                <label>Imagen adjunta. Tamaño mínimo <?php echo $this->img->ancho_min_1; ?>px ancho</label>
                <input type="file" class="form-control" name="imagen" />
                
                <!--<?php if($mapa && $mapa->imagen_adjunta){ ?>
                    <img width="292" style="height: auto; margin-top:10px;" src="<?php echo $mapa->imagen_adjunta; ?>" />
                <?php } ?>-->
                
        	</div>
			<div class="col-xs-12">
				<div class="text-left" style="margin-top:20px;">
					<button type="submit" class="btn btn-primary">Guardar</button>
                </div>
			</div>
        </div>
    </form>
</div>