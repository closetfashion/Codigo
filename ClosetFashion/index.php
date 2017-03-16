<?php  
require_once'model/conexion.php';
$controller='login';

if (!isset($_REQUEST['controller'])) {
	$controller= ucwords($controller).'Controlador';
	require_once'controller/'.$controller.'.php';
	$controller= new $controller;
	$controller->Index();
}
else {
	$controller= ucwords($_REQUEST['controller']).'Controlador';
	$accion= isset($_REQUEST['accion']) ? $_REQUEST['accion'] : 'Index';
	require_once'controller/'.$controller.'.php';
	$controller= new $controller;

	call_user_func(array($controller,$accion));
}

?>