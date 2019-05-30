<?php /*?><!-- inicio Slider -->
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
        <span><?=$item->antetitulo?></span>
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
<div class="clear"></div><?php */?>
<div class="center">
  <?=$this->layout->getNav();?>
  <div class="estado-camino">
    <h2>Estado del camino</h2> <a class="btn-exportar" href="/invierno/createPdf">Exportar a pdf</a>
    <div class="col1">
      <ul>
        <li>Estado del camino: <br />
          <strong><?php if($estadoCamino->estado_de_camino==1) echo "Abierto";else echo "Cerrado";?></strong></li>
        <li>Transito: <br />
          <strong><?=$estadoCamino->transito?></strong></li>
        <li>Porte de cadenas: <br />
          <strong><?=$estadoCamino->porte_de_cadenas?></strong></li>
        <li>Uso de cadenas: <br />
          <strong><?=$estadoCamino->uso_de_cadenas?></strong></li>
      </ul>
    </div>
    <div class="col2">
      <h3>Observaciones</h3>
      <?=$estadoCamino->observaciones?>
      <h3>Horarios de subida y bajada</h3>
      <?=$estadoCamino->horarios?>
    </div>
    <div class="col3">
<link href="//es.snow-forecast.com/stylesheets/feed.css" media="screen" rel="stylesheet" type="text/css" /><div id="wf-weatherfeed"><iframe style="overflow:hidden;border:none;" allowtransparency="true" height="272" width="469" src="//es.snow-forecast.com/resorts/Chillan/forecasts/feed/mid/m" scrolling="no" frameborder="0" marginwidth="0" marginheight="0"><p>Su navegador no da soporte a iframes</p></iframe><div id="wf-link"><a class="no-background" href="https://www.snow-forecast.com/"><img alt="Snow Forecast" src="//es.snow-forecast.com/images/feed/snowlogo-150.png"/></a><p id="cmt">Panorama detallado del Pronóstico de Nieve para <a style="color:#FFF;" href="https://es.snow-forecast.com/resorts/Chillan/6day/mid">Nevados de Chillan</a> en:<br /><a href="https://es.snow-forecast.com/" style=" color:#FFF;"><strong>snow-forecast.com</strong></a></p><div style="clear: both;"></div></div></div>    </div>
    <div class="clear"></div>
    <hr />
  </div>
  <div class="center">
  <div class="nieve">
    <h2>Nieve</h2>
    <ul>
      <li><img src="/imagenes/template/nieve-icono.png" />Nieve acumulada: <strong><?=$nieve->nieve_acumulada?></strong></li>
      <li><img src="/imagenes/template/nieve-icono.png" />Nieve Caida en Las Ultimas 24 Horas: <strong><?=$nieve->nieve_caida_24h?></strong></li>
      <!--<li><img src="/imagenes/template/nieve-icono.png" />Nieve caída en las últimas 48 horas: <strong><?#=$nieve->nieve_caida_48h?></strong></li>-->
      <!--<li><img src="/imagenes/template/nieve-icono.png" />Nieve Pisada en Canchas: <strong><?#=$nieve->nieve_pisada_canchas?></strong></li>-->
      <li><img src="/imagenes/template/nieve-icono.png" />Calidad de la nieve: <strong><?=$nieve->calidad_nieve?></strong></li>
      <li><img src="/imagenes/template/viento-icono.png" />Velocidad del viento: <strong><?=$nieve->velocidad_viento?></strong></li>
    </ul>
  </div>
  <hr />
  <div class="pistas">
    <h2>Estado de pistas</h2>
    <div class="col1">
      <h3>Dificultad</h3>
      <ul>
        <li><img src="/imagenes/template/principiante.png" />Principiante</li>
        <li><img src="/imagenes/template/intermedio.png" />Intermedio</li>
        <li><img src="/imagenes/template/avanzado.png" />Avanzado</li>
        <li><img src="/imagenes/template/experto.png" />Experto</li>
      </ul>
      <h3>Estado</h3>
      <span><img src="/imagenes/template/verde.png" /> Abierto</span> <span><img src="/imagenes/template/rojo.png"  /> Cerrado</span> </div>
      <div class="contenedor_col2">
      <?php foreach($estadoPistas as $item): ?>
      <div class="col2">
      <h3><?=$item->nombre?></h3>
      <span>Dificultad:
        <?php
        if($item->dificultad == 'Principiante')
          echo '<img src="/imagenes/template/principiante.png" />';
        if($item->dificultad == 'Intermedio')
          echo '<img src="/imagenes/template/intermedio.png" />';
        if($item->dificultad == 'Avanzado')
          echo '<img src="/imagenes/template/avanzado.png" />';
        if($item->dificultad == 'Experto')
          echo '<img src="/imagenes/template/experto.png" />';
        ?>
        </span><br />
      <span>Estado pista:
        <?php
        if($item->estado_pista == 1)
          echo '<img src="/imagenes/template/verde.png" />';
        else {
          echo '<img src="/imagenes/template/rojo.png"  />';
        }?>

      </span>
      </div>
    <?php endforeach; ?>
      </div>
    <div class="clear"></div>
  </div>
  <hr />
  <div class="pistas">
    <h2>Andariveles</h2>
    <div class="col1">
      <h3>Estado</h3>
      <span><img src="/imagenes/template/verde.png" /> Abierto</span> <span><img src="/imagenes/template/rojo.png"  /> Cerrado</span> </div>

      <div class="contenedor_col2">

      <?php foreach($andariveles as $item): ?>
        <div class="col2">
      <h3><?=$item->nombre?></h3>
      <span>Estado andarivel:
        <?php
        if($item->estado_andarivel==1)
          echo '<img src="/imagenes/template/verde.png" />';
        else {
          echo '<img src="/imagenes/template/rojo.png"  />';
        }
        ?>
        </span>
      </div>
    <?php endforeach; ?>
    </div>
    <div class="clear"></div>
  </div>
</div>
<?php /*?><script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "fade",
		slideshowSpeed: 5000,
		directionNav: false,
      });
 });
</script><?php */?>

<style type="text/css">
#header{ position:relative !important;}
</style>


