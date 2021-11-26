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
  <title>Bandeja entrada</title>
  <?php
  include('../LogicaConexion/view/template/const.php');
  include('../LogicaConexion/view/components/favicon.php');
  echo BOOTSTRAP_CSS;
  echo TAGS_CSS;
  echo FONTAWESOME;
  ?>
</head>

<body class="bgG2 text-white">
  <?php include '../LogicaConexion/view/components/userNavbar.php'; ?>
  <div class="conteiner crystal m-3 p-3 shadow Brounded">
    <div class="table-responsive text-center rounded">
      <table class="table p__white text-white">
        <thead>
          <?php
          // llamo al diseño del header de la tabla
          include(DIR_LOGICA . "/view/template/templateTHeadA.php");
          ?>
        </thead>
        <tbody>
          <?php
          include('controller/mostrarConsultaAlumno.php');
          if ($respuesta != null) {
            $contador = 1;
            for ($i = 0; $i < count($IDConsulta); $i++) {
              include(DIR_LOGICA . "/view/template/templateTContA.php");
              $contador++;
            }
          } else {
            echo "No hay Consultas";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <?php
  echo BOOTSTRAP_JS;
  echo JQUERY;
  ?>
</body>

</html>