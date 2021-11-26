<?php
include '../LogicaConexion/model/conexion.php';
include '../LogicaConexion/model/persona.php';
include '../LogicaConexion/model/consulta.php';
$consulta = new Consulta;
$consulta->setIDConsulta($_POST['IDConsulta']);
$consulta->verConsultaAlumno($consulta);
$asunto = $consulta->getAsunto();
$contenido = $consulta->getPregunta();
$respuesta = $consulta->getRespuesta();
$HoraInicio = $consulta->getHoraInicio();
$HoraFinalizacion = $consulta->getHoraFinalizacion();
$DiasDisponibles = $consulta->getDiasDisponibles();
$correo = $consulta->getCorreo();
$estado = $consulta->getEstado();
$avatar = $consulta->getAvatar();
?>