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
$("#agregar-color").on('click',function(){
	$.resetear_poputs();
	$.mostrar_poput('nuevo-color');
	$.caracteristicas_poput('Registrar nuevo color');
	$('#opcion-color').modal('toggle');
});
$('#nuevo-color').ajaxForm({
   beforeSubmit:function(){
   	$('.mensaje').html("Guardando....");
	 $('#opcion-color').modal('hide'); 
   },
   success:function(msg1){
		$.ajax({
		        type: "POST",
		        url: "lib/ui.php",
		        data: { mod : 'opciones' , realizar : 'mod-colores' }
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
	var color=$(this).data('color');
	$.resetear_poputs();
	$.mostrar_poput('editar-color');
	$.caracteristicas_poput('Editar nombre de color');
	$(".input-edit-cod-color").val(data);
	$(".input-edit-color").val(color);
	$('#opcion-color').modal('toggle');
});
$('#editar-color').ajaxForm({
   beforeSubmit:function(){
   	$('.mensaje').html("Actualizando....");
	 $('#opcion-color').modal('hide'); 
   },
   success:function(msg1){
		$.ajax({
		        type: "POST",
		        url: "lib/ui.php",
		        data: { mod : 'opciones' , realizar : 'mod-colores' }
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
	$.mostrar_poput('eliminar-color');
	$.caracteristicas_poput('Eliminar color');
	$(".input-remove-cod-color").val(data);
	$('#opcion-color').modal('toggle');
});
$('#eliminar-color').ajaxForm({
   beforeSubmit:function(){
   	$('.mensaje').html("Eliminando....");
	 $('#opcion-color').modal('hide'); 
   },
   success:function(msg1){
		$.ajax({
		        type: "POST",
		        url: "lib/ui.php",
		        data: { mod : 'opciones' , realizar : 'mod-colores' }
		       }).done(function( msg ) {
		       	   $.resetear_poputs();
		           $('.visual-configuracion').html( msg );
		           $('.mensaje').css({color:'rgb(0,0,123)'});
		           $('.mensaje').html(msg1);
		       });

   }
});