<?php

		require_once("dompdf/dompdf_config.inc.php");
		$conexion=mysql_connect("localhost","root","");
		mysql_select_db("closet_fashion",$conexion);


$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reporte PDF Usuarios</title>
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
  </tr>';
  


$sql=mysql_query("select * from usuarios");
while($res=mysql_fetch_array($sql)){
$codigoHTML.='	
	<tr>
		<td>'.$res['ID_USUARIO'].'</td>
		<td>'.$res['Documento'].'</td>
		<td>'.$res['Nombre'].'</td>
		<td>'.$res['Apellido'].'</td>
		<td>'.$res['Edad'].'</td>
		<td>'.$res['Dirección'].'</td>
		<td>'.$res['Correo'].'</td>	
		<td>'.$res['password'].'</td>
		<td>'.$res['roles_ID_ROLES'].'</td>									
	</tr>';
	
}
$codigoHTML.='
</table>
</body>
</html>';
$codigoHTML=utf8_encode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("Reporte_tabla_usuarios.pdf");
?>