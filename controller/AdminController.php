<?php


class AdminController
{ 

	private $modelo;

	public function __CONSTRUCT(){
        
    }

	function index(){

		
	
	}
	 function login(){
		require_once 'views/admin/layout/header.php';
		require_once 'views/admin/login/login.php';
		require_once 'views/admin/layout/footer.php';
	}

	function consultar(){
		$usuario=$_POST['usuario'];
		$clave =$_POST['clave'];
		echo "SI LLEGA";
	}
}
?>