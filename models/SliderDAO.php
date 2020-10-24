<?php
require_once 'entity/Slider.php';
class SliderDAO
{
	function __construct(){}

	public function crear($arraySlider){
	Slider::create($arraySlider);
	}

	public function editar($arraySlider){
	$slider=Slider::get($arraySlider->id);
	$slider->foto=$arraySlider->foto;
	$slider->titulo=$arraySlider->titulo;
	$slider->descripcion=$arraySlider->descripcion;
	$slider->save();
	}

	public function eliminar($id){
		Slider::destroy($id);
	}

	public function find($opcion,$valor){
		$slider = Slider::where($opcion,$valor)->get();
		return $slider;
	}

	public function findAll(){
		return Slider::get();
	}

	public function findSix(){
		return Slider::limit(6)->get();
	}
}

?>