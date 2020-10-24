<?php
require_once 'models/ProductoDAO.php';
require_once 'models/SliderDAO.php';
require_once 'models/EmpresaDAO.php';
require_once 'models/CategoriaDAO.php';

class ProductoController
{

	function eliminar($id){
		$model=new EmpresaDAO();
		$model->eliminar($id);
	}

	function index(){
$categoria=new CategoriaDAO();
		$categorias=$categoria->findAll();
		$model=new EmpresaDAO();
		$empresas=$model->find('nombre','MovilSec');
		$modelProducto=new ProductoDAO();
		$productos=$modelProducto->findAll();
		$modeloSlider=new SliderDAO();
		$sliders=$modeloSlider->findAll();
		require_once 'views/layout/header.php';
		require_once 'views/producto/listar.php';
		require_once 'views/layout/footer.php';
	}
	function create(){

	}


	function editar(){
		
	}

	function list(){
		$categoria=new CategoriaDAO();
		$categorias=$categoria->findAll();
		$model=new EmpresaDAO();
		$empresas=$model->find('nombre','MovilSec');
		$modelProducto=new ProductoDAO();
		$productos=$modelProducto->findAll();
		$modeloSlider=new SliderDAO();
		$sliders=$modeloSlider->findAll();
		require_once 'views/layout/header.php';
		require_once 'views/producto/listar.php';
		require_once 'views/layout/footer.php';
	}

	function categoria($name){
		$categoria=new CategoriaDAO();
		$categorias=$categoria->findAll();
		$model=new EmpresaDAO();
		$o=$name;
		$cat=$categoria->find('descripcion',$name)[0];
		$empresas=$model->find('nombre','MovilSec');
		$modelProducto=new ProductoDAO();
		$productos=$modelProducto->find('categoria_id',$cat->id);
		$modeloSlider=new SliderDAO();
		$sliders=$modeloSlider->findAll();
		require_once 'views/layout/header.php';
		require_once 'views/producto/listar.php';
		require_once 'views/layout/footer.php';
	}

	function detalle($id){
		$categoria=new CategoriaDAO();
		$categorias=$categoria->findAll();
		$model=new EmpresaDAO();
		$empresas=$model->find('nombre','MovilSec');
		$modelProducto=new ProductoDAO();
		$producto=$modelProducto->get($id);
		$modeloSlider=new SliderDAO();
		$sliders=$modeloSlider->findAll();
		require_once 'views/layout/header.php';
		require_once 'views/producto/detalle.php';
		require_once 'views/layout/footer.php';
	}

	function consultaModal($id,$bol){
		$modelo=new ProductoDAO();
		$modelo->getModal($id,$bol);
	}

}
?>