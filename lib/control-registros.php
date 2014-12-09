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


$registrar=limpiar($_POST['registrar']);


if($registrar=="tipo"){
	$tipo=limpiar($_POST['tipo']);
	$objTipo=new Tipo();
	$objTipo->setAtributos('tipo',$tipo);
	$id=$objTipo->registrar();
	if($id){
		echo "Guardado <span class='glyphicon glyphicon-ok'></span>";
	}else{
		echo "Error no se guardo <span class='glyphicon glyphicon-flag'></span>";
	}
	unset($objTipo);
}
elseif($registrar=="cuerpo") {
   $cuerpo=limpiar($_POST['cuerpo']);
   $objCuerpo=new Cuerpo();
   $objCuerpo->setAtributos('cuerpo',$cuerpo);
   $id=$objCuerpo->registrar();
   if($id){
   	  echo "Guardado <span class='glyphicon glyphicon-ok'></span>";
   }else{
   	  echo "Error no se guardo <span class='glyphicon glyphicon-flag'></span>";
   }
   unset($objCuerpo);
}
elseif($registrar=="color") {
   $color=limpiar($_POST['color']);
   $objColor=new Color();
   $objColor->setAtributos('color',$color);
   $id=$objColor->registrar();
   if($id){
   	  echo "Guardado <span class='glyphicon glyphicon-ok'></span>";
   }else{
   	  echo "Error no se guardo <span class='glyphicon glyphicon-flag'></span>";
   }
   unset($objColor);
}
?>