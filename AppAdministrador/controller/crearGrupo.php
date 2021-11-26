<?php
session_start();
error_reporting(0);
if (!$_SESSION['IDPersona']) {
  echo "<script>
    location.href = 'index.php';
    </script>";
}
include '../../LogicaConexion/model/conexion.php';
include '../../LogicaConexion/model/persona.php';
include '../../LogicaConexion/model/administrador.php';
$administrador = new Administrador;
$asignaturasBD = $administrador->mostrarAsignatura();
$c=0;

foreach ($asignaturasBD as $row) {
  if ($_POST[$row["IDAsignatura"]]) {
    $idAsignaturasSeleccionadas[$c] = $_POST["ID". $row["IDAsignatura"]];
    $c++;
  }
}
if (!$idAsignaturasSeleccionadas) {
  echo "<script>alert('Grupo sin Asignaturas');
        location.href = '../crearGrupo.php';
        </script>";
}else {
  $resultado = $administrador->crearGrupo($_POST['nombreGrupo'], $_POST['nombreOrientacion'], $idAsignaturasSeleccionadas);

  if ($resultado != null) {
    echo "<script>
          location.href = '../grupos.php';
          </script>";
  }else {
    echo "<script> alert('Este grupo ya existe');
          location.href = '../crearGrupo.php';
          </script>";
  }
}

?>