<tr>
    <td data-titulo="Consulta número"> <?php echo $contador ?> </td>
    <td data-titulo="Asunto"> <?php echo $asunto[$i] ?></td>
    <td data-titulo="Remitente"> <?php echo $de[$i] ?></td>
    <td data-titulo="Fecha enviado"> <?php echo date("Y-m-d H:i:s", strtotime('-3 hours', strtotime($fechahora[$i]))); ?></td>
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
        <form action="responderConsulta.php" method="post">
            <input type="hidden" name="IDConsulta" value="<?php echo $IDConsulta[$i] ?>">
            <button class="btn btn-primary" type="submit"><?php
                                                        if ($estado[$i] == 'Enviado' || $estado[$i] == 'Leido') {
                                                            echo "Responder";
                                                        } else {
                                                            echo "Ver";
                                                        } ?>
            </button>
        </form>
    </td>
</tr>