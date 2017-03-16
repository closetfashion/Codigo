<?php 

/**
* 
*/
require_once'model/Administrador.php';
class AdministradorControlador
{
	private $model;

	public function __construct() {
		$this->model= new Administrador();
	}
/*----------------------------------------------Diseño--------------------------------------------------*/
	public function Index()
	{
		$instructor = $this->model;
		$stmt= $instructor->listar();

		require_once'views/header.html';
		require_once'views/Administradores/index.php';
		require_once'views/footer.html';
	}
	public function AccesoriosHombre()
	{
		$instructor = $this->model;
		$stmt= $instructor->listar();

		require_once'views/header.html';
		require_once'views/Administradores/AccesoriosHombre.php';
		require_once'views/footer.html';
	}
	public function AccesoriosMujer()
	{
		$instructor = $this->model;
		$stmt= $instructor->listar();

		require_once'views/header.html';
		require_once'views/Administradores/AccesoriosMujer.php';
		require_once'views/footer.html';
	}
	public function CalzadoHombre()
	{
		$instructor = $this->model;
		$stmt= $instructor->listar();

		require_once'views/header.html';
		require_once'views/Administradores/CalzadoHombre.php';
		require_once'views/footer.html';
	}
	public function CalzadoMujer()
	{
		$instructor = $this->model;
		$stmt= $instructor->listar();

		require_once'views/header.html';
		require_once'views/Administradores/CalzadoMujer.php';
		require_once'views/footer.html';
	}
	public function CamisasHombre()
	{
		$instructor = $this->model;
		$stmt= $instructor->listar();

		require_once'views/header.html';
		require_once'views/Administradores/CamisasHombre.php';
		require_once'views/footer.html';
	}
	public function CamisasMujer()
	{
		$instructor = $this->model;
		$stmt= $instructor->listar();

		require_once'views/header.html';
		require_once'views/Administradores/CamisasMujer.php';
		require_once'views/footer.html';
	}
	
	public function Hombre()
	{
		$instructor = $this->model;
		$stmt= $instructor->listar();

		require_once'views/header.html';
		require_once'views/Administradores/Hombre.php';
		require_once'views/footer.html';
	}
	public function Mujer()
	{
		$instructor = $this->model;
		$stmt= $instructor->listar();

		require_once'views/header.html';
		require_once'views/Administradores/Mujer.php';
		require_once'views/footer.html';
	}
	public function PantalonesHombre()
	{
		require_once'views/header.html';
		require_once'views/Administradores/PantalonesHombre.php';
		require_once'views/footer.html';
	}
	public function PantalonesMujer()
	{
		require_once'views/header.html';
		require_once'views/Administradores/PantalonesMujer.php';
		require_once'views/footer.html';
	}
		public function QuienesSomos()
	{
		require_once'views/header.html';
		require_once'views/Administradores/QuienesSomos.php';
		require_once'views/footer.html';
	}

/* --------------------------------------------CRUD's Usuarios----------------------------------------------------------*/


	public function CRUDUsuarios()

	{
		$instructor = $this->model;
		$stmt= $instructor->listar();

		require_once'views/header.html';
		require_once'views/Administradores/CRUDS/Usuarios/index.php';
		require_once'views/footer.html';
	}

	    public function RegistroUsuarios()
	{

		require_once'views/header.html';
		require_once'views/Administradores/CRUDS/Usuarios/Registro.php';
		require_once'views/footer.html';
	}

		/*public function VerUsuarios()
	{
		require_once'views/header.html';
		require_once'views/Administradores/CRUDS/Usuarios/Ver.php';
		require_once'views/footer.html';
	}*/
		public function EditarUsuarios()
	{

		require_once'views/header.html';
		require_once'views/Administradores/CRUDS/Usuarios/Editar.php';
		require_once'views/footer.html';
	}


		public function CRUD()
	{
		$instructor = $this->model;

		if (!isset($_REQUEST['ID_USUARIO'])) {
			$instructor->setDocumento($_REQUEST['Documento']);
			$stmt= $instructor->consultaDocumento($instructor);
			if ($stmt) {
				require_once'views/header.html';
				require_once'views/Administradores/CRUDS/Usuarios/Editar.php';
				require_once'views/footer.html';
				//editar
			}
			else
			{
				
		
				/*$instructor->setid($_REQUEST['id']);*/
				$instructor->setDocumento($_REQUEST['Documento']);
				$instructor->setNombre($_REQUEST['Nombre']);
				$instructor->setApellido($_REQUEST['Apellido']);
				$instructor->setEdad($_REQUEST['Edad']);
				$instructor->setDireccion($_REQUEST['Direccion']);
				$instructor->setCorreo($_REQUEST['Correo']);
				$instructor->setPassword($_REQUEST['Password']);
				$instructor->setRol($_REQUEST['Rol']);
				$stmt= $instructor->insertar($instructor);
				header("location:?controller=Administrador&accion=CRUDUsuarios");
			
		}
	}
}
		public function Eliminar() {

		$instructor= $this->model;

		$instructor->setDocumento($_REQUEST['Documento']);

		$stmt= $instructor->Eliminar($instructor);
		header("location:?controller=administrador&accion=CRUDUsuarios");
	}

	public function Editar(){
		$instructor = $this->model;
				$instructor->setDocumento($_REQUEST['Documento']);
				$instructor->setNombre($_REQUEST['Nombre']);
				$instructor->setApellido($_REQUEST['Apellido']);
				$instructor->setEdad($_REQUEST['Edad']);
				$instructor->setDireccion($_REQUEST['Direccion']);
				$instructor->setCorreo($_REQUEST['Correo']);
				$instructor->setPassword($_REQUEST['Password']);
				$instructor->setRol($_REQUEST['Rol']);
				$stmt= $instructor->Editar();
				if ($stmt==true) {
			header("location:?controller=administrador&accion=CRUDUsuarios");
		}
	}

	}


 ?>