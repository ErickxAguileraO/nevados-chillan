<div class="col-sm-10 text-left marg-fix">
  	<div class="titulo-btn">
        <h1>Landing Pages</h1>
    </div>
    
  	<div class="subtitulo-btn">
    	<h2>&nbsp;</h2>
        <a class="btn btn-default" href="/landing_pages/agregar/">Agregar Landing Pages</a>
    </div>
  
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="col-xs-5">Codigo</th>
				<th class="col-xs-2">Nombre</th>
				<th class="col-xs-2">Formulario contacto</th>
                <th colspan="2" class="text-center">Opciones</th>
            </tr>
        </thead>
        
        <tbody>
            <?php if($landings){ ?>
                <?php foreach($landings as $aux){ ?>
                    <tr> 
                        <td><?php echo $aux->codigo; ?></td>
                        <td><?php echo $aux->nombre; ?></td>
                        <td><?php echo ($aux->formulario_contacto == 1)?'Activo':'Inactivo'; ?></td>
						<td class="text-center">
                            <a href="/landing_pages/editar/<?php echo $aux->codigo; ?>/"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                        </td>
                        <td class="text-center">
							<a rel="<?php echo $aux->codigo; ?>" class="eliminar" style="cursor:pointer;">
								<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
							</a>
						</td>
                    </tr>
                <?php } ?>
            <?php } else{ ?>
                <tr>
                    <td colspan="4" style="text-align: center;"><i>No hay registros</i></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php echo $pagination; ?>
</div>