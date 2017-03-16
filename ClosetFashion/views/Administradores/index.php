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
          <li><a href="views/Administradores/Reportes/reporte_excel(Usuarios).php">Usuarios</a></li>
          <li class="divider"></li>
          <li><a href="views/Administradores/Reportes/reporte_excel(Productos).php">Productos</a></li>
        </ul>
      </li>
    </ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="?controller=Login&accion=salir"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</a></li>
</ul>
     
     </div> 
 

</nav>
<center>
<div class="row"> 
  <div class="container">
    <div class="col-md-11">
      <table>
  <tr>
    <td ><a href="?controller=Administrador&accion=Hombre"><img src="Imagenes/giphy.gif" width="400" height="500" alt="Ir a catalogo completo de Hombre" title="Catalogo completo de Hombre" class="img-rounded"/></a></td>

    <td ><a href="?controller=Administrador&accion=Mujer"><img src="Imagenes/ella.gif" width="400" height="500" alt="Ir a catalogo completo de Mujer" title="Catalogo completo de Mujer" class="img-rounded"/></a></td>
  <br>
  <tr>
    <td class="HOMBRE"><a href="?controller=Administrador&accion=Hombre">Hombres</a></td>


    <td class="MUJER"><a href="?controller=Administrador&accion=Mujer">Mujeres</a></td>
  </tr>
</table>
    </div>
    <div class="col-md-1">
      <img src="Imagenes/img_facebook1.png" width="40" height="40" class="img-rounded" title="Facebook">
      <br>
      <img src="Imagenes/img_instagram.png" width="40" height="40" class="img-rounded" title="Instagram">
      <br>
      <img src="Imagenes/img_twitter1.png" width="40" height="40" class="img-rounded" title="Twitter">
      <br>
      <a href="https://www.youtube.com/channel/UClo3CB-3GYNsWc3LctqOW0g"><img src="Imagenes/img_youtube1.png" width="40" height="40" class="img-rounded" title="YouTube"></a>
      <br>

    </div>
</div>
</div>
</div>
</div>
</div></div>
</div>


