<?php

require_once 'entity/Producto.php';

class ProductoDAO
{
	
	function __construct(){}


	public function crear($arrayProducto){
	Producto::create($arrayProducto);
	}

	public function editar($arrayProducto){
	$producto=Producto::get($arrayProducto->id);
	$producto->referencia=$arrayProducto->referencia;
	$producto->nombre=$arrayProducto->nombre;
	$producto->descripcioncorta=$arrayProducto->descripcioncorta;
	$producto->detalle=$arrayProducto->detalle;
	$producto->valor=$arrayProducto->valor;
	$producto->palabrasclave=$arrayProducto->palabrasclave;
	$producto->estado=$arrayProducto->estado;
	$producto->categoria_id=$arrayProducto->categoria_id;
	$producto->marca_id=$arrayProducto->marca_id;
	$producto->save();
	}

	public function eliminar($id){
		Producto::destroy($id);
	}

	public function find($opcion,$valor){
		$empresa = Producto::where($opcion,$valor)->get();
		return $empresa;
	}

	public function findAll(){
		return Producto::get();
	}

	public function findSix(){
		return Producto::limit(6)->get();
	}
}

?>