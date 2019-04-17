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
          <h2> <?=$item->titulo?></h2>
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

<div class="center">
  <?=$this->layout->getNav();?>
</div>
<div class="container">
  <ul id="filters" class="clearfix">
    <!--
    <li><span id="ctodos" class="filter active" data-filter=".h1, .h2, .h3, .h4">Todos</span></li>
     <?php /*if($hotelcito == 1){?>
    <li><span id="cnevados" class="filter" data-filter=".h1" onload="filterList">Hotel Nevados</span></li>
     <?php }*/?>
    <li><span id="canevados" class="filter" data-filter=".h2">Hotel Alto Nevados</span></li>
    <li><span id="cvalle" class="filter" data-filter=".h3">Dptos. Valle Hermoso</span></li>
    <li><span id="ceventos" class="filter" data-filter=".h4">Eventos</span></li>
  </ul>   -->
    <li><span id="ctodos" class="filter active" data-filter=".h99">Todos</span></li>
    <?php foreach($categorias as $key => $cae){ ?>
    <li><span id="cat-<?= $key+1 ?>" class="filter" data-filter=".h<?= $key+1 ?>"><?= $cae->nombre ?></span></li>
    <?php } ?>
  </ul>
  <div id="portfoliolist">
    <?php  foreach($promociones as $item){
      $class = null;
      foreach($categorias as $z => $cae){
        $class .= " ";
        $class .= "h".$item->evento;
        if($z == 0){
           if($item->evento){
             $class .= " h99 ";
           }
        }
      } ?>
    <div class="portfolio<?=$class?>" data-cat="">
      <div class="portfolio-wrapper"> <a href="/alojamiento/promocion/<?=$item->url?>"><img src="<?=URL_ADMINISTRACION.$item->imagen_adjunta_banner?>" alt="<?=$item->evento?>" /></a> </div>
    </div>
    <?php } ?>
  </div>
</div>
<script type="text/javascript">
$(function() {
    $.ajax({
        url: '/alojamiento/promociones/categoria_sesion/',
        type: 'post',
        dataType: 'json',
        data: "categoria='ctodos'",
        success: function(json) {}
    });

    $(".filter").click(function() {
        var id = $(this).attr('id');
        $.ajax({
            url: '/alojamiento/promociones/categoria_sesion/',
            type: 'post',
            dataType: 'json',
            data: "categoria=" + id,
            success: function(json) {}
        });
    });
});
</script> 

<!-- Selector promociones --> 
<script type="text/javascript">
$(function() {
    var filterList = {
        init: function() {

            // MixItUp plugin
            // http://mixitup.io
            $('#portfoliolist').mixItUp({
                selectors: {
                    target: '.portfolio',
                    filter: '.filter'
                },
                load: {
                    filter: '.h1, .h2, .h3, .h4'
                }
            });
        }
    };
    // Run the show!
    filterList.init();
});

//$(window).load(function() {
//    $('.flexslider').flexslider({
//        animation: "fade",
//        slideshowSpeed: 5000,
//        directionNav: false,
//    });
//});
</script> 
<style type="text/css">
#header{ position:relative !important;}
</style>
