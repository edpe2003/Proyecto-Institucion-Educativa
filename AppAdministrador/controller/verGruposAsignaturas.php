<?php
$grupos = $administrador->mostrarGrupo();
$asignaturas = $administrador->mostrarAsignatura();
$gruposDocente = $administrador->mostrarGruposDocente($_SESSION['IDDocente']);
$asignaturasDocente = $administrador->mostrarAsignaturasDocente($_SESSION['IDDocente']);
