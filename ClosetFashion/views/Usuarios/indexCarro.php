<?php 
session_start();
$_SESSION['detalle'] = array();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Carrito de Compras</title>

    <!-- Bootstrap -->
    <link href="libs/css/bootstrap.css" rel="stylesheet">
    <script src="libs/js/jquery.js"></script>
    <script src="libs/js/jquery-1.8.3.min.js"></script>
    <script src="libs/js/bootstrap.min.js"></script>
   	
    <script type="text/javascript" src="libs/ajax.js"></script>
	
	 <!-- Alertity -->
    <link rel="stylesheet" href="libs/js/alertify/themes/alertify.core.css" />
	<link rel="stylesheet" href="libs/js/alertify/themes/alertify.bootstrap.css" id="toggleCSS" />
    <script src="libs/js/alertify/lib/alertify.min.js"></script>
  </head>

  <body>
 	<div class="container">
 		
 		<div class="page-header">
			<h1>Carrito de Compras</h1>
		</div>
 		<div class="row">
			<div class="col-md-4">	
				<div>Producto: <input id="txt_producto" name="txt_producto" type="text" class="col-md-2 form-control" placeholder="Ingresar Producto.." autocomplete="off" />
				</div>
			</div>
			<div class="col-md-2">
				<div>Cantidad:
				  <input id="txt_cantidad" name="txt_cantidad" type="text" class="col-md-2 form-control" placeholder="Ingrese cantidad" autocomplete="off" />
				</div>
			</div>
			<div class="col-md-2">
				<div style="margin-top: 19px;">
				<button type="button" class="btn btn-success btn-agregar-producto">Agregar</button>
				</div>
			</div>
		</div>
		
		<br>
		<div class="panel panel-info">
			 <div class="panel-heading">
		        <h3 class="panel-title">Productos</h3>
		      </div>
			<div class="panel-body detalle-producto">
				<?php if(count($_SESSION['detalle'])>0){?>
					<table class="table">
					    <thead>
					        <tr>
					            <th>Descripci&oacute;n</th>
					            <th>Cantidad</th>
					            <th></th>
					        </tr>
					    </thead>
					    <tbody>
					    	<?php 
					    	foreach($_SESSION['detalle'] as $k => $detalle){ 
					    	?>
					        <tr>
					        	<td><?php echo $detalle['producto'];?></td>
					            <td><?php echo $detalle['cantidad'];?></td>
					            <td><button type="button" class="btn btn-sm btn-danger eliminar-producto" id="<?php echo $detalle['id'];?>">Eliminar</button></td>
					        </tr>
					        <?php }?>
					    </tbody>
					</table>
				<?php }else{?>
				<div class="panel-body"> No hay productos agregados</div>
				<?php }?>
			</div>
		</div>
 	</div>
  </body>
</html>
