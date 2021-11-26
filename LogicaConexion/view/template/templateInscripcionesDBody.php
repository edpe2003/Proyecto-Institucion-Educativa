<tr>
    <td data-titulo="Usuario"> <?php echo $i; ?> </td>
    <td data-titulo="CI"> <?php echo $CI[$i]; ?> </td>
    <td data-titulo="Nombre"> <?php echo $Nombre[$i]; ?> </td>
    <td data-titulo="Apellido"> <?php echo $Apellido[$i]; ?> </td>
    <td data-titulo="Correo Docente"> <?php echo $correo[$i]; ?> </td>
    <td>
        <form action="gestionarDocente.php" method="post">
            <input type="hidden" name="IDDocente" value="<?php echo $IDDocente[$i] ?>">
            <button class="btn btn-primary text-white Brounded" type="submit">Gestionar Usuario</button>
        </form>
    </td>
</tr>