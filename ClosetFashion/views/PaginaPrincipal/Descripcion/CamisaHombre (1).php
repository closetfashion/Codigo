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
       <li><a href="?controller=Login&accion=Index"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
      <li class="">
        <a href="?controller=Login&accion=QuienesSomos" class="" data-toggle="">
          ¿Quienes Somos? <b class=""></b>
        </a>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Hombre <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="?controller=Login&accion=CamisasHombre">Camisas</a></li>
          <li class="divider"></li>
          <li><a href="?controller=Login&accion=PantalonesHombre">Pantalones</a></li>
          <li class="divider"></li>
          <li><a href="?controller=Login&accion=AccesoriosHombre">Accesorios</a></li>
          <li class="divider"></li>
          <li><a href="?controller=Login&accion=CalzadoHombre">Calzado</a></li>
      
        </ul>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Mujer <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="?controller=Login&accion=CamisasMujer">Camisas</a></li>
          <li class="divider"></li>
          <li><a href="?controller=Login&accion=PantalonesMujer">Pantalones</a></li>
          <li class="divider"></li>
          <li><a href="?controller=Login&accion=AccesoriosMujer">Accesorios</a></li>
          <li class="divider"></li>
          <li><a href="?controller=Login&accion=CalzadoMujer">Calzado</a></li>
      
        </ul>
      </li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
      
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Iniciar Sesión <b class=""></b>
        </a>

        <ul class="dropdown-menu">
        <div class="panel">
      <div class="panel-heading">
        
      </div>
      <div class="panel-body">
       <form class="form" action="?controller=login&accion=logeo" method="post">
        
        <div class="input-group">
          <input type="text" name="Correo" placeholder="Correo" class="form-control" required="">
          <hr>
          <input type="password" name="Password" placeholder="Contraseña" class="form-control" required="">
        </div>
         <br>
        <input type="submit" value="Ingresar" class="btn btn-info btn-block" />
        <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
        <br>
        <br>
        <center>¿Aún no te registras?</center>
        <a href="?controller=login&accion=Registrar"><center>Registrate</center></a>
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
 
     <td width="490"><img src="Imagenes/CamisasHombre/1.jpg" width="400" height="450" /></td>

<div class="descripcion">
  <p text-align="center"></p>
</div>
<!-- <button type="button" class="btn btn-info btn-block">Añadir al Carrito de Compras</button> -->
</div>
<div class="col-md-8">
      <h3>Camisa Negra Manga Larga</h3>
      <p text-align="center">
      <p>Color: Negro</p>
      <p> Tintas: 1 (Blanco)</p>
      <p>Marca: Gildan</p>
      <p>Modelo: Chico</P>
      <p>Tallas: S-M-L-XL</p>
      </p>
<div class="dropdown-toggle">
<form action="script.php" method="post">
       TALLA:<br /> 
   <select name="talla">    
       <option value="S" selected="selected">S</option>
       <option value="M">M</option>
       <option value="L">L</option>
       <option value="XL">XL</option>
   </select>

</form>
</div>

    </div>
  </div>
</div>
   <!--    --------------------------- -->
    </div>
</div>
  
</center>