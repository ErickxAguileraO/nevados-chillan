<div class="col-sm-10 text-left marg-fix">
  	<div class="titulo-btn">
        <h1>Mapa de Pistas</h1>
    </div>
    
    <form action="#" method="post" id="form-agregar" enctype="multipart/form-data" >
        <div class="row" style="margin-top:30px; margin-bottom:30px;">
        	<div class="col-md-10">
                
                <h4>Encabezado</h4>
                <br>
                <textarea class="form-control" rows="3"  id="descripcion" name="descripcion"><?= ($encabezado)?$encabezado->texto:''; ?></textarea>
                
            </div>
        </div>

        <input type="hidden" name="codigo" value="<?php echo ($encabezado)?$encabezado->codigo:''; ?>" />
        <div class="row" >
			<div class="col-xs-12">
				<div class="text-left" style="margin-top:20px;">
					<button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
			</div>
        </div>
    </form>
    <div class="subtitulo-btn">
    	<h2>&nbsp;</h2>
        <a class="btn btn-default" href="/invierno/mapa-pistas/agregar/">Agregar mapa</a>
    </div>
</div>