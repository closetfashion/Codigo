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
</center>
<center>
   <table width="" border="0">
    <tr>
      <td width="280"><img src="Imagenes/CamisasMujer/1.jpg" width="280" height="350" /></td>
      <td width="280"><img src="Imagenes/CamisasMujer/2.jpg" width="280" height="350" /></td>
      <td width="280"><img src="Imagenes/CamisasMujer/3.jpg" width="280" height="350" /></td>
      <td width="280"><img src="Imagenes/CamisasMujer/4.jpg" width="280" height="350" /></td>
   
    </tr>
    <tr>
      <td class="numero1">CH01</td>
      <td class="numero2">CH02</td>
      <td class="numero3">CH03</td>
      <td class="numero4">CH04</td>
    </tr>
  </table>
</center>
<p>&nbsp;</p>
<center>
  <table width="" border="0">
    <tr>
      <td width="280"><img src="Imagenes/CamisasMujer/5.jpg" width="280" height="350" /></td>
      <td width="280"><img src="Imagenes/CamisasMujer/6.jpg" width="280" height="350" /></td>
      <td width="280"><img src="Imagenes/CamisasMujer/7.jpg" width="280" height="350" /></td>
      <td width="280"><img src="Imagenes/CamisasMujer/8.jpg" width="280" height="350" /></td>
    </tr>
    <tr>
      <td class="numero5">CH05</td>
      <td class="numero6">CH06</td>
      <td class="numero7">CH07</td>
      <td class="numero8">CH08</td>
    </tr>
  </table>
</center>
<p>&nbsp;</p>
<center>
  <table width="" border="0">
    <tr>
      <td width="280"><img src="Imagenes/CamisasMujer/9.jpg" width="280"  height="350" /></td>
      <td width="280"><img src="Imagenes/CamisasMujer/10.jpg" width="280" height="350" /></td>
      <td width="280"><img src="Imagenes/CamisasMujer/11.jpg" width="280" height="350" /></td>
      <td width="280"><img src="Imagenes/CamisasMujer/12.jpg" width="280" height="350" /></td>
    </tr>
    <tr>
      <td class="numero9">CH09</td>
      <td class="numero10">CH10</td>
      <td class="numero11">CH11</td>
      <td class="numero12">CH12</td>
    </tr>
  </table>
</center>
<p></p>
<script type="text/javascript">
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar1 = new Spry.Widget.MenuBar("MenuPrincipal", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
