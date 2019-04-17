<!DOCTYPE html>
<html lang="es" xml:lang="es">
<!--[if IE 6]>
<html id="ie6" dir="ltr" lang="es-ES">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" dir="ltr" lang="es-ES">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" dir="ltr" lang="es-ES">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]>
<html dir="ltr" lang="es-ES">
<![endif]-->
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<!-- viewport para moviles -->
<meta name="viewport" content="width=device-width, user-scalable=no"/>
<!-- Metas -->
<?php echo $this->layout->headMeta(); ?>

<!-- title -->
<title><?php echo $this->layout->getTitle(); ?></title>

<!-- Font -->
<link href="https://fonts.googleapis.com/css?family=Amiko:400,700" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"/>

<!-- CSS -->
<?php echo $this->layout->getCss(); ?>

<!-- js -->
<script class="jsbin" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.5.3/modernizr.min.js"></script>
<?php echo $this->layout->getJs(); ?>

<!--[if lt IE 9]>

    <script src="http://html5shim.googlecode.com/svn/trunk/html5-els.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="/js/sistema/template/index.js"></script>
    <![endif]-->
<script>
        $(document).ready(function() {
            $('#idioma li a ,#idioma2 li a').click(function () {

                var id = $(this).attr('id');
                $.ajax({

                    url: '/inicio',
                    type: 'post',
                    data: {'id': id},
                    success: function () {
                        location.reload(true);
                    }
                })
            });
        });
    </script>
<link href="/favicon.ico" rel="shortcut icon" />
<?php if($this->layout->current){ ?>
<script type="text/javascript">
            $(document).ready(function(){
                $("#menu li:nth-child(<?php echo $this->layout->current; ?>)").addClass("current");
            });
        </script>
<?php } ?>
<!-- wow animate -->
<!-- Wow -->

<!-- metas facebook -->
<?php if(isset($compartir_rs)){ ?>
<?php
        $https = 'http://';
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'])
            $https = 'https://';
        ?>
<meta property="og:title" content="<?php echo $compartir_rs->titulo; ?>" />
<meta property="og:description" content="<?php echo $compartir_rs->resumen; ?>" />
<meta property="og:image" content="<?php echo $compartir_rs->imagen; ?>" />
<meta property="og:type" content="non_profit" />
<meta property="og:url" content="<?php echo $https.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" />
<meta name="author" content="" />
<?php } ?>

<!--- Scroll to top -->
<script src="/js/jquery/scrollto/jquery.goup.js"></script>
<script type="text/javascript">
        $(document).ready(function(){
            jQuery.goup({
                trigger: 900,
                containerSize: 50,
                bottomOffset: 50,
                locationOffset: 50,
                title: 'Subir',
                containerColor: '#f57517',
                titleAsText: true,

            });
        });
        $(function(){
            $('.panel-wrapper .btn').on('click',function(){
                $('.panel-reserva').toggle('fast');
            });

        });

    </script>
<!-- Datepicker -->
<script src="/js/jquery/ui/1.10.4/jquery.ui.datepicker-es.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
        $(function() {
            $("#datepicker").datepicker({dateFormat: 'yy-mm-dd'});
        } );
    </script>
<script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-80584625-1']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>
</head>
<body>
<script>
  //fbq('track', 'ViewContent');
</script>
<div class="bg-footer"></div>
<div id="wrapper">
  <header> 
    <!-- Top --> 
    <?php echo $this->load->view('top'); ?> 
    <!-- Main --> 
    <?php echo $this->load->view('main'); ?>
    <div class="clear"></div>
  </header>
  <!-- Contenido -->
  <div  id="contenido"> 
    <!--<img src="../../imagenes/template/btn-reserva.png" />-->
    <div class="left-side"> <a href="https://www.skipassnevadosdechillan.com/" onClick="_gaq.push(['_trackEvent', 'recarga', 'cargar'])" target="_blank"> <img src="/imagenes/template/ticket-online.png" /></a> 
      <!--
        <a href="/invierno/infonieve/" onClick="_gaq.push(['_trackEvent', 'infonieve', 'clic'])">
            <img src="/imagenes/template/snow-report-icon.png"/>
        </a>
--> 
      
    </div>
    <div class="panel-wrapper">
      <div class="btn"><img src="/imagenes/template/btn-reserva.png" /> <img src="/imagenes/template/icono-resp.png" class="resp" /> </div>
      <div class="panel-reserva">
        <div class="menu-panel">
          <ul>
            <li><a href="/alojamiento/hotel-nevados/">Hotel<br />
              Nevados</a></li>
            <li><a href="/alojamiento/hotel-alto-nevados/">Hotel<br />
              Alto Nevados</a></li>
            <li><a href="/valle-hermoso/">Valle<br />
              hermoso</a></li>
            <li><a href="/necesitas-ayuda/faqs/">Faqs</a></li>
          </ul>
        </div>
        <div class="clear"></div>
        <div class="formulario-panel">
          <h3>Haz tu reserva</h3>
          <form action="https://contenidos.nevadosdechillan.art2fly.com/cgi-bin/paso1.cgi" method="get" target="_blank">
            <ul>
              <li>
                <label for="datepicker">Fecha de llegada</label>
                <br />
                <input type="text" id="datepicker" name="FECHA_CHECKIN" class="datepicker" value="<?=date('Y-m-d')?>" />
              </li>
              <li>
                <label>Noches</label>
                <br />
                <input type="text" name="NOCHES" value="1" />
              </li>
              <li>
                <label>Adultos</label>
                <br />
                <input type="text" name="ADULTOS" value="2" />
              </li>
              <li>
                <label>Niños</label>
                <br />
                <input type="text" name="CHILDREN" placeholder="6 a 12 años" />
              </li>
              <li>
                <label>Infantes</label>
                <br />
                <input type="text" name="INFANTES" placeholder="0 a 5 años" />
              </li>
            </ul>
            <input type="submit" class="btn-reseva-panel" onclick="_gaq.push(['_trackEvent', 'reserva1', 'submit1'])" value="Enviar Reserva" />
          </form>
          <?php /*?><img src="/imagenes/template/web-pay-reserva.png" /><?php */?>
        </div>
      </div>
    </div>
  </div>
  <?=$content_for_layout?>
  <div class="clear"></div>
</div>

<!-- Footer --> 
<?php echo $this->load->view('footer'); ?>
<div id="aeurus"> <a onclick="this.target='_blank'" onkeypress="this.target='_blank'" href="https://www.aeurus.cl/" title="Diseño Web - Posicionamiento Web - Sistema Web"><img width="22" height="22" src="/imagenes/template/aeurus.png" alt="Diseño Web - Posicionamiento Web - Sistema Web" /></a> </div>
</body>
</html>
