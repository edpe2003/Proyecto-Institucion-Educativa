<?php
//include '../LogicaConexion/model/conexion.php';
//include '../LogicaConexion/model/persona.php';
$persona = new Persona;
$persona->setId($_SESSION["IDPersona"]);
$fondoChat = $persona->mostrarFondoChat();

?>