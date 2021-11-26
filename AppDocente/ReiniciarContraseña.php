<?php
include "../LogicaConexion/model/conexion.php";
include "../LogicaConexion/model/persona.php";

$persona = new Persona;

if (!isset($_GET["code"])) {
  echo "<script>
    location.href = '../index.php';
    </script>";
}

$persona->setCodigo($_GET["code"]);
$correo = $persona->comprobarCodigo();

if (!$correo) {
  echo "<script>
    location.href = 'RecuperarContraseña.php';
    </script>";
}

if (isset($_POST["conf"])) {
  if ($_POST["newpass"] == $_POST["confnewpass"]) {
    $persona->setContraseña($_POST["newpass"]);
    $persona->setCorreo($correo);
    $persona->cambiarContraseñaXcorreo();
    echo "<script>
    location.href = 'index.php';
    alert('Contraseña cambiada correctamente');
    </script>";
  } else {
    echo "<script>
    alert('Las contraseñas no coinciden');
    </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reiniciar Contraseña</title>
  <?php
  include('../LogicaConexion/view/template/const.php');
  echo BOOTSTRAP_CSS;
  ;
  echo TAGS_CSS;
  ?>
</head>

<body class="bgG2">

  <?php
  require_once '../LogicaConexion/view/template/templateReiniciarContraseña.php';
  ?>

  <?php
  echo BOOTSTRAP_BUNDLE_JS;
  ?>
</body>

</html>