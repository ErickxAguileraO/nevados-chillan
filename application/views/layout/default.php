<!DOCTYPE html>
<html lang="es" xml:lang="es">

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
<!-- CSS -->
<?php echo $this->layout->getCss(); ?>
<!-- js -->
<?php echo $this->layout->getJs(); ?>

<!-- Google tag (gtag.js) (2023)--> 
<script async src=https://www.googletagmanager.com/gtag/js?id=G-8D739C3PN5></script> 
<script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-8D739C3PN5'); </script>

<!-- Facebook pixel (2023)-->
<meta name="facebook-domain-verification" content="mk7olnecp3fsfqy3fv19ib31gutgro" />

<!-- Google Tag Manager -->
<!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KT75JBJ');</script> -->
<!-- End Google Tag Manager -->

<!-- Código de instalación Cliengo para nevados2020@gmail.com --> 
<script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/5fc104837337f3002a5ba6bd/5fc104837337f3002a5ba6c0.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>

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

<!-- Facebook Pixel Code -->
<!-- <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2306195459503097');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2306195459503097&ev=PageView&noscript=1"
/></noscript> -->
<!-- End Facebook Pixel Code -->

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
            containerColor: '#c95d2a',
            titleAsText: true,

        });
    });


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



<script src="https://cdn.jsdelivr.net/npm/pickerjs@1.2.1/dist/picker.min.js"></script>
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KT75JBJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php /*?><div class="bg-footer"></div><?php */?>
<div id="wrapper">
    <header>
        <!-- Top -->
        <?php echo $this->load->view('top'); ?>
        <!-- Main -->
        <?php echo $this->load->view('main'); ?>
        <div class="clear"></div>
    </header>
    <!-- Contenido -->
    
    <?=$content_for_layout?>
    <div class="clear"></div>
<!-- Footer -->
<?php echo $this->load->view('footer'); ?>
</div>
<div id="aeurus"> <a onclick="this.target='_blank'" onkeypress="this.target='_blank'" href="https://www.aeurus.cl/" title="Diseño Web - Posicionamiento Web - Sistema Web"><img width="22" height="22" src="/imagenes/template/aeurus.png" alt="Diseño Web - Posicionamiento Web - Sistema Web" /></a> </div>
</body>
</html>
