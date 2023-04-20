<footer>
<style>
    .reserva-aqui{
      display: flex;
      align-items: center;
      justify-content: center;
      position: fixed;
      z-index: 100;
      bottom: 1.48rem;
      left: 25.48rem;
      width: 180px;
      height: 48px;
      border-radius: 50px;
      background-color: #004e90;
      color: white;
      text-decoration: none !important;
      box-shadow: 0 3px 5px -1px rgb(0 0 0 / 20%), 0 6px 10px 0 rgb(0 0 0 / 14%), 0 1px 18px 0 rgb(0 0 0 / 12%);
      gap: 5px;
    }
    .reserva-aqui p{
      margin-top: 3px;
      font-weight: 700;
    }
    @media (max-width: 500px) {
      .reserva-aqui{
        bottom: 7rem;
        left: 1.48rem;
      }
    }
  </style>
  <a href="https://contenidos.nevadosdechillan.art2fly.com/cgi-bin/paso1.cgi" target="blank_" class="reserva-aqui">
    <img src="/imagenes/template/reserva.png" width="24px" height="24px"/>
    <p>Reserva Aquí</p>
  </a>
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

</footer>
<footer class="footer-nuevo">
    <div class="suscribirse-nuevo">
      <h3>Suscríbete para recibir alertas y novedades</h3>
      <a href="https://qcfvxkx6.sibpages.com/" class="btn-suscribirse" target="_blank"><p>Suscribirse</p></a>
    </div>

    <div class="linea-footer-nuevo"></div>

    <div class="contenido-footer-nuevo">
      <div class="contenido-footer-nuevo-n">
        <h4>Teléfono</h4>
        <div class="linea-contenido-footer"></div>
        <div>
          <p>Emergencias montaña</p>
          <span><?php echo($generales->telefono_emergencias_montana)?></span>
        </div>

        <div>
          <p>Informaciones generales</p>
          <span><?php echo($generales->telefono_informaciones_generales)?></span>
        </div>


        <div>
          <p>Reservas alojamiento</p>
          <span><?php echo($generales->reservas_alojamiento)?></span>
        </div>

      </div>

      <div class="contenido-footer-nuevo-n">
        <h4>Correo</h4>
        <div class="linea-contenido-footer"></div>
        <div>
          <p>Mail reserva</p>
          <p><?php echo($generales->reserva_email)?></p>
        </div>

        <div>
          <p>Mail consultas generales</p>
          <p><?php echo($generales->mail_consultas_generales)?></p>
        </div>
      </div>

      <div class="contenido-footer-nuevo-n div-margin">
        <h4>Cómo llegar</h4>
        <div class="linea-contenido-footer"></div>
        <a href="https://goo.gl/maps/t76m6tiiS64YfuTu9" target="_blank" >Parque de agua</a>
        <a href="https://goo.gl/maps/Fa9i9ZjpjQpGbqb67" target="_blank">Valle Hermoso</a>
        <a href="https://goo.gl/maps/NUPzhxsqBTsAVZhFA" target="_blank">Plaza Tata</a>
        <a href="https://goo.gl/maps/MZhguJhcSDkwu8UL6" target="_blank">Plaza Willy</a>
        <a href="https://goo.gl/maps/jNCF3w9heG8ngXZt5" target="_blank">Hotel Nevados</a>
        <a href="https://goo.gl/maps/Qfz8MY9UYr39S1qk7" target="_blank">Alto Nevados</a>
      </div>

      <div class="contenido-footer-nuevo-n div-margin">
        <h4>Información corporativa</h4>
        <div class="linea-contenido-footer"></div>
        <a href="/necesitas-ayuda/trabaja-con-nosotros/">Trabaja con nosotros</a>
        <a href="/necesitas-ayuda/condiciones/">Términos y condiciones</a>
        <a href="/necesitas-ayuda/faqs/">Preguntas frecuentes</a>
        <a href="/necesitas-ayuda/contacto/">Contacto</a>
        <a>Conoce a nuestros auspiciadores</a>
      </div>

      <div class="contenido-footer-nuevo-n" id="idioma">
      <h4>Idiomas</h4>
      <div class="linea-contenido-footer"></div>
        <?php if($this->session->userdata('idioma') == 'en') {?>
        <a href="#googtrans(en)" class="bandera-idioma"  lang="en" alt="English" style="display:none;">
          <img src="/imagenes/template/bandera-inglaterra.svg" alt="" >
          <p>Inglés</p>
        </a>
        <?php }else{?>
        
        <a href="#googtrans(en)" class="bandera-idioma footer-bandera" id="en" lang="en" alt="English" style="width: 90px;">
          <img src="/imagenes/template/bandera-inglaterra.svg" alt="" >
          <p>Inglés</p>
        </a>
        <?php }?>
        <?php if($this->session->userdata('idioma') == 'es' || !$this->session->userdata('idioma')) {?>
        <a href="#googtrans(en)" class="bandera-idioma"  lang="es" alt="Bandera Chilena" style="display:none;">
          <img src="/imagenes/template/bandera-chile.svg" alt=""  >
          <p>Español</p>
        </a>
        <?php } else{?>
        <a href="#googtrans(en)" class="bandera-idioma footer-bandera" id="es" lang="es" alt="Bandera Chilena" style="width: 115px;">
          <img src="/imagenes/template/bandera-chile.svg" alt=""  >
          <p>Español</p>
        </a>
        <?php }?>
        <?php if($this->session->userdata('idioma') == 'pt') {?>
        <a href="#googtrans(pt)" class="bandera-idioma" lang="pt" alt="Portuguese" style="display:none;">
          <img src="/imagenes/template/bandera-portugal.svg" alt=""  >
          <p>Portugués</p>
        </a>
        <?php } else{?>
        <a href="#googtrans(pt)" class="bandera-idioma footer-bandera" id="pt" lang="pt" alt="Portuguese" style="width: 115px;">
          <img src="/imagenes/template/bandera-portugal.svg" alt=""  >
          <p>Portugués</p>
        </a>
        <?php }?>
