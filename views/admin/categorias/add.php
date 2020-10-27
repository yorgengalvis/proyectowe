<div class="container-fluid">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index">Inicio</a></li>
			<li class="breadcrumb-item "><a href="categorias">Categorias</a></li>
			<li class="breadcrumb-item active"><a href="marcas">Agregar</a></li>
		</ol>
	</nav>
</div>
<div class="container-fluid">
	<div class="card">
		<div  class="card card-header title-p">
			<center>Nueva Categoria</center>
		</div>
		<div class="card card-body">
			<form action="<?=BASE_URL?>categoria/create/" method="POST">
			<div class="form-row">
                

                    <div class="col-md-10 mb-3">
                        <label class="control-label">Descripcion: </label>
                        <textarea class="form-control" rows="3" name="descripcion"
                            placeholder="Digite Descricion"></textarea>
                    </div>

					<div class="col-md-10 mb-3">
                        <label class="control-label">Estado:</label>
                        <select class="form-control" name="estado">
                        	<option value="s">Disponible</option>
                        	<option value="n">Inactivo</option>
                        </select>
                    </div>

					</div>

                 <div class="form-group">
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Guardar</button>
                 </div>
			</form>
		</div>
	</div>
</div>