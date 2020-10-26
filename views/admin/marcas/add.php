<div class="container-fluid">
	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index">Inicio</a></li>
    <li class="breadcrumb-item active"><a href="marcas">Marcas</a></li>
    <li class="breadcrumb-item active"><a href="marcas">Agregar</a></li>
  </ol>
</nav>
</div>

<div class="container-fluid">
	<div class="card">
		<div  class="card card-header title-p">
			<center>Nueva Marca</center>
		</div>
		<div class="card card-body">
			<form action="<?=BASE_URL?>producto/edit/" method="POST">
			<div class="form-row">
                    

                    <div class="col-md-10 mb-3">
                        <label class="control-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Digite Nombre">
                    </div>


                    <div class="col-md-10 mb-3">
                        <label class="control-label">Descricion: </label>
                        <textarea class="form-control" rows="3" id="descricion" name="descricion"
                            placeholder="Digite Descricion"></textarea>
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