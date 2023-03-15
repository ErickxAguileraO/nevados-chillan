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
<div class="center">
  <?=$this->layout->getNav();?>
  <div class="intro">
      <?php echo ($introduccion) ? html_entity_decode($introduccion->descripcion) : ''; ?>
      <!--
    <h2>Nevados: Hotel de familia</h2>
    <p>Con diseño y decoración minimalista, el Hotel Nevados (ex Pirigallo) está pensado para
dar comodidad a las familias en un ambiente cálido y acogedor.</p>
<p>Sus 70 amplias habitaciones están ubicados en el primer y segundo piso, equipadas con
todos los elementos que satisfagan las necesidades de descanso de los huéspedes.</p>
<p>Es un hotel funcional con espacios públicos donde destacan una enorme chimenea y un
amplio salón para compartir experiencias y disfrutar de cócteles originales en una mezcla deliciosa de sabores e ingredientes en el bar del hotel, que reúne la más completa variedad de vinos y licores.</p>
<p>La capacidad de Nevados es de 150 personas que pueden ser acomodadas en habitaciones estándar single y dobles con cama adicional si se requiere o en habitaciones superior
single y doble también con cama adicional.</p>
<p>La estructura y disposición de las habitaciones permite a los turistas un contacto casi directo con el bosque nativo donde está ubicado el Hotel Nevados y gozar de las aguas
termales en las 2 piscina situadas al aire libre. Los huéspedes salen de sus habitaciones y
acceden directamente a los baños termales, cuyas aguas minerales están a 36 grados de
temperatura.</p>
      -->
  </div>
       <!-- <a href="https://waze.to/lr/h63mnp1cqp" class="wase-btn" target="_blank"><img src="/imagenes/template/wase-btn.jpg" /></a> -->
  <div class="clear"></div>
</div>
<div class="contenedor">
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
      <?=html_entity_decode($item->descripcion)?>
      <?php if($item->imagen_adjunta){ ?>
      <span><a class="venobox" data-gall="myGallery" data-title="Titulo para imagen" href="<?=URL_ADMINISTRACION.$item->imagen_adjunta?>"><?=$item->nombre_imagen_adjunta?></a></span>
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
      <h2><?=$item->titulo?></h2>
      <?=html_entity_decode($item->descripcion)?>
      <?php if($item->imagen_adjunta){ ?>
      <span><a class="venobox" data-gall="myGallery" data-title="Titulo para imagen" href="<?=URL_ADMINISTRACION.$item->imagen_adjunta?>"><?=$item->nombre_imagen_adjunta?></a></span>
      <?php } ?>
       </div>
  </div>
  <div class="clear"></div>
  <?php } ?>
