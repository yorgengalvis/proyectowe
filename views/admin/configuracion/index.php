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
                
            
                <div class="form-row">
                
                    <div class="col-md-4 mb-3">
                        <label class="control-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Digite Nombre" value="<?=$empresa[0]->nombre?>">
                    </div>

                        <div class="col-md-4 mb-3">
                        <label class="control-label">Email de Contacto: </label>
                        <input type="text" class="form-control" id="nombre" name="escriemailcontactocion" placeholder="Digite Email de Contacto" value="<?=$empresa[0]->emailcontacto?>">                        
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="control-label">Quienes Somos:</label>
                        <textarea class="form-control" rows="3" id="quienessomos" name="Digite Quienes Somos"
                            placeholder="Digite Descricion"><?=$empresa[0]->quienessomos?></textarea>
                    </div>


                   

                    <div class="col-md-4 mb-3">
                        <label class="control-label">Direccion:</label>
                        <input type="text" class="form-control" id="nombre" name="direccion" placeholder="Digite Direccion" value="<?=$empresa[0]->direccion?>">
                    </div>

                
                <div class="col-md-4 mb-3">
                    <label class="control-label">Telefono de Contacto:</label>
                    <input type="text" class="form-control" id="nombre" name="telefonocontacto" placeholder="Digite Telefono de Contacto" value="<?=$empresa[0]->telefonocontacto?>">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="control-label">Facebook:</label>
                    <input type="text" class="form-control" id="nombre" name="facebook" placeholder="Digite Facebook" value="<?=$empresa[0]->faceboook?>">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="control-label">Twiter:</label>
                    <input type="text" class="form-control" id="nombre" name="twiter" placeholder="Digite Twiter">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="control-label">Instagram:</label>
                    <input type="text" class="form-control" id="nombre" name="instagram" placeholder="Digite Instagram">
                </div>          
                </div>
                <div class="form-group">
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                
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
                <div class="form-row">
                    

                    <div class="col-md-10 mb-3">
                        <label class="control-label">Foto de Slider:</label>
                        <br>
                        <input type="file" multiple="multiple" id="photo" />
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-cloud fa-stack-2x bottom pulsating"></i>
                            <i class="fa fa-circle fa-stack-1x top medium"></i>
                            <i class="fa fa-arrow-circle-up fa-stack-1x top"></i>
                        </span>
                    </div>

                    <div class="col-md-10 mb-3">
                        <label class="control-label">Titulo:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite Titulo de Slider">
                    </div>



                    <div class="col-md-10 mb-3">
                        <label class="control-label">Descricion: </label>
                        <textarea class="form-control" rows="3" id="descricion" name="descricion"
                            placeholder="Digite Descricion"></textarea>
                    </div>
					</div>



                 <div class="form-group">
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Guardar</button>
                 </div>

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
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                </div>
            </div>
        </div>
    </div>
</div>