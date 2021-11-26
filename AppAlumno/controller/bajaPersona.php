<?php
session_start();
include '../../LogicaConexion/model/conexion.php';
include '../../LogicaConexion/model/persona.php';
$persona = new Persona;
$persona->setId($_SESSION['IDPersona']);
$persona->bajaPersona();
session_destroy();
echo json_encode(["estado" => 0]);
