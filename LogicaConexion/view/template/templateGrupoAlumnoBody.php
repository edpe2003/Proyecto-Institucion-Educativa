<tbody >
    <tr>
        <th> <?php echo $Nombre[$i]; ?> </th>
        <th> <?php echo $Apellido[$i]; ?> </th>
        <th> <?php echo $correo[$i]; ?> </th>
        <?php
        if ($Conexion[$i] == 1) {
        ?>
            <th><p style="color: green;"><i class="fas fa-circle"></i></p></th>
        <?php
        } else {
        ?>
            <th><p style="color: red;"><i class="fas fa-circle"></i></p></th>
        <?php
        }
        ?>
    </tr>
</tbody>