<?php
session_start();
if (!empty($_SESSION['idEst'])) {
  require_once("layout/headerUser.php");
}else {
  require_once("layout/header.php");
}
/*
$posicion = [];

$preg1 = "2 x 4";
$opciones1 = array(
  1 => "2 veces 4 o 4 veces 2",
  2 => "2 veces 2 o 4 veces 4",
  3 => "2 veces 2 o 4 veces 2",
  4 => "2 veces 4 o 4 veces 4",
  5 => "2 veces 8 o 8 veces 2",
  6 => "4 veces 2 o 4 veces 4",
  7 => "4 veces 8 o 8 veces 4",
  8 => "2 veces 4 o 4 veces 8"
);
$preg2 = "3 x 5";
$opciones2 = array(
  1 => "3 veces 5 o 5 veces 3",
  2 => "3 veces 3 o 5 veces 5",
  3 => "5 veces 3 o 3 veces 3",
  4 => "3 veces 5 o 5 veces 5",
  5 => "3 veces 3 o 5 veces 3",
  6 => " veces 2 o 4 veces 4",
  7 => "4 veces 8 o 8 veces 4",
  8 => "2 veces 4 o 4 veces 8"
);
$numR1 = array_rand($opciones1, 4);

$posicion[0] = $opciones1[$numR1[0]];
$posicion[1] = $opciones1[$numR1[1]];
$posicion[2] = $opciones1[$numR1[2]];
$posicion[3] = $opciones1[$numR1[3]];
*/
$cont = rand(1,2);
switch ($cont) {
  case 1:
    $preg = "2 x 4";
    $opciones = array(
      1 => "2 veces 4 o 4 veces 2",
      2 => "2 veces 2 o 4 veces 4",
      3 => "2 veces 2 o 4 veces 2",
      4 => "2 veces 4 o 4 veces 4",
      5 => "2 veces 8 o 8 veces 2",
      6 => "4 veces 2 o 4 veces 4",
      7 => "4 veces 8 o 8 veces 4",
      8 => "2 veces 4 o 4 veces 8"
    );
    break;
    
  case 2:
    $preg = "3 x 5";
    $opciones = array(
      1 => "3 veces 5 o 5 veces 3",
      2 => "3 veces 3 o 5 veces 5",
      3 => "5 veces 3 o 3 veces 3",
      4 => "3 veces 5 o 5 veces 5",
      5 => "3 veces 3 o 5 veces 3",
      6 => " veces 2 o 4 veces 4",
      7 => "4 veces 8 o 8 veces 4",
      8 => "2 veces 4 o 4 veces 8"
    );
    break;
  
  default:
    # code...
    break;
}
$numR = array_rand($opciones, 4);

$posicion[0] = $opciones[$numR[0]];
$posicion[1] = $opciones[$numR[1]];
$posicion[2] = $opciones[$numR[2]];
$posicion[3] = $opciones[$numR[3]];

?>

  <div class="contenedor-ejercicios col-sm-11 animate__animated animate__bounceInRight">
    <div class="contenedor-nivel row text-center">
        <div class="row justify-content-sm-center text-center">
            <h2>Ejercicio - Multiplicación</h2>
            <h5 class="txtEjer">Selecciona la cantidad de veces que se debe repetir un número según el ejercicio. Si no ves la respuesta presiona el boton rojo para seguir buscando</h5>
        </div>
        <div class="row justify-content-sm-center text-center cont-opt">
            <div class="col-sm-3 align-self-center">
              <h2><?php echo $preg; ?></h2>
            </div>
            <div class="col-sm-7 col-10">
              <div class="row ejer-n1">
                <div id="ejerA" onclick="almacenarOpcion('<?php echo $posicion[0]; ?>')" class="col-6 colum btn-fondo select-conten">
                  <h5>a) <?php echo $posicion[0]; ?></h5>
                </div>
                <div id="ejerB" onclick="almacenarOpcion('<?php echo $posicion[1]; ?>')" class="col-6 colum btn-fondo select-conten">
                  <h5>b) <?php echo $posicion[1]; ?></h5>
                </div>
              </div>
              <div class="row ejer-n1">
                <div id="ejerC" onclick="almacenarOpcion('<?php echo $posicion[2]; ?>')" class="col-6 colum btn-fondo select-conten">
                  <h5>c) <?php echo $posicion[2]; ?></h5>
                </div>
                <div id="ejerD" onclick="almacenarOpcion('<?php echo $posicion[3]; ?>')" class="col-6 colum btn-fondo select-conten">
                  <h5>d) <?php echo $posicion[3]; ?></h5>
                </div>
              </div>
            </div>
        </div>

        <div class="row contenedor-ejerN4 justify-content-sm-center text-center">
          <div onclick="compararRes('<?php echo $opciones[1]; ?>')" class="col-4 colum btn-fondo align-self-center select-conten2 select-conten2-a">
            <h4>Ahi esta la respuesta</h4>
          </div>
          <div href="index" class="col-4 colum btn-fondo align-self-center select-conten2 select-conten2-b">
            <a href="paginaN4">
              <h4>La respuesta no esta aqui</h4>
            </a>
          </div>
        </div>
    </div>

    
    
    <div class="row text-center justify-content-end espacio-btn-sig">
      <div class="col-2">
        <a href="#" role="button">
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
        <img src="vista/img/N4img1Ayuda.png" width="100%" alt="">
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
        <img src="vista/img/N4img2Ayuda.png" width="100%" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-img3">Siguiente</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-img3" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Imagen de ayuda</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="vista/img/N4img3Ayuda.png" width="100%" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-img4">Siguiente</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-img4" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Imagen de ayuda</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="vista/img/N4img4Ayuda.png" width="100%" alt="">
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
        <iframe width="1309" height="499" src="https://www.youtube.com/embed/WES-u3UPDRA" title="La multiplicación - Aprende a multiplicar con el aprendiz de brujo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>      </div>
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
          <h5>Reuniste 3 estrella</h5>
          <h6>Estrellas Totales Reunidas: <?php echo $_SESSION['puntaje'] + 3 ?></h6>
        </div>
        <form action="aumentarPts" method="POST">
          <div class="modal-footer">
            <input type="hidden" name="dificultad" value="<?php echo 3;?>">
            <input type="hidden" name="pagina" value="<?php echo "paginaN4";?>">
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
          <a href="paginaN4" class="btn btn-primary">repetir</a>
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
<script src="vista/js/nivel4Ejercicios.js"></script>
<?php
require_once("layout/footer.php");