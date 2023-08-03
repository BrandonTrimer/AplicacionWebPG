<?php
session_start();
if (!empty($_SESSION['idEst'])) {
  require_once("layout/headerUser.php");
}else {
  require_once("layout/header.php");
}

$num1f1 = rand(1,5);
$num2f1 = rand(0,5);
$num1f2 = rand(1,5);
$num2f2 = rand(0,5);
?>

  <div class="contenedor-ejercicios col-md-11 animate__animated animate__bounceInRight">
    <div class="contenedor-nivel row text-center">
        <div class="row justify-content-md-center text-center">
            <h2>Ejercicio - Suma</h2>
            <h5>Realiza las siguiente suma</h5>
        </div>
        <div class="row">
          <div class="col-7">
            <div class="row ejer-n1 justify-content-md-center text-center contenedor-min">
              <div class="col-2"></div>
              <div class="col-2 colum btn-fondo"><h4><?php echo $num1f1 ?></h4></div>
              <div class="col-2 colum btn-fondo"><h4><?php echo $num2f1 ?></h4></div>
            </div>
            <div class="row ejer-n1 justify-content-md-center text-center contenedor-min">
              <div class="col-2"><h6 class="simb-mas">+</h6></div>
              <div class="col-2 colum btn-fondo"><h4><?php echo $num1f2 ?></h4></div>
              <div class="col-2 colum btn-fondo"><h4><?php echo $num2f2 ?></h4></div>
            </div>
            <div class="row ejer-n1 justify-content-md-center text-center contenedor-min">
              <div class="col-2"></div>
              <div class="col-2 colum fondo-verde"><h4 id="num-ejer1-res1"></h4></div>
              <div class="col-2 colum fondo-verde"><h4 id="num-ejer1-res2"></h4></div>
            </div>
            <div class="row justify-content-md-center text-center contenedor-min">
              <div class="col-2"></div>
              <div class="col-2">
                <div class="row justify-content-md-center text-center cont-btn-aum">
                  <button id="btn-ejer1-aum1" type="button" class="btn-aum-num">
                    <img src="vista/img/flechaNum.png" class="img-flecha-num ar" alt="">
                  </button>
                </div>
                <div class="row justify-content-md-center text-center cont-btn-dis">
                  <button id="btn-ejer1-dis1" type="button" class="btn-dis-num">
                    <img src="vista/img/flechaNum.png" class="img-flecha-num" alt="">
                  </button>
                </div>
              </div>
              <div class="col-2">
                <div class="row justify-content-md-center text-center cont-btn-aum">
                  <button id="btn-ejer1-aum2" type="button" class="btn-aum-num">
                    <img src="vista/img/flechaNum.png" class="img-flecha-num ar" alt="">
                  </button>
                </div>
                <div class="row justify-content-md-center text-center cont-btn-dis">
                  <button id="btn-ejer1-dis2" type="button" class="btn-dis-num">
                    <img src="vista/img/flechaNum.png" class="img-flecha-num" alt="">
                  </button>
                </div>
              </div>
            </div>
            <div class="row justify-content-md-center text-center">
              <div class="col-1">
                <button type="button" onclick="resultadoEjer1(<?php echo $num1f1.','.$num1f2.','.$num2f1.','.$num2f2?>)" class="btn btn-confirmar">Revisar</button>
              </div>
            </div>
          </div>
          <!--  imagen   -->

          <div class="col-3 ">
            <img src="vista/img/resolverSum.webp" class="imgEjer" alt="">
            <input type="hidden" name="dificultad" id="num-ejer2-res1">
            <input type="hidden" name="dificultad" id="num-ejer2-res2">
          </div>
        </div>
    </div>

    <div class="row justify-content-md-center text-center contenedor-invi">
      <div class="col-3">
        <button type="button" class="btn btn-primary btn-confirmar"></button>
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
        <img src="vista/img/imgAyudaN2.png" width="100%" alt="">
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
        <iframe width="1310" height="499" src="https://www.youtube.com/embed/4tZypzTi3sg" title="✅👉 Sumas sin llevar de 3 cifras" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
          <h5>Reuniste 2 estrella</h5>
          <h6>Estrellas Totales Reunidas: <?php echo $_SESSION['puntaje'] + 2 ?></h6>
        </div>
        <form action="aumentarPts" method="POST">
          <div class="modal-footer">
            <input type="hidden" name="dificultad" value="<?php echo 2;?>">
            <input type="hidden" name="pagina" value="<?php echo "paginaN2";?>">
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
          <a href="paginaN2" class="btn btn-primary">repetir</a>
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
<script src="vista/js/nivel2Ejercicios.js"></script>
<?php
require_once("layout/footer.php");