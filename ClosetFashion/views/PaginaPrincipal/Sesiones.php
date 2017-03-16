
<center>



  <div class="container">
  <nav class="navbar navbar-default" role="navigation">
  

  <div class="collapse navbar-collapse navbar-ex1-collapse">

    <ul class="nav navbar-nav">
    <li><a href=""></a></li>
       <li><a href="?controller=login&accion=Index"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
       <li><a href=""></a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Conocenos <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="?controller=Login&accion=QuienesSomos">Quienes Somos</a></li>
          <li class="divider"></li>
          <li><a href="?controller=Login&accion=Contactenos">Contactenos</a></li>
          <li class="divider"></li>
          <li><a href="#">Acción #3</a></li>
          <li class="divider"></li>
          <li><a href="#">Acción #4</a></li>
          <li class="divider"></li>
          <li><a href="#">Acción #5</a></li>
        </ul>
      </li>
      <li><a href=""></a></li>

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
         <li><a href=""></a></li>
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
      <li><a href="?controller=login&accion=Sesiones"><span class="glyphicon glyphicon-"></span> Iniciar Sesión</a></li>
      <li class="dropdown">
      <li><a href="?controller=login&accion=Registrar"> <span class="glyphicon glyphicon-"></span> Registrarse</a></li>
        
  </div>
</nav>
<style type="text/css">
 body{
 }
 .content{
 /* margin: 0 auto;
  width: 500px;
  height: 300px;
  margin-top: 9%;*/
  /*color: #000;
  border: 6px solid #999;
  background-color: #000;*/
  /*background-image: url(../ClosethFashion3.0/Imagenes/Fondo.png);*/
 }
 label{
  display: block;
  color: #000;
 }
 .caja_login{
 margin: 30px 0px 0px 70px;
 }
 .caja_login input[type=text],input[type=password]{
 width: 280px;
 padding: 8px 6px;
 border-radius: 8px;
 }
 .caja_login input[type=submit]{
  padding: 5px 60px;
  text-align: center;
  border-radius: 4px;
  color: #000;
  border: 1px solid #fff;
  margin-top: 10px;
  background-color: #CCC;
 }
 body,td,th {
  font-family: "Comic Sans MS", cursive;
  color: #000000;
}
 .hola {
  font-size: larger;
  font-weight:;
}
 .hola a {
  text-align: center;
}
 a:link {
  color: #000000;
  text-decoration: none;
}
a:visited {
  text-decoration: none;
  color: #000000;
}
a:hover {
  text-decoration: underline;
}
a:active {
  text-decoration: none;
}
 .content .caja_login  {
  color: #000;
}
 </style>
 
</head>
 
<body>
<div class="content">
  <div class="caja_login">
  <br>
    <h3>Ingresar</h3>
    <br>
 <form class="form" action="?controller=login&accion=logeo" method="post">
 
 
 <input type="text" name="Correo" required="true" placeholder="Correo." />
 <br>
 <br>
 <input type="password" name="password" required="true" placeholder="Contraseña." />
 <br>
 
 <input type="submit" value="Ingresar" />

 <br>
 ¿No te has registrado?
 <br>
 <a href="?controller=login&accion=Registrar">Registrate</a>
  <p>&nbsp;</p>
 </form>
 </div>
</div>
</body>
</html>