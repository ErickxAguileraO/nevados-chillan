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
          <span>
          <?=$item->antetitulo?>
          </span>
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

<div class="center texto-intro-bike">
  <?=$this->layout->getNav();?>
  <div class="texto-info float-left wow fadeInLeft">
    <?=$bikepark->descripcion?>
  </div>
  <div class="calendario-bikepark float-right wow fadeInRight">
    <h2>Calendario de carreras</h2>
    <a href="/verano/calendario/categoria/bikepark" title="Actividades Bikepark"> <img src="<?=URL_ADMINISTRACION.$bikepark->imagen_adjunta?>" /> </a> </div>
  <div class="clear"></div>
</div>

<!-- inicio Seccion Valores -->

<div class="seccion-fondo valores-seccion" id="valores">
  <h2>Programas y valores</h2>
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
<div class="clear"></div>

<!-- Inicio Mapa de pistas -->

<div class="center wow fadeInLeft pistas-bikepark" id="tabs-container">
  <ul class="tabs-menu">
    <li class="current"><a href="#tab-1">Downhill</a></li>
    <li><a href="#tab-2">Enduro</a></li>
  </ul>
</div>
<div class="tab">
  <div id="tab-1" class="tab-content"> <img src="/imagenes/template/downhill2.png" /> </div>
  <div id="tab-2" class="tab-content"> <img src="/imagenes/template/enduro2.png" /> </div>
</div>

<!-- Fin mapa de pistas -->

<!-- Fin Valores -->

<!-- inicio secciones -->

<?php if(count($secciones)>0){ ?>
<?php foreach($secciones as $item): ?>
<?php if($item->tipo_de_imagen==2){ ?>
<div class="center cont2 wow fadeInLeft"><!-- imagen chica -->

  <div class="texto">
    <h2>
      <?=$item->titulo?>
    </h2>
    <p>
      <?=$item->bajada?>
    </p>

    <!-- si es un enlace -->

    <?php if($item->link){ ?>
    <span><a  href="<?=$item->link?>"> <img src="../../imagenes/template/arrow.png" class="arrow" />
    <?=$item->nombre_link?>
    </a></span>
    <?php } ?>
    <?php if($item->link_2){ ?>
    <span><a  href="<?=$item->link_2?>"> <img src="../../imagenes/template/arrow.png" class="arrow" />
    <?=$item->nombre_link_2?>
    </a></span>
    <?php } ?>
    <?php if($item->link_3){ ?>
    <span><a  href="<?=$item->link_3?>"> <img src="../../imagenes/template/arrow.png" class="arrow" />
    </a></span>
    <?php } ?>

    <!-- si es imagen -->

    <?php if($item->imagen_adjunta){ ?>
    <span><a class="venobox" data-gall="myGallery" data-title="Titulo para imagen" href="<?=URL_ADMINISTRACION.$item->imagen_adjunta?>">
    <?=$item->nombre_imagen_adjunta?>
    </a></span>
    <?php } ?>
  </div>
  <img src="<?=URL_ADMINISTRACION.$item->imagen_adjunta_lateral?>" class="wow fadeInRight" />
  <div class="clear"></div>
</div>
<?php }else{ ?>
<div class="seccion-fondo ski-seccion" style="background-image: url(<?=URL_ADMINISTRACION.$item->imagen_adjunta_fondo?>) !important;"><!-- imagen grande -->

  <div class="center">
    <div class="texto wow fadeInLeft">
      <h2>
        <?=$item->titulo?>
      </h2>
      <p>
        <?=$item->bajada?>
      </p>

      <!-- si es un enlace -->

      <?php if($item->link){ ?>
      <span><a href="<?=$item->link?>"> <img src="../../imagenes/template/arrow.png" class="arrow" />
      <?=$item->nombre_link?>
      </a></span>
      <?php } ?>
      <?php if($item->link_2){ ?>
      <span><a  href="<?=$item->link_2?>"> <img src="../../imagenes/template/arrow.png" class="arrow" />
      <?=$item->nombre_link_2?>
      </a></span>
      <?php } ?>
      <?php if($item->link_3){ ?>
      <span><a href="<?=$item->link_3?>"> <img src="../../imagenes/template/arrow.png" class="arrow" />
      <?=$item->nombre_link_3?>
      </a></span>
      <?php } ?>

      <!-- si es imagen -->

      <?php if($item->imagen_adjunta){ ?>
      <span><a class="venobox" data-gall="myGallery" data-title="Titulo para imagen" href="<?=URL_ADMINISTRACION.$item->imagen_adjunta?>">
      <?=$item->nombre_imagen_adjunta?>
      </a></span>
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

$(document).ready(function(){

    $('.venobox').venobox();

});

    $(window).load(function(){

      $('.flexslider').flexslider({

        animation: "fade",

		slideshowSpeed: 5000,

		directionNav: false,

      });

 });



    $(".tabs-menu a").click(function(event) {

        event.preventDefault();

        $(this).parent().addClass("current");

        $(this).parent().siblings().removeClass("current");

        var tab = $(this).attr("href");

        $(".tab-content").not(tab).css("display", "none");

        $(tab).fadeIn();

    });



      $('.flexslider').flexslider({

        animation: "fade",

		slideshowSpeed: 5000,

		directionNav: false,

      });



	</script>
<style type="text/css">

	/* CSS Tab */

.pistas-bikepark{

	margin-top: 70px;

	}

.tabs-menu {

	height: 30px;

	clear: both;

}

.tabs-menu li {

	height: 30px;

	float: left;

	margin-right: 10px;

}

.tabs-menu li.current {

	position: relative;

	background-color: transparent;

	border: none;

	z-index: 5;

}

.tabs-menu li a {

	padding: 7px 15px;

	font-size: 16px;

	font-weight: bold;

	text-transform: uppercase;

	color: #00274c;

	text-decoration: none;

}

.tabs-menu .current a {

	background: #00274c;

	color: #fff;

	border-radius: 0;

}

.tab {

	width: auto;

	margin-top: -4px;

}

.tab-content {

	padding: 0;

	display: none;

	line-height: 22px;

	font-size: 13px;

	border-top: 5px solid #00274c;

}

.tab-content img{

	width: 100%;

}



#tab-1 {

	display: block;

}

ul.tabs-menu {

	list-style: none;

}



    </style>
