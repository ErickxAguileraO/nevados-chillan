<div id="header">
  <div class="center"> 
    <!-- [LOGO] -->
    <div id="logo">
      <?php if(isset($home_indicador)){ ?>
      <h1>Centro de Ski, Resort de montaña y thermal spa |Nevados de Chillán</h1>
      <?php } else{ ?>
      <a href="/" title="Inicio: Tecla de Acceso 0" accesskey="0"><img src="/imagenes/template/Logo_Nevados_Blanco_2.png" alt="Centro de Ski, Resort de montaña y thermal spa |Nevados de Chillán" /></a>
      <?php } ?>
    </div>
    <p class="txt-menu-bar-responsivo">MENÚ</p>
    <!-- [MENU] -->    
    <div class="nav" id="nav">
      <ul class="menu">
        <li><a href="/descubrenos/" title="Descúbrenos: Tecla de Acceso 1" accesskey="1">Descúbrenos</a></li>
        <li><a href="/experiencias/" title="Experiencias: Tecla de Acceso 2" accesskey="2">Experiencias</a></li>
        <li><a href="/descubrenos/#hoteles" title="Alojamiento: Tecla de Acceso 3" accesskey="3">Hoteles</a>
          <ul class="submenu">
            <li><a href="/alojamiento/hotel-nevados">Hotel Nevados</a></li>
            <li><a href="/alojamiento/hotel-alto-nevados">Hotel Alto Nevados</a></li>
          </ul>
        </li>
        <li><a href="/valle-hermoso/" title="Valle Hermoso: Tecla de Acceso 4" accesskey="4">Valle Hermoso</a></li>
        <li><a href="/parque-de-agua/" title="Parque de agua: Tecla de Acceso 5" accesskey="5">Parque de agua</a></li>
        <li><a href="#" title="Actividades de invierno">Invierno</a>
          <ul class="submenu">
            <li><a href="/invierno/">Centro de Ski</a></li>
            <li><a href="/invierno/mapa-de-pistas">Mapa de pistas</a></li>
            <li><a href="/invierno/infonieve">Reporte de Montaña</a></li>
            <li><a href="/invierno/escuela/">Escuela Ski</a></li>
            <li><a href="/invierno/backcountry">Backcountry</a></li>
            <li><a href="/zona_debutantes/">Zona Debutantes</a></li>
          </ul>
        </li>
        <li><a href="/bikepark" >Bikepark</a>
          <!-- <ul class="submenu">
            <li><a href="/bikepark">BikePark Nevados</a></li>
            <li><a href="/verano/">Outdoor</a></li>
          </ul> -->
        </li>
        <li><a href="#" title="Ayuda: Tecla de Acceso 8" accesskey="8">Ayuda</a>
          <ul class="submenu sub-ayuda">
            <!-- <li><a href="/necesitas-ayuda/como-llegar/">Como llegar</a></li> -->
            <li><a href="/necesitas-ayuda/faqs/">Preguntas frecuentes</a></li>
            <!-- <li><a href="/necesitas-ayuda/condiciones/">Condiciones</a></li> -->
            <li><a href="/necesitas-ayuda/contacto/">Contacto</a></li>
            <li><a href="/necesitas-ayuda/trabaja-con-nosotros/">Trabaja con nosotros</a></li>
          </ul>
        </li>
      </ul>
    </div>

  </div>
</div>
<script type="text/javascript">
	var navigation = responsiveNav("#nav");
</script>

<div class="background-reserva-header">
  <div class="center">
    <div class="top-figure">
      <figure><a href="/invierno/infonieve"><img src="/imagenes/sitio/infonieve.png" width="64" height="46" alt="Infonieve" />
        <figcaption>INFONIEVE</figcaption>
        </a> </figure>
      <figure><a href="https://www.skipassnevadosdechillan.com/" target="_blank"><img src="/imagenes/sitio/skipass.png" width="64" height="46" alt="TICKET" />
        <figcaption>TICKET</figcaption>
        </a> </figure>
      <figure><a href="/alojamiento/promociones/"><img src="/imagenes/sitio/promociones.png" width="64" height="46" alt="Promociones" />
        <figcaption>PROMOCIONES</figcaption>
        </a></figure>
    </div>
    <div class="formulario-reserva">
      <form action="https://contenidos.nevadosdechillan.art2fly.com/cgi-bin/paso1.cgi" method="get" target="_blank">
        <fieldset>
          <?php /*?><legend>Reservar Ahora</legend><?php */?>
          <ul>
            <li class="ancho-calendar">
              <label for="calendario">Fecha llegada</label>
              <br />
              <input type="date" name="FECHA_CHECKIN" value="<?=date('Y-m-d')?>" />
              <!--<input type="text" id="example">-->

               <!--<input type="text" id="datepicker" onchange="console.log(d.getDate())" autocomplete="off">-->

              <!--<input id="calendario" translate="no"  name="FECHA_CHECKIN" type="text" value="<?=date('Y-m-d')?>" />-->
            </li>
            <li>
              <label for="noches_r">Noches</label>
              <br />
              <!-- <input id="noches_r" name="NOCHES" type="text" value="1" /> -->
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
            <li>
              <label for="adultos_r">Adultos <br>(13 y más)</label>
              <br />
              <!-- <input name="ADULTOS" id="adultos_r" type="text" value="2" /> -->
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
              <label for="ninos_r">Niños <br>(12-6 años)</label>
              <br />
              <!-- <input name="CHILDREN" type="text" id="ninos_r" value="" placeholder="6 a 12 años" /> -->
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
              <label for="infantes_r">Infantes <br>(0-5 años)</label>
              <br />
              <!-- <input name="INFANTES" type="text" id="infantes_r" value="" placeholder="0 a 5 años" /> -->
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


        <!-- Datepicker initialization -->
        <script>
(function(){

  'use strict';
  var dayNamesShort = ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'];
  var monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
  var icon = '<svg viewBox="0 0 512 512"><polygon points="268.395,256 134.559,121.521 206.422,50 411.441,256 206.422,462 134.559,390.477 "/></svg>';
  var root = document.getElementById('picker');
  var dateInput = document.getElementById('date');
  var altInput = document.getElementById('alt');
  var doc = document.documentElement;
  function format ( dt ) {
    return Picker.prototype.pad(dt.getDate()) + ' ' + monthNames[dt.getMonth()].slice(0,3) + ' ' + dt.getFullYear();
  }
  function show ( ) {
    root.removeAttribute('hidden');
  }
  function hide ( ) {
    root.setAttribute('hidden', '');
    doc.removeEventListener('click', hide);
  }
  function onSelectHandler ( ) {
    var value = this.get();
    if ( value.start ) {
      dateInput.value = value.start.Ymd();
      altInput.value = format(value.start);
      hide();
    }
  }
  var picker = new Picker(root, {
    min: new Date(dateInput.min),
    max: new Date(dateInput.max),
    icon: icon,
    twoCalendars: false,
    dayNamesShort: dayNamesShort,
    monthNames: monthNames,
    onSelect: onSelectHandler
  });
  root.parentElement.addEventListener('click', function ( e ) { e.stopPropagation(); });
  dateInput.addEventListener('change', function ( ) {
    if ( dateInput.value ) {
      picker.select(new Date(dateInput.value));
    } else {
      picker.clear();
    }
  });
  altInput.addEventListener('focus', function ( ) {
    altInput.blur();
    show();
    doc.addEventListener('click', hide, false);
  });
}());


        </script>
