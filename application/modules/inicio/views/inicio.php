<?php if($popup->estado) { ?>
<div id="txt-pop" class="overlay-pop-up">
    <div class="center-pop-up">
        <div class="contenido-pop-up">
            <div class="background-pop-up">
                <button type="button" class="txt-close">Cerrar</button>
                <h2 style="text-align:center; padding-bottom: 10px;"><?=$popup->titulo?></h2>
                <div class="editable">
                    <p style="text-align:center; padding-bottom: 10px;"><?=$popup->descripcion?></p>
                </div>
                <?php if( !empty($popup->link) ){ ?>
                <p style="text-align:center; padding-bottom: 10px;"><img style="float: none; margin-bottom: -2px;"
                        src="/imagenes/template/arrow.png" class="arrow"><a href="<?=$popup->link?>" target="_blank">Ver
                        más información</a></p>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('.overlay-pop-up').click(function() {
        $("#txt-pop").fadeOut(400);
    });
});
</script>
<?php } ?>
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
                        <span>
                            <?=$item->antetitulo?>
                        </span>
                        <?php if($item->link){ ?>
                    </a>
                    <?php }?>
                    <h2><?=$item->titulo?></h2>
                    <p><?=$item->bajada?></p>
                </div>
                <div class="video-slider float-right">
                    <iframe width="100%" height="300px" src="<?=str_replace('watch?v=','embed/',$item->url_video)?>"
                        frameborder="0" allowfullscreen></iframe>
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

<?php /*?><div class="center reserva wow bounceIn">

</div><?php */?>

<div class="contenedor cont-secciones">

    <!-- inicio accesos director 4 -->
    <?php if(count($accesosDirectos)>0){ $i=0;
    foreach($accesosDirectos as $item):
      if($i>=0){ ?>


        <?php if($item->orden % 2 == 0) {?>
            <!-- texto derecha -->
            <div class="wow fadeInLeft">
            <figure class="effect-sadie"
                style="background-image: url(<?=URL_ADMINISTRACION.$item->imagen_adjunta_2?>) !important; height: 320px; position: relative; background-size:cover;">

            </figure>
            </div>
            <div class="txt-block-contenido center-home">
                <h1><?=$item->titulo?></h1>
                <p><?=$item->resumen?></p>
                <a href="<?=$item->link?>">Leer más</a>
            </div>



        <?php }else{?>
            <!-- texto izquierda -->
            <div class="txt-block-contenido center-home">
                <h1><?=$item->titulo?></h1>
                <p><?=$item->resumen?></p>
                <?php if($item->link){?>
                    <a href="<?=$item->link?>">Leer más</a>
                <?php } ?>
            </div>
    
            <div class="wow fadeInLeft">
                <figure class="effect-sadie"
                    style="background-image: url(<?=URL_ADMINISTRACION.$item->imagen_adjunta_2?>) !important; height: 320px; position: relative; background-size:cover;">

                </figure>
            </div>
        <?php } ?>
    <?php }

  $i++;

endforeach;



} ?>


</div>

<!-- Inicio Noticias -->
<?php if(count($noticias)>0){ ?>
<div class="center noticias">
    <h2 class="text-center text-70" style="padding-top:40px;">Novedades</h2>
    <?php /*?><p>Mantente al día con las últimas informaciones de nuestro centro.</p><?php */?>
    <div class="carrusel responsive">
        <?php $i = 0; foreach($noticias as $item): ?>
        <div>
            <article>
                <figure> <a href="/noticias/<?=str_replace("-","/",$item->fecha_publicacion)?>/<?=$item->url?>"><img
                            src="<?=URL_ADMINISTRACION.$item->noticias_imagenes[0]->ruta_interna?>" width="180" /></a>
                </figure>
                <div class="resumen">
                    <div class="table-block">
                        <div class="block-bottom">
                            <time>
                                <?=invierte_fecha($item->fecha_publicacion,'/')?>
                            </time>
                            <h3><a href="/noticias/<?=str_replace("-","/",$item->fecha_publicacion)?>/<?=$item->url?>">
                                    <?=$item->titulo?>
                                </a></h3>
                            <p>
                                <?=$item->resumen?>
                            </p>
                            <?php /*?><span><a
                                    href="/noticias/<?=str_replace("-","/",$item->fecha_publicacion)?>/<?=$item->url?>">Más
                                    Información</a></span><?php */?>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <?php $i++; endforeach; ?>
    </div>
    <div style=" overflow:hidden;">
        <span class="float-right"><img src="/imagenes/template/arrow.png" class="arrow" /><a href="/noticias/">Ver todas
                las noticias</a></span>
    </div>
    <?php } ?>
</div>
<!-- Fin Noticias -->


<div class="center" style="display: flex; flex-direction: column; justify-content: center;">
    <h1 class="text-center" style="padding-top:40px;">Nuestras Redes Sociales</h2>
    <!-- Opcion 1 -->
    <iframe src="https://snapwidget.com/embed/1029012" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; height:850px"></iframe>
    <!-- Opcion 2 -->
    <div class="grid-instagram">
      <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CqGgsaMPWIv/"></blockquote>
      <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CqBUwf6PNVv/"></blockquote>
      <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/Cpz2jEesLgm/"></blockquote>

      <script async src="//www.instagram.com/embed.js"></script>
    </div>
</div>
<!-- fin contenedor -->
<?php /*?><style>
.wow:first-child {
    visibility: hidden;
}
</style><?php */?>