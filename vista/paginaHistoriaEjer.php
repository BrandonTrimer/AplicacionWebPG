<?php
session_start();
if (!empty($_SESSION['idEst'])) {
  require_once("layout/headerUser.php");
}else {
  require_once("layout/header.php");
}
/* ----------------- EJERCICIO 1 ---------------- */
$opciones1 = [];
$opciones1 = array(
  1 => "5748 > 5739",
  2 => "3547 < 4526",
  3 => "3125 > 3058",
  4 => "1258 > 1285",
  5 => "2748 > 2739",
  6 => "8241 < 8240",
  7 => "1023 > 1123",
  8 => "4448 > 4449"
);
$numR1 = array_rand($opciones1, 4);
$posicion[0] = $opciones1[$numR1[0]];
$posicion[1] = $opciones1[$numR1[1]];
$posicion[2] = $opciones1[$numR1[2]];
$posicion[3] = $opciones1[$numR1[3]];

/* ----------------- EJERCICIO 2 ---------------- */
$opciones2a = array(
  1 => 1278,
  2 => 4521,
  3 => 3254
);
$numR2a = array_rand($opciones2a, 2);
$posicion2a[0] = $opciones2a[$numR2a[0]];
$posicion2a[1] = $opciones2a[$numR2a[1]];

$opciones2b = array(
  1 => 3654,
  2 => 4852,
  3 => 1287
);
$numR2b = array_rand($opciones2b, 2);
$posicion2b[0] = $opciones2b[$numR2b[0]];
$posicion2b[1] = $opciones2b[$numR2b[1]];

$opcionesSum = array(
  1 => 6139,
  2 => 7775,
  3 => 5799,
  4 => 8506,
  5 => 4532,
  6 => 4941
);
$numRsum = array_rand($opcionesSum, 2);
$posicionSum[0] = $opcionesSum[$numRsum[0]];
$posicionSum[1] = $opcionesSum[$numRsum[1]];

/* ----------------- EJERCICIO 3 ---------------- */
$numR3digito = rand(3,5);
$numR3cant = rand(7,9);

$numR3d1 = rand(3,5);
$numR3c1 = rand(7,9);
$numR3d2 = rand(3,5);
$numR3c2 = rand(7,9);
$numR3d3 = rand(3,5);
$numR3c3 = rand(7,9);
$numR3d4 = rand(3,5);
$numR3c4 = rand(7,9);

$opciones3 = array(
  1 => $numR3d1." x ".$numR3c1,
  2 => $numR3d2." x ".$numR3c2,
  3 => $numR3d3." x ".$numR3c3,
  4 => $numR3d4." x ".$numR3c4
);
$limite = 0;

