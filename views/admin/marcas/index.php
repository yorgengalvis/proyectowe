<div class="container-fluid">
	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?=BASE_URL?>admin/index">Inicio</a></li>
    <li class="breadcrumb-item active"><a href="<?=BASE_URL?>admin/marcas">Marcas</a></li>
  </ol>
</nav>
</div>

<div class="container-fluid">
	<div class="titulo-venta">
		Listado de Marcas
	</div>
	<div class="table-responsive">
        <div class="nuevo-producto">
            <a href="add_categoria"><span class="btn badge badge-success"><span class="oi oi-plus"></span> Nueva Marca</span></a>
        </div>
		<table id="tablaProductos" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        	<?php
        	foreach ($marcas as $marca) {
				echo '<tr>
                <td>'.$marca->id.'</td>
                <td>'.$marca->nombre.'</td>
                <td style="width:50px;"><p style="text-align:justify;">'.$marca->descripcion.'</p></td>';
                echo '
                <td><a href="edit_marca/'.$marca->id.'"><span class="btn badge badge-warning"><span class="oi oi-pencil"></span> Editar</span></a> <a  onClick="eliminarM('.$marca->id.')"><span class="btn badge badge-danger"><span class="oi oi-x"></span>  Eliminar</span></a></td>
            </tr>';
			}
        	?>
        </tbody>
    </table>
	</div>
</div>

