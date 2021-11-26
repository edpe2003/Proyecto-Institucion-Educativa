<tr>
    <td data-titulo="Fila"> <?php echo $i + 1 ?> </td>
    <td data-titulo="Asunto"> <?php echo $asunto[$i] ?> </td>
    <td data-titulo="Nombre Alumno"> <?php echo $NomAlumno[$i] ?> </td>
    <td data-titulo="Fecha Consulta"> <?php echo date("Y-m-d H:i:s", strtotime('-3 hours', strtotime($fechaHora[$i]))); ?></td>
    <?php
    if ($estado[$i] == 'Enviado') {
        echo '<td data-titulo="Estado"> Enviado <i class="fas fa-check"> </i> </td>';
    } else {
        if ($estado[$i] == 'Leido') {
            echo '<td data-titulo="Estado"> Leido <i class="far fa-check-circle"></i></td>';
        } else {
            echo '<td data-titulo="Estado"> Respondido <i class="fas fa-check-circle"></i> </td>';
        }
    }
    ?>
    <td>
        <form action="verConsulta.php" method="post">
            <input type="hidden" name="IDConsulta" value="<?php echo $IDConsulta[$i] ?>">
            <input type="hidden" name="IDAlumno" value="<?php echo $IDAlumno[$i] ?>">
            <input type="hidden" name="IDDocente" value="<?php echo $IDDocente[$i] ?>">
            <button class="btn btn-primary text-white Brounded" type="submit">ver</button>
        </form>
    </td>
</tr>