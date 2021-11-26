<?php
session_start();
include '../../LogicaConexion/model/conexion.php';
include '../../LogicaConexion/model/persona.php';
$persona = new Persona;
$persona->setFondoChat($_REQUEST['fondo']);
$persona->setId($_SESSION['IDPersona']);
$resultado = $persona->modificarFondoChat();
?>