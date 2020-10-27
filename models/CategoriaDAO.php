<?php
require_once 'entity/Categoria.php';

class CategoriaDAO{
	
	function __construct(){}


	public function crear($arrayCategoria){
	Categoria::create($arrayCategoria);
	}

	public function editar($arrayCategoria){
	Categoria::find($arrayCategoria['id'])->update($arrayCategoria);
	}

	public function eliminar($id){
		Categoria::destroy($id);
	}

	public function find($opcion,$valor){
		$categoria = Categoria::where($opcion,'=',$valor)->get();
		return $categoria;
	}

	public function get($id){
		return Categoria::find($id);
	}

	public function findAll(){
		return Categoria::get();
	}


}
?>