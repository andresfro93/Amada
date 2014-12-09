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


$editar=limpiar($_POST['editar']);


if($editar=="tipo"){
	$cod_tipo=limpiar($_POST['cod_tipo']);
	$tipo=limpiar($_POST['tipo']);
	$objTipo=new Tipo();
	$objTipo->setAtributos('cod_tipo',$cod_tipo);
	$objTipo->setAtributos('tipo',$tipo);
	$id=$objTipo->editar();
	if($id){
		echo "Se actualizo <span class='glyphicon glyphicon-ok'></span>";
	}else{
		echo "Error no se actualizo <span class='glyphicon glyphicon-flag'></span>";
	}
	unset($objTipo);
}
elseif($editar=="cuerpo") {
	$cod_cuerpo=limpiar($_POST['cod_cuerpo']);
	$cuerpo=limpiar($_POST['cuerpo']);
	$objCuerpo=new Cuerpo();
	$objCuerpo->setAtributos('cod_cuerpo',$cod_cuerpo);
	$objCuerpo->setAtributos('cuerpo',$cuerpo);
	$id=$objCuerpo->editar();
	if($id){
		echo "Se actualizo <span class='glyphicon glyphicon-ok'></span>";
	}else{
		echo "Error no se actualizo <span class='glyphicon glyphicon-flag'></span>";
	}
	unset($objCuerpo);
}
elseif($editar=="color") {
	$cod_color=limpiar($_POST['cod_color']);
	$color=limpiar($_POST['color']);
	$objColor=new Color();
	$objColor->setAtributos('cod_color',$cod_color);
	$objColor->setAtributos('color',$color);
	$id=$objColor->editar();
	if($id){
		echo "Se actualizo <span class='glyphicon glyphicon-ok'></span>";
	}else{
		echo "Error no se actualizo <span class='glyphicon glyphicon-flag'></span>";
	}
	unset($objColor);
}

?>