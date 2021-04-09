<?php
require_once 'models/CategoriaDAO.php';


class CategoriaController
{ 
	function index(){

	}

	function create(){
		$descripcion=$_POST['descripcion'];
		$estado=$_POST['estado'];
		$arrayCategoria=array('descripcion'=>$descripcion,'estado'=>$estado);
		$model=new CategoriaDAO();
		$model->crear($arrayCategoria);
		header('Location: '.BASE_URL.'admin/categorias');
	}

	function edit($id){
		$descripcion=$_POST['descripcion'];
		$estado=$_POST['estado'];
		$arrayCategoria=array('id'=>$id,'descripcion'=>$descripcion,'estado'=>$estado);
		$model=new CategoriaDAO();
		$model->editar($arrayCategoria);
		header('Location: '.BASE_URL.'admin/categorias');
	}

	function eliminar($id){
		$model=new CategoriaDAO();
		$model->eliminar($id);
		header('Location: '.BASE_URL.'admin/categorias');
	}
}
