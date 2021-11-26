<?php
$persona = new Persona;
$persona->setId($_SESSION["IDPersona"]);
$fondoChat = $persona->mostrarFondoChat();

?>