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
  <title>Grupos</title>
  <?php
  include('../LogicaConexion/view/template/const.php');
  echo BOOTSTRAP_CSS;
  echo TAGS_CSS;
  echo FONTAWESOME;
  ?>
</head>

<body class="bgG2">
  <?php
  require_once '../LogicaConexion/view/components/userNavbar.php';
  ?>

  <div class="d-flex justify-content-center m-3 p-3">
    <div class="conteiner crystal m-3 p-4 shadow Brounded w-75">
      <div class="table-responsive text-center rounded">
        <section id="recargar"></section>
      </div>
    </div>
  </div>

  <?php
  echo BOOTSTRAP_BUNDLE_JS;
  ?>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="js/recargar_pagina.js"></script>
</body>

</html>