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
				<div class="row">
					<div class="col-sm-2"><div class="form-group">
    <label for="referencia">Referencia</label>
    <input type="email" class="form-control" name="referencia" id="referencia" 
          placeholder="SD4-55" value="<?=$producto[0]->referencia?>">
  </div></div>
					<div class="col-sm-5"><div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" style="text-align: center;" class="form-control" name="nombre" id="nombre" 
            placeholder="Ingrese nombre" value="<?=$producto[0]->nombre?>">
  </div></div>
					<div class="col-sm-4"><div class="form-group">
    <label for="valor">Valor $</label>
    <input type="number" style="text-align: center;" class="form-control" name="valor" id="valor" 
           placeholder="<?=number_format($producto[0]->valor,2, ',', '.')?>">
  </div></div>
				</div>
				<div class="col-lg-10">
					<div class="row">
						<div class="col-sm">
						<label for="descripcioncorta">Descripcion corta</label>
						<input type="text" style="text-align: center;" class="form-control" name="descripcioncorta" id="descripcioncorta" placeholder="valor">
						
						</div>
						<div class="col-sm">
							<label for="descripcioncorta">Detalle</label>

						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>