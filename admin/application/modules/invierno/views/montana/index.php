<div class="col-sm-10 text-left marg-fix">
  	<div class="titulo-btn">
        <h1>Montaña</h1>
    </div>
    
    <form action="#" method="post" id="form-agregar" enctype="multipart/form-data" >
        <div class="row" style="margin-top:30px; margin-bottom:30px;">
        	<div class="col-md-10">
                <label>Título</label>
                <input type="text" class="form-control" name="titulo" value="<?= $montana->titulo ?>"/>

                <label>Introducción</label>
                <textarea class="form-control" rows="3"  id="introduccion" name="introduccion"><?= $montana->introduccion ?></textarea>
                
                <label>Última actualización</label>
                <input type="text" class="form-control" name="ultimaActualizacion" value="<?= $montana->ultima_actualizacion ?>"/>
            </div>
        </div>

        <input type="hidden" name="codigo" value="<?= $montana->codigo ?>" />
        <div class="row" >
			<div class="col-xs-12">
				<div class="text-left" style="margin-top:20px;">
					<button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
			</div>
        </div>
    </form>
</div>