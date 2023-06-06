<div class="banner-top">
  <figure><img src="/imagenes/sitio/banner-montana-2.jpg" width="1920" height="406" />
    <figcaption class="center"> <span>MAPA DE PISTAS</span></figcaption>
  </figure>
</div>
<div class="center">
  <?=$this->layout->getNav();?>
  <div class="intro">
    <h1>Horarios operación</h1>
    <p><?= $estadoCamino->horarios ?><br />
    <?= $estadoCamino->observaciones ?></p>
  </div>
  <div class="reporte-tiempo-block">
    <div class="child"> <span class="info"><?= $estadoCamino->estado_de_camino == 1 ? 'ABIERTO' : 'CERRADO' ?></span><br />
      <span class="etiqueta">Estado del camino</span> </div>
    <div class="child"> <span class="info"><?= $estadoCamino->transito ?></span><br />
      <span class="etiqueta">Tránsito</span> </div>
    <div class="child"> <span class="info"><?= $estadoCamino->porte_de_cadenas ?></span><br />
      <span class="etiqueta">Porte de cadenas</span> </div>
    <div class="child"> <span class="info"><?= $estadoCamino->uso_de_cadenas ?></span><br />
      <span class="etiqueta">Uso de cadenas</span> </div>
    <div class="child"> <span class="info"><?= $estadoCamino->valor_campo_personalizado ?></span><br />
      <span class="etiqueta"><?= $estadoCamino->nombre_campo_personalizado ?></span> </div>
  </div>
  <div class="cont-resumen">
    <h3 class="txt-caption">Reporte de nieve</h3>
    <ul>
      <li><span><?= $nieve->resumen_condiciones_nieve ?></span> Resumen de condiciones<br />
        de nieve</li>
      <li><span><?= $nieve->nieve_caida_24h ?></span>En las últimas 24 horas</li>
      <li><span><?= $nieve->nieve_caida_48h ?></span>En las últimas 48 horas</li>
      <li><span><?= $nieve->ultimos_siete_dias ?></span>En los últimos 7 días</li>
      <li><span><?= $nieve->profundidad_base ?></span>Profundidad de la base</li>
      <li><span><?= $nieve->nieve_acumulada ?></span>Total de nieve caída<br />
        en la temporada</li>
    </ul>
  </div>
  <!-- <div class="cont-tabla-resumen">
    <h3 class="txt-caption">Reporte del tiempo - HOY</h3>
    <div class="block-col-grid">
      <div class="col-grid">
        <div class="pronostico">
          <ul class="time">
            <li>9 de mayo</li>
            <li>15:27</li>
          </ul>
          <div class="cont-clima">
            <table border="0" style="min-width:220px; margin:auto;">
              <tr>
                <td rowspan="2" class="img-clima"><img src="/imagenes/sitio/n-lluvia1.png" width="70" height="62" alt="LLuvia" /></td>
                <td>18º C</td>
              </tr>
              <tr>
                <td>Nevados de Chillán</td>
              </tr>
            </table>
          </div>
          <span class="etiqueta">Última actualización: 15:25 <img class="coolicon" src="/imagenes/sitio/coolicon.png" width="15" height="15" alt="Actualizado" /></span> </div>
      </div>
      <div class="col-grid"><span class="txt-th" style="border-bottom: 1px solid #C95D2A; width: 190px; padding:20px 2px;">1°C <sub class="float-sub"><img src="/imagenes/sitio/a-up.png" width="14" height="14" alt="Max" /> max</sub></span><br />
        <span class="txt-th" style="width: 190px; padding:20px 2px;">-7°C <sub class="float-sub"><img src="/imagenes/sitio/a-up.png" width="14" height="14" alt="Min" /> min</sub></span></div>
      <div class="col-grid text-center"><span class="txt-th">10 <sub>Km/h</sub></span><br />
        <span class="txt-td "><img src="/imagenes/sitio/a-right.png" width="14" height="14" alt="Viento" /> Viento</span></div>
      <div class="col-grid text-center"><span class="txt-th">3900<sub>cm</sub></span><br />
        <span class="txt-td">Altura helada</span></div>
    </div>
    <h3 class="txt-caption">Reporte del tiempo - SEMANA</h3>
    <div class="block-col-grid">
      <div class="col-grid">
        <div class="pronostico">
          <ul class="time">
            <li>9 de mayo</li>
            <li>15:27</li>
          </ul>
          <div class="cont-clima">
            <table border="0" style="min-width:220px; margin:auto;">
              <tr>
                <td rowspan="2" class="img-clima"><img src="/imagenes/sitio/n-lluvia1.png" width="70" height="62" alt="LLuvia" /></td>
                <td>18º C</td>
              </tr>
              <tr>
                <td>Nevados de Chillán</td>
              </tr>
            </table>
          </div>
          <span class="etiqueta">Última actualización: 15:25 <img class="coolicon" src="/imagenes/sitio/coolicon.png" width="15" height="15" alt="Actualizado" /></span> </div>
      </div>
      <div class="col-grid"><span class="txt-th" style="border-bottom: 1px solid #C95D2A; width: 190px; padding:20px 2px;">1°C <sub class="float-sub"><img src="/imagenes/sitio/a-up.png" width="14" height="14" alt="Max" /> max</sub></span><br />
        <span class="txt-th" style="width: 190px; padding:20px 2px;">-7°C <sub class="float-sub"><img src="/imagenes/sitio/a-up.png" width="14" height="14" alt="Min" /> min</sub></span></div>
      <div class="col-grid text-center"><span class="txt-th">10 <sub>Km/h</sub></span><br />
        <span class="txt-td "><img src="/imagenes/sitio/a-right.png" width="14" height="14" alt="Viento" /> Viento</span></div>
      <div class="col-grid text-center"><span class="txt-th">3900<sub>cm</sub></span><br />
        <span class="txt-td">Altura helada</span></div>
    </div>
    <div class="block-col-grid">
      <div class="col-grid">
        <div class="pronostico">
          <ul class="time">
            <li>10 de mayo</li>
            <li>15:27</li>
          </ul>
          <div class="cont-clima">
            <table border="0" style="min-width:220px; margin:auto;">
              <tr>
                <td rowspan="2" class="img-clima"><img src="/imagenes/sitio/n-sol.png" width="72" height="70" alt="LLuvia" /></td>
                <td>18º C</td>
              </tr>
              <tr>
                <td>Nevados de Chillán</td>
              </tr>
            </table>
          </div>
          <span class="etiqueta">Última actualización: 15:25 <img class="coolicon" src="/imagenes/sitio/coolicon.png" width="15" height="15" alt="Actualizado" /></span> </div>
      </div>
      <div class="col-grid"><span class="txt-th" style="border-bottom: 1px solid #C95D2A; width: 190px; padding:20px 2px;">1°C <sub class="float-sub"><img src="/imagenes/sitio/a-up.png" width="14" height="14" alt="Max" /> max</sub></span><br />
        <span class="txt-th" style="width: 190px; padding:20px 2px;">-7°C <sub class="float-sub"><img src="/imagenes/sitio/a-up.png" width="14" height="14" alt="Min" /> min</sub></span></div>
      <div class="col-grid text-center"><span class="txt-th">10 <sub>Km/h</sub></span><br />
        <span class="txt-td "><img src="/imagenes/sitio/a-right.png" width="14" height="14" alt="Viento" /> Viento</span></div>
      <div class="col-grid text-center"><span class="txt-th">3900<sub>cm</sub></span><br />
        <span class="txt-td">Altura helada</span></div>
    </div>
    <div class="block-col-grid">
      <div class="col-grid">
        <div class="pronostico">
          <ul class="time">
            <li>11 de mayo</li>
            <li>15:27</li>
          </ul>
          <div class="cont-clima">
            <table border="0" style="min-width:220px; margin:auto;">
              <tr>
                <td rowspan="2" class="img-clima"><img src="/imagenes/sitio/n-nieve.png" width="70" height="70" alt="LLuvia" /></td>
                <td>18º C</td>
              </tr>
              <tr>
                <td>Nevados de Chillán</td>
              </tr>
            </table>
          </div>
          <span class="etiqueta">Última actualización: 15:25 <img class="coolicon" src="/imagenes/sitio/coolicon.png" width="15" height="15" alt="Actualizado" /></span> </div>
      </div>
      <div class="col-grid"><span class="txt-th" style="border-bottom: 1px solid #C95D2A; width: 190px; padding:20px 2px;">1°C <sub class="float-sub"><img src="/imagenes/sitio/a-up.png" width="14" height="14" alt="Max" /> max</sub></span><br />
        <span class="txt-th" style="width: 190px; padding:20px 2px;">-7°C <sub class="float-sub"><img src="/imagenes/sitio/a-up.png" width="14" height="14" alt="Min" /> min</sub></span></div>
      <div class="col-grid text-center"><span class="txt-th">10 <sub>Km/h</sub></span><br />
        <span class="txt-td "><img src="/imagenes/sitio/a-right.png" width="14" height="14" alt="Viento" /> Viento</span></div>
      <div class="col-grid text-center"><span class="txt-th">3900<sub>cm</sub></span><br />
        <span class="txt-td">Altura helada</span></div>
    </div>
    <div class="block-col-grid">
      <div class="col-grid">
        <div class="pronostico">
          <ul class="time">
            <li>12 de mayo</li>
            <li>15:27</li>
          </ul>
          <div class="cont-clima">
            <table border="0" style="min-width:220px; margin:auto;">
              <tr>
                <td rowspan="2" class="img-clima"><img src="/imagenes/sitio/n-lluvia.png" width="82" height="70" alt="LLuvia" /></td>
                <td>18º C</td>
              </tr>
              <tr>
                <td>Nevados de Chillán</td>
              </tr>
            </table>
          </div>
          <span class="etiqueta">Última actualización: 15:25 <img class="coolicon" src="/imagenes/sitio/coolicon.png" width="15" height="15" alt="Actualizado" /></span> </div>
      </div>
      <div class="col-grid"><span class="txt-th" style="border-bottom: 1px solid #C95D2A; width: 190px; padding:20px 2px;">1°C <sub class="float-sub"><img src="/imagenes/sitio/a-up.png" width="14" height="14" alt="Max" /> max</sub></span><br />
        <span class="txt-th" style="width: 190px; padding:20px 2px;">-7°C <sub class="float-sub"><img src="/imagenes/sitio/a-up.png" width="14" height="14" alt="Min" /> min</sub></span></div>
      <div class="col-grid text-center"><span class="txt-th">10 <sub>Km/h</sub></span><br />
        <span class="txt-td "><img src="/imagenes/sitio/a-right.png" width="14" height="14" alt="Viento" /> Viento</span></div>
      <div class="col-grid text-center"><span class="txt-th">3900<sub>cm</sub></span><br />
        <span class="txt-td">Altura helada</span></div>
    </div>
    <div class="block-col-grid">
      <div class="col-grid">
        <div class="pronostico">
          <ul class="time">
            <li>13 de mayo</li>
            <li>15:27</li>
          </ul>
          <div class="cont-clima">
            <table border="0" style="min-width:220px; margin:auto;">
              <tr>
                <td rowspan="2" class="img-clima"><img src="/imagenes/sitio/n-trueno.png" width="74" height="70" alt="LLuvia" /></td>
                <td>18º C</td>
              </tr>
              <tr>
                <td>Nevados de Chillán</td>
              </tr>
            </table>
          </div>
          <span class="etiqueta">Última actualización: 15:25 <img class="coolicon" src="/imagenes/sitio/coolicon.png" width="15" height="15" alt="Actualizado" /></span> </div>
      </div>
      <div class="col-grid"><span class="txt-th" style="border-bottom: 1px solid #C95D2A; width: 190px; padding:20px 2px;">1°C <sub class="float-sub"><img src="/imagenes/sitio/a-up.png" width="14" height="14" alt="Max" /> max</sub></span><br />
        <span class="txt-th" style="width: 190px; padding:20px 2px;">-7°C <sub class="float-sub"><img src="/imagenes/sitio/a-up.png" width="14" height="14" alt="Min" /> min</sub></span></div>
      <div class="col-grid text-center"><span class="txt-th">10 <sub>Km/h</sub></span><br />
        <span class="txt-td "><img src="/imagenes/sitio/a-right.png" width="14" height="14" alt="Viento" /> Viento</span></div>
      <div class="col-grid text-center"><span class="txt-th">3900<sub>cm</sub></span><br />
        <span class="txt-td">Altura helada</span></div>
    </div>
    <div class="block-col-grid">
      <div class="col-grid">
        <div class="pronostico">
          <ul class="time">
            <li>14 de mayo</li>
            <li>15:27</li>
          </ul>
          <div class="cont-clima">
            <table border="0" style="min-width:220px; margin:auto;">
              <tr>
                <td rowspan="2" class="img-clima"><img src="/imagenes/sitio/n-viento.png" width="82" height="66" alt="LLuvia" /></td>
                <td>18º C</td>
              </tr>
              <tr>
                <td>Nevados de Chillán</td>
              </tr>
            </table>
          </div>
          <span class="etiqueta">Última actualización: 15:25 <img class="coolicon" src="/imagenes/sitio/coolicon.png" width="15" height="15" alt="Actualizado" /></span> </div>
      </div>
      <div class="col-grid"><span class="txt-th" style="border-bottom: 1px solid #C95D2A; width: 190px; padding:20px 2px;">1°C <sub class="float-sub"><img src="/imagenes/sitio/a-up.png" width="14" height="14" alt="Max" /> max</sub></span><br />
        <span class="txt-th" style="width: 190px; padding:20px 2px;">-7°C <sub class="float-sub"><img src="/imagenes/sitio/a-up.png" width="14" height="14" alt="Min" /> min</sub></span></div>
      <div class="col-grid text-center"><span class="txt-th">10 <sub>Km/h</sub></span><br />
        <span class="txt-td "><img src="/imagenes/sitio/a-right.png" width="14" height="14" alt="Viento" /> Viento</span></div>
      <div class="col-grid text-center"><span class="txt-th">3900<sub>cm</sub></span><br />
        <span class="txt-td">Altura helada</span></div>
    </div>
  </div> -->


  <!-- Clima -->
  <div class="clima-nevados">
    <iframe src="https://www.meteoblue.com/es/tiempo/widget/daily/nevados-de-chill%c3%a1n_chile_3895086?geoloc=fixed&days=7&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&precipunit=MILLIMETER&coloured=coloured&pictoicon=0&pictoicon=1&maxtemperature=0&maxtemperature=1&mintemperature=0&mintemperature=1&windspeed=0&windspeed=1&windgust=0&windgust=1&winddirection=0&winddirection=1&uv=0&humidity=0&precipitation=0&precipitation=1&precipitationprobability=0&precipitationprobability=1&spot=0&pressure=0&layout=light"  
    frameborder="0" scrolling="NO" allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups allow-popups-to-escape-sandbox"></iframe>
    <h3 class="titulo-clima">Reporte del tiempo SEMANAL</h3>
  </div>

  <!-- <style>
    #wf-weatherfeed{
      width: 100% !important;
    }
    #wf-weatherfeed iframe{
      width: 100% !important;  
    }
    #wf-location {
      display: none !important;
      opacity: 0 !important;
      visibility: hidden !important;
      background-color: #033E6C !important;
      height: 129px !important;
    }
    #wf-weatherfeed, table#wf-table {
      font-family: 'Terminal Dosis', sans-serif !important;
      width: 100% !important;
    }
  </style>
  <link href="//es.snow-forecast.com/stylesheets/feed.css" media="screen" rel="stylesheet" type="text/css" />
  <div id="wf-weatherfeed">
    <iframe allowtransparency="true" frameborder="0" height="272" marginheight="0" marginwidth="0" scrolling="no" 
    src="//es.snow-forecast.com/resorts/Chillan/forecasts/feed/mid/m" style="overflow:hidden;border:none;" width="469">
    <p>Su navegador no da soporte a iframes</p>
    </iframe>
  </div> -->

    <!-- Camara en vivo -->
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

  <div class="contenedor cont-secciones" style="border-top: 1px solid #C95D2A; padding-top:50px;">
  <?php if($noticiaClima){ ?>
        <figure class="picture"> <img src="/admin<?= $imagenNoticiaClima->ruta_interna ?>" width="679" height="408" alt="Mapa" /> </figure>
        <div class="txt-block-contenido center-home">
        <h1><?= end($noticiaClima)->titulo ?></h1>
        <p><?= end($noticiaClima)->descripcion ?></p>
        <a class="ver-mas" href="<?= end($noticiaClima)->enlace ?>">Ver más</a> </div>
  <?php } else{ ?>
        <tr>
            <td colspan="4" style="text-align: center;"><i>No hay noticias</i></td>
        </tr>
  <?php } ?>
    
  </div>
</div>
