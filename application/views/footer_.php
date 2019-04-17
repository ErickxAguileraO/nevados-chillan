<footer>
  <div class="center">
    <div class="newsletter">
      <form id="new-newsletter" method="POST" action="#">
        <h3>Suscríbete a nuestro newsletter</h3>
        <p>Recibe información sobre el centro y sus actividades</p>
        <input class="input" placeholder="Nombre" type="text" name="nombre" style="margin: 0;" />
        <input class="input" placeholder="E-MAIL" type="text" name="email" />
        <input type="submit" value="Enviar" class="btn" />
        <div class="clear"></div>
        <ul>
          <li>
            <input type="checkbox" name="intereses[]" value="Ofertas Hoteleras">
            Ofertas Hoteleras</li>
          <li>
            <input type="checkbox" name="intereses[]" value="Promociones de Verano">
            Promociones de Verano</li>
          <li>
            <input type="checkbox" name="intereses[]" value="Promociones de Invierno">
            Promociones de Invierno</li>
        </ul>
      </form>
      <div class="clear"></div>
    </div>
    <div class="logos-footer float-left"> <img src="/imagenes/template/logo-footer.png"> </div>
    <div class="informacion">
      <h3>Información y horarios</h3>
      <p><strong>Reservas: </strong> <a href="tel:<?=$generales->reserva_telefono?>">
        <?=$generales->reserva_telefono?>
        </a>
        <?php if(@$generales->reserva_telefono_extranejero){
         echo " - <a href='".$generales->reserva_telefono_extranejero."'".$generales->reserva_telefono_extranejero."</a>";
         } ?>
        <br />
        <a href="mailto:<?=$generales->reserva_email?>">
        <?=$generales->reserva_email?>
        </a> <br />
        <br />
        <strong>Oficina Chillán: </strong> <a href="tel:<?=$generales->chillan_telefono?>">
        <?=$generales->chillan_telefono?>
        </a><br />
        <a href="mailto:<?=$generales->chillan_email?>">
        <?=$generales->chillan_email?>
        </a><br />
        <?=$generales->chillan_horario?>
        <br />
        <br />
        <strong>Oficina Concepción:</strong> <a href="tel:<?=$generales->concepcion_telefono?>">
        <?=$generales->concepcion_telefono?>
        </a><br />
        <a href="mailto:<?=$generales->concepcion_email?>">
        <?=$generales->concepcion_email?>
        </a><br />
        <?=$generales->concepcion_horario?>
      </p>
      <div class="clear"></div>
      <span class="last"><img src="/imagenes/template/mapa-sitio-icono.png" class="icono"/> <a href="/mapa-del-sitio/">Mapa de sitio</a></span> <span><img src="/imagenes/template/prensa-icono.png" class="icono" /> <a href="/noticias/prensa/">Información prensa</a></span> </div>
    <div class="newsletter-auspiciadores"> <img src="/imagenes/template/trip-advisor.png" class="trip-logo" /> <img src="/imagenes/template/chile-travel.png" class="chile-travel" /> </div>
    <div class="clear"></div>
    <!-- Inicio Auspiciadores -->
    <?php if(count($auspiciadores)>0){ ?>
    <div class="auspiciadores">
      <h3>Auspician:</h3>
      <ul>
        <?php foreach($auspiciadores as $item): ?>
        <li><img alt="<?=$item->nombre?>" src="<?=URL_ADMINISTRACION.$item->imagen_adjunta?>" /></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <?php } ?>
    <!-- Fin Auspiciadores --> 
  </div>
  <div class="clear"></div>
</footer>
