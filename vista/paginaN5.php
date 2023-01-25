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
      <a href="paginaN2" class="btn btn-outline-white btn-nivel" role="button">Nivel 2 - Suma</a>
    </div>
    <div class="row">
      <a href="paginaN3" class="btn btn-outline-white btn-nivel" role="button">Nivel 3 - Resta</a>
    </div>
    <div class="row">
      <a href="paginaN4" class="btn btn-outline-white btn-nivel" role="button">Nivel 4 - Multiplicacion</a>
    </div>
    <div class="row">
      <a href="#" class="btn btn-outline-white btn-nivel" role="button">Nivel 5 - Division</a>
    </div>
    <div class="row">
      <a href="paginaHistoria" class="btn btn-outline-white btn-nivel" role="button">Historia</a>
    </div>
  </div>

  <div class="contenedor-ejercicios col-md-9 animate__animated animate__bounceInRight">
    <div class="contenedor-nivel row text-center">
        <div class="row">
            <h2>Ejercicio 5</h2>
            <h5>Seleccione la división interpretada como multiplicación  </h5>
        </div>
        <div class="row">
            <div class="col-md-3 align-self-center">
              <h2>12 ÷ 6 = 2</h2>
            </div>
            <div class="col-md-7 col-10">
                <div class="row ejer-n1">
                    <div id="ejerA" class="col-6 colum btn-fondo select-conten"><h6>a) 12 x 6 = 2</h6></div>
                    <div id="ejerB" class="col-6 colum btn-fondo select-conten"><h6>b) 2 = 12 x 6</h6></div>
                </div>
                <div class="row ejer-n1">
                    <div id="ejerC" class="col-6 colum btn-fondo select-conten"><h6>c) 12 = 6 x 2</h6></div>
                    <div id="ejerD" class="col-6 colum btn-fondo select-conten"><h6>d) 12 x 2 = 6</h6></div>
                </div>
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-confirmar">Revisar</button>
            </div>
        </div>

        <div class="row contenedor-ejerN4">
            <div class="col-md-3 align-self-center">
              <h2>45 ÷ 5 = 9</h2>
            </div>
            <div class="col-md-7 col-10">
                <div class="row ejer-n1">
                    <div id="ejer2A" class="col-6 colum btn-fondo select-conten"><h6>a) 45 x 5 = 9</h6></div>
                    <div id="ejer2B" class="col-6 colum btn-fondo select-conten"><h6>b) 45 = 5 x 9</h6></div>
                </div>
                <div class="row ejer-n1">
                    <div id="ejer2C" class="col-6 colum btn-fondo select-conten"><h6>c) 9 = 5 x 45</h6></div>
                    <div id="ejer2D" class="col-6 colum btn-fondo select-conten"><h6>c) 45 x 9 = 5</h6></div>
                </div>
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-confirmar">Revisar</button>
            </div>
        </div>
    </div>

    
    
    <div class="row text-center justify-content-end espacio-btn-sig">
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
        <img src="vista/img/N5img1Ayuda.png" width="100%" alt="">
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
        <img src="vista/img/N5img2Ayuda.png" width="100%" alt="">
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
        <iframe width="1310" height="499" src="https://www.youtube.com/embed/aQSMyybyEzA" title="Relación entre división y multiplicación" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<?php
require_once("layout/footer.php");