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
      <a href="#" class="btn btn-outline-white btn-nivel" role="button">Historia</a>
    </div>
  </div>

  <div class="contenedor-ejercicios col-md-9 animate__animated animate__bounceInRight contenedor-ejercicios-minH">
    <div id="accordionExample" class="contenedor-nivel row text-center">
        <div class="row">
            <h2>Historia</h2>
        </div>
        
        
        <div class="row content-hist-min">
           <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
             <div class="accordion-body">
               <h5>Un Meteorito está cayendo a la tierra y destruira la ciudad.</h5>
               <div class="col">
                    <img src="vista/img/imgmeteorot.png" alt="" class="img-hist img-meteoro">
                    <img src="vista/img/imgCiudadRota.jpg" alt="" class="img-hist img-ciudad">
               </div>
             </div>
           </div>

           <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
             <div class="accordion-body ">
               <h5>Salva la tierra creando un robot capaza de destruirla.</h5>
               <div class="col">
                    <img src="vista/img/imgRobot1t.png" alt="" class="img-hist img-robot2">
               </div>
             </div>
           </div>

           <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
             <div class="accordion-body ">
               <h5>Crea un robot poderoso capaz de destruir el meteorito.</h5>
               <div class="col">
                <img src="vista/img/imgRobot1t.png" alt="" class="img-hist img-robot1">     
                <img src="vista/img/imgRobot2t.png" alt="" class="img-hist img-robot2">
               </div>
             </div>
           </div>

           <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
             <div class="accordion-body ">
               <h5>Responde correctamente algunos problemas para que </h5>
               <h5>el robot sea mas fuerte que el meteorito.</h5>
               <div class="col">
                <img src="vista/img/imgRobot2t.png" alt="" class="img-hist img-fuerte">
                <img src="vista/img/imgmeteorot.png" alt="" class="img-hist img-debil">
               </div>
             </div>
           </div>

           <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
             <div class="accordion-body ">
               <h5>Si respondes mal, el meteorito sera mas fuerte </h5>
               <h5>que el robot y no podra salvar la tierra.</h5>
               <div class="col">
                <img src="vista/img/imgmeteorot.png" alt="" class="img-hist img-fuerte">
                <img src="vista/img/imgRobot1t.png" alt="" class="img-hist img-debil">
               </div>
             </div>
           </div>
        </div>

        <div class="row">
            <div class="accordion-item"> 
              <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
              <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <label class="btn btn-outline-dark" for="btnradio1">Parte 1</label>

              <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <label class="btn btn-outline-dark" for="btnradio2">Parte 2</label>

              <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <label class="btn btn-outline-dark" for="btnradio3">Parte 3</label>

              <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              <label class="btn btn-outline-dark" for="btnradio4">Parte 4</label>

              <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              <label class="btn btn-outline-dark" for="btnradio5">Parte 5</label>
            </div>
            </div>
        </div>

        
    </div>

    
    
    <div class="row text-center justify-content-end espacio-btn-sig">
      <div class="col-2">
        <a href="#" role="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <img src="vista/img/flechaD.png" class="img-sig" alt="">
        </a>
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