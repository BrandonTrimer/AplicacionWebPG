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
  <a class="navbar-brand" href="paginaMenu">Salir</a>
  <a class="navbar-brand" href="paginaMenuEst">Menu</a>
  <a class="navbar-brand btnGrupo" data-bs-toggle="offcanvas" data-bs-target="#perfil">
    <ion-icon name="library-outline"></ion-icon> Perfil
  </a>

  <!--<div class="container-fluid">
    <a class="navbar-brand btnInicio" href="index">Inicio</a>
    <a class="navbar-brand" href="paginaMenu">Menu</a>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav justify-content-end"> </ul>
      <a class="navbar-brand btnGrupo" data-bs-toggle="modal" data-bs-target="#escogerOpcion">
        <ion-icon name="library-outline"></ion-icon> Grupo de Estudio
      </a>
    </div>
  </div>-->
</nav>

 <!----------------------- Offvanvas perfil de usuario -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="perfil" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Perfil de Usuario</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="img-content text-center">
        <img src="vista/img/mensaje.webp" class="imgUser" alt="">
        <h4><?php echo $_SESSION['nombreEst'] ?></h4>
        <h4><?php echo $_SESSION['apellidoEst'] ?></h6>
    </div><hr>
    <h5>Grupo: "<?php echo $_SESSION['nombreGru'] ?>"</h5>
    <div class="groupTotal">
      <?php
      
        ?>
        <div class="groups-content">
          <div class="group text-center border">
              <div class="group-title">
                <img src="vista/img/estrella.png" class="imgUser" alt="">
                <h5>Estrellas Reunidas</h5>
                <h4>"<?php echo $_SESSION['puntaje'] ?>"</h4>
                <h6>Juega mas niveles para tener mas estrellas</h6>
              </div>
          </div>
      </div>
        
    </div>
  </div>
</div>