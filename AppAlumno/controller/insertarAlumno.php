<?php
include '../../LogicaConexion/model/conexion.php';
include '../../LogicaConexion/model/persona.php';
include '../../LogicaConexion/model/alumno.php';
if (isset($_POST['registro'])) {
    $persona = new Persona();
    if ($_POST['Passwd'] == $_POST['VerfPasswd']) {
        $persona->setContraseña(password_hash($_POST['Passwd'], PASSWORD_BCRYPT));
    } else {
        echo "<script> alert('No coinciden las Contraseñas');
        location.href = '../register.php';
        </script>";
    }
    $persona->setCi($_POST['Ci']);
    $persona->setNombre($_POST['Name']);
    $persona->setSegundoNombre($_POST['SecondName']);
    $persona->setApellido($_POST['LastName']);
    $persona->setSegundoApellido($_POST['ScndLastName']);
    $persona->setCorreo($_POST['Email']);
    $persona->setGrupo($_POST['select']);
    $persona->setGrupo($persona->idGrupo());
    $alumno = new Alumno();
    $resultado = $alumno->insertarAlumno($persona);
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
