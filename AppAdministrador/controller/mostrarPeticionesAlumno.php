<?php
include '../LogicaConexion/model/conexion.php';
include '../LogicaConexion/model/persona.php';
include '../LogicaConexion/model/administrador.php';

$administrador = new Administrador;
$data = $administrador->mostrarPeticionesAlumno();
