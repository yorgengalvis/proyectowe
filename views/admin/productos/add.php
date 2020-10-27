<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index">Inicio</a></li>
            <li class="breadcrumb-item "><a href="<?=BASE_URL?>admin/productos">Productos</a></li>
            <li class="breadcrumb-item active"><a href='<?=BASE_URL?>admin/add_product?>'>Agregar</a></li>
        </ol>
    </nav>
</div>

<div class="container-fluid">
    <div class="card">
        <div class="card card-header title-p">
            <center>Nuevo Producto</center>
        </div>
        <div class="card card-body">
            <form action="<?=BASE_URL?>producto/create" method="POST"  enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-md-4 mb-2">
                        <label class="control-label">Referencia: </label>
                        <input type="text" class="form-control" id="referencia" name="referencia"
                            placeholder="Digite Referencia" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="control-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Digite Nombre" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="control-label">Descricion Corta: </label>
                        <input type="text" class="form-control" id="descripcioncorta" name="descripcioncorta"
                            placeholder="Digite Descricion Corta" required>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label class="control-label">Detalle: </label>
                        <textarea class="form-control" rows="3" id="detalle" name="detalle"
                            placeholder="Digite Detalle" required></textarea>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="control-label">Valor: </label>
                        <input type="number" class="form-control" id="valor" name="valor" placeholder="Digite Valor" required>

                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="control-label">Palabras Claves: </label>
                        <input type="text" class="form-control" id="palabrasclave" name="palabrasclave"
                            placeholder="Digite Palabras Claves" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="control-label">Foto: </label>
                        <br>
                        <input name="fichero_foto" type="file" / required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="control-label">Estado:</label>
                        <select class="form-control" name="estado" id="state_id" required>
                            <option value="d">Disponible</option>
                            <option value="n">Agotado</option>

                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="control-label">Categoria: </label>
                        <select class="form-control" name="categoria" id="state_id">
                            <option value="0">Seleccione..</option>
                            <?php
                            foreach ($categorias as $categoria) {
                                ?>
                                <option value="<?=$categoria->id?>"><?=$categoria->descripcion?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="control-label">Marca: </label>
                        <select class="form-control" name="marca" id="state_id">
                            <option value="0">Seleccione..</option>
                            <?php
                            foreach ($marcas as $marca) {
                                ?>
                                <option value="<?=$marca->id?>"><?=$marca->nombre?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    </div>
                
                 <div class="form-group">
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Guardar</button>
                 </div>
            

            </form>
        </div>
    </div>
</div>