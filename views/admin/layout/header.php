
<!DOCTYPE doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" rel="stylesheet">
  <link href="<?php echo BASE_URL?>views/assets/css/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>views/assets/open-ionic/font/css/open-iconic-bootstrap.css">
  <title>
    Dashboard | MovilServ
  </title>
</head>
<body>

<!--nav-->
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <a href="#" class="navbar-brand">
        <img src="<?php echo BASE_URL;?>views/assets/img/logo.png" height="28" alt="CoolBrand">
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="index" class="nav-item nav-link active">Inicio</a>
            <a href="productos" class="nav-item nav-link">Productos</a>
            <a href="categorias" class="nav-item nav-link">Categorias</a>
            <a href="marcas" class="nav-item nav-link">Marcas</a>
            <a href="empresa" class="nav-item nav-link">Empresa</a>
        </div>
        <div class="navbar-nav ml-auto">
            <a href="cerrar" class="nav-item nav-link"><span class="oi oi-power-standby"></span> Cerrar Sesion</a>
        </div>
    </div>
</nav>
<!--nav-->

<!--Informacion admin-->
<label class="info-admin-dashboard">Bienvenido, <?=$administrador->nombres?></label>
<!--Informacion admin-->