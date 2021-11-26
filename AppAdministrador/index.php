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
  include('../LogicaConexion/view/template/const.php');
  echo BOOTSTRAP_CSS;
  ;
  echo TAGS_CSS;
  ?>
</head>

<body class="bg-dark">
  <div class="container rel">
    <div>
      <form action="controller/validarAdministrador.php" method="post">
        <?php
        require_once '../LogicaConexion/view/template/templateLoginAdmin.php';
        ?>
      </form>
    </div>
  </div>
  <?php
  require_once '../LogicaConexion/view/components/footer.php';
  echo BOOTSTRAP_BUNDLE_JS;
  ?>
</body>

</html>