<?php

/*
print_r ($datoNomP[0]);
foreach ($datoNomP as $key => $value) {
  foreach($value as $v):
    echo 'hola ';
    echo $v['nombre'];
  endforeach;


  <?php 
    if (!empty($nombre)) {
      echo $nombre;
      echo $apellido;
      echo $codigo;
      echo $clave;
      echo "tttttt";
      //print_r ($datoUser);
      echo $_SESSION["nombre"]." ".$_SESSION["apellido"]." ".$_SESSION["clave"];
    } else {
      echo "usuario reconocido";
    }
    
    ?>


}*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="vista/css/estilos.css">
</head>
<body>

<nav class="navbar navbar-expand-lg justify-content-center">
  <a class="navbar-brand btnInicio" href="index">Inicio</a>
  <a class="navbar-brand" href="paginaMenu">Menu</a>
  <a class="navbar-brand btnGrupo"data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
    <ion-icon name="person-outline"></ion-icon> Perfil
  </a>
</nav>

  <div class="contenedor-ejercicios contenedor-ejercicios-minH col-md-9 animate__animated animate__bounceInRight">
    <div class="row contenedor-listaText">
      <h3 class="text-center">Lista de Integrantes</h3>
      <h4 class="col">Grupo: "<?php foreach ($datoNomGT as $key => $value) {
                                        foreach($value as $v):
                                          echo $v['nombre'];
                                          $_SESSION['nomGrupoInic'] = $v['nombre'];
                                        endforeach;
                                      } ?>" <button class="btn btn-outline-light" type="button" name="editG" data-bs-toggle="modal" data-bs-target="#editarGrupo"><ion-icon name="pencil-outline"></ion-icon></button>
                                      </h4>
      <button type="button" class="col-2 btn btn-success btn-agregar" data-bs-toggle="modal" data-bs-target="#agregarInt"><ion-icon name="add-outline"></ion-icon>Agregar</button>
      <h5>Codigo: 2344</h5>
      <?php 
      $num1=rand(10,99);
      $num2=rand(10,99);
      $codigo=$num1.$num2;
      //echo $codigo;
      //echo $_SESSION['idM'];
      
      ?>
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
            <?php 
            
            if (!empty($datoNomEst)) {
               //echo "si hay datos";
               foreach ($datoNomEst as $key => $value) {
                    foreach($value as $v): ?>
          <tr>
            <th scope="row">1</th>
            <td><?php echo $v['nombre'] ?></td>
            <td><?php echo $v['apellido'] ?></td>
            <td>
              <button class="btn btn-primary" type="submit" data-bs-toggle="modal" data-bs-target="#editarInt">Editar</button>
              <button class="btn btn-danger" type="submit" data-bs-toggle="modal" data-bs-target="#eliminarInt">Eliminar</button>
            </td>
          </tr>
            <?php endforeach;
                } 
        
             } else {
               ?>
              <tr>
                <th scope="row"></th>
                <td></td>
                <td><h3>NO HAY ESTUDIANTES AGREGADOS</h3></td>
              </tr>
        <?php
             }
            ?>
            
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
        <form action="guardarE" method="POST">
          <div class="row g-3">
            <div class="col form-floating mb-3">
              <input type="text" class="form-control" name="nombreE" id="floatingFname" placeholder="First name">
              <label for="floatingFname">Nombre</label>
            </div>
            <div class="col form-floating">
              <input type="text" class="form-control" name="apellidoE" id="floatingLname" placeholder="Last name">
              <label for="floatingLname">Apellido</label>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Aceptar</button>
            </div>
          </div>
        </form>
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
        <h4>¿Esta seguro que quiere eliminar este integrante?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>

 <!----------------------- Offvanvas perfil de usuario -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Perfil de Usuario</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="img-content text-center">
        <img src="vista/img/iconoUser.webp" class="imgUser" alt="">
        <h4><?php foreach ($datoNomP as $key => $value) {
                                        foreach($value as $v):
                                          echo $v['nombre'];
                                        endforeach;
                                      } ?></h4>
        <h4><?php foreach ($datoNomP as $key => $value) {
                                        foreach($value as $v):
                                          echo $v['apellido'];
                                        endforeach;
                                      } ?></h6>
    </div><hr>
    <button class="btn btn-primary btn-crearG" data-bs-toggle="modal" data-bs-target="#crearGrupo" type="submit">Crear Grupo</button>
    <h5>Grupos Creados</h5>
    <div class="groupTotal overflow-y-auto">
      <?php foreach ($datoNomG as $key => $value) {
                                          foreach($value as $v):?>
      <div class="groups-content">
          <div class="group text-center border">
              <div class="group-title">
                  <h5><?php 
                                            echo $v['nombre'];?>
                                          </h5>
              </div>
              <div class="group-btn">
                <form action="paginaGEAdmin" method="POST">
                  <input type="hidden" name="idGrupoSelect" value="<?php echo $v['idGrupo'];?>" required>
                  <input type="hidden" name="nomGrupoEditar" value="<?php echo $v['nombre'];?>">
                  <button class="btn btn-success" type="submit" name="selectG"><ion-icon name="eye-outline"></ion-icon></button>
                  <button class="btn btn-primary" type="button" name="editG" data-bs-toggle="modal" data-bs-target="#editarGrupo"><ion-icon name="pencil-outline"></ion-icon></button>
                  <button class="btn btn-danger" type="button" name="elimG" data-bs-toggle="modal" data-bs-target="#eliminarGrupo"><ion-icon name="trash-outline"></ion-icon></button>
                
                </form>
                
              </div>
          </div>
      </div>
      <?php endforeach;
                                        } ?>
    </div>
  </div>
</div>

<!----------------------- Modal agregar grupo  -->
<div class="modal fade" id="crearGrupo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Nuevo Grupo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">
        <form action="guardarG" method="POST">
          <div class="row g-3">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">¿Como se llamara su Grupo?</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ejemplo: Los Genios" name="nombreG" required>
              
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
               <button type="submit" class="btn btn-success me-md-2" name="btnCrear" value="guardar">Crear</button>
               <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

 <!----------------------- Modal editar grupo  -->
<div class="modal fade" id="editarGrupo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar nombre del Grupo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">
        <form>
          <div class="row g-3">
            <div class="col form-floating mb-3">
              <?php 
              if (isset($_POST['editG'])) { 
                ?>
                <input type="text" class="form-control" id="floatingFname" value="<?php echo $_POST['nomGrupoEditar'] ?>" placeholder="First name">
                <?php
              } else {
                ?>
                <input type="text" class="form-control" id="floatingFname" value="<?php echo  $_SESSION['nomGrupoInic'] ?>" placeholder="First name">
                <?php
              }
              
              ?>
              <label for="floatingFname">Nombre</label>
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

 <!----------------------- Modal eliminar grupo  -->
<div class="modal fade" id="eliminarGrupo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Grupo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>¿Esta seguro que quiere eliminar este grupo?</h4>
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