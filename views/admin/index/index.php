<center><h3><b>Sliders de la pagina principal<b></h3></center>
<p>
<!--SLIDER-->
<div class="container">
<div class="carousel slide carousel-fade" data-ride="carousel" id="carousel1">
    <div class="carousel-inner">

        <?php
        $i=0;
        foreach ($sliders as $slider) {

            if($i>0){
                echo '<div class="carousel-item">
            <img alt="Los Angeles" src="'.BASE_URL.'views/assets/img/'.$slider->foto.'">
            <div class="carousel-caption">
                <h3>
                   <b>'.$slider->titulo.'</b>

            </h3>
                <p>
                  '.$slider->descripcion.'
                </p>
            </div>
        </img>
    </div>';
            }else{
echo '<div class="carousel-item active">
            <img alt="Los Angeles" src="'.BASE_URL.'views/assets/img/'.$slider->foto.'">
            <div class="carousel-caption">
                <h3>
                   <b>'.$slider->titulo.'</b>
            </h3>
                <p>
                  '.$slider->descripcion.'
                </p>
            </div>
        </img>
    </div>';
            }
            $i++;
           
        }

        ?>

</div>
<!--Controles NEXT y PREV-->
<a class="carousel-control-prev" data-slide="prev" href="#carousel1" role="button">
    <span aria-hidden="true" class="carousel-control-prev-icon">
    </span>
    <span class="sr-only">
        Previous
    </span>
</a>
<a class="carousel-control-next" data-slide="next" href="#carousel1" role="button">
    <span aria-hidden="true" class="carousel-control-next-icon">
    </span>
    <span class="sr-only">
        Next
    </span>
</a>
<!--Controles de indicadores-->
<ol class="carousel-indicators">
    <li class="active" data-slide-to="0" data-target="#carousel1">
    </li>
    <li data-slide-to="1" data-target="#carousel1">
    </li>
    <li data-slide-to="2" data-target="#carousel1">
    </li>
</ol>
</div>
</div>