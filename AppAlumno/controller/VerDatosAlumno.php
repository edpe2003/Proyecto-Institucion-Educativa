<?php
include '../LogicaConexion/model/conexion.php';
include '../LogicaConexion/model/persona.php';
include '../LogicaConexion/model/alumno.php';
$alumno = new Alumno();
$alumno->setId($_SESSION['IDPersona']);
$alumno->VerDatosAlumno();
