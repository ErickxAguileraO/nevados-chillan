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

    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="col-xs-11">Nombre</th>
                <th colspan="2" class="text-center">Opciones</th>
            </tr>
        </thead>
        
        <tbody>
            <?php if ($mapas) { ?>
                <?php foreach($mapas as $mapa){ ?>
                    <tr> 
                        <td><?= $mapa->nombre; ?></td>
						<td class="text-center">
                            <a href="invierno/mapa-pistas/editar/<?= $mapa->codigo; ?>/">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            </a>
                        </td>
                        <td class="text-center">
							<a rel="<?= $mapa->codigo; ?>" class="eliminar" style="cursor:pointer;">
								<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
							</a>
						</td>
                    </tr>
                <?php } ?>
            <?php } else{ ?>
                <tr>
                    <td colspan="4" style="text-align: center;"><i>No hay mapas registrados.</i></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <?= $pagination; ?>
</div>