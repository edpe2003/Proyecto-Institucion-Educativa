<?php
$alumno = new Alumno;
$docentes = $alumno->verDocentesDeGrupo($_SESSION['IDPersona']);
?>
<select class="form-select" name="correo">
    <?php
    if ($docentes) {
        foreach ($docentes as $row) {
    ?>
            <option value="<?php echo $row['correo'] ?>"><?php echo $row['correo'] ?></option>
        <?php
        }
    } else {
        ?>
        <option value="null">No hay docentes</option>
    <?php
    }
    ?>
</select>