<!--         
        <h4>Idiomas</h4>
        <div class="linea-contenido-footer"></div>
        <a href="#googtrans(en)" class="bandera-idioma" id="en" lang="en" style="width: 90px;">
          <img src="/imagenes/template/bandera-inglaterra.svg" alt="" >
          <p>Inglés</p>
        </a>
        <a href="#googtrans(pt)" class="bandera-idioma" id="pt" lang="pt" style="width: 115px;">
          <img src="/imagenes/template/bandera-portugal.svg" alt=""  >
          <p>Portugués</p>
        </a>
        <a href="#googtrans(en)" class="bandera-idioma" id="es" lang="es" style="width: 115px;">
          <img src="/imagenes/template/bandera-chile.svg" alt=""  >
          <p>Español</p>
        </a> -->
      </div>

      <div class="contenido-footer-nuevo-n">
        <a href="/en-vivo" class="btn-en-vivo-footer-nuevo">Ver cámaras en vivo</a>
      </div>
    </div>
    <div class="linea-footer-nuevo"></div>

    <div class="pie-footer-nuevo">
      <img width="142px" src="/imagenes/template/Logo_Nevados_Blanco_2.png" alt="">
      <div>
        <a href="<?php echo($generales->instagram)?>" target="_blank"><img src="/imagenes/template/i-insta.svg" alt=""></a>
        <a href="<?php echo($generales->facebook)?>" target="_blank"><img src="/imagenes/template/i-face.svg" alt=""></a>
        <a href="<?php echo($generales->tik_tok)?>" target="_blank"><img src="/imagenes/template/i-tiktok.svg" alt=""></a>
        <a href="<?php echo($generales->youtube)?>" target="_blank"><img src="/imagenes/template/i-yt.svg" alt=""></a>
        <a href="<?php echo($generales->twitter)?>" target="_blank"><img src="/imagenes/template/i-tw.svg" alt=""></a>
      </div>
      <div class="txt-pie-footer-nuevo">
        <p>© 2023 | Nevados de Chillán</p>
      </div>
    </div>
</footer>
