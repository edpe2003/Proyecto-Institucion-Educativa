<?php
include('../LogicaConexion/model/conexion.php');
include('../LogicaConexion/model/consulta.php');
$consulta = new Consulta;
$NomAlumno = $consulta->verConsultasAdministrador();
$IDConsulta = $consulta->getIDConsulta();
$asunto = $consulta->getAsunto();
$pregunta = $consulta->getPregunta();
$respuesta = $consulta->getRespuesta();
$fechaHora = $consulta->getFechaHora();
$estado = $consulta->getEstado();
$IDAlumno = $consulta->getIDAlumno();
$IDDocente = $consulta->getIDDocente();