<?php
session_start();

if ($_SESSION['doc_Administrador']=="" || $_SESSION['doc_Administrador']==null ) {
  header("location:index.php");
}
?>
<div class="fondo">
<center>
  <div class="container">
  <nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
     data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <div class="collapse navbar-collapse navbar-ex1-collapse">

    <ul class="nav navbar-nav">
    <li><a href=""></a></li>
       <li><a href="?controller=Administrador&accion=Index"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
      <li class="">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Hombre <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="?controller=Administrador&accion=CamisasHombre">Camisas</a></li>
          <li class="divider"></li>
          <li><a href="?controller=Administrador&accion=PantalonesHombre">Pantalones</a></li>
          <li class="divider"></li>
          <li><a href="?controller=Administrador&accion=AccesoriosHombre">Accesorios</a></li>
          <li class="divider"></li>
          <li><a href="?controller=Administrador&accion=CalzadoHombre">Calzado</a></li>
      
        </ul>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Mujer <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="?controller=Administrador&accion=CamisasMujer">Camisas</a></li>
          <li class="divider"></li>
          <li><a href="?controller=Administrador&accion=PantalonesMujer">Pantalones</a></li>
          <li class="divider"></li>
          <li><a href="?controller=Administrador&accion=AccesoriosMujer">Accesorios</a></li>
          <li class="divider"></li>
          <li><a href="?controller=Administrador&accion=CalzadoMujer">Calzado</a></li>
        </ul>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Gestión de Procesos <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="?controller=Administrador&accion=CRUDUsuarios">Usuarios</a></li>
          <li class="divider"></li>
          <li><a href="?controller=Productos&accion=CRUDProductos">Productos</a></li>
          <li class="divider"></li>
          <li><a href="">Ventas</a></li>
      
        </ul>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Reportes <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="views/Administradores/Reportes/reporte_excel (Usuarios).php">Usuarios</a></li>
          <li class="divider"></li>
          <li><a href="views/Administradores/Reportes/reporte_excel (Productos).php">Productos</a></li>
          <li class="divider"></li>
          <li><a href="views/Administrador/Reportes/reporte_excel (Ventas)">Ventas</a></li>
        </ul>
      </li>
    </ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="?controller=Login&accion=salir"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</a></li>
</ul>
     
     </div> 
 

</nav>

<hr>
<center><h3>Productos</h3></center>

<br>

<!-- <div class="col-md-12 col-md-offset-2">
<div class="table"> -->
<table class="table table-bordered table-hover">
  <tr class="active">
    <td><center>id Producto</center> </td>
    <td><center>Nombre Producto</center> </td>
    <td><center>Precio Unitario</center> </td>
    <td><center>Ubicacion Producto</center> </td>
  </tr>
  <tr class="active">
    <?php foreach ($stmt as $key) {
      echo 

      ' <tr>
        <td><center>'.$key->ID_PRODUCTO.'</center></td>
        <td><center>'.$key->Nombre_producto.'</center></td>
        <td><center>'.$key->Precio_unitario.'</center></td>
        <td><center>'.$key->Ubicacion_producto.'</center></td>
        <td>
        <form method="post" action="?controller=Productos&accion=EliminarProducto">
        <input type="hidden" name="ID_PRODUCTO" value='.$key->ID_PRODUCTO.'>
        <button class="btn btn-info">Eliminar</button>
        </td>
        <td>
        </form><form method="post" action="?controller=Productos&accion=CRUD">
        <input type="hidden" name="ID_PRODUCTO" value='.$key->ID_PRODUCTO.'>
        <button class="btn btn-info">Editar</button>
        </form></td>
        <td>
        <form method="post" action="?controller=Productos&accion=RegistroProductos">
        <input type="hidden" name="ID_PRODUCTO" value='.$key->ID_PRODUCTO.'>
        <button class="btn btn-info">Insertar</button>
        </form></td>

        </tr>';
    } ?>
  </tr>
</table>

<hr>
<br>

</form>
</div>
</div>