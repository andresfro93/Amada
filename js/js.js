$('.btn-event').on('click',function(){
	var realizar=$(this).data('realizar')
	/*Controlador ajax para los envios de opciones*/
	$.ajax({
            type: "POST",
            url: "lib/ui.php",
           data: { mod : 'opciones' , realizar : realizar }
    }).done(function( msg ) {
        $('.visual-configuracion').html( msg );
    });
    /* /controlador ajax para los envios de opciones*/
});




/*Cargando graficas*/
//$(".grafica-prendas-vendidas").attr('src','http://amadaintima.com/ultima-version/Amada-master/lib/cargar-grafica.php?grafica=prendas-vendidas');
//alert("cargo");