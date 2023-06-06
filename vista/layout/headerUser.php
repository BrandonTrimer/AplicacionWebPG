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

 <!----------------------- Offvanvas perfil de usuario -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Perfil de Usuario</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="img-content text-center">
        <img src="vista/img/iconoUser.webp" class="imgUser" alt="">
        <h4>Eduardo</h4>
        <h4>Espinosa Castillo</h6>
    </div><hr>
    <h5>Grupos Creados</h5>
    <div class="groups-content">
        
        <div class="group text-center border">
            <div class="group-title">
                <h5>Los adolecentes mas perrones de la galaxia</h5>
            </div>
            <div class="group-btn">
                <button class="btn btn-primary" type="submit">Editar</button>
                <button class="btn btn-danger" type="submit">Eliminar</button>
            </div>
        </div>
    </div>
  </div>
</div>


 <!----------------------- Modal escoger opcion  -->
<div class="modal fade" id="escogerOpcion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Grupo de Estudio</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row contenedor-ejerN4 justify-content-md-center text-center" data-bs-toggle="modal" data-bs-target="#iniciarGrupo">
          <div class="col-5 colum btn-fondo align-self-center select-conten2">
            <h4>Ingresar a un grupo</h4>
          </div>
          <div class="col-5 colum btn-fondo align-self-center select-conten2" data-bs-toggle="modal" data-bs-target="#crearGrupo">
            <h4>Crear Grupo</h4>
          </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
</div>


 <!----------------------- Modal entrar grupo  -->
<div class="modal fade" id="iniciarGrupo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ingresar al Grupo de Estudio</h1>
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

          <div class="form-floating">
            <input type="text" class="form-control" id="floatingCodigo" placeholder="Password">
            <label for="floatingCodigo">Codigo de Grupo</label>
          </div><hr>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" data-bs-toggle="collapse" href="#collapseExample" aria-controls="collapseExample">
            <label class="form-check-label" for="flexCheckDefault">
              Ingresar como Profesor
            </label>
          </div>

          <div class="collapse" id="collapseExample">
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingCodigo" placeholder="Password">
              <label for="floatingCodigo">Contraseña</label>
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

 <!----------------------- Modal crear grupo  -->
<div class="modal fade" id="crearGrupo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Grupo de Estudio</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">¿Como se llamara su Grupo?</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ejemplo: Los Genios">
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Contraseña</label>
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a href="paginaGEAdmin" type="button" class="btn btn-primary">Aceptar</a>
      </div>
    </div>
  </div>
</div>

