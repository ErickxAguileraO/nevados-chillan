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
        <p><?=nl2br($item->bajada)?></p>
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
<div class="clear"></div>
<div class="center">
  <?=$this->layout->getNav();?>
  <div class="intro">
      <?php echo ($introduccion) ? $introduccion->descripcion : ''; ?>
      <?php /* <!--
    <h2>Invierno</h2>
    <p>Los esquiadores y snowbordistas de todo el mundo afirman que Nevados de Chillán es el centro de ski más completo, excitante y hermoso de la Cordillera de Los Andes, en el Hemisferio Sur.</p>
<p>Los fanáticos y deportistas profesionales lo llaman la “Meca del Ski” y lo califican como “ algo parecido al paraíso”, por la combinación perfecta de nieve polvo de alta calidad y las aguas termales de origen volcánico que devuelven al cuerpo su fortaleza física.</p>
<p>Nevados de Chillán Mountain Resort & Thermal Spa, es un dominio esquiable de 10.000 hectáreas aptas para todo tipo de deportes invernales y niveles de habilidad y se encuentra ubicado a solo 194 kilómetros de Concepción, la capital de la Región del Biobío y a 400 kilómetros al sur de
Santiago de Chile.</p>
<p>A nivel mundial es célebre por la calidad de la nieve y su terreno esquiable fuera de pista, ya que la nieve caída puede alcanzar los 10 metros y se mantiene en perfectas condiciones durante toda la temporada de Junio a Octubre de cada año.</p>
<p>Sus 30 pistas se mantienen en perfectas condiciones, entre ellas “Las Tres Marías”, la más larga de Sudamérica con 13 kilómetros de longitud. Las condiciones de seguridad y de confiabilidad en la preparación de las pistas es garantizada con el empleo de maquinaria profesional especializada en nieve de última generación.</p>
<p>El paraje donde está ubicado Nevados de Chillán es de una belleza extraordinaria con nieves vírgenes que se entremezclan con grandes extensiones de bosques
nativos de árboles milenarios. Al llegar a la cumbre, despierta
gran admiración su extraordinaria visión panorámica en 360
grados donde se puede ver la imponente Sierra Velluda, el Volcán
Antuco y hasta el Volcán Dumuyo, en Neuquén, Argentina</p>--> */ ?>
  </div>