?>

  <div class="contenedor-ejercicios col-md-11 animate__animated animate__bounceInRight contenedor-ejercicios-minH">
    <div id="accordionExample" class="contenedor-nivel row text-center">
        
        <div class="row content-hist-min">

        <!----------------------- CUADRO 1 ------------------------------>
           <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
           <div class="row txt-historia-ejer justify-content-md-center text-center">
              <h2>Ejercicios</h2>
              <h5>Seleccione el ejercicio que está correcto </h5>
            </div> 
           <div class="row accordion-body">
               <div class="col-6">
                  <div class="row ejer-n1 justify-content-md-center text-center select-conten">
                    <div id="selec1H" onclick="almacenarOpcion('<?php echo $posicion[0]; ?>')" class="col-6 colum btn-fondo espacio-preg">
                      <h5><?php echo $posicion[0]; ?></h6>
                    </div>
                  </div>
                  <div class="row ejer-n1 justify-content-md-center text-center select-conten">
                    <div id="selec2H" onclick="almacenarOpcion('<?php echo $posicion[1]; ?>')" class="col-6 colum btn-fondo espacio-preg">
                      <h5><?php echo $posicion[1]; ?></h5>
                    </div>
                  </div>
                  <div class="row ejer-n1 justify-content-md-center text-center select-conten">
                    <div id="selec3H" onclick="almacenarOpcion('<?php echo $posicion[2]; ?>')" class="col-6 colum btn-fondo espacio-preg">
                      <h5><?php echo $posicion[2]; ?></h5>
                    </div>
                  </div>
                  <div class="row ejer-n1 justify-content-md-center text-center select-conten">
                    <div id="selec4H" onclick="almacenarOpcion('<?php echo $posicion[3]; ?>')" class="col-6 colum btn-fondo espacio-preg">
                      <h5><?php echo $posicion[3]; ?></h5>
                    </div>
                  </div>
                  <div class="row contenedor-ejerN4 justify-content-md-center text-center">
                    <div onclick="compararRes('<?php echo $opciones1[1]; ?>')" class="col-4 colum btn-fondo align-self-center select-conten2 select-conten2-a">
                      <h6>Ahi esta la respuesta</h6>
                    </div>
                    <div onclick="buscarRes('<?php echo $posicion[0] ?>','<?php echo $posicion[1] ?>','<?php echo $posicion[2] ?>','<?php echo $posicion[3] ?>','<?php echo $opciones1[1] ?>')" class="col-4 colum btn-fondo align-self-center select-conten2 select-conten2-b">
                      <h6>Ninguna es correcta</h6>
                    </div>
                  </div>
                </div>

                <div class="col-6">
                    <img src="vista/img/imgRobot1t.png" alt="" class="img-hist img-robot1">
                    <h5>Puntos obtenidos</h5>
                    <h4 id="puntos1"></h4>
                </div>
             </div>
           </div>

           <!----------------------- CUADRO 2 ------------------------------>
           <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
           <div class="row txt-historia-ejer">
              <h2>Ejercicios</h2>
              <h5>Seleccione el ejercicio que está correcto </h5>
            </div> 
           <div class="row accordion-body">
               <div class="col-6">
                  <div class="row ejer-n1 justify-content-md-center text-center">
                    <div class="col-6">
                        <div class="row ejer-n1 justify-content-md-center text-center">
                            <div class="col-2"></div>
                            <div class="col-6 colum btn-fondo"><h3><?php echo $posicion2a[0] ?></h3></div>
                        </div>
                        <div class="row ejer-n1 justify-content-md-center text-center">
                            <div class="col-2"><h6 class="simb-mas">+</h6></div>
                            <div class="col-6 colum btn-fondo"><h3><?php echo $posicion2a[1] ?></h3></div>
                        </div>
                        <div class="row ejer-n1 justify-content-md-center text-center">
                            <div class="col-2"></div>
                            <div class="col-6 colum btn-fondo fondo-verde"><h3><?php echo $posicionSum[0] ?></h3></div>
                        </div>
                        <div class="row ejer-n1 justify-content-md-center text-center select-conten">
                            <div id="selec2AH" onclick="almacenarSuma(<?php echo $posicion2a[0].','.$posicion2a[1];?>,1)" class="col-9 colum btn-fondo espacio-select">Escoger</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row ejer-n1 justify-content-md-center text-center">
                            <div class="col-2"></div>
                            <div class="col-6 colum btn-fondo"><h3><?php echo $posicion2b[0] ?></h3></div>
                        </div>
                        <div class="row ejer-n1 justify-content-md-center text-center">
                            <div class="col-2"><h6 class="simb-mas">+</h6></div>
                            <div class="col-6 colum btn-fondo"><h3><?php echo $posicion2b[1] ?></h3></div>
                        </div>
                        <div class="row ejer-n1 justify-content-md-center text-center">
                            <div class="col-2"></div>
                            <div class="col-6 colum btn-fondo fondo-verde"><h3><?php echo $posicionSum[1] ?></h3></div>
                        </div>
                        <div class="row ejer-n1 justify-content-md-center text-center select-conten">
                            <div id="selec2BH"  onclick="almacenarSuma(<?php echo $posicion2b[0].','.$posicion2b[1]; ?>,2)" class="col-9 colum btn-fondo espacio-select">Escoger</div>
                        </div>
                    </div>
                  </div>
                  
                  <div class="row contenedor-ejerN4 justify-content-md-center text-center">
                    <div onclick="compararSum(<?php echo $posicionSum[0].','.$posicionSum[1]; ?>)" class="col-4 colum btn-fondo align-self-center select-conten2 select-conten2-a">
                      <h6>Ahi esta la respuesta</h6>
                    </div>
                    <div onclick="buscarSum(<?php echo $posicion2a[0] ?>,<?php echo $posicion2a[1] ?>,<?php echo $posicion2b[0] ?>,<?php echo $posicion2b[1] ?>,<?php echo $posicionSum[0] ?>,<?php echo $posicionSum[1] ?>)" class="col-4 colum btn-fondo align-self-center select-conten2 select-conten2-b">
                      <h6>Ninguna es correcta</h6>
                    </div>
                  </div>
                </div>

                <div class="col-6">
                    <img src="vista/img/imgRobot1t.png" alt="" class="img-hist img-robot1">
                    <h5>Puntos obtenidos</h5>
                    <h4 id="puntos2"></h4>
                </div>
             </div>
           </div>

           <!----------------------- CUADRO 3 ------------------------------>
           <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
           <div class="row txt-historia-ejer">
              <h2>Ejercicios</h2>
              <h5>Seleccione el ejercicio que está correcto </h5>
            </div>   
           <div class="row accordion-body">
               <div class="col-6">
                  <div class="row ejer-n1 justify-content-md-center text-center">
                    <div class="col-10">
                        <div class="row ejer-n1 justify-content-md-center text-center">
                          <?php while ($limite < $numR3cant){ ?>
                            <div class="col-2 colum btn-fondo espacio-select"><?php echo $numR3digito; ?></div>
                          <?php $limite++; } ?>
                        </div>
                        <div class="row ejer-n1">
                            <div id="selec3AH" onclick="almacenarMult(<?php echo $numR3d1.','.$numR3c1; ?>)" class="col-6 colum btn-fondo select-conten"><h6><?php echo $numR3d1; ?> x <?php echo $numR3c1; ?></h6></div>
                            <div id="selec3BH" onclick="almacenarMult(<?php echo $numR3d2.','.$numR3c2; ?>)" class="col-6 colum btn-fondo select-conten"><h6><?php echo $numR3d2; ?> x <?php echo $numR3c2; ?></h6></div>
                        </div>
                        <div class="row ejer-n1">
                            <div id="selec3CH" onclick="almacenarMult(<?php echo $numR3d3.','.$numR3c3; ?>)" class="col-6 colum btn-fondo select-conten"><h6><?php echo $numR3d3; ?> x <?php echo $numR3c3; ?></h6></div>
                            <div id="selec3DH" onclick="almacenarMult(<?php echo $numR3d4.','.$numR3c4; ?>)" class="col-6 colum btn-fondo select-conten"><h6><?php echo $numR3d4; ?> x <?php echo $numR3c4; ?></h6></div>
                        </div>
                    </div>
                  </div>
                  

                  <div class="row contenedor-ejerN4 justify-content-md-center text-center">
                    <div onclick="compararMult(<?php echo $numR3digito.','.$numR3cant; ?>)" class="col-4 colum btn-fondo align-self-center select-conten2 select-conten2-a">
                      <h6>Ahi esta la respuesta</h6>
                    </div>
                    <div onclick="buscarMult(<?php echo $numR3d1.','.$numR3c1.','.$numR3d2.','.$numR3c2.','.$numR3d3.','.$numR3c3.','.$numR3d4.','.$numR3c4.','.$numR3digito.','.$numR3cant ; ?>)" class="col-4 colum btn-fondo align-self-center select-conten2 select-conten2-b">
                      <h6>Ninguna es correcta</h6>
                    </div>
                  </div>
                </div>
               <div class="col-5">
                    <img src="vista/img/imgRobot1t.png" alt="" class="img-hist img-robot1">
                    <h5>Puntos obtenidos</h5>
                    <h4 id="puntos3"></h4>
                </div>
             </div>
           </div>

           <!----------------------- CUADRO 4 ------------------------------>
           <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
           
           <div id="txt-victoria" class="row txt-historia-ejer">
              <h2>¡¡¡ VICTORIA !!!</h2>
              <h5>Tu robot supero al Meteorito, salvaste la ciudad !!!</h5>
            </div>   
           <div id="contenido-victoria" class="row accordion-body ">
              <div class="col-3 animate__animated animate__bounceInRight">
                <img src="vista/img/imgRobot2t.png" alt="" class="img-hist img-ganador img-fuerte">
                <h5>Puntos</h5>
                <h4 id="puntos4"></h4>
              </div>
              <div class="col-3 animate__animated animate__bounceInRight">
                <img src="vista/img/imgMeteorot.png" alt="" class="img-hist img-perdedor img-debil">
                <h5>Puntos</h5>
                <h4>2</h4>
              </div>
              <div class="col-6 animate__animated animate__bounceInRight">
                <img src="vista/img/imgCiudad.jpg" alt="" class="img-hist img-ciudadRes img-ciudadVic">
              </div>
            </div>

            <div id="txt-perdida" class="row txt-historia-ejer">
              <h2>PERDISTE...</h2>
              <h5>No superaste al meteorito, la ciudad fue destruida...</h5>
            </div>   
            <div id="contenido-perdida" class="row accordion-body ">
              <div class="col-3 animate__animated animate__fadeInRight">
                <img src="vista/img/imgMeteorot.png" alt="" class="img-hist img-ganador img-fuerte">
                <h5>Puntos</h5>
                <h4>2</h4>
              </div>
              <div class="col-3 animate__animated animate__fadeInRight">
                <img src="vista/img/imgRobot1t.png" alt="" class="img-hist img-perdedor img-debil">
                <h5>Puntos</h5>
                <h4 id="puntos5"></h4>
              </div>
              <div class="col-6 animate__animated animate__fadeInRight">
                <img src="vista/img/imgCiudadRota.jpg" alt="" class="img-hist img-ciudadRes img-ciudadPer">
              </div>
             </div>

           </div>

        <!----------------------- GRUPO DE BOTONES SELECCIONABLES ------------------------------>
        <!--<div class="row espacio-group-btn">
            <div class="accordion-item"> 
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                  <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <label class="btn btn-outline-dark" for="btnradio1">Parte 1</label>

                  <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <label class="btn btn-outline-dark" for="btnradio2">Parte 2</label>

                  <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <label class="btn btn-outline-dark" for="btnradio4">Parte 3</label>
                </div>
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                  <a class="btn btn-outline-dark" href="paginaHistoriaRes" role="button">Resultado</a>
                </div>
            </div>
        </div>-->

        
    </div>
  </div>
  
