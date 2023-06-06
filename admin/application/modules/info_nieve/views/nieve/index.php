<div class="col-sm-10 text-left marg-fix">
  	<div class="titulo-btn">
        <h1>Nieve</h1>
    </div>
    
    <form action="#" method="post" id="form-agregar" >
        <div class="row" style="margin-top:30px; margin-bottom:30px;">
        	<div class="col-md-5">
                
            	<label>Resumen de condiciones de nieve</label>
                <input type="text" class="form-control" name="resumenCondiciones" value="<?= $nieve->resumen_condiciones_nieve ?>" />
                
                <label>Nieve caída en las últimas 24 horas</label>
                <input type="text" class="form-control" name="nieveCaida24h" value="<?= $nieve->nieve_caida_24h ?>" />
                
                <label>Nieve caída en las últimas 48 horas</label>
                <input type="text" class="form-control" name="nieveCaida48h" value="<?= $nieve->nieve_caida_48h ?>" />
                
                <label>Nieve caída en los últimos 7 días</label>
                <input type="text" class="form-control" name="nieveCaidaSieteDias" value="<?= $nieve->ultimos_siete_dias ?>" />
                
                <label>Profundidad de la base</label>
                <input type="text" class="form-control" name="profundidadBase" value="<?= $nieve->profundidad_base ?>" />

                <label>Total nieve caída en la temporada</label>
                <input type="text" class="form-control" name="totalNieveCaidaTemporada" value="<?= $nieve->nieve_acumulada ?>" />
            </div>
            
            <input type="hidden" name="codigo" value="<?php echo ($nieve)?$nieve->codigo:''; ?>" />
			<div class="col-xs-12">
				<div class="text-left" style="margin-top:20px;">
					<button type="submit" class="btn btn-primary">Guardar</button>
                </div>
			</div>
        </div>
    </form>
</div>