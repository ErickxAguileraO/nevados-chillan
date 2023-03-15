<?php if($popup->estado) { ?>
<div id="txt-pop" class="overlay-pop-up">
  <div class="center-pop-up">
    <div class="contenido-pop-up">
      <div class="background-pop-up">
      <button type="button" class="txt-close">Cerrar</button>
        <h2 style="text-align:center; padding-bottom: 10px;"><?=$popup->titulo?></h2>
        <div class="editable">
        <p style="text-align:center; padding-bottom: 10px;"><?=$popup->descripcion?></p>
      </div>
      <?php if( !empty($popup->link) ){ ?>
      <p style="text-align:center; padding-bottom: 10px;"><img style="float: none; margin-bottom: -2px;" src="/imagenes/template/arrow.png" class="arrow"><a href="<?=$popup->link?>" target="_blank">Ver más información</a></p>
      <?php } ?>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
	$('.overlay-pop-up').click(function () {
		$("#txt-pop").fadeOut(400);
	});	
});
</script>
<?php } ?>
<!-- inicio Slider -->
<div class="flexslider">
  <?php if(count($sliders)>0){ ?>
  <ul class="slides">
    <?php foreach($sliders as $item): ?>
    <li style="background: url(<?=URL_ADMINISTRACION.$item->imagen_adjunta?>) no-repeat;">
      <div class="center">
        <?php if($item->url_video){ ?>
        <div class="texto-slider float-left">
          <?php if($item->link){ ?>
          <a href="<?=$item->link?>" title="<?=$item->titulo?>">
          <?php }?>
          <span>
          <?=$item->antetitulo?>
          </span>
          <?php if($item->link){ ?>
          </a>
          <?php }?>
          <h2><?=$item->titulo?></h2>
          <p><?=$item->bajada?></p>
        </div>
        <div class="video-slider float-right">
          <iframe width="100%" height="300px" src="<?=str_replace('watch?v=','embed/',$item->url_video)?>" frameborder="0" allowfullscreen></iframe>
        </div>
        <?php }else{ ?>
        <div class="full-texto-slider float-left">
          <?php if($item->link){ ?>
          <a href="<?=$item->link?>" title="<?=$item->titulo?>">
          <?php }?>
          <span><?=$item->antetitulo?></span>
          <?php if($item->link){ ?>
          </a>
          <?php }?>
          <h2><?=$item->titulo?></h2>
          <p><?=$item->bajada?></p>
        </div>
        <?php } ?>
      </div>
    </li>
    <?php endforeach; ?>
  </ul>
  <?php }?>
</div>
<!-- Fin Slider -->

<?php /*?><div class="center reserva wow bounceIn">

</div><?php */?>
<div class="contenedor cont-seccion01"> 
  <!-- Inicio primer Acceso Directo -->
  <?php if(count($accesosDirectos)>0){ ?>
  <div class="wow fadeInLeft">
    <figure class="effect-sadie" style="background-image: url(<?=URL_ADMINISTRACION.$accesosDirectos[0]->imagen_adjunta?>) !important; height: 565px; position: relative; background-size: cover;">
      <figcaption>
        <div class="block-bottom">
          <h3><a href="<?=$accesosDirectos[0]->link?>">
            <?=$accesosDirectos[0]->titulo?>
            </a></h3>
          <p><?=$accesosDirectos[0]->resumen?><br />
          <?php /*          
          <br />
          <span><img src="/imagenes/template/arrow.png" class="arrow" /><a href="<?=$accesosDirectos[0]->link?>">Más Información</a></span></p><?php */?>
        </div>
      </figcaption>
    </figure>
  </div>
  <?php } ?>
  <!-- Fin Primer Acceso Directo --> 
  
  <!-- Inicio Calendario -->
  <div class="calendario wow fadeInRight">
    <?php /*?><h2>Calendario de Actividades</h2><?php */?>
    <?php if(count($calendarios)>0){

      foreach($calendarios as $item): ?>
    <div class="actividad-calendario">
      <div class="fecha">
        <div class="icono-calendario"><span>
          <?php $dia = explode("-",$item->fecha_inicio); echo $dia[2];?>
          </span> </div>
        <span>
        <?=mes_corto($item->fecha_inicio,1,false)?>
        </span> </div>
      <div class="Datos">
        <h3><a href="calendario/<?=$item->codigo?>-<?=$item->url?>">
          <?=$item->titulo?>
          </a></h3>
        <span><img src="/imagenes/template/reloj-icono.png" />Del
        <?=fecha_corta($item->fecha_inicio,1)?>
        a las
        <?=extrae_hora($item->hora_inicio)?>
        al
        <?=fecha_corta($item->fecha_termino,1)?>
        a las
        <?=extrae_hora($item->hora_termino,'')?>
        </span>
        <p>
          <?=$item->resumen?>
        </p>
        <span><img src="/imagenes/template/marker-icono.png" />
        <?=$item->lugar?>
        </span> </div>
    </div>
    <?php endforeach; ?>
    <span class="more float-left"><img src="/imagenes/template/arrow.png" class="arrow" /><a href="calendario">Ver todas las actividades</a></span>
    <?php }else echo "<p>No hay actividades</p>"; ?>
  </div>
  <!-- Fin Calendario -->
  
  <div class="clear"></div>
