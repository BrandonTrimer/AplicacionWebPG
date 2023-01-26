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
      <a href="paginaN5" class="btn btn-outline-white btn-nivel" role="button">Nivel 5 - Division</a>
    </div>
    <div class="row">
      <a href="paginaHistoria" class="btn btn-outline-white btn-nivel" role="button">Historia</a>
    </div>
  </div>

  <div class="contenedor-ejercicios col-md-9 animate__animated animate__bounceInRight contenedor-ejercicios-minH">
    <div id="accordionExample" class="contenedor-nivel row text-center">
        <div class="row">
            <h2>Ejercicios</h2>
            <h5>Seleccione el ejercicio que está correcto </h5>
        </div>
        
        <div class="row content-hist-min">

        <!----------------------- CUADRO 1 ------------------------------>
           <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="row accordion-body">
               <div class="col-6">
                  <div class="row ejer-n1 justify-content-md-center text-center select-conten">
                    <div id="selec1" class="col-6 colum btn-fondo espacio-preg"><h6>5647 > 5487</h6></div>
                  </div>
                  <div class="row ejer-n1 justify-content-md-center text-center select-conten">
                    <div id="selec2" class="col-6 colum btn-fondo espacio-preg"><h6>5647 > 5487</h6></div>
                  </div>
                  <div class="row ejer-n1 justify-content-md-center text-center select-conten">
                    <div id="selec3" class="col-6 colum btn-fondo espacio-preg"><h6>5647 > 5487</h6></div>
                  </div>
                  <div class="row ejer-n1 justify-content-md-center text-center select-conten">
                    <div id="selec4" class="col-6 colum btn-fondo espacio-preg"><h6>5647 > 5487</h6></div>
                  </div>
                  <div class="row justify-content-md-center text-center">
                    <div class="col-5">
                      <button type="button" class="btn btn-confirmar">Revisar</button>
                    </div>
                  </div>
                </div>

                <div class="col-6">
                    <img src="vista/img/imgRobot1t.png" alt="" class="img-hist img-robot1">
                    <h5>Puntos obtenidos = 0</h5>
                </div>
             </div>
           </div>

           <!----------------------- CUADRO 2 ------------------------------>
           <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
             <div class="row accordion-body">
               <div class="col-6">
                  <div class="row ejer-n1 justify-content-md-center text-center">
                    <div class="col-6">
                        <div class="row ejer-n1 justify-content-md-center text-center">
                            <div class="col-2"></div>
                            <div class="col-2 colum btn-fondo"><h6>6</h6></div>
                            <div class="col-2 colum btn-fondo"><h6>6</h6></div>
                            <div class="col-2 colum btn-fondo"><h6>5</h6></div>
                        </div>
                        <div class="row ejer-n1 justify-content-md-center text-center">
                            <div class="col-2"><h6 class="simb-mas">+</h6></div>
                            <div class="col-2 colum btn-fondo"><h6>6</h6></div>
                            <div class="col-2 colum btn-fondo"><h6>6</h6></div>
                            <div class="col-2 colum btn-fondo"><h6>5</h6></div>
                        </div>
                        <div class="row ejer-n1 justify-content-md-center text-center">
                            <div class="col-2"></div>
                            <div class="col-2 colum btn-fondo"><h6>6</h6></div>
                            <div class="col-2 colum btn-fondo"><h6>6</h6></div>
                            <div class="col-2 colum btn-fondo"><h6>5</h6></div>
                        </div>
                        <div class="row ejer-n1 justify-content-md-center text-center select-conten">
                            <div id="selec2A" class="col-9 colum btn-fondo espacio-select">Escoger</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row ejer-n1 justify-content-md-center text-center">
                            <div class="col-2"></div>
                            <div class="col-2 colum btn-fondo"><h6>6</h6></div>
                            <div class="col-2 colum btn-fondo"><h6>6</h6></div>
                            <div class="col-2 colum btn-fondo"><h6>5</h6></div>
                        </div>
                        <div class="row ejer-n1 justify-content-md-center text-center">
                            <div class="col-2"><h6 class="simb-mas">+</h6></div>
                            <div class="col-2 colum btn-fondo"><h6>6</h6></div>
                            <div class="col-2 colum btn-fondo"><h6>6</h6></div>
                            <div class="col-2 colum btn-fondo"><h6>5</h6></div>
                        </div>
                        <div class="row ejer-n1 justify-content-md-center text-center">
                            <div class="col-2"></div>
                            <div class="col-2 colum btn-fondo"><h6>6</h6></div>
                            <div class="col-2 colum btn-fondo"><h6>6</h6></div>
                            <div class="col-2 colum btn-fondo"><h6>5</h6></div>
                        </div>
                        <div class="row ejer-n1 justify-content-md-center text-center select-conten">
                            <div id="selec2B" class="col-9 colum btn-fondo espacio-select">Escoger</div>
                        </div>
                    </div>
                  </div>
                  

                  <div class="row justify-content-md-center text-center">
                    <div class="col-5">
                      <button type="button" class="btn btn-confirmar">Revisar</button>
                    </div>
                  </div>
                </div>

                <div class="col-6">
                    <img src="vista/img/imgRobot1t.png" alt="" class="img-hist img-robot1">
                    <h5>Puntos obtenidos = 0</h5>
                </div>
             </div>
           </div>

           <!----------------------- CUADRO 3 ------------------------------>
           <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
             <div class="row accordion-body ">
               <div class="col-6">
                  <div class="row ejer-n1 justify-content-md-center text-center">
                    <div class="col-10">
                        <div class="row ejer-n1 justify-content-md-center text-center">
                            <div class="col-2 colum btn-fondo espacio-select">5</div>
                            <div class="col-2 colum btn-fondo espacio-select">5</div>
                            <div class="col-2 colum btn-fondo espacio-select">5</div>
                            <div class="col-2 colum btn-fondo espacio-select">5</div>
                            <div class="col-2 colum btn-fondo espacio-select">5</div>
                            <div class="col-2 colum btn-fondo espacio-select">5</div>
                        </div>
                        <div class="row ejer-n1">
                            <div id="selec3A" class="col-6 colum btn-fondo select-conten"><h6>6 x 5</h6></div>
                            <div id="selec3B" class="col-6 colum btn-fondo select-conten"><h6>5 x 7</h6></div>
                        </div>
                        <div class="row ejer-n1">
                            <div id="selec3C" class="col-6 colum btn-fondo select-conten"><h6>5 x 5</h6></div>
                            <div id="selec3D" class="col-6 colum btn-fondo select-conten"><h6>6 x 6</h6></div>
                        </div>
                    </div>
                  </div>
                  

                  <div class="row justify-content-md-center text-center">
                    <div class="col-5">
                      <button type="button" class="btn btn-confirmar">Revisar</button>
                    </div>
                  </div>
                </div>
               <div class="col-5">
                    <img src="vista/img/imgRobot1t.png" alt="" class="img-hist img-robot1">
                    <h5>Puntos obtenidos = 0</h5>
                </div>
             </div>
           </div>

        <!----------------------- GRUPO DE BOTONES SELECCIONABLES ------------------------------>
        <div class="row espacio-group-btn">
            <div class="accordion-item"> 
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                  <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <label class="btn btn-outline-dark" for="btnradio1">Parte 1</label>

                  <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <label class="btn btn-outline-dark" for="btnradio2">Parte 2</label>

                  <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <label class="btn btn-outline-dark" for="btnradio3">Parte 3</label>
                </div>
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                  <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off" data-bs-toggle="collapse" data-bs-target="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <label class="btn btn-outline-dark" for="btnradio4">Resultados</label>
                </div>
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