<?php
session_start();
include '../../LogicaConexion/model/conexion.php';
include '../../LogicaConexion/model/persona.php';
include '../../LogicaConexion/model/docente.php';
if (isset($_POST['Horas'])) {
    $docente = new Docente();
    $docente->setId($_SESSION['IDPersona']);
    $docente->setHoraInicio($_POST['Hora_Inicio']);
    $docente->setHoraFinalizacion($_POST['Hora_Final']);
    $docente->ModificarHorariosDisponibles();
    echo "<script>
    location.href = '../perfil.php';
    </script>";
} else {
    echo "<script>
  location.href = '../register.php';
  </script>";
}
