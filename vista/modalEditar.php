<!----------------------- Modal editar integrante  -->
<div class="modal fade" id="editarInt<?php echo $v['idEstudiante']?>" tabindex="-1" aria-labelledby="editarInt<?php echo $v['idEstudiante']?>Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editarInt<?php echo $v['idEstudiante']?>Label">Editar nombre del integrante</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-center">
        <form>
          <div class="row g-3">
            <div class="col form-floating mb-3">
              <input type="text" class="form-control" id="floatingFname" placeholder="First name" value="<?php echo $v['nombre']?>">
              <label for="floatingFname">Nombre</label>
            </div>
            <div class="col form-floating">
              <input type="text" class="form-control" id="floatingLname" placeholder="Last name" value="<?php echo $v['apellido']?>">
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