<footer>
  <?php if(($home_indicador)){ ?>
  <!-- Inicio Auspiciadores -->
  <?php if(count($auspiciadores)>0){ ?>
  <section class="auspiciadores">
    <h1>PARTNERS</h1>
    <div class="auspiciadores-background">
      <div class="carrusel partners-responsive">
        <?php foreach($auspiciadores as $item): ?>
        <div>

        <?php 
        
     
        if($item->link){ ?>
          <a target="_blank" href="<?php echo $item->link; ?>">
        <?php } ?>
        
        <figure><img alt="<?=$item->nombre?>" src="<?=URL_ADMINISTRACION.$item->imagen_adjunta?>" />
        </figure>
        
        <?php if($item->link){ ?>
          </a>
        <?php } ?> 
        
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php } ?> 
  <!-- Fin Auspiciadores -->
  <?php } ?>
  <div class="center">
    <div class="newsletter">
      <form id="new-newsletter" method="POST" action="#">
        <h3 class="text-70">NEWSLETTER</h3>
        <fieldset>
          <input class="input" placeholder="Nombre..." type="text" name="nombre" style="margin: 0;" />
          <input class="input" placeholder="Email..." type="text" name="email" />
          <input type="submit" value="Enviar" class="btn" />
          <ul class="borrar">
          <li class="text-30" style="margin-right:10px;">Quiero saber más de</li>
            <li>
              <input type="checkbox" name="intereses[]" id="alojamiento" value="Ofertas Hoteleras" />
              <label for="alojamiento"><span></span> Alojamiento</label>
            </li>
            <li>
              <input type="checkbox" name="intereses[]" id="ski" value="Promociones de Verano" />
              <label for="ski"><span></span> Ski</label>
            </li>
            <li>
              <input type="checkbox" name="intereses[]" id="bike" value="Promociones de Invierno" />
              <label for="bike"><span></span> Bike</label>
            </li>
          </ul>
        </fieldset>
      </form>
    </div>
    <div class="newsletter-auspiciadores">
      <figure><img src="/imagenes/template/chile-travel.png" width="128" height="150" class="chile-travel" /></figure>
      <figure><img src="/imagenes/template/trip-advisor.png" width="212" height="150" class="trip-logo" /></figure>
      <figure><img src="/imagenes/template/chile-best-2017.png" width="155" height="150" class="chile-best 2017" /></figure>
      <figure><img src="/imagenes/template/chile-best-2018.png" width="155" height="150" class="chile-best 2018" /></figure>
    </div>
    <div class="informacion">
      <?php /*?><div class="coll-footer">
        <h4>Oficina Concepción</h4>
        <ul>
          <li><a href="tel:<?=$generales->concepcion_telefono?>">
            <?=$generales->concepcion_telefono?>
            </a></li>
          <li><strong><a href="mailto:<?=$generales->concepcion_email?>">
            <?=$generales->concepcion_email?>
            </a></strong></li>
          <li>
            <?=$generales->concepcion_horario?>
          </li>
        </ul>
      </div>
      <div class="coll-footer">
        <h4>Oficina Santiago</h4>
        <ul>
          <li><a href="tel:<?=$generales->santiago_telefono?>">
            <?=$generales->santiago_telefono?>
            </a></li>
          <li><strong><a href="mailto:<?=$generales->santiago_email?>">
            <?=$generales->santiago_email?>
            </a></strong></li>
          <li>
            <?=$generales->santiago_horario?>
          </li>
        </ul>
      </div><?php */?>
      <div class="coll-footer" style="display: block; margin: 0 auto; ">
        <h4>Oficina Chillán</h4>
        <ul>
          <li><a href="tel:<?=$generales->chillan_telefono?>">
            <?=$generales->chillan_telefono?>
            </a></li>
          <li><strong><a href="mailto:<?=$generales->chillan_email?>">
            <?=$generales->chillan_email?>
            </a></strong></li>
          <li>
            <?=$generales->chillan_horario?>
          </li>
        </ul>
      </div>
      <?php /*?><p><strong>Reservas: </strong> <a href="tel:<?=$generales->reserva_telefono?>">
        <?=$generales->reserva_telefono?>
        </a>
        <?php if(@$generales->reserva_telefono_extranejero){
         echo " - <a href='".$generales->reserva_telefono_extranejero."'".$generales->reserva_telefono_extranejero."</a>";
         } ?>
        <br />
        <a href="mailto:<?=$generales->reserva_email?>">
        <?=$generales->reserva_email?>
        </a></p><?php */?>
      <div class="grid-footer-2 color">
        <ul>
          <li><a href="#" target="_blank"><img src="/imagenes/template/skinpass.png" width="63" height="60" /></a></li>
          <li><a href="https://itunes.apple.com/us/app/nevados-de-chill%C3%A1n-app/id1217403552?mt=8" target="_blank"><img src="/imagenes/template/apple.png" width="176" height="60" /></a></li>
          <li><a href="https://play.google.com/store/apps/details?id=com.skitude.NevadosDeChillan&hl=es" target="_blank"><img src="/imagenes/template/android.png" width="176" height="60" /></a></li>
        </ul>
      </div>
      <div class="grid-footer-2">
        <ul>
          <li><a href="/mapa-del-sitio/">Mapa de sitio</a></li>
          <li><a href="/noticias/prensa/">Información prensa</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
