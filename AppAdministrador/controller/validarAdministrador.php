<?php
session_start();
include '../../LogicaConexion/model/conexion.php';
include '../../LogicaConexion/model/persona.php';
include '../../LogicaConexion/model/administrador.php';
if (isset($_POST['login'])) {
    $administrador = new Administrador;
    $administrador->setCorreo($_POST['mail']);
    $administrador->setContraseña($_POST['password']);
    $resultado = $administrador->validarAdministrador();
    if ($resultado != null) {
        if (password_verify($administrador->getContraseña(), $resultado)) {
            $_SESSION['IDPersona'] = $administrador->getId();
            echo "<script>
            location.href = '../home.php';
            </script>";
        }else{
            echo "<script> alert('Usuario no encontrado');
            location.href = '../index.php';
            </script>";
        }
    } else {
        echo "<script> alert('Usuario no encontrado');
                location.href = '../index.php';
                </script>";
    }
} else {
    echo "<script>
    location.href = '../index.php';
    </script>";
}
