<?php
require_once 'entity/Empresa.php';
class EmpresaDAO
{
	
	function __construct(){}


	public function crear($arrayEmpresa){
	Empresa::create($arrayEmpresa);
	}

	public function editar($arrayEmpresa){
		Empresa::find($arrayEmpresa['id'])->update($arrayEmpresa);
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