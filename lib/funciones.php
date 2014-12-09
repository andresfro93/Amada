<?php 
/*
 * Nombre Documento: funciones.php
 * Autor: 
 * Fecha creacion: 27/11/2014 a las 01:00pm
 * Fecha ultima actualizacion: 27/11/2014
 * Descripcion: Este archivo contiene todas las funciones usadas por la aplicacion...
 */

/*Aqui empieza el codigo*/
function ruta(){
  return 'http://'.$_SERVER['HTTP_HOST'].'/ultima-version/Amada-master/';    
}
function iniciar(){
	/*Includes princial para conectar*/
	include_once('class.configuracion.php');
	include_once('class.basedatos.php');
	include_once('class.DAO.tab.php');
	include_once('extends.tabs.php');
	include_once('objs.php');
}

/*Seguridad*/
function cleanInput($input) {
 
  $search = array(
    '@<script[^>]*?>.*?</script>@si',   // Elimina javascript
    '@<[\/\!]*?[^<>]*?>@si',            // Elimina las etiquetas HTML
    '@<style[^>]*?>.*?</style>@siU',    // Elimina las etiquetas de estilo
    '@<![\s\S]*?--[ \t\n\r]*>@'         // Elimina los comentarios multi-línea
  );
 
    $output = preg_replace($search, '', $input);
    return $output;
  }
 
function limpiar($input) {
    if (is_array($input)) {
        foreach($input as $var=>$val) {
            $output[$var] = limpiar($val);
        }
    }
    else {
        if (get_magic_quotes_gpc()) {
            $input = stripslashes($input);
        }
        $input  = cleanInput($input);
        $output = mysql_real_escape_string($input);
    }
    return trim(strtolower($output));
}
/* /Seguridad */

/*Mensajes de errores*/
function error($error){
	switch ($error) {
		case 'error-mod':
			return ' El modulo no existe!! ';
		break;
		case 'error-opciones-admin':
		   return ' El modulo de la opcion de administracion no se dectecto ';
        case 'error-mod-tallas':
           return ' No se reconocio la opcion.';
        break;
        case 'error-atributo':
            return ' No se logro decetectar el atributo ';
        break;
        case 'error-registro':
            return ' No se pudo registrar los datos';
            break;
		default:
			return ' Contacte soporte no se encontro el motivo del error ';
			break;
	}
}

?>




















