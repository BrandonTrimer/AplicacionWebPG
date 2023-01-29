<?php
require_once("layout/header.php");
require_once("layout/niveles.php");

$num1f1 = rand(5,9);
$num2f1 = rand(5,9);
$num1f2 = rand(1,5);
$num2f2 = rand(0,5);
$num1f1Ej2 = rand(5,9);
$num2f1Ej2 = rand(5,9);
$num1f2Ej2 = rand(1,5);
$num2f2Ej2 = rand(0,5);
?>

  <div class="contenedor-ejercicios col-md-9 animate__animated animate__bounceInRight">
    <div class="contenedor-nivel row text-center">
        <div class="row justify-content-md-center text-center">
            <h2>Ejercicio 3</h2>
            <h5>Realiza las siguientes restas</h5>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="row ejer-n1 justify-content-md-center text-center contenedor-min">
              <div class="col-2"></div>
              <div class="col-2 colum btn-fondo"><h4><?php echo $num1f1 ?></h6></div>
              <div class="col-2 colum btn-fondo"><h4><?php echo $num2f1 ?></h6></div>
            </div>
            <div class="row ejer-n1 justify-content-md-center text-center contenedor-min">
              <div class="col-2"><h6 class="simb-mas">-</h6></div>
              <div class="col-2 colum btn-fondo"><h4><?php echo $num1f2 ?></h6></div>
              <div class="col-2 colum btn-fondo"><h4><?php echo $num2f2 ?></h6></div>
            </div>
            <div class="row ejer-n1 justify-content-md-center text-center contenedor-min">
              <div class="col-2"></div>
              <div class="col-2 colum fondo-verde"><h4 id="num-ejer1-res1N3"></h4></div>
              <div class="col-2 colum fondo-verde"><h4 id="num-ejer1-res2N3"></h4></div>
            </div>
            <div class="row justify-content-md-center text-center contenedor-min">
              <div class="col-2"></div>
              <div class="col-2">
                <div class="row justify-content-md-center text-center">
                  <button id="btn-ejer1-aum1N3" type="button" class="btn-aum-num">
                    <img src="vista/img/flechaNum.png" class="img-flecha-num ar" alt="">
                  </button>
                </div>
                <div class="row justify-content-md-center text-center">
                  <button id="btn-ejer1-dis1N3" type="button" class="btn-dis-num">
                    <img src="vista/img/flechaNum.png" class="img-flecha-num" alt="">
                  </button>
                </div>
              </div>
              <div class="col-2">
                <div class="row justify-content-md-center text-center">
                  <button id="btn-ejer1-aum2N3" type="button" class="btn-aum-num">
                    <img src="vista/img/flechaNum.png" class="img-flecha-num ar" alt="">
                  </button>
                </div>
                <div class="row justify-content-md-center text-center">
                  <button id="btn-ejer1-dis2N3" type="button" class="btn-dis-num">
                    <img src="vista/img/flechaNum.png" class="img-flecha-num" alt="">
                  </button>
                </div>
              </div>
            </div>
            <div class="row justify-content-md-center text-center">
              <div class="col-1">
                <button type="button" onclick="resultadoEjer1Res(<?php echo $num1f1.','.$num1f2.','.$num2f1.','.$num2f2?>)" class="btn btn-confirmar">Revisar</button>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="row ejer-n1 justify-content-md-center text-center contenedor-min">
              <div class="col-2"></div>
              <div class="col-2 colum btn-fondo"><h4><?php echo $num1f1Ej2 ?></h4></div>
              <div class="col-2 colum btn-fondo"><h4><?php echo $num2f1Ej2 ?></h4></div>
            </div>
            <div class="row ejer-n1 justify-content-md-center text-center contenedor-min">
              <div class="col-2"><h6 class="simb-mas">-</h6></div>
              <div class="col-2 colum btn-fondo"><h4><?php echo $num1f2Ej2 ?></h4></div>
              <div class="col-2 colum btn-fondo"><h4><?php echo $num2f2Ej2 ?></h4></div>
            </div>
            <div class="row ejer-n1 justify-content-md-center text-center contenedor-min">
              <div class="col-2"></div>
              <div class="col-2 colum fondo-verde"><h4 id="num-ejer2-res1N3"></h4></div>
              <div class="col-2 colum fondo-verde"><h4 id="num-ejer2-res2N3"></h4></div>
            </div>
            <div class="row justify-content-md-center text-center contenedor-min">
              <div class="col-2"></div>
              <div class="col-2">
                <div class="row justify-content-md-center text-center">
                  <button id="btn-ejer2-aum1N3" type="button" class="btn-aum-num">
                    <img src="vista/img/flechaNum.png" class="img-flecha-num ar" alt="">
                  </button>
                </div>
                <div class="row justify-content-md-center text-center">
                  <button id="btn-ejer2-dis1N3" type="button" class="btn-dis-num">
                    <img src="vista/img/flechaNum.png" class="img-flecha-num" alt="">
                  </button>
                </div>
              </div>
              <div class="col-2">
                <div class="row justify-content-md-center text-center">
                  <button id="btn-ejer2-aum2N3" type="button" class="btn-aum-num">
                    <img src="vista/img/flechaNum.png" class="img-flecha-num ar" alt="">
                  </button>
                </div>
                <div class="row justify-content-md-center text-center">
                  <button id="btn-ejer2-dis2N3" type="button" class="btn-dis-num">
                    <img src="vista/img/flechaNum.png" class="img-flecha-num" alt="">
                  </button>
                </div>
              </div>
            </div>
            <div class="row justify-content-md-center text-center">
              <div class="col-1">
                <button type="button" onclick="resultadoEjer2Res(<?php echo $num1f1Ej2.','.$num1f2Ej2.','.$num2f1Ej2.','.$num2f2Ej2?>)" class="btn btn-confirmar">Revisar</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          
        </div>
    </div>

    <div class="row justify-content-md-center text-center contenedor-invi">
      <div class="col-3">
        <button type="button" class="btn btn-primary btn-confirmar"></button>
      </div>
    </div>
    <div class="row text-center justify-content-end">
      <div class="col-2">
        <a href="#" role="button">
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
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-img1">Ver Imagen de ayuda</a></li>
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-video">Ver Video</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
</div>

<!----------------- CONTENIDO MODALS ---------------------->
<div class="modal fade" id="modal-img1" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Imagen de ayuda</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="vista/img/img1AyudaN3.png" width="100%" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-img2">Siguiente</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-img2" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Imagen de ayuda</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="vista/img/img2AyudaN3.png" width="100%" alt="">
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
        <iframe width="1309" height="499" src="https://www.youtube.com/embed/yYKRArjXnZM" title="La RESTA de DOS CIFRAS sin llevar✔👩‍🏫PRIMARIA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>      
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
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-2" id="exampleModalLabel">Muy Bien!!!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>Respondiste perfectamente !!!</h4>
      </div>
      <div class="modal-footer">
        <a href="paginaN3" class="btn btn-primary">repetir</a>
      </div>
    </div>
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

<?php
require_once("layout/footer.php");