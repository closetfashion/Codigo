<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte_Personal_Productos.xls");


		$conexion=mysql_connect("localhost","root","");
		mysql_select_db("funmamay_closet_fashion",$conexion);		


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LISTA DE USUARIOS</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="9" bgcolor="skyblue"><CENTER><strong>REPORTE DE LA TABLA USUARIOS</strong></CENTER></td>
  </tr>
  <tr bgcolor="red">
    <td><strong>id</strong></td>
    <td><strong>Nombre del Producto</strong></td>
    <td><strong>Precio</strong></td>
    <td><strong>Ubicacion</strong></td>
  </tr>
  
<?PHP
		
$sql=mysql_query("select * from productos");
while($res=mysql_fetch_array($sql)){		

	$ID_PRODUCTO=$res["ID_PRODUCTO"];
	$Nombre_producto=$res["Nombre_producto"];
	$Precio_unitario=$res["Precio_unitario"];
	$Ubicacion_producto=$res["Ubicacion_producto"];			

?>  
 <tr>
	<td><?php echo $ID_PRODUCTO; ?></td>
	<td><?php echo $Nombre_producto; ?></td>
	<td><?php echo $Precio_unitario; ?></td>
	<td><?php echo $Ubicacion_producto; ?></td>
	                 
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>