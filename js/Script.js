$('.share').click(function(){
	$('.box-light').fadeIn(600);
});

$('body').keypress(function(){
	$('.box-light').fadeOut(600);
});

/*contacto*/

$('.btn-contacto').click(function(){
	$('.titulo-contacto,.form').slideToggle(500);
	$('html,body').stop(true,true).animate({
        scrollTop:$('.form').offset().top
    },1000);
	
});

/*admin banner*/

$('.banner-btn').click(function(){
	$('.inventario,.promociones,.noticias,.ventas,.configuracion').fadeOut(800)
	$('.banner').fadeToggle(800);	
});

$('.inventario-btn').click(function(){
	$('.banner,.promociones,.noticias,.ventas,.configuracion').fadeOut(800)
	$('.inventario').fadeToggle(800);
	
});

$('.promociones-btn').click(function(){
	$('.banner,.inventario,.noticias,.ventas,.configuracion').fadeOut(800)
	$('.promociones').fadeToggle(800);
	
});

$('.noticias-btn').click(function(){
	$('.banner,.inventario,.promociones,.ventas,.configuracion').fadeOut(800)
	$('.noticias').fadeToggle(800);
	
});

$('.ventas-btn').click(function(){
	$('.banner,.inventario,.noticias,.promociones,.configuracion').fadeOut(800)
	$('.ventas').fadeToggle(800);
	
});

/*ventas*/

$('.registro-btn').click(function(){
	$('.envios,.usuarios,.pagos').fadeOut(800)
	$('.registro').fadeToggle(800);
	
});

$('.envios-btn').click(function(){
	$('.registro,.usuarios,.pagos').fadeOut(800)
	$('.envios').fadeToggle(800);
	
});

$('.usuarios-btn').click(function(){
	$('.envios,.registro,.pagos').fadeOut(800)
	$('.usuarios').fadeToggle(800);
	
});

$('.pagos-btn').click(function(){
	$('.registro,.envios,.usuarios').fadeOut(800)
	$('.pagos').fadeToggle(800);
	
});

/*configuración*/
$('.configuracion-btn').click(function(){
	$('.banner,.inventario,.noticias,.promociones,.ventas').fadeOut(800)
	$('.configuracion').fadeToggle(800);
});




