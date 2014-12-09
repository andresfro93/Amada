<?php 
session_start();


foreach ($_SESSION['pedido'] as $key => $value) {
	echo "<br>Prodcuto : ".$key;
	echo "<br>Cod_producto= ".$value['cod_producto'];
	echo "<br>Cantidad=".$value['cantidad'];
	echo "<br>Talla=".$value['talla'];
}


 ?>