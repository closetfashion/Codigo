<?php  

 



/**
* 
*/
class Productos extends Conexion
{
	private $ID_PRODUCTO, $Nombre_producto, $Precio_unitario, $Ubicacion_producto;
	private $model;

	public function __construct()
	{
		$this->model= parent::__construct();
	}
    public function setID_PRODUCTO ($ID_PRODUCTO){
    	$this->ID_PRODUCTO=$ID_PRODUCTO;
    }
	public function setNombre_producto($Nombre_producto){
		$this->Nombre_producto=$Nombre_producto;
	}
	public function setPrecio_unitario($Precio_unitario){
		$this->Precio_unitario=$Precio_unitario;
	}
	public function setUbicacion_producto($Ubicacion_producto){
		$this->Ubicacion_producto=$Ubicacion_producto;
	}

	public function insertar() {
		try{
           $query="INSERT INTO productos(Nombre_producto,Precio_unitario,Ubicacion_producto) VALUES('".$this->Nombre_producto."','".$this->Precio_unitario."','".$this->Ubicacion_producto."',)";



		$stmt=$this->model->prepare($query);
		$stmt->execute();
		return true;
	} catch (PDOException $e) {
		return false;
	}
	}
	public function Eliminar()
    {
        try 
        {
        	/*$query="DELETE FROM usuarios WHERE id='".$this->id."'";*/
            $query="DELETE FROM productos WHERE ID_PRODUCTO='".$this->ID_PRODUCTO."'";


        $stmt=$this->model->prepare($query);
		$stmt->execute();
            return true;
        } catch (Exception $e) 
        {
            return false;

        }
    }
   /* public function actualizar() {


    	 $stmt = $con->prepare( 'UPDATE prueba SET usuarios = :usuarios WHERE usuario = :usuario' );
    	 $rows = $stmt->execute( array( ':nombre'   => $nom,':apellidos' => $ape));

  	try {
    	echo 'Actualización correcta';
  	
	} catch(PDOException $e) {
	  echo 'Error: ' . $e->getMessage();
	}
    }*/
    public function consultaid_Producto() {
    	try {
    		$query= "SELECT * FROM productos WHERE ID_PRODUCTO='".$this->ID_PRODUCTO."'";

    	$stmt= $this->model->prepare($query);
    	$stmt->execute();
    	return $stmt->fetch(PDO::FETCH_ASSOC);
    	} catch (PDOException $e) {
    		return false;
    	}
    }
    public function listar() {

    	try {
    		$query= "SELECT * FROM productos";

    	$stmt= $this->model->prepare($query);
    	$stmt->execute();
    	return $stmt->fetchAll(PDO::FETCH_OBJ);
    	} catch (PDOException $e) {
    		return false;
    	}
    }
    public function Editar() {
    	try {
    		$query="UPDATE productos SET ID_PRODUCTO='".$this->ID_PRODUCTO."' ,Nombre_producto='".$this->Nombre_producto."',Precio_unitario='".$this->Precio_unitario."',Ubicacion_producto='".$this->Ubicacion_producto."' WHERE ID_PRODUCTO='".$this->ID_PRODUCTO."'";

    		$stmt= $this->model->prepare($query);
    		$stmt->execute();
    		return true;
    	} catch (PDOException $e) {
    		return false;
    	}
    }
}


?>