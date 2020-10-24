$(document).ready(function() {
    $('#tablaProductos').DataTable();
});

function modProducto(id) {
    $("#producto-content").load('consultaModal/' + id + '/2', function() {
        $("#productoViewModal").modal({
            show: true
        });
    });
}

function modalProducto(id) {
    $("#producto-content").load('producto/consultaModal/' + id + '/1', function() {
        $("#productoViewModal").modal({
            show: true
        });
    });
}