<?php
require_once 'models/AdminDAO.php';
require_once 'models/SliderDAO.php';
require_once 'models/ProductoDAO.php';
require_once 'models/CategoriaDAO.php';
require_once 'models/MarcaDAO.php';

class AdminController
{ 
	private $modelo;

	public function __CONSTRUCT(){
        $this->usersesion=null;
    }

    function index(){
		session_start();
		if($_SESSION['admin']){
		$administrador=$_SESSION['admin'];
		$modeloSlider=new SliderDAO();
		$sliders=$modeloSlider->findAll();
		require_once 'views/admin/layout/header.php';
		require_once 'views/admin/index/index.php';
		require_once 'views/admin/layout/footer.php';
		}else{
		header('Location: login');
		}	
	}

	function productos(){
		$modelProducto=new ProductoDAO();
		$productos=$modelProducto->findAll();
		session_start();
		$administrador=$_SESSION['admin'];
		require_once 'views/admin/layout/header.php';
		require_once 'views/admin/productos/index.php';
		require_once 'views/admin/layout/footer.php';
	}

	function categorias(){
		session_start();
		$administrador=$_SESSION['admin'];
		require_once 'views/admin/layout/header.php';
		require_once 'views/admin/categorias/index.php';
		require_once 'views/admin/layout/footer.php';
	}

	function empresa(){
		session_start();
		$administrador=$_SESSION['admin'];
		require_once 'views/admin/layout/header.php';
		require_once 'views/admin/empresa/index.php';
		require_once 'views/admin/layout/footer.php';
	}

	function marcas(){
		session_start();
		$administrador=$_SESSION['admin'];
		require_once 'views/admin/layout/header.php';
		require_once 'views/admin/marcas/index.php';
		require_once 'views/admin/layout/footer.php';
	}

	function login(){
		error_reporting(0);
		session_start();
		if($_SESSION['admin']){
			header('Location: index');
		}else{
			require_once 'views/admin/login/header.php';
			require_once 'views/admin/login/login.php';
			require_once 'views/admin/login/footer.php';
		}	
	}

	function cerrar(){
		session_start();
		session_unset();
		session_destroy();
		header('Location: login');
	}


	function validate(){
		$usuario=$_POST['usuario'];
		$clave =$_POST['clave'];
		$model=new AdminDAO();
		$usuario= $model->find('Username',$usuario);
		if($usuario[0] != null){
			if($usuario[0]->Password==$clave){
				session_start();
				$_SESSION['admin']=$usuario[0];
				header('Location: index');
			}else{
				header('Location: login');
			}
		}else{
		header('Location: login');
		}
	}

}

?>