<?php
session_start();
include('../../LogicaConexion/model/mensaje.php');
include('../../LogicaConexion/model/conexion.php');
$mensaje = new Mensaje;
$mensaje->setMensaje($_REQUEST['mensaje']);
$mensaje->setUsuario($_SESSION['IDPersona']);
$mensaje->setFecha(date("Y-m-d H:i:s"));
$mensaje->setIDChat(8);
$mensaje->setIDChat($_SESSION['IDChat']);
$mensaje->enviarMensaje();
