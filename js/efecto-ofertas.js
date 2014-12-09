$.post('lib/propiedades-carrito.php',{ver:'contador'},function(data){
	$(".badge-carrito").html(parseInt(data)-1);
});


$(".item-ofertas").hover(
	function(){
		var codigo=$(this).data('codigo');
		var elemento=$(this).position();
		var width=$(this).css('width');
		$(".datos-producto > p > button").data('codigo',codigo);
		$(".datos-producto").css({top:elemento.top,left:elemento.left,display:'block',width:width});
	}
);
$(".vista-rapida").on('click',function(){
	$(".datos-producto").css({display:'none'});
	$("#vista-rapida-popup").modal('show');
});
$(".anadir-carrito").on('click',function(){
	var cod_producto=1;
	var cantidad=2;
	var talla=1;
	$.post('lib/iniciar-carrito.php',{cod_producto:cod_producto,cantidad:cantidad,talla:talla},function(data){
		$("#mensaje").html(data);
		$("#mensaje").show(function(){
			$("#mensaje").slideUp(6000);
		});
		$.post('lib/propiedades-carrito.php',{ver:'contador'},function(data){
			$(".badge-carrito").html(parseInt(data)-1);
		});
	});
	$(".ingresar-pedido").css({display:'block'});
});
$("#carousel li a").on('click',function(event){
	event.preventDefault();
});
$(".img-producto").on('click',function(){
	var src=$(this).attr('src');
	$(".img-mostrar").attr('src',src);
});