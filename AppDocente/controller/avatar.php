<?php
session_start();
include '../../LogicaConexion/model/conexion.php';
include '../../LogicaConexion/model/persona.php';
$persona = new Persona;
$persona->setAvatar($_REQUEST['img']);
$persona->setId($_SESSION['IDPersona']);
$resultado = $persona->modificarAvatar();
?>