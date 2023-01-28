<?php
require_once("layout/header.php");
require_once("layout/niveles.php");

$numUniRam = rand(1,9);
$numDecRam = rand(1,9);
$numCenRam = rand(1,9);
$numUniMRam = rand(1,9);
$numDecMRam = rand(1,9);
$numCenMRam = rand(1,9);
?>

  <div class="contenedor-ejercicios col-md-9 animate__animated animate__bounceInRight">
    <div class="contenedor-nivel row text-center">
        <div class="row">
            <h2>Ejercicio 2</h2>
            <h5>Ordena los números en la tabla según su valor posicional </h5>
        </div>
        <div class="row">
            <div class="col-md-3 align-self-center">
              <h2><?php echo ($numUniRam.$numDecRam.$numCenRam." ".$numUniMRam.$numDecMRam.$numCenMRam)?> = </h2>
            </div>
            <div class="col-md-9 cont-ejer-n1">
                <div class="row ejer-n1">
                    <div class="col-2 colum btn-fondo"><h1>CENTENA MIL</h1></div>
                    <div class="col-2 colum btn-fondo"><h1>DECENA MIL</h1></div>
                    <div class="col-2 colum btn-fondo"><h1>UNIDAD MIL</h1></div>
                    <div class="col-2 colum btn-fondo"><h1>CENTENA</h1></div>
                    <div class="col-2 colum btn-fondo"><h1>DECENA</h1></div>
                    <div class="col-2 colum btn-fondo"><h1>UNIDAD</h1></div>
                </div>
                <div class="row ejer-n1">
                    <div id="casilla6" onclick="mostrarGroupNum(6)" class="col-2 colum select-casilla fondo-azul"><h2 id="txt-num6"></h2></div>
                    <div id="casilla5" onclick="mostrarGroupNum(5)" class="col-2 colum select-casilla fondo-lila"><h2 id="txt-num5"></h2></div>
                    <div id="casilla4" onclick="mostrarGroupNum(4)" class="col-2 colum select-casilla fondo-verde"><h2 id="txt-num4"></h2></div>
                    <div id="casilla3" onclick="mostrarGroupNum(3)" class="col-2 colum select-casilla fondo-naranja"><h2 id="txt-num3"></h2></div>
                    <div id="casilla2" onclick="mostrarGroupNum(2)" class="col-2 colum select-casilla fondo-amarillo"><h2 id="txt-num2"></h2></div>
                    <div id="casilla1" onclick="mostrarGroupNum(1)" class="col-2 colum select-casilla fondo-rojo"><h2 id="txt-num1"></h2></div>
                </div>
            </div>
        </div>
        <div id="contenedor-num" class="row cont-select-num">
            <div class="col-md-12 cont-ejer-n1">
                <div class="row ejer-n1 justify-content-md-center text-center">
                    <div onclick="cambiarNum(0)" class="col-1 offset-1 colum btn-fondo txt-select-num"><h4>0</h4></div>
                    <div onclick="cambiarNum(1)" class="col-1 colum btn-fondo txt-select-num"><h4>1</h4></div>
                    <div onclick="cambiarNum(2)" class="col-1 colum btn-fondo txt-select-num"><h4>2</h4></div>
                    <div onclick="cambiarNum(3)" class="col-1 colum btn-fondo txt-select-num"><h4>3</h4></div>
                    <div onclick="cambiarNum(4)" class="col-1 colum btn-fondo txt-select-num"><h4>4</h4></div>
                    <div onclick="cambiarNum(5)" class="col-1 colum btn-fondo txt-select-num"><h4>5</h4></div>
                    <div onclick="cambiarNum(6)" class="col-1 colum btn-fondo txt-select-num"><h4>6</h4></div>
                    <div onclick="cambiarNum(7)" class="col-1 colum btn-fondo txt-select-num"><h4>7</h4></div>
                    <div onclick="cambiarNum(8)" class="col-1 colum btn-fondo txt-select-num"><h4>8</h4></div>
                    <div onclick="cambiarNum(9)" class="col-1 colum btn-fondo txt-select-num"><h4>9</h4></div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-md-center text-center">
      <div class="col-md-3">
        <button type="button" onclick="RevisarEjer2(<?php echo ($numUniRam.','.$numDecRam.','.$numCenRam.','.$numUniMRam.','.$numDecMRam.','.$numCenMRam)?>)" class="btn btn-confirmar">Revisar</button>
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
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
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
        <h4>No respondiste bien...</h4>
      </div>
      <div class="modal-footer">
        <a href="pagina2N1" class="btn btn-danger">Cerrar</a>
      </div>
    </div>
  </div>
</div>

<?php
require_once("layout/footer.php");