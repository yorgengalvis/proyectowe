<section>
    <div class="container-detalle">
        <div class="row">
            <div class="col-sm">
                <h3><strong>Categorias</strong></h3>
                <ul class="list-group">
                  <a href=<?=BASE_URL.'producto/list'?>><li class="list-group-item d-flex justify-content-between align-items-center">Inicio</li></a>
                  <?php
                  foreach ($categorias as $categorii) {
                    echo '<a href="'.BASE_URL.'producto/categoria/'.$categorii->descripcion.'"><li class="list-group-item d-flex justify-content-between align-items-center">
                  '.$categorii->descripcion.'
                   <span class="badge badge-primary badge-pill">'.$modelProducto->getCount('categoria_id',$categorii->id).'</span>
               </li></a>';
                  }
                  ?>
        </ul>
    </div>
    <div class="col-sm-9">
      <h3><strong>Detalle del producto</strong></h3>
      <div class="modal-body">
        <div class="container">
            <div class="row">
                <div  class="col-sm"><img id="imgProductM" src="<?=BASE_URL?>public/img_Productos/<?=$producto->foto?>" /></div>
                <div class="col-sm">
                    <small><strong><?=$categoria->get($producto->categoria_id)->descripcion?></strong></small>
                    <h3><?=$producto->nombre?><p><label class="price">$<?=number_format($producto->valor)?></label></p></h3>
                    <label class="descripcion-corta"><?=$producto->descripcioncorta?></label>

                </div>

            </div>
        </div>
        <div class="product-descripcion-larga">
            <?=$producto->detalle?> </p>
        </div>
    </div>
</div>
</div>
</div>
</section>