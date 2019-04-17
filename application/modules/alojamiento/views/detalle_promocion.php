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
  <div class="imagen-detalle float-left"><img src="../../imagenes/template/landing.jpg" alt="Diseñados y construidos para trabajo pesado" /></div>
  <div class="texto-detalle float-right"> <span><img src="../../imagenes/template/icono-calendario.png" />10/02/2017</span>
    <h2>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa</h2>
    <div class="social-media">
      <ul>
        <li>Compartir en:</li>
        <li><img src="../../imagenes/template/share-facebook.png" /></li>
        <li><img src="../../imagenes/template/share-twitter.png" /></li>
        <li><img src="../../imagenes/template/share-google.png" /></li>
        <li><img src="../../imagenes/template/share-wsp.png" /></li>
        <li><img src="../../imagenes/template/share-rss.png" /></li>
      </ul>
      <div class="clear"></div>
    </div>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.<br />
      <br />
      Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc</p>
    <span class="cond-span"><img src="../../imagenes/template/arrow.png" class="arrow" /><a href="#">Ver condiciones de esta promoción</a></span> </div>
</div>
<script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "fade",
		slideshowSpeed: 5000,
		directionNav: false, 
      });
});

</script> 
