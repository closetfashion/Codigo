<?php 

/**
* 
*/
require_once'model/Productos.php';
class ProductosControlador
{
	private $model;

	public function __construct() {
		$this->model= new Productos();
	}
public function CRUDProductos()

	{
		$instructor = $this->model;
		$stmt= $instructor->listar();

		require_once'views/header.html';
		require_once'views/Administradores/CRUDS/Productos/index.php';
		require_once'views/footer.html';
	}

	    public function RegistroProductos()
	{

		require_once'views/header.html';
		require_once'views/Administradores/CRUDS/Productos/Registro.php';
		require_once'views/footer.html';
	}

		/*public function VerProductos()
	{
		require_once'views/header.html';
		require_once'views/Administradores/CRUDS/Productos/Ver.php';
		require_once'views/footer.html';
	}*/
		public function EditarProductos()
	{

		require_once'views/header.html';
		require_once'views/Administradores/CRUDS/Productos/Editar.php';
		require_once'views/footer.html';
	}
	


	public function CRUD()
	{
		$instructor = $this->model;

		if (isset($_REQUEST['ID_PRODUCTO'])) {
			$instructor->setID_PRODUCTO($_REQUEST['ID_PRODUCTO']);
			$stmt= $instructor->consultaid_Producto($instructor);
			if ($stmt) {
				require_once'views/header.html';
				require_once'views/Administradores/CRUDS/Productos/Editar.php';
				require_once'views/footer.html';
				//editar
			}
			else
			{
				
				
				/*$instructor->setid($_REQUEST['id']);*/
				$instructor->setID_PRODUCTO($_REQUEST['ID_PRODUCTO']);
				$instructor->setNombre_producto($_REQUEST['Nombre_producto']);
				$instructor->setPrecio_unitario($_REQUEST['Precio_unitario']);
				$instructor->setUbicacion_producto($_REQUEST['Ubicacion_producto']);
				$stmt= $instructor->insertar($instructor);
				header("location:?controller=Productos&accion=CRUDProductos");
			
		}
	}
}
		public function EliminarProductos() {-

		$instructor= $this->model;

		$instructor->setid_Producto($_REQUEST['ID_PRODUCTO']);

		$stmt= $instructor->Eliminar($instructor);
		header("location:?controller=Productos&accion=CRUDProductos");
	}

		/*public function Prefijo() {

			$instructor= $this->model;

			$prefijo=date('Y_M_D_G_i_s');

				$ubicaciontemp=basename($_FILES['uploadedfile']['name']);
				$ubicacion=$prefijo.$ubicaciontemp;

				$target_path = "uploads/";
				$target_path = $target_path.$ubicacion;if(move_uploaded_file($_FILES['uploadedfile']['tpm_name'],$target_path)){  } 
	}*/



	public function Editar_Productos(){
		$instructor = $this->model;
				$instructor->setid_Producto($_REQUEST['ID_PRODUCTO']);
				$instructor->setNombre_producto($_REQUEST['Nombre_producto']);
				$instructor->setPrecio_unitario($_REQUEST['Precio_unitario']);
				$instructor->setUbicacion_producto($_REQUEST['Ubicacion_producto']);
				/*$instructor->setImagen_Producto($_REQUEST['Imagen_Producto']);*/
		$stmt= $instructor->Editar();
		if ($stmt==true) {
			header("location:?controller=Productos&accion=CRUDProductos");
		}

	}
}
