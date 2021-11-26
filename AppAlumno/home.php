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
  include('../LogicaConexion/model/conexion.php');
  include('../LogicaConexion/model/chat.php');
  include '../LogicaConexion/model/persona.php';
  include '../LogicaConexion/model/alumno.php';
  include 'controller/mostrarFondoChat.php';

  echo BOOTSTRAP_CSS;
  echo TAGS_CSS;
  echo FONTAWESOME;
  ?>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
  <title>Home</title>
</head>

<body class="bgG noScroll">
  <?php
  require_once '../LogicaConexion/view/components/userNavbarHome.php';
  require_once '../LogicaConexion/view/template/templateUserHome.php';
  require_once '../LogicaConexion/view/components/altFooter.php';
  ?>
  <?php
  echo SIDEBAR_JS;
  echo JQUERY;
  echo BOOTSTRAP_BUNDLE_JS;
  ?>
  <script src="js/recargar_chat.js"></script>
  <script src="js/recargar_chats_responsive.js"></script>
  <script src="js/funciones.js"></script>
  <script src="js/recargar_pagina.js"></script>
</body>
</html>