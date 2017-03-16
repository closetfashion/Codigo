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
          Gestión de Productos <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="?controller=Administrador&accion=CRUDUsuarios">Usuarios</a></li>
          <li class="divider"></li>
          <li><a href="?controller=Administrador&accion=CRUDProductos">Productos</a></li>
          <li class="divider"></li>
          <li><a href="">Ventas</a></li>
      
        </ul>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Reportes <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="?controller=Administrador&accion=CamisasMujer">Usuarios</a></li>
          <li class="divider"></li>
          <li><a href="?controller=Administrador&accion=PantalonesMujer">Productos</a></li>
          <li class="divider"></li>
          <li><a href="?controller=Administrador&accion=AccesoriosMujer">Ventas</a></li>
        </ul>
      </li>
    </ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="?controller=Login&accion=salir"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</a></li>
</ul>
     
     </div> 
 

</nav>
<hr>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-info">
        <div class="panel-heading">REGISTRAR
        </div>
        <div class="panel-body">
          <form method="post" action="?controller=Productos&accion=CRUD">
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-tasks"></span></span>
              <input type="text" name="Nombre_producto" class="form-control" placeholder="Ingrese el Nombre del Producto">
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></span>
              <input type="text" name="Precio_unitario" class="form-control" placeholder="Ingrese el Precio del Producto">
            </div>
            <br>
            
            <input name="uploadedfile" type="file" />
            
            <hr>
          <button class="btn btn-info btn-block">Registrar</button> 
            <!-- <p class="btn btn-info btn-block">Registrar</p> -->
          </form>
        </div>
      </div>
    </div>
  </div>
</form>
</body>
</html>