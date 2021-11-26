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
  <title>Inscripciones</title>
  <?php
  include('../LogicaConexion/view/components/favicon.php');
  include('../LogicaConexion/view/template/const.php');
  echo BOOTSTRAP_CSS;
  echo FONTAWESOME;
  echo TAGS_CSS;
  echo DATATABLES_CSS;
  ?>
</head>

<body class="bgG2">
  <?php
  require_once '../LogicaConexion/view/components/userNavbarAdministrador.php';
  include('controller/mostrarPeticionesAlumno.php');
  if ($data != null) {
  ?>
    <div class=" d-flex justify-content-center m-3 p-3">
      <div class="conteiner crystal  m-3 p-3  shadow Brounded w-75">
        <div class="table-responsive text-center rounded text-white">
          <table id="tabla" class="table text-white">
            <thead>
              <?php
              include '../LogicaConexion/view/template/templateTHeadAd.php';
              $contador = 1;
              ?>
            </thead>
            <tbody>
            <?php
            foreach ($data as $row) {
              include '../LogicaConexion/view/template/templateTContAd.php';
              $contador++;
            }
          } else {
            require_once('../LogicaConexion/view/components/noIncripcionesAdmin.php');
          }
            ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <?php
    //require_once '../LogicaConexion/view/components/altFooter.php';
    echo BOOTSTRAP_BUNDLE_JS;
    echo DATATABLES_PDMAKER_FSFONTS;
    echo DATATABLES_LOCAL_JS;
    ?>
</body>

</html>