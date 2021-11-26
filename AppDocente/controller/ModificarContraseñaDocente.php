<?php
session_start();
include '../../LogicaConexion/model/conexion.php';
include '../../LogicaConexion/model/persona.php';
include '../../LogicaConexion/model/docente.php';
if (isset($_POST['pass'])) {
    $docente = new Docente();
    if ($_POST['nueva'] == $_POST['confnueva']) {
        $docente->setContraseña($_POST['nueva']);
        $docente->setId($_SESSION['IDPersona']);
        $contraseñaDB = $docente->devolverContraseñaDocente();
        if (password_verify($_POST['antigua'], $contraseñaDB)) {
            $docente->ModificarContraseñaDocente();
            echo "<script>
            location.href = '../perfil.php';
            </script>";
        } else {
            echo "<script> alert('Contraseña incorrecta');
            location.href = '../perfil.php';
            </script>";
        }
    } else {
        echo "<script> alert('No coinciden las contraseñas');
        location.href = '../perfil.php';
        </script>";
    }
} else {
    echo "<script>
    location.href = '../register.php';
    </script>";
}
