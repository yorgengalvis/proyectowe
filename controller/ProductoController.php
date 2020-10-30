<?php
require_once 'models/ProductoDAO.php';
require_once 'models/SliderDAO.php';
require_once 'models/EmpresaDAO.php';
require_once 'models/CategoriaDAO.php';

class ProductoController
{

	function eliminar($id){
		$model=new ProductoDAO();
		$model->eliminar($id);
		header('Location: '.BASE_URL.'admin/productos');
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

	function create(){
		$referencia=$_POST['referencia'];
		$valor=$_POST['valor'];
		$nombre=$_POST['nombre'];
		$descripcioncorta=$_POST['descripcioncorta'];
		$detalle=$_POST['detalle'];
		$palabrasclave=$_POST['palabrasclave'];
		$photo=$_FILES['fichero_foto']['name'];
		$estado=$_POST['estado'];
		$categoria=$_POST['categoria'];
		$marca=$_POST['marca'];
		$arrayProducto = array(
			"referencia" =>$referencia,
			"nombre" => $nombre,
			"descripcioncorta" => $descripcioncorta,
			"valor" =>$valor,
			"detalle"=>$detalle,
			"palabrasclave"=>$palabrasclave,
			"foto" => $photo,
			"estado"=>$estado,
			"categoria_id" => $categoria,
			"marca_id"=>$marca
		);
		$modelPro=new ProductoDAO();
		$modelPro->crear($arrayProducto);
		$url='public/img_Productos/'.$photo;
		if(move_uploaded_file($_FILES['fichero_foto']['tmp_name'],$url)){
			header('Location: ../admin/productos');
		}
	}

	function edit($id){
		$referencia=$_POST['referencia'];
		$valor=$_POST['valor'];
		$nombre=$_POST['nombre'];
		$descripcioncorta=$_POST['descripcioncorta'];
		$detalle=$_POST['detalle'];
		$palabrasclave=$_POST['palabrasclave'];
		$modele=new ProductoDAO();
		$producto=$modele->get($id);
		if($_FILES['fichero_foto']['size']>0){
			$photo=$_FILES['fichero_foto']['name'];
		}else{
			$photo=$producto['foto'];
		}
		$estado=$_POST['estado'];
		$categoria=$_POST['categoria'];
		$marca=$_POST['marca'];
		
		$arrayProducto = array(
			"id"=>$id,
			"referencia" =>$referencia,
			"nombre" => $nombre,
			"descripcioncorta" => $descripcioncorta,
			"valor" =>$valor,
			"detalle"=>$detalle,
			"palabrasclave"=>$palabrasclave,
			"foto" => $photo,
			"estado"=>$estado,
			"categoria_id" => $categoria,
			"marca_id"=>$marca
		);
		if($_FILES['fichero_foto']['size']>0){
			$modelPro=new ProductoDAO();
			$modelPro->editar($arrayProducto);
			$url='public/img_Productos/'.$photo;
			if(move_uploaded_file($_FILES['fichero_foto']['tmp_name'],$url)){
				header('Location: '.BASE_URL.'admin/productos');
			}
		}else{
			$modelPro=new ProductoDAO();
			$modelPro->editar($arrayProducto);
			header('Location: '.BASE_URL.'admin/productos');
		}
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