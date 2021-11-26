<?php
include "../../LogicaConexion/model/conexion.php";
include "../../LogicaConexion/model/persona.php";
include "../../LogicaConexion/model/docente.php";
if (isset($_POST['registro'])) {
  $persona = new Persona;
  if ($_POST['Passwd'] == $_POST['VerfPasswd']) {
    $persona->setContraseña(password_hash($_POST['Passwd'], PASSWORD_BCRYPT));
  } else {
    echo "<script> alert('contraseña no coinciden');
        location.href = '../register.php';
        </script>";
  }
  $persona->setNombre($_POST['Name']);
  $persona->setSegundoNombre($_POST['SecondName']);
  $persona->setApellido($_POST['LastName']);
  $persona->setSegundoApellido($_POST['ScndLastName']);
  $persona->setCi($_POST['Ci']);
  $persona->setCorreo($_POST['Email']);
  $docente = new Docente;
  $resultado = $docente->insertarDocente($persona);
  if ($resultado == 1) {
    echo "<script>
        location.href = '../index.php';
        </script>";
  } else {
    echo "<script> alert('error');
        location.href = '../register.php';
        </script>";
  }
} else {
  echo "<script>
        location.href = '../register.php';
        </script>";
}
