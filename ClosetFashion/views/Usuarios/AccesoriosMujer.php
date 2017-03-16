<?php
session_start();

if ($_SESSION['doc_Cliente']=="" || $_SESSION['doc_Cliente']==null ) {
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
       <li><a href="?controller=Usuario&accion=Index"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
       <li class="">
       <a href="?controller=Usuario&accion=QuienesSomos">Quienes Somos</a>
     
       <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hombre <b class="caret"></b></a>
         <ul class="dropdown-menu">
          <li><a href="?controller=Usuario&accion=CamisasHombre">Camisas</a></li>
          <li class="divider"></li>
          <li><a href="?controller=Usuario&accion=PantalonesHombre">Pantalones</a></li>
          <li class="divider"></li>
          <li><a href="?controller=Usuario&accion=AccesoriosHombre">Accesorios</a></li>
          <li class="divider"></li>
          <li><a href="?controller=Usuario&accion=CalzadoHombre">Calzado</a></li>
         </ul>
       <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mujer <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="?controller=Usuario&accion=CamisasMujer">Camisas</a></li>
          <li class="divider"></li>
          <li><a href="?controller=Usuario&accion=PantalonesMujer">Pantalones</a></li>
          <li class="divider"></li>
          <li><a href="?controller=Usuario&accion=AccesoriosMujer">Accesorios</a></li>
          <li class="divider"></li>
          <li><a href="?controller=Usuario&accion=CalzadoMujer">Calzado</a></li>
      
        </ul>
      </li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
       <li><a href=""><span class="glyphicon glyphicon-shopping-cart" title="Carro de Compra"></span> </a></li>   
       <li class="divider"></li>
       <li><a href="?controller=Login&accion=salir"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</a></li>
    </ul>
</div> 
</nav>
</div> 
</nav>
  <center>
  </center>
  <p>&nbsp;</p>
</center>
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
<script type="text/javascript">
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar1 = new Spry.Widget.MenuBar("MenuPrincipal", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
