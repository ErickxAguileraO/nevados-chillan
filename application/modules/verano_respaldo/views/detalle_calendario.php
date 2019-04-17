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
  <?php if($actividad->imagen_adjunta){ ?>
  <div class="imagen-detalle float-left"><img src="<?php echo URL_ADMINISTRACION.$actividad->imagen_adjunta?>" alt="<?=$actividad->titulo?>" /></div>
  <?php } ?>
  <div class="texto-detalle float-right"> <span><img src="/imagenes/template/icono-calendario.png" />Del <?=fecha_corta($actividad->fecha_inicio,1)?> a las <?=extrae_hora($actividad->hora_inicio)?> al <?=fecha_corta($actividad->fecha_termino,1)?> a las <?=extrae_hora($actividad->hora_termino,'')?></span>
    <h2><?=$actividad->titulo?></h2>
    <div class="social-media">
      <ul>
        <li>Compartir en:</li>
        <li>
            <a class="popup-rs" href='https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>&t=<?php echo $actividad->titulo; ?>&p[summary]=contenido', 'facebook-share-dialog', 'width=626,height=436'>
                <img src="/imagenes/template/share-facebook.png" />
            </a>
        </li>
        <li>
            <a class="popup-rs" href="https://twitter.com/share?text=<?php echo $actividad->titulo; ?>&url=<?php echo $url; ?>" title="Twitter" >
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
    <?=$actividad->descripcion?>
     </div>
</div>
<script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "fade",
		slideshowSpeed: 5000,
		directionNav: false,
      });
});

</script>
