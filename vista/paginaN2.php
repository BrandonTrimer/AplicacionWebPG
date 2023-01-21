<?php
require_once("layout/header.php");
?>
<div class="contenedor-menu row">

  <div class="contenedor-nivel col-md-3 col-sm-12">
    <h1>Niveles</h1>
    <div class="row">
      <a href="paginaN1" class="btn btn-outline-white btn-nivel" role="button">Nivel 1 - Valor de los Números</a>
    </div>
    <div class="row">
      <a href="#" class="btn btn-outline-white btn-nivel" role="button">Nivel 2 - Suma</a>
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

  <div class="contenedor-ejercicios col-md-9 animate__animated animate__bounceInRight">
    <div class="contenedor-nivel row text-center">
        <div class="row">
            <h2>Ejercicio 2</h2>
            <h5>Realiza las siguientes sumas</h5>
        </div>
        <div class="row">
            <div class="col-md-9 cont-ejer-n1">
                <div class="row ejer-n1">
                    <div class="col-1"></div>
                    <div class="col-1 colum btn-fondo"><h6>5</h6></div>
                    <div class="col-1 colum btn-fondo"><h6>5</h6></div>
                </div>
                <div class="row ejer-n1">
                    <div class="col-1"><h6>+</h6></div>
                    <div class="col-1 colum btn-fondo"><h6>5</h6></div>
                    <div class="col-1 colum btn-fondo"><h6>5</h6></div>
                </div>
                <div class="row ejer-n1">
                    <div class="col-1 colum btn-fondo"></div>
                    <div class="col-1 colum btn-fondo"><h6>5</h6></div>
                    <div class="col-1 colum btn-fondo"><h6>5</h6></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-md-center text-center">
      <div class="col-3">
        <button type="button" class="btn btn-primary btn-confirmar">Revisar</button>
      </div>
    </div>
    <div class="row text-center justify-content-end">
      <div class="col-2">
        <a href="index" role="button">
          <img src="vista/img/flechaD.png" class="img-sig" alt="">
        </a>
      </div>
    </div>
  </div>
  
</div>

<?php
require_once("layout/footer.php");