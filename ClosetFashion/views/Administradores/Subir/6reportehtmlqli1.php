
<?php
 
$host="localhost";
$Correo="root";
$password="";
$db="closethfashion";

$conexion = new mysqli($host,$Correo,$password,$db);
$sql = "select * from subirimagen";
$query=$conexion->query($sql);
 
// $conexion = mysql_connect("localhost","root","");
//mysql_select_db("usuario",$conexion);
// $sql= mysql_query("select * from users");
//while($res=mysql_fetch_array($sql)){
	
//echo'<tr>
//		<td>'.$res['id'].'</td>
//		<td>'.$res['nombre'].'</td>
//		<td>'.$res['password'].'</td>
//	</tr>
//	';
//	}
	
	
			
	$tbHtml="";
	if($query->num_rows>0){
		
	        echo "<table border='1px'>
             <header>
                <tr>
                  <th>id_productos</th>
                  <th>categoria</th>
                  <th>precio</th>
              
                  </tr>
            </header>";
		

		
		while($res=$query->fetch_array())
		{
// Configuración imagen, traer ubicación de la tabla y luego colocar dentro
// del html para decirle donde esta la imagen
$z=$res['ubicar'];
$x="<img src='$z' width='150' height='150' alt='Alargada' border='0'>";



		
         echo '<tr>
		<td>'.$res['id_productos'].'</td>
		<td>'.$res['categoria'].$x.'</td>
		<td>'.$res['precio'].'</td>
	</tr>
	';
		}
		$tbHtml.= "</table>";
	}
	else
	{
	echo "No hay resultados";
	}
	//cambiar los datos por productos
	
?>
<html>
<style type="text/css">
body {
	background-image: url(../imagenes%20de%20fondo/fondoperpetua2.gif);
	background-repeat: repeat;
}
</style>
<body>
	  <form method="post" action="../../index.php?controller=administrador&accion=index">
				
					<button class="btn btn-info btn-block">anterior pagina</button><div id="bar"> </form>

    </body>
</html>