<?php
require_once 'entity/Categoria';

class CategoriaDAO{
	
	function __construct(){}


	public function crear($arrayCategoria){
	Empresa::create($arrayCategoria);
	}

	public function editar($arrayCategoria){
	$categoria=Categoria::get($arrayCategoria);
	$categoria->descripcion=$arrayCategoria->descripcion;
	$categoria->estado=$arrayCategoria->estado;
	$categoria->save();
	}

	public function eliminar($id){
		Categoria::destroy($id);
	}

	public function find($opcion,$valor){
		$categoria = Categoria::where($opcion,$valor)->get();
		return $categoria;
	}

	public function findAll(){
		return Categoria::get();
	}


}
?>