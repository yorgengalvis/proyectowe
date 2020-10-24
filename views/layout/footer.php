<?php
require_once 'views/modals/contactanos.php';
?>

<!--footer-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <strong>
                    Información de contacto:
                </strong>
                <p>
                    <img height="30px" src="<?php echo BASE_URL;?>views/assets/img/email.png" width="30px"/>
                    <?php echo $empresas[0]->emailcontacto;?>
                </p>
                <img height="30px" src="<?php echo BASE_URL;?>views/assets/img/telefono.png" width="30px"/>
                <?php echo $empresas[0]->telefonocontacto;?>
            </div>
            <div class="col-sm-3">
                <strong>
                    Nuestras redes sociales
                </strong>
                <p>
                    <a href="<?php echo $empresas[0]->facebook;?>">
                        <img height="40px" src="<?php echo BASE_URL;?>views/assets/img/facebook.png" width="40px"/>
                    </a>
                    <a href="<?php echo $empresas[0]->instagram;?>">
                        <img height="40px" src="<?php echo BASE_URL;?>views/assets/img/instagram.png" width="46px"/>
                    </a>
                    <a href="<?php echo $empresas[0]->twitter;?>">
                        <img height="40px" src="<?php echo BASE_URL;?>views/assets/img/twitter.png" width="40px"/>
                    </a>
                </p>
                <p>
                    <button data-toggle="modal" data-target="#modalContactanos" class="btn btn-contactanos" type="button">
                        Contactanos
                    </button>
                </p>
            </div>
        </div>
    </div>
    <div class="containter" style="text-align:center;">
     &copy; 2020 Estudiantes 6to Semestre Ingenieria de Sistemas UFPS - Cúcuta
    </div>
</footer>
<!--Inclusión JS-->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script crossorigin="anonymous" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">
</script>
<script crossorigin="anonymous" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
</script>
<script crossorigin="anonymous" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="<?php echo BASE_URL;?>views/assets/js/custom.js">
</script>
</body>
</html>