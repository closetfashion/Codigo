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
        <a href="?controller=Login&accion=QuienesSomos" class="" data-toggle=""> ¿Quienes Somos?</a>
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
         
      </li>

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
          <input type="text" placeholder="Usuario" class="form-control" required="">
          <input type="password" placeholder="Contraseña" class="form-control" required="">
        </div>
        <hr>
        
        <input type="submit" value="Ingresar" class="btn btn-info btn-block" />
        <center>¿Aún no te registras?</center>
        <br>
        <a href="?controller=login&accion=Registrar"><center>Registrate</center></a>
      </div>

      </form>
      

    </div>
      
        </ul>

    <ul class="nav navbar-nav navbar-right">
     
     </div> 
 

</nav>
</style>
<div class="row">
    <div class="col-md-5 col-md-offset-4">
      <div class="panel panel-info">
        <div class="panel-heading">REGISTRAR
        </div>
        <div class="panel-body">
          <form method="post" action="?controller=Administrador&accion=CRUD">
            <div class="input-group">
            <div class="dropdown-toggle">
<!-- <form action="script.php" method="post">
       TALLA:<br /> 
   <select name="talla">    
       <option value="S" selected="selected">S</option>
       <option value="M">M</option>
       <option value="L">L</option>
       <option value="XL">XL</option>
   </select>

</form> -->
</div>
              <span class="input-group-addon"><span class="glyphicon glyphicon-ok"></span></span>
              <input type="text" name="Documento" id="Documento" class="form-control" placeholder="ingrese su número de identificación">
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
              <input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Ingrese su Nombre">
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
              <input type="text" name="Apellido" id="Apellido" class="form-control" placeholder="Ingrese su Apellido">
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
              <input type="text" name="Edad" id="Edad" class="form-control" placeholder="Ingrese su Edad">
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
              <input type="text" name="Direccion" id="Direccion" class="form-control" placeholder="Ingrese su dirección">
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-sort"></span></span>
              <input type="email" name="Correo" id="Correo" class="form-control" placeholder="ingrese su Correo" required>
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-sort"></span></span>
              <input type="password" name="Password" id="Password" class="form-control" placeholder="Ingrese su Password">
            </div>
            <br>
            <div class="input-group">
              <input type="hidden" name="Rol"  id="Rol" class="form-control" placeholder="Ingrese su rol (Cliente)" value="2">
            </div>
            <hr>
            <button class="btn btn-info btn-block">Registrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</form>
</body>
</html>
