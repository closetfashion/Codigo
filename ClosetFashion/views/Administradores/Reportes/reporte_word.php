<?php

header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment; filename=Reporte_Personal_usuarios.doc");


		$conexion=mysql_connect("localhost","root","");
		mysql_select_db("closethfashion",$conexion);		


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
    <td><strong>documento</strong></td>
    <td><strong>Nombre</strong></td>
    <td><strong>Apellido</strong></td>
    <td><strong>Edad</strong></td>
    <td><strong>Direccion</strong></td>
    <td><strong>Correo</strong></td>
    <td><strong>password</strong></td>
    <td><strong>rol</strong></td>
  </tr>
  
<?PHP
		
$sql=mysql_query("select * from clientes_1");
while($res=mysql_fetch_array($sql)){		

	$id=$res["id"];
	$documento=$res["documento"];
	$Nombre=$res["Nombre"];
	$Apellido=$res["Apellido"];
	$Edad=$res["Edad"];
	$Direccion=$res["Direccion"];
	$Correo=$res["Correo"];	
	$password=$res["password"];
	$rol=$res["rol"];				

?>  
 <tr>
	<td><?php echo $id; ?></td>
	<td><?php echo $documento; ?></td>
	<td><?php echo $Nombre; ?></td>
	<td><?php echo $Apellido; ?></td>
	<td><?php echo $Edad; ?></td>
	<td><?php echo $Direccion; ?></td>
	<td><?php echo $Correo; ?></td> 
	<td><?php echo $password; ?></td>
	<td><?php echo $rol; ?></td>                    
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>