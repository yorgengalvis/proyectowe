<?php
require_once 'entity/Marca.php';
class MarcaDAO
{
	
	function __construct(){}

	public function crear($arrayMarca){
	Marca::create($arrayMarca);
	}

	public function editar($arrayMarca){
	$marca=Marca::get($arrayMarca->id);
	$marca->nombre=$arrayMarca->nombre;
    $marca->descripcion=$arrayMarca->descripcion;
	$marca->save();
	}

	public function eliminar($id){
		Marca::destroy($id);
	}

	public function find($opcion,$valor){
		$marca = Marca::where($opcion,$valor)->get();
		return $marca;
	}

	public function findAll(){
		return Marca::get();
	}


}
?>