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
    </div>
  </div>
</div>
<div class="clear"></div>
<!-- inicio secciones -->
<?php if(count($secciones)>0){ ?>
<?php foreach($secciones as $item): ?>

<!--Posicion foto derecha-->
<?php if($item->posicion == 0) { ?>
<?php if($item->tipo_de_imagen==2){ ?>
<div class="center cont2 wow fadeInLeft" id="<?=$item->url?>"><!-- imagen chica -->
  <div class="texto float-right">
    <h2 style="color:#033e6c;"><?=$item->titulo?></h2>
    <p style="color:#004f8d;"><?=$item->bajada?></p>
    <!-- si es un enlace -->
    <?php if($item->link){ ?>
    <span><a href="<?=$item->link?>"> <img src="/imagenes/template/arrow.png" class="arrow" />
    <?=$item->nombre_link?></a></span>
    <?php } ?>
    <?php if($item->link_2){ ?>
    <span><a href="<?=$item->link_2?>"> <img src="/imagenes/template/arrow.png" class="arrow" />
    <?=$item->nombre_link_2?></a></span>
    <?php } ?>
    <?php if($item->link_3){ ?>
    <span><a href="<?=$item->link_3?>"> <img src="/imagenes/template/arrow.png" class="arrow" />
    <?=$item->nombre_link_3?></a></span>
    <?php } ?>
    <!-- si es imagen -->
    <?php if($item->imagen_adjunta){ ?>
    <span><a class="venobox" data-gall="myGallery" data-title="Titulo para imagen" href="<?=URL_ADMINISTRACION.$item->imagen_adjunta?>">
    <?=$item->nombre_imagen_adjunta?></a></span>
    <?php } ?>
    <?php if($item->imagen_adjunta2){ ?>
    <span><a class="venobox" data-gall="myGallery" data-title="Titulo para imagen" href="<?=URL_ADMINISTRACION.$item->imagen_adjunta2?>">
    <?=$item->nombre_imagen_adjunta2?></a></span>
    <?php } ?>
    <?php if($item->imagen_adjunta3){ ?>
    <span><a class="venobox" data-gall="myGallery" data-title="Titulo para imagen" href="<?=URL_ADMINISTRACION.$item->imagen_adjunta3?>">
    <?=$item->nombre_imagen_adjunta3?></a></span>
    <?php } ?>
  </div>
  <?php if($item->embed_video == "") { ?>
  <?php if(count($item->galeria)>1){ ?>
  <div class="slider float-left wow fadeInRight">
    <div class="slider-habitacion">
      <ul class="slides">
        <?php foreach($item->galeria as $imagen): ?>
        <li> <img src="<?=URL_ADMINISTRACION.$imagen->ruta_interna?>" /> </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
  <?php }else{ ?>
  <div class="slider float-left wow fadeInLeft"> <img src="<?=URL_ADMINISTRACION.$item->galeria[0]->ruta_interna?>" /> </div>
  <?php } ?>
  <?php } else { ?>
  <div class="video-slider float-left"> <?php echo html_entity_decode($item->embed_video);?> </div>
  <?php } ?>
  <div class="clear"></div>
</div>
<?php }else{ ?>
<div class="seccion-fondo ski-seccion" style="background-image: url(<?=URL_ADMINISTRACION.$item->imagen_adjunta_fondo?>) !important;" id="<?=$item->url?>"><!-- imagen grande -->
  <div class="center">
    <div class="texto wow fadeInLeft">
      <h2><?=$item->titulo?></h2>
      <p><?=$item->bajada?></p>
      <!-- si es un enlace -->
      <?php if($item->link){ ?>
      <span><a  href="<?=$item->link?>"> <img src="/imagenes/template/arrow.png" class="arrow" />
      <?=$item->nombre_link?>
      </a></span>
      <?php } ?>
      <?php if($item->link_2){ ?>
      <span><a  href="<?=$item->link_2?>"> <img src="/imagenes/template/arrow.png" class="arrow" />
      <?=$item->nombre_link_2?>
      </a></span>
      <?php } ?>
      <?php if($item->link_3){ ?>
      <span><a  href="<?=$item->link_3?>"> <img src="/imagenes/template/arrow.png" class="arrow" />
      <?=$item->nombre_link_3?>
      </a></span>
      <?php } ?>
      <!-- si es imagen -->
      <?php if($item->imagen_adjunta){ ?>
      <span><a class="venobox" data-gall="myGallery" data-title="Titulo para imagen" href="<?=URL_ADMINISTRACION.$item->imagen_adjunta?>">
      <?=$item->nombre_imagen_adjunta?>
      </a></span>
      <?php } ?>
      <?php if($item->imagen_adjunta2){ ?>
      <span><a class="venobox" data-gall="myGallery" data-title="Titulo para imagen" href="<?=URL_ADMINISTRACION.$item->imagen_adjunta2?>">
      <?=$item->nombre_imagen_adjunta2?>
      </a></span>
      <?php } ?>
      <?php if($item->imagen_adjunta3){ ?>
      <span><a class="venobox" data-gall="myGallery" data-title="Titulo para imagen" href="<?=URL_ADMINISTRACION.$item->imagen_adjunta3?>">
      <?=$item->nombre_imagen_adjunta3?>
      </a></span>
      <?php } ?>
    </div>
  </div>
  <div class="clear"></div>
</div>
<?php } ?>
<?php } else { ?>

<!--POSICION FOTO IZQUIERDA-->
<?php if($item->tipo_de_imagen==2){ ?>
<div class="center cont2 wow fadeInLeft" id="<?=$item->url?>"><!-- imagen chica -->
  <div class="texto">
    <h2 style="color:#033e6c;"><?=$item->titulo?></h2>
    <p  style="color:#004f8d;"><?=$item->bajada?></p>
    <!-- si es un enlace -->
    <?php if($item->link){ ?>
    <span><a href="<?=$item->link?>"> <img src="/imagenes/template/arrow.png" class="arrow" />
    <?=$item->nombre_link?>
    </a></span>
    <?php } ?>
    <?php if($item->link_2){ ?>
    <span><a href="<?=$item->link_2?>"> <img src="/imagenes/template/arrow.png" class="arrow" />
    <?=$item->nombre_link_2?>
    </a></span>
    <?php } ?>
    <?php if($item->link_3){ ?>
    <span><a href="<?=$item->link_3?>"> <img src="/imagenes/template/arrow.png" class="arrow" />
    <?=$item->nombre_link_3?>
    </a></span>
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
  <?php if($item->embed_video == "") { ?>
  <?php if(count($item->galeria)>1){ ?>
  <div class="slider float-right wow fadeInRight">
    <div class="slider-habitacion">
      <ul class="slides">
        <?php foreach($item->galeria as $imagen): ?>
        <li> <img src="<?=URL_ADMINISTRACION.$imagen->ruta_interna?>" /> </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
  <?php }else{ ?>
  <img src="<?=URL_ADMINISTRACION.$item->galeria[0]->ruta_interna?>" class="wow fadeInRight" />
  <?php } ?>
  <?php } else { ?>
  <div class="video-slider float-right"> <?php echo html_entity_decode($item->embed_video);?>  </div>
  <?php } ?>
  <div class="clear"></div>
</div>
<?php }else{ ?>
<div class="seccion-fondo ski-seccion" style="background-image: url(<?=URL_ADMINISTRACION.$item->imagen_adjunta_fondo?>) !important;" id="<?=$item->url?>"><!-- imagen grande -->
  <div class="center">
    <div class="texto wow fadeInLeft">
      <h2><?=$item->titulo?></h2>
      <p><?=$item->bajada?></p>
      <!-- si es un enlace -->
      <?php if($item->link){ ?>
      <span><a  href="<?=$item->link?>"> <img src="/imagenes/template/arrow.png" class="arrow" />
      <?=$item->nombre_link?></a></span>
      <?php } ?>
      <?php if($item->link_2){ ?>
      <span><a  href="<?=$item->link_2?>"> <img src="/imagenes/template/arrow.png" class="arrow" />
      <?=$item->nombre_link_2?></a></span>
      <?php } ?>
      <?php if($item->link_3){ ?>
      <span><a  href="<?=$item->link_3?>"> <img src="/imagenes/template/arrow.png" class="arrow" />
      <?=$item->nombre_link_3?></a></span>
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
<?php } ?>
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


         
	$('.slider-habitacion').flexslider({
		animation: "fade",
		slideshowSpeed: 5000,
		directionNav: false,
	});

});
</script>
