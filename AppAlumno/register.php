<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  include('../LogicaConexion/view/components/favicon.php');
  ?>
  <title>Register</title>
  <!--Llamado a links de bootstrap y constantes-->
  <?php
  include('../LogicaConexion/view/template/const.php');
  echo BOOTSTRAP_CSS;
  ;
  echo TAGS_CSS;
  ?>
</head>

<div>
  <?php require_once '../LogicaConexion/view/components/navbar.php' ?>
</div>

<body class="bgAlumno">
  <?php
  include 'controller/mostrarGrupo.php';
  ?>
  <div class="container rel">
    <form action="controller/insertarAlumno.php" method="post">
      <?php
      include(DIR_TEMPLATE . '/templateRegister.php');
      ?>
    </form>
  </div>
  <div>
    <?php require_once '../LogicaConexion/view/components/footer.php' ?>
  </div>
  <?php
  echo BOOTSTRAP_BUNDLE_JS;
  ?>
</body>

</html>