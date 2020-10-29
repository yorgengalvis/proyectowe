<?php
require_once 'entity/Marca.php';
class MarcaDAO
{
	
	function __construct(){}

	public function crear($arrayMarca){
	Marca::create($arrayMarca);
	}

	public function editar($arrayMarca){
	Marca::find($arrayMarca['id'])->update($arrayMarca);
	}

	public function eliminar($id){
		Marca::destroy($id);
	}

	public function find($opcion,$valor){
		$marca = Marca::where($opcion,'=',$valor)->get();
		return $marca;
	}

	public function get($id){
		return Marca::find($id);
	}

	public function findAll(){
		return Marca::get();
	}


}
?>