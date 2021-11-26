<?php
$persona = new Persona;
$persona->setId($_SESSION['IDPersona']);
$img = $persona->mostrarAvatar();
?>