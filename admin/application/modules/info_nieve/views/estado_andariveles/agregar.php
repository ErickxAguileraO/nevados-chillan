<div class="col-sm-10 text-left marg-fix">
  	<div class="titulo-btn">
        <h1>Agregar Estado de Andarivel</h1>
    </div>
    
    <form action="#" method="post" id="form-agregar" >
        <div class="row" style="margin-top:30px; margin-bottom:30px;">
        	<div class="col-md-5">
            	<label>Nombre andarivel (*) </label>
                <input type="text" class="form-control validate[required]" name="nombre" />

				<label>Horario (*) </label>
				<span style="font-size: smaller; font-style: italic;">Ejemplo: 08:00 - 17:00</span>
                <input type="text" class="form-control validate[required]" name="horario" />

				<label>Tipo (*) </label>
                <input type="text" class="form-control validate[required]" name="tipo" />

                <label>Estado de andarivel</label>
				<select class="form-control validate[required]" name="estado_andarivel">
				    <option value="1">Abierto</option>
				    <option value="0">Cerrado</option>
					<option value="2">Agendado</option>
				    <option value="3">En espera</option>
				</select>
                
                <label>Orden</label>
                <input type="number" min="0" class="form-control validate[numeric]" name="orden" />
                
        	</div>
            
			<div class="col-xs-12">
				<div class="text-left" style="margin-top:20px;">
					<a href="/info-nieve/estado-andariveles/" class="btn btn-can">Cancelar</a>
					<button type="submit" class="btn btn-primary">Guardar</button>
                </div>
			</div>
        </div>
    </form>
</div>