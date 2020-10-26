<!--Contenido-->
  <div class="container">
    <div class="card card-header">
      Inicio de sesion
    </div>
    <div class="card  card-body">
      <form action="validate" method="POST">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><span class="oi oi-person"></span></span>
          </div>
          <input type="text" class="form-control" placeholder="Username" name="usuario" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><span class="oi oi-key"></span></span>
          </div>
          <input type="password" class="form-control" placeholder="Password" name="clave" aria-describedby="basic-addon1" required>
        </div>
        
        <button class="submit btn btn-login"><span class="oi oi-account-login"></span> Ingresar</button>
      </form>
    </div>
  </div>
  <!--Contenido-->