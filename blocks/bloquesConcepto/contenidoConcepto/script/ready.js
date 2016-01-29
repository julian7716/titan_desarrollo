
// Asociar el widget de validación al formulario
$("#login").validationEngine({
	promptPosition : "centerRight",
	scroll : false
});

$('#usuario').keydown(function(e) {
    if (e.keyCode == 13) {
        $('#login').submit();
    }
});

$('#clave').keydown(function(e) {
    if (e.keyCode == 13) {
        $('#login').submit();
    }
});

$(function() {
	$(document).tooltip({
		position : {
			my : "left+30 center",
			at : "right center"
		}
	},
	{ hide: { duration: 800 } }
	);
});

$(function() {
	$("button").button().click(function(event) {
		event.preventDefault();
	});
});

$("#tablaReporte").dataTable().fnDestroy();

$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#tablaReporte tfoot th').each( function () {
        var title = $(this).text();
        
        $(this).html( '<input type="text" placeholder="'+title+'" size="15"/>' );
    } );
 
    // DataTable
//    var table = 






        $('#tablaReporte').DataTable({
    
        
    "language": {
        "sProcessing":     "Procesando...",
        "sLengthMenu":     "Mostrar _MENU_ registros",
	"sZeroRecords":    "No se encontraron resultados",
        "sSearch":         "Buscar:",
        "sLoadingRecords": "Cargando...",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
	"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
	"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
	"oPaginate": {
		"sFirst":    "Primero",
		"sLast":     "Ãšltimo",
		"sNext":     "Siguiente",
		"sPrevious": "Anterior"
	}
    }
    });
    
//    $('#tablaReporte tbody')
//        .on( 'mouseenter', 'td', function () {
//            var colIdx = table.cell(this).index().column;
// 
//            $( table.cells().nodes() ).removeClass( 'highlight' );
//            $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
//        } );
//    // Apply the search
//    table.columns().every( function () {
//        var that = this;
// 
//        $( 'input', this.footer() ).on( 'keyup change', function () {
//            if ( that.search() !== this.value ) {
//                that
//                    .search( this.value )
//                    .draw();
//            }
//        } );
//    } );
} );


$("#btOper1").click(function(){
	var actual = $('#<?php echo $this->campoSeguro('formula')?>').val();
	var post = actual + "(";
	$('#<?php echo $this->campoSeguro('formula')?>').val(post);
});

$("#btOper2").click(function(){
	var actual = $('#<?php echo $this->campoSeguro('formula')?>').val();
	var post = actual + ")";
	$('#<?php echo $this->campoSeguro('formula')?>').val(post);
});

$("#btOper3").click(function(){
	var actual = $('#<?php echo $this->campoSeguro('formula')?>').val();
	var post = actual + "+";
	$('#<?php echo $this->campoSeguro('formula')?>').val(post);
});

$("#btOper4").click(function(){
	var actual = $('#<?php echo $this->campoSeguro('formula')?>').val();
	var post = actual + "-";
	$('#<?php echo $this->campoSeguro('formula')?>').val(post);
});

$("#btOper5").click(function(){
	var actual = $('#<?php echo $this->campoSeguro('formula')?>').val();
	var post = actual + "*";
	$('#<?php echo $this->campoSeguro('formula')?>').val(post);
});

$("#btOper6").click(function(){
	var actual = $('#<?php echo $this->campoSeguro('formula')?>').val();
	var post = actual + "/";
	$('#<?php echo $this->campoSeguro('formula')?>').val(post);
});

$("#btOper7").click(function(){
	var actual = $('#<?php echo $this->campoSeguro('formula')?>').val();
	var post = actual + "√";
	$('#<?php echo $this->campoSeguro('formula')?>').val(post);
});

$("#btOper8").click(function(){
	var actual = $('#<?php echo $this->campoSeguro('formula')?>').val();
	var post = actual + "^";
	$('#<?php echo $this->campoSeguro('formula')?>').val(post);
});

$("#btOper9").click(function(){
	$('#<?php echo $this->campoSeguro('formula')?>').val("");
});

$("#ingresoBotonesConcepto").hide("fast");
$("#editarBotonesConcepto").hide("fast");

$("#btEditB").click(function(){
	$("#editarBotonesConcepto").hide("fast");
	$("#ingresoBotonesConcepto").show("slow");
	$('#<?php echo $this->campoSeguro('valorConcepto')?>').removeAttr("readonly");
	$('#<?php echo $this->campoSeguro('valorConcepto')?>').removeClass("readOnly");
});

$("#btOper1B").click(function(){
	var actual = $('#<?php echo $this->campoSeguro('valorConcepto')?>').val();
	var post = actual + "(";
	$('#<?php echo $this->campoSeguro('valorConcepto')?>').val(post);
});

$("#btOper2B").click(function(){
	var actual = $('#<?php echo $this->campoSeguro('valorConcepto')?>').val();
	var post = actual + ")";
	$('#<?php echo $this->campoSeguro('valorConcepto')?>').val(post);
});

$("#btOper3B").click(function(){
	var actual = $('#<?php echo $this->campoSeguro('valorConcepto')?>').val();
	var post = actual + "+";
	$('#<?php echo $this->campoSeguro('valorConcepto')?>').val(post);
});

$("#btOper4B").click(function(){
	var actual = $('#<?php echo $this->campoSeguro('valorConcepto')?>').val();
	var post = actual + "-";
	$('#<?php echo $this->campoSeguro('valorConcepto')?>').val(post);
});

$("#btOper5B").click(function(){
	var actual = $('#<?php echo $this->campoSeguro('valorConcepto')?>').val();
	var post = actual + "*";
	$('#<?php echo $this->campoSeguro('valorConcepto')?>').val(post);
});

$("#btOper6B").click(function(){
	var actual = $('#<?php echo $this->campoSeguro('valorConcepto')?>').val();
	var post = actual + "/";
	$('#<?php echo $this->campoSeguro('valorConcepto')?>').val(post);
});

$("#btOper7B").click(function(){
	var actual = $('#<?php echo $this->campoSeguro('valorConcepto')?>').val();
	var post = actual + "√";
	$('#<?php echo $this->campoSeguro('valorConcepto')?>').val(post);
});

$("#btOper8B").click(function(){
	var actual = $('#<?php echo $this->campoSeguro('valorConcepto')?>').val();
	var post = actual + "^";
	$('#<?php echo $this->campoSeguro('valorConcepto')?>').val(post);
});

$("#btOper9B").click(function(){
	$('#<?php echo $this->campoSeguro('valorConcepto')?>').val("");
});

$("#btOper10B").click(function(){
	var actual = $('#<?php echo $this->campoSeguro('formula')?>').val();
	var post = actual + $('#<?php echo $this->campoSeguro('valorConcepto')?>').val();
	$('#<?php echo $this->campoSeguro('formula')?>').val(post);
});