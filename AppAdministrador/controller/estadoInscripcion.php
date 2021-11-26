<?php
include '../../LogicaConexion/model/conexion.php';
include '../../LogicaConexion/model/persona.php';
include '../../LogicaConexion/model/administrador.php';
$administrador = new Administrador;
if (isset($_POST['aprobar'])) {
  $administrador->setId($_POST['idPersona']);
  $resultado = $administrador->aprobarAlumno();
  if ($resultado != null) {
    echo "<script> alert('Usuario Aprobado');
    location.href = '../inscripciones.php';
    </script>";
  }else{
    echo "<script> alert('Error de tiempos');
    location.href = '../inscripciones.php';
    </script>";
  }
}else{
  if (isset($_POST['desaprobar'])) {
    $administrador->setId($_POST['idPersona']);
    $resultado = $administrador->desaprobarAlumno();
    if ($resultado != null) {
      echo "<script> alert('Usuario Eliminado');
      location.href = '../inscripciones.php';
      </script>";
    }else{
      echo "<script> alert('Error de tiempos');
      location.href = '../inscripciones.php';
      </script>";
    }
  }else{
    echo "<script>
    location.href = '../home.php';
    </script>";
  }
}


?>