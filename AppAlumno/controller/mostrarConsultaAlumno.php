<?php
include '../LogicaConexion/model/conexion.php';
include '../LogicaConexion/model/persona.php';
include '../LogicaConexion/model/alumno.php';
include '../LogicaConexion/model/consulta.php';

$alumno = new Alumno;
$alumno->setId($_SESSION['IDPersona']);
$consulta = new Consulta;
$respuesta = null;
$respuesta = $consulta->mostrarConsultaAlumno($alumno);
$IDConsulta = $consulta->getIDConsulta();
$asunto = $consulta->getAsunto();
$fechahora = $consulta->getFechaHora();
$estado = $consulta->getEstado();
$para = $consulta->getPara();
?>