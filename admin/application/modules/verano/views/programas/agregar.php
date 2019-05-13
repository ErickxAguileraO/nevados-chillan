<div class="col-sm-10 text-left marg-fix">
  	<div class="titulo-btn">
        <h1>Agregar programa y valores</h1>
    </div>
    
    <form action="#" method="post" id="form-agregar" >
        <div class="row" style="margin-top:30px; margin-bottom:30px;">
        	<div class="col-md-5">
            	<label>Título (*) </label>
                <input type="text" class="form-control validate[required]" name="titulo" />
                
                
                <label>Bajada 1</label>
                <textarea class="form-control" rows="3"  id="bajada_uno" name="bajada_uno"></textarea>

                <label>Bajada 2</label>
                <textarea class="form-control" rows="3"  id="bajada_dos" name="bajada_dos"></textarea>
                
                <br/>
                <hr>
                <h3>Opciones</h3>

                <label>Nombre (*) </label>
                <input type="text"  class="form-control validate[required]" name="nombre_opcion[]" />
                <label>Monto (*) </label>
                <input type="text"   onkeyup="this.value=monto(this.value)"   class="form-control validate[required]" name="monto_opcion[]" />
                <label>Resumen (*) </label>
                <textarea class="form-control" rows="3"   name="resumen_opcion[]"></textarea>
                <label>Orden</label>
                <input type="number"   onkeyup="this.value=monto(this.value)"   min="0" class="form-control validate[numeric]" name="orden_opcion[]" />
                
                
                <div id="opciones"></div>

                <a style="cursor:pointer;" id="agregar">Agregar nueva opción [+]</a>

                <script>
                    $("#agregar").click(function(){
                    var contenido = '<br/><hr><br/><label>Nombre (*) </label>';
                        contenido+= '<input type="text" class="form-control validate[required]" name="nombre_opcion[]" />'
                        contenido+= '<label>Monto (*) </label>'
                        contenido+= '<input type="text"   onkeyup="this.value=monto(this.value)"   class="form-control validate[required]" name="monto_opcion[]" />'
                        contenido+= '<label>Resumen (*) </label>'
                        contenido+= '<textarea class="form-control" rows="3"   name="resumen_opcion[]"></textarea>'
                    
                        contenido+= '<label>Orden</label>'
                    
                        contenido+= ' <input type="number"   onkeyup="this.value=monto(this.value)"   min="0" class="form-control validate[numeric]" name="orden_opcion[]" />'
                    
                    $("#opciones").append(contenido);
                    
                    });

                </script>


                <br/><br/>

                <label>Orden</label>
                <input type="number" min="0" class="form-control validate[numeric]" name="orden" />
                
                <label>Estado</label>
				<select class="form-control validate[required]" name="estado">
				    <option value="1">Activo</option>
				    <option value="0">Inactivo</option>
				</select>
                
        	</div>
            
			<div class="col-xs-12">
				<div class="text-left" style="margin-top:20px;">
					<a href="/invierno/slider/" class="btn btn-can">Cancelar</a>
					<button type="submit" class="btn btn-primary">Guardar</button>
                </div>
			</div>
        </div>
    </form>
</div>


<script>



function monto(string){
                    var out = '';
                    var filtro = '01234567890.';
                    for (var i=0; i<string.length; i++)
                        if (filtro.indexOf(string.charAt(i)) != -1)
                        out += string.charAt(i);
                    return out;
                }
</script>