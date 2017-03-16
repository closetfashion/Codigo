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
  <p class="fgjf"></p>
  <center>
  </center>
  <p>&nbsp;</p>
</center>
<center>
  <p>&nbsp;</p>
  <p class="letras">CAMISAS</p>
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
  <p>&nbsp;</p>
  <p class="letra2">PANTALONES</p>
  <center>
    <p></p>
  </center>
  <center>
   <table width="" border="0">
      <tr>
        <td width="280"><img src="Imagenes/PantalonesMujer/1.jpg" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/PantalonesMujer/2.jpg" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/PantalonesMujer/3.jpg" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/PantalonesMujer/4.jpg" width="280" height="350" /></td>
      </tr>
      <tr>
        <td class="numero1">PH01</td>
        <td class="numero2">PH02</td>
        <td class="numero3">PH03</td>
        <td class="numero4">PH04</td>
      </tr>
    </table>
  </center>
  <p>&nbsp;</p>
  <center>
    <table width="" border="0">
      <tr>
        <td width="280"><img src="Imagenes/PantalonesMujer/5.jpg" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/PantalonesMujer/6.jpg" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/PantalonesMujer/7.jpg" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/PantalonesMujer/8.jpg" width="280" height="350" /></td>
      </tr>
      <tr>
        <td class="numero5">PH05</td>
        <td class="numero6">PH06</td>
        <td class="numero7">PH07</td>
        <td class="numero8">PH08</td>
      </tr>
    </table>
  </center>
  <p>&nbsp;</p>
  <center>
    <table width="" border="0">
      <tr>
        <td width="280"><img src="Imagenes/PantalonesMujer/9.jpg"  width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/PantalonesMujer/10.JPG" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/PantalonesMujer/11.JPG" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/PantalonesMujer/12.jpg" width="280" height="350" /></td>
      </tr>
      <tr>
        <td class="numero9">PH09</td>
        <td class="numero10">PH10</td>
        <td class="numero11">PH11</td>
        <td class="numero12">PH12</td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p class="letra3">ZAPATOS</p>
    <center>
       <table width="" border="0">
      <tr>
        <td width="280"><img src="Imagenes/ZapatosMujer/1.jpg" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/ZapatosMujer/2.jpg" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/ZapatosMujer/3.jpg" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/ZapatosMujer/4.jpg" width="280" height="350" /></td>
      </tr>
      <tr>
        <td class="numero1">ZH01</td>
        <td class="numero2">ZH02</td>
        <td class="numero3">ZH03</td>
        <td class="numero4">ZH04</td>
      </tr>
    </table>
  </center>
  <p>&nbsp;</p>
  <center>
    <table width="" border="0">
      <tr>
        <td width="280"><img src="Imagenes/ZapatosMujer/5.jpg" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/ZapatosMujer/6.jpg" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/ZapatosMujer/7.jpg" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/ZapatosMujer/8.jpg" width="280" height="350" /></td>
      </tr>
      <tr>
        <td class="numero5">ZH05</td>
        <td class="numero6">ZH06</td>
        <td class="numero7">ZH07</td>
        <td class="numero8">ZH08</td>
      </tr>
    </table>
  </center>
  <p>&nbsp;</p>
  <center>
    <table width="" border="0">
      <tr>
        <td width="280"><img src="Imagenes/ZapatosMujer/9.jpg" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/ZapatosMujer/10.jpg" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/ZapatosMujer/11.jpg" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/ZapatosMujer/12.jpg" width="280" height="350" /></td>
      </tr>
      <tr>
        <td class="numero9">ZH09</td>
        <td class="numero10">ZH10</td>
        <td class="numero11">ZH11</td>
        <td class="numero12">ZH12</td>
      </tr>
    </table>
    </center>
    <p></p>
    <p class="letra3">&nbsp;</p>
    <p class="letra3">ACCESORIOS</p>
    <center>
       <table width="" border="0">
      <tr>
        <td width="280"><img src="Imagenes/AccesoriosMujer/1.jpg" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/AccesoriosMujer/2.jpg" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/AccesoriosMujer/3.jpg" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/AccesoriosMujer/4.jpg" width="280" height="350" /></td>
      </tr>
      <tr>
        <td height="23" class="numero1">AH01</td>
        <td class="numero2">AH02</td>
        <td class="numero3">AH03</td>
        <td class="numero4">AH04</td>
      </tr>
    </table>
  </center>
  <p>&nbsp;</p>
  <center>
    <table width="" border="0">
      <tr>
        <td width="280"><img src="Imagenes/AccesoriosMujer/5.jpg" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/AccesoriosMujer/6.jpg" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/AccesoriosMujer/7.jpg" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/AccesoriosMujer/8.jpg" width="280" height="350" /></td>
      </tr>
      <tr>
        <td class="numero5">AH05</td>
        <td class="numero6">AH06</td>
        <td class="numero7">AH07</td>
        <td class="numero8">AH08</td>
      </tr>
    </table>
  </center>
  <p>&nbsp;</p>
  <center>
    <table width="" border="0">
      <tr>
        <td width="280"><img src="Imagenes/AccesoriosMujer/9.jpg" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/AccesoriosMujer/10.jpg" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/AccesoriosMujer/11.jpg" width="280" height="350" /></td>
        <td width="280"><img src="Imagenes/AccesoriosMujer/12.jpg" width="280" height="350" /></td>
      </tr>
      <tr>
        <td class="numero9">AH09</td>
        <td class="numero10">AH10</td>
        <td class="numero11">AH11</td>
        <td class="numero12">AH12</td>
      </tr>
    </table>
    </center>
    <p></p>
    <p class="letra3">&nbsp;</p>
  </center>
  <p></p>
  <p class="letra2">&nbsp;</p>
</center>
</body>
</html>
  