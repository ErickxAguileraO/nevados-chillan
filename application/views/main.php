<div id="header">
  <div class="center"> 
    <!-- [LOGO] -->
    <div id="logo">
      <?php if(isset($home_indicador)){ ?>
      <h1>Centro de Ski, Resort de montaña y thermal spa |Nevados de Chillán</h1>
      <?php } else{ ?>
      <a href="/" title="Inicio: Tecla de Acceso 0" accesskey="0"><img src="/imagenes/template/logo-header.png" alt="Centro de Ski, Resort de montaña y thermal spa |Nevados de Chillán" /></a>
      <?php } ?>
    </div>
    <!-- [MENU] -->
    
    <div class="nav" id="nav">
      <ul>
        <li><a href="/descubrenos/" title="Descúbrenos: Tecla de Acceso 1" accesskey="1">Descúbrenos</a></li>
        <li><a href="/descubrenos/" title="Programas: Tecla de Acceso 1" accesskey="1">Programas</a></li>
        <li><a href="/descubrenos/#hoteles">Hoteles</a></li>
        <li><a href="/valle-hermoso/">Valle Hermoso</a></li>
        <li><a href="/parque-de-agua/" title="Productos: Tecla de Acceso 3" accesskey="3">Parque de agua</a></li>
        <li><a href="/invierno/" title="Productos: Tecla de Acceso 3" accesskey="3">Actividades de invierno</a></li>
        <li><a href="/verano/" title="Productos: Tecla de Acceso 3" accesskey="3">Actividades de verano</a></li>
        <li><a href="/necesitas-ayuda/faqs/" title="Productos: Tecla de Acceso 3" accesskey="3">Preguntas frecuentes</a></li>
      </ul>
    </div>
    <?php /*?><div class="nav" id="nav">
<ul>
<li><a href="/descubrenos/" title="Quiénes somos: Tecla de Acceso 1" accesskey="1">Descúbrenos</a>
  <ul>
    <li><a href="/descubrenos/#hoteles">Hoteles</a></li>
    <li><a href="/descubrenos/#disfruta-de-nuestros-maravillosos-spa">Spa</a></li>
    <li><a href="/descubrenos/#parque-de-agua-termal">Aguas Termales</a></li>
    <li><a href="/descubrenos/#ski">SKI</a></li>
    <li><a href="/descubrenos/#bikepark">Bikepark</a></li>
    <li><a href="/descubrenos/historia">Nuestra Historia</a></li>
    <li><a href="/descubrenos/valle-las-trancas">Valle Las Trancas</a></li>
  </ul>
</li>
<li><a href="#" title="Noticias: Tecla de Acceso 2" accesskey="2">Alojamiento</a>
  <ul>
    <li><a href="/alojamiento/hotel-nevados">Hotel Nevados</a></li>
    <li><a href="/alojamiento/hotel-alto-nevados">Hotel Alto Nevados</a></li>
    <li><a href="/valle-hermoso/#departamentos">Dptos. Valle Hermoso</a></li>
    <li><a href="/alojamiento/promociones">Promociones</a></li>
  </ul>
</li>
<li><a href="/parque-de-agua/" title="Productos: Tecla de Acceso 3" accesskey="3">Parque de agua</a>
  <ul>
    <li><a href="/parque-de-agua/">Conoce el Parque</a></li>
    <li><a href="/parque-de-agua/#servicios">Servicios</a></li>
    <li><a href="/parque-de-agua/#valores">Valores</a></li>
  </ul>
</li>
<li><a href="/valle-hermoso/" title="Documentos: Tecla de Acceso 4" accesskey="4">Valle Hermoso</a>
  <ul>
    <li><a href="/valle-hermoso/">Conócenos</a></li>
    <li><a href="/valle-hermoso/#actividades">Actividades</a></li>
    <li><a href="/valle-hermoso/#departamentos">Departamentos</a></li>
    <li><a href="/valle-hermoso/#spa-valle-hermoso">Spa</a></li>
    <li><a href="/valle-hermoso/#ski-valle-hermoso">SKI</a></li>
  </ul>
</li>
<li><a href="/invierno/" title="Servicios: Tecla de Acceso 5" accesskey="5">Invierno</a>
  <ul>
    <li><a href="/invierno/mapa-de-pistas">Mapa de pistas</a></li>
    <li><a href="/invierno/infonieve">Infonieve</a></li>
    <li><a href="/invierno/escuela">Escuela</a></li>
    <li><a href="/invierno/#rental">Rental</a></li>
    <li><a href="/invierno/#cafeteria">Cafetería</a></li>
    <li><a href="/invierno/backcountry">Backcountry</a></li>
    <li><a href="/invierno/#servicios">Servicios</a></li>
    <li><a href="/invierno/#valores">Valores tickets</a></li>
    <li><a href="/invierno/#promociones">Promociones</a></li>
  </ul>
</li>
<li><a href="/verano/" title="Contáctenos: Tecla de Acceso 6" accesskey="6" class="last">Verano</a>
  <ul>
    <li><a href="/bikepark">BikePark</a></li>
    <li><a href="/calendario">Actividades</a></li>
    <li><a href="/verano/#valores">Valores tickets</a></li>
    <?php if(isset($super_promociones_verano)){?>
    <li><a href="/verano/#promociones">Promociones</a></li>
    <?php } ?>
  </ul>
</li>
<li>
<a href="#" title="Servicios: Tecla de Acceso 5" accesskey="5" class="last">¿Necesitas ayuda?</a>
<ul>
  <li><a href="/necesitas-ayuda/como-llegar">¿Cómo llegar?</a></li>
  <li><a href="/necesitas-ayuda/faqs">Faqs</a></li>
  <li><a href="/necesitas-ayuda/contacto">Contáctanos</a></li>
  <li><a href="/necesitas-ayuda/condiciones">Condiciones</a></li>
  </li>
</ul>
</div>
<div class="clear"></div>
<input type="checkbox" id="op" />
<div class="lower">
  <label for="op">Menú</label>
</div>
<div class="overlay overlay-hugeinc">
  <label for="op"></label>
  <img src="/imagenes/template/logo-header.png" class="logo-menu" alt="Pyme Base Framework 3.0, Versión 2015" />
  <div class="idioma2"> <span><img src="/imagenes/template/en-vivo.png" alt="En vivo"><a title="En vivo" href="/en-vivo/">EN VIVO</a></span> <span class="redes-resp">Siguenos en: <br />
    <?php if(@$generales->youtube){ ?>
    <a title="Youtube" href="<?=$generales->youtube?>" target="_blank"><img src="/imagenes/template/youtube-icono.png" alt="Youtube" /></a>
    <?php } ?>
    <?php if(@$generales->instagram){ ?>
    <a title="Instagram" href="<?=$generales->instagram?>" target="_blank"><img src="/imagenes/template/instagram-icono.png" alt="Instagram" /></a>
    <?php }?>
    <?php if(@$generales->twitter){ ?>
    <a title="twitter" href="<?=$generales->twitter?>" target="_blank"><img src="/imagenes/template/twitter-icono.png" alt="twitter" /></a>
    <?php }?>
    <?php if(@$generales->facebook){ ?>
    <a title="Facebook" href="<?=$generales->facebook?>" target="_blank"><img src="/imagenes/template/facebook-icono.png" alt="Facebook" /></a>
    <?php }?>
    </span>
    <ul>
      <?php if($this->session->userdata('idioma') == 'en') {?>
      <li><a lang="en" href="#googtrans(en)"><img height="13" width="13" alt="English" src="/imagenes/template/bandera-inglaterra.png" /> Inglés</a>
        <?php }?>
      </li>
      <?php if($this->session->userdata('idioma') == 'es' || !$this->session->userdata('idioma')) {?>
      <li  lang="es" class="idioma"><a href="/#googtrans(es)"><img height="13" width="13" alt="Español" src="/imagenes/template/bandera-espana.png" /> Español</a>
        <?php }?>
      </li>
      <?php if($this->session->userdata('idioma') == 'pt') {?>
      <li><a lang="fr" href="#googtrans(pt)" ><img height="13" width="13" alt="Portuguese" src="/imagenes/template/bandera-brasil.png" /> Portugués</a>
        <?php }?>
      </li>
    </ul>
    <ul id="idioma2">
      <li><img height="13" width="13" alt="English" src="/imagenes/template/bandera-inglaterra.png" /><a id="en" lang="en" href="#googtrans(en)" > Inglés</a></li>
      <li><img height="13" width="13" alt="Spanish" src="/imagenes/template/bandera-espana.png" /><a lang="es" id="es" href="#googtrans(es)" > Español</a></li>
      <li><img height="13" width="13" alt="Portuguese" src="/imagenes/template/bandera-brasil.png" /> <a id="pt" lang="fr" href="#googtrans(pt)">Portugués</a></li>
    </ul>
  </div>
  <nav>
    <ul style="text-align: left;">
      <li><a href="/descubrenos/">Descúbrenos</a>
        <ul>
          <li><a href="/descubrenos/valle-las-trancas">Valle Las Trancas</a></li>
        </ul>
      </li>
      <li><a href="#">Alojamiento</a>
        <ul>
          <li><a href="/alojamiento/hotel-nevados">- Hotel Nevados</a></li>
          <li><a href="/alojamiento/hotel-alto-nevados">- Hotel Alto Nevados</a></li>
          <li><a href="/valle-hermoso/#departamentos">- Dptos. Valle Hermoso</a></li>
          <li><a href="/alojamiento/promociones">- Promociones</a></li>
        </ul>
      </li>
      <li><a href="/parque-de-agua/">Parque de Agua</a></li>
      <li><a href="/valle-hermoso/">Valle Hermoso</a></li>
      <li><a href="/invierno/">Invierno</a>
        <ul>
          <li><a href="/invierno/mapa-de-pistas">- Mapa Pista</a></li>
          <li><a href="/invierno/infonieve">- Infonieve</a></li>
          <li><a href="/invierno/escuela">- Escuela</a></li>
          <li><a href="/invierno/backcountry">- Backcountry</a></li>
          <li><a href="/invierno/#valores">- Valores Tickets</a></li>
        </ul>
      </li>
      <li><a href="#">Verano</a>
        <ul>
          <li><a href="/bikepark">- Bikepark</a></li>
          <li><a href="/calendario/">- Actividades</a></li>
        </ul>
      </li>
      <li class="last"><a href="#">¿Necesitas ayuda?</a>
        <ul>
          <li><a href="/necesitas-ayuda/como-llegar">- ¿Cómo llegar?</a></li>
          <li><a href="/necesitas-ayuda/faqs">- Faqs</a></li>
          <li><a href="/necesitas-ayuda/contacto">- Contáctanos</a></li>
          <li><a href="/necesitas-ayuda/condiciones">- Condiciones</a></li>
        </ul>
      </li>
    </ul>
  </nav>
</div><?php */?>
  </div>
