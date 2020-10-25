<?php
require_once 'models/EmpresaDAO.php';


class EmpresaController
{

	function eliminar($id){
		$model=new EmpresaDAO();
		$model->eliminar($id);
	}

	function create(){

	}


	function editar(){
		$model=new EmpresaDAO();
		$model->editar($id,$arrayEmpresa);
	}

}
?>