</div>
<!-- inicio secciones -->
<a name="servicios"></a>
<?php if(count($secciones)>0){ ?>
<?php $i = 0; foreach($secciones as $item):
  if($i==0){?>
  <?php if($item->tipo_de_imagen==2){ ?>
<div class="center cont2 wow fadeInLeft"><!-- imagen chica -->
  <div class="texto">
    <h2><?=$item->titulo?></h2>
    <p><?=nl2br($item->bajada)?></p>
    <!-- si es un enlace -->
    <?php if($item->link){ ?>
    <span><a href="<?=$item->link?>"> <img src="../../imagenes/template/arrow.png" class="arrow" /><?=$item->nombre_link?></a></span>
    <?php } ?>
    <?php if($item->link_2){ ?>
    <span><a  href="<?=$item->link_2?>"> <img src="../../imagenes/template/arrow.png" class="arrow" /><?=$item->nombre_link_2?></a></span>
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
<div class="seccion-fondo ski-seccion" style="background-image: url(<?=URL_ADMINISTRACION.$item->imagen_adjunta_fondo?>) !important;"><!-- imagen grande -->
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
<?php }
}?>
<?php $i++; endforeach; ?>
<?php }?>
<!-- Fin Secciones -->
<!-- inicio Cafeteria -->
<?php if(count($cafeterias)>0){ ?>
<div class="seccion-fondo cafeteria-seccion" id="cafeteria">
  <div class="center">
    <div class="texto wow fadeInLeft">
      <h2>Cafetería</h2>
      <!--<p class="bajada">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</strong> </p>-->
      <p>Nevados de Chillán cuenta con una variedad de cafeterías para disfrutar de una buena comida y bebida.
Desde la cafetería en las alturas Buena Vista hasta la más familiar Quincho tata. Alternativas para todos los gustos.</p>
    </div>
    <div class="cafeterias wow fadeInRight">
      <ul>
        <?php foreach($cafeterias as $item): ?>
        <li><img src="<?=URL_ADMINISTRACION.$item->imagen_adjunta?>" />
          <h3><?=$item->nombre?></h3>
        </li>
      <?php endforeach; ?>

      </ul>
    </div>
  </div>
  <div class="clear"></div>
</div>
<?php }?>
<!-- Fin Cafeteria -->
<!-- inicio secciones -->
<?php if(count($secciones)>0){ ?>
  <?php $i = 0; foreach($secciones as $item):
    if($i>0){?>
  <?php if($item->tipo_de_imagen==2){ ?>
<div class="center cont2 wow fadeInLeft" id="<?=$item->url?>"><!-- imagen chica -->
  <div class="texto">
    <h2><?=$item->titulo?></h2>
    <p><?=nl2br($item->bajada)?></p>
    <!-- si es un enlace -->
    <?php if($item->link){ ?>
    <span><a  href="<?=$item->link?>"> <img src="../../imagenes/template/arrow.png" class="arrow" /><?=$item->nombre_link?></a></span>
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
<div class="seccion-fondo ski-seccion" style="background-image: url(<?=URL_ADMINISTRACION.$item->imagen_adjunta_fondo?>) !important;" id="<?=$item->url?>"><!-- imagen grande -->
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
<?php }
}?>
<?php $i++; endforeach; ?>
<?php }?>
<!-- Fin Secciones -->
<div class="center">
  <!-- Inicio servicios asociados -->
  <?php if(count($servicios)>0){ ?>
  <div class="serv-compl wow fadeInLeft" id="servicios">
    <h2>Servicios Complementarios</h2>
    <small>Estos servicios tienen un valor adicional</small>
    <ul>
      <?php foreach($servicios as $item): ?>
      <li><img alt="<?=$item->nombre?>" src="<?=URL_ADMINISTRACION.$item->imagen_adjunta?>" />
        <h3><?=$item->nombre?></h3>
      </li>
    <?php endforeach;?>
    </ul>
    <div class="clear"></div>
  </div>
  <?php } ?>
  <!--Fin Servicios asociados -->
</div>
<!-- inicio Seccion Valores -->
<div class="seccion-fondo valores-seccion" id="valores">
  <h2 style="font-size: 25px !important;">Valores tickets</h2>

  <div class="center valores">
    <?php $cant = explode("<table",$valores->contenido); $cant = count($cant)-1;
    if($cant == 1){
      echo '<style>
      .valores-seccion table{width:99%;}
      </style>';
    }
    if($cant == 2){
      echo '<style>
      .valores-seccion table{width:49%;}
      </style>';
    }
    if($cant == 3){
      echo '<style>
      .valores-seccion table{width:32%;}
      </style>';
    }
    ?>
    <?=$valores->contenido?>
    <div class="clear"></div>
  </div>
</div>
<!-- Fin Valores -->
<div class="center ofertas" id="promociones">
  <h2>Tenemos ofertas para ti</h2>
  <div id="portfoliolist">
    <?php foreach($promociones as $item): ?>
    <div class="portfolio logo" data-cat="logo">
      <div class="portfolio-wrapper"> <a href="/alojamiento/promocion/<?=$item->url?>"><img src="<?=URL_ADMINISTRACION.$item->imagen_adjunta_banner?>" alt="" /></a> </div>
    </div>
  <?php endforeach; ?>
  </div>
</div>
<style type="text/css">
.valores-seccion h2 {
    font-size: 15px;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
    $('.venobox').venobox();
});
	$(function () {
		var filterList = {
			init: function () {

				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixItUp({
  				selectors: {
    			  target: '.portfolio',
    			  filter: '.filter'
    		  },
    		  load: {
      		  filter: '.app, .card, .icon, .logo, .web'
      		}
				});
			}
		};
		// Run the show!
		filterList.init();
	});

    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "fade",
		slideshowSpeed: 5000,
		directionNav: false,
      });
 });

	</script>
