<div id="top">
  <div class="center">
    <ul>
      <li><img src="/imagenes/template/en-vivo.png" alt="En vivo" /><a title="En vivo" href="/en-vivo/">EN VIVO</a></li>
      <li><img src="/imagenes/template/telefono.png" alt="Teléfono" /><a title="Teléfono" href="tel:<?=$generales->reserva_telefono?>"><?=$generales->reserva_telefono?></a></li>
      <?php if(@$generales->reserva_telefono_extranejero){ ?>
      <li>Extranjero: <a title="Numero Extranjero" href="tel:<?=$generales->reserva_telefono_extranejero?>"><?=$generales->reserva_telefono_extranejero?></a></li>
      <?php }?>
      <li>Email de reserva: <a title="Email reservas" href="mailto:<?=$generales->reserva_email?>"><?=$generales->reserva_email?></a></li>
      <li>Siguenos en:
        <?php if(@$generales->youtube){ ?>
            <a title="Youtube" href="<?=$generales->youtube?>" target="_blank"><img src="/imagenes/template/youtube-icono.png" class="redes-sociales-icono" alt="Youtube" /></a>
        <?php } ?>
        <?php if(@$generales->instagram){ ?>
        <a title="Instagram" href="<?=$generales->instagram?>" target="_blank" style="margin-left: 10px;"><img src="/imagenes/template/instagram-icono.png" class="redes-sociales-icono" alt="Instagram" /></a>
        <?php }?>
        <?php if(@$generales->twitter){ ?>
        <a title="twitter" href="<?=$generales->twitter?>" target="_blank"><img src="/imagenes/template/twitter-icono.png" class="redes-sociales-icono" alt="twitter" /></a>
        <?php }?>
        <?php if(@$generales->facebook){ ?>
        <a title="Facebook" href="<?=$generales->facebook?>" target="_blank"><img src="/imagenes/template/facebook-icono.png" class="redes-sociales-icono" alt="Facebook" /></a></li>
        <?php }?>

       <?php if($this->session->userdata('idioma') == 'en') {?>
        <li><a lang="en" href="#googtrans(en)"><img height="13" width="13" alt="English" src="/imagenes/template/bandera-inglaterra.png" /> Inglés</a>
       <?php }?>
        <?php if($this->session->userdata('idioma') == 'es' || !$this->session->userdata('idioma')) {?>
        <li  lang="es" class="idioma"><a href="/#googtrans(es)"><img height="13" width="13" alt="Español" src="/imagenes/template/bandera-espana.png" /> Español</a>
            <?php }?>

            <?php if($this->session->userdata('idioma') == 'pt') {?>
        <li><a lang="fr" href="#googtrans(pt)" ><img height="13" width="13" alt="Portuguese" src="/imagenes/template/bandera-brasil.png" /> Portugués</a>
        <?php }?>
        <!--[if IE 7]><!--><!--<![endif]-->
        <!--[if lte IE 6]><table><tr><td><![endif]-->
        <ul id="idioma">
          <li><a id="en" lang="en" href="#googtrans(en)" ><img height="13" width="13" alt="English" src="/imagenes/template/bandera-inglaterra.png" /> Inglés</a></li>
          <li><a id="es" lang="es" href="#googtrans(es)" ><img height="13" width="13" alt="Spanish" src="/imagenes/template/bandera-espana.png" /> Español</a></li>
          <li><a id="pt" lang="fr" href="#googtrans(pt)" ><img height="13" width="13" alt="Portuguese" src="/imagenes/template/bandera-brasil.png" /> Portugués</a></li>
        </ul>
        <!--[if lte IE 6]></td></tr></table></a><![endif]-->
      </li>


    </ul>
  </div>
</div>
<script type="text/javascript">




    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'es', includedLanguages: 'en,pt,es',layout: google.translate.TranslateElement.InlineLayout.SIMPLE},'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>