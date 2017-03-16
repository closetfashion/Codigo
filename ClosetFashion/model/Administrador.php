	<?php  

 



/**
* 
*/
class Administrador extends Conexion
{
	private $id,$Documento,$Nombre,$Apellido,$Edad,$Direccion,$Correo,$Password,$Rol;

	private $model;

	public function __construct()
	{
		$this->model= parent::__construct();
	}
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id= $id;
	}
	public function getDocumento() {
		return $this->Documento;
	}
	public function setDocumento($Documento) {
		$this->Documento= $Documento;
	}
	public function getNombre() {
		return $this->Nombre;
	}
	public function setNombre($Nombre) {
		$this->Nombre= $Nombre;
	}
	public function getApellido() {
		return $this->Apellido;
	}
	public function setApellido($Apellido) {
		$this->Apellido= $Apellido;
	}
	public function getEdad() {
		return $this->Edad;
	}
	public function setEdad($Edad) {
		$this->Edad= $Edad;
	}
	public function getDireccion(){
		return $this->Direccion;
	}

	public function setDireccion($Direccion){
		$this->Direccion=$Direccion;
	}

	public function getCorreo(){
		return $this->Correo;
	}

	public function setCorreo($Correo){
		$this->Correo=$Correo;
    }

    public function getPassword(){
		return $this->Password;
	}

	public function setPassword($Password){
		$this->Password=$Password;
    }
     public function getRol(){
		return $this->Rol;
	}

	public function setRol($Rol){
		$this->Rol=$Rol;
    }

	public function insertar() {
		try{

			$query="INSERT INTO usuarios(Documento,Nombre,Apellido,Edad,Direccion,Correo,Password,roles_ID_ROLES) VALUES('".$this->Documento."','".$this->Nombre."','".$this->Apellido."','".$this->Edad."','".$this->Direccion."','".$this->Correo."','".$this->Password."','".$this->Rol."')";

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
            $query="DELETE FROM usuarios WHERE Documento='".$this->Documento."'"; 


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
    public function consultadocumento() {
    	try {
    		$query= "SELECT * FROM usuarios  WHERE  Documento='".$this->Documento."'";

    	$stmt= $this->model->prepare($query);
    	$stmt->execute();
    	return $stmt->fetch(PDO::FETCH_ASSOC);
    	} catch (PDOException $e) {
    		return false;
    	}
    }
    public function listar() {

    	try {
    		$query= "SELECT * FROM usuarios";

    	$stmt= $this->model->prepare($query);
    	$stmt->execute();
    	return $stmt->fetchAll(PDO::FETCH_OBJ);
    	} catch (PDOException $e) {
    		return false;
    	}
    }
    public function Editar() {
    	try {
    		$query="UPDATE usuarios SET Documento='".$this->Documento."' ,Nombre='".$this->Nombre."',Apellido='".$this->Apellido."',Edad='".$this->Edad."',Direccion='".$this->Direccion."',Correo='".$this->Correo."',Password='".$this->Password."' WHERE Documento='".$this->Documento."'";
    		$stmt= $this->model->prepare($query);
    		$stmt->execute();
    		return true;
    	} catch (PDOException $e) {
    		return false;
    	}
    }
}


?>