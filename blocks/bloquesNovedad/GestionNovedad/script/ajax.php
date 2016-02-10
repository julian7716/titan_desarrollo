<?php
// URL base
$url = $this->miConfigurador->getVariableConfiguracion ( "host" );
$url .= $this->miConfigurador->getVariableConfiguracion ( "site" );
$url .= "/index.php?";
//Variables
$cadenaACodificar17 = "pagina=" . $this->miConfigurador->getVariableConfiguracion ( "pagina" );
$cadenaACodificar17 .= "&procesarAjax=true";
$cadenaACodificar17 .= "&action=index.php";
$cadenaACodificar17 .= "&bloqueNombre=" . $esteBloque ["nombre"];
$cadenaACodificar17 .= "&bloqueGrupo=" . $esteBloque ["grupo"];
$cadenaACodificar17 .= $cadenaACodificar17 . "&funcion=consultarCiudadAjax";
$cadenaACodificar17 .= "&tiempo=" . $_REQUEST ['tiempo'];
// Codificar las variables
$enlace = $this->miConfigurador->getVariableConfiguracion ( "enlace" );
$cadena17 = $this->miConfigurador->fabricaConexiones->crypto->codificar_url ( $cadenaACodificar17, $enlace );
// URL definitiva
$urlFinal17 = $url . $cadena17;
?>

<script>
    function consultarCiudad(elem, request, response){
		  $.ajax({
		    url: "<?php echo $urlFinal17?>",
		    dataType: "json",
		    data: { valor:$("#<?php echo $this->campoSeguro('tipoVinculacion')?>").val()},
		    success: function(data){ 
		        if(data[0]!=" "){
		            $("#<?php echo $this->campoSeguro('tipoNomina')?>").html('');
		            $("<option value=''>Seleccione  ....</option>").appendTo("#<?php echo $this->campoSeguro('tipoNomina')?>");
		            $.each(data , function(indice,valor){
		            	$("<option value='"+data[ indice ].id+"'>"+data[ indice ].nombre+"</option>").appendTo("#<?php echo $this->campoSeguro('tipoNomina')?>");
		            	
		            });
		            
		            $("#<?php echo $this->campoSeguro('tipoNomina')?>").removeAttr('disabled');
		            
		            //$('#<?php echo $this->campoSeguro('tipoNomina')?>').width(250);
		            $("#<?php echo $this->campoSeguro('tipoNomina')?>").select2();
		            
		            $("#<?php echo $this->campoSeguro('tipoNomina')?>").removeClass("validate[required]");
		            
			        }
		    			
		    }
			                    
		   });
		};
                
          $(function () {
	        
	        $("#<?php echo $this->campoSeguro('tipoVinculacion')?>").change(function(){
	        	if($("#<?php echo $this->campoSeguro('tipoVinculacion')?>").val()!=''){
	            	consultarCiudad();
	    		}else{
	    			$("#<?php echo $this->campoSeguro('tipoNomina')?>").attr('disabled','');
	    			}
	    	      });
	        
		
	    });
            
            
            
 
//***********************************************************************************************************
//***********************************************************************************************************

//Codigo AGREGAR y QUITAR Campos Dinamicos

var limite = 20; //Se define el Limite de Paneles de Condiciones que se pueden Generar
				 //No requiere que se cambie en otro lugar

				 
var iCnt = 0;
var numId = 0;
 
// Crear un elemento div añadiendo estilos CSS
var container = $(document.createElement('div')).css({
	padding: '5px'
});

$(container).attr('class', 'col-md-12')
$(container).attr('id', 'pushDina')

$( document ).ready(function() {
	if($('#<?php echo $this->campoSeguro('estadoPagina')?>').val() == 'modificarCondiciones'){
		var cantidad = $('#<?php echo $this->campoSeguro('cantidadCargaCond')?>').val();
		$("#<?php echo $this->campoSeguro('cantidadCondicionesConcepto') ?>").val(cantidad)

		var entonces = $('#<?php echo $this->campoSeguro('cargaCondEntonces')?>').val();
		var cadenasEntonces = entonces.split("|");

		var si = $('#<?php echo $this->campoSeguro('cargaCondSi')?>').val();
		var cadenasSi = si.split("|");
		
		var indice = 0;
		
		while (iCnt < cantidad) {
			 
			iCnt = iCnt + 1;
	 
			// Añadir elementos Dinamicos en el DOM
			
			$(container).append('<fieldset id=panel'+iCnt+' class="ui-widget ui-widget-content">'+
					'<legend class="ui-state-default ui-corner-all"> CONDICIÓN #'+iCnt+'</legend>'+
					'<div>'+
						'<div id=lab1'+iCnt+' class="col-md-2">'+
							'<label> Si </label> ' + 
						'</div>'+
						'<input type=text class="input" id=tb1' + iCnt + ' size="80"  maxlength="500" value="' + cadenasSi[indice] + '" />'+
					'</div>'+
					'<div>'+
						'<div id=lab2'+iCnt+' class="col-md-2">'+
							'<label> Entonces </label> ' + 
						'</div>'+
						'<input type=text class="input" id=tb2' + iCnt + ' size="80"  maxlength="500" value="' + cadenasEntonces[indice] + '" />'+
					'</div>'+ 
					'</fieldset>');
			
			$('#camposDinamicos').after(container);
			$('#sel1'+iCnt).width(120);
			$('#sel1'+iCnt).select2();
			
			$('#sel2'+iCnt).width(120);
			$('#sel2'+iCnt).select2();
            
           

	        indice++;
	   
		}
		
	}				 
});

				 

        
        
        
	
        
});
//Funciones de arrastre apara dinamicos
//
//	 
           
</script>