</div>
<div class="contenedor cont-secciones"> 
  
  <!-- inicio accesos director 4 -->
  <?php if(count($accesosDirectos)>1){ $i=0;
    foreach($accesosDirectos as $item):
      if($i>0){ ?>
  <div class="wow fadeInLeft">
    <figure class="effect-sadie" style="background-image: url(<?=URL_ADMINISTRACION.$item->imagen_adjunta_2?>) !important; height: 320px; position: relative; background-size:cover;">
      <figcaption>
        <div class="block-bottom">
          <h2><a href="<?=$item->link?>">
            <?=$item->titulo?>
            </a></h2>
          <?php /*?><p><?=$item->resumen?><br />
          <br />
          <span><img src="/imagenes/template/arrow.png" class="arrow" /><a href="<?=$item->link?>">Más Información</a></span></p><?php */?>
        </div>
      </figcaption>
    </figure>
  </div>
  <?php }

  $i++;

endforeach;

} ?>
  
  <!-- Fin accesos director 4 -->
  
</div>

<!-- Inicio Noticias -->
<?php if(count($noticias)>0){ ?>
<div class="center noticias">
  <h2 class="text-center text-70" style="padding-top:40px;">Noticias</h2>
  <?php /*?><p>Mantente al día con las últimas informaciones de nuestro centro.</p><?php */?>
  <div class="carrusel responsive">
    <?php $i = 0; foreach($noticias as $item): ?>
    <div>
      <article>
        <figure> <a href="/noticias/<?=str_replace("-","/",$item->fecha_publicacion)?>/<?=$item->url?>"><img src="<?=URL_ADMINISTRACION.$item->noticias_imagenes[0]->ruta_interna?>" width="180" /></a></figure>
        <div class="resumen">
        <div class="table-block">
        <div class="block-bottom">
          <time>
            <?=invierte_fecha($item->fecha_publicacion,'/')?>
          </time>
          <h3><a href="/noticias/<?=str_replace("-","/",$item->fecha_publicacion)?>/<?=$item->url?>">
            <?=$item->titulo?>
            </a></h3>
          <p>
            <?=$item->resumen?>
          </p>
          <?php /*?><span><a href="/noticias/<?=str_replace("-","/",$item->fecha_publicacion)?>/<?=$item->url?>">Más Información</a></span><?php */?>
          </div>
        </div>
        </div>
      </article>
    </div>
    <?php $i++; endforeach; ?>
  </div>
  <div style=" overflow:hidden;">
  <span class="float-right"><img src="/imagenes/template/arrow.png" class="arrow" /><a href="/noticias/">Ver todas las noticias</a></span>
  </div>
  <?php } ?>
</div>
<!-- Fin Noticias --> 

<!-- fin contenedor -->
<?php /*?><style>
.wow:first-child {
	visibility: hidden;
}
</style><?php */?>
