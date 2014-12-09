<?php 
/*
 * Nombre Documento: class.DAO.tab.php
 * Autor: 
 * Fecha creacion: 27/11/2014 a las 12:54pm
 * Fecha ultima actualizacion: 27/11/2014
 * Descripcion: Este archivo contiene todas las clases de las entidades, funciona como controlador
 */

class DAOEspecial{
	private $sql;
	private $_condb;
	public function DAOEspecial(){
		$this->_condb= BaseDatos::getInstance();
	}	
	public function setSQL($sql){
		$this->sql=$sql;
	}
	public function ejecutar(){
		return $this->_condb->Exec($this->sql);
	}
}
class DAOTalla{
	private $cod_talla;
	private $talla;
	private $_condb;

	public function DAOTalla(){
		$this->_condb= BaseDatos::getInstance();
	}
	public function registrar(){
    	$sql="insert into tallas (talla) values ('$this->talla')";
    	return $this->_condb->Exec($sql);
	}
	public function editar(){
		$sql="update tallas set talla='$this->talla' where cod_talla=$this->cod_talla";
		return $this->_condb->Exec($sql);
	}
	public function eliminar(){
		$sql="delete from tallas where cod_talla=$this->cod_talla";
		return $this->_condb->Exec($sql);
	}
	public function consultar($condicion='where 1'){
		$sql="select cod_talla,talla from tallas ".$condicion;
		return $this->_condb->Exec($sql);
	}
	public function setAtributos($nombre,$valor){
		switch ($nombre) {
			case 'cod_talla':
			   $this->cod_talla=$valor;
			break;
			case 'talla':
			   $this->talla=$valor;
			break;
			default:
				echo 'El administrador de atributos de tallas dice: '.error('error-atributo');
				break;
		}
	}
	public function getAtributos($nombre){
		switch ($nombre) {
			case 'cod_talla':
			   return $this->cod_talla;	
			break;
			case 'talla':
			  return $this->talla;
			break;
			default:
				echo 'El administrador de atributos de tallas dice: '.error('error-atributo'); 
				break;
		}
	}
}
class DAOTipo{
	private $cod_tipo;
	private $tipo;
	private $_condb;

	public function DAOTipo(){
		$this->_condb= BaseDatos::getInstance();
	}
	public function registrar(){
    	$sql="insert into tipo_producto (tipo) values ('$this->tipo')";
    	$id=$this->_condb->Exec($sql);
    	if($id){
    		return $this->_condb->lastInsertId();
    	}else{
    		return $id;
    	}
	}
	public function editar(){
		$sql="update tipo_producto set tipo='$this->tipo' where cod_tipo=$this->cod_tipo";
		return $this->_condb->Exec($sql);
	}
	public function eliminar(){
		$sql="delete from tipo_producto where cod_tipo=$this->cod_tipo";
		return $this->_condb->Exec($sql);
	}
	public function consultar($condicion='where 1'){
		$sql="select cod_tipo,tipo from tipo_producto ".$condicion;
		return $this->_condb->Query($sql);
	}
	public function setAtributos($nombre,$valor){
		switch ($nombre) {
			case 'cod_tipo':
			   $this->cod_tipo=$valor;
			break;
			case 'tipo':
			   $this->tipo=$valor;
			break;
			default:
				echo 'El administrador de atributos de tallas dice: '.error('error-atributo');
				break;
		}
	}
	public function getAtributos($nombre){
		switch ($nombre) {
			case 'cod_tipo':
			   return $this->cod_tipo;	
			break;
			case 'tipo':
			  return $this->tipo;
			break;
			default:
				echo 'El administrador de atributos de tallas dice: '.error('error-atributo'); 
				break;
		}
	}
}
class DAOCuerpo{
	private $cod_cuerpo;
	private $cuerpo;
	private $_condb;

