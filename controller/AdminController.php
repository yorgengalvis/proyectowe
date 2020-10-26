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
		$this->validacionUsuario();
		$modelProducto=new ProductoDAO();
		$productos=$modelProducto->findAll();
		require_once 'views/admin/layout/header.php';
		require_once 'views/admin/productos/index.php';
		require_once 'views/admin/layout/footer.php';
	}

	function categorias(){
		$this->validacionUsuario();
		$model=new CategoriaDAO();
		$categorias=$model->findAll();
		require_once 'views/admin/layout/header.php';
		require_once 'views/admin/categorias/index.php';
		require_once 'views/admin/layout/footer.php';
	}

	function configuracion(){
		$this->validacionUsuario();
		require_once 'views/admin/layout/header.php';
		require_once 'views/admin/configuracion/index.php';
		require_once 'views/admin/layout/footer.php';
	}

	function marcas(){
		$this->validacionUsuario();
		$model=new MarcaDAO();
		$marcas=$model->findAll();
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

	function edit_product($id){
		$this->validacionUsuario();
		$productos=new ProductoDAO();
		$producto=$productos->find('id',$id);
		require_once 'views/admin/layout/header.php';
		require_once 'views/admin/productos/edit.php';
		require_once 'views/admin/layout/footer.php';
	}

	function edit_categoria($id){
		$this->validacionUsuario();
		require_once 'views/admin/layout/header.php';
		require_once 'views/admin/categorias/edit.php';
		require_once 'views/admin/layout/footer.php';
	}
	function add_categoria(){
		$this->validacionUsuario();
		require_once 'views/admin/layout/header.php';
		require_once 'views/admin/categorias/add.php';
		require_once 'views/admin/layout/footer.php';
	}
	function edit_marca($id){
		$this->validacionUsuario();
		require_once 'views/admin/layout/header.php';
		require_once 'views/admin/marcas/edit.php';
		require_once 'views/admin/layout/footer.php';
	}
	function add_marca(){
		$this->validacionUsuario();
		require_once 'views/admin/layout/header.php';
		require_once 'views/admin/marcas/add.php';
		require_once 'views/admin/layout/footer.php';
	}

	function add_product(){
		$this->validacionUsuario();
		require_once 'views/admin/layout/header.php';
		require_once 'views/admin/productos/add.php';
		require_once 'views/admin/layout/footer.php';
	
	}

	function validacionUsuario(){
		session_start();
		if(!$_SESSION['admin']) header('Location: index');
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