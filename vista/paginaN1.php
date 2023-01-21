<?php
require_once("layout/header.php");
?>
<div class="contenedor-menu row">

  <div class="contenedor-nivel col-md-3 col-sm-12">
    <h1>Niveles</h1>
    <div class="row">
      <a href="#" class="btn btn-outline-white btn-nivel" role="button">Nivel 1 - Valor de los Números</a>
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

  <div class="contenedor-ejercicios col-md-9 animate__animated animate__bounceInRight">
    <div class="contenedor-nivel row text-center">
        <div class="row">
            <h2>Ejercicio 1</h2>
            <h5>Llena las casillas según el valor que representa el número</h5>
        </div>
        <div class="row">
            <div class="col-md-3 align-self-center">
              <h2>245 = </h2>
            </div>
            <div class="col-md-9 cont-ejer-n1">
                <div class="row ejer-n1">
                    <div class="col-3 colum btn-fondo"><h6>CENTENA</h6></div>
                    <div id="btn-cen-ejer9" class="col-1 colum btn-fondo"></div>
                    <div id="btn-cen-ejer8" class="col-1 colum btn-fondo"></div>
                    <div id="btn-cen-ejer7" class="col-1 colum btn-fondo"></div>
                    <div id="btn-cen-ejer6" class="col-1 colum btn-fondo"></div>
                    <div id="btn-cen-ejer5" class="col-1 colum btn-fondo"></div>
                    <div id="btn-cen-ejer4" class="col-1 colum btn-fondo"></div>
                    <div id="btn-cen-ejer3" class="col-1 colum btn-fondo"></div>
                    <div id="btn-cen-ejer2" class="col-1 colum btn-fondo"></div>
                    <div id="btn-cen-ejer1" class="col-1 colum btn-fondo"></div>
                </div>
                <div class="row ejer-n1">
                    <div class="col-3 colum btn-fondo"><h6>DECENA</h6></div>
                    <div id="btn-dec-ejer9" class="col-1 colum btn-fondo"></div>
                    <div id="btn-dec-ejer8" class="col-1 colum btn-fondo"></div>
                    <div id="btn-dec-ejer7" class="col-1 colum btn-fondo"></div>
                    <div id="btn-dec-ejer6" class="col-1 colum btn-fondo"></div>
                    <div id="btn-dec-ejer5" class="col-1 colum btn-fondo"></div>
                    <div id="btn-dec-ejer4" class="col-1 colum btn-fondo"></div>
                    <div id="btn-dec-ejer3" class="col-1 colum btn-fondo"></div>
                    <div id="btn-dec-ejer2" class="col-1 colum btn-fondo"></div>
                    <div id="btn-dec-ejer1" class="col-1 colum btn-fondo"></div>
                </div>
                <div class="row ejer-n1">
                    <div class="col-3 colum btn-fondo"><h6>UNIDAD</h6></div>
                    <div id="btn-uni-ejer9" class="col-1 colum btn-fondo"></div>
                    <div id="btn-uni-ejer8" class="col-1 colum btn-fondo"></div>
                    <div id="btn-uni-ejer7" class="col-1 colum btn-fondo"></div>
                    <div id="btn-uni-ejer6" class="col-1 colum btn-fondo"></div>
                    <div id="btn-uni-ejer5" class="col-1 colum btn-fondo"></div>
                    <div id="btn-uni-ejer4" class="col-1 colum btn-fondo"></div>
                    <div id="btn-uni-ejer3" class="col-1 colum btn-fondo"></div>
                    <div id="btn-uni-ejer2" class="col-1 colum btn-fondo"></div>
                    <div id="btn-uni-ejer1" class="col-1 colum btn-fondo"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-md-center text-center contenedor-btn-aumentar">
      <div class="col-3">
        <h2>Centena</h2>
      </div>
      <div class="col-3">
        <h2>Decena</h2>
      </div>
      <div class="col-3">
        <h2>Unidad</h2>
      </div>
    </div>
    <div class="row justify-content-md-center text-center">
      <div class="col-3 bt-contenedor-pintar">
        <button id="btn-centena-mas" type="button" class="btn btn-success btn-pintar">+</button>
        <button id="btn-centena-menos" type="button" class="btn btn-dark btn-pintar">-</button>
      </div>
      <div class="col-3 bt-contenedor-pintar">
        <button id="btn-decena-mas" type="button" class="btn btn-success btn-pintar">+</button>
        <button id="btn-decena-menos" type="button" class="btn btn-dark btn-pintar">-</button>
      </div>
      <div class="col-3 bt-contenedor-pintar">
        <button id="btn-unidad-mas" type="button" class="btn btn-success btn-pintar">+</button>
        <button id="btn-unidad-menos" type="button" class="btn btn-dark btn-pintar">-</button>
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