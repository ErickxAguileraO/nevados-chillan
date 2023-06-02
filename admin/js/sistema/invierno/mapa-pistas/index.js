$(document).ready(function () {

    $("#form-agregar").validationEngine('attach', {
        promptPosition:'topLeft',
		validationEventTrigger:false,
        showOneMessage:true,
        onValidationComplete: function (form, status) {
			if (status) {
        		noty({
        			text: 'Guardando registro. Por favor, espere un momento.',
        			layout: 'topCenter',
        			closeWith: [],
        			type: 'alert',
        			killer: true,
        			template: '<div class="noty_message"><img src="/imagenes/icons/ajax-loader.gif">&nbsp;&nbsp;<span class="noty_text"></span><div class="noty_close"></div></div>',
        			fondo: '<div id="fondo" style=" position: fixed; top:0; height: 100%; width:100%; background-color: rgba(60, 56, 56, 0.38); display:block;z-index: 9999;"></div>'
        		});
                
				$("#descripcion").val(CKEDITOR.instances['descripcion'].getData());
                var formData = new FormData(document.getElementById("form-agregar"));
        		$.ajax({
        			url: '/encabezado/modificar/',
        			type: 'post',
        			dataType: 'html',
        			data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
        			success: function (result){
                        var json = jQuery.parseJSON(result);
        				if(json.result){
        				    
        					noty({
        						text: "Guardado con éxito",
        						layout: 'topCenter',
        						type: 'success',
        						killer: true
        					});
                            
        					setTimeout(function () {
        						window.location.reload();
        					}, 1000);
        				}else{
        				    
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

	$(".eliminar").click(function(e){
		
		e.preventDefault();
		let codigo = $(this).attr('rel');
        
		noty({
		layout: 'topCenter',
		fondo: '<div id="fondo" style=" position: fixed; top:0; height: 100%; width:100%; background-color: rgba(60, 56, 56, 0.38); display:block;z-index: 9999;"></div>',
		  text: '¿Está seguro de eliminar este mapa?',
		  buttons: [
			{addClass: 'btn btn-primary', text: 'Aceptar', onClick: function($noty) {
				$noty.close();
				$(window).unbind('beforeunload');
				
				noty({
					text: 'El mapa está siendo eliminado. Por favor, espere un momento.',
					layout: 'topCenter',
					type: 'alert',
					killer:true,
					closeWith: [],
					template: '<div class="noty_message"><img src="/imagenes/sitio/ajax-loader.gif">&nbsp;&nbsp;<span class="noty_text"></span><div class="noty_close"></div></div>',
					fondo: '<div id="fondo" style=" position: fixed; top:0; height: 100%; width:100%; background-color: rgba(60, 56, 56, 0.38); display:block;z-index: 9999;"></div>'
				});
				
				$.ajax({
					type: "POST",
					data: "codigo="+codigo,
					dataType: "json",
					url: '/invierno/mapa-pistas/eliminar/',
					success: function(json){
						if(json.result){
							noty({
								text: "El mapa ha sido eliminado con éxito.",
								layout: 'topCenter',
								type: 'success',
								killer: true
							});

                            setTimeout(function(){
                                window.location.reload();
                            }, 1000);
						} 
						else
						{
							var error = noty({
								text: json.msg,
								layout: 'topCenter',
								type: 'error',
								timeout: 2000
							});
						}
					}
				});
			  }
			},
			{addClass: 'btn btn-danger', text: 'Cancelar', onClick: function($noty) {
				$noty.close();
			  }
			}
		  ]
		});
		
	});
	    
    //editor
    CKEDITOR.replace('descripcion');

});