	public function DAOCuerpo(){
		$this->_condb= BaseDatos::getInstance();
	}
	public function registrar(){
    	$sql="insert into cuerpos (cuerpo) values ('$this->talla')";
    	return $this->_condb->Exec($sql);
	}
	public function editar(){
		$sql="update cuerpos set cuerpo='$this->cuerpo' where cod_cuerpo=$this->cod_cuerpo";
		return $this->_condb->Exec($sql);
	}
	public function eliminar(){
		$sql="delete from cuerpos where cod_cuerpo=$this->cod_cuerpo";
		return $this->_condb->Exec($sql);
	}
	public function consultar($condicion='where 1'){
		$sql="select cod_cuerpo,cuerpo from cuerpos ".$condicion;
		return $this->_condb->Query($sql);
	}
	public function setAtributos($nombre,$valor){
		switch ($nombre) {
			case 'cod_cuerpo':
			   $this->cod_cuerpo=$valor;
			break;
			case 'cuerpo':
			   $this->cuerpo=$valor;
			break;
			default:
				echo 'El administrador de atributos de cuerpos dice: '.error('error-atributo');
				break;
		}
	}
	public function getAtributos($nombre){
		switch ($nombre) {
			case 'cod_cuerpo':
			   return $this->cod_cuerpo;	
			break;
			case 'cuerpo':
			  return $this->cuerpo;
			break;
			default:
				echo 'El administrador de atributos de cuerpos dice: '.error('error-atributo'); 
				break;
		}
	}	
}
class DAOColor{
	private $cod_color;
	private $color;
	private $_condb;

	public function DAOColor(){
		$this->_condb= BaseDatos::getInstance();
	}
	public function registrar(){
    	$sql="insert into colores (color) values ('$this->color')";
    	return $this->_condb->Exec($sql);
	}
	public function editar(){
		$sql="update colores set color='$this->color' where cod_color=$this->cod_color";
		return $this->_condb->Exec($sql);
	}
	public function eliminar(){
		$sql="delete from colores where cod_color=$this->cod_color";
		return $this->_condb->Exec($sql);
	}
	public function consultar($condicion='where 1'){
		$sql="select cod_color,color from colores ".$condicion;
		return $this->_condb->Query($sql);
	}
	public function setAtributos($nombre,$valor){
		switch ($nombre) {
			case 'cod_color':
			   $this->cod_color=$valor;
			break;
			case 'color':
			   $this->color=$valor;
			break;
			default:
				echo 'El administrador de atributos de colores dice: '.error('error-atributo');
				break;
		}
	}
	public function getAtributos($nombre){
		switch ($nombre) {
			case 'cod_color':
			   return $this->cod_color;	
			break;
			case 'color':
			  return $this->color;
			break;
			default:
				echo 'El administrador de atributos de colores dice: '.error('error-atributo'); 
				break;
		}
	}
}
class DAOCliente{
	private $cod_cliente;
	private $nombre;
	private $correo;
	private $direccion;
	private $telefono;
	private $_condb;

	public function DAOCliente(){
		$this->_condb= BaseDatos::getInstance();
	}
	public function registrar(){
    	$sql="insert into clientes (nombre,correo,direccion,telefono) values ('$this->nombre','$this->correo','$this->direccion','$this->telefono')";
    	return $this->_condb->Exec($sql);
	}
	public function editar(){
		$sql="update clientes set nombre='$this->nombre',correo='$this->correo',direccion='$this->direccion',telefono='$this->telefono' where cod_cliente=$this->cod_cliente";
		return $this->_condb->Exec($sql);
	}
	public function eliminar(){
		$sql="delete from clientes where cod_cliente=$this->cod_cliente";
		return $this->_condb->Exec($sql);
	}
	public function consultar($condicion='where 1'){
		$sql="select cod_cliente,nombre,correo,direccion,telefono from clientes ".$condicion;
		return $this->_condb->Exec($sql);
	}
	public function setAtributos($nombre,$valor){
		switch ($nombre) {
			case 'cod_cliente':
			   $this->cod_cliente=$valor;
			break;
			case 'nombre':
			   $this->nombre=$valor;
			break;
			case 'correo':
			   $this->correo=$valor;
			break;
			case 'direccion':
			   $this->direccion=$valor;
			break;
			case 'telefono':
			  $this->telefono=$valor;
			break;
			default:
				echo 'El administrador de atributos de clientes dice: '.error('error-atributo');
				break;
		}
	}
	public function getAtributos($nombre){
		switch ($nombre) {
			case 'cod_cliente':
			   return $this->cod_cliente;
			break;
			case 'nombre':
			   return $this->nombre;
			break;
			case 'correo':
			   return $this->correo;
			break;
			case 'direccion':
			   return $this->direccion;
			break;
			case 'telefono':
			   return $this->telefono;
			break;
			default:
				echo 'El administrador de atributos de clientes dice: '.error('error-atributo'); 
				break;
		}
	}
}
class DAOCodigo_descuento{
	private $cod_descuentos;
	private $codigo;
	private $estado;
	private $_condb;

