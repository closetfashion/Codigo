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


<center><h3>Usuarios</h3></center>

<br>
<br>

<!-- <div class="col-md-12 col-md-offset-2">
<div class="table"> -->
<table class="table table-bordered table-hover">
  <tr class="active">
    <td><center>Documento</center> </td>
    <td><center>Nombre</center> </td>
    <td><center>Apellido</center> </td>
    <td><center>Edad</center> </td>
    <td><center>Direccion</center> </td>
    <td><center>correo</center> </td>
    <td><center>Rol</center> </td>
    
  </tr>
  <tr class="active">
    <?php foreach ($stmt as $key) {
      echo 

      ' <tr>
        <td><center>'.$key->Documento.'</center></td>
        <td><center>'.$key->Nombre.'</center></td>
        <td><center>'.$key->Apellido.'</center></td>
        <td><center>'.$key->Edad.'</center></td>
        <td><center>'.$key->Direccion.'</center></td>
        <td><center>'.$key->Correo.'</center></td>
        <td><center>'.$key->roles_ID_ROLES.'</center></td>
        <td>
        <form method="post" action="?controller=Administrador&accion=Eliminar">
        <input type="hidden" name="Documento" value='.$key->Documento.'>
        <button class="btn btn-info">Eliminar</button>
        </td>
        <td>
        </form><form method="post" action="?controller=Administrador&accion=CRUD">
        <input type="hidden" name="Documento" value='.$key->Documento.'>
        <button class="btn btn-info">Editar</button>
        </form></td>
        <td>
        <form method="post" action="?controller=Administrador&accion=RegistroUsuarios">
        <input type="hidden" name="Documento" value='.$key->Documento.'>
        <button class="btn btn-info">Insertar</button>
        </form></td>

        </tr>';
    } ?>
  </tr>
</table>
<br>
</form>
</div>
</div>