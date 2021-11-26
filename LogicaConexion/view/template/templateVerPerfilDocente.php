<div class="container p-3 p-sm-4 p-md-5 p-lg-5 bg-white my-5 Brounded shadow">
    <div class="mb-5">
        <h1 style="text-align:center">Datos del Usuario</h1>
    </div>
    <br>
    <div class="row">
        <div class="col fw-bold lh-sm fs-5 text-blue" style="text-align: right;">Dias Disponibles</div>
        <div class="col fw-light lh-lg fs-6"><?php echo $docente->getDiasDisponibles(); ?></div>
    </div>
    <br>
    <div class="row">
        <div class="col fw-bold lh-sm fs-5 text-blue" style="text-align: right;">Horario de Inicio</div>
        <div class="col fw-light lh-lg fs-6"><?php echo $docente->getHoraInicio(); ?></div>
    </div>
    <br>
    <div class="row">
        <div class="col fw-bold lh-sm fs-5 text-blue" style="text-align: right;">Horario de Finalizacion</div>
        <div class="col fw-light lh-lg fs-6"><?php echo $docente->getHoraFinalizacion(); ?></div>
    </div>
    <br>
    <div class="row">
        <div class="col fw-bold lh-sm fs-5 text-blue" style="text-align: right;">Nombre</div>
        <div class="col fw-light lh-lg fs-6"><?php echo $docente->getNombre(); ?></div>
    </div>
    <br>
    <div class="row">
        <div class="col fw-bold lh-sm fs-5 text-blue" style="text-align: right;">Segundo Nombre</div>
        <div class="col fw-light lh-lg fs-6"><?php echo $docente->getSegundoNombre(); ?></div>
    </div>
    <br>
    <div class="row">
        <div class="col fw-bold lh-sm fs-5 text-blue" style="text-align: right;">Apellido</div>
        <div class="col fw-light lh-lg fs-6"><?php echo $docente->getApellido(); ?></div>
    </div>
    <br>
    <div class="row">
        <div class="col fw-bold lh-sm fs-5 text-blue" style="text-align: right;">Segundo Apellido</div>
        <div class="col fw-light lh-lg fs-6"><?php echo $docente->getSegundoApellido(); ?></div>
    </div>
    <br>
    <div class="row">
        <div class="col fw-bold lh-sm fs-5 text-blue" style="text-align: right;">Cedula</div>
        <div class="col fw-light lh-lg fs-6"><?php echo $docente->getCi(); ?></div>
    </div>
    <br>
    <div class="row">
        <div class="col fw-bold lh-sm fs-5 text-blue" style="text-align: right;">Correo</div>
        <div class="col fw-light lh-lg fs-6"><?php echo $docente->getCorreo(); ?></div>
    </div>
</div>