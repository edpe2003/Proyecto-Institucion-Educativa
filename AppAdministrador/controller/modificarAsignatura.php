<?php
session_start();
if ($_SESSION['IDPersona'] && isset($_POST['editar'])) {
  include '../../LogicaConexion/model/conexion.php';
  include '../../LogicaConexion/model/persona.php';
  include '../../LogicaConexion/model/administrador.php';

  $administrador = new Administrador;
  $resultado = $administrador->modificarAsignatura($_POST['nomAsignatura'], $_POST['idAsignatura']);
  if ($resultado != 1) {
    echo "<script> alert('Asignatura duplicada');
        location.href = '../asignaturas.php';
        </script>";
  }else{
    echo "<script> alert('Asignatura modificado correctamente');
        location.href = '../asignaturas.php';
        </script>";
  }
}else{
  echo "<script>
    location.href = '../index.php';
    </script>";
}

?>