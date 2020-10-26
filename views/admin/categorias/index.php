<div class="container-fluid">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index">Inicio</a></li>
			<li class="breadcrumb-item active"><a href="categorias">Categorias</a></li>
		</ol>
	</nav>
</div>

<div class="container">
	<div class="titulo-venta">
		Listado de Categorias
	</div>
	<div class="table-responsive">
        <div class="nuevo-producto">
            <a href="add_categoria"><span class="btn badge badge-success"><span class="oi oi-plus"></span> Nueva Categoria</span></a>
        </div>
		<table id="tablaProductos" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>Descripcion</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        	<?php
        	foreach ($categorias as $categoria) {
				echo '<tr>
                <td>'.$categoria->id.'</td>
                <td>'.$categoria->descripcion.'</td><td>';
                switch ($categoria->estado) {
                	case 'n': echo '<span class="badge badge-danger">Inactiva</span>';
                		# code...
                		break;
                	case 's': echo '<span class="badge badge-success">Activa</span>';
                	break;
                }
                echo '</td>
                <td><a href="edit_categoria/'.$categoria->id.'"><span class="btn badge badge-warning"><span class="oi oi-pencil"></span> Editar</span></a> <a  onClick="eliminarC('.$categoria->id.')"><span class="btn badge badge-danger"><span class="oi oi-x"></span>  Eliminar</span></a></td>
            </tr>';
			}
        	?>
        </tbody>
    </table>
	</div>
</div>