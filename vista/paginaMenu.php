<?php
if (!empty($_SESSION['idEst'])) {
  require_once("layout/headerUser.php");
}else {
  require_once("layout/header.php");
}


?>

<div class="contenedor-menu text-center">

    <h1 class="animate__animated animate__bounceInDown txttitulolevel">Niveles</h1>
    <div class="contenedor-btn animate__animated animate__bounceInDown btnNivel1">
      <a href="paginaN1" class="btn btn-outline-white btn-nivel" role="button">Nivel 1  <br>Valor de los Números</a>
    </div>
    <div class="contenedor-btn animate__animated animate__bounceInDown btnNivel2">
      <a href="paginaN2" class="btn btn-outline-white btn-nivel" role="button">Nivel 2  <br>Suma</a>
    </div>
    <div class="contenedor-btn animate__animated animate__bounceInDown btnNivel3">
      <a href="paginaN3" class="btn btn-outline-white btn-nivel" role="button">Nivel 3  <br>Resta</a>
    </div>
    <div class="contenedor-btn animate__animated animate__bounceInDown btnNivel4">
      <a href="paginaN4" class="btn btn-outline-white btn-nivel" role="button">Nivel 4  <br>Multiplicacion</a>
    </div>
    <div class="contenedor-btn animate__animated animate__bounceInDown btnNivel5">
      <a href="paginaN5" class="btn btn-outline-white btn-nivel" role="button">Nivel 5  <br>Division</a>
    </div>
    <div class="contenedor-btn animate__animated animate__bounceInDown btnNivel6">
      <a href="paginaHistoria" class="btn btn-outline-white btn-nivel" role="button">Historia y <br>Desafios</a>
    </div>
  
</div>
<?php
require_once("layout/footer.php");