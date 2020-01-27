<div class="col-sm-10 text-left marg-fix">
  	<div class="titulo-btn">
        <h1>Editar programa</h1>
    </div>
    
    <form action="#" method="post" id="form-editar" >
        <div class="row" style="margin-top:30px; margin-bottom:30px;">
        	<div class="col-md-5">
            <label>Título (*) </label>

            <input type="hidden" class="form-control validate[required]" id="codigo" name="codigo" value="<?=$programa->codigo?>"/>


                <input type="text" class="form-control validate[required]" name="titulo" value="<?=$programa->titulo?>"/>
                
                
                <label>Bajada 1</label>
                <textarea class="form-control" rows="3"  id="bajada_uno" name="bajada_uno"><?=$programa->bajada_uno?></textarea>

                <label>Bajada 2</label>
                <textarea class="form-control" rows="3"  id="bajada_dos" name="bajada_dos"><?=$programa->bajada_dos?></textarea>
                
                <br/>
             
                <h3>Opciones</h3>




                <?php
                
                if($opciones){
                    foreach($opciones as $key => $op) {
                        if($key!=''){
                            echo ' <br><br/>';
                        }
                ?>

                <div id="div-<?=$op->codigo?>">
                <input type="hidden" name="editar_codigo[]" value="<?=$op->codigo?>"/>
                <label>Nombre (*) </label>
                <input type="text"  class="form-control validate[required]" name="editar_nombre[]" value="<?=$op->nombre?>"/>
                <label>Monto (*) </label>
                <input type="text"  onkeyup="this.value=monto(this.value)"   class="form-control validate[required]" name="editar_monto[]" value="<?=$op->monto?>"/>
                <label>Resumen (*) </label>
                <textarea   class="form-control" name="editar_resumen[]" rows="3" ><?=$op->resumen?></textarea>
                <label>Orden</label>
                <input type="number"  onkeyup="this.value=monto(this.value)"  name="editar_orden[]" min="0" class="form-control validate[numeric]"  value="<?=$op->orden?>"/>
                <button rel="<?=$op->codigo?>" class="btn btn-primary eliminar">Eliminar opcion</button>
                </div>


                <?php } }else{ ?>


                <label>Nombre (*) </label>
                <input type="text" class="form-control validate[required]" name="nombre_opcion[]" />
                <label>Monto (*) </label>
                <input type="text" class="form-control validate[required]" name="monto_opcion[]" />
                <label>Resumen (*) </label>
                <textarea class="form-control" rows="3"   name="resumen_opcion[]"></textarea>
                <label>Orden</label>
                <input type="number" min="0" class="form-control validate[numeric]" name="orden_opcion[]" />




                <?php } ?>












                <div id="opciones"></div>

                <a style="cursor:pointer;" id="agregar">Agregar nueva opción [+]</a>









                <script>
                    $("#agregar").click(function(){
                    var contenido = '<br/><br/><label>Nombre (*) </label>';
                        contenido+= '<input type="text" class="form-control validate[required]" name="nombre_opcion[]" />'
                        contenido+= '<label>Monto (*) </label>'
                        contenido+= '<input type="text"  onkeyup="this.value=monto(this.value)"  class="form-control validate[required]" name="monto_opcion[]" />'
                        contenido+= '<label>Resumen (*) </label>'
                        contenido+= '<textarea class="form-control" rows="3"   name="resumen_opcion[]"></textarea>'
                    
                        contenido+= '<label>Orden</label>'
                    
                        contenido+= ' <input type="number"  onkeyup="this.value=monto(this.value)" min="0" class="form-control validate[numeric]" name="orden_opcion[]" />'
                    
                    $("#opciones").append(contenido);
                    
                    });

                </script>


                <br/><br/>

                <label>Orden</label>
                <input type="number" min="0" class="form-control validate[numeric]" name="orden" value="<?=$programa->orden?>"/>
                
                <label>Estado</label>
				<select class="form-control validate[required]" name="estado">
				    <option <?=$programa->estado == 1 ? "selected" : "" ?>  value="1">Activo</option>
				    <option  <?=$programa->estado == 1 ? "selected" : "" ?>  value="0">Inactivo</option>
				</select>
            </div>





            <input type="hidden" id="codigo" value="<?php echo $slider->codigo; ?>" />
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
    //configuracion para imagenes
	var id = 1;
	var urlDelete = '/invierno/slider/eliminar-imagen/';
    var urlCargar = '/invierno/slider/cargar-imagen/';
    var urlCortar = '/invierno/slider/cortar-imagen/';
    var galeria = false;
    
    <?php if(!$slider->imagen_adjunta){ ?>
	   cargar_imagen();
    <?php } ?>
</script> 

<style type="text/css">
.multi-imagen .box{
	width: 100%;
}
</style>



<script>
$(function(){
    
    $(".eliminar").click(function(e){
		
		e.preventDefault();
		var codigo = $(this).attr('rel');
        
		noty({
		layout: 'topCenter',
		fondo: '<div id="fondo" style=" position: fixed; top:0; height: 100%; width:100%; background-color: rgba(60, 56, 56, 0.38); display:block;z-index: 9999;"></div>',
		  text: 'Estas seguro que desea eliminar este registro?',
		  buttons: [
			{addClass: 'btn btn-primary', text: 'Aceptar', onClick: function($noty) {
				$noty.close();
				$(window).unbind('beforeunload');
				
				noty({
					text: 'El registro está siendo eliminado. Por favor, espere un momento.',
					layout: 'topCenter',
					type: 'alert',
					killer:true,
					closeWith: [],
					template: '<div class="noty_message"><img src="/imagenes/sitio/ajax-loader.gif">&nbsp;&nbsp;<span class="noty_text"></span><div class="noty_close"></div></div>',
					fondo: '<div id="fondo" style=" position: fixed; top:0; height: 100%; width:100%; background-color: rgba(60, 56, 56, 0.38); display:block;z-index: 9999;"></div>'
				});
				
				$.ajax({
					type: "POST",
					data: "codigo="+codigo,
					dataType: "json",
					url: '/invierno/programas/eliminar_opcion/',
					success: function(json){
						if(json.result){
							noty({
								text: "El registro ha sido eliminado con éxito.",
								layout: 'topCenter',
                                type: 'success',
                                timeout: 2000,
								killer: true
							});

                            $("#div-"+codigo).remove();
                          
						} 
						else
						{
							var error = noty({
								text: json.msg,
								layout: 'topCenter',
								type: 'error',
								timeout: 2000
							});
						}
					}
				});
			  }
			},
			{addClass: 'btn btn-danger', text: 'Cancelar', onClick: function($noty) {
				$noty.close();
			  }
			}
		  ]
		});
		
	});
	
});
</script>

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