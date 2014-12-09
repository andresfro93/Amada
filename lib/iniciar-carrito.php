<?php 


session_start();


$cod_producto=$_POST['cod_producto'];
$cantidad=$_POST['cantidad'];
$talla=$_POST['talla'];


if(!isset($_SESSION['contador'])){
 $_SESSION['contador']=1;
}
$_SESSION['boton']=1;
if(!isset($_SESSION['pedido'])){
$_SESSION['pedido']=array();
}
$_SESSION['pedido'][$_SESSION['contador']]=array(
	'cod_producto' => $cod_producto, 
	'cantidad'  => $cantidad,
	'talla' => $talla
 );

echo "Se cargo el producto al carrito de compras. Ha comprado ".$_SESSION['contador']." productos";
$_SESSION['contador']+=1;

?>