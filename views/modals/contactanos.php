<!--Contactanos-->
<div class="modal fade" id="modalContactanos" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalContactanosTitle">Contactanos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
            <form method="POST" action="inicio/enviarCorreo">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Digite su nombre" required>
                </div>
                <div class="form-group">
    <label for="email">Correo Electronico:</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
  </div>
            <div class="form-group">
    <label for="contenido">Contenido:</label>
    <textarea class="form-control"  name="asunto" rows="3" required></textarea>
  </div>
  <button type="submit" class="btn btn-secondary btn-sm">Enviar</button>
</form>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Contactanos-->