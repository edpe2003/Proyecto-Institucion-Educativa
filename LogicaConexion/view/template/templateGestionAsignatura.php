<div class="container p-5 bg-white my-5 Brounded shadow w-50">
  <div class="mb-5">
    <h1 style="text-align:center">Datos Asignatura</h1>

    <form action="controller/modificarAsignatura.php" method="post">

      <input type="hidden" name="idAsignatura" value="<?php echo $_POST['idAsignatura'] ?>">

      <div class="input-group m-3">
        <span class="input-group-text" id="nomAsignatura">Nombre:</span>
        <input type="text" class="form-control" value="<?php echo $_POST['nomAsignatura'] ?>" name="nomAsignatura" aria-label="nomAsignatura" aria-describedby="basic-addon1">
      </div>

      <div class="container">
        <div class="row">
          <div class="col">
            <a href="asignaturas.php" class="btn btn-danger" style="color: white; text-decoration: none;">Cancelar</a>
          </div>
          <div class="col d-flex justify-content-end">
            <button class="btn btn-success" type="submit" name="editar">Confirmar</button>
          </div>
        </div>
    </form>
  </div>
</div>