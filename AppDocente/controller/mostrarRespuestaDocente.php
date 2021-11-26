<?php
include '../LogicaConexion/model/conexion.php';
include '../LogicaConexion/model/persona.php';
include '../LogicaConexion/model/consulta.php';

$consulta = new Consulta;
$consulta->setIDDocente($_SESSION['IDPersona']);
$consulta->setIDConsulta($_POST['IDConsulta']);
$existe = null;
$existe = $consulta->mostrarRespuestaDocente();
$IDConsulta = $consulta->getIDConsulta();
$de = $consulta->getDe();
$asunto = $consulta->getAsunto();
$contenido = $consulta->getPregunta();
$respuesta = $consulta->getRespuesta();
$avatar = $consulta->getAvatar();
?>