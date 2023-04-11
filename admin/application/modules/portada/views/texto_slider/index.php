<div class="col-sm-10 text-left marg-fix">
  	<div class="titulo-btn">
        <h1>Texto Slider</h1>
    </div>
    
    <form action="#" method="post" id="form-agregar" >
        <div class="row" style="margin-top:30px; margin-bottom:30px;">
        	<div class="col-md-10">

                <label>Descripción</label>
                <textarea class="form-control" rows="3"  id="texto" name="texto"><?php echo ($texto_slider)?$texto_slider->texto:''; ?></textarea>
                
            </div>
        </div>

        <input type="hidden" name="codigo" value="<?php echo ($texto_slider)?$texto_slider->codigo:''; ?>" />
        <div class="row" >
			<div class="col-xs-12">
				<div class="text-left" style="margin-top:20px;">
					<button type="submit" class="btn btn-primary">Guardar</button>
                </div>
			</div>
        </div>
    </form>
</div>