    <tr>
        <td data-titulo="Consulta número"> <?php echo $contador ?> </td>
        <td data-titulo="Destinatario"> <?php echo $para[$i] ?> </td>
        <td data-titulo="Asunto"> <?php echo $asunto[$i] ?></td>
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
                <button class="btn btn-primary" type="submit">ver</button>
            </form>
        </td>
    </tr>
