<?php
session_start();
include '../../LogicaConexion/model/conexion.php';
include '../../LogicaConexion/model/persona.php';
include '../../LogicaConexion/model/alumno.php';
if (isset($_POST['nick'])) {
    $alumno = new Alumno();
    $alumno->setNickName($_POST['nickname']);
    $alumno->setId($_SESSION['IDPersona']);
    $resultado = $alumno->ModificarNickAlumno();
    if ($resultado == 1) {
        echo "<script>
                location.href = '../perfil.php';
                </script>";
    } else {
        echo "<script> alert('error');
                location.href = '../perfil.php';
                </script>";
    }
} else {
    echo "<script>
    location.href = '../register.php';
    </script>";
}
