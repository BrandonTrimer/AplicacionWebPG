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

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand btnInicio" href="index">Inicio</a>
    <a class="navbar-brand" href="paginaMenu">Menu</a>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"> </ul>
      <a class="navbar-brand btnGrupo" data-bs-toggle="modal" data-bs-target="#escogerOpcion">
        <ion-icon name="library-outline"></ion-icon> Grupo de Estudio
      </a>
    </div>
  </div>
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
        <div class="row contenedor-ejerN4 justify-content-md-center text-center">
          <div class="col-5 colum btn-fondo align-self-center select-conten2">
            <h4>Ingresar a un grupo</h4>
          </div>
          <div class="col-5 colum btn-fondo align-self-center select-conten2"  data-bs-toggle="modal" data-bs-target="#iniciarGrupo">
            <h4>Ingresar como lider</h4>
          </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
</div>

 <!----------------------- Modal escoger opcion  -->
<div class="modal fade" id="ingresarCodigo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Grupo de Estudio</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row contenedor-ejerN4 justify-content-md-center text-center">
          <div class="col-5 colum btn-fondo align-self-center select-conten2">
            <h4>Ingresar nombre del grupo</h4>
          </div>
          <div class="col-5 colum btn-fondo align-self-center select-conten2"  data-bs-toggle="modal" data-bs-target="#iniciarGrupo">
            <h4>Ingresar el codigo</h4>
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Grupo de Estudio</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Nombre del Grupo</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Contraseña</label>
          </div>
        </form>
        <hr>
        <h2 class="fs-5">¿No tiene Grupo?</h2>
        <p>Selecciona <a href="#" data-bs-toggle="modal" data-bs-target="#crearGrupo" title="Nuevo grupo">"Crear Grupo"</a> para que puedas agregar a mas personas!!</p>
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
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">¿Como se llamara su Grupo?</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ejemplo: Los Genios">
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Contraseña</label>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre de Usuario</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ejemplo: Prof. Lucas, Esteban Gonzales">
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

