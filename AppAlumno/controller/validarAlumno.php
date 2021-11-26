<?php
session_start();
include '../../LogicaConexion/model/conexion.php';
include '../../LogicaConexion/model/persona.php';
include '../../LogicaConexion/model/alumno.php';
$alumno = new Alumno;
$alumno->setCorreo($_POST['mail']);
$alumno->setContraseña($_POST['password']);
$resultado = $alumno->validarAlumno();
if ($resultado != null) {
    if (password_verify($alumno->getContraseña(), $resultado)) {
        $_SESSION['IDPersona'] = $alumno->getId();
        $alumno->activarConexion($_SESSION['IDPersona']);
        $alumno->borrarSolicitudContraseña();
        echo json_encode(["estado"=>0]);
    } else {
        echo json_encode(["estado"=>1]);
    }
} else {
    echo json_encode(["estado"=>2]);
}
