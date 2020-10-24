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
		$producto = Producto::where($opcion,'=',$valor)->get();
		return $producto;
	}

	public function getCount($opcion,$valor){
		return Producto::where([$opcion => $valor])->get()->count();
	}

	public function get($id){
		return Producto::find($id);
	}

	public function findAll(){
		return Producto::get();
	}

	public function findSix(){
		return Producto::limit(6)->get();
	}

	public function getModal($id){
		$producto=Producto::find($id);
		setlocale(LC_MONETARY, 'es_CO');
		$valor=$producto->valor;
		$var=BASE_URL.'producto/detalle/'.$producto->id.'';
		
		echo '
		<div class="container">
        <div class="row">
            <div  class="col-sm"><img id="imgProductM" src="'.BASE_URL.'public/img_Productos/'.$producto->foto.'" /></div>
            <div class="col-sm">
                <small><strong>Tecnologia</strong></small>
                <h3>'.$producto->nombre.'<p><label class="price">'.number_format($valor).'</label></p></h3>
                <label class="descripcion-corta">'.$producto->descripcioncorta.'</label>
                <p><a class="a-detalle-producto" href='.$var.'>Más <span class="oi oi-chevron-right"></span></a></p>
            </div>

        </div>
    </div>
    <div class="product-descripcion-larga">
      <div id="description-prod"><p>'.$producto->detalle.'</p></div>
        
    </div>
		';
	}
}

?>