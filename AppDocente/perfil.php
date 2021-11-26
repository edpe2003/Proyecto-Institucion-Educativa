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
  <?php
  include('../LogicaConexion/view/components/favicon.php');
  ?>
  <title>Mi Perfil</title>
  <!--Llamado a links de bootstrap y constantes-->
  <?php
  include('../LogicaConexion/view/template/const.php');
  echo BOOTSTRAP_CSS;
  echo TAGS_CSS;
  ?>
</head>

<body class="bgPerfil">
  <?php
  include '../LogicaConexion/model/conexion.php';
  include '../LogicaConexion/model/persona.php';

  include('controller/VerDatosDocente.php');
  include('controller/mostrarFondoChat.php');
  include('controller/mostrarAvatar.php');
  require_once '../LogicaConexion/view/components/userNavbarDocente.php';
  ?>
  <div class="container d-flex justify-content-center">
    <div class="col-12 col-sm-12 col-md-9 col-lg-7">
      <?php
      require_once DIR_TEMPLATE . '/templateVerPerfilDocente.php';
      include(DIR_TEMPLATE . '/templateModificarPerfilDocente.php');
      include(DIR_TEMPLATE . '/templateCambiarFondo.php');
      include(DIR_TEMPLATE . '/templateEliminarCuentaDocente.php');
      ?>
    </div>
  </div>
  <?php
  include('../LogicaConexion/view/components/footer.php');
  echo BOOTSTRAP_BUNDLE_JS;
  echo FONTAWESOME;
  echo JQUERY;
  ?>
  <script src="js/img.js"></script>
  <script src="js/fondo.js"></script>
  <script src="js/eliminarCuenta.js"></script>
</body>

</html>