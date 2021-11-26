<?php
include '../LogicaConexion/model/conexion.php';
include '../LogicaConexion/model/persona.php';
include '../LogicaConexion/model/administrador.php';

$administrador = new Administrador;

if ($_POST['idPersona']) {
  $data = $administrador->mostrarDatosAlumno($_POST['idPersona']);
}else {
  $data = $administrador->mostrarDatosAlumno($_SESSION['idAlumno']);
}
