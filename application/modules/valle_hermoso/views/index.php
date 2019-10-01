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
          <h2>
            <?=$item->titulo?>
          </h2>
          <p>
            <?=$item->bajada?>
          </p>
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
          <h2>
            <?=$item->titulo?>
          </h2>
          <p>
            <?=$item->bajada?>
          </p>
        </div>
        <?php } ?>
      </div>
    </li>
    <?php endforeach; ?>
  </ul>
  <?php }?>
</div>
<!-- Fin Slider -->

<div class="center valle-hermoso-act" id="actividades" style="margin-bottom: 50px;">
  <?=$this->layout->getNav();?>
  <div class="intro"> <?php echo ($introduccion) ? html_entity_decode($introduccion->descripcion) : ''; ?> 
    <!--
    <h2>Valle Hermoso: Lugar ideal para la entretención familiar</h2>
    <p>Es por excelencia un centro de recreación familiar enclavado en una zona de increíble belleza natural y a corta distancia de Nevados de Chillán, ya que forma parte del mejor resort de montaña del país.</p>
<p>Tiene un conjunto de actividades para todos los integrantes de la familia a precios inigualables todos los días del año, en medio de un paisaje privilegiado rodeado de fauna y ﬂora nativa de la Reserva Forestal Ñuble.</p>
<p>Valle Hermoso es, como lo dice su nombre, el sitio perfecto para alejarse de la ciudad, conectarse con la naturaleza, relajarse y disfrutar de un ambiente agradable, de paz y bienestar. Como Centro de ski es ideal para aprender a esquiar, no solo los niños sino también para los papás,
hermanos, primos, tíos y tías, ya que en su mayoría tiene pistas para
novicios.</p>
<p>A Valle Hermoso se puede llegar en cualquier tipo de vehículo la mayor
parte del año. Durante el invierno, es posible que sea necesario el uso de
vehículos 4x4 o usar cadenas. Se encuentra a 80 Km de la ciudad de Chillán, a solo 5 Km del hotel Nevados.</p>
--> 
  </div>
  <a href="https://waze.to/lr/h63mjyxte8" class="wase-btn" target="_blank"><img src="../../imagenes/template/wase-btn.jpg"></a>
  <div class="clear"></div>
  <?php /*?> <!-- Inicio Actividades -->
  <?php if(count($actividades)>0){ ?>
  <h2>Actividades</h2>
  <div class="grid10 float-left wow fadeInUp">
    <figure class="effect-sadie" style="background-image: url(<?=URL_ADMINISTRACION.$actividades[0]->imagen_adjunta_2?>) !important;">
      <figcaption>
      <div class="block-bottom">
        <h2><?=$actividades[0]->titulo?></h2>
        <p><?=$actividades[0]->bajada?><br />
          <br />
          <?php if($actividades[0]->link){ ?>
          <span><img src="../../imagenes/template/arrow.png" class="arrow" /><a href="<?=$actividades[0]->link?>"><?=$actividades[0]->nombre_link?></a></span>
          <?php } ?>
        </p></div>
      </figcaption>
    </figure>
  </div>
  <div class="grilla-pequena float-right last">
    <div class="grid10 float-left border-right wow fadeInDown">
      <figure class="effect-sadie" style="background-image: url(<?=URL_ADMINISTRACION.$actividades[1]->imagen_adjunta?>) !important;">
        <figcaption>
      <div class="block-bottom">
          <h2><?=$actividades[1]->titulo?></h2>
          <p><?=$actividades[1]->bajada?><br />
            <br />
            <?php if($actividades[1]->link){ ?>
            <span><img src="../../imagenes/template/arrow.png" class="arrow" /><a href="<?=$actividades[1]->link?>"><?=$actividades[1]->nombre_link?></a></span>
            <?php } ?>
          </p></div>
        </figcaption>
      </figure>
    </div>
    <div class="grid10 float-left ultima wow fadeInUp">
      <figure class="effect-sadie" style="background-image: url(<?=URL_ADMINISTRACION.$actividades[2]->imagen_adjunta?>) !important;">
        <figcaption>
      <div class="block-bottom">
          <h2><?=$actividades[2]->titulo?></h2>
          <p><?=$actividades[2]->bajada?><br />
            <br />
            <?php if($actividades[2]->link){ ?>
            <span><img src="../../imagenes/template/arrow.png" class="arrow" /><a href="<?=$actividades[2]->link?>"><?=$actividades[2]->nombre_link?></a></span>
            <?php } ?>
          </p></div>
        </figcaption>
      </figure>
    </div>
  </div>
  <div class="clear"></div>
  <?php } ?>
  <!-- Fin Actividades --><?php */?>
  <!--<div class="intro dptos-valle" id="departamentos">
    <h2>Conoce los espectaculares departamentos de valle hermoso</h2>
    <p>Nuestros departamentos de <strong>Valle Hermoso están completamente equipados</strong> con todo lo necesario para que disfrutes unos gratos días de descanso un entorno natural único <strong>con una vista privilegiada hacia el Cordón Montañoso de Nevados de Chillán y Valle las Trancas</strong>.</p>
    <p>Los departamentos de Valle Hermoso cuentan <strong>con estacionamientos para vehículos y zona picnic (consultar disponibilidad)</strong>. Además, quienes se hospeden en el lugar, tienen <strong>acceso directo a las canchas del Centro de Ski Valle Hermoso previo al pago de su ticket diario</strong>.</p>
  </div>
    <a href="https://waze.to/lr/h63mjyz23c" class="wase-btn" target="_blank" style="margin-top:50px;"><img src="../../imagenes/template/wase-btn.jpg"></a>--> 
