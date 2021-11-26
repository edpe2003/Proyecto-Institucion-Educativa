
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  
  <?php
  include('../LogicaConexion/view/components/favicon.php');
  include('../LogicaConexion/view/template/const.php');
  echo BOOTSTRAP_CSS;
  ;
  echo TAGS_CSS;
  ?>
</head>

<body class="bgDocente">
  <?php 
  require_once '../LogicaConexion/view/components/navbarD.php'; 
  ?>

  <div class="container rel">
    
    <form action="controller/insertarDocente.php" method="post">
      <?php
      include(DIR_TEMPLATE . '/templateRegisterDocente.php');
      ?>
    </form>

  </div>

  <!--Llamado a script Bootstrap y popper-->
  <?php
  require_once '../LogicaConexion/view/components/footer.php';
  echo BOOTSTRAP_BUNDLE_JS;
  ?>
</body>
</html>