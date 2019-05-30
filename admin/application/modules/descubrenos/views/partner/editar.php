<div class="col-sm-10 text-left marg-fix">
  	<div class="titulo-btn">
        <h1>Editar Partner</h1>
    </div>
    
    <form action="#" method="post" id="form-editar" enctype="multipart/form-data" >
        <div class="row" style="margin-top:30px; margin-bottom:30px;">
        	<div class="col-md-5">
            	<label>Nombre (*) </label>
                <input type="text" class="form-control validate[required]" name="nombre" value="<?php echo $partner->nombre; ?>" />
                
                <label>Imagen adjunta. Tamaño 130px x 100px</label>
                <input type="file" class="form-control" name="imagen" />
                <?php if($partner->imagen_adjunta){ ?>
                    <img width="145" style="height: auto; margin-top:10px;" src="<?php echo $partner->imagen_adjunta; ?>" />
                <?php } ?>
                
                <label>Orden</label>
                <input type="text" class="form-control validate[numeric]" name="orden" value="<?php echo $partner->orden; ?>" />
                
                <label>Estado</label>
				<select class="form-control validate[required]" name="estado">
				    <option <?php if($partner->estado) echo 'selected'; ?> value="1" >Activo</option>
				    <option <?php if(!$partner->estado) echo 'selected'; ?>value="0" >Inactivo</option>
				</select>
                
        	</div>
            
            <input type="hidden" id="codigo" value="<?php echo $partner->codigo; ?>" />
			<div class="col-xs-12">
				<div class="text-left" style="margin-top:20px;">
					<a href="/descubrenos/partner/" class="btn btn-can">Cancelar</a>
					<button type="submit" class="btn btn-primary">Guardar</button>
                </div>
			</div>
        </div>
    </form>
</div>