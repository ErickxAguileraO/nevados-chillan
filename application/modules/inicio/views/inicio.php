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

<div class="clear"></div>
</div>
<div class="center reserva wow bounceIn">
  <div class="texto-reserva"> <span>No pierdas tiempo</span>
    <p>Haz tu reserva ahora</p>
    <small>y disfruta de los mejores departamentos y hoteles</small></div>
  <div class="formulario-reserva">
    <form action="https://contenidos.nevadosdechillan.art2fly.com/cgi-bin/paso1.cgi" method="get" target="_blank">
      <ul>
        <li>
          <label for="calendario">Fecha llegada</label><br />
          <input id="calendario" name="FECHA_CHECKIN" type="text" value="<?=date('Y-m-d')?>" />
        </li>
        <li>
          <label for="noches_r">Noches</label><br />
          <input id="noches_r" name="NOCHES" type="text" value="1" />
        </li>
        <li>
          <label for="adultos_r">Adultos</label><br />
          <input name="ADULTOS" id="adultos_r" type="text" value="2" />
        </li>
        <li>
          <label for="ninos_r">Niños</label><br />
          <input name="CHILDREN" type="text" id="ninos_r" value="" placeholder="6 a 12 años" />
        </li>
        <li>
          <label for="infantes_r">Infantes</label><br />
          <input name="INFANTES" type="text" id="infantes_r" value="" placeholder="0 a 5 años" />
        </li>
      </ul>
      <?php /*?><img src="/imagenes/template/web-pay.jpg" width="351" height="75" /><?php */?>
      <input type="submit" class="btn-enviar" onclick="_gaq.push(['_trackEvent', 'estatico', 'reservar'])" value="Reservar Ahora" />
    </form>
  </div>
  <div class="clear"></div>
</div>
<div class="contenedor">   
  <!-- Inicio primer Acceso Directo -->  
  <?php if(count($accesosDirectos)>0){ ?>
  <div class="grid float-left border-right wow fadeInLeft">
    <figure class="effect-sadie" style="background-image: url(<?=URL_ADMINISTRACION.$accesosDirectos[0]->imagen_adjunta?>) !important;">
      <figcaption>
      <div class="block-bottom">
        <h3><?=$accesosDirectos[0]->titulo?></h3>
        <p><?=$accesosDirectos[0]->resumen?><br />          
          <br />
          <span><img src="/imagenes/template/arrow.png" class="arrow" /><a href="<?=$accesosDirectos[0]->link?>">Más Información</a></span></p></div>
      </figcaption>
    </figure>
  </div>
  <?php } ?>  
  <!-- Fin Primer Acceso Directo --> 
  
  <!-- Inicio Calendario -->  
  <div class="calendario wow fadeInRight">
    <h2>Calendario de Actividades</h2>
    <?php if(count($calendarios)>0){

      foreach($calendarios as $item): ?>
    <div class="actividad-calendario">
      <div class="fecha">
        <div class="icono-calendario"><span>
          <?php $dia = explode("-",$item->fecha_inicio); echo $dia[2];?>
          </span> </div>
        <span>
        <?=mes_corto($item->fecha_inicio,1,false)?>
        </span> </div>
      <div class="Datos">
        <h3><a href="calendario/<?=$item->codigo?>-<?=$item->url?>"><?=$item->titulo?></a></h3>
        <span><img src="/imagenes/template/reloj-icono.png" />Del
        <?=fecha_corta($item->fecha_inicio,1)?>
        a las <?=extrae_hora($item->hora_inicio)?> al <?=fecha_corta($item->fecha_termino,1)?> a las <?=extrae_hora($item->hora_termino,'')?> </span>
        <p><?=$item->resumen?></p>
        <span><img src="/imagenes/template/marker-icono.png" />
        <?=$item->lugar?>
        </span> </div>
    </div>
    <?php endforeach; ?>
    <span class="more float-left"><img src="/imagenes/template/arrow.png" class="arrow" /><a href="calendario">Ver todas las actividades</a></span>
    <?php }else echo "<p>No hay actividades</p>"; ?>
  </div>  
  <!-- Fin Calendario -->
  
  <div class="clear"></div>
</div>
<div class="contenedor"> 
  
  <!-- inicio accesos director 4 -->  
  <?php if(count($accesosDirectos)>1){ $i=0;
    foreach($accesosDirectos as $item):
      if($i>0){ ?>
  <div class="grid2 float-left border-right wow fadeInLeft">
    <figure class="effect-sadie" style="background-image: url(<?=URL_ADMINISTRACION.$item->imagen_adjunta_2?>) !important;">
      <figcaption>
      <div class="block-bottom">
        <h2><?=$item->titulo?></h2>
        <p><?=$item->resumen?><br />
          <br />
          <span><img src="/imagenes/template/arrow.png" class="arrow" /><a href="<?=$item->link?>">Más Información</a></span></p>
          </div>
      </figcaption>
    </figure>
  </div>
  <?php }

  $i++;

endforeach;

} ?>
  
  <!-- Fin accesos director 4 -->
  
  <div class="clear"></div>
</div>

<!-- Inicio Noticias -->

<?php if(count($noticias)>0){ ?>
<div class="center noticias">
<h2>Noticias</h2>
<p>Mantente al día con las últimas informaciones de nuestro centro.</p>
<?php $i = 0; foreach($noticias as $item): ?>
<?php  if($i%2==0){ ?>
<div class="articulo float-left wow fadeInLeft">
  <?php }else{ ?>
  <div class="articulo float-right wow fadeInRight">
    <?php } ?>
    <a href="/noticias/<?=str_replace("-","/",$item->fecha_publicacion)?>/<?=$item->url?>"> <img src="<?=URL_ADMINISTRACION.$item->noticias_imagenes[0]->ruta_interna?>" class="img-noticia" width="180" /> </a>
    <div class="resumen"> <span>
      <?=invierte_fecha($item->fecha_publicacion,'/')?>
      </span>
      <h3> <a href="/noticias/<?=str_replace("-","/",$item->fecha_publicacion)?>/<?=$item->url?>">
        <?=$item->titulo?>
        </a> </h3>
      <p>
        <?=$item->resumen?>
      </p>
      <span><img src="../../imagenes/template/arrow.png" class="arrow" /><a href="/noticias/<?=str_replace("-","/",$item->fecha_publicacion)?>/<?=$item->url?>">Más Información</a></span> </span> </div>
  </div>
  <?php $i++; endforeach; ?>
  <div class="clear"></div>
  <span class="float-right"><img src="/imagenes/template/arrow.png" class="arrow" /><a href="/noticias/">Ver todas las noticias</a></span> </div>
<?php } ?>

<!-- Fin Noticias --> 

<!-- fin contenedor --> 

<script type="text/javascript">

  $(function() {

    $("#calendario").datepicker({dateFormat: 'yy-mm-dd'});

    $('.ui-datepicker').addClass('notranslate');

  } );

















</script> 
<script type="text/javascript">

    $(window).load(function(){

      $('.flexslider').flexslider({

        animation: "fade",

		slideshowSpeed: 5000,

		directionNav: false,

      });

    });

  </script> 
<script src="/js/jquery/wow//wow.js"></script>
<link rel="stylesheet" href="/js/jquery/wow/animate.css">
<style>

        .wow:first-child {

            visibility: hidden;

        }

    </style>
<script type="text/javascript">

        wow = new WOW(

            {

                animateClass: 'animated',

                offset:       100

            }

        );

        wow.init();

    </script> 
