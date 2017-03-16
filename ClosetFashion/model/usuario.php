<?php  



/**
* 
*/
class Usuario extends Conexion
{
	private $Correo,$Password;
	private $model;

	public function __construct()
	{
		$this->model= parent::__construct();
	}
	public function getCorreo() {
		return $this->Correo;
	}
	public function setCorreo($Correo) {
		$this->Correo= $Correo;
	}
	public function getPassword() {
		return $this->Password;
	}
	public function setPassword($Password) {
		$this->Password= $Password;
	}
	public function logeo() {



		$query="SELECT * FROM usuarios U INNER JOIN roles R ON U.roles_ID_ROLES=R.ID_ROL WHERE U.Correo='".$this->Correo."' AND U.Password='".$this->Password."'";


		$stmt= $this->model->prepare($query);
		$stmt->execute();


		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}



?>