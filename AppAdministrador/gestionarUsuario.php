<?php
session_start();
error_reporting(0);
if (!$_SESSION['IDPersona']) {
  echo "<script>
    location.href = 'home.php';
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
  ;
  echo TAGS_CSS;
  ?>
  <title>Gestion Usuario</title>
</head>
<body class="bgG2">
  <?php
  require_once '../LogicaConexion/view/components/userNavbarAdministrador.php';
  
  include 'controller/mostrarDatosAlumno.php';

  if ($data != null) {
    include '../LogicaConexion/view/template/templateGestionAlumno.php';
  }


  echo BOOTSTRAP_BUNDLE_JS;
  ?>
</body>
</html>