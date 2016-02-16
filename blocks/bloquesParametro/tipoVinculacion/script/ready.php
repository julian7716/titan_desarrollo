

$("#tipoVinculacion").validationEngine({
	promptPosition : "centerRight",
	scroll: false,
	autoHidePrompt: true,
	autoHideDelay: 2000
});


    
    
$('#datepicker').datepicker({
	autoHidePrompt: true
});

$('#<?php echo $this->campoSeguro('naturaleza')?>').width(250); 
$("#<?php echo $this->campoSeguro('naturaleza')?>").select2();


$('#<?php echo $this->campoSeguro('ley')?>').width(250); 
$("#<?php echo $this->campoSeguro('ley')?>").select2();


$('#<?php echo $this->campoSeguro('rubro')?>').width(250); 
$("#<?php echo $this->campoSeguro('rubro')?>").select2();