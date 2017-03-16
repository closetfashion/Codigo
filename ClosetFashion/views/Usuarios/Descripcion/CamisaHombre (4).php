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
</nav>    <ul class="nav navbar-nav navbar-right">
     
     </div> 

      </form>
      

    </div>
</nav>
</div> 
</nav>
<center>
<div class="row">
<div class="container">
  <div class="col-md-4">
 
     <td width="490"><img src="Imagenes/CamisasHombre/4.jpg" width="400" height="450" /></td>

<div class="descripcion">
  <p text-align="center"></p>
</div>
<!-- <button type="button" class="btn btn-info btn-block">Añadir al Carrito de Compras</button> -->
</div>
<div class="col-md-8">
      <h3>Camisa Manga Larga</h3>
      <p text-align="center">
      <p>Color: Azul claro</p>
      <p> Tintas: 1</p>
      <p>Marca: Gildan</p>
      <p>Modelo: Chico</P>
      <p>Tallas: S-M-L-XL</p>
      </p>

<html>
<form>
<select name="ad" onchange="salta(this.form)">
<option selected> ---
<option value="xxxx.htm">texto 1
<option value="yyyy.htm">texto 2
<option value="zzzz.htm">texto 3
</select>
</form>
</html>
    </div>
</div>
  
</center>