</div>

<!----------------- CONTENIDO MODALS RESULTADOS CUADRO 1 ---------------------->
<div class="modal fade" id="modal-bien" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-2" id="exampleModalLabel">Muy Bien!!!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>Elegiste la respuesta correcta!!!</h4>
      </div>
      <div class="modal-footer" data-bs-dismiss="modal">
        <a class="btn btn-primary" id="btnradio2" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Siguiente</a>
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
        <h4>Esa no era la respuesta, para la siguiente revisa con cuidado</h4>
      </div>
      <div class="modal-footer" data-bs-dismiss="modal">
        <a class="btn btn-danger" id="btnradio2" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Siguiente</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-bien-obs" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-2" id="exampleModalLabel">Bien Observado!!!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>La respuesta no estaba ahi</h4>
      </div>
      <div class="modal-footer" data-bs-dismiss="modal">
        <a class="btn btn-primary" id="btnradio2" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Siguiente</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-mal-busca" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-2" id="exampleModalLabel">Valla...</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>La respuesta estaba ahi, para la siguiente revisa con cuidado</h4>
      </div>
      <div class="modal-footer" data-bs-dismiss="modal">
        <a class="btn btn-danger" id="btnradio2" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Siguiente</a>
      </div>
    </div>
  </div>
</div>

