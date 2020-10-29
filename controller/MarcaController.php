<?php
require_once 'models/MarcaDAO.php';
class MarcaController
{
	function index(){

	}

	function edit($id){
		$nombre=$_POST['nombre'];
		$descripcion=$_POST['descripcion'];
		$model=new MarcaDAO();
		$arrayMarca=array('id' => $id, 'nombre'=>$nombre,'descripcion'=>$descripcion);
		$model->editar($arrayMarca);
		header('Location: '.BASE_URL.'admin/marcas');
	}

	function add(){
		$nombre=$_POST['nombre'];
		$descripcion=$_POST['descripcion'];
		$model=new MarcaDAO();
		$arrayMarca=array('nombre'=>$nombre,'descripcion'=>$descripcion);
		$model->crear($arrayMarca);
		header('Location: '.BASE_URL.'admin/marcas');
	}

	function delete($id){
		$model=new MarcaDAO();
		$model->eliminar($id);
		header('Location: '.BASE_URL.'admin/marcas');
	}
}

?>