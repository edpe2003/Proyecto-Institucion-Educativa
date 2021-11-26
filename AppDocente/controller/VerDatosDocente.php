<?php
include '../LogicaConexion/model/docente.php';
$docente = new Docente;
$docente->setId($_SESSION['IDPersona']);
$docente->VerDatosDocente();
