<div id="top">
  <div class="center">
    <ul>
      <li class="hide"><a title="Teléfono" href="tel:<?=$generales->reserva_telefono?>"><strong>
        <?=$generales->reserva_telefono?>
        </strong></a></li>
      <li class="hide"><a title="Email reservas" href="mailto:<?=$generales->reserva_email?>"><strong>
        <?=$generales->reserva_email?>
        </strong></a></li>
      <?php if(@$generales->reserva_telefono_extranejero){ ?>
      <li>Extranjero: <a title="Numero Extranjero" href="tel:<?=$generales->reserva_telefono_extranejero?>">
        <?=$generales->reserva_telefono_extranejero?>
        </a></li>
      <?php }?>
      <?php if($this->session->userdata('idioma') == 'en') {?>
      <li><a lang="en" href="#googtrans(en)"><img height="20" width="20" alt="English" src="/imagenes/template/bandera-inglaterra.png" /><span class="hide"> Inglés</span></a>
        <?php }?>
        <?php if($this->session->userdata('idioma') == 'es' || !$this->session->userdata('idioma')) {?>
      <li  lang="es" class="idioma"><a href="/#googtrans(es)"><img height="20" width="20" alt="Español" src="/imagenes/template/bandera-espana.png" /><span class="hide"> Español</span></a>
        <?php }?>
      <?php if($this->session->userdata('idioma') == 'pt') {?>
      <li><a lang="pt" href="#googtrans(pt)" ><img height="20" width="20" alt="Portuguese" src="/imagenes/template/bandera-brasil.png" /><span class="hide"> Portugués</span></a>
        <?php }?>
        <!--[if IE 7]><!--><!--<![endif]--> 
        <!--[if lte IE 6]><table><tr><td><![endif]-->
        <ul id="idioma">
          <li><a id="en" lang="en" href="#googtrans(en)" ><img height="20" width="20" alt="English" src="/imagenes/template/bandera-inglaterra.png" /><span class="hide"> Inglés</span></a></li>
          <li><a id="es" lang="es" href="#googtrans(es)" ><img height="20" width="20" alt="Spanish" src="/imagenes/template/bandera-espana.png" /><span class="hide"> Español</span></a></li>
          <li><a id="pt" lang="fr" href="#googtrans(pt)"><img height="20" width="20" alt="Portuguese" src="/imagenes/template/bandera-brasil.png" /><span class="hide"> Portugués</span></a></li>
        </ul>
        <!--[if lte IE 6]></td></tr></table></a><![endif]--> 
      </li>
      <li><a title="En vivo" href="/en-vivo/"><img src="/imagenes/template/en-vivo.png" alt="En vivo" width="19" height="24" /><span class="hide"> EN VIVO</span></a></li>
      <li>
        <?php if(@$generales->youtube){ ?>
        <a title="Youtube" href="<?=$generales->youtube?>" target="_blank"><img src="/imagenes/template/youtube-icono.png" class="redes-sociales-icono" width="24" height="24" alt="Youtube" /></a>
        <?php } ?>
        <?php if(@$generales->instagram){ ?>
        <a title="Instagram" href="<?=$generales->instagram?>" target="_blank" style="margin-left: 10px;"><img src="/imagenes/template/instagram-icono.png" class="redes-sociales-icono" width="24" height="24" alt="Instagram" /></a>
        <?php }?>
        <?php if(@$generales->twitter){ ?>
        <a title="twitter" href="<?=$generales->twitter?>" target="_blank"><img src="/imagenes/template/twitter-icono.png" class="redes-sociales-icono" width="24" height="24" alt="twitter" /></a>
        <?php }?>
        <?php if(@$generales->facebook){ ?>
        <a title="Facebook" href="<?=$generales->facebook?>" target="_blank"><img src="/imagenes/template/facebook-icono.png" alt="Facebook" width="24" height="24" class="redes-sociales-icono" /></a>
        <?php }?>
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