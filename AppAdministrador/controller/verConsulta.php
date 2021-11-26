<?php
include '../LogicaConexion/model/conexion.php';
include '../LogicaConexion/model/persona.php';
include '../LogicaConexion/model/consulta.php';
$consulta = new Consulta;
$consulta->setIDConsulta($_POST['IDConsulta']);
$consulta->verConsultaAlumno($consulta);

$consulta->setIDPersona($_POST['IDAlumno']);
$de = $consulta->verCorreoPersona();

$consulta->setIDPersona($_POST['IDDocente']);
$para = $consulta->verCorreoPersona();

$asunto = $consulta->getAsunto();
$contenido = $consulta->getPregunta();
$respuesta = $consulta->getRespuesta();
?>