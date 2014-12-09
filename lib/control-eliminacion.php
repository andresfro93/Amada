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


$eliminar=limpiar($_POST['eliminar']);


if($eliminar=="tipo"){
	$cod_tipo=limpiar($_POST['cod_tipo']);
	$objTipo=new Tipo();
	$objTipo->setAtributos('cod_tipo',$cod_tipo);
	$id=$objTipo->eliminar();
	if($id){
		echo "Se elimino el tipo <span class='glyphicon glyphicon-ok'></span>";
	}else{
		echo "Error no se pudo eliminar el tipo <span class='glyphicon glyphicon-flag'></span>";
	}
	unset($objTipo);
}
elseif($eliminar=="cuerpo"){
	$cod_cuerpo=limpiar($_POST['cod_cuerpo']);
	$objCuerpo=new Cuerpo();
	$objCuerpo->setAtributos('cod_cuerpo',$cod_cuerpo);
	$id=$objCuerpo->eliminar();
	if($id){
		echo "Se elimino <span class='glyphicon glyphicon-ok'></span>";
	}else{
		echo "Error no se pudo eliminar <span class='glyphicon glyphicon-flag'></span>";
	}
	unset($objCuerpo);
}
elseif($eliminar=="color"){
	$cod_color=limpiar($_POST['cod_color']);
	$objColor=new Color();
	$objColor->setAtributos('cod_color',$cod_color);
	$id=$objColor->eliminar();
	if($id){
		echo "Se elimino <span class='glyphicon glyphicon-ok'></span>";
	}else{
		echo "Error no se pudo eliminar <span class='glyphicon glyphicon-flag'></span>";
	}
	unset($objColor);
}
?>