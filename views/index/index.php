<!--SLIDER-->
<section class="info-empresa">
    <div class="container-fluid">
        <div class="row">
            <div  class="col-sm">
                <h4>
                    <strong >
                        ¿Quienes Somos?
                    </strong>
                </h4>
                <label>
                   <?php echo $empresas[0]->quienessomos;?>
                </label>
                <div class="novProductos">
                    <h3>
                        <strong>
                            Novedades Productos
                        </strong>
                    </h3>
                    <?php
                    $i=0;
                    echo '<div class="productsview container row ">';
                    foreach ($productos as $variable) {
                        $i++;
                        if($i<=6){
                        echo '
                        <div class="col-sm">
                            <a onClick="modalProducto('.$variable->id.');" ">
                                <div class="card">
                                    <img alt="Card image cap" class="card-img-top" id="imgProducto" src="public/img_Productos/'.$variable->foto.'">
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
                    echo '</div>';
                    ?>
                </div>
<a href="producto/list" class="btn btngeneral btn-sm" type="button">
    Ver todos los productos
</a>
</div>

<?php
require_once 'views/modals/viewDetailsProduct.php';
?>

<div class="col-sm-3">
    <h4>
        <strong>
            Siguenos
        </strong>
    </h4>
    <iframe allow="encrypted-media" allowtransparency="true" frameborder="0" height="500" scrolling="no" src="https://www.facebook.com/plugins/page.php?href=<?php echo $empresas[0]->facebook;?>&tabs=timeline&width=250&height=700&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" style="border:none;overflow:hidden" width="250">
    </iframe>
</div>
</div>
</div>

</div>
</div>
</section>