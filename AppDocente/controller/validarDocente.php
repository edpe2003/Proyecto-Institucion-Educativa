<?php
session_start();
include '../../LogicaConexion/model/conexion.php';
include '../../LogicaConexion/model/persona.php';
include '../../LogicaConexion/model/docente.php';
$docente = new Docente();
$docente->setCorreo($_POST['mail']);
$docente->setContraseña($_POST['password']);
$resultado = $docente->validarDocente();
if ($resultado != null) {
    if (password_verify($docente->getContraseña(), $resultado)) {
        $_SESSION['IDPersona'] = $docente->getId();
        $docente->activarConexion($_SESSION['IDPersona']);
        echo json_encode(["estado"=>0]);
    } else {
        echo json_encode(["estado"=>1]);
    }
} else {
    echo json_encode(["estado"=>2]);
}