<!----------------- CONTENIDO MODALS RESULTADOS CUADRO 2 ---------------------->
<div class="modal fade" id="modal-bien-c2" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-2" id="exampleModalLabel">Muy Bien!!!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>Elegiste la respuesta correcta!!!</h4>
      </div>
      <div class="modal-footer" data-bs-dismiss="modal">
        <a class="btn btn-primary" id="btnradio3" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Siguiente</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-mal-c2" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-2" id="exampleModalLabel">Ups...</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>Esa no era la respuesta, para la siguiente revisa con cuidado</h4>
      </div>
      <div class="modal-footer" data-bs-dismiss="modal">
        <a class="btn btn-danger" id="btnradio3" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Siguiente</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-bien-obs-c2" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-2" id="exampleModalLabel">Bien Observado!!!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>La respuesta no estaba ahi</h4>
      </div>
      <div class="modal-footer" data-bs-dismiss="modal">
        <a class="btn btn-primary" id="btnradio3" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Siguiente</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-mal-busca-c2" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-2" id="exampleModalLabel">Valla...</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>La respuesta estaba ahi, para la siguiente revisa con cuidado</h4>
      </div>
      <div class="modal-footer" data-bs-dismiss="modal">
        <a class="btn btn-danger" id="btnradio2" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Siguiente</a>
      </div>
    </div>
  </div>
</div>

<!----------------- CONTENIDO MODALS RESULTADOS CUADRO 3 ---------------------->
<div class="modal fade" id="modal-bien-c3" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-2" id="exampleModalLabel">Muy Bien!!!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>Elegiste la respuesta correcta!!!</h4>
      </div>
      <div class="modal-footer" data-bs-dismiss="modal">
        <a class="btn btn-danger" onclick="mostrarContenidoRes();" id="btnradio4" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Siguiente</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-mal-c3" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-2" id="exampleModalLabel">Ups...</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>Esa no era la respuesta, para la siguiente revisa con cuidado</h4>
      </div>
      <div class="modal-footer" data-bs-dismiss="modal">
        <a class="btn btn-danger" onclick="mostrarContenidoRes();" id="btnradio4" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Siguiente</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-bien-obs-c3" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-2" id="exampleModalLabel">Bien Observado!!!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>La respuesta no estaba ahi</h4>
      </div>
      <div class="modal-footer" data-bs-dismiss="modal">
        <a class="btn btn-danger" onclick="mostrarContenidoRes();" id="btnradio4" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Siguiente</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-mal-busca-c3" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-2" id="exampleModalLabel">Valla...</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>La respuesta estaba ahi, para la siguiente revisa con cuidado</h4>
      </div>
      <div class="modal-footer" data-bs-dismiss="modal">
        <a class="btn btn-danger" onclick="mostrarContenidoRes();" id="btnradio4" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Siguiente</a>
      </div>
    </div>
  </div>
</div>

<script src="vista/js/historiaPreguntas.js"></script>
<?php
require_once("layout/footer.php");