<?php
session_start();
include '../../LogicaConexion/model/conexion.php';
include '../../LogicaConexion/model/persona.php';
include '../../LogicaConexion/model/alumno.php';

if (isset($_POST['pass'])) {

    $alumno = new Alumno;
    if ($_POST['nueva'] == $_POST['confnueva']) {
        $alumno->setContraseña($_POST['nueva']);
        $alumno->setId($_SESSION['IDPersona']);
        $contraseñaDB = $alumno->devolverContraseñaAlumno();

        if (password_verify($_POST['antigua'], $contraseñaDB)) {
            $alumno->ModificarContraseñaAlumno();
            echo "<script>
            location.href = '../perfil.php';
            </script>";
        }else {
            echo "<script> alert('Contraseña incorrecta');
            location.href = '../perfil.php';
            </script>";
        }
        
    }else {
        echo "<script> alert('No coinciden las contraseñas');
        location.href = '../perfil.php';
        </script>";
    }
    
} else {
    echo "<script>
    location.href = '../register.php';
    </script>";
}