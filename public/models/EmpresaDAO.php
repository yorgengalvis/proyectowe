<?php
require_once 'entity/Empresa.php';
class EmpresaDAO
{
	
	function __construct(){}


	public function crear($arrayEmpresa){
	Empresa::create($arrayEmpresa);
	}

	public function editar($id,$arrayEmpresa){
		$empresa=Empresa::get($id);
		$empresa->nombre=$arrayEmpresa->nombre;
	$empresa->quienessomos=$arrayEmpresa->quienessomos;
	$empresa->emailcontacto=$arrayEmpresa->emailcontacto;
	$empresa->direccion=$arrayEmpresa->direccion;
	$empresa->telefonocontacto=$arrayEmpresa->telefonocontacto;
	$empresa->facebook=$arrayEmpresa->facebook;
	$empresa->twitter=$arrayEmpresa->twitter;
	$empresa->instagram=$arrayEmpresa->instagram;
	$empresa->save();
	}

	public function eliminar($id){
		Empresa::destroy($id);
	}

	public function find($opcion,$valor){
		$empresa = Empresa::where($opcion,$valor)->get();
		return $empresa;
	}

	public function findAll(){
		return Admin::get();
	}

}
?>