	public function DAOCodigo_descuento(){
		$this->_condb= BaseDatos::getInstance();
	}
	public function registrar(){
    	$sql="insert into codigos_descuentos (codigo,estado) values ('$this->codigo','$this->estado')";
    	return $this->_condb->Exec($sql);
	}
	public function editar(){
		$sql="update codigos_descuentos set codigo='$this->codigo',estado='$this->estado' where cod_descuentos=$this->cod_descuentos";
		return $this->_condb->Exec($sql);
	}
	public function eliminar(){
		$sql="delete from codigos_descuentos where cod_descuentos=$this->cod_talla";
		return $this->_condb->Exec($sql);
	}
	public function consultar($condicion='where 1'){
		$sql="select cod_descuentos,codigo,estado from codigos_descuentos ".$condicion;
		return $this->_condb->Exec($sql);
	}
	public function setAtributos($nombre,$valor){
		switch ($nombre) {
			case 'cod_descuentos':
			   $this->cod_descuentos=$valor;
			break;
			case 'talla':
			   $this->codigo=$valor;
			break;
			case 'estado':
			   $this->estado=$valor;
			break;
			default:
				echo 'El administrador de atributos de tallas dice: '.error('error-atributo');
				break;
		}
	}
	public function getAtributos($nombre){
		switch ($nombre) {
			case 'cod_descuentos':
			   return $this->cod_descuentos;
			break;
			case 'codigo':
			   return $this->codigo;
			break;
			case 'estado':
			   return $this->estado;
			break;
			default:
				echo 'El administrador de atributos de tallas dice: '.error('error-atributo'); 
				break;
		}
	}
}
class DAOGaleria_producto{
	private $cod_registro;
	private $nombre;
	private $extension;
	private $url;
	private $destacada;
	private $cod_producto;
	private $_condb;

	public function DAOGaleria_producto(){
		$this->_condb= BaseDatos::getInstance();
	}
	public function registrar(){
    	$sql="insert into galerias_productos (nombre,extension,url,destacada,cod_producto) values ('$this->nombre','$this->extension','$this->url',$this->destacada,$this->cod_producto)";
    	return $this->_condb->Exec($sql);
	}
	public function editar(){
		$sql="update galerias_productos set nombre='$this->nombre',extension='$this->extension',url='$this->url',destacada=$this->destacada,cod_producto=$this->cod_producto where cod_registro=$this->cod_registro";
		return $this->_condb->Exec($sql);
	}
	public function eliminarGaleria(){
		$sql="delete from galerias_productos where cod_producto=$this->cod_producto";
		return $this->_condb->Exec($sql);
	}
	public function eliminar(){
		$sql="delete from galerias_productos where cod_registro=$this->cod_registro";
		return $this->_condb->Exec($sql);		
	}
	public function consultar($condicion='where 1'){
		$sql="select cod_registro,nombre,extension,url,destacada,cod_producto from galerias_productos ".$condicion;
		return $this->_condb->Query($sql);
	}
	public function setAtributos($nombre,$valor){
		switch ($nombre) {
			case 'cod_registro':
			   $this->cod_registro=$valor;
			break;
			case 'nombre':
			   $this->nombre=$valor;
			break;
			case 'extension':
			   $this->extension=$valor;
			break;
			case 'url':
			   $this->url=$valor;
			break;
			case 'destacada':
			   $this->destacada=$valor;
			break;
			case 'cod_producto':
			   $this->cod_producto=$valor;
			break;
			default:
				echo 'El administrador de atributos de galerias_productos dice: '.error('error-atributo');
				break;
		}
	}
	public function getAtributos($nombre){
		switch ($nombre) {
			case 'cod_registro':
			   return $this->cod_registro;
			break;
			case 'nombre':
			   return $this->nombre;
			break;
			case 'extension':
			   return $this->extension;
			break;
			case 'url':
			   return $this->url;
			break;
			case 'destacada':
			   return $this->destacada;
			break;
			case 'cod_producto':
			   return $this->cod_producto;
			break;
			default:
				echo 'El administrador de atributos de galerias_productos dice: '.error('error-atributo'); 
				break;
		}
	}
}
class DAOProducto{
	private $cod_producto;
	private $nombre;
	private $referencia;
	private $valor;
	private $cantidad;
	private $cod_cuerpo;
	private $cod_color;
	private $cod_tipo;

