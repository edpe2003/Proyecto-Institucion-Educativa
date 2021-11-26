<?php
session_start();
if (!isset($_POST['editar'])) {
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
  <title>Inscripciones</title>
  <?php
  include('../LogicaConexion/view/components/favicon.php');
  include('../LogicaConexion/view/template/const.php');
  echo BOOTSTRAP_CSS;
  ;
  echo TAGS_CSS;
  ?>
</head>

<body class="bgG2">
  
  <?php
  require_once '../LogicaConexion/view/components/userNavbarAdministrador.php';
  require_once '../LogicaConexion/view/template/templateGestionAsignatura.php'
  ?>
  
  
  
  <?
  echo BOOTSTRAP_BUNDLE_JS;
  ?>
  
</body>
</html>