<?php
include '../../LogicaConexion/model/conexion.php';
include '../../LogicaConexion/model/persona.php';
include '../../LogicaConexion/model/consulta.php';
$consulta = new Consulta;
$consulta->setRespuesta($_POST['contenido']);
$consulta->setIDConsulta($_POST['IDConsulta']);
$consulta->responderConsulta();
echo "<script>
    location.href = '../consultas.php';
    </script>";
?>