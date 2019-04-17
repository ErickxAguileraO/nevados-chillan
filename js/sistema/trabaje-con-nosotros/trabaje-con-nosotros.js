$(document).ready(function() {

  $("#form-trabaja-nosotros").validationEngine('attach', {
    onValidationComplete: function(form, status){
  if(status) {
    noty({
      text: 'Su mensaje est&aacute; siendo enviado. Por favor, espere un momento.',
      layout: 'topCenter',
      closeWith: [],
      type: 'alert',
      killer:true,
      template: '<div class="noty_message"><img src="/imagenes/sitio/ajax-loader.gif">&nbsp;&nbsp;<span class="noty_text"></span><div class="noty_close"></div></div>',
      fondo: '<div id="fondo" style=" position: fixed; top:0; height: 100%; width:100%; background-color: rgba(60, 56, 56, 0.38); display:block;z-index: 9999;"></div>'
    });

    var formData = new FormData(document.getElementById("form-trabaja-nosotros"));


    $.ajax({
      url: '/necesitas-ayuda/faqs/envio/',
      type: 'post',
      dataType: 'html',
				data: formData,
				cache: false,
        contentType: false,
				processData: false,
      success: function(result){
        var json = jQuery.parseJSON(result);
        if(json.result){
          noty({
            text: "Su mensaje ha sido enviado con &eacute;xito.",
            layout: 'topCenter',
            type: 'success',
            killer: true
          });
          setTimeout(function() {
            window.location.href = '/necesitas-ayuda/faqs/enviado';
          }, 2000);
        }
        else
        {
          noty({
            text: json.msg,
            layout: 'topCenter',
            type: 'error',
            killer: true
          });
        }
      }
    });
  }
  }
});

});
