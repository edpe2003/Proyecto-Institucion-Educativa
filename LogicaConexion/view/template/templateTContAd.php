<tr>
    <td data-titulo="Fila"> <?php echo $contador; ?> </td>
    <td data-titulo="CI"> <?php echo $row['CI']; ?> </td>
    <td data-titulo="Nombre"> <?php echo $row['nombre']; ?></td>
    <td data-titulo="Apellido"> <?php echo $row['apellido']; ?></td>
    <td>
        <form action="gestionarUsuario.php" method="post">
            <input type="hidden" name="idPersona" value="<?php echo $row['IDPersona']; ?>">
            <button type="submit" class="btn btn-primary text-white Brounded">Ver Usuario</button>
        </form>
    </td>
</tr>