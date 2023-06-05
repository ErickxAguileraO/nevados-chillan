<div class="banner-top">
  <figure><img src="/imagenes/sitio/banner-montana-2.jpg" width="1920" height="406" />
    <figcaption class="center"> <span>MAPA DE PISTAS</span></figcaption>
  </figure>
</div>
<div class="center">
  <?=$this->layout->getNav();?>
  <section class="intro">
    <h1>Mapa de pistas</h1>
    <?= $encabezadoMapaPista->texto ?>
  </section>

  <?php foreach ($mapas as $mapa): ?>
  <div class="contenedor cont-secciones">
    <figure class="picture"> <img src="<?= '/admin' . $mapa->imagen_adjunta ?>" width="679" height="408" alt="Mapa" /> </figure>
    <div class="txt-block-contenido center-home">
      <h1><?= $mapa->nombre ?></h1>
      <p><?= $mapa->descripcion ?></p>
      <a class="ver-mas" href="<?= '/montana/mapa-pistas/descargar-archivo/' . $mapa->codigo ?>">Descargar PDF</a> 
    </div>
  </div>
  <?php endforeach; ?>
  
 
  <<!-- Camara en vivo -->
  <div class="center">
      <?=$this->layout->getNav();?>
      <div class="intro">
        <h2>Cámaras en vivo</h2>
        <p>Mira lo que pasa en vivo</p>
      </div>
        <?php  $i=0;
          foreach($camaras as $item):
            if($i%2==0){ ?>
            <div class="camara float-left wow fadeInLeft">
            <?php
            }else{ ?>
          <div class="camara float-right wow fadeInRight">
            <?php } ?>
            <h3><?=$item->nombre?></h3>
            <p><?=$item->descripcion?></p>
            <iframe width="587" height="550" src="<?=$item->iframe?>"></iframe>
          </div>
        <?php  $i++;
        endforeach; ?>
      <div class="clear"></div>
  </div>
</div>
