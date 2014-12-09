<?php 
include_once('funciones.php');
session_start();
session_destroy();
header("location: ".ruta());

 ?>