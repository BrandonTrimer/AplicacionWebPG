<?php
require_once("layout/header.php");
require_once("layout/niveles.php");
?>
<!---
  <div class="contenedor-ejercicios contenedor-ejercicios-minH col-md-9 animate__animated animate__bounceInRight">
    <div class="contenedor-nivel row text-center">
        <div class="row justify-content-md-center text-center">
            <h2 class="animate__animated animate__zoomInDown">¡¡¡ VICTORIA !!!</h2>
            <h5 class="animate__animated animate__zoomInDown">Tu robot es mas fuerte que el Meteorito, salvaste la ciudad !!!</h5>
        </div>
        <div class="row">
          <div class="col-3 animate__animated animate__bounceInRight">
            <img src="vista/img/imgRobot2t.png" alt="" class="img-hist img-ganador img-fuerte">
            <h5>Puntos = 6</h5>
          </div>
          <div class="col-3 animate__animated animate__bounceInRight">
            <img src="vista/img/imgMeteorot.png" alt="" class="img-hist img-perdedor img-debil">
            <h5>Puntos = 4</h5>
          </div>
          <div class="col-6 animate__animated animate__bounceInRight">
            <img src="vista/img/imgCiudad.jpg" alt="" class="img-hist img-ciudadRes img-ciudadVic">
          </div>
        </div>
    </div>
  </div>-->

  <div class="contenedor-ejercicios contenedor-ejercicios-minH col-md-9 animate__animated animate__bounceInRight">
    <div class="contenedor-nivel row text-center">
        <div class="row justify-content-md-center text-center">
            <h2 class="animate__animated animate__fadeInDown">PERDISTE...</h2>
            <h5 class="animate__animated animate__fadeInDown">El Meteorito es mas fuerte que tu robot, la ciudad fue destruida...</h5>
        </div>
        <div class="row">
          <div class="col-3 animate__animated animate__fadeInRight">
            <img src="vista/img/imgMeteorot.png" alt="" class="img-hist img-ganador img-fuerte">
            <h5>Puntos = 4</h5>
          </div>
          <div class="col-3 animate__animated animate__fadeInRight">
            <img src="vista/img/imgRobot1t.png" alt="" class="img-hist img-perdedor img-debil">
            <h5>Puntos = 3</h5>
          </div>
          <div class="col-6 animate__animated animate__fadeInRight">
            <img src="vista/img/imgCiudadRota.jpg" alt="" class="img-hist img-ciudadRes img-ciudadPer">
          </div>
        </div>
    </div>
  </div>
  
</div>

<?php
require_once("layout/footer.php");