</div>
<script type="text/javascript">
	var navigation = responsiveNav("#nav");
</script>
<div class="background-reserva-header">
  <div class="center">
    <div class="top-figure">      
          <figure><a href="#"><img src="/imagenes/sitio/infonieve.png" width="64" height="46" alt="Infonieve" />
            <figcaption>Infonieve</figcaption></a>
          </figure>
       
          <figure><a href="#"><img src="/imagenes/sitio/skipass.png" width="64" height="46" alt="SKIPASS" />
            <figcaption>SKIPASS</figcaption></a>
          </figure>
     
          <figure><a href="#"><img src="/imagenes/sitio/promociones.png" width="64" height="46" alt="Promociones" />
            <figcaption>Promociones</figcaption></a>
          </figure>
    
    </div>
    <div class="formulario-reserva">
      <form action="https://contenidos.nevadosdechillan.art2fly.com/cgi-bin/paso1.cgi" method="get" target="_blank">
        <fieldset>
          <legend>Reservar Ahora</legend>
          <ul>
            <li>
              <label for="calendario">Fecha llegada</label>
              <br />
              <input id="calendario" name="FECHA_CHECKIN" type="text" value="<?=date('Y-m-d')?>" />
            </li>
            <li>
              <label for="noches_r">Noches</label>
              <br />
              <input id="noches_r" name="NOCHES" type="text" value="1" />
            </li>
            <li>
              <label for="adultos_r">Adultos</label>
              <br />
              <input name="ADULTOS" id="adultos_r" type="text" value="2" />
            </li>
            <li>
              <label for="ninos_r">Niños</label>
              <br />
              <input name="CHILDREN" type="text" id="ninos_r" value="" placeholder="6 a 12 años" />
            </li>
            <li>
              <label for="infantes_r">Infantes</label>
              <br />
              <input name="INFANTES" type="text" id="infantes_r" value="" placeholder="0 a 5 años" />
            </li>
            <li>
              <input type="submit" class="btn-enviar" onclick="_gaq.push(['_trackEvent', 'estatico', 'reservar'])" value="Reservar" />
            </li>
          </ul>
          <?php /*?><img src="/imagenes/template/web-pay.jpg" width="351" height="75" /><?php */?>
        </fieldset>
      </form>
    </div>
  </div>
</div>
