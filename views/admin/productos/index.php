<div class="container-fluid">
	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index">Inicio</a></li>
    <li class="breadcrumb-item active"><a href="productos">Productos</a></li>
  </ol>
</nav>
</div>
<div class="container">
	<div class="titulo-venta">
		Listado de Productos
	</div>
	<div class="table-responsive">
        <div class="nuevo-producto">
            <a href="add_product"><span class="btn badge badge-success"><span class="oi oi-plus"></span> Nuevo Producto</span></a>
        </div>
		<table id="tablaProductos" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Referencia</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Valor</th>
                <th>Categoria</th>
                <th>Marca</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        	<?php
        	foreach ($productos as $producto) {
				echo '<tr>
                <td>'.$producto->referencia.'</td>
                <td><img src="'.BASE_URL.'public/img_Productos/'.$producto->foto.'" style="height: 25px;"></td>
                <td>'.$producto->nombre.'</td>
                <td>$'.number_format($producto->valor).'</td>
                <td>'.Categoria::find($producto->categoria_id)->descripcion.'</td>
                <td>'.Marca::find($producto->marca_id)->nombre.'</td>
                <td>';
                switch ($producto->estado) {
                	case 'n': echo '<span class="badge badge-danger">Agotado</span>';
                		# code...
                		break;
                	case 'd': echo '<span class="badge badge-success">Disponible</span>';
                	break;
                }
                echo '</td>
                <td><a href="edit_product/'.$producto->id.'"><span class="btn badge badge-warning"><span class="oi oi-pencil"></span> Editar</span></a> <a  href="'.BASE_URL.'producto/eliminar/'.$producto->id.'"><span class="btn badge badge-danger"><span class="oi oi-x"></span>  Eliminar</span></a></td>
            </tr>';
			}
        	?>
        </tbody>
    </table>
	</div>
</div>

