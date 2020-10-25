<?php
require_once 'entity/Admin.php';
class AdminDAO
{
	
	function __construct(){}

	public function crear($arrayAdmin){
	Admin::create($arrayAdmin);
	}

	public function editar($id,$arrayAdmin){
	$admin=Admin::get($id);
	$admin->Username=$arrayAdmin->Username;
	$admin->Password=$arrayAdmin->Password;
	$admin->nombres=$arrayAdmin->nombres;
	$empresa->save();

	}

	public function eliminar($id){
		Admin::destroy($id);
	}

	public function find($opcion,$valor){
		$admin = Admin::where($opcion,$valor)->get();
		return $admin;
	}

	public function findAll(){
		return Admin::get();
	}


}
?>

