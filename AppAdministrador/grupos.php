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
  echo BOOTSTRAP_CSS;
  echo FONTAWESOME;
  echo TAGS_CSS;
  echo DATATABLES_CSS;
  ?>
  <title>Grupos</title>
</head>

<body class="bgG2">
  <?php
  require_once '../LogicaConexion/view/components/userNavbarAdministrador.php';
  ?>

  <div class="d-flex justify-content-center">
    <div class="container d-grid">
      <button class="btn btn-primary text-white Brounded mt-5 " onclick="window.location.href='crearGrupo.php'">Crear</button>
    </div>
  </div>

  <?php
  include 'controller/mostrarGrupo.php';
  ?>

  <div class="d-flex justify-content-center m-3 p-3">
    <div class="conteiner crystal m-3 p-4 shadow Brounded w-75">
      <div class="table-responsive text-center rounded text-white">
        <table id="tabla" class="table text-white">
          <thead>
            <?php
            require_once '../LogicaConexion/view/template/templateGruposHead.php';
            ?>
          </thead>
          <tbody>
            <?php
            if ($grupos != null) {
              $i = 1;
              foreach ($grupos as $row) {
                include '../LogicaConexion/view/template/templateGruposBody.php';
                $i++;
              }
            } else {
            ?>
              <h3>No hay Grupos registradas</h3>
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