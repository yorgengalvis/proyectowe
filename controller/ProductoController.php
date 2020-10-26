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
		$O=0;
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

	function get($id){
		$modelo=new ProductoDAO();
		$modelo->find('id',$id);
	}


	function list(){
		$categoria=new CategoriaDAO();
		$categorias=$categoria->findAll();
		$model=new EmpresaDAO();
		$o=0;
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
		$modelProducto=new ProductoDAO();
		$o=1;
		if(is_null($name)){
			$cat=$categoria->findAll();
			$productos=$modelProducto->findAll();
		}else{
			$cat=$categoria->find('descripcion',$name)[0];
			$productos=$modelProducto->find('categoria_id',$cat->id);
		}
		$empresas=$model->find('nombre','MovilSec');
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
		if(isset($producto)){
			require_once 'views/producto/detalle.php';
		}else{
			require_once 'views/error/404product.php';
		}
		require_once 'views/layout/footer.php';
	}

	function busqueda($name){
		$modelo=new ProductoDAO();
		$modelo->getProductosAjax($name);
	}


	function consultaModal($id){
		$modelo=new ProductoDAO();
		$modelo->getModal($id);
	}

}
?>