	public function DAOProducto(){
		$this->_condb= BaseDatos::getInstance();
	}
	public function registrar(){
    	$sql="insert into productos (nombre,referencia,valor,cantidad,cod_cuerpo,cod_color,cod_tipo) values ('$this->nombre','$this->referencia','$this->valor',$this->cantidad,$this->cod_cuerpo,$this->cod_color,$this->cod_tipo)";
    	$id=$this->_condb->Exec($sql);
    	if($id){
    		return $this->_condb->lastInsertId();
    	}else{
    		return $id;
    	}
	}
	public function editar(){
		$sql="update productos set nombre='$this->nombre',referencia='$this->referencia',valor='$this->url',cantidad=$this->cantidad,cod_cuerpo=$this->cod_producto,cod_color=$this->cod_color,cod_tipo=$this->cod_tipo where cod_producto=$this->cod_producto";
		return $this->_condb->Exec($sql);
	}
	public function eliminar(){
		$sql="delete from productos where cod_producto=$this->cod_producto";
		return $this->_condb->Exec($sql);		
	}
	public function consultar($condicion='where 1'){
		$sql="select cod_producto,nombre,referencia,valor,cantidad,cod_cuerpo,cod_color,cod_tipo from productos ".$condicion;
		return $this->_condb->Query($sql);
	}
	public function setAtributos($nombre,$valor){
		switch ($nombre) {
			case 'cod_producto':
			   $this->cod_producto=$valor;
			break;
			case 'nombre':
			   $this->nombre=$valor;
			break;
			case 'referencia':
			   $this->referencia=$valor;
			break;
			case 'valor':
			   $this->valor=$valor;
			break;
			case 'cantidad':
			   $this->cantidad=$valor;
			break;
			case 'cod_cuerpo':
			   $this->cod_cuerpo=$valor;
			break;
			case 'cod_color':
			   $this->cod_color=$valor;
			break;
			case 'cod_tipo':
			  $this->cod_tipo=$valor;
			break;
			default:
				echo 'El administrador de atributos de productos dice: '.error('error-atributo');
				break;
		}
	}
	public function getAtributos($nombre){
		switch ($nombre) {
			case 'cod_producto':
			   $this->cod_producto;
			break;
			case 'nombre':
			   return $this->nombre;
			break;
			case 'referencia':
			   return $this->referencia;
			break;
			case 'valor':
			   return $this->valor;
			break;
			case 'cantidad':
			   return $this->cantidad;
			break;
			case 'cod_cuerpo':
			   return $this->cod_cuerpo;
			break;
			case 'cod_color':
			   return $this->cod_color;
			break;
			case 'cod_tipo':
			  return $this->cod_tipo;
			break;
			default:
				echo 'El administrador de atributos de productos dice: '.error('error-atributo');
				break;
		}
	}
}
 ?>