<?php
    $https = 'http://';
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'])
        $https = 'https://';
    $url = $https.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>


<div class="center">
  <?=$this->layout->getNav();?>
  <div class="imagen-detalle float-left" style="height:auto;"><img class="img-rounded" src="<?=URL_ADMINISTRACION.$promocion->imagen_adjunta_detalle?>" alt="<?=$promocion->nombre?>" />
    <div class="formulario-reserva movil-res" style="float:none; width:auto; padding-top:1px;">
      <?php /*?><form action="https://contenidos.nevadosdechillan.art2fly.com/cgi-bin/paso1.cgi" method="get" target="_blank">

      
        <?php /*?><input style="width:auto;" type="submit" class="btn-enviar" onClick="_gaq.push(['_trackEvent', 'estatico', 'reservar'])" value="Reservar Ahora" /> <?php */?>
      </form>
        <a class="btn-enviar" href="https://wa.me/message/QMRFXVHVW6B6D1" style="font-size:16px; height:auto; padding:8px 10px;">Chat reserva</a>
    </div>
  </div>
  <div class="texto-detalle float-right">
    <h2 style="font-size:40px; margin-top:0;"><?=$promocion->nombre?></h2>



<style>
.li_blue_promocion{
  background: #004a8e !important;
}

</style>
    
<?php if($promocion->descuento_uno!="" or $promocion->descuento_dos!="" or $promocion->descuento_tres!="" or $promocion->monto_uno!="" or  $promocion->monto_dos!="" or  $promocion->monto_tres !="" or   $promocion->codigo_promocion !="" or  $promocion->resumen_1 !="" or  $promocion->resumen_2 !="" or  $promocion->resumen_3 !="" or  $promocion->precio_anterior!="" ) { ?>
    <div class="block-dscto">
      <ul class="dcto img-rounded">
        <?php if($promocion->descuento_uno != "") { ?>
          <li style="cursor:pointer;" class="li_blue_promocion li_promocion" id="descuento_uno"><?=$promocion->descuento_uno?> </li>
        <?php } ?>
        <?php if($promocion->descuento_dos != "") { ?>
        <li  style="cursor:pointer;" class="li_promocion" id="descuento_dos"><?=$promocion->descuento_dos?> </li>
        <?php } ?>
        <?php if($promocion->descuento_tres != "") { ?>
        <li style="cursor:pointer;"  class="li_promocion" id="descuento_tres"><?=$promocion->descuento_tres?> </li>
        <?php } ?>
      </ul>
        <?php if($promocion->descuento_uno != "") { ?>
          <div class="valor-promocion" id="monto_uno">$<?=$promocion->monto_uno?> </div>
        <?php } ?>
        <?php if($promocion->descuento_dos != "") { ?>
          <div style="display:none;"  id="monto_dos" class="valor-promocion">$<?=$promocion->monto_dos?> </div>
        <?php } ?>
        <?php if($promocion->descuento_tres != "") { ?>
          <div style="display:none;"  id="monto_tres" class="valor-promocion">$<?=$promocion->monto_tres?> </div>
        <?php } ?>
      <ul class="footer-dscto">
      <?php if($promocion->codigo_promocion!="") { ?>
        <li><i><?=$promocion->codigo_promocion?></i></li>
      <?php } ?>

      <?php if($promocion->precio_anterior!="") { ?>
        <li style="text-align: right;">Antes $<?=$promocion->precio_anterior?></li>

      <?php } ?>
      </ul>
      <?php if($promocion->resumen_1):?>
        <p id="resumen_uno" ><?=html_entity_decode($promocion->resumen_1)?></p>
      <?php endif; ?>
      <?php if($promocion->resumen_2):?>
        <p style="display:none;"  id="resumen_dos" ><?=html_entity_decode($promocion->resumen_2)?></p>
      <?php endif; ?>
      <?php if($promocion->resumen_3):?>
        <p style="display:none;"  id="resumen_tres" ><?=html_entity_decode($promocion->resumen_3)?></p>
      <?php endif; ?>
    </div>
    <div class="formulario-reserva movil-res" style="float:none; width:auto; padding-top:1px;">
      <form action="https://contenidos.nevadosdechillan.art2fly.com/cgi-bin/paso1.cgi" method="get" target="_blank">
        <ul style="margin-left:0;">
        <li>
          <label for="calendario">Fecha llegada</label>
          <br />
          <input type="date" name="FECHA_CHECKIN" style="width: 150px;font-family: roboto;height: 28px;font-size: 13px;" value="<?=date('Y-m-d')?>">
        </li>
        <li class="dos">
          <label for="noches">Noches</label>
          <br />
          <!-- <input id="noches" name="NOCHES" type="text" value="1" /> -->
          <select name="NOCHES" id="noches_r">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>

          </select>

          
        </li>
        <li class="dos">
          <label for="adultos">Adultos (13 y más)</label>
          <br />
          <!-- <input name="ADULTOS" id="adultos" type="text" value="2" /> -->
          <select name="ADULTOS" id="adultos_r">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>

          </select>
        </li>
        <li>
          <label for="ninos">Niños (12-6 años)</label>
          <br />
          <!-- <input id="ninos" name="CHILDREN" type="text" value="" placeholder="6 a 12 años" /> -->
          <select name="CHILDREN" id="ninos_r">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>

          </select>
        </li>
        <li>
          <label for="infantes">Infantes (0-5 años)</label>
          <br />
          <!-- <input id="infantes" name="INFANTES" type="text" value="" placeholder="0 a 5 años" /> -->
          <select name="INFANTES" id="infantes_r">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>

          </select>
        </li>
      </ul>
      <?php /*?><img src="/imagenes/template/web-pay.jpg" style="width:351px; display:none;" /><?php */?>
      <div style="text-align:center;">
        <input style="width:auto; margin: 10px auto; padding:4px 50px; float:none;" type="submit" class="btn-enviar" onClick="_gaq.push(['_trackEvent', 'estatico', 'reservar'])" value="Reservar" />
        </div>
      </form>
    </div>
  </div>
      <?php } ?>

  <div class="texto-detalle" style="clear:both; width:auto; padding-top:30px;">    
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

//	    $(window).load(function(){
//      $('.flexslider').flexslider({
//        animation: "fade",
//		slideshowSpeed: 5000,
//		directionNav: false,
//      });
//	});
</script>
<style type="text/css">
#header{ position:relative !important;}
</style>

<script>
  $("#descuento_uno").click(function(){
	$(".li_promocion").removeClass("li_blue_promocion");
	$("#descuento_uno").addClass("li_blue_promocion");
	$('#monto_uno').show();
  $('#resumen_uno').show();
	$('#monto_dos').hide();
  $('#resumen_dos').hide();
	$('#monto_tres').hide();
  $('#resumen_tres').hide();
  });
  $("#descuento_dos").click(function(){
	$(".li_promocion").removeClass("li_blue_promocion");
	$("#descuento_dos").addClass("li_blue_promocion");
	$('#monto_uno').hide();
  $('#resumen_uno').hide();
	$('#monto_dos').show();
  $('#resumen_dos').show();
	$('#monto_tres').hide();
  $('#resumen_tres').hide();
  });
  $("#descuento_tres").click(function(){
	$(".li_promocion").removeClass("li_blue_promocion");
	$("#descuento_tres").addClass("li_blue_promocion");
	$('#monto_uno').hide();
  $('#resumen_uno').hide();
	$('#monto_dos').hide();
  $('#resumen_dos').hide();
	$('#monto_tres').show();
  $('#resumen_tres').show();
  });
</script>