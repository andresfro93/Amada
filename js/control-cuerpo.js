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
$("#agregar-cuerpo").on('click',function(){
	$.resetear_poputs();
	$.mostrar_poput('nuevo-cuerpo');
	$.caracteristicas_poput('Registrar nuevo cuerpo');
	$('#opcion-cuerpo').modal('toggle');
});
$('#nuevo-cuerpo').ajaxForm({
   beforeSubmit:function(){
   	$('.mensaje').html("Guardando....");
	 $('#opcion-cuerpo').modal('hide'); 
   },
   success:function(msg1){
		$.ajax({
		        type: "POST",
		        url: "lib/ui.php",
		        data: { mod : 'opciones' , realizar : 'mod-cuerpos' }
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
	var cuerpo=$(this).data('cuerpo');
	$.resetear_poputs();
	$.mostrar_poput('editar-cuerpo');
	$.caracteristicas_poput('Editar nombre tipo de cuerpo');
	$(".input-edit-cod-cuerpo").val(data);
	$(".input-edit-cuerpo").val(cuerpo);
	$('#opcion-cuerpo').modal('toggle');
});
$('#editar-cuerpo').ajaxForm({
   beforeSubmit:function(){
   	$('.mensaje').html("Actualizando....");
	 $('#opcion-cuerpo').modal('hide'); 
   },
   success:function(msg1){
		$.ajax({
		        type: "POST",
		        url: "lib/ui.php",
		        data: { mod : 'opciones' , realizar : 'mod-cuerpos' }
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
	$.mostrar_poput('eliminar-cuerpo');
	$.caracteristicas_poput('Eliminar tipo de cuerpo');
	$(".input-remove-cod-cuerpo").val(data);
	$('#opcion-cuerpo').modal('toggle');
});
$('#eliminar-cuerpo').ajaxForm({
   beforeSubmit:function(){
   	$('.mensaje').html("Eliminando....");
	 $('#opcion-cuerpo').modal('hide'); 
   },
   success:function(msg1){
		$.ajax({
		        type: "POST",
		        url: "lib/ui.php",
		        data: { mod : 'opciones' , realizar : 'mod-cuerpos' }
		       }).done(function( msg ) {
		       	   $.resetear_poputs();
		           $('.visual-configuracion').html( msg );
		           $('.mensaje').css({color:'rgb(0,0,123)'});
		           $('.mensaje').html(msg1);
		       });

   }
});