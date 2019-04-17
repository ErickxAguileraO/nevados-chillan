<!doctype html>
<html>
<head>
<meta charset="UTF-8"/>
<title><?= $landing->nombre?></title>
<!-- CSS -->
<link rel="stylesheet" type="text/css"  href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet" />
<link rel="stylesheet" type="text/css"  href="https://fonts.googleapis.com/css?family=Raleway" />
<link rel="stylesheet" type="text/css"  href="https://fonts.googleapis.com/css?family=Rock+Salt" />

<link rel="stylesheet" type="text/css"  href="/js/jquery/flexslider/flexslider.css" />
<link rel="stylesheet" type="text/css"  href="/js/jquery/validation-engine/css/validationEngine.jquery.css" />
<link rel="stylesheet" type="text/css"  href="/css/webfont/stylesheet.css" />
<link rel="stylesheet" type="text/css"  href="/css/venobox/venobox.css" />
<link rel="stylesheet" href="/css/estilos-landing.css">
<!-- js -->
<script class="jsbin" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.5.3/modernizr.min.js"></script>
<script type="text/javascript" src="/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/js/jquery/noty/packaged/jquery.noty.packaged.js"></script>
<script type="text/javascript" src="/js/jquery/validation-engine/js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="/js/jquery/validation-engine/js/languages/jquery.validationEngine-es.js"></script>
<script type="text/javascript" src="/js/jquery/flexslider/jquery.flexslider.js"></script>
<script type="text/javascript" src="/js/jquery/validador-rut/jquery.Rut.min.js"></script>
<script type="text/javascript" src="/js/sistema/landing/detalle.js"></script> 
<script type="text/javascript" src='/js/sistema/newsletter/index.js'></script> 
<script type="text/javascript" src="/js/jquery/venobox/venobox.min.js">
<!-- web fonts -->
<link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">
<script>
$(document).ready(function(){
    $('.venobox').venobox(); 
});
</script>
</head>
<?php $css = "<style>header {
	background: url(".URL_ADMINISTRACION.$landing->imagen.") no-repeat;
	background-size: cover;
	height: 500px;
	margin-bottom: 30px;
	padding-top: 20px;
}</style>"?>
<?= $css?>
<body>
<header>
  <div class="contenedor"> <img src="/imagenes/logo-header2.png" class="logo-header">
    <div class="texto">
      <h1><?= $landing->nombre?></h1>
    </div>
  </div>
</header>
<section style="padding: 30px 0;">
  <div class="contenedor">
    <div class="article">
      <h2><?= $landing->nombre?></h2>
      <p><?= $landing->descripcion?></p>
     </div>
  </div>
</section>
<section class="galeria">
  <div class="contenedor">
    <h2>Galería de Imagenes</h2>
    <ul>
        <?php foreach($landing->galeria as $aux){?>
        <li><a class="venobox" data-gall="myGallery" data-title="Titulo para imagen" href="<?= URL_ADMINISTRACION.$aux->ruta_grande ?>"><img style="width:179px; height:119px;" src="<?= URL_ADMINISTRACION.$aux->ruta_interna ?>" /></a></li>
        <?php  }?>
    </ul>
  </div>
</section>
<?php if($landing->formulario_contacto == 1){ ?>
<section style="padding: 40px 0;">
  <div class="contenedor">
    <h2>Formulario de Contacto</h2>
    <form action="#" method="post" id="form-contacto">
      <div class="izq">
        <label>Nombre Completo:</label>
        <input name="nombre" type="text"/>
        <label>Teléfono:</label>
        <input name="telefono" type="text"/>
        <label>Correo</label>
        <input name="email" type="text"/>
      </div>
      <div class="der">
        <label>Mensaje:</label>
        <textarea name="mensaje"></textarea>
        <br>
        <input type="hidden" name="landing" value="<?= $landing->codigo ?>"/>
        <input type="submit" class="btn" value="Enviar Mensaje"/>
      </div>
    </form>
    <div class="clear"></div>
  </div>
</section>
<?php } ?>
<footer>
  <div class="contenedor"> <img src="/imagenes/logo-header2.png" class="logo-footer">
    <div class="menu">
      <ul>
        <li><a href="<?= base_url()."descubrenos/" ?>">- Descúbrenos</a></li>
        <li><a href="<?= base_url()."alojamiento/hotel-nevados" ?>">- Hotel Nevados</a></li>
        <li><a href="<?= base_url()."alojamiento/hotel-alto-nevados" ?>">- Hotel Alto Nevados</a></li>
        <li><a href="<?= base_url()."descubrenos/parque-de-agua/" ?>">- Parque de Agua</a></li>
        <li><a href="<?= base_url()."valle-hermoso/" ?>">- Valle Hermoso</a></li>
        <li><a href="<?= base_url()."invierno/" ?>">- Invierno</a></li>
        <li><a href="<?= base_url()."calendario/" ?>">- Verano</a></li>
        <li><a href="<?= base_url()."necesitas-ayuda/contacto" ?>">- Contacto</a></li>
      </ul>
    </div>
    <div class="newsletter">
      <h3>Newsletter</h3>
      <form id="new-newsletter" method="POST" action="#">            
          <input  placeholder="E-mail" type="text" name="email"/>
          <input type="submit" class="btn" value="Enviar"/>
      </form>                                                  
    </div>
  </div>
  <div class="clear"></div>
</footer>
</body>
</html>