<?php
    $https = 'http://';
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'])
        $https = 'https://';
    $url = $https.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>

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
  <div class="texto-detalle2 float-left wow fadeInLeft"> <span><img src="/imagenes/template/icono-calendario.png" /><?=invierte_fecha($noticia->fecha_publicacion,'/')?></span>
    <h2><?php echo $noticia->titulo ?></h2>
    <div class="social-media">
      <ul>
        <li>Compartir en:</li>
        <li>
            <a class="popup-rs" href='https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>&t=<?php echo $noticia->titulo; ?>&p[summary]=contenido', 'facebook-share-dialog', 'width=626,height=436'>
                <img src="/imagenes/template/share-facebook.png" />
            </a>
        </li>
        <li>
            <a class="popup-rs" href="https://twitter.com/share?text=<?php echo $noticia->titulo; ?>&url=<?php echo $url; ?>" title="Twitter" >
                <img src="/imagenes/template/share-twitter.png" />
            </a> 
        </li>
        <li>
            <a class="popup-rs" href="https://plus.google.com/share?url=<?php echo $url; ?>" title="Google+" >
                <img src="/imagenes/template/share-google.png" />
            </a>
        </li>
        <li>
            <a href="whatsapp://send?text=<?php echo $url; ?>" data-action="share/whatsapp/share">
                <img src="/imagenes/template/share-wsp.png" />
            </a>
        </li>
      </ul>
      <div class="clear"></div>
    </div>
    <?=$noticia->descripcion?>
  </div>
  <?php if(count($imagenes)>0){ ?>
  <div class="galeria-noticias float-right wow fadeInRight">
    <h3>Galería de imágenes</h3>    
      <?php foreach($imagenes as $item):?>
      <figure><img src="<?=URL_ADMINISTRACION.$item->ruta_interna?>" width="99" /><?php /*?><a class="venobox" data-gall="myGallery" data-title="Titulo para imagen" href="<?=URL_ADMINISTRACION.$item->ruta_grande?>"><img src="<?=URL_ADMINISTRACION.$item->ruta_interna?>" width="99" /></a><?php */?></figure>
    <?php endforeach; ?>    
  </div>
  <?php } ?>
  <div class="clear"></div>
  <?php if($noticias) { ?>
  <div class="noticias" style="margin-top:50px;">
    <h2 style="margin-bottom:30px;">Noticias relacionadas</h2>
    <?php $i = 0;
  	foreach($noticias as $n) {
      if($i%2==0){ ?>
        <div class="clear"></div>
      <article class="articulo float-left wow fadeInLeft"> <a href="/noticias/<?=str_replace("-","/",$n->fecha_publicacion)?>/<?=$n->url?>"><img src="<?=URL_ADMINISTRACION.$n->noticias_imagenes->ruta_interna?>" width="181" class="img-noticia" /></a> 
     <div class="resumen">
      <span><?=invierte_fecha($n->fecha_publicacion,'/')?></span>
        <?php }else{ ?>        
    <article class="articulo float-right wow fadeInRight"> <a href="/noticias/<?=str_replace("-","/",$n->fecha_publicacion)?>/<?=$n->url?>"><img src="<?=URL_ADMINISTRACION.$n->noticias_imagenes->ruta_interna?>" width="181" class="img-noticia" /></a> 
    <div class="resumen">
    <span><?=invierte_fecha($n->fecha_publicacion,'/')?></span>
      <?php } ?>
      <h3><a href="/noticias/<?=str_replace("-","/",$n->fecha_publicacion)?>/<?=$n->url?>"><?php echo $n->titulo ?></a></h3>
      <p><?php echo $n->resumen ?></p>
      <span><img src="/imagenes/template/arrow.png" class="arrow" /><a href="/noticias/<?=str_replace("-","/",$n->fecha_publicacion)?>/<?=$n->url?>">Más Información</a></span> </div></article>
    <?php $i++; } ?>
  </div>
  <?php } ?>
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