<?php endforeach; ?>
  <!-- fin habitaciones -->

  <?php /*?><div class="center">
    <!-- Inicio servicios asociados -->
    <?php if(count($servicios)>0){ ?>
    <div class="serv-compl wow fadeInLeft">
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
    <!-- Inicio Actividades -->
    <div class="cont-act float-left">
      <h2>Actividades</h2>
      <?php foreach($actividades as $item): ?>
      <div class="grid8 float-left border-right wow fadeInUp">
        <figure class="effect-sadie" style="background-image: url(<?=URL_ADMINISTRACION.$item->imagen_adjunta?>) !important;">
          <figcaption>
      <div class="block-bottom">
            <h3><?=$item->titulo?></h3>
            <p><?=$item->bajada?><br />
              <br />
              <?php if($item->link){ ?>
              <span><img src="/imagenes/template/arrow.png" class="arrow" /><a href="<?=$item->link?>"><?=$item->nombre_link?></a></span>
              <?php } ?>
            </p></div>
          </figcaption>
        </figure>
      </div>
    <?php endforeach; ?>
    </div>
    <!-- fin actividades -->
    <!-- Inicio Calendario -->
    <?php if(count($calendarios)>0){ ?>
    <div class="calendario-diario float-right wow fadeInRight">
      <h2>Calendario Diario</h2>
      <div class="fondo-calendario">
        <?php foreach($calendarios as $item): ?>
        <div class="cont-activ">
          <div class="item"> <img src="/imagenes/template/reloj-icono.png" /> <span><?=substr($item->hora_inicio,0,-3)?> - <?=substr($item->hora_termino,0,-3)?></span> </div>
          <div class="item"> <span><?=$item->titulo?></span> </div>
          <div class="item"> <span><?=$item->sector?></span> </div>
          <div class="clear"></div>
        </div>
      <?php endforeach; ?>
      </div>
      <a target="blank" href="<?=$this->uri->segment(2)?>/descargarcalendario" >Descargar calendario diario</a>
    </div>
    <?php } ?>
    <!-- Fin Calendario -->
    <div class="clear"></div>
    </div><?php */?>
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

  <!-- fin del center -->
  <!-- Inicio Testimonios -->
  <?php if(count($testimonios)>0){ ?>
  <div class="testimonios">
    <h2>Testimonios</h2>
    <section class="auspiciadores" style=" padding: 30px 50px; background-color: #033e6c;">
    <!--<a href="https://www.tripadvisor.cl/Hotel_Review-g317797-d675215-Reviews-Nevados_de_Chillan-Chillan_Biobio_Region.html" target="_blank"><img src="/imagenes/template/trip-advisor2.png"  style="margin-bottom:30px;" /></a>
    <div id="TA_cdsscrollingravewide207" class="TA_cdsscrollingravewide">
      <ul id="8wABok" class="TA_links JDYVGGSq98">
        <li id="PBDkICpdM" class="cXQdECi5g2"> <a target="_blank" href="https://www.tripadvisor.cl/"><img src="https://static.tacdn.com/img2/t4b/Stacked_TA_logo.png" alt="TripAdvisor" class="widEXCIMG" id="CDSWIDEXCLOGO"/></a> </li>
      </ul>
    </div> -->
    <div class="auspiciadores-background">
      <div class="carrusel alojamiento-responsive">


        <?php foreach($testimonios as $item): ?>

        <div>
          <div class="cont-testimonio">
            <h3><?=$item->nombre?></h3>
            <span><?=fecha_corta($item->fecha,2)?></span>
            <p><?=$item->testimonio?></p>
          </div>
        </div>

      <?php endforeach; ?>    


      </div>
    </div>
    <?php /*?><div class="slider-testimonio wow fadeInUp">
      <ul class="slides">
        <?php foreach($testimonios as $item): ?>
        <li>
          <div class="cont-testimonio">
            <h3><?=$item->nombre?></h3>
            <span><?=fecha_corta($item->fecha,2)?></span>
            <p><?=$item->testimonio?></p>
          </div>
        </li>
      <?php endforeach; ?>    
      </ul>
    </div><?php */?>
    </section>
  </div>
  <?php } ?>
  <!-- Fin Testiminios -->
  <!-- Inicio Banners -->
  <?php if(count($banners)>0){ ?>
  <div class="center eventos-corporativos">
    <a href="<?= $banners[0]->link?>"><img src="<?=URL_ADMINISTRACION.$banners[0]->imagen_adjunta?>" class="float-left" /></a>
    <a href="<?= $banners[1]->link?>"><img src="<?=URL_ADMINISTRACION.$banners[1]->imagen_adjunta?>" class="float-right" /></a>
  </div>
  <?php } ?>
<!-- Fin Banners -->
</div>

	<link rel="stylesheet" type="text/css"  href="/js/jquery/carousel/slick.css" />
<script type="text/javascript" src="/js/jquery/carousel/slick.min.js"></script>
<script src="/js/sistema/alojamiento/index.js"></script>
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

	   $('.slider-habitacion').flexslider({
        animation: "fade",
		slideshowSpeed: 5000,
		directionNav: false,
		slideshow: false,
      });

	  // $('.slider-testimonio').flexslider({
//        animation: "fade",
//		slideshowSpeed: 5000,
//		directionNav: true,
//      });  
 });

   
    
	</script>
<script src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=613&amp;locationId=675215&amp;lang=es_CL&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true&amp;display_version=2"></script>
