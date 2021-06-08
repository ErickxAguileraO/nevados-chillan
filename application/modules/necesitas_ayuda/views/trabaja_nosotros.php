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
  
  <div class="float-left form-trabajo wow fadeInRight ">
    <h2>Trabaja con nosotros</h2>
    <p>Únete al equipo de Nevados de Chillán.</p>
    <form method="post" id="form-trabaja-nosotros" action="#" enctype="multipart/form-data">
      <ul>
        <li>
          <label>Nombre Completo:</label>
          <br />
          <input type="text" name="nombre" class="validate[required]" />
        </li>
        <li>
          <label>Teléfono:</label>
          <br />
          <input type="text" name="telefono" class="validate[required]" />
        </li>
        <li>
          <label>Correo:</label>
          <br />
          <input type="text" name="correo" />
        </li>
        <li>
          <label>Área de trabajo:</label>
          <br />
          <select name="area" class="validate[required]">
            <option>Seleccione área</option>
            <?php foreach($areas as $item): ?>
              <<option value="<?=$item->codigo?>"><?=$item->nombre?></option>
            <?php endforeach; ?>
          </select>
        </li>
        <li>
          <label>CV:</label>
          <br />
          <input type="file" name="adjunto" class="validate[required]" />
          <span>Todos los campos son obligatorios</span>
          <div class="clear"></div>
        </li>
        <li>
          <input type="submit" class="btn" value="Enviar Mensaje">
        </li>
      </ul>
    </form>
  </div>
</div>
<!-- fin center -->
<script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "fade",
		slideshowSpeed: 5000,
		directionNav: false,
      });
 });
</script>
