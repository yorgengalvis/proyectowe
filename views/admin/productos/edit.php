<div class="container-fluid">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?=BASE_URL?>admin/index">Inicio</a></li>
			<li class="breadcrumb-item "><a href="<?=BASE_URL?>admin/productos">Productos</a></li>
			<li class="breadcrumb-item active"><a href='<?=BASE_URL?>admin/edit_product/<?=$producto[0]->id?>'>Editar</a></li>
		</ol>
	</nav>
</div>

<div class="container-fluid">
	<div class="card">
		<div  class="card card-header title-p">
			<center>Modificacion de producto</center>
		</div>
		<div class="card card-body">
			<form action="<?=BASE_URL?>producto/edit/<?=$producto[0]->id?>" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-md-4 mb-2">
                        <label class="control-label">Referencia: </label>
                        <input type="text" class="form-control" id="referencia" name="referencia"
                            placeholder="Digite Referencia" value="<?=$producto[0]->referencia?>" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="control-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?=$producto[0]->nombre?>" required> </input>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="control-label">Descricion Corta: </label>
                        <input type="text" class="form-control" id="descripcioncorta" name="descripcioncorta"
                            placeholder="Digite Descricion Corta" value="<?=$producto[0]->descripcioncorta?>" required>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label class="control-label">Detalle: </label>
                        <textarea class="form-control" rows="3" id="detalle" name="detalle"
                            placeholder="Digite Detalle" required><?=$producto[0]->detalle?></textarea>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="control-label">Valor: </label>
                        <input type="number" class="form-control" id="valor" name="valor" placeholder="Digite Valor" value="<?=$producto[0]->valor?>" required>

                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="control-label">Palabras Claves: </label>
                        <input type="text" class="form-control" id="palabrasclave" name="palabrasclave"
                            placeholder="Digite Palabras Claves" value="<?=$producto[0]->palabrasclave?>"required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="control-label">Foto: </label>
                        <br>
                        <input name="fichero_foto" type="file">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="control-label">Estado:</label>
                        <select class="form-control" name="estado" id="state_id" required>
                           <?php if($producto[0]->estado=='d'){
                            echo '<option value="d" selected>Disponible</option>
                            <option value="n">Agotado</option>';
                        }else{
                        echo '<option value="d">Disponible</option>
                            <option value="n" selected>Agotado</option>';
                    }?>

                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="control-label">Categoria: </label>
                        <select class="form-control" name="categoria" id="state_id">
                            <?php
                            foreach ($categorias as $categoria) {
                                if($categoria->id!=$producto[0]->categoria_id){
                                ?>
                                <option value="<?=$categoria->id?>"><?=$categoria->descripcion?></option>
                                <?php
                            }else{
                                ?>
                                <option value="<?=$categoria->id?>" selected><?=$categoria->descripcion?></option>
                                <?php
                            }}
                            ?>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="control-label">Marca: </label>
                        <select class="form-control" name="marca" id="state_id">
                            <?php
                            foreach ($marcas as $marca) {
                                if($marca->id!=$producto[0]->marca_id){
                                ?>
                                <option value="<?=$marca->id?>"><?=$marca->nombre?></option>
                                <?php
                            }else{
                                ?>
                                 <option value="<?=$marca->id?>" selected><?=$marca->nombre?></option>
                                 <?php
                            }}
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