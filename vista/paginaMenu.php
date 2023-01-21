<?php
require_once("layout/header.php");
?>
<div class="contenedor-menu row">

  <div class="contenedor-nivel col-md-3 animate__animated animate__bounceInLeft">
    <h1>Niveles</h1>
    <div class="row">
      <a href="paginaN1" class="btn btn-outline-white btn-nivel" role="button">Nivel 1 - Valor de los Numeros</a>
    </div>
    <div class="row">
      <a href="paginaN2" class="btn btn-outline-white btn-nivel" role="button">Nivel 2 - Suma</a>
    </div>
    <div class="row">
      <a href="#" class="btn btn-outline-white btn-nivel" role="button">Nivel 3 - Resta</a>
    </div>
    <div class="row">
      <a href="#" class="btn btn-outline-white btn-nivel" role="button">Nivel 4 - Multiplicacion</a>
    </div>
    <div class="row">
      <a href="index" class="btn btn-outline-white btn-nivel" role="button">Nivel 5 - Division</a>
    </div>
    <div class="row">
      <a href="index" class="btn btn-outline-white btn-nivel" role="button">Historia</a>
    </div>
  </div>

  <div class="contenedor-ejercicios col-md-9 animate__animated animate__bounceInDown">
    <div class="contenedor-presentacion position-relative top-50 start-0 translate-middle-y">
      <div class="texto-img">
        <h2>Selecciona un nivel para empezar</h2>
        <img src="vista/img/escoger.png" class="img2" alt="">
      </div>

      

    </div>
  </div>
  
</div>
<?php
require_once("layout/footer.php");