<?php  



/**
* 
*/
require_once'model/usuario.php';
class LoginControlador
{
	
	private $model;

	public function __construct() {
		$this->model= new Usuario();
	}

	public function Index()
	{
		require_once'views/header.html';
		require_once'views/PaginaPrincipal/index.php';
		require_once'views/footer.html';
	}
	public function AccesoriosHombre()
	{
		require_once'views/header.html';
		require_once'views/PaginaPrincipal/AccesoriosHombre.php';
		require_once'views/footer.html';
	}
	public function AccesoriosMujer()
	{
		require_once'views/header.html';
		require_once'views/PaginaPrincipal/AccesoriosMujer.php';
		require_once'views/footer.html';
	}
	public function CalzadoHombre()
	{
		require_once'views/header.html';
		require_once'views/PaginaPrincipal/CalzadoHombre.php';
		require_once'views/footer.html';
	}
	public function CalzadoMujer()
	{
		require_once'views/header.html';
		require_once'views/PaginaPrincipal/CalzadoMujer.php';
		require_once'views/footer.html';
	}
	public function CamisasHombre()
	{
		require_once'views/header.html';
		require_once'views/PaginaPrincipal/CamisasHombre.php';
		require_once'views/footer.html';
	}
	public function CamisasMujer()
	{
		require_once'views/header.html';
		require_once'views/PaginaPrincipal/CamisasMujer.php';
		require_once'views/footer.html';
	}

	public function Hombre()
	{
		require_once'views/header.html';
		require_once'views/PaginaPrincipal/Hombre.php';
		require_once'views/footer.html';
	}
	public function Mujer()
	{
		require_once'views/header.html';
		require_once'views/PaginaPrincipal/Mujer.php';
		require_once'views/footer.html';
	}
	public function PantalonesHombre()
	{
		require_once'views/header.html';
		require_once'views/PaginaPrincipal/PantalonesHombre.php';
		require_once'views/footer.html';
	}
	public function PantalonesMujer()
	{
		require_once'views/header.html';
		require_once'views/PaginaPrincipal/PantalonesMujer.php';
		require_once'views/footer.html';
	}
	public function QuienesSomos()
	{
		require_once'views/header.html';
		require_once'views/PaginaPrincipal/QuienesSomos.php';
		require_once'views/footer.html';
	}
	public function Registrar()
	{
		require_once'views/header.html';
		require_once'views/PaginaPrincipal/Registrar.php';
		require_once'views/footer.html';
	}

/*----------------------------------------------------------Descripcion Productos-------------------------------------------------------------*/
	public function CH01()
	{
		require_once'views/header.html';
		require_once'views/PaginaPrincipal/Descripcion/CamisaHombre (1).php';
		require_once'views/footer.html';
	}
	public function CH02()
	{
		require_once'views/header.html';
		require_once'views/PaginaPrincipal/Descripcion/CamisaHombre (2).php';
		require_once'views/footer.html';
	}
	public function CH03()
	{
		require_once'views/header.html';
		require_once'views/PaginaPrincipal/Descripcion/CamisaHombre (3).php';
		require_once'views/footer.html';
	}
	public function CH04()
	{
		require_once'views/header.html';
		require_once'views/PaginaPrincipal/Descripcion/CamisaHombre (4).php';
		require_once'views/footer.html';
	}
	public function CM01()
	{
		require_once'views/header.html';
		require_once'views/PaginaPrincipal/Descripcion/CamisaMujer (1).php';
		require_once'views/footer.html';
	}
	public function CM02()
	{
		require_once'views/header.html';
		require_once'views/PaginaPrincipal/Descripcion/CamisaMujer (2).php';
		require_once'views/footer.html';
	}
	public function CM03()
	{
		require_once'views/header.html';
		require_once'views/PaginaPrincipal/Descripcion/CamisaMujer (3).php';
		require_once'views/footer.html';
	}
	public function CM04()
	{
		require_once'views/header.html';
		require_once'views/PaginaPrincipal/Descripcion/CamisaMujer (4).php';
		require_once'views/footer.html';
	}




/* --------------------------------------------------------------------------------------------------------------------------------------------*/	
	public function logeo() {
		$usuarios= $this->model;

		$usuarios->setCorreo($_REQUEST['Correo']);
		$usuarios->setPassword($_REQUEST['Password']);

		$stmt= $this->model->logeo($usuarios);

		switch ($stmt['roles_ID_ROLES']) {
			case '1':
			session_start();
				header("location:?controller=Administrador&accion=Index");
				$_SESSION['doc_Administrador'] = $stmt['Documento'];
				break;
			case '2':
			session_start();
				header("location:?controller=Usuario&accion=Index");
				$_SESSION['doc_Cliente'] = $stmt['Documento'];
				break;
			
			default:
				header("location:index.php");
				break;
		}
	}
	public function salir() {
		session_start();
		session_destroy();
		header("location:index.php");
	}
}


?>