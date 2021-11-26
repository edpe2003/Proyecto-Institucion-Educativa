<?php
include '../LogicaConexion/model/consulta.php';
$consulta = new Consulta;
$consulta->setIDAlumno($_SESSION['IDPersona']);
$resultado = null;
$resultado = $consulta->verConsultaHomeAlumno($consulta);
if ($resultado != null) {
    $Asunto = $consulta->getAsunto();
    $Estado = $consulta->getEstado();
    $IDConsulta = $consulta->getIDConsulta();
    $i = 0;
    foreach ($IDConsulta as $row) {
        echo "<form action='verConsulta.php' method='POST'><a id='item' class='hcont crystal list-group-item py-3'>";
        echo "<div class='d-flex w-100 align-items-center justify-content-between'>";
        echo "<p class='mb-1 d-inline-block text-truncate'><Strong>Asunto: " . $Asunto[$i] . "</Strong></p>";
        echo "<small class='text-white'>Estado: " . $Estado[$i] . " <input type='submit' class='btn-sm btn-primary Brounded' value='Ver'></small></div></a><input type='hidden' name='IDConsulta' value='";
        echo  "  $IDConsulta[$i] . '></form>";
        $i++;
    }
} else {
    echo "<h4 class='text-center text-white p-3 ' >No hay Consultas</h4>";
}
