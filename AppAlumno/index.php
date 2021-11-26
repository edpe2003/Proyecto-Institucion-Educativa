<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in</title>
  <?php
  include('../LogicaConexion/view/components/favicon.php');
  ?>
  <title>Log in</title>
  <!--Llamado a links de bootstrap y constantes-->
  <?php
  include('../LogicaConexion/view/template/const.php');
  echo BOOTSTRAP_CSS;
  echo TAGS_CSS;
  ?>
</head>

<body class="bgAlumno">
  <?php require_once '../LogicaConexion/view/components/navbar.php' ?>

  <div class="container rel">
    <div>
      <form action="controller/validarAlumno.php" method="post">
        <?php
        require_once '../LogicaConexion/view/template/templateLogin.php';
        ?>
      </form>
    </div>
  </div>
  <?php
  require_once '../LogicaConexion/view/components/footer.php';
  echo BOOTSTRAP_BUNDLE_JS;
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
  <script src="js/captcha.js"></script>
</body>

</html>