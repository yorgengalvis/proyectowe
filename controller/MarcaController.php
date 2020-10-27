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
		$marca=$model->get($id);

	}
}

?>