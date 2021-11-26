<?php
session_start()
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ver Consultas</title>

  <!--Llamado a links de bootstrap y constantes-->
  <?php
  include('../LogicaConexion/view/components/favicon.php');
  include('../LogicaConexion/view/template/const.php');
  echo BOOTSTRAP_CSS;
  ;
  echo TAGS_CSS;
  echo FONTAWESOME;
  ?>
</head>

<body class="bgG2">

  <?php
  require_once '../LogicaConexion/view/components/userNavbar.php';
  ?>
  <div class="container rel">

    <?php
    include('controller/verConsultaAlumno.php');
    include('../LogicaConexion/view/template/templateMostrarConsulta.php');
    ?>
  </div>
  <?php
  echo BOOTSTRAP_BUNDLE_JS;
  ?>
</body>
</html>
