<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="vista/css/estilos.css">
</head>
<body>

<nav class="navbar navbar-expand-lg justify-content-center">
  <a class="navbar-brand btnInicio" href="index">Inicio</a>
  <a class="navbar-brand" href="paginaMenu">Menu</a>
  <a class="navbar-brand"data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
    <ion-icon name="person-outline"></ion-icon> Perfil
  </a>
</nav>

 <!----------------------- Offvanvas perfil de usuario -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Perfil de Usuario</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="img-content text-center">
        <img src="vista/img/iconoUser.webp" class="imgUser" alt="">
        <h4>Eduardo</h4>
        <h4>Espinosa Castillo</h6>
    </div><hr>
    <button class="btn btn-primary btn-crearG" type="submit">Crear Grupo</button>
    <h5>Grupos Creados</h5>
    <div class="groups-content">
        <div class="group text-center border">
            <div class="group-title">
                <h5>Los adolecentes mas perrones de la galaxia</h5>
            </div>
            <div class="group-btn">
                <button class="btn btn-outline-success" type="submit">Ver</button>
                <button class="btn btn-outline-primary" type="submit">Editar</button>
                <button class="btn btn-outline-danger" type="submit">Eliminar</button>
            </div>
        </div>
    </div>
  </div>
</div>


