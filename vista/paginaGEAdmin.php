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
  <!--<a class="navbar-brand btnInicio" href="index">Inicio</a>-->
  <a class="navbar-brand" data-bs-toggle="modal" data-bs-target="#cerrarSession">Salir</a>
  <a class="navbar-brand btnGrupo" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
    <ion-icon name="person-outline"></ion-icon> Perfil
  </a>
</nav>
  <div class="contenedor-ejercicios contenedor-ejercicios-minH col-md-9 animate__animated animate__bounceInRight">
    <div class="row contenedor-listaText">
      <h3 class="text-center">Lista de Integrantes</h3>
      <?php if (!empty($datoNomGT)) {?>
        <h4 class="col">Grupo: "
           <?php
             foreach ($datoNomGT as $key => $value) {
               foreach($value as $v):
                 echo $v['nombre'];
                 $_SESSION['idGrupoInic'] = $v['idGrupo'];
                 $_SESSION['nomGrupoInic'] = $v['nombre'];
               endforeach;
             }
             ?> " <button class="btn btn-outline-light" type="button" name="editG" data-bs-toggle="modal" data-bs-target="#editarGrupo"><ion-icon name="pencil-outline"></ion-icon></button>
            <button class="btn btn-outline-danger" type="button" name="elimG" data-bs-toggle="modal" data-bs-target="#eliminarGrupo"><ion-icon name="trash-outline"></ion-icon></button>
            </h4>
            <button type="button" class="col-2 btn btn-success btn-agregar" data-bs-toggle="modal" data-bs-target="#agregarInt"><ion-icon name="add-outline"></ion-icon>Agregar</button>
            <h5>Codigo: <?php
             foreach ($datoCodG as $key => $value) {
               foreach($value as $v):
                 echo $v['codigo'];
               endforeach;
             }
             ?></h5>
           <?php
           } else {
             echo '<h4 class="col">¡¡ Seleccione un Grupo en Perfil !!</h4>';
           }?>
    </div>
    
    <div class="contenedor-listaInt listEst overflow-y-auto">
      <table class="table tabla-lista justify-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Puntos</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
            <?php 
            
            if (!empty($datoNomEst)) {
               //echo "si hay datos";
               $cont = 1;
               foreach ($datoNomEst as $key => $value) {
                    foreach($value as $v): ?>
          <tr>
            <th scope="row"><?php echo $cont ++;?></th>
            <td><?php echo $v['nombre'] ?></td>
            <td><?php echo $v['apellido']?></td>
            <td><?php echo $v['puntaje'] ?> pts</td>
            <td>
              <input type="hidden" name="nomEstEdit" value="<?php echo $v['nombre'];?>" required>
              <input type="hidden" name="apellEstEdit" value="<?php echo $v['apellido'];?>" required>
              <input type="hidden" name="idEstEdit" value="<?php echo $v['idEstudiante'];?>" required>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarInt<?php echo $v['idEstudiante']?>">Editar</button>
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarInt<?php echo $v['idEstudiante']?>">Eliminar</button>
            </td>
          </tr>
            <?php
            endforeach;
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
              <input type="text" class="form-control" name="nombreE" id="floatingFname" placeholder="First name" required>
              <label for="floatingFname">Nombre</label>
            </div>
            <div class="col form-floating">
              <input type="text" class="form-control" name="apellidoE" id="floatingLname" placeholder="Last name" required>
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

 
<?php 
if (isset($datoNomEst)) {
  foreach ($datoNomEst as $key => $value) 
  foreach($value as $v):
    ?>
 <!----------------------- Modal eliminar integrante  -->
<div class="modal fade" id="eliminarInt<?php echo $v['idEstudiante']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form action="eliminarE" method="POST">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar integrante</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>¿Esta seguro que quiere eliminar a <strong>"<?php echo $v['nombre']?> <?php echo $v['apellido']?></strong>"?</p>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="idEElim" value="<?php echo $v['idEstudiante']?>">
          <input type="hidden" name="idGElim" value="<?php echo $v['idGrupo']?>">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
  endforeach;
} 
?>

<?php 
if (isset($datoNomEst)) {
  foreach ($datoNomEst as $key => $value) 
  foreach($value as $v):
    ?>
    <!----------------------- Modal editar integrante  -->
<div class="modal fade" id="editarInt<?php echo $v['idEstudiante']?>" tabindex="-1" aria-labelledby="editarInt<?php echo $v['idEstudiante']?>Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editarInt<?php echo $v['idEstudiante']?>Label">Editar nombre del integrante</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">
        <form action="editarE" method="POST">
          <div class="row g-3">
            <div class="col form-floating mb-3">
              <input type="text" class="form-control" id="floatingFname" name="nomEEdit" placeholder="First name" value="<?php echo $v['nombre']?>" required>
              <label for="floatingFname">Nombre</label>
            </div>
            <div class="col form-floating">
              <input type="text" class="form-control" id="floatingLname" name="apellEEdit" placeholder="Last name" value="<?php echo $v['apellido']?>" required>
              <label for="floatingLname">Apellido</label>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="idEEdit" value="<?php echo $v['idEstudiante']?>">
              <input type="hidden" name="idGEdit" value="<?php echo $v['idGrupo']?>">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Aceptar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
    <?php
  endforeach;
}
?>

 <!----------------------- Offvanvas perfil de usuario -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Perfil del Maestro</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#EliminarMaestro">Eliminar Perfil</button>
  <div class="offcanvas-body">
    <div class="img-content text-center">
        <img src="vista/img/imgMaestro.png" class="imgUser" alt="">
        <h4><?php foreach ($datoNomP as $key => $value) {
                  foreach($value as $v):
                    echo $v['nombre'];
                    $_SESSION['nombreMaestro'] = $v['nombre'];
                  endforeach;
                } ?></h4>
        <h4><?php foreach ($datoNomP as $key => $value) {
                    foreach($value as $v):
                      echo $v['apellido'];
                      $_SESSION['apellidoMaestro'] = $v['apellido'];
                    endforeach;
                  } ?></h6>
    </div><hr>
    <button class="btn btn-primary btn-crearG" data-bs-toggle="modal" data-bs-target="#crearGrupo" type="submit">Crear Grupo</button>
    <h5>Grupos Disponibles</h5>
    <div class="groupTotal overflow-y-auto">
      <?php 
      if (!empty($datoNomG)) {
        foreach ($datoNomG as $key => $value) {
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
                  <div class="d-grid gap-2 col-4 mx-auto">
                    <input type="hidden" name="idGrupoSelect" value="<?php echo $v['idGrupo'];?>">
                    <input type="hidden" name="nomGrupoEditar" value="<?php echo $v['nombre'];?>">
                    <input type="hidden" name="codGrupoSelect" value="<?php echo $v['codigo'];?>">
                    <button class="btn btn-success" type="submit" name="selectG">Ver Grupo</button>
                
                  </div>
                </form>
                
              </div>
          </div>
      </div>
      <?php endforeach;
                      } ?>
      <?php
      } else {
        ?>
        <div class="groups-content">
          <div class="group text-center border">
              <div class="group-title">
                  <h5>No hay Grupos Creados</h5>
              </div>
          </div>
      </div>
        <?php
      }?>
      
            
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
        <form action="editarG" method="POST">
          <div class="row g-3">
            <div class="col form-floating mb-3">
              <?php 
              if (isset($_POST['editG'])) { 
                ?>
                <input type="text" class="form-control" id="floatingFname" name="nomGEdit" value="<?php echo $_POST['nomGrupoEditar'] ?>" placeholder="First name">
                <?php
              } else {
                ?>
                <input type="text" class="form-control" id="floatingFname" name="nomGEdit" value="<?php echo  $_SESSION['nomGrupoInic'] ?>" placeholder="First name">
                <?php
              }
              
              ?>
              <label for="floatingFname">Nombre</label>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" name="btnEditGroup" class="btn btn-primary">Aceptar</button>
            </div>
          </div>
        </form>
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
      <form action="eliminarG">
        <div class="modal-body">
          <p>¿Esta seguro que quiere eliminar el grupo <strong>"<?php echo $_SESSION['nomGrupoInic'] ?></strong>"?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
      </form>
    </div>
  </div>
</div>

 <!----------------------- Modal eliminar Maestro  -->
<div class="modal fade" id="EliminarMaestro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Perfil</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="eliminarM">
        <div class="modal-body">
          <p>¿Esta seguro que quiere eliminar a <strong> "<?php echo $_SESSION['nombreMaestro']." ".$_SESSION['apellidoMaestro'] ?></strong>"?
        Tambien se borrara todos los grupos e integrantes que existan
        </p>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
      </form>
    </div>
  </div>
</div>

 <!----------------------- Modal cerrar session  -->
<div class="modal fade" id="cerrarSession" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cerrar Sesion</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>¿Esta seguro que quiere salir?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a type="button" href="paginaMenu" class="btn btn-primary">Aceptar</a>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<?php
require_once("layout/footer.php");