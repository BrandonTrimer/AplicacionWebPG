<?php
session_start();
if (!empty($_SESSION['idEst'])) {
  require_once("layout/headerUser.php");
}else {
  require_once("layout/header.php");
}
?>

  <div class="contenedor-ejercicios col-md-11 animate__animated animate__bounceInRight contenedor-ejercicios-minH">
    <div id="accordionExample" class="contenedor-nivel row text-center">
        <div class="row">
            <h2>Historia</h2>
        </div>
        
        
        <div class="row content-hist-min">
           <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
             <div class="accordion-body">
               <h5 class="txtBlanco">Un Meteorito está cayendo a la tierra y destruira la ciudad.</h5>
               <div class="col">
                    <img src="vista/img/imgmeteorot.png" alt="" class="img-hist img-meteoro">
                    <img src="vista/img/imgCiudadRota.jpg" alt="" class="img-hist img-ciudad">
               </div>
             </div>
            <!-- boton radio 1 -->
            <div class="row">
              <div class="accordion-item"> 
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                  <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <label class="btn btn-outline-light" for="btnradio2">Parte 2</label>
                </div>
              </div>
            </div>

           </div>

           <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
             <div class="accordion-body ">
               <h5 class="txtBlanco">Salva la tierra creando un robot capaza de destruirla.</h5>
               <div class="col">
                    <img src="vista/img/imgRobot1t.png" alt="" class="img-hist img-robot1">
               </div>
             </div>

             <!-- boton radio 2 -->
            <div class="row">
              <div class="accordion-item"> 
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                  <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <label class="btn btn-outline-light" for="btnradio3">Parte 3</label>
                </div>
              </div>
            </div>

           </div>

           <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
             <div class="accordion-body ">
               <h5 class="txtBlanco">Crea un robot poderoso capaz de destruir el meteorito.</h5>
               <div class="col">
                <img src="vista/img/imgRobot1t.png" alt="" class="img-hist img-robot1">     
                <img src="vista/img/imgRobot2t.png" alt="" class="img-hist img-robot2">
               </div>
             </div>

             <!-- boton radio 3 -->
            <div class="row">
              <div class="accordion-item"> 
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                  <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              <label class="btn btn-outline-light" for="btnradio4">Parte 4</label>
                </div>
              </div>
            </div>

           </div>

           <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
             <div class="accordion-body ">
               <h5 class="txtBlanco">Responde correctamente algunos problemas para que </h5>
               <h5 class="txtBlanco">el robot sea mas fuerte que el meteorito.</h5>
               <div class="col">
                <img src="vista/img/imgRobot2t.png" alt="" class="img-hist img-fuerte">
                <img src="vista/img/imgmeteorot.png" alt="" class="img-hist img-debil">
               </div>
             </div>

             <!-- boton radio 4 -->
            <div class="row">
              <div class="accordion-item"> 
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                  <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              <label class="btn btn-outline-light" for="btnradio5">Parte 5</label>
                </div>
              </div>
            </div>

           </div>

           <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
             <div class="accordion-body ">
               <h5 class="txtBlanco">Si respondes mal, el meteorito sera mas fuerte </h5>
               <h5 class="txtBlanco">que el robot y no podra salvar la tierra.</h5>
               <div class="col">
                <img src="vista/img/imgmeteorot.png" alt="" class="img-hist img-fuerte">
                <img src="vista/img/imgRobot1t.png" alt="" class="img-hist img-debil">
               </div>
             </div>

             <!-- boton radio 5 -->
            <div class="row">
              <div class="accordion-item"> 
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                  <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <label class="btn btn-outline-light" for="btnradio1">Volver a Empezar</label>
                </div>
              </div>
            </div>
           </div>
           
           <div class="row text-center justify-content-end">
            <div class="col-2">
              <a href="paginaHistoriaEjer" role="button">
                <img src="vista/img/imgStart.webp" class="img-border-circulo" alt="">
              </a>
            </div>
           </div>

        </div>
        <!-- 
        <div class="row">
          <div class="accordion-item"> 
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
              <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <label class="btn btn-outline-light" for="btnradio1">Parte 1</label>

              <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <label class="btn btn-outline-light" for="btnradio2">Parte 2</label>

              <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <label class="btn btn-outline-light" for="btnradio3">Parte 3</label>

              <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              <label class="btn btn-outline-light" for="btnradio4">Parte 4</label>
              
              <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              <label class="btn btn-outline-light" for="btnradio5">Parte 5</label>
            </div>
          </div>
        </div>-->

        
    </div>

    
    
    
  </div>
  
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<?php
require_once("layout/footer.php");