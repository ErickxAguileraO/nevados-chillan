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
<div class="float-left formulario wow fadeInLeft">
  <p>¿Tienes alguna duda o comentario? ¡Ponte en contacto!</p>
  <form action="#" method="post" id="form-contacto">
    <ul>
      <li>
        <label>Nombre Completo:</label>
        <input type="text" name="nombre" class="validate[required]" />
      </li>
      <li>
        <label>Teléfono:</label>
        <input type="text" name="telefono" class="validate[required]" />
      </li>
      <li>
        <label>Correo:</label>
        <input type="text" name="correo" class="validate[required]" />
      </li>
      <li>
        <label>Motivo:</label>
        <select name="motivo" class="validate[required]">
          <option>Seleccione un motivo</option>
          <?php foreach($asunto as $item): ?>
            <<option value="<?=$item->codigo?>"><?=$item->nombre?></option>
          <?php endforeach; ?>
        </select>
      </li>
      <li>
        <label>Mensaje:</label>
        <textarea name="mensaje" class="validate[required]"></textarea>
        <span>Todos los campos son obligatorios</span>
        <div class="clear"></div>
      </li>
      <li>
        <input type="submit" class="btn" value="Enviar Mensaje">
      </li>
    </ul>
  </form>
</div>

<script type="text/javascript">
$(".tabs-menu a").click(function(event) {
    event.preventDefault();
    $(this).parent().addClass("current");
    $(this).parent().siblings().removeClass("current");
    var tab = $(this).attr("href");
    $(".tab-content").not(tab).css("display", "none");
    $(tab).fadeIn();
});
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "fade",
		slideshowSpeed: 5000,
		directionNav: false,
      });
 });
</script>
