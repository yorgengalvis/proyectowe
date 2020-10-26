<div class="container-fluid">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?=BASE_URL?>admin/index">Inicio</a></li>
			<li class="breadcrumb-item "><a href="<?=BASE_URL?>admin/productos">Productos</a></li>
			<li class="breadcrumb-item active"><a href='<?=BASE_URL?>admin/edit_product/<?=$producto[0]->id?>'>Editar</a></li>
		</ol>
	</nav>
</div>

<div class="container-fluid">
	<div class="card">
		<div  class="card card-header title-p">
			<center>Modificacion de producto</center>
		</div>
		<div class="card card-body">
			<form action="<?=BASE_URL?>producto/edit/" method="POST">

			<div class="form-row">
                    <div class="col-md-4 mb-2">
                        <label class="control-label">Referencia: </label>
                        <input type="text" class="form-control" id="referencia" name="referencia"
                            placeholder="Digite Referencia">
                    </div>





                    <div class="col-md-4 mb-3">
                        <label class="control-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Digite Nombre">
                    </div>





                    <div class="col-md-4 mb-3">
                        <label class="control-label">Descricion Corta: </label>
                        <input type="text" class="form-control" id="descripcioncorta" name="descripcioncorta"
                            placeholder="Digite Descricion Corta">
                    </div>



                    <div class="col-md-4 mb-3">
                        <label class="control-label">Detalle: </label>
                        <textarea class="form-control" rows="3" id="detalle" name="detalle"
                            placeholder="Digite Detalle"></textarea>
                    </div>




                    <div class="col-md-4 mb-3">
                        <label class="control-label">Valor: </label>
                        <input type="text" class="form-control" id="valor" name="valor" placeholder="Digite Valor">

                    </div>




                    <div class="col-md-4 mb-3">
                        <label class="control-label">Palabras Claves: </label>
                        <input type="text" class="form-control" id="palabrasclave" name="palabrasclave"
                            placeholder="Digite Palabras Claves">
                    </div>



                    <div class="col-md-4 mb-3">
                        <label class="control-label">Foto: </label>
                        <input type="file" multiple="multiple" id="photo" />
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-cloud fa-stack-2x bottom pulsating"></i>
                            <i class="fa fa-circle fa-stack-1x top medium"></i>
                            <i class="fa fa-arrow-circle-up fa-stack-1x top"></i>
                        </span>
                    </div>



                    <div class="col-md-4 mb-3">
                        <label class="control-label">Estado:</label>
                        <select class="form-control" id="state_id">
                            <option value="disponible">Disponible</option>
                            <option value="agotado">Agotado</option>

                        </select>
                    </div>


                    <div class="col-md-4 mb-3">
                        <label class="control-label">Categoria: </label>
                        <input type="text" class="form-control" id="categoria" name="categoria"
                            placeholder="Digite Categoria">
                    </div>



                    <div class="col-md-4 mb-3">
                        <label class="control-label">Marca: </label>
                        <input type="text" class="form-control" id="marca" name="marca" placeholder="Digite Marca">
                    </div>
                </div>



                <div class="form-group">
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
				</div>

			</form>
		</div>
	</div>
</div>