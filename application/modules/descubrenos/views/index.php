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
<!-- Fin Slider --><?php */?>
<div class="contenedor">
  <div class="center">
    <?=$this->layout->getNav();?>
    <div class="intro" id="hoteles">
      <h1>Descubre Nuestros Hoteles</h1>
      <p><?php echo $introduccion ?></p>
    </div>
  </div>
  <?php if(count($hoteles)>0){ ?>
  <div class="grid6 float-left border-right wow fadeInLeft">
    <figure class="effect-sadie" style="background-image: url(<?=URL_ADMINISTRACION.$hoteles[0]->imagen_adjunta?>) !important;">
      <figcaption>
      <div class="block-bottom">
        <h3><a href="<?=$hoteles[0]->link?>"><?=$hoteles[0]->titulo?></a></h3>
        <?php /*?><p><?=$hoteles[0]->bajada?><br />
          <br />
          <span><img src="../../imagenes/template/arrow.png" class="arrow" />Más Información</span></p><?php */?></div>
      </figcaption>
    </figure>
  </div>
  <?php if(count($hoteles)>1){ ?>
  <div class="grid7 float-right wow fadeInRight">
    <figure class="effect-sadie" style="background-image: url(<?=URL_ADMINISTRACION.$hoteles[1]->imagen_adjunta?>) !important;">
      <figcaption>
      <div class="block-bottom">
        <h3><a href="<?=$hoteles[1]->link?>"><?=$hoteles[1]->titulo?></a></h3>
        <?php /*?><p><?=$hoteles[1]->bajada?><br />
          <br />
          <span><img src="../../imagenes/template/arrow.png" class="arrow" /><a href="<?=$hoteles[1]->link?>">Más Información</span></p><?php */?></div>
      </figcaption>
    </figure>
  </div>
  <?php }
  } ?>
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
    <p style="color:#004a8e;"><?=$item->bajada?></p>
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
    <p  style="color:#004a8e;"><?=$item->bajada?></p>
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
<?php if(count($auspiciadores)>0){ ?>
<!-- inicio partners -->
<style>
.auspiciadores-background {
	background-color: #033e6c;
	text-align:center;
	padding:30px 10px;
}
.auspiciadores {
	padding: 10px 0;
	margin-bottom: 80px;
}
.auspiciadores h1 {
	font-size:70px;
	color:#033e6c;
	text-align:center;
}
.auspiciadores ul {
	list-style: none;
	margin: 0;
	padding: 0;
}
.auspiciadores ul li {
	display: inline-block;
	width: 10%;
	margin-right: 30px;
}
.auspiciadores ul li img {
	width: 100%;
	vertical-align: middle;
}
</style>
  <section class="auspiciadores" style="padding-top:80px;">
    <h1>PARTNERS</h1>
    <div class="auspiciadores-background">
      <div class="carrusel partners-responsive">
        <?php foreach($auspiciadores as $item): ?>
        <div><figure><img style="width: 70% !important;" alt="<?=$item->nombre?>" src="<?=URL_ADMINISTRACION.$item->imagen_adjunta?>" /></figure></div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<!-- fin partners -->
  <?php } ?> 

<style type="text/css">
#header{ position:relative !important;}
</style>
<script type="text/javascript">
$(document).ready(function(){
    $('.venobox').venobox();


   
	$('.slider-habitacion').flexslider({
		animation: "fade",
		slideshowSpeed: 5000,
		directionNav: false,
	});
  


});

//$(window).load(function(){
//      $('.flexslider').flexslider({
//        animation: "fade",
//		slideshowSpeed: 5000,
//		directionNav: false,
//      });
//});
</script>
