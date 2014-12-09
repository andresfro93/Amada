<?php 
/*
 * Nombre Documento: extends.tabs.php
 * Autor: 
 * Fecha creacion: 27/11/2014 a las 12:54pm
 * Fecha ultima actualizacion: 27/11/2014
 * Descripcion: Este archivo incicia conexion a la base de datos con el modelo singleton de la aplicacion, este arhivo es el inicio de controlador
 */
class BaseDatos{
	private static $_driver=DRIVER;
	private static $_host=HOST;
	private static $_dbname=DBNAME;
	private static $_usuario=USER;
	private static $_clave=PASSWORD;
	private static $_conexion;


	private function BaseDatos() {
		
	}
	public static function getInstance(){
		$dsn=self::$_driver.":host=".self::$_host.";dbname=".self::$_dbname;
		if(!isset(self::$_conexion)){
		  self::$_conexion=new PDO($dsn,self::$_usuario,self::$_clave,array(PDO::ATTR_PERSISTENT=>false,PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));
		  self::$_conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}
		return self::$_conexion;
	}
	public function Exec($sql){
		return self::$_conexion->exec($sql);
	}
	public function Query($sql){
		return self::$_conexion->query($sql);
	}
	public function _clone(){
		trigger_error("Este objeto no se puede clonar",E_USER_ERROR);
	}
}
 ?>