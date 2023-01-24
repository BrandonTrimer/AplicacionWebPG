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
      <a href="paginaN3" class="btn btn-outline-white btn-nivel" role="button">Nivel 3 - Resta</a>
    </div>
    <div class="row">
      <a href="paginaN4" class="btn btn-outline-white btn-nivel" role="button">Nivel 4 - Multiplicacion</a>
    </div>
    <div class="row">
      <a href="paginaN5" class="btn btn-outline-white btn-nivel" role="button">Nivel 5 - Division</a>
    </div>
    <div class="row">
      <a href="paginaHistoria" class="btn btn-outline-white btn-nivel" role="button">Historia</a>
    </div>
  </div>

  <div class="contenedor-ejercicios col-md-9 animate__animated animate__bounceInRight">
    <div class="contenedor-nivel row text-center">
        <div class="row justify-content-md-center text-center">
            <h2>Ejercicio 2</h2>
            <h5>Realiza las siguientes sumas</h5>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="row ejer-n1 justify-content-md-center text-center contenedor-min">
              <div class="col-2"></div>
              <div class="col-2 colum btn-fondo"><h6>3</h6></div>
              <div class="col-2 colum btn-fondo"><h6>4</h6></div>
            </div>
            <div class="row ejer-n1 justify-content-md-center text-center contenedor-min">
              <div class="col-2"><h6 class="simb-mas">+</h6></div>
              <div class="col-2 colum btn-fondo"><h6>2</h6></div>
              <div class="col-2 colum btn-fondo"><h6>4</h6></div>
            </div>
            <div class="row ejer-n1 justify-content-md-center text-center contenedor-min">
              <div class="col-2"></div>
              <div class="col-2 colum fondo-verde"><h6 id="num-ejer1-res1"></h6></div>
              <div class="col-2 colum fondo-verde"><h6 id="num-ejer1-res2"></h6></div>
            </div>
            <div class="row justify-content-md-center text-center contenedor-min">
              <div class="col-2"></div>
              <div class="col-2">
                <div class="row justify-content-md-center text-center">
                  <button id="btn-ejer1-aum1" type="button" class="btn-aum-num">
                    <img src="vista/img/flechaNum.png" class="img-flecha-num ar" alt="">
                  </button>
                </div>
                <div class="row justify-content-md-center text-center">
                  <button id="btn-ejer1-dis1" type="button" class="btn-dis-num">
                    <img src="vista/img/flechaNum.png" class="img-flecha-num" alt="">
                  </button>
                </div>
              </div>
              <div class="col-2">
                <div class="row justify-content-md-center text-center">
                  <button id="btn-ejer1-aum2" type="button" class="btn-aum-num">
                    <img src="vista/img/flechaNum.png" class="img-flecha-num ar" alt="">
                  </button>
                </div>
                <div class="row justify-content-md-center text-center">
                  <button id="btn-ejer1-dis2" type="button" class="btn-dis-num">
                    <img src="vista/img/flechaNum.png" class="img-flecha-num" alt="">
                  </button>
                </div>
              </div>
            </div>
            <div class="row justify-content-md-center text-center">
              <div class="col-1">
                <button type="button" class="btn btn-confirmar">Revisar</button>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="row ejer-n1 justify-content-md-center text-center contenedor-min">
              <div class="col-2"></div>
              <div class="col-2 colum btn-fondo"><h6>3</h6></div>
              <div class="col-2 colum btn-fondo"><h6>4</h6></div>
            </div>
            <div class="row ejer-n1 justify-content-md-center text-center contenedor-min">
              <div class="col-2"><h6 class="simb-mas">+</h6></div>
              <div class="col-2 colum btn-fondo"><h6>2</h6></div>
              <div class="col-2 colum btn-fondo"><h6>4</h6></div>
            </div>
            <div class="row ejer-n1 justify-content-md-center text-center contenedor-min">
              <div class="col-2"></div>
              <div class="col-2 colum fondo-verde"><h6 id="num-ejer2-res1"></h6></div>
              <div class="col-2 colum fondo-verde"><h6 id="num-ejer2-res2"></h6></div>
            </div>
            <div class="row justify-content-md-center text-center contenedor-min">
              <div class="col-2"></div>
              <div class="col-2">
                <div class="row justify-content-md-center text-center">
                  <button id="btn-ejer2-aum1" type="button" class="btn-aum-num">
                    <img src="vista/img/flechaNum.png" class="img-flecha-num ar" alt="">
                  </button>
                </div>
                <div class="row justify-content-md-center text-center">
                  <button id="btn-ejer2-dis1" type="button" class="btn-dis-num">
                    <img src="vista/img/flechaNum.png" class="img-flecha-num" alt="">
                  </button>
                </div>
              </div>
              <div class="col-2">
                <div class="row justify-content-md-center text-center">
                  <button id="btn-ejer2-aum2" type="button" class="btn-aum-num">
                    <img src="vista/img/flechaNum.png" class="img-flecha-num ar" alt="">
                  </button>
                </div>
                <div class="row justify-content-md-center text-center">
                  <button id="btn-ejer2-dis2" type="button" class="btn-dis-num">
                    <img src="vista/img/flechaNum.png" class="img-flecha-num" alt="">
                  </button>
                </div>
              </div>
            </div>
            <div class="row justify-content-md-center text-center">
              <div class="col-1">
                <button type="button" class="btn btn-confirmar">Revisar</button>
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
        <a href="index" role="button">
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

<?php
require_once("layout/footer.php");