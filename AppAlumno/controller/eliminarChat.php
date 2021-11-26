<?php
session_start();
include('../../LogicaConexion/model/conexion.php');
include('../../LogicaConexion/model/chat.php');
if (isset($_POST['eliminar'])) {
    $chat = new Chat;
    $chat->setIDChat($_POST['IDChat']);
    $resultado = 0;
    $descripcion = $_POST['descripcion'];
    $resultado = $chat->eliminarChat($descripcion);
    if ($resultado != 0) {
        echo "<script>
        location.href = '../home.php';
        </script>";
    } else {
        echo "<script>
        alert('Usted no es el anfitrion de este chat');
        location.href = '../home.php';
        </script>";
    }
}