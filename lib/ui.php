<?php 
/*
 * Nombre Documento: ui.php
 * Autor: 
 * Fecha creacion: 27/11/2014 a las 12:54pm
 * Fecha ultima actualizacion: 27/11/2014
 * Descripcion: Este archivo recibe peticiones de la IU para motrar datos, hace parte de la vista inicio de la vista.
 */

require_once('funciones.php');
iniciar();

/*Aqui empieza el codigo*/

$mod = limpiar( $_POST['mod'] );
if($mod == "opciones"){
	$realizar=limpiar($_POST['realizar']);
   if($realizar=="mod-tipos"){
   	$objTipos=new Tipo();
   	$consulta=$objTipos->consultar();
?>
<link rel="stylesheet" type="text/css" href="css/style-glyphicon.css">
<style type="text/css">
	form{
		display: none;
	}
</style>

<script src="js/jquery.form.min.js"></script>
<script src="js/control-tipo.js"></script>

<!--Popup-->
<div class="modal" id="opcion-tipo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Titulo accion</h4>
      </div>
      <div class="modal-body">
      	<div class=".mensaje">
      		
      	</div>
        <form id="nuevo-tipo" action="lib/control-registros.php" method="post">
        	<input type="hidden" name="registrar" value="tipo">
        	<p>
        		<label>Escribe el tipo de producto</label>
        		<input type="text" id="tipo" class="form-control" name="tipo" placeholder="Nombre tipo prenda" required>
        	</p>
        	<p>
        		<input type="submit" class="btn btn-primary col-xs-12 col-md-12 col-lg-12" value="Registrar">
        	</p>
        	<br><br>
        </form>
        <form id="editar-tipo" action="lib/control-ediciones.php" method="post">
        	<input type="hidden" name="editar" value="tipo">
        	<input type="hidden" id="cod_tipo" class="input-edit-cod-tipo" name="cod_tipo">
        	<p>
        		<input type="text" id="tipo" class="form-control input-edit-tipo" name="tipo" placeholder="Nombre tipo de prenda" required>
        	</p>
        	<p>
        		<input type="submit" class="btn btn-primary form-control" value="Guardar cambios">
        	</p>
        </form>
        <form id="eliminar-tipo" action="lib/control-eliminacion.php" method="post">
        	<input type="hidden" name="eliminar" value="tipo">
        	<input type="hidden" id="cod_tipo" class="input-remove-cod-tipo" name="cod_tipo">
        	<p>
        		<input type="submit" class="btn btn-primary" value="Continuar">
        		<input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancelar">
        	</p>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


    <p class="text-left">
    	<br>
    	<input type="button" id="agregar-tipo" class="btn btn-default" value="Agregar nuevo tipo">
    	<span class="mensaje"></span>
    </p>
    <table class="table table-responsive">
    	<th class="text-center">Nombre tipo de prenda</th>
    	<th class="text-center">Opciones</th>
<?php
      while ($res=$consulta->fetch()) {
?>
     <tr><td><?php echo $res['tipo'] ?></td><td><span class="glyphicon glyphicon-edit" title="Editar" data-id="<?php echo $res['cod_tipo']; ?>" data-tipo="<?php echo $res['tipo']; ?>"></span> <span class="glyphicon glyphicon-remove" title="Eliminar" data-id="<?php echo $res['cod_tipo']; ?>"></span></td></tr>
<?php
     }
?>
    </table>
<?php
   }
   elseif($realizar=="mod-tallas"){
   	echo "Tallas";
   }
   elseif($realizar=="mod-colores"){
   	   $objColor=new Color();
   	   $consulta=$objColor->consultar();
?>
<link rel="stylesheet" type="text/css" href="css/style-glyphicon.css">
<style type="text/css">
	form{
		display: none;
	}
</style>

<script src="js/jquery.form.min.js"></script>
<script src="js/control-colores.js"></script>

<!--Popup-->
<div class="modal" id="opcion-color" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Titulo accion</h4>
      </div>
      <div class="modal-body">
      	<div class=".mensaje">
      		
      	</div>
        <form id="nuevo-color" action="lib/control-registros.php" method="post">
        	<input type="hidden" name="registrar" value="color">
        	<p>
        		<label>Escribe el color</label>
        		<input type="text" id="color" class="form-control" name="color" placeholder="Nombre nuevo color" required>
        	</p>
        	<p>
        		<input type="submit" class="btn btn-primary col-xs-12 col-md-12 col-lg-12" value="Registrar">
        	</p>
        	<br><br>
        </form>
        <form id="editar-color" action="lib/control-ediciones.php" method="post">
        	<input type="hidden" name="editar" value="color">
        	<input type="hidden" id="cod_color" class="input-edit-cod-color" name="cod_color">
        	<p>
        		<input type="text" id="color" class="form-control input-edit-color" name="color" placeholder="Nombre nuevo color" required>
        	</p>
        	<p>
        		<input type="submit" class="btn btn-primary form-control" value="Guardar cambios">
        	</p>
        </form>
        <form id="eliminar-color" action="lib/control-eliminacion.php" method="post">
        	<input type="hidden" name="eliminar" value="color">
        	<input type="hidden" id="cod_color" class="input-remove-cod-color" name="cod_color">
        	<p>
        		<input type="submit" class="btn btn-primary" value="Continuar">
        		<input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancelar">
        	</p>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


    <p class="text-left">
    	<br>
    	<input type="button" id="agregar-color" class="btn btn-default" value="Agregar nuevo color">
    	<span class="mensaje"></span>
    </p>
    <table class="table table-responsive">
    	<th class="text-center">Nombre color</th>
    	<th class="text-center">Opciones</th>
<?php
      while ($res=$consulta->fetch()) {
?>
     <tr><td><?php echo $res['color'] ?></td><td><span class="glyphicon glyphicon-edit" title="Editar" data-id="<?php echo $res['cod_color']; ?>" data-color="<?php echo $res['color']; ?>"></span> <span class="glyphicon glyphicon-remove" title="Eliminar" data-id="<?php echo $res['cod_color']; ?>"></span></td></tr>
<?php
     }
?>
    </table>


<?php
   }
   elseif($realizar=="mod-cuerpos") {
   	   $objCuerpos=new Cuerpo();
   	   $consulta=$objCuerpos->consultar();
?>
<link rel="stylesheet" type="text/css" href="css/style-glyphicon.css">
<style type="text/css">
	form{
		display: none;
	}
</style>

<script src="js/jquery.form.min.js"></script>
<script src="js/control-cuerpo.js"></script>

<!--Popup-->
<div class="modal" id="opcion-cuerpo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Titulo accion</h4>
      </div>
      <div class="modal-body">
      	<div class=".mensaje">
      		
      	</div>
        <form id="nuevo-cuerpo" action="lib/control-registros.php" method="post">
        	<input type="hidden" name="registrar" value="cuerpo">
        	<p>
        		<label>Escribe el cuerpo</label>
        		<input type="text" id="cuerpo" class="form-control" name="cuerpo" placeholder="Nombre nuevo tipo de cuerpo" required>
        	</p>
        	<p>
        		<input type="submit" class="btn btn-primary col-xs-12 col-md-12 col-lg-12" value="Registrar">
        	</p>
        	<br><br>
        </form>
        <form id="editar-cuerpo" action="lib/control-ediciones.php" method="post">
        	<input type="hidden" name="editar" value="cuerpo">
        	<input type="hidden" id="cod_cuerpo" class="input-edit-cod-cuerpo" name="cod_cuerpo">
        	<p>
        		<input type="text" id="tipo" class="form-control input-edit-cuerpo" name="cuerpo" placeholder="Nombre nuevo cuerpo" required>
        	</p>
        	<p>
        		<input type="submit" class="btn btn-primary form-control" value="Guardar cambios">
        	</p>
        </form>
        <form id="eliminar-cuerpo" action="lib/control-eliminacion.php" method="post">
        	<input type="hidden" name="eliminar" value="cuerpo">
        	<input type="hidden" id="cod_cuerpo" class="input-remove-cod-cuerpo" name="cod_cuerpo">
        	<p>
        		<input type="submit" class="btn btn-primary" value="Continuar">
        		<input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancelar">
        	</p>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


    <p class="text-left">
    	<br>
    	<input type="button" id="agregar-cuerpo" class="btn btn-default" value="Agregar nuevo cuerpo">
    	<span class="mensaje"></span>
    </p>
    <table class="table table-responsive">
    	<th class="text-center">Nombre tipo cuerpo</th>
    	<th class="text-center">Opciones</th>
<?php
      while ($res=$consulta->fetch()) {
?>
     <tr><td><?php echo $res['cuerpo'] ?></td><td><span class="glyphicon glyphicon-edit" title="Editar" data-id="<?php echo $res['cod_cuerpo']; ?>" data-cuerpo="<?php echo $res['cuerpo']; ?>"></span> <span class="glyphicon glyphicon-remove" title="Eliminar" data-id="<?php echo $res['cod_cuerpo']; ?>"></span></td></tr>
<?php
     }
?>
    </table>


<?php
   }else{
   	echo "Controlador dice: ".error('error-mod');
   }
}elseif($mod=="productos"){
  $realizar=limpiar($_POST['realizar']);

  if($registrar=="registrar"){

    $nombre=limpiar($_POST['nombre']);
    $referencia=limpiar($_POST['referencia']);
    $valor=limpiar($_POST['valor']);
    $cantidad=limpiar($_POST['cantidad']);
    $cod_cuerpo=limpiar($_POST['cod_cuerpo']);
    $cod_color=limpiar($_POST['cod_color']);
    $cod_tipo=limpiar($_POST['cod_tipo']);

    $objProducto=new Producto();
    $atributos=array('nombre','referencia','valor','cantidad','cod_cuerpo','cod_color','cod_tipo');
    $valores=array($nombre,$referencia,$valor,$cantidad,$cod_cuerpo,$cod_color,$cod_tipo);
    foreach ($atributos as $key => $nombreA) {
     $objProducto->setAtributos($nombreA,$valores[$key]); 
    }
    $codigo=$objProducto->registrar();
    if($codigo){
      $objGaleriaProducto=new Galeria_producto();
      $archivos=$_FILE['archivos'];
      $destacada=limpiar($_POST['nombre']);
      echo "Se registro su producto y su galeria";
    }else{
      echo "Error controlador de producto dice: ".error('error-registro');
    }
    unset($objProducto);
  }

}
?>