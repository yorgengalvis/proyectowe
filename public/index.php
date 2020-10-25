<?php
define('BASE_URL', 'http://'.$_SERVER['HTTP_HOST'].'/proyectowe/');

require_once 'vendor/autoload.php';
require_once 'models/database.php';



if(!isset($_GET['url'])){
	$controller="inicio";
	$rutaControlador = "controller/".$controller."Controller.php";
	include_once($rutaControlador);
	$controller = ucwords($controller)."Controller";
	$controller = new $controller;
	$controller->index();
}else{
$controller = "index";
	$accion = "index";

	if(isset($_GET['url'])){

		$url = $_GET['url'];
		$url = explode('/', $url);
		$url = array_filter($url);

		$controller = array_shift($url);
		$accion = array_shift($url);
		$argumentos = $url;

		$rutaControlador = "controller/".$controller."Controller.php";

		if(is_readable($rutaControlador)){
			if(!$accion) {
				include_once($rutaControlador);
				$controller = ucwords($controller)."Controller";
				$controller = new $controller;
				$controller->index();
			}else{
				include_once($rutaControlador);
				$controller = ucwords($controller)."Controller";
				$controller = new $controller;
				if(!$argumentos) {
					call_user_func(array($controller, $accion));
				}else{
					call_user_func_array(array($controller, $accion), $argumentos);
				}
			}
		}else{
			echo "Controller not found";
		}
	}
}