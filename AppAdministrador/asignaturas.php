<?php
session_start();
if (!$_SESSION['IDPersona']) {
  echo "<script>
    location.href = 'index.php';
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  include('../LogicaConexion/view/components/favicon.php');
  include('../LogicaConexion/view/template/const.php');
  include('../LogicaConexion/view/components/modalCrearAsignatura.php');
  echo BOOTSTRAP_CSS;
  echo FONTAWESOME;
  echo TAGS_CSS;
  echo DATATABLES_CSS;
  ?>
  <title>Asignaturas</title>
</head>

<body class="bgG2">
  <?php
  require_once '../LogicaConexion/view/components/userNavbarAdministrador.php';
  include 'controller/mostrarAsignatura.php';
  ?>
  <div class="d-flex justify-content-center">
    <div class="container d-grid">
      <button type="submit" class="btn btn-primary text-white my-5 mx-3 Brounded" data-bs-toggle="modal" data-bs-target="#ModalAsignatura">Crear</button>
    </div>
  </div>

  <div class="d-flex justify-content-center m-3 p-3">
    <div class="col-12 col-sm-12 col-md-9 col-lg-7 crystal m-3 p-4 shadow Brounded ">
      <div class="table-responsive text-center rounded text-white">
        <table id="tabla" class="table text-white">
          <thead>
            <?php
            require_once '../LogicaConexion/view/template/templateAsignaturasHead.php';
            ?>
          </thead>
          <tbody>
            <?php
            if ($asignaturas != null) {
              $i = 1;
              foreach ($asignaturas as $row) {
                include '../LogicaConexion/view/template/templateAsignaturasBody.php';
              }
            } else {
            ?>
              <h3>No hay Asignaturas registradas</h3>
            <?php
            } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <?php
  echo BOOTSTRAP_BUNDLE_JS;
  echo DATATABLES_PDMAKER_FSFONTS;
  echo DATATABLES_LOCAL_JS;
  ?>
</body>

</html>