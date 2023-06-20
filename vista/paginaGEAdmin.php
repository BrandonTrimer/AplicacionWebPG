<?php
require_once("layout/headerUser.php");
?>
  <div class="contenedor-ejercicios contenedor-ejercicios-minH col-md-9 animate__animated animate__bounceInRight">
    <div class="row contenedor-listaText">
      <h3 class="text-center">Lista de Integrantes</h3>
      <h4 class="col ">Grupo: Los adolecentes mas perrones de la galaxia</h4>
      <button type="button" class="col-2 btn btn-success btn-agregar"><ion-icon name="add-outline"></ion-icon>Agregar</button>
    </div>
    
    <div class="contenedor-listaInt justify-content-center">
      <table class="table table-hover justify-content-md-center">
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
            <td>Mark</td>
            <td>Otto</td>
            <td>
              <button class="btn btn-primary" type="submit">Editar</button>
              <button class="btn btn-danger" type="submit">Eliminar</button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <<td>
              <button class="btn btn-primary" type="submit">Editar</button>
              <button class="btn btn-danger" type="submit">Eliminar</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  
  
</div>

<?php
require_once("layout/footer.php");