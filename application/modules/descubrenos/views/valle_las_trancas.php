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
<div class="contenedor">
  <div class="center">
    <?=$this->layout->getNav();?>
    <div class="intro">
        <?php echo ($introduccion) ? $introduccion->descripcion : ''; ?>
        <!--
      <p>Quienes han visitado Valle Las Trancas, lo definen como un Poblado Cordillerano y una Villa de Montaña de características originales donde sobresalen parajes únicos, construcciones arquitectónicas modernas, aire puro, ríos, senderos, sol en verano y nieve en invierno, una exuberante ﬂora y fauna nativa y un ambiente cálido y acogedor. Está ubicado a 70 kilómetros de Chillán, lo que permite a los turistas chilenos y extranjeros subir por el día a disfrutar de los atractivos de Nevados de Chillán, el mejor resort de montaña de Sudamérica ubicado
a tan sólo 10 kilómetros de Valle Las Trancas. En primavera y verano, Valle Las Trancas es una alternativa turística que congrega a los amantes de la naturaleza los que pueden admirar bosques de robles, lengas, coigues y hualles. Caminar por senderos que conducen al río Renegado, a caídas de agua, acantilados y farellones o admirar el Volcán Nevados de Chillán. Observar el vuelo de cóndores y ver brotar el bosque nativo y de ﬂores silvestres como añañucas, astromelias y orquídeas silvestres.</p>
      <p>Valle las Trancas es el campamento base para visitar otros lugares turísticos como Valle Hermoso de Nevados de Chillán, Parque Las Aguas y los baños termales de los Hoteles Nevados y Alto Nevados.</p>
      <p>Desde este poblado cordillerano hay cortas distancias a los poblados de Pinto, El Rosal, Recinto y Los Lleuques. También es la ruta para conocer atractivos como La Cueva de los Pincheira, el Salto
del Renegado, el río Diguillín, la Gruta Los Pangues o la Reserva Nacional Ñuble. En los alrededores de Valle Las Trancas se pueden encontrar otros atractivos como la Cascada del Soldado, Shangri-La o Paraíso Perdido, la Laguna del Huemul y por supuesto Nevados de Chillán.</p>
    -->
    </div>
  </div>
</div>
<div class="clear"></div>
<!-- inicio secciones -->
<?php if(count($secciones)>0){ ?>
<?php foreach($secciones as $item): ?>
  <?php if($item->tipo_de_imagen==2){ ?>
<div class="center cont2 wow fadeInLeft" id="<?=$item->url?>"><!-- imagen chica -->
  <div class="texto">
    <h2><?=$item->titulo?></h2>
    <p><?=nl2br($item->bajada)?></p>
    <!-- si es un enlace -->
    <?php if($item->link){ ?>
    <span><a href="<?=$item->link?>"> <img src="../../imagenes/template/arrow.png" class="arrow" /><?=$item->nombre_link?></a></span>
    <?php } ?>
    <?php if($item->link_2){ ?>
    <span><a href="<?=$item->link_2?>"> <img src="../../imagenes/template/arrow.png" class="arrow" /><?=$item->nombre_link_2?></a></span>
    <?php } ?>
    <?php if($item->link_3){ ?>
    <span><a href="<?=$item->link_3?>"> <img src="../../imagenes/template/arrow.png" class="arrow" /><?=$item->nombre_link_3?></a></span>
    <?php } ?>
    <!-- si es imagen -->
    <?php if($item->imagen_adjunta){ ?>
    <span><a class="venobox" data-gall="myGallery" data-title="Titulo para imagen" href="<?=URL_ADMINISTRACION.$item->imagen_adjunta?>"><?=$item->nombre_imagen_adjunta?></a></span>
    <?php } ?>
    <?php if($item->imagen_adjunta2){ ?>
    <span><a class="venobox" data-gall="myGallery" data-title="Titulo para imagen" href="<?=URL_ADMINISTRACION.$item->imagen_adjunta2?>"><?=$item->nombre_imagen_adjunta2?></a></span>
    <?php } ?>
    <?php if($item->imagen_adjunta3){ ?>
    <span><a class="venobox" data-gall="myGallery" data-title="Titulo para imagen" href="<?=URL_ADMINISTRACION.$item->imagen_adjunta3?>"><?=$item->nombre_imagen_adjunta3?></a></span>
    <?php } ?>
  </div>
  <img src="<?=URL_ADMINISTRACION.$item->imagen_adjunta_lateral?>" class="wow fadeInRight" />
  <div class="clear"></div>
</div>
<?php }else{ ?>
<div class="seccion-fondo ski-seccion" id="<?=$item->url?>" style="background-image: url(<?=URL_ADMINISTRACION.$item->imagen_adjunta_fondo?>) !important;"><!-- imagen grande -->
  <div class="center">
    <div class="texto wow fadeInLeft">
      <h2><?=$item->titulo?></h2>
      <p><?=nl2br($item->bajada)?></p>
      <!-- si es un enlace -->
      <?php if($item->link){ ?>
      <span><a href="<?=$item->link?>"> <img src="../../imagenes/template/arrow.png" class="arrow" /><?=$item->nombre_link?></a></span>
      <?php } ?>
      <?php if($item->link_2){ ?>
      <span><a href="<?=$item->link_2?>"> <img src="../../imagenes/template/arrow.png" class="arrow" /><?=$item->nombre_link_2?></a></span>
      <?php } ?>
      <?php if($item->link_3){ ?>
      <span><a href="<?=$item->link_3?>"> <img src="../../imagenes/template/arrow.png" class="arrow" /><?=$item->nombre_link_3?></a></span>
      <?php } ?>
      <!-- si es imagen -->
      <?php if($item->imagen_adjunta){ ?>
      <span><a class="venobox" data-gall="myGallery" data-title="Titulo para imagen" href="<?=URL_ADMINISTRACION.$item->imagen_adjunta?>"><?=$item->nombre_imagen_adjunta?></a></span>
      <?php } ?>
      <?php if($item->imagen_adjunta2){ ?>
      <span><a class="venobox" data-gall="myGallery" data-title="Titulo para imagen" href="<?=URL_ADMINISTRACION.$item->imagen_adjunta2?>"><?=$item->nombre_imagen_adjunta2?></a></span>
      <?php } ?>
      <?php if($item->imagen_adjunta3){ ?>
      <span><a class="venobox" data-gall="myGallery" data-title="Titulo para imagen" href="<?=URL_ADMINISTRACION.$item->imagen_adjunta3?>"><?=$item->nombre_imagen_adjunta3?></a></span>
      <?php } ?>
    </div>
  </div>
  <div class="clear"></div>
</div>
<?php } ?>
<?php endforeach; ?>
<?php }?>
<!-- Fin Secciones -->

<script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "fade",
		slideshowSpeed: 5000,
		directionNav: false,
      });
});
</script>
