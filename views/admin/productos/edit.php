<div class="container-fluid">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index">Inicio</a></li>
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
				dads
			</form>
		</div>
	</div>
</div>