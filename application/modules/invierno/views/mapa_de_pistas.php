<?php /*?><!-- inicio Slider -->
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
<!-- Fin Slider --><?php */?>
<div class="clear"></div>
<div class="center">
	<?=$this->layout->getNav();?>
	<div class="intro">
		<h2>Mapa de pista</h2>
		<p>El Centro de ski Nevados de Chillán cuenta con un total de 13 sistemas de elevación tanto de telesillas como de arrastre, que conectan un total de 35 kilómetros de pistas situadas entre los 1.500 y los 2.400 metros de altura sobre el nivel del mar.</p>
		<p>
El total de terreno esquiable está destinado a diferentes niveles, los que se dividen en un 30% de pistas para principiantes, incluyendo la nueva Magic Carpet dentro de la Zona Debutantes, un 40 % de pistas nivel medio que incluye a Tres Marías, la pista más larga de Sudamérica con un total de 13 Km y por último un 30% de pistas nivel experto para los más experimentados donde el desnivel de la pista alcanza hasta los 700 metros.</p>
	</div>
	<div class="clear"></div>
</div>
<div class="center">
	<!--<img src="<?=URL_ADMINISTRACION.$mapa->imagen_adjunta?>" />-->
	<div class="botones-pistas">
		<h3>Pistas</h3>
		<a id="negra" class="btn-pista">Expertos</a>
		<a id="roja" class="btn-pista">Avanzados</a>	
		<a id="azul" class="btn-pista">Intermedio</a>
		<a id="verde" class="btn-pista">Principiantes</a>
		<a id="violeta" class="btn-pista">Circuito motos</a>				
	</div>
	<div class="botones-servicios">
		<h3>Otros</h3>
		<a id="andariveles" class="btn-pista">Andariveles</a>
		<a id="servicios" class="btn-pista">Sitios</a>
		<a id="areas" class="btn-pista">Áreas</a>					
	</div>
	<h3 class="sub">Haz click en una sección para ocultarla o mostrarla en el mapa.</h3>

	<div class="mapa">
		<img src="/imagenes/pistas/fondo-mapa.png" style="position: relative;">	
		<img id="pista-azul" src="/imagenes/pistas/pistas-azules.png" style="z-index: 99">	
		<img id="pista-roja" src="/imagenes/pistas/pistas-rojas.png" style="z-index: 99">

		<img id="pista-verde" src="/imagenes/pistas/pistas-verdes.png" style="z-index: 99">	
		<img id="pista-negra" src="/imagenes/pistas/pistas-negras.png" style="z-index: 99">

		<img id="pista-violeta" src="/imagenes/pistas/pistas-violetas.png" style="z-index: 99">

		<img id="pista-andariveles" src="/imagenes/pistas/mapa-andariveles.png" style="z-index: 99">
		<img id="pista-servicios" src="/imagenes/pistas/mapa-servicios.png" style="z-index: 99">
		<img id="pista-areas" src="/imagenes/pistas/mapa-areas.png" style="z-index: 9">	
	</div>
	<div class="btn-pista" style="background: #02284b; margin-top: 30px;"><a href="invierno/descargar_archivo/" style="background: none;">Descargar mapa</a></div>



</div>

<style type="text/css">
#header{ position:relative !important;}


.botones-pistas{
	display: inline-block;;
	width: 45%;
	vertical-align: top;
}
.botones-servicios{
	display: inline-block;;
	width: 45%;
}
.botones-pistas h3, .botones-servicios h3{
	text-transform: uppercase;
    font-size: 20px;
    margin-bottom: 20px;
    color: #042847;
}
.btn-pista{
	font-size: 13px;
    text-transform: uppercase;
    padding: 10px 40px;
    border-radius: 0;
    border: none;
    background: #fa7702;
    cursor: pointer;
    display: inline-block;
    margin: 0 10px 10px 0;
    -webkit-transition: all 0.2s ease-in-out;
	-moz-transition: all 0.2s ease-in-out;
	-ms-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
}
.btn-pista:hover{
	text-decoration: none;
	background-color: rgb(245, 117, 23);
}
.mapa{
	margin-top: 30px;
	position: relative;
}
.mapa img{
	width: 100%;
	position: absolute;
	left: 0;
	top: 0;
}
.sub{
	font-size: 15px;
    margin-top: 20px;
    color: #042947;
    text-transform: uppercase;
}
.active{
	background-color: #00274c;
}

</style>
<script type="text/javascript">
$(window).load(function(){
//	$('.flexslider').flexslider({
//		animation: "fade",
//		slideshowSpeed: 5000,
//		directionNav: false,
//	});


//Pista Azul
$("#azul").click(function(){
$("#pista-azul").fadeToggle();
});
$("#azul").click(function(){
$("#azul").toggleClass("active");
});

//Pista Roja
$("#roja").click(function(){
$("#pista-roja").fadeToggle();
});
$("#roja").click(function(){
$("#roja").toggleClass("active");
});

//Pista verde
$("#verde").click(function(){
$("#pista-verde").fadeToggle();
});
$("#verde").click(function(){
$("#verde").toggleClass("active");
});

//Pista Negra
$("#negra").click(function(){
$("#pista-negra").fadeToggle();
});
$("#negra").click(function(){
$("#negra").toggleClass("active");
});

//Violeta
$("#violeta").click(function(){
$("#pista-violeta").fadeToggle();
});
$("#violeta").click(function(){
$("#violeta").toggleClass("active");
});

//Andariveles
$("#andariveles").click(function(){
$("#pista-andariveles").fadeToggle();
});
$("#andariveles").click(function(){
$("#andariveles").toggleClass("active");
});

//Servicios
$("#servicios").click(function(){
$("#pista-servicios").fadeToggle();
});
$("#servicios").click(function(){
$("#servicios").toggleClass("active");
});

//Areas
$("#areas").click(function(){
$("#pista-areas").fadeToggle();
});
$("#areas").click(function(){
$("#areas").toggleClass("active");
});
});
</script>
