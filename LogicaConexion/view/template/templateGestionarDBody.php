<form method="POST" action="controller/accionarDocente.php">
    <input type="hidden" name="IDDocente" value="<?php echo $_POST['IDDocente'] ?>">
    <tbody>
        <tr class="text-center">
            <td data-titulo="CI"> <?php echo $CI; ?> </td>
            <td data-titulo="Nombre"> <?php echo $Nombre; ?> </td>
            <td data-titulo="Apellido"> <?php echo $Apellido; ?> </td>
            <td data-titulo="Correo"> <?php echo $correo; ?> </td>
            <td data-titulo="Grupo">
                <?php

                if ($grupos != null) {
                    $i = 0;
                    foreach ($grupos as $row) {
                        if ($gruposDocente[$i]['IDGrupo'] == $row['IDGrupo']) {
                            $i++;
                ?>
                            <input class="form-check-input" type="checkbox" name="<?php echo "Grp" . $row['IDGrupo']; ?>" checked>
                        <?php
                        } else {
                        ?>
                            <input class="form-check-input" type="checkbox" name="<?php echo "Grp" . $row['IDGrupo']; ?>">
                        <?php
                        }
                        ?>
                        <label for="<?php echo "Grp" . $row['IDGrupo']; ?>"><?php echo $row['nombre']; ?></label>
                        <input type="hidden" name="<?php echo "IDGrp" . $row['IDGrupo']; ?>" value="<?php echo $row['IDGrupo']; ?>">
                <?php
                        echo "<br>";
                    }
                } else {
                    echo "No hay Grupos";
                } ?>
            </td>

            <td colspan="3" class="text-start" data-titulo="Asignaturas">
                <?php
                if ($asignaturas != null) {
                    $i = 0;
                    foreach ($asignaturas as $row) {
                        if ($asignaturasDocente[$i]['IDAsignatura'] == $row['IDAsignatura']) {
                            $i++;
                ?>
                            <input class="form-check-input" type="checkbox" name="<?php echo "Asg" . $row['IDAsignatura']; ?>" checked>
                        <?php
                        } else {
                        ?>
                            <input class="form-check-input" type="checkbox" name="<?php echo "Asg" . $row['IDAsignatura']; ?>">
                        <?php
                        }
                        ?>
                        <label for="<?php echo "Asg" . $row['IDAsignatura']; ?>"><?php echo $row['NomAsignatura']; ?></label>
                        <input type="hidden" name="<?php echo "IDAsg" . $row['IDAsignatura']; ?>" value="<?php echo $row['IDAsignatura']; ?>"> </label>
                <?php
                        echo "<br>";
                    }
                } else {
                    echo "No hay Asignaturas";
                }


                ?>
            </td>
                <?php
                if ($estado[0] == 0) {
                ?>
            <th>
                <p style="color: red;"><i class="fas fa-circle"></i></p>
            </th>
        <?php
                } else {
        ?>
            <th>
                <p style="color: green;"><i class="fas fa-circle"></i></p>
            </th>
        <?php
                }
        ?>

        <td colspan="2">
            <input type="submit" value="Eliminar" name="Eliminar" class="btn btn-danger">
            <input type="submit" value="Validar" name="Validar" class="btn btn-success">
        </td>

        </tr>
    </tbody>




</form>