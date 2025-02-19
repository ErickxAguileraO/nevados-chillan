﻿<div class="col-sm-10 text-left marg-fix">
  	<div class="titulo-btn">
        <h1>Agregar Promoción</h1>
    </div>
    
    <form action="#" method="post" id="form-agregar" >
        <div class="row" style="margin-top:30px; margin-bottom:30px;">
        	<div class="col-md-5">
            	<label>Nombre (*) </label>
                <input type="text" class="form-control validate[required]" name="nombre" />
                
                <label>Descripción</label>
                <textarea class="form-control" rows="3"  id="descripcion" name="descripcion"></textarea>
                

                <label>Descuento 1 (*) </label>
                <input type="text" class="form-control" name="descuento_uno" />
                <label>Monto 1 (*) </label>
                <input type="text" class="form-control"  onkeyup="this.value=monto(this.value)" name="monto_uno" />
                <label>Resumen 1 (*) </label>
                <textarea class="form-control" rows="3"  id="resumen_1" name="resumen_1"></textarea>

                <label>Descuento 2 (*) </label>
                <input type="text" class="form-control" name="descuento_dos" />
                <label>Monto 2 (*) </label>
                <input type="text" class="form-control"  onkeyup="this.value=monto(this.value)" name="monto_dos" />
                <label>Resumen 2 (*) </label>
                <textarea class="form-control" rows="3"  id="resumen_2" name="resumen_2"></textarea>

                <label>Descuento 3 (*) </label>
                <input type="text" class="form-control" name="descuento_tres" />
                <label>Monto 3 (*) </label>
                <input type="text" class="form-control"  onkeyup="this.value=monto(this.value)" name="monto_tres" />
                <label>Resumen 3 (*) </label>
                <textarea class="form-control" rows="3"  id="resumen_3" name="resumen_3"></textarea>
                
                <label>Código (*) </label>
                <input type="text" class="form-control" name="codigo_promocion" />

                <label>Precio anterior (*) </label>
                <input type="text" class="form-control" name="precio_anterior" />

                


                <script>
                    function descuento(string){
                    var out = '';
                    var filtro = '01234567890.%';
                    for (var i=0; i<string.length; i++)
                        if (filtro.indexOf(string.charAt(i)) != -1)
                        out += string.charAt(i);
                    return out;
                }
                function monto(string){
                    var out = '';
                    var filtro = '01234567890.';
                    for (var i=0; i<string.length; i++)
                        if (filtro.indexOf(string.charAt(i)) != -1)
                        out += string.charAt(i);
                    return out;
                }
                    </script>
                <label>Adjuntar imagen banner tamaño mínimo <?php echo $this->img->recorte_ancho_1; ?>px x <?php echo $this->img->recorte_alto_1; ?>px</label>
                <div class="multi-imagen" style="margin-bottom:20px;">
                    <div style="display:none;" id="replicar-1" class="box">
            			<div class="img" style="width:<?php echo $this->img->min_ancho_1+2; ?>px; height:<?php echo $this->img->min_alto_1+2; ?>px;" ></div>
            		</div>
                    <div id="cont-imagenes-1"></div>
                    <div id="rutas-imagenes"></div>
                </div>
                
                <label>Adjuntar imagen detalle tamaño mínimo <?php echo $this->img->recorte_ancho_2; ?>px x <?php echo $this->img->recorte_alto_2; ?>px</label>
                <div class="multi-imagen" style="margin-bottom:20px;">
                    <div style="display:none;" id="replicar-2" class="box">
            			<div class="img" style="width:<?php echo $this->img->min_ancho_2+2; ?>px; height:<?php echo $this->img->min_alto_2+2; ?>px;" ></div>
            		</div>
                    <div id="cont-imagenes-2"></div>
                </div>
                
                <label>Orden</label>
                <input type="number" min="0" class="form-control validate[numeric]" name="orden" />
                
                <div class="form-group">
                    <label>Asociado a:</label>
                    <?php if($hoteles){ ?>
                        <?php foreach($hoteles as $aux){ ?>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="<?php echo $aux->codigo; ?>" name="hoteles[]" />
                                    <?php echo $aux->nombre; ?>
                                </label>
                            </div>
                        <?php } ?>
                    <?php } ?>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="1" name="invierno" />
                            Invierno
                        </label>
                        <label>
                            <input type="checkbox" value="1" name="verano" />
                            Verano
                        </label>  
                        <!--<label>
                            <input type="checkbox" value="1" name="evento" />
                            Eventos
                        </label>-->
                    </div>
                </div>

                <label>Categorías de promociones</label>
                <select class="form-control" name="evento">
                    <option value="">Seleccione categoría de promoción</option>
                    <?php foreach($eventos as $cae){ ?>
                        <option <?php #if($promocion->estado) echo 'selected'; ?>  value="<?= $cae->codigo ?>"><?= $cae->nombre ?></option>
                    <?php } ?>
                </select>
                
                <label>Estado</label>
				<select class="form-control validate[required]" name="estado">
				    <option value="1" >Activo</option>
				    <option value="0" >Inactivo</option>
				</select>
            </div>
        </div>
        
        <div class="row" style="margin-top:30px;">
            <div class="col-md-10">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="col-xs-5">Nombre Archivo</th>
            				<th class="col-xs-2">Archivo</th>
                            <th class="text-center">Opciones</th>
                        </tr>
                    </thead>
                    <tbody id="cont-archivos">
                        <tr id="archivo-base" style="display: none;">
                            <td><input type="text" class="form-control" name="nombre_archivo[]" /></td>
                            <td><input type="file" name="archivos[]" /></td>
                            <td class="text-center">
    							<a class="eliminar_archivo" rel="" style="cursor:pointer;">
    								<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
    							</a>
    						</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="nombre_archivo[]" /></td>
                            <td><input type="file" name="archivos[]" /></td>
                            <td class="text-center">
                                <a class="nuevo_archivo" style="cursor:pointer;">
    								<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
    							</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
        	</div>
        </div>
        
        <div class="row" >
			<div class="col-xs-12">
				<div class="text-left" style="margin-top:20px;">
					<a href="/promociones/" class="btn btn-can">Cancelar</a>
					<button type="submit" class="btn btn-primary">Guardar</button>
                </div>
			</div>
        </div>
    </form>
</div>

<script>
    //configuracion para imagenes
	var id = 1;
	var urlDelete = '/promociones/eliminar-imagen/';
    var urlCargar = '/promociones/cargar-imagen/';
    var urlCortar = '/promociones/cortar-imagen/';
    var galeria = false; 
    
    var cargar = [];
    cargar.push(1);
    cargar.push(2);
    cargar_imagen(cargar);
</script> 

<style type="text/css">
.multi-imagen .box{
	width: 100%;
}
</style>