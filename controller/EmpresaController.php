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
		$arrayEmpresa=array('id' => 0,'quienessomos'=>$_POST['quienessomos'],'emailcontacto'=>$_POST['email-contacto'], 'direccion'=>$_POST['direccion'], 'telefonocontacto'=>$_POST['telefonocontacto'], 'facebook'=>$_POST['facebook'],'instagram'=>$_POST['instagram'],'twitter'=>$_POST['twitter']);
		$model->editar($arrayEmpresa);
		header('Location: '.BASE_URL.'admin/configuracion');
	}

}
?>