$(document).ready(function () {
    $("#new-newsletter").validationEngine('attach', {
        onValidationComplete: function (form, status) {
           if (status) {
                noty({
                    text: 'La informaci&oacute;n est&aacute; siendo procesada. Por favor, espere un momento.',
                    layout: 'topCenter',
                    closeWith: [],
                    type: 'alert',
                    killer: true,
                    template: '<div class="noty_message"><img src="/imagenes/icons/ajax-loader.gif">&nbsp;&nbsp;<span class="noty_text"></span><div class="noty_close"></div></div>',
                    fondo: '<div id="fondo" style=" position: fixed; top:0; height: 100%; width:100%; background-color: rgba(60, 56, 56, 0.38); display:block;z-index: 9999;"></div>'
                });

				var formData = new FormData(document.getElementById("new-newsletter"));

                $.ajax({
                    url: '/inicio/registrarnewsletter',
                    type: 'post',
                    dataType: 'json',
                    data: formData,
										cache: false,
                    contentType: false,
                    processData: false,
                    success: function (json) {
                        if (json.result) {
                            noty({
                                text: "La informaci&oacute;n ha sido enviada con &eacute;xito.",
                                layout: 'topCenter',
                                type: 'success',
                                killer: true
                            });
                            setTimeout(function () {
                                window.location.href = location.href+'exito';
                            }, 1500);
                        } else
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