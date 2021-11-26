<tr>
    <td data-titulo="Fila"> <?php echo $i; ?> </td>
    <td data-titulo="Nombre"> <?php echo $row['nombre']; ?> </td>
    <td data-titulo="Orientacion"> <?php echo $row['orientacion']; ?> </td>
    <td>
        <form action="editarGrupo.php" method="POST">
            <input type="hidden" value="<?php echo $row['IDGrupo'] ?>" name="idGrupo">
            <input type="hidden" value="<?php echo $row['nombre'] ?>" name="nombre">
            <input type="hidden" value="<?php echo $row['orientacion'] ?>" name="orientacion">
            <button class="btn btn-primary text-white Brounded" name="editar" type="submit">Editar</button>
        </form>
    </td>
</tr>