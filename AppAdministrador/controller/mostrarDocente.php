<?php
include '../LogicaConexion/model/conexion.php';
include '../LogicaConexion/model/persona.php';
include '../LogicaConexion/model/administrador.php';

$administrador = new Administrador;
$administrador->mostrarDocente();
$IDDocente = $administrador->getId();
$CI = $administrador->getCi();
$Nombre = $administrador->getNombre();
$Apellido = $administrador->getApellido();
$correo = $administrador->getCorreo();