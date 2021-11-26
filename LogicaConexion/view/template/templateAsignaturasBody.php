<tr>
    <td data-titulo="Fila"> <?php echo $i; ?> </td>
    <td data-titulo="Asignatura"> <?php echo $row['NomAsignatura']; ?> </td>
    <td> 
        <form action="editarAsignatura.php" method="POST">
            <input type="hidden" value="<?php echo $row['NomAsignatura'] ?>" name="nomAsignatura">
            <input type="hidden" value="<?php echo $row['IDAsignatura'] ?>" name="idAsignatura">
            <input class="btn btn-primary text-white Brounded" name="editar" type="submit" value="Editar">
        </form>
    </td>
</tr>
<?php $i++; ?>
