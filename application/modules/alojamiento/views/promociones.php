<div class="flexslider">
  <ul class="slides">
    <li style="background: url(../../imagenes/template/slider-01.jpg) no-repeat;">
      <div class="center">
        <div class="full-texto-slider float-left"> <span>Descubre</span>
          <h2>La montana</h2>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p>
        </div>
      </div>
    </li>
    <li style="background: url(./../imagenes/template/slider-02.jpg) no-repeat;">
      <div class="center">
        <div class="full-texto-slider float-left"> <span>Disfruta nuestras </span>
          <h2 style="font-size: 80px;">Aguas Termales</h2>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p>
        </div>
      </div>
    </li>
  </ul>
</div>
<div class="center">
  <?=$this->layout->getNav();?>
</div>
<div class="container">
  <ul id="filters" class="clearfix">
    <li><span class="filter active" data-filter=".app, .card, .icon, .logo, .web">Todos</span></li>
    <li><span class="filter" data-filter=".app">Hotel Nevados</span></li>
    <li><span class="filter" data-filter=".card">Hotel Alto Nevados</span></li>
    <li><span class="filter" data-filter=".icon">Valle Hermoso</span></li>
  </ul>
  <div id="portfoliolist">
    <div class="portfolio logo" data-cat="logo">
      <div class="portfolio-wrapper"> <a href="/alojamiento/detalle-promocion"><img src="../../imagenes/template/promo1.jpg" alt="" /></a> </div>
    </div>
    <div class="portfolio app" data-cat="icon">
      <div class="portfolio-wrapper"> <img src="../../imagenes/template/promo2.jpg" alt="" /> </div>
    </div>
    <div class="portfolio web" data-cat="logo">
      <div class="portfolio-wrapper"> <img src="../../imagenes/template/promo2.jpg" alt="" /> </div>
    </div>
    <div class="portfolio card" data-cat="logo">
      <div class="portfolio-wrapper"> <img src="../../imagenes/template/promo2.jpg" alt="" /> </div>
    </div>
    <div class="portfolio app" data-cat="logo">
      <div class="portfolio-wrapper"> <img src="../../imagenes/template/promo2.jpg" alt="" /> </div>
    </div>
    <!--<div class="portfolio card" data-cat="card">
      <div class="portfolio-wrapper"> <img src="../../imagenes/template/promo2.jpg" alt="" /> </div>
    </div>
    <div class="portfolio logo" data-cat="logo">
      <div class="portfolio-wrapper"> <img src="../../imagenes/template/promo2.jpg" alt="" /> </div>
    </div>
    <div class="portfolio logo" data-cat="logo">
      <div class="portfolio-wrapper"> <img src="../../imagenes/template/promo2.jpg" alt="" /> </div>
    </div>
    <div class="portfolio icon" data-cat="web">
      <div class="portfolio-wrapper"> <img src="../../imagenes/template/promo2.jpg" alt="" /> </div>
    </div>
    <div class="portfolio web" data-cat="web">
      <div class="portfolio-wrapper"> <img src="../../imagenes/template/promo2.jpg" alt="" /> </div>
    </div>
    <div class="portfolio icon" data-cat="icon">
      <div class="portfolio-wrapper"> <img src="../../imagenes/template/promo2.jpg" alt="" /> </div>
    </div>
    <div class="portfolio web" data-cat="web">
      <div class="portfolio-wrapper"> <img src="../../imagenes/template/promo2.jpg" alt="" /> </div>
    </div>
    <div class="portfolio icon" data-cat="icon">
      <div class="portfolio-wrapper"> <img src="../../imagenes/template/promo2.jpg" alt="" /> </div>
    </div>
    <div class="portfolio icon" data-cat="icon">
      <div class="portfolio-wrapper"> <img src="../../imagenes/template/promo2.jpg" alt="" /> </div>
    </div>
    <div class="portfolio web" data-cat="web">
      <div class="portfolio-wrapper"> <img src="../../imagenes/template/promo2.jpg" alt="" /> </div>
    </div>
    <div class="portfolio logo" data-cat="logo">
      <div class="portfolio-wrapper"> <img src="../../imagenes/template/promo2.jpg" alt="" /> </div>
    </div>
    <div class="portfolio logo" data-cat="logo">
      <div class="portfolio-wrapper"> <img src="../../imagenes/template/promo2.jpg" alt="" /> </div>
    </div>
    <div class="portfolio icon" data-cat="icon">
      <div class="portfolio-wrapper"> <img src="../../imagenes/template/promo2.jpg" alt="" /> </div>
    </div>
    <div class="portfolio card" data-cat="card">
      <div class="portfolio-wrapper"> <img src="../../imagenes/template/promo2.jpg" alt="" /> </div>
    </div>
    <div class="portfolio logo" data-cat="logo">
      <div class="portfolio-wrapper"> <img src="../../imagenes/template/promo2.jpg" alt="" /> </div>
    </div>
  </div> --> 
  </div>
</div>
<!-- Selector promociones -->
<script type="text/javascript">
	$(function () {
		var filterList = {
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixItUp({
  				selectors: {
    			  target: '.portfolio',
    			  filter: '.filter'	
    		  },
    		  load: {
      		  filter: '.app, .card, .icon, .logo, .web'  
      		}     
				});								
			}
		};
		// Run the show!
		filterList.init();
	});	
	
	    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "fade",
		slideshowSpeed: 5000,
		directionNav: false, 
      });
	});	
	</script>

