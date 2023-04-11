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
      <a href="" class="btn-suscribirse"><p>Suscribirse</p></a>
    </div>

    <div class="linea-footer-nuevo"></div>

    <div class="contenido-footer-nuevo">
      <div class="contenido-footer-nuevo-n">
        <h4>Teléfono</h4>
        <div class="linea-contenido-footer"></div>
        <div>
          <p>Emergencias montaña</p>
          <span>9 8293 2784</span>
        </div>

        <div>
          <p>Informaciones generales</p>
          <span>9 8293 2784</span>
        </div>


        <div>
          <p>Reservas alojamiento</p>
          <span>9 8293 2784</span>
        </div>

        <div>
          <p>Informaciones generales</p>
          <span>9 8293 2784</span>
        </div>

      </div>

      <div class="contenido-footer-nuevo-n">
        <h4>Correo</h4>
        <div class="linea-contenido-footer"></div>
        <div>
          <p>Mail reserva</p>
          <p>reserva@nevadosdechillan.cl</p>
        </div>

        <div>
          <p>Mail consultas generales</p>
          <p>consultas@nevadosdechillan.cl</p>
        </div>
      </div>

      <div class="contenido-footer-nuevo-n div-margin">
        <h4>Cómo llegar</h4>
        <div class="linea-contenido-footer"></div>
        <a href="">Parque de agua</a>
        <a href="">Valle Hermoso</a>
        <a href="">Plaza Tata</a>
        <a href="">Plaza Willy</a>
        <a href="">Hotel Nevados</a>
        <a href="">Alto Nevados</a>
      </div>

      <div class="contenido-footer-nuevo-n div-margin">
        <h4>Información corporativa</h4>
        <div class="linea-contenido-footer"></div>
        <a href="">Trabaja con nosotros</a>
        <a href="">Términos y condiciones</a>
        <a href="">Preguntas frecuentes</a>
        <a href="">Contacto</a>
        <a href="">Conoce a nuestros auspiciadores</a>
      </div>

      <div class="contenido-footer-nuevo-n">
        <h4>Idiomas</h4>
        <div class="linea-contenido-footer"></div>
        <a href="" class="bandera-idioma" style="width: 90px;">
          <img src="/imagenes/template/bandera-inglaterra.svg" alt="">
          <p>Inglés</p>
        </a>
        <a href="" class="bandera-idioma" style="width: 115px;">
          <img src="/imagenes/template/bandera-portugal.svg" alt="">
          <p>Portugués</p>
        </a>
      </div>

      <div class="contenido-footer-nuevo-n">
        <a href="/en-vivo" class="btn-en-vivo-footer-nuevo">Ver cámaras en vivo</a>
      </div>
    </div>
    <div class="linea-footer-nuevo"></div>

    <div class="pie-footer-nuevo">
      <img width="142px" src="/imagenes/template/Logo_Nevados_Blanco_2.png" alt="">
      <div>
        <a href="https://www.instagram.com/nevadosdechillan/" target="_blank"><img src="/imagenes/template/i-insta.svg" alt=""></a>
        <a href="https://www.facebook.com/nevadosdechillan/" target="_blank"><img src="/imagenes/template/i-face.svg" alt=""></a>
        <a href="" target="_blank"><img src="/imagenes/template/i-tiktok.svg" alt=""></a>
        <a href="https://www.youtube.com/channel/UCai0b2vM5thJK3Gt74rUupQ?view_as=subscriber" target="_blank"><img src="/imagenes/template/i-yt.svg" alt=""></a>
        <a href="https://twitter.com/nevadosski" target="_blank"><img src="/imagenes/template/i-tw.svg" alt=""></a>
      </div>
      <div class="txt-pie-footer-nuevo">
        <p>© 2023 | Nevados de Chillán</p>
      </div>
    </div>
</footer>
