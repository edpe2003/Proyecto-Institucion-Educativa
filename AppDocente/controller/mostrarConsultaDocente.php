<?php
include '../LogicaConexion/model/conexion.php';
include '../LogicaConexion/model/persona.php';
include '../LogicaConexion/model/consulta.php';

$consulta = new Consulta;
$consulta->setIDDocente($_SESSION['IDPersona']);
$respuesta = null;
$respuesta = $consulta->mostrarConsultaDocente();
$IDConsulta = $consulta->getIDConsulta();
$asunto = $consulta->getAsunto();
$fechahora = $consulta->getFechaHora();
$estado = $consulta->getEstado();
$de = $consulta->getDe();
$avatar = $consulta->getAvatar();
?>