
<div class="imagen">
<h1 style="font-size:80px;" >Mapa de sitio</h1>
</div>

<div class="center">
  <?=$this->layout->getNav();?>
  <div class="grid">
  <ul>
      <li style="font-weight: bold;"><a href="/descubrenos/">Descúbrenos</a>
        <ul>
          <li><a href="/descubrenos/valle-las-trancas">Valle Las Trancas</a></li>
        </ul>
      </li>
      <li style="font-weight: bold;"><a href="#">Alojamiento</a>
        <ul>
          <li><a href="/alojamiento/hotel-nevados">- Hotel Nevados</a></li>
          <li><a href="/alojamiento/hotel-alto-nevados">- Hotel Alto Nevados</a></li>
          <li><a href="/valle-hermoso/#departamentos">- Dptos. Valle Hermoso</a></li>
          <li><a href="/alojamiento/promociones">- Promociones</a></li>
        </ul>
      </li>
      </ul>
  </div>
  <div class="grid">
  
 <ul>
      <li style="font-weight: bold;"><a href="/parque-de-agua/">Parque de Agua</a></li>
      <li style="font-weight: bold;"><a href="/valle-hermoso/">Valle Hermoso</a></li>
      <li style="font-weight: bold;"><a href="/invierno/">Invierno</a>
        <ul>
          <li><a href="/invierno/mapa-de-pistas">- Mapa Pista</a></li>
          <li><a href="/invierno/infonieve">- Infonieve</a></li>
          <li><a href="/invierno/escuela">- Escuela</a></li>
          <li><a href="/invierno/freeride">- FreeRide</a></li>
        </ul>
      </li>
      </ul>
  </div>
  <div class="grid">
   <ul>
  
  
      <li style="font-weight: bold;"><a href="/verano/">Verano</a>
        <ul>
          <li><a href="/verano/bikepark">- Bikepark</a></li>
          <li><a href="/verano/calendario">- Actividades</a></li>
        </ul>
      </li>
      <li class="last" style="font-weight: bold;"><a href="#">¿Necesitas ayuda?</a>
        <ul>
          <li><a href="/necesitas-ayuda/como-llegar">- ¿Cómo llegar?</a></li>
          <li><a href="/necesitas-ayuda/faqs">- Faqs</a></li>
          <li><a href="/necesitas-ayuda/contacto">- Contáctanos</a></li>
          <li><a href="/necesitas-ayuda/condiciones">- Condiciones</a></li>
        </ul>
      </li>
    </ul>
  </div>
 
</div>
<style type="text/css">
.imagen{
	width: 100%;
	height: 600px;
	background: url('/imagenes/template/slider-01.jpg');
	background-size: cover;
	margin-top: -38px;
	position: relative;
}

.imagen h1{
	position: absolute;
    top: 50%;
    left: 4%;
    font-size: 80px;
    color: #fff;
	font-family: 'summer_heartsregular';
}
nav{
	margin-top: 20px;
}
 ul{
	list-style: none;

}
 ul li{
	font-size: 14px;
	font-weight: normal;
	margin-bottom: 10px;
}
ul ul{ padding:10px 10px 20px;}
.grid{ vertical-align:top; display:inline-block; width:33%; padding:10px;}

@media screen and (max-width: 600px) {
.grid{ width:100%; padding:5px 10px;}
ul ul{ padding:10px 10px 5px;}
}
</style>
