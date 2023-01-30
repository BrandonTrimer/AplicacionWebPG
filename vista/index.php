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

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index">Juega Mate</a>
  </div>
</nav>


<div class="row fondo justify-content-md-center text-center">
  <div class="col-md-6 col-md-4 animate__animated animate__bounceInLeft">
    <h2 class="texto-boton">Entra y practica las matematicas de forma divertida</h2>
    <div class="row">
      <div class="col-12">
        <a href="paginaMenu" class="btn btn-outline-white btn-circle" role="button">Jugar</a>
      </div>
    </div>
  </div>  
  <div class="col-md-6">
    <img src="vista/img/pizarra2.png" class="img animate__animated animate__bounceInDown" alt="">
  </div>
  
</div>
<?php
require_once("layout/footer.php");