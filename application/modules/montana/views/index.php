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
      <a class="ver-mas" href="<?= URL_ADMIN . '/invierno/mapa-pistas/descargar-archivo/' . $mapa->codigo ?>">Descargar PDF</a> 
    </div>
  </div>
  <?php endforeach; ?>
  
 
  <section style="padding-top: 80px;">
    <h1 class="text-center clear" style=" margin-bottom: 46px;">Cámaras en vivo</h1>
    <div class="listado-noticias camaras">
      <article>
        <figure><img src="/imagenes/borrar/noticias.jpg" alt="Título de la noticia" width="440" height="200"></figure>
        <h3>Cámara 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.</p>
        <span class="ver-mas"><a href="#">Ver más</a></span> </article>
      <article>
        <figure><img src="/imagenes/borrar/noticias.jpg" alt="Título de la noticia" width="440" height="200"></figure>
        <h3>Cámara 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.</p>
        <span class="ver-mas"><a href="#">Ver más</a></span> </article>
    </div>
  </section>
</div>
