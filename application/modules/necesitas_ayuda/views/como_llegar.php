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
  </div>
<div class="center wow fadeInLeft" id="tabs-container">
  <ul class="tabs-menu">
    <?php $i = 0; foreach($comoLlegar as $item): ?>
    <li<?php if($i==0){ echo ' class="current"';}?>><a href="#<?=$item->url?>"><?=$item->nombre?></a></li>
  <?php $i++; endforeach; ?>
  </ul>
  <div class="tab">
    <?php $i = 0; foreach($comoLlegar as $item): ?>
    <div id="<?=$item->url?>"<?php if($i==0){?> style="display:block;"<?php } ?> class="tab-content">
      <?=$item->descripcion?>
    </div>
  <?php $i++; endforeach; ?>
    <!--<div id="tab-2" class="tab-content">
      <p>Tomar el tren en estación central de Santiago, compra de tickets de tren en línea a través de www.terrasur.cl. Tomar el bus en terminal de buses, compra de ticket de bus en línea a través de <a href="#">www.turbus.cl</a>. Otra opcion que llega al valle las trancas y nevados de chillan es <a href="#">www.busesrembus.cl/services.php</a> </p>
    </div>
    <div id="tab-3" class="tab-content">
      <p>Tomar vuelo Santiago – Concepción (1 hora de vuelo). Luego trasladarse en vehículo desde Concepción a Nevados de Chillán (2:30 hrs. tiempo de traslado). </p>
    </div>-->
  </div>
</div>



<iframe class="wow fadeInRight" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27492.791855219188!2d-71.44251113076946!3d-36.91247789674862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x966e922ffdbd8941%3A0xde2339b65841e6da!2sHotel+Nevados+de+Chillan!5e0!3m2!1ses!2scl!4v1493734960615" width="100%" height="450" frameborder="0" style="border:0; margin-top: 30px;" allowfullscreen></iframe>
<a href="https://waze.to/lr/h63mnp1cqp" class="wase-btn" target="_blank"><img src="../../imagenes/template/wase-btn.jpg" /></a>
  <!--</div>-->
<script type="text/javascript">
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
</script>
