<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<script type="text/javascript">
 function volver(){
 	window.history.back(-1);
 }
 function refrescar(){
 	location.reload();
 }
</script>
<div class="well">
<input type="button" class="btn btn-primary" value="Regrezar" onclick="javascrip:volver();">
<input type="button" class="btn btn-warning" value="Refrescar" onclick="javascrip:refrescar();">
</div>
<?php 
/*
 * Nombre Documento: ui.php
 * Autor: 
 * Fecha creacion: 01/12/2014 a las 09:54pm
 * Fecha ultima actualizacion: 01/12/2014
 * Descripcion:
 */


include_once('funciones.php');
iniciar();


$grafica=limpiar($_POST['grafica']);

if($grafica=='prendas-vendidas'){
?>
<p>
	<h3>Grafica de prendas vendidas</h3>
</p>
		    <div class="col-md-9">
				<canvas id="canvas"></canvas>
			</div>
	<script src="<?php echo ruta(); ?>js/chart.min.js"></script>
	<script>
	var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

	var barChartData = {
		labels : ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
		datasets : [
			{
				fillColor : "rgba(220,220,220,0.5)",
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
			},
		]

	}
	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true
		});
	}

	</script>
<?php
}
elseif($grafica=="grafica-usuairos"){
?>
<p>
	<h3>Grafica de registro de usuarios</h3>
</p>
		    <div class="col-md-9">
				<canvas id="canvas"></canvas>
			</div>
	<script src="<?php echo ruta(); ?>js/chart.min.js"></script>
	<script>
	var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

	var barChartData = {
		labels : ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
		datasets : [
			{
				fillColor : "rgba(151,187,205,0.5)",
				strokeColor : "rgba(151,187,205,0.8)",
				highlightFill : "rgba(151,187,205,0.75)",
				highlightStroke : "rgba(151,187,205,1)",
				data : [100,200,300,400,500,600,700,800,900,1000,2000,3000]
			}
		]

	}
	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true
		});
	}

	</script>
<?php
}
 ?>