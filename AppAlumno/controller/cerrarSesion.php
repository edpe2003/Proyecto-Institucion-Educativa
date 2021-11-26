<?php
session_start();
include('../../LogicaConexion/model/conexion.php');
include('../../LogicaConexion/model/persona.php');
include('../../LogicaConexion/model/alumno.php');
$alumno = new Alumno;
$alumno = $alumno->desactivarConexion($_SESSION['IDPersona']);
session_destroy();
echo "<script>
location.href = '../index.php';
</script>";