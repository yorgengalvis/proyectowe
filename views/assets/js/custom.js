$(document).ready(function() {
    $('#tablaProductos').DataTable();
    $('#labelURL').hide();
    tinymce.init({
        selector: 'textarea'
    });
    $("select[name=slider-option]").change(function() {
        if ($('select[name=slider-option]').val() != 0) {
            $('#contenido-slider').load('consultaSlider/' + $('select[name=slider-option]').val(), function() {});
        }
    });
});

function modProducto(id) {
    var link = $('#labelURL').text();
    $("#producto-content").load(link + 'producto/consultaModal/' + id, function() {
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
/*
Accion de busqueda al escribir
*/
function busquedaP() {
    var link = $('#labelURL').text();
    var name = $('#productNameSearch').val();
    $('#productoMostrar').empty();
    $('#productoMostrar').load(link + 'producto/busqueda/' + name, function() {});
}
/*
Fin de accion de busqueda
*/