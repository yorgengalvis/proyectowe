<!DOCTYPE doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" rel="stylesheet">
    <link href="views/assets/css/estilos.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="views/assets/open-ionic/font/css/open-iconic-bootstrap.min.css">
    <title>
        Mi primer proyectoWEB
    </title>
</head>
<body>
    <!--menu-->
    <nav class="navbar navbar-light bg-blue-ligth fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="inicio">
                <img alt="" loading="lazy" src="views/assets/img/logo.png" width="50%">
            </img>
                    
                <a href="admin/login"><span class="btn btn-primary">Inicia Sesion</span></a>
              
        </a>
        

    </div>
</nav>
<!--menu-->
<!--SLIDER-->
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
                <strong>
                   '.$slider->titulo.'
                </strong>
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
                <strong>
                   '.$slider->titulo.'
                </strong>
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