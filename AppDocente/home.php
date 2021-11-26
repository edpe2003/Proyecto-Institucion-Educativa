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
  <script src="js/funciones.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
  <title>Home</title>
  <?php
  include('../LogicaConexion/view/components/favicon.php');
  include('../LogicaConexion/view/template/const.php');
  echo JQUERY;
  echo BOOTSTRAP_CSS;
  ;
  echo TAGS_CSS;
  echo BOOTSTRAP_BUNDLE_JS;
  echo FONTAWESOME;
  echo SIDEBAR_JS;
  ?>
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
</head>

<body class="bgG">
  <?php
  include('../LogicaConexion/model/conexion.php');
  include('../LogicaConexion/model/chat.php');
  include '../LogicaConexion/model/persona.php';
  include '../LogicaConexion/model/docente.php';
  include 'controller/mostrarFondoChat.php';
  require_once '../LogicaConexion/view/components/userNavbarDocenteHome.php';
  require_once('../LogicaConexion/view/template/templateUserHomeDocente.php');
  require_once '../LogicaConexion/view/components/altFooter.php';
  ?>
  <script src="js/recargar_chat.js"></script>
  <script src="js/recargar_pagina.js"></script>
  <script src="js/recargar_chats_responsive.js"></script>
  <script src="js/funciones.js"></script>
</body>

</html>