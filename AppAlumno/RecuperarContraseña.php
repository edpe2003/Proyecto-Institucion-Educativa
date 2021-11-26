<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recuperar Contraseña</title>

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
  require_once '../LogicaConexion/view/template/templateRecuperarContraseña.php';
  ?>

  <?php
  //require_once '../LogicaConexion/view/components/footer.php';
  echo BOOTSTRAP_BUNDLE_JS;
  ?>
</body>

</html>