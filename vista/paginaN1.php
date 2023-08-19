<?php
session_start();
if (!empty($_SESSION['idEst'])) {
  require_once("layout/headerUser.php");
}else {
  require_once("layout/header.php");
}
$numUniRam = rand(1,9);
$numDecRam = rand(1,9);
$numCenRam = rand(1,9);


?>

  <div class="contenedor-ejercicios col-md-11 animate__animated animate__bounceInRight">
    <div class="contenedor-nivel row text-center">
        <div class="row justify-content-md-center text-center">
          
            <h2>Ejercicio 1 - Valor de los números</h2>
            <h5>Llena las casillas según el valor que representa el número</h5>
        </div>
        <div class="row justify-content-md-center text-center">
            <div class="col-sm-3 align-self-center">
              <h2><?php echo ($numCenRam.$numDecRam.$numUniRam) ?> = </h2>
            </div>
            <div class="col-sm-7 cont-ejer-n1">
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
      <div class="col-md-3">
        <button type="button" onclick="RevisarEjerModal(<?php echo $numUniRam?>,<?php echo $numDecRam?>,<?php echo $numCenRam?>)" class="btn btn-confirmar">Revisar</button>
      </div>
    </div>
    <div class="row text-center justify-content-end">
      <div class="col-2">
        <a href="pagina2N1" role="button">
          <img src="vista/img/flechaD.png" class="img-sig" alt="">
        </a>
      </div>
    </div>

    <div class="row text-center justify-content-star">
      <div class="col-2">
        <div class="dropdown btn-ayuda">
          <a class="btn btn-secondary dropdown-toggle" role="button" data-bs-toggle="dropdown">
            Ayuda
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-img">Ver Imagen de ayuda</a></li>
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-video">Ver Video</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
</div>


<!----------------- CONTENIDO MODALS ---------------------->
<div class="modal fade" id="modal-img" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Imagen de ayuda</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="vista/img/imgAyudaN1.png" width="100%" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-video" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Video de ayuda</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ratio ratio-4x3">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/TkAhaG1EcTs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!----------------- CONTENIDO MODALS RESULTADOS---------------------->
<div class="modal fade" id="modal-bien" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <?php
    if (!empty($_SESSION['idEst'])) {
      ?>
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-2" id="exampleModalLabel">Muy Bien !!!</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <h4>¡¡¡ Respondiste Perfectamente !!!</h4>
          <h5>Reuniste 1 estrella</h5>
          <h6>Estrellas Totales Reunidas: <?php echo $_SESSION['puntaje'] + 1 ?></h6>
        </div>
        <form action="aumentarPts" method="POST">
          <div class="modal-footer">
            <input type="hidden" name="dificultad" value="<?php echo 1;?>">
            <input type="hidden" name="pagina" value="<?php echo "paginaN1";?>">
            <button type="submit" class="btn btn-primary">Genial</button>
          </div>
        </form>
      </div>
      <?php
    }else {
      ?>
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-2" id="exampleModalLabel">Muy Bien!!!</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h4>Respondiste perfectamente !!!</h4>
        </div>
        <div class="modal-footer">
          <a href="paginaN1" class="btn btn-primary">repetir</a>
        </div>
      </div>
      <?php
    }
    ?>
    
  </div>
</div>

<div class="modal fade" id="modal-mal" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-2" id="exampleModalLabel">Ups...</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>Te equivocaste con algo, intentalo de nuevo</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Volver a intentar</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="vista/js/nivel1Ejercicios.js"></script>
<?php
require_once("layout/footer.php");