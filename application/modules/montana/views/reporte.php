
<div class="banner-top">
  <figure><img src="/imagenes/sitio/banner-montana.jpg" width="1920" height="406" />
    <figcaption class="center"> <span>REPORTE DE MONTAÑA</span></figcaption>
  </figure>
</div>
<div class="center">
  <?=$this->layout->getNav();?>
  <div class="intro"> <span class="label">Última actualización: 10/05/2023 - 15:07</span>
    <h1>Reporte</h1>
    <p>El BikePark funciona desde las 10:00 hasta las 16:45. La apertura parte siempre por el andarivel Tata y progresivamente el resto. El cierre parte por el andarivel Refugio y luego progresivamente el resto.<br />
      <strong>*Disclosure</strong>: Las condiciones climáticas como visibilidad, viento, lluvia y tipo de nevada pueden cambiar drásticamente, en pocos minutos, y no quedar reflejadas, en un cierto intervalo, en este reporte. Más acá.</p>
  </div>
  <ul class="tabs">
    <li class="active"><a href="#tab1">Andariveles</a></li>
    <li><a href="#tab2">Pistas</a></li>
  </ul>
  <div class="tab_container">
    <div class="tab_content" id="tab1">
      <div class="reporte-estado">
        <div class="child"><span>12</span>
          <h3> Andariveles abiertos</h3>
        </div>
        <div class="child"><span>42</span>
          <h3>Pistas abiertos</h3>
        </div>
      </div>
      <div class="cont-tabla-reporte">
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <thead>
            <tr>
              <th scope="col">Andarivel</th>
              <th scope="col">Horas</th>
              <th scope="col">Tipo</th>
              <th scope="col">Estado</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Dato 1</td>
              <td>08:00 - 12:00</td>
              <td>Silla triple</td>
              <td><span class="est-abierto">Abierto</span></td>
            </tr>
            <tr>
              <td>Dato 2</td>
              <td>09:00 - 13:00</td>
              <td>Silla doble</td>
              <td><span class="est-cerrado">Cerrado</span></td>
            </tr>
            <tr>
              <td>Dato 3</td>
              <td>10:00 - 14:00</td>
              <td>Arrastre</td>
              <td><span class="est-agendado">Agendado</span></td>
            </tr>
            <tr>
              <td>Dato 4</td>
              <td>15:00 - 16:00</td>
              <td>Silla doble</td>
              <td><span class="est-espera">En espera</span></td>
            </tr>
            <tr>
              <td>Dato 5</td>
              <td>16:00 - 18:00</td>
              <td>Arrastre</td>
              <td><span class="est-abierto">Abierto</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="tab_content" id="tab2">
      <div class="cont-tabla-reporte">
          <table width="100%" border="0" cellpadding="0" cellspacing="0" style="min-width: 780px;">
            <thead>
              <tr>
                <th scope="col">Nombre de la pista</th>
                <th scope="col">Condición</th>
                <th scope="col">Dificultad</th>
                <th scope="col">Condición</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Pista 1</td>
                <td><span class="est-abierto">Abierto</span></td>
                <td class="white-space"><span class="label">Aficionado</span> <span class="icon-circle"></span></td>
                <td class="white-space"><figure class="icon-blue"><img src="/imagenes/sitio/nieve.png" width="16" height="16" alt="Nieve" /></figure> 
                Fabricación de nieve</td>
              </tr>
              <tr>
                <td>Pista 2</td>
                <td><span class="est-cerrado">Cerrado</span></td>
                <td class="white-space"><span class="label">Intermedio</span> <span class="icon-cube"></span></td>
                <td class="white-space"><figure class="icon-blue"><img src="/imagenes/sitio/nieve.png" width="16" height="16" alt="Nieve" /></figure> Fabricación de nieve</td>
              </tr>
              <tr>
                <td>Pista 3</td>
                <td><span class="est-agendado">Agendado</span></td>
                <td class="white-space"><span class="label">Avanzado</span> <span class="icon-diamond"></span></td>
                <td class="white-space"><figure class="icon-blue"><img src="/imagenes/sitio/transporte.png" width="16" height="16" alt="Transporte" /></figure> Pisado</td>
              </tr>
              <tr>
                <td>Pista 4</td>
                <td><span class="est-espera">En espera</span></td>
                <td><span class="label">Experto</span> <span class="icon-diamond"></span> <span class="icon-diamond"></span></td>
                <td class="white-space"><figure class="icon-blue"><img src="/imagenes/sitio/transporte.png" width="16" height="16" alt="Transporte" /></figure> Pisado</td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
  </div>
  <h1 class="text-center clear" style=" margin-bottom: 46px;">También puede interesarte</h1>
  <div class="listado-noticias">
    <article>
      <figure><img src="/imagenes/borrar/noticias.jpg" alt="Título de la noticia" width="440" height="200" /></figure>
      <h3>Título de la noticia</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. assa mi. Aliquam in hendrerit urna.<br />
        Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus.</p>
      <span class="ver-mas"><a href="#">Ver más</a></span> </article>
    <article>
      <figure><img src="/imagenes/borrar/noticias.jpg" alt="Título de la noticia" width="440" height="200" /></figure>
      <h3>Título de la noticia</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. assa mi. Aliquam in hendrerit urna.<br />
        Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus.</p>
      <span class="ver-mas"><a href="#">Ver más</a></span> </article>
    <article>
      <figure><img src="/imagenes/borrar/noticias.jpg" alt="Título de la noticia" width="440" height="200" /></figure>
      <h3>Título de la noticia</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. assa mi. Aliquam in hendrerit urna.<br />
        Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus.</p>
      <span class="ver-mas"><a href="#">Ver más</a></span> </article>
  </div>
</div>
