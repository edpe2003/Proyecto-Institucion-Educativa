<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat</title>
  
  <?php
  include('../LogicaConexion/view/components/favicon.php');
  include('../LogicaConexion/view/template/const.php');
  echo BOOTSTRAP_CSS;
  ;
  echo TAGS_CSS;
  echo FONTAWESOME;
  ?>
</head>

<body class="bgG">
  <?php

  require_once '../LogicaConexion/view/components/navBarDocente.php';

  include('../LogicaConexion/view/template/templateProduccion.php');

  echo BOOTSTRAP_BUNDLE_JS;
  ?>
</body>

</html>