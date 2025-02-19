﻿<div class="col-sm-10 text-left marg-fix">
  	<div class="titulo-btn">
        <h1>Trabaja con Nosotros</h1>
        <a href="/ayuda/trabaja_con_nosotros/exportar" class="btn btn-default">Exportar</a>
    </div>

   
  
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="col-xs-5">Nombre Completo</th>
				<th class="col-xs-2">Fecha</th>
				<th class="col-xs-2">Hora</th>
                <th class="text-center">Opciones</th>
            </tr>
        </thead>
        
        <tbody>
            <?php if($trabaja){ ?>
                <?php foreach($trabaja as $aux){ ?>
                    <tr> 
                        <td><?php echo $aux->nombre_completo; ?></td>
                        <td><?php echo date('d/m/Y',strtotime($aux->fecha)); ?></td>
                        <td><?php echo date('H:i',strtotime($aux->hora)); ?></td>
						<td class="text-center">
                            <a href="/ayuda/trabaja-con-nosotros/detalle/<?php echo $aux->codigo; ?>/"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
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