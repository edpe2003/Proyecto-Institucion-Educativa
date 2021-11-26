<a href="consultas.php" class="p__white"><i class="fas fa-chevron-left fa-3x p-2"></i></a> <br>
<div class="container-fluid crystal text-light  my-2 text-start p-5 rounded shadow mt-5">
    <div class="rounded-pill bg-secondary text-center border border-5 wrap">
        <img class="rounded rounded-circle border border-3 " src="../LogicaConexion/view/img/avatars/<?php echo $avatar; ?>" alt="user0" width="50" height="50">
        <p class="fs-6 p-2"><b><?php echo $de; ?></b></p>
    </div>
    <div class="h2 text-center m-3 wrap">
        <p for="Asunto"><?php echo $asunto; ?></p>
    </div>
    <div class="rounded bg-secondary border border-2 p-3 m-2 wrap">
        <p for="Contenido"><b>Consulta:</b></p>
        <p for="Contenido"><?php echo $contenido; ?></p>
    </div>
    <div class="rounded bg-secondary border border-2 p-3 m-2 wrap">
        <p for="Respuesta"><b>Respuesta:</b></p>
        <p for="Respuesta"><?php echo empty($respuesta) ? " " : $respuesta ?></p>
    </div>
</div>