<?php
session_start();
if (!$_SESSION['IDPersona']) {
  echo "<script>
    location.href = 'index.php';
    </script>";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <?php
  include('../LogicaConexion/view/components/favicon.php');
  include('../LogicaConexion/view/template/const.php');
  echo BOOTSTRAP_CSS;
  echo TAGS_CSS;
  ?>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
</head>

<body class="bgG2">

  <?php
  require_once '../LogicaConexion/view/components/userNavbarAdministrador.php';
  ?>

<div class="">
  <?php  require_once('../LogicaConexion/view/template/templateUserHomeAdmin.php'); ?>
</div>

  <?php
  require_once '../LogicaConexion/view/components/altFooter.php';

  echo BOOTSTRAP_BUNDLE_JS;
  ?>
</body>

</html> 