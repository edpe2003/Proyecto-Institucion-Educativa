<a href="consultas.php" class="p__white"><i class="fas fa-chevron-left fa-3x p-2"></i></a> <br>
<div class="container-fluid crystal text-light  my-2 text-start p-5 rounded shadow mt-5 ">
    <div class="rounded-pill bg-secondary text-center border border-5 wrap">
        <img class="rounded rounded-circle border border-3 " src="../LogicaConexion/view/img/avatars/<?php echo $avatar; ?>" alt="user0" width="50" height="50">
        <p class="fs-6 p-2"><b><?php echo $correo; ?></b></p>
    </div>
    <div class="h2 text-center m-3 wrap">
        <h2><?php echo $asunto; ?></h2>
    </div>

    <div class="rounded bg-secondary border border-2 p-3 m-2 wrap">
        <p for="Contenido"><b>Contenido:</b></p>
        <p name="Contenido"><?php echo $contenido; ?></p>
    </div>
    <div class="rounded bg-secondary border border-2 p-3 m-2 wrap">
        <p for="Respuesta"><b>Respuesta:</b></p>
        <p name="Respuesta"><?php echo empty($respuesta) ? " " : $respuesta ?></p>
    </div>
    <?php
    if ($estado != 'Contestado') {
    ?>
        <div class="text-center">
            <div class="h6 fw-bold text-center rounded border border-warning border-2 p-3 m-2 d-inline-block mt-5 amarillo">
                <label for="DRespuesta">Dias Estimados de Respuesta: </label>
                <label name="DRespuesta"><?php echo "Los dias " . $DiasDisponibles; ?></label><br>
                <label for="HRespuesta">Horario Estimado de Respuesta: </label>
                <label name="HRespuesta"><?php echo "Desde las " . $HoraInicio . " hasta las " . $HoraFinalizacion; ?></label>
            </div>
        </div>
    <?php
    }
    ?>
</div>