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
  <a class="navbar-brand btnGrupo" data-bs-toggle="modal" data-bs-target="#escogerOpcion">
    <ion-icon name="library-outline"></ion-icon> Grupo de Estudio
  </a>

  <!--<div class="container-fluid">
    <a class="navbar-brand btnInicio" href="index">Inicio</a>
    <a class="navbar-brand" href="paginaMenu">Menu</a>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav justify-content-end"> </ul>
      <a class="navbar-brand btnGrupo" data-bs-toggle="modal" data-bs-target="#escogerOpcion">
        <ion-icon name="library-outline"></ion-icon> Grupo de Estudio
      </a>
    </div>
  </div>-->
</nav>


 <!----------------------- Modal escoger opcion  -->
<div class="modal fade" id="escogerOpcion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Grupo de Estudio</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row contenedor-ejerN4 justify-content-lg-center text-center" data-bs-toggle="modal" data-bs-target="#escogerMaEs">
          <div class="col-4 col-lg-5 colum btn-fondo align-self-center select-conten2">
            <h4>Ingresar a un grupo</h4>
          </div>
          <div class="col-4 col-lg-5 colum btn-fondo align-self-center select-conten2" data-bs-toggle="modal" data-bs-target="#crearGrupo">
            <h4>Crear Grupo</h4>
          </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
</div>

 <!----------------------- Modal escoger entre estudiante o maestro  -->
<div class="modal fade" id="escogerMaEs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Grupo de Estudio</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row contenedor-ejerN4 justify-content-lg-center text-center" data-bs-toggle="modal" data-bs-target="#formularioE">
          <div class="col-4 col-lg-5 colum btn-fondo align-self-center select-conten2">
            <h4>Ingresar como Estudiante</h4>
          </div>
          <div class="col-4 col-lg-5 colum btn-fondo align-self-center select-conten2" data-bs-toggle="modal" data-bs-target="#formularioM">
            <h4>Ingresar como Maestro</h4>
          </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
</div>


 <!----------------------- Modal entrar grupo maestro -->
<div class="modal fade" id="formularioM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ingresar al Grupo de Estudio</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">

        <form action="loginM" method="POST">
          <div class="row g-3">
            <div class="col form-floating mb-3">
              <input type="text" class="form-control" name="nombre" id="floatingFnameM" placeholder="First name" required>
              <label for="floatingFnameM">Nombre</label>
            </div>
            <div class="col form-floating">
              <input type="text" class="form-control" name="apellido" id="floatingLnameM" placeholder="Last name" required>
              <label for="floatingLnameM">Apellido</label>
            </div>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" name="password" id="floatingCodigoM" placeholder="Password" required>
            <label for="floatingCodigoM">Contraseña</label>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#escogerMaEs">Volver</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success" name="btnLogin">Aceptar</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>

 <!----------------------- Modal entrar grupo estudiante -->
<div class="modal fade" id="formularioE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ingresar al Grupo de Estudio</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">

        <form action="loginE" method="POST">
          <div class="row g-3">
            <div class="col form-floating mb-3">
              <input type="text" class="form-control" name="nombre" id="floatingFnameE" placeholder="First name" required>
              <label for="floatingFnameE">Nombre</label>
            </div>
            <div class="col form-floating">
              <input type="text" class="form-control" name="apellido" id="floatingLnameE" placeholder="Last name" required>
              <label for="floatingLnameE">Apellido</label>
            </div>
          </div>
          
          <div class="form-floating">
              <input type="text" class="form-control" name="codigo" id="floatingCodigo" placeholder="Password" required>
              <label for="floatingCodigo">Codigo de Grupo</label>
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#escogerMaEs">Volver</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success" name="btnLogin">Aceptar</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
 <!----------------------- Modal crear grupo  -->
<div class="modal fade" id="crearGrupo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Grupo de Estudio</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="agregarM" method="POST">
          <div class="row g-3">
            <div class="col form-floating mb-3">
              <input type="text" class="form-control" name="nombreM" id="floatingFnameG" placeholder="First name" required>
              <label for="floatingFnameG">Nombre</label>
            </div>
            <div class="col form-floating">
              <input type="text" class="form-control" name="apellidoM" id="floatingLnameG" placeholder="Last name" required>
              <label for="floatingLnameG">Apellido</label>
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">¿Como se llamara su Grupo?</label>
            <input type="text" class="form-control" name="nombreG" id="exampleFormControlInput1" placeholder="Ejemplo: Los Genios" required>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Contraseña</label>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button href="paginaGEAdmin" type="submit" class="btn btn-primary">Aceptar</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

