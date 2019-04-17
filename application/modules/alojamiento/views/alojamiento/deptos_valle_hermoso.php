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
          <p><?=nl2br($item->bajada)?></p>
        </div>
      <?php } ?>
      </div>
    </li>
  <?php endforeach; ?>
  </ul>
<?php }?>
</div>
<!-- Fin Slider -->

<div class="center valle-hermoso-act">
  <?=$this->layout->getNav();?>
  <!-- Inicio Actividades -->
  <?php if(count($actividades)>0){ ?>
  <h2>Actividades</h2>
  <div class="grid10 float-left wow fadeInUp">
    <figure class="effect-sadie" style="background-image: url(<?=URL_ADMINISTRACION.$actividades[0]->imagen_adjunta_2?>) !important;">
      <figcaption>
        <h2><?=$actividades[0]->titulo?></h2>
        <p><?=nl2br($actividades[0]->bajada)?><br />
          <br />
          <span><img src="../../imagenes/template/arrow.png" class="arrow" /><a href="<?=$actividades[0]->link?>"><?=$actividades[0]->nombre_link?></a></span></p>
      </figcaption>
    </figure>
  </div>
  <?php if(count($actividades)>1){ ?>
  <div class="grilla-pequena float-right last">
    <div class="grid10 float-left border-right wow fadeInDown">
      <figure class="effect-sadie" style="background-image: url(<?=URL_ADMINISTRACION.$actividades[1]->imagen_adjunta?>) !important;">
        <figcaption>
          <h2><?=$actividades[1]->titulo?></h2>
          <p><?=nl2br($actividades[1]->bajada)?><br />
            <br />
            <span><img src="../../imagenes/template/arrow.png" class="arrow" /><a href="<?=$actividades[1]->link?>"><?=$actividades[1]->nombre_link?></a></span></p>
        </figcaption>
      </figure>
    </div>
    <?php } ?>
    <?php if(count($actividades)>2){ ?>
    <div class="grid10 float-left ultima wow fadeInUp">
      <figure class="effect-sadie" style="background-image: url(<?=URL_ADMINISTRACION.$actividades[2]->imagen_adjunta?>) !important;">
        <figcaption>
          <h2><?=$actividades[2]->titulo?></h2>
          <p><?=nl2br($actividades[2]->bajada)?><br />
            <br />
            <span><img src="../../imagenes/template/arrow.png" class="arrow" /><a href="<?=$actividades[2]->link?>"><?=$actividades[2]->nombre_link?></a></span></p>
        </figcaption>
      </figure>
    </div>
    <?php } ?>
  </div>
  <div class="clear"></div>
  <?php } ?>
  <!-- Fin Actividades -->
  <div class="intro dptos-valle">
    <h2>conoce los espectaculares departamentos de valle hermoso</h2>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,</p>
  </div>

</div>
<div class="clear"></div>

<!-- inicio Habitaciones -->
<?php foreach($habitaciones as $item): ?>
  <?php if($item->alineacion_galeria == 1){ ?>
<div class="slider float-left wow fadeInLeft">
  <?php if(count($item->imagenes)>0){ ?>
  <div class="slider-habitacion">
    <ul class="slides">
      <?php foreach($item->imagenes as $imagen): ?>
      <li> <img src="<?=URL_ADMINISTRACION.$imagen->ruta_grande?>" /> </li>
    <?php endforeach; ?>
    </ul>
  </div>
  <?php }?>
</div>
<div class="texto-habitaciones float-right wow fadeInRight">
  <div class="texto">
    <h2><?=$item->titulo?></h2>
    <?=$item->descripcion?>
     </div>
</div>
<div class="clear"></div>
<?php }else{ ?>
<div class="slider float-right wow fadeInRight">
  <?php if(count($item->imagenes)>0){ ?>
  <div class="slider-habitacion">
    <ul class="slides">
      <?php foreach($item->imagenes as $imagen): ?>
      <li> <img src="<?=URL_ADMINISTRACION.$imagen->ruta_grande?>" /> </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php }?>
</div>
<div class="texto-habitaciones float-left margin wow fadeInLeft">
  <div class="texto">
    <h2><?=$item->titulo?></h2>
    <?=$item->descripcion?>
     </div>
</div>
<div class="clear"></div>
<?php } ?>
<?php endforeach; ?>
<!-- fin habitaciones -->
<!-- inicio secciones -->
<?php if(count($secciones)>0){ ?>
<?php foreach($secciones as $item): ?>
  <?php if($item->tipo_de_imagen==2){ ?>
<div class="center cont2 wow fadeInLeft"><!-- imagen chica -->
  <div class="texto">
    <h2><?=$item->titulo?></h2>
    <!--<p class="bajada">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</strong> </p>-->
    <p><?=nl2br($item->bajada)?></p>
    <span><a name="spa-valle-hermoso" class="venobox" href="<?=$item->link?>"> <img src="../../imagenes/template/arrow.png" class="arrow" /><?=$item->nombre_link?></a></span>
  </div>
  <img src="<?=URL_ADMINISTRACION.$item->imagen_adjunta_lateral?>" class="wow fadeInRight" />
  <div class="clear"></div>
</div>
<?php }else{ ?>
<div class="seccion-fondo ski-seccion" style="background-image: url(<?=URL_ADMINISTRACION.$item->imagen_adjunta_fondo?>) !important;"><!-- imagen grande -->
  <div class="center">
    <div class="texto wow fadeInLeft">
      <h2><?=$item->titulo?></h2>
      <!--<p class="bajada">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</strong> </p>-->
      <p><?=nl2br($item->bajada)?></p>
      <span><a name="spa-valle-hermoso" class="venobox" href="<?=$item->link?>"> <img src="../../imagenes/template/arrow.png" class="arrow" /><?=$item->nombre_link?></a></span>
    </div>
  </div>
  <div class="clear"></div>
</div>
<?php } ?>
<?php endforeach; ?>
<?php }?>
<!-- Fin Secciones -->
<!-- Inicio Banners -->
<?php if(count($banners)>0){ ?>
<div class="center eventos-corporativos">
  <img src="<?=URL_ADMINISTRACION.$banners[0]->imagen_adjunta?>" class="float-left" />
  <img src="<?=URL_ADMINISTRACION.$banners[1]->imagen_adjunta?>" class="float-right" />
</div>
<?php } ?>
<!-- Fin Banners -->
<script type="text/javascript">
$(document).ready(function(){
    $('.venobox').venobox();
});
	    $(window).load(function(){
      $('.slider-habitacion').flexslider({
        animation: "slide",
		slideshowSpeed: 5000,
		directionNav: false,
      });

      $('.flexslider').flexslider({
        animation: "fade",
		slideshowSpeed: 5000,
		directionNav: false,
      });
  });

	</script>
