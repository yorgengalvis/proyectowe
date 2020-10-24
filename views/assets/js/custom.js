$(document).ready(function() {
    $('#tablaProductos').DataTable();
});

function modProducto(id) {
    $("#producto-content").load('consultaModal/' + id, function() {
        $("#productoViewModal").modal({
            show: true
        });
    });
}

function moProducto(id) {
    $("#producto-content").load('../consultaModal/' + id, function() {
        $("#productoViewModal").modal({
            show: true
        });
    });
}

function modalProducto(id) {
    $("#producto-content").load('producto/consultaModal/' + id, function() {
        $("#productoViewModal").modal({
            show: true
        });
    });
}