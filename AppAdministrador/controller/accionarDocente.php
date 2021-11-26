<?php
error_reporting(0);
include '../../LogicaConexion/model/conexion.php';
include '../../LogicaConexion/model/persona.php';
include '../../LogicaConexion/model/administrador.php';
$administrador = new Administrador;
$administrador->setId($_POST['IDDocente']);
$asignaturasBD = $administrador->mostrarAsignatura();
$gruposBD = $administrador->mostrarGrupo();
$idAsignaturasSeleccionadas = array();
$idGruposSeleccionados = array();
if (isset($_POST['Validar'])) {
  foreach ($asignaturasBD as $row) {
    if ($_POST["Asg" . $row["IDAsignatura"]]) {
      array_push($idAsignaturasSeleccionadas, $_POST["IDAsg" . $row["IDAsignatura"]]);
    }
  }
  foreach ($gruposBD as $row) {
    if ($_POST["Grp" . $row["IDGrupo"]]) {
      array_push($idGruposSeleccionados, $_POST["IDGrp" . $row["IDGrupo"]]);
    }
  }

  if ($idAsignaturasSeleccionadas && $idGruposSeleccionados) {
    $administrador->validarDocenteGrupo($idGruposSeleccionados, $idAsignaturasSeleccionadas);
    $administrador->validarDocenteAsignatura($idAsignaturasSeleccionadas);
    echo "<script>
    location.href = '../inscripcionesDocente.php';
    </script>";
  } else {
    echo "<script>alert('Tiene que seleccionar como minimos 1 Grupo y 1 Asignatura');
    location.href = '../inscripcionesDocente.php';
    </script>";
  }
}

if (isset($_POST['Eliminar'])) {
  $administrador->eliminarDocente();
  echo "<script>alert;
  location.href = '../inscripcionesDocente.php';
  </script>";
}
