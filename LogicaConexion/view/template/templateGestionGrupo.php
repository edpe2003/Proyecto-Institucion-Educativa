<div class="container p-5 bg-white my-5 Brounded shadow w-50">
  <div class="mb-5">
    <h1 style="text-align:center">Datos Grupo</h1>

    <form action="controller/modificarGrupo.php" method="post">

      <input type="hidden" name="idGrupo" value="<?php echo $_POST['idGrupo'] ?>">

      <div class="input-group m-3">
        <span class="input-group-text" id="nombre">Nombre:</span>
        <input type="text" class="form-control" value="<?php echo $_POST['nombre'] ?>" name="nombre" aria-label="nombre" aria-describedby="basic-addon1">
      </div>
      <div class="input-group m-3">
        <span class="input-group-text" id="nombre">orientacion:</span>
        <input type="text" class="form-control" value="<?php echo $_POST['orientacion'] ?>" name="orientacion" aria-label="orientacion" aria-describedby="basic-addon1">
      </div>

      <div>

        <?php

        if ($asignaturas != null) {
          $i = 0;
          foreach ($asignaturas as $row) {
        ?>

            <div class="Brounded text-start" style="margin-left: 40%; margin-bottom:5px;">
              <div class="text-dark">
                <?php
                if ($asignaturaGrupo[$i]['IDAsignatura'] == $row['IDAsignatura']) {
                  $i++;
                ?>
                  <input class="mr-2 " type="checkbox" checked value="on" name="<?php echo $row['IDAsignatura']; ?>">
                <?php

                } else {
                ?>
                  <input class="mr-2 " type="checkbox" name="<?php echo $row['IDAsignatura']; ?>">
                <?php
                }

                ?>

                <label class="ml-2" for="<?php echo $row['IDAsignatura']; ?>">
                  <strongB><?php echo $row['NomAsignatura']; ?></strongB>
                </label>

                <input type="hidden" value="<?php echo $row['IDAsignatura']; ?>" name="<?php echo "ID" . $row['IDAsignatura']; ?>">
              </div>
            </div>
          <?php
          }
        } else {
          ?>
          <div class="text-center">
            <h3>No hay Asignaturas registradas</h3>
          </div>
        <?php
        }

        ?>

      </div>

      <div class="d-flex justify-content-between my-4">
        <button class="btn btn-danger" type="submit" name="eliminar">Eliminar Grupo</button>
        <a href="grupos.php" class="btn btn-warning" style="color: black; text-decoration: none;">Cancelar</a>
        <button class="btn btn-success" type="submit" name="editar">Confirmar</button>
      </div>

    </form>
  </div>
</div>