</div>
<div class="valores-seccion" id="valores">
<div class="block-table">
  <div class="center">
    <?php if($programas){ 
          
            foreach($programas as $pro) { 
          
          ?>
    <div class="block-tr">
      <div class="block-th">
        <h3>
          <?=$pro->titulo?>
        </h3>
        <ul>
          <li>
            <?=$pro->bajada_uno?>
          </li>
          <li>
            <?=$pro->bajada_dos?>
          </li>
        </ul>
      </div>
      <?php foreach($pro->opciones as $op ){ ?>
      <div class="block-td">
        <h4>
          <?=$op->nombre?>
        </h4>
        <span class="valor">$
        <?=$op->monto?>
        </span> <span class="condiciones">
        <?=$op->resumen?>
        </span> </div>
      <?php } ?>
    </div>
    <?php
            }
          }
          
          ?>
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
    <h2>
      <?=$item->titulo?>
    </h2>
    <?=html_entity_decode($item->descripcion)?>
    <?php if($item->imagen_adjunta){ ?>
    <span><a class="venobox" data-gall="myGallery" data-title="Titulo para imagen" href="<?=URL_ADMINISTRACION.$item->imagen_adjunta?>">
    <?=$item->nombre_imagen_adjunta?>
    </a></span>
    <?php } ?>
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
    <h2>
      <?=$item->titulo?>
    </h2>
    <?=html_entity_decode($item->descripcion)?>
    <?php if($item->imagen_adjunta){ ?>
    <span><a class="venobox" data-gall="myGallery" data-title="Titulo para imagen" href="<?=URL_ADMINISTRACION.$item->imagen_adjunta?>">
    <?=$item->nombre_imagen_adjunta?>
    </a></span>
    <?php } ?>
  </div>
</div>
<div class="clear"></div>
<?php } ?>
<?php endforeach; ?>
<!-- fin habitaciones --> 



<!-- inicio secciones -->
<?php if(count($secciones)>0){ ?>
<?php foreach($secciones as $item): ?>

<!--Posicion foto derecha-->
<?php if($item->posicion == 0) { ?>
<?php if($item->tipo_de_imagen==2){ ?>
<div class="center cont2 wow fadeInLeft" id="<?=$item->url?>"><!-- imagen chica -->
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
  <div class="video-slider float-right"> <?php echo $item->embed_video;?> </div>
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
<!-- Inicio Banners -->
<?php if(count($banners)>0){ ?>
<div class="center eventos-corporativos"> <a href="<?= $banners[0]->link?>"> <img src="<?=URL_ADMINISTRACION.$banners[0]->imagen_adjunta?>" class="float-left" /></a> <a href="<?= $banners[1]->link?>"><img src="<?=URL_ADMINISTRACION.$banners[1]->imagen_adjunta?>" class="float-right" /></a> </div>
<?php } ?>
<!-- Fin Banners --> 
<script type="text/javascript">
$(document).ready(function(){
    $('.venobox').venobox();
});
$(window).load(function(){
	$('.slider-habitacion').flexslider({
		animation: "fade",
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
<style>
@media screen and (max-width: 640px) {
.cont2 img {
	display: block;
}
}
</style>