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
  <div class="col float-left">
    <?php $i = 0;
     foreach($condiciones as $item): ?>
     <?php if($i%2==0){ ?>
    <div class="condiciones">
      <h2><?=$item->titulo?></h2>
      <?=$item->descripcion?>
      <span><a href="/necesitas-ayuda/condiciones/descargar_archivo/<?=$item->codigo?>"><img src="/imagenes/template/descargar-icono.png" />Descargar documento</a></span>
    </div>
      <?php } $i++;
    endforeach; ?>
  </div>
  <div class="col float-right">
    <?php $i = 0;
     foreach($condiciones as $item): ?>
     <?php if($i%2!=0){ ?>
    <div class="condiciones">
      <h2><?=$item->titulo?></h2>
      <?=$item->descripcion?>
      <?php if($item->archivo_adjunto){ ?>
      <span><a href="/necesitas-ayuda/condiciones/descargar_archivo/<?=$item->codigo?>"><img src="/imagenes/template/descargar-icono.png" />Descargar documento</a></span>
      <?php } ?>
    </div>
      <?php } $i++;
    endforeach; ?>
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
