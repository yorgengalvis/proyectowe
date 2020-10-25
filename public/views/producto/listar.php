<section>
    <div class="container-detalle">
        <div class="row">
            <div class="categorias-productos-p col-sm">
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
        <label id='labelURL'><?=BASE_URL?></label>
        <div class="container-fluid">
            <h3><strong>Listado de productos</strong></h3>
            <div class="input-group mb-3">
                <input id="productNameSearch"  name="productNameSearch" type="text" class="form-control" placeholder="Digite el nombre del producto" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" onClick="busquedaP();" type="button" id="button-addon2"><span class="oi oi-magnifying-glass"></span></button>
            </div>
        </div>
        <?php
                    $i=0;
                    echo '<div id="productoMostrar">';
                    echo '<div class="productsview container row ">';

                    foreach ($productos as $variable) {
                        $i++;
                        if($i<=6){
                        echo '
                        <div class="col-sm">
                            <a onClick="modProducto('.$variable->id.');" ">
                                <div class="card">
                                    <img alt="Card image cap" class="card-img-top" id="imgProducto" src="'.BASE_URL.'public/img_Productos/'.$variable->foto.'">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$variable->nombre.'
                                        </h5>
                                    </div>
                                </img>
                            </div>
                        </a>
                    </div>
                        ';
                        }
                        
                        
                    }
                    echo '</div></div>';
                    ?>
                   <?php
require_once 'views/modals/viewDetailsProduct.php';
?>
    </div>
</div>
</div>
</div>
</section>