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
  <?php if($noticias) { $i = 0; ?>
    <?php  foreach($noticias as $n) { ?>
    <?php  if($i%2==0){ ?>
      <div class="clear"></div>
    <article class="articulo float-left wow fadeInLeft"> <a href="/noticias/<?=str_replace("-","/",$n->fecha_publicacion)?>/<?=$n->url?>"><img src="<?=URL_ADMINISTRACION.$n->noticias_imagenes[0]->ruta_interna?>" width="181" class="img-noticia" /></a> <div class="resumen"><span><?=invierte_fecha($n->fecha_publicacion,'/')?></span>
      <?php }else{ ?>
  <article class="articulo float-right wow fadeInRight"> <a href="/noticias/<?=str_replace("-","/",$n->fecha_publicacion)?>/<?=$n->url?>"><img src="<?=URL_ADMINISTRACION.$n->noticias_imagenes[0]->ruta_interna?>" width="181" class="img-noticia" /></a> <div class="resumen"><span><?=invierte_fecha($n->fecha_publicacion,'/')?></span>
    <?php } ?>

    <h3><a href="/noticias/<?=str_replace("-","/",$n->fecha_publicacion)?>/<?=$n->url?>"><?php echo $n->titulo ?></a></h3>
    <p><?php echo $n->resumen ?></p>
    <span><img src="../../imagenes/template/arrow.png" class="arrow" /><a href="/noticias/<?=str_replace("-","/",$n->fecha_publicacion)?>/<?=$n->url?>">Más Información</a></span></div> </article>
  <?php $i++; } ?>
  <?php } ?>
  <article class="articulo float-right wow fadeInRight"><a href="/noticias/prensa/"><img src="../../imagenes/template/prensa.jpg" style="width: 100%" /></a></article>
  <div class="clear"></div>
  <div id="paginacion" class="paginacion"> <?php echo $this->pagination->create_links()?> </div>

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
