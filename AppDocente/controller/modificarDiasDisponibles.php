<?php
session_start();
include '../../LogicaConexion/model/conexion.php';
include '../../LogicaConexion/model/persona.php';
include '../../LogicaConexion/model/docente.php';
if (isset($_POST['Dias'])) {
  $Dias = array('0', '0', '0', '0', '0');
  for ($i = 0; $i < count($Dias); $i++) {
    if (isset($_POST[$i])) {
      $input = $_POST[$i];
      if ($input == 'on') {
        $Dias[$i] = $i + 1;
      } else {
        $Dias[$i] = 0;
      }
    }
  }
  $docente = new Docente();
  $docente->setId($_SESSION['IDPersona']);
  $docente->setDiasDisponibles($Dias);
  $docente->ModificarDiasDisponibles();
  echo "<script>
    location.href = '../perfil.php';
    </script>";
} else {
  echo "<script>
  location.href = '../register.php';
  </script>";
}
