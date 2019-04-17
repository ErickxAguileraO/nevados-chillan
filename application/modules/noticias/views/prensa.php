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
  <div class="texto-detalle2 float-left wow fadeInLeft">
    <h2>Informaci&oacute;n para Prensa</h2>
    <?=$prensa->descripcion?>
  </div>
  <div class="galeria-noticias float-right wow fadeInRight">
    <?php if(count($imagenes)>0){ ?>
    <h3>Galería de imágenes</h3>
    <ul>
      <?php foreach($imagenes as $item): ?>
      <li><a class="venobox" data-gall="myGallery" data-title="Titulo para imagen" href="<?=URL_ADMINISTRACION.$item->ruta_grande?>"><img src="<?=URL_ADMINISTRACION.$item->ruta_interna?>" /></a></li>
    <?php endforeach; ?>
    </ul>
    <div class="clear"></div>
    <?php } ?>
    <div class="archivos">
      <h3>Archivos Descargables</h3>
      <?php foreach($archivos as $item): ?>
      <span><a href="/noticias/prensa/descargar_archivo/<?=$item->codigo?>"><img src="/imagenes/template/descargar-icono.png" /><?=$item->nombre?></span>
    <?php endforeach; ?>
     </div>
  </div>
  <div class="clear"></div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $('.venobox').venobox();
});
      $('.flexslider').flexslider({
        animation: "fade",
		slideshowSpeed: 5000,
		directionNav: false,
      });
</script>
