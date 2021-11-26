<?php
session_start();
include('../../LogicaConexion/model/mensaje.php');
include('../../LogicaConexion/model/conexion.php');
$mensaje = new Mensaje;
if (isset($_SESSION['IDChat'])) {
    $mensaje->setIDChat($_SESSION['IDChat']);
    echo $res = $mensaje->verMensaje();
}else{
    echo 1;
}