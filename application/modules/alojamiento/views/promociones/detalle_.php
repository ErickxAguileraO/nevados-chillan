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
  <div class="imagen-detalle float-left" style="height:auto;"><img src="<?=URL_ADMINISTRACION.$promocion->imagen_adjunta_detalle?>" alt="Diseñados y construidos para trabajo pesado" />
  
  <div class="formulario-reserva" style="float:none; width:auto; padding-top:40px;">
    <form action="https://contenidos.nevadosdechillan.art2fly.com/cgi-bin/paso1.cgi" method="get" target="_blank">
      <ul>
        <li>
          <label for="calendario">Fecha llegada</label>
          <br />
          <input id="calendario" name="FECHA_CHECKIN" type="text" value="<?=date('Y-m-d')?>" />
       
        </li>
        <li>
          <label for="noches">Noches</label>
          <br />
          <input id="noches" name="NOCHES" type="text" value="1" />
        </li>
        <li>
          <label for="adultos">Adultos</label>
          <br />
          <input name="ADULTOS" id="adultos" type="text" value="2" />
        </li>
        <li>
          <label for="ninos">Niños</label>
          <br />
          <input id="ninos" name="CHILDREN" type="text" value="" placeholder="6 a 12 años" />
        </li>
        <li>
          <label for="infantes">Infantes</label>
          <br />
          <input id="infantes" name="INFANTES" type="text" value="" placeholder="0 a 5 años" />
        </li>
      </ul>
      <img src="/imagenes/template/web-pay.jpg" style="width:351px;" />
      <input type="submit" class="btn-enviar" onClick="_gaq.push(['_trackEvent', 'estatico', 'reservar'])" value="Reservar Ahora" />
    </form>
  </div>
  </div>
  
  <div class="texto-detalle float-right">
    <h2><?=$promocion->nombre?></h2>
    <div class="social-media">
      <ul>
        <li>Compartir en:</li>
        <li>
            <a class="popup-rs" href='https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>&t=<?php echo $promocion->nombre; ?>&p[summary]=contenido', 'facebook-share-dialog', 'width=626,height=436'>
                <img src="/imagenes/template/share-facebook.png" />
            </a>
        </li>
        <li>
            <a class="popup-rs" href="https://twitter.com/share?text=<?php echo $promocion->nombre; ?>&url=<?php echo $url; ?>" title="Twitter" >
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
     <?php ?>
    <?php
    $promocion->descripcion = str_replace('&lt;','<',$promocion->descripcion);
    $promocion->descripcion = str_replace('&gt;','>',$promocion->descripcion);
    echo $promocion->descripcion = str_replace('/imagenes/ckfinder','/admin/imagenes/ckfinder/',$promocion->descripcion)?>
    <?php if($archivos){?>
      <?php foreach($archivos as $item): ?>
    <span class="cond-span"><img src="/imagenes/template/arrow.png" class="arrow" /><a href="/alojamiento/promocion/descargar_archivo/<?php echo $item->codigo?>">Ver condiciones de esta promoción</a></span>
  <?php endforeach; ?>
    <?php } ?>
  </div>
  
  
  
<div style="clear:both; padding-top:20px;">
<h2>Promociones relacionadas</h2>

<div id="portfoliolist">
    
    <?php  foreach($promociones as $item){
    
    
      $class = null;
      
      foreach($item->hoteles as $z => $hotel){
      
        $class .= " ";
        $class .= "h".$hotel->hotel;
        
        if($z == 0){
            
           if($item->evento){
            
             $class .= " h4 "; 
            
           }       
            
        }  
      
       }
      ?>
      
     <div class="portfolio<?=$class?>" data-cat="">
  
    
      <div class="portfolio-wrapper"> <a href="/alojamiento/promocion/<?=$item->url?>"><img src="<?=URL_ADMINISTRACION.$item->imagen_adjunta_banner?>" alt="" /></a> </div>
    </div>
    
  <?php } ?>
  
  
  
  </div>  
     
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


<!-- Selector promociones -->
<script type="text/javascript">
	$(function () {
		var filterList = {
			init: function () {

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

	    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "fade",
		slideshowSpeed: 5000,
		directionNav: false,
      });
	});
	</script>


