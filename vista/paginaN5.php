<?php
session_start();
if (!empty($_SESSION['idEst'])) {
  require_once("layout/headerUser.php");
}else {
  require_once("layout/header.php");
}

$posicion = [];
/*
$preg1 = "12 ÷ 6 = 2";
$opciones1 = array(
  1 => "12 = 6 x 2",
  2 => "12 x 6 = 2",
  3 => "2 = 12 x 6",
  4 => "12 x 2 = 6",
  5 => "12 x 6 = 2",
  6 => "2 x 12 = 6",
  7 => "2 x 6 = 8",
  8 => "6 x 6 = 2"
);
$preg2 = "3 x 5";
$numR1 = array_rand($opciones1, 4);

$posicion[0] = $opciones1[$numR1[0]];
$posicion[1] = $opciones1[$numR1[1]];
$posicion[2] = $opciones1[$numR1[2]];
$posicion[3] = $opciones1[$numR1[3]];
*/
$cont = rand(1,2);
switch ($cont) {
  case 1:
    $preg1 = "12 ÷ 6 = 2";
    $opciones1 = array(
      1 => "12 = 6 x 2",
      2 => "12 x 6 = 2",
      3 => "2 = 12 x 6",
      4 => "12 x 2 = 6",
      5 => "12 x 6 = 2",
      6 => "2 x 12 = 6",
      7 => "2 x 6 = 8",
      8 => "6 x 6 = 2"
    );
    break;
    
  case 2:
    $preg1 = "6 ÷ 2 = 3";
    $opciones1 = array(
      1 => "2 x 3 = 6",
      2 => "2 x 6 = 3",
      3 => "3 = 2 x 6",
      4 => "6 x 3 = 2",
      5 => "2 x 2 = 6",
      6 => "3 x 3 = 6",
      7 => "2 x 3 = 5",
      8 => "3 x 6 = 2"
    );
    break;
  
  default:
    # code...
    break;
}
$numR1 = array_rand($opciones1, 4);

$posicion[0] = $opciones1[$numR1[0]];
$posicion[1] = $opciones1[$numR1[1]];
$posicion[2] = $opciones1[$numR1[2]];
$posicion[3] = $opciones1[$numR1[3]];

?>

  <div class="contenedor-ejercicios col-md-11 animate__animated animate__bounceInRight">
    <div class="contenedor-nivel row text-center">
        <div class="row justify-content-md-center text-center">
            <h2>Ejercicio 5</h2>
            <h5>Seleccione la división interpretada como multiplicación, si no ves la respuesta presiona el boton rojo para seguir buscando</h5>
        </div>
        <div class="row justify-content-md-center text-center cont-opt">
            <div class="col-md-3 align-self-center">
              <h2><?php echo $preg1; ?></h2>
            </div>
            <div class="col-md-7 col-10">
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

        <div class="row contenedor-ejerN4 justify-content-md-center text-center">
          <div onclick="compararRes('<?php echo $opciones1[1]; ?>')" class="col-4 colum btn-fondo align-self-center select-conten2 select-conten2-a">
            <h4>Ahi esta la respuesta</h4>
          </div>
          <div href="index" class="col-4 colum btn-fondo align-self-center select-conten2 select-conten2-b">
            <a href="paginaN5">
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
            <input type="hidden" name="pagina" value="<?php echo "paginaN5";?>">
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
          <a href="paginaN5" class="btn btn-primary">repetir</a>
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
        <button type="button" onclick="sumP()" class="btn btn-primary" data-bs-dismiss="modal">Volver a intentar</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="vista/js/nivel4Ejercicios.js"></script>
<?php
require_once("layout/footer.php");