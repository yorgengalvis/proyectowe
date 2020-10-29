<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index">Inicio</a></li>
            <li class="breadcrumb-item active"><a href="configuracion">Configuracion</a></li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="oi oi-cog"></span> <span class="oi oi-badge"></span> Configuración de empresa
                    </button>
                </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                
                <form action="<?=BASE_URL?>empresa/editar" method="POST">
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label class="control-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Digite Nombre" value="<?=$empresa[0]->nombre?>" disabled>
                    </div>

                        <div class="col-md-4 mb-3">
                        <label class="control-label">Email de Contacto: </label>
                        <input type="text" class="form-control" id="email-contacto" name="email-contacto" placeholder="Digite Email de Contacto" value="<?=$empresa[0]->emailcontacto?>">                        
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="control-label">Direccion:</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Digite Direccion" value="<?=$empresa[0]->direccion?>">
                    </div>

                <div class="col-md-4 mb-3">
                    <label class="control-label">Telefono de Contacto:</label>
                    <input type="text" class="form-control" id="telefonocontacto" name="telefonocontacto" placeholder="Digite Telefono de Contacto" value="<?=$empresa[0]->telefonocontacto?>">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="control-label">Facebook ID:</label>
                    <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Digite Facebook" value="<?=$empresa[0]->facebook?>">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="control-label">Twiter User:</label>
                    <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Digite Twiter" value="<?=$empresa[0]->twitter?>">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="control-label">Instagram User: </label>
                    <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Digite Instagram" value="<?=$empresa[0]->instagram?>">
                </div>
                <div class="col-md-8 mb-3">
                        <label class="control-label">Quienes Somos:</label>
                        <textarea class="form-control" rows="3" id="quienessomos" name="quienessomos"
                            placeholder="Digite Descricion"><?=$empresa[0]->quienessomos?></textarea>
                    </div>          
                </div>
                <div class="form-group">
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <span class="oi oi-cog"></span> Configuración Sliders
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="row">
                       <div class="col-md-8">
                        <label class="control-label">Selecciona el slider a configurar</label>
                        <select class="form-control" name="slider-option" id="slider-option">
                            <option value="0" selected>Seleccione..</option>
                            <option value="1">Slider 1</option>
                            <option value="2">Slider 2</option>
                            <option value="3">Slider 3</option>
                        </select>
                    </div>
                    </div>
                    <br>
                    <br>
                    <div id="contenido-slider"></div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <span class="oi oi-info"></span> Acerca de
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body text-justify">
                    El sistema de gestion de servicios/productos fue desarrollado por estudiantes de 
to semestre de Ingenieria de Sistemas de la <a href="https://ww2.ufps.edu.co/">UFPS  Cúcuta</a> para la Materia Programación WEB               </div>
    <div class="row">
        <div class="col-sm">Yorgen Galvis</div>
        <div class="col-sm">Andrey Rivera</div>
        <div class="col-sm">Camilo Galvan</div>
    </div>
            </div>
        </div>
        <br>
    </div>
</div>