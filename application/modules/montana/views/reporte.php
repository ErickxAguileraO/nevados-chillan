<style>
.intro .label {
	float: right;
	margin-top: 12px;
}
.banner-top /*.center*/ {
	position: relative;
}
.banner-top img {
	vertical-align: top;
	width: 100%;
	height: auto;
}
.banner-top .center {
	position: relative;
}
.banner-top .center span {
	color: #FFF;
	font-weight: 700;
	font-size: 16px;
	line-height: 29px;
	letter-spacing: 0.3em;
	background-color: #EE7C30;
	display: inline-block;
	padding: 10px 20px;
	position: absolute;
	left: 0;
	bottom: 120px;
}
.reporte-estado {
	justify-content: space-between;
	width: 100%;
	display: grid;
	grid-gap: 24px;
	grid-template-columns: repeat(2, 1fr);
	margin-bottom: 48px;
}
.reporte-estado .child {
	/*flex: 0 1 150px;*/
	text-align: center;
	background: #033E6C;
	border-radius: 12px;
	padding: 36px 10px;
}
.reporte-estado .child span {
	color: #FFF;
	font-weight: 700;
	font-size: 64px;
	line-height: 29px;
	margin-bottom: 36px;
	display: block;
}
.reporte-estado .child h3 {
	color: #FFF;
	font-size: 26px;
	line-height: 29px;
	margin: 0;
}
.cont-tabla-reporte {
	border-radius: 12px;
	border: 1px solid #EAEBF0;
	overflow: hidden;
	margin-bottom: 100px;
}
.cont-tabla-reporte th {
	color: #FFF;
	font-size: 16px;
	line-height: 18px;
	text-align: left;
	background-color: #033E6C;
	padding: 24px;
}
.cont-tabla-reporte td {
	color: #666A85;
	font-size: 16px;
	line-height: 18px;
	vertical-align: top;
	padding: 24px;
	border-bottom: 1px solid #EAEBF0;
}
.est-abierto, .est-cerrado, .est-agendado, .est-espera {
	font-size: 14px;
	padding: 4px 12px;
	border-radius: 16px;
}
.est-abierto {
	color: #027A48;
	background-color: #ECFDF3;
}
.est-cerrado {
	color: #B42318;
	background-color: #FEF3F2;
}
.est-agendado {
	color: #175CD3;
	background-color: #EFF8FF;
}
.est-espera {
	color: #B54708;
	background-color: #FFFAEB;
}
.cont-tabla-reporte .label { display:inline-block; width: 110px; }
.icon-circle, .icon-cube, .icon-diamond { vertical-align: middle; display:inline-block; width: 20px; height: 20px; margin-left: 12px; }

.icon-circle { background-color: #50992B; border-radius: 50%;}
.icon-cube {background-color: #2A6497;}
.icon-diamond {background-color: #000; transform: rotate(-45deg);}


.icon-blue {
	line-height: 38px;
	background-color: #DDF1FF;
	text-align:center;
	display:inline-block;
	margin: -10px 12px -10px 0;
	width: 40px;
	height: 40px;
	border-radius: 50%;
}
.icon-blue img { vertical-align: middle;}
.white-space { white-space:nowrap}

@media (min-width: 701px) {
.listado-noticias {
	justify-content: space-between;
	display: grid;
	grid-gap: 24px;
	grid-template-columns: repeat(3, 1fr);
}
}
.listado-noticias {
	margin-bottom: 28px;
}
.listado-noticias article {
	padding: 24px;
	border: 1px solid #EAEBF0;
	border-radius: 12px;
}
.listado-noticias article figure {
	margin-bottom: 24px;
}
.listado-noticias article img {
	width: 100%;
	height: auto;
	vertical-align: top;
	border-radius: 8px;
}
.ver-mas {
	font-size: 16px;
	line-height: 24px;
	display: block;
}
.ver-mas a, .ver-mas a:visited {
	background-color: #C95D2A;
	text-align: center;
	display: block;
	width: 100%;
	padding: 10px;
	margin-top: 24px;
	border-radius: 8px;
}

/********** RESPONSIVE **********/

@media (max-width: 1200px) {
h1 {
	font-size: 30px;
}
.banner-top .center {
	position: inherit;
}
.banner-top .center span {
	left: 3%;
	top: 40%;
	bottom: auto;
}
}
@media (max-width: 800px) {
.banner-top {
	overflow: hidden;
}
.banner-top figure {
	margin: 0 -150px;
}
.banner-top .center span {
	font-size: 14px;
	line-height: 20px;
	letter-spacing: 0.2em;
	padding: 8px 16px;
}
.reporte-estado .child span {
	font-size: 50px;
	margin-bottom: 30px;
}
.reporte-estado .child h3 {
	font-size: 20px;
	line-height: 24px;
}
.cont-tabla-reporte {
	overflow: auto;
}
.listado-noticias article {
	padding: 14px;
	border-radius: 10px;
}
.listado-noticias article h3 {
	font-size: 21px;
}
}
 @media (max-width: 700px) {
.reporte-estado .child h3 {
	font-size: 13px;
	line-height: 16px;
}
.listado-noticias article {
	padding: 20px;
	margin-bottom: 30px;
}
.cont-tabla-reporte table {
	min-width: 500px;
}
.cont-tabla-reporte th, .cont-tabla-reporte td {
	font-size: 15px;
	line-height: 18px;
	padding: 14px 20px;
}
.cont-tabla-reporte .label { width: 80px;}
.icon-circle, .icon-cube, .icon-diamond {
  margin-left: 8px;
}
.icon-blue {
  margin: -10px 8px -10px 0;
}
}
</style>
<div class="banner-top">
  <figure><img src="/imagenes/sitio/banner-montana.jpg" width="1920" height="406" />
    <figcaption class="center"> <span>REPORTE DE MONTAÑA</span></figcaption>
  </figure>
</div>
<div class="center">
  <?=$this->layout->getNav();?>
  <div class="intro"> <span class="label">Última actualización: 10/05/2023 - 15:07</span>
    <h1>Reporte</h1>
    <p>El BikePark funciona desde las 10:00 hasta las 16:45. La apertura parte siempre por el andarivel Tata y progresivamente el resto. El cierre parte por el andarivel Refugio y luego progresivamente el resto.
      *Disclosure: Las condiciones climáticas como visibilidad, viento, lluvia y tipo de nevada pueden cambiar drásticamente, en pocos minutos, y no quedar reflejadas, en un cierto intervalo, en este reporte. Más acá.</p>
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
