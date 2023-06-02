<div class="col-sm-10 text-left marg-fix">
  	<div class="titulo-btn">
        <h1>Modificar mapa</h1>
    </div>

    <form action="#" method="post" id="form-agregar" enctype="multipart/form-data" >
        <div class="row" style="margin-top:30px; margin-bottom:30px;">
        	<div class="col-md-5">
            	<label>Nombre (*) </label>
                <input type="text" class="form-control validate[required]" name="nombre" value="<?= $mapa->nombre ?>"/>
                
                <label>Descripción</label>
                <textarea class="form-control" rows="3"  id="descripcion" name="descripcion"><?= $mapa->descripcion ?></textarea>

                <label>Archivo Adjunto (PDF)</label>
                <input type="file" class="form-control" name="archivo" />
                
                <?php if ($mapa && $mapa->documento): ?>
                    <div>
                        <div class="col-md-5">
                            <a href="/invierno/mapa-pistas/descargar-archivo/<?= $mapa->codigo ?>/">Descargar archivo</a>
                        </div>
                        <div class="col-md-1">
                            <a class="eliminar_archivo" rel="<?= $mapa->codigo ?>" style="cursor: pointer;">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($mapa && $mapa->imagen_adjunta): ?>
                <div class="col-md-12 margin-top-xl">
                    <label>Imagen registrada:</label>
                    <div class="">
                        <img width="292" style="height: auto;" src="<?= $mapa->imagen_adjunta; ?>" />
                        <a class="eliminar_imagen" rel="<?= $mapa->codigo;?>" style="cursor:pointer; vertical-align: top;">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <?php endif; ?>

                <label>Imagen adjunta. Tamaño mínimo <?php echo $this->img->ancho_min_1; ?>px ancho</label>
                <input type="file" class="form-control" name="imagen" />
        	</div>
			<div class="col-xs-12">
				<div class="text-left" style="margin-top:20px;">
					<button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
			</div>
        </div>
        <input type="hidden" id="codigoMapa" value="<?= $mapa->codigo ?>">
    </form>
</div>