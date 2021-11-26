<?php
error_reporting(0);
session_start();
if ($row['IDPersona'] == $_SESSION['IDPersona']) {
?>
    <div class="mensajeChat container bg-primary Brounded text-white p-2 mt-3 mb-3">
    <?php
} else {
    ?>
        <div class="mensajeChat container bg-dark Brounded text-white p-2 mt-3 mb-3">
        <?php
    }
        ?>
        <div class="p-1 bg-light Brounded">
            <div class="bg-secondary Brounded">
                <img class="shadow-lg imgChat" src="../LogicaConexion/view/img/avatars/<?php echo $row['avatar'] ?>" width="100%" height="100%">
                <b class=""><?php echo $row['nombre']; ?></b>
            </div>
        </div>
        <br>
        <div class="p-3">
            <?php echo $row['texto']; ?>
            <div class="float-end float-"><?php echo $row['fechaHora']; ?><br></div>
        </div>
    
        </div>