<section>
    <div class="container-detalle">
        <div class="row">
            <div class="col-sm">
                <h3><strong>Categorias</strong></h3>
                <ul class="list-group">
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
      <h3><strong><center>Error 404:  Producto inexistente</center></strong></h3>
      
</div>
</div>
</div>
</section>