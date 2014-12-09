$.resetear_poputs=function(){ 
	$(".mensaje").html("");
	$("form").css({display:'none'});
}
$.mostrar_poput=function(id){
	$("#"+id).css({display:'block'});
}
$.caracteristicas_poput=function(titulo){
	$(".modal-title").html(titulo);
}
/*Nuevo*/
$("#agregar-tipo").on('click',function(){
	$.resetear_poputs();
	$.mostrar_poput('nuevo-tipo');
	$.caracteristicas_poput('Registrar nuevo tipo de prenda');
	$('#opcion-tipo').modal('toggle');
});
$('#nuevo-tipo').ajaxForm({
   beforeSubmit:function(){
   	$('.mensaje').html("Guardando....");
	 $('#opcion-tipo').modal('hide'); 
   },
   success:function(msg1){
		$.ajax({
		        type: "POST",
		        url: "lib/ui.php",
		        data: { mod : 'opciones' , realizar : 'mod-tipos' }
		       }).done(function( msg ) {
		           $('.visual-configuracion').html( msg );
		           $('.mensaje').css({color:'rgb(0,0,123)'});
		           $('.mensaje').html(msg1);
		       });

   }
});
/*Editar*/
$('.glyphicon-edit').on('click',function(){
	var data=$(this).data('id');
	var tipo=$(this).data('tipo');
	$.resetear_poputs();
	$.mostrar_poput('editar-tipo');
	$.caracteristicas_poput('Editar nombre tipo de prenda');
	$(".input-edit-cod-tipo").val(data);
	$(".input-edit-tipo").val(tipo);
	$('#opcion-tipo').modal('toggle');
});
$('#editar-tipo').ajaxForm({
   beforeSubmit:function(){
   	$('.mensaje').html("Actualizando....");
	 $('#opcion-tipo').modal('hide'); 
   },
   success:function(msg1){
		$.ajax({
		        type: "POST",
		        url: "lib/ui.php",
		        data: { mod : 'opciones' , realizar : 'mod-tipos' }
		       }).done(function( msg ) {
		           $('.visual-configuracion').html( msg );
		           $('.mensaje').css({color:'rgb(0,0,123)'});
		           $('.mensaje').html(msg1);
		       });

   }
});
/*Eliminar*/
$('.glyphicon-remove').on('click',function(){
	var data=$(this).data('id');
	$.resetear_poputs();
	$.mostrar_poput('eliminar-tipo');
	$.caracteristicas_poput('Eliminar tipo de prenda');
	$(".input-remove-cod-tipo").val(data);
	$('#opcion-tipo').modal('toggle');
});
$('#eliminar-tipo').ajaxForm({
   beforeSubmit:function(){
   	$('.mensaje').html("Eliminando....");
	 $('#opcion-tipo').modal('hide'); 
   },
   success:function(msg1){
		$.ajax({
		        type: "POST",
		        url: "lib/ui.php",
		        data: { mod : 'opciones' , realizar : 'mod-tipos' }
		       }).done(function( msg ) {
		       	   $.resetear_poputs();
		           $('.visual-configuracion').html( msg );
		           $('.mensaje').css({color:'rgb(0,0,123)'});
		           $('.mensaje').html(msg1);
		       });

   }
});