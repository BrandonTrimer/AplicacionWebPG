<?php
require_once("layout/header.php");
require_once("layout/niveles.php");
?>

  <div class="contenedor-ejercicios col-md-9 animate__animated animate__bounceInRight">
    <div class="contenedor-nivel row text-center">
        <div class="row">
            <h2>Ejercicio 2</h2>
            <h5>Llena las casillas según el valor que representa el número</h5>
        </div>
        <div class="row">
            <div class="col-md-2 align-self-center">
              <h2>245 = </h2>
            </div>
            <div class="col-md-10 cont-ejer-n1">
                <div class="row ejer-n1">
                    <div class="col-2 colum btn-fondo"><h6>CENTENA MIL</h6></div>
                    <div class="col-2 colum btn-fondo"><h6>DECENA MIL</h6></div>
                    <div class="col-2 colum btn-fondo"><h6>UNIDAD MIL</h6></div>
                    <div class="col-2 colum btn-fondo"><h6>CENTENA</h6></div>
                    <div class="col-2 colum btn-fondo"><h6>DECENA</h6></div>
                    <div class="col-2 colum btn-fondo"><h6>UNIDAD</h6></div>
                </div>
                <div class="row ejer-n1">
                    <div id="btn-dec-ejer9" class="col-2 colum btn-fondo"></div>
                    <div id="btn-dec-ejer8" class="col-2 colum btn-fondo"></div>
                    <div id="btn-dec-ejer7" class="col-2 colum btn-fondo"></div>
                    <div id="btn-dec-ejer6" class="col-2 colum btn-fondo"></div>
                    <div id="btn-dec-ejer5" class="col-2 colum btn-fondo"></div>
                    <div id="btn-dec-ejer4" class="col-2 colum btn-fondo"></div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12 cont-ejer-n1">
                <div class="row ejer-n1 justify-content-md-center text-center">
                    <div id="btn-dec-ejer9" class="col-1 offset-1 colum btn-fondo txt-select-num">1</div>
                    <div id="btn-dec-ejer8" class="col-1 colum btn-fondo txt-select-num">2</div>
                    <div id="btn-dec-ejer7" class="col-1 colum btn-fondo txt-select-num">3</div>
                    <div id="btn-dec-ejer6" class="col-1 colum btn-fondo txt-select-num">4</div>
                    <div id="btn-dec-ejer5" class="col-1 colum btn-fondo txt-select-num">5</div>
                    <div id="btn-dec-ejer4" class="col-1 colum btn-fondo txt-select-num">6</div>
                    <div id="btn-dec-ejer4" class="col-1 colum btn-fondo txt-select-num">7</div>
                    <div id="btn-dec-ejer4" class="col-1 colum btn-fondo txt-select-num">8</div>
                    <div id="btn-dec-ejer4" class="col-1 colum btn-fondo txt-select-num">9</div>
                    <div id="btn-dec-ejer4" class="col-1 colum btn-fondo txt-select-num">0</div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-md-center text-center">
      <div class="col-md-3">
        <button type="button" class="btn btn-confirmar">Revisar</button>
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
        <iframe width="1310" height="499" src="https://www.youtube.com/embed/TkAhaG1EcTs" title="🤓 VALOR POSICIONAL | Unidades, Decenas y Centenas 👩🏻‍🏫" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<?php
require_once("layout/footer.php");