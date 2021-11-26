<tbody >
    <tr>
        <td data-titulo="Nombre"> <?php echo $row['Nombre']; ?> </td>
        <td data-titulo="Apellido"> <?php echo $row['Apellido']; ?> </td>
        <?php
        if ($row['Conexion'] == 1) {
        ?>
            <td data-titulo="Estado"><p style="color: green;"><i class="fas fa-circle"></i></p></td>
        <?php
        } else {
        ?>
            <td data-titulo="Estado"><p style="color: red;"><i class="fas fa-circle"></i></p></td>
        <?php
        }
        ?>
    </tr>
</tbody>