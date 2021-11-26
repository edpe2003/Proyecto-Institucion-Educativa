<?php
session_start();
include('../../LogicaConexion/model/conexion.php');
include('../../LogicaConexion/model/chat.php');
if (isset($_POST['crear'])) {
    $chat = new Chat;
    $chat->setNombre($_POST['nombre']);
    $chat->setCorreo($_POST['correo']);
    $chat->setAnfitrion($_SESSION['IDPersona']);
    $respuesta = 1;
    $respuesta = $chat->crearChat();
    if ($respuesta == 1) {
        echo "<script>
        location.href = '../home.php';
        </script>";
    } else if ($respuesta == 2) {
        echo "<script>
        alert('No puedes crear un chat sin docente');
        location.href = '../home.php';
        </script>";
    } else if ($respuesta == 0) {
        echo "<script>
        alert('Ya existe un chat de esta materia');
        location.href = '../home.php';
        </script>";
    }
}
