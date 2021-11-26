<?php
session_start();
if (!$_SESSION['IDPersona']) {
  echo "<script>
    location.href = 'index.php';
    </script>";
}
include '../../LogicaConexion/model/conexion.php';
include '../../LogicaConexion/model/persona.php';
include '../../LogicaConexion/model/administrador.php';

$administrador = new Administrador;
$resultado = $administrador->crearAsignatura($_POST['nombreAsg']);

if ($resultado != null) {
  echo "<script>
        location.href = '../asignaturas.php';
        </script>";
}else {
  echo "<script> alert('Esta asignatura ya existe');
        location.href = '../asignaturas.php';
        </script>";
}
?>