<?php
require_once("layout/headerUser.php");
?>
  <div class="contenedor-ejercicios contenedor-ejercicios-minH col-md-9 animate__animated animate__bounceInRight">
    <div class="row contenedor-listaText">
      <h3 class="text-center">Lista de Integrantes</h3>
      <h4 class="col ">Grupo: "Los adolecentes mas perrones de la galaxia"</h4>
      <button type="button" class="col-2 btn btn-success btn-agregar" data-bs-toggle="modal" data-bs-target="#agregarInt"><ion-icon name="add-outline"></ion-icon>Agregar</button>
    </div>
    
    <div class="contenedor-listaInt">
      <table class="table tabla-lista justify-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark antonio</td>
            <td>Otto castillos</td>
            <td>
              <button class="btn btn-primary" type="submit" data-bs-toggle="modal" data-bs-target="#editarInt">Editar</button>
              <button class="btn btn-danger" type="submit" data-bs-toggle="modal" data-bs-target="#eliminarInt">Eliminar</button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>
              <button class="btn btn-primary" type="submit">Editar</button>
              <button class="btn btn-danger" type="submit">Eliminar</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

 <!----------------------- Modal agregar integrante  -->
<div class="modal fade" id="agregarInt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ingresar nombre del nuevo integrante</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">
        <form>
          <div class="row g-3">
            <div class="col form-floating mb-3">
              <input type="text" class="form-control" id="floatingFname" placeholder="First name">
              <label for="floatingFname">Nombre</label>
            </div>
            <div class="col form-floating">
              <input type="text" class="form-control" id="floatingLname" placeholder="Last name">
              <label for="floatingLname">Apellido</label>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>

 <!----------------------- Modal editar integrante  -->
<div class="modal fade" id="editarInt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar nombre del integrante</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">
        <form>
          <div class="row g-3">
            <div class="col form-floating mb-3">
              <input type="text" class="form-control" id="floatingFname" placeholder="First name">
              <label for="floatingFname">Nombre</label>
            </div>
            <div class="col form-floating">
              <input type="text" class="form-control" id="floatingLname" placeholder="Last name">
              <label for="floatingLname">Apellido</label>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>

 <!----------------------- Modal eliminar integrante  -->
<div class="modal fade" id="eliminarInt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar integrante</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>¿Esta seguro que quiere eliminar e este integrante?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>


<?php
require_once("layout/footer.php");