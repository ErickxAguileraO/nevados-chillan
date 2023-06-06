
<div class="banner-top">
  <figure><img src="/imagenes/sitio/banner-montana.jpg" width="1920" height="406" />
    <figcaption class="center"> <span>REPORTE DE MONTAÑA</span></figcaption>
  </figure>
</div>
<div class="center">
  <?=$this->layout->getNav();?>
  <div class="intro"> <span class="label">Última actualización: <?= $montana->ultima_actualizacion ?></span>
    <h1><?= $montana->titulo ?></h1>
    <p><?= $montana->introduccion ?></p>
  </div>
  <ul class="tabs">
    <li class="active"><a href="#tab1">Andariveles</a></li>
    <li><a href="#tab2">Pistas</a></li>
  </ul>
  <div class="tab_container">
    <div class="tab_content" id="tab1">
      <div class="reporte-estado">
        <div class="child"><span>
          <?= $andarivelesAbiertos ?>
        </span>
          <h3> Andariveles abiertos</h3>
        </div>
        <div class="child">
          <span><?= $cantidadPistasAbiertas; ?></span>
          <h3>Pistas abiertas</h3>
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
            <?php if($andariveles){ ?>
                  <?php foreach($andariveles as $andarivel){ ?>
                      <tr> 
                          <td><?= $andarivel->nombre; ?></td>
                          <td><?= $andarivel->horario; ?></td>
                          <td><?= $andarivel->tipo; ?></td>
                          <td>
                          <?php if ($andarivel->estado_andarivel == 1) { ?>
                              <span class="est-abierto">Abierto</span>
                          <?php } elseif ($andarivel->estado_andarivel == 0) { ?>
                              <span class="est-cerrado">Cerrado</span>
                          <?php } elseif ($andarivel->estado_andarivel == 2) { ?>
                              <span class="est-agendado">Agendado</span>
                          <?php } elseif ($andarivel->estado_andarivel == 3) { ?>
                              <span class="est-espera">En espera</span>
                          <?php } ?>
                        </td>
                      </tr>
                  <?php } ?>
              <?php } else{ ?>
                  <tr>
                      <td colspan="4" style="text-align: center;"><i>No hay registros</i></td>
                  </tr>
              <?php } ?>

            <!-- <tr>
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
            </tr> -->
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
              <th scope="col">Estado</th>
              <th scope="col">Dificultad</th>
              <th scope="col">Condición</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            
            foreach ($pistas as $pista): ?>
          
            <tr>
              <td><?= $pista->nombre ?></td>
              <td><span class="<?= $pista->clase_estado_pista ?>"><?= $pista->texto_estado_pista ?></span></td>
              <td class="white-space">
                <span class="label"><?= $pista->dificultad ?></span> 
                <span class="<?= $pista->icono_dificultad ?>"></span>

                <?php if ($pista->dificultad == 'Experto'): ?>
                <span class="<?= $pista->icono_dificultad ?>"></span>
                <?php endif; ?>

              </td>
              <td class="white-space">
                <figure class="icon-blue">
                  <img src=<?= $pista->condicion == 1 ? '/imagenes/sitio/nieve.png' : '/imagenes/sitio/transporte.png'; ?> 
                  width="16" height="16" />
                </figure>
                <?= $pista->condicion == 1 ? 'Fabricación nieve' : 'Pisado'; ?>
              </td>
            </tr>

            <?php endforeach; ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
  <h1 class="text-center clear" style=" margin-bottom: 46px;">También puede interesarte</h1>
  <div class="listado-noticias">

      <?php if($noticiaReporte){ ?>
        <?php foreach($noticiaReporte as $key => $noticia){ ?>
            <article>
                <figure><img src="/admin<?= $imagenNoticiaReporte[$key]->ruta_interna ?>" alt="Título de la noticia" width="440" height="200" /></figure>
                <h3><?= $noticia->titulo ?></h3>
                <p>
                    <?= $noticia->descripcion ?>
                </p>
                <span class="ver-mas"><a href="<?= $noticia->enlace ?>">Ver más</a></span> 
            </article>
        <?php } ?>
    <?php } else{ ?>
        <tr>
            <td colspan="4" style="text-align: center;"><i>No hay noticias</i></td>
        </tr>
    <?php } ?>
  </div>
</div>
