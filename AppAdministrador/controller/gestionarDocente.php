<?php
include '../LogicaConexion/model/conexion.php';
include '../LogicaConexion/model/persona.php';
include '../LogicaConexion/model/administrador.php';
$administrador = new Administrador;
$administrador->setId($_POST['IDDocente']);
$_SESSION['IDDocente'] = $_POST['IDDocente'];
$administrador->mostrarDatosDocente();
$IDDocente = $administrador->getId();
$CI = $administrador->getCi();
$Nombre = $administrador->getNombre();
$Apellido = $administrador->getApellido();
$correo = $administrador->getCorreo();
$estado = $administrador->getEstado();
