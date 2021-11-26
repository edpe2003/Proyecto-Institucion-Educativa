<?php
session_start();
error_reporting(0);
include '../../LogicaConexion/model/conexion.php';
include '../../LogicaConexion/model/persona.php';
include '../../LogicaConexion/model/administrador.php';

$administrador = new Administrador;

if ($_SESSION['IDPersona'] && isset($_POST['editar'])) {
  $resultado = $administrador->modificarGrupo($_POST['idGrupo'], $_POST['nombre'], $_POST['orientacion']);
  if ($resultado != 1) {
    if ($resultado == 2) {
      echo "<script> alert('Grupo con nombre y orientacion duplicado');
        location.href = '../grupos.php';
        </script>";
    }else{
      echo "<script> alert('Error al modificar el grupo');
        location.href = '../grupos.php';
        </script>";
    }
    
  }else{
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
            location.href = '../grupos.php';
            </script>";
    }else {
      $resultado = $administrador->modificarGrupoAsignatura($_POST['idGrupo'], $idAsignaturasSeleccionadas);

      echo "<script>
              location.href = '../grupos.php';
              </script>";
    }
  }
}else{
  if ($_SESSION['IDPersona'] && isset($_POST['eliminar'])) {
    $administrador->bajaGrupo($_POST['idGrupo']);
    echo "<script>alert('Grupo Eliminado');
    location.href = '../grupos.php';
    </script>";
  }else {
    echo "<script>
    location.href = '../index.php';
    </script>";
  }
  
}

?>