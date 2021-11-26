<a href="consultas.php" class="p__white"><i class="fas fa-chevron-left fa-3x p-2"></i></a> <br>

<div class="container-fluid crystal text-light my-2 text-start p-2 w-50 rounded shadow">
    <div class="h6">
        <label for="Asunto">Alumno: </label>
        <label for="Asunto"><?php echo $de; ?></label>
    </div>
    <div class="h6">
        <label for="Asunto">Docente: </label>
        <label for="Asunto"><?php echo $para; ?></label>
    </div>
    <div class="h6">
        <label for="Asunto">Asunto: </label>
        <label for="Asunto"><?php echo $asunto; ?></label>
    </div>
    <div class="h6">
        <label for="Contenido">Pregunta: </label>
        <label for="Contenido" class="text-break"><?php echo $contenido; ?></label>
    </div>
    <div class="h6">
        <label for="Respuesta">Respuesta: </label>
        <label for="Respuesta" class="text-break"><?php echo empty($respuesta)? " ":$respuesta ?></label>
    </div>
</div>