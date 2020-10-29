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

	public function consultaSlider($id){
		$slider=Slider::find($id);
		echo '
			<form action="../slider/edit/'.$id.'" method="POST">
			<div class="row">
                    <div class="col-sm"><div class="form-row">
                    <div class="col-md-10 mb-3">
                        <label class="control-label">Foto de Slider:</label>
                        <br>
                        <input type="file" multiple="multiple" id="photo" />
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-cloud fa-stack-2x bottom pulsating"></i>
                            <i class="fa fa-circle fa-stack-1x top medium"></i>
                            <i class="fa fa-arrow-circle-up fa-stack-1x top"></i>
                        </span>
                    </div>

                    <div class="col-md-10 mb-3">
                        <label class="control-label">Titulo:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite Titulo de Slider" value="'.$slider->titulo.'">
                    </div>



                    <div class="col-md-10 mb-3">
                        <label class="control-label">Descripcion: </label>
                        <textarea class="form-control" rows="3" name="descripcion"
                            placeholder="Digite Descricion">'.$slider->descripcion.'</textarea>
                    </div>
                    </div></div>
                    <div class="col-sm">
                        <br>
                        <br>
                        <br>
                        Vista previa imagen:
                        <img src="'.BASE_URL.'views/assets/img/'.$slider->foto.'" width="450px">
                    </div>
                </div>

<div class="form-group">
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Guardar</button>
                 </div>
                 </div>
			</form>
		';
	}
}

?>