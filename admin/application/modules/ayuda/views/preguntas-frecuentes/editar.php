<div class="col-sm-10 text-left marg-fix">
  	<div class="titulo-btn">
        <h1>Editar Pregunta Frecuente</h1>
    </div>
    
    <form action="#" method="post" id="form-editar" >
        <div class="row" style="margin-top:30px; margin-bottom:30px;">
        	<div class="col-md-5">
            	<label>Pregunta (*) </label>
                <input type="text" class="form-control validate[required]" name="pregunta" value="<?php echo $pregunta->pregunta; ?>" />
                
                <label>Descripción</label>
                <textarea class="form-control" rows="3"  id="descripcion" name="descripcion"><?php echo $pregunta->descripcion; ?></textarea>
                
                <label>Orden</label>
                <input type="number" min="0" class="form-control validate[numeric]" name="orden" value="<?php echo $pregunta->orden; ?>" />
                
                <label>Estado</label>
				<select class="form-control validate[required]" name="estado">
				    <option value="1" <?php if($pregunta->estado) echo 'selected'; ?>>Activo</option>
				    <option value="0" <?php if(!$pregunta->estado) echo 'selected'; ?>>Inactivo</option>
				</select>
                
        	</div>
            
            <input type="hidden" id="codigo" value="<?php echo $pregunta->codigo; ?>" />
			<div class="col-xs-12">
				<div class="text-left" style="margin-top:20px;">
					<a href="/ayuda/preguntas-frecuentes/" class="btn btn-can">Cancelar</a>
					<button type="submit" class="btn btn-primary">Guardar</button>
                </div>
			</div>
        </div>
    </form>
</div>