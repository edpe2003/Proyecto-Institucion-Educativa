<div class="container p-3 p-sm-4 p-md-5 p-lg-5 bg-white my-5 Brounded shadow">
    <div class="mb-5">
        <h1 style="text-align:center">Datos del Usuario</h1>
    </div>
    <div class="row">
        <div class="col fw-bold lh-sm fs-5 text-blue" style="text-align: right;">Nickname:</div>
        <div class="col fw-light lh-lg fs-6"><?php echo $alumno->getNickName(); ?></div>
    </div>
    <br>
    <div class="row">
        <div class="col fw-bold lh-sm fs-5 text-blue" style="text-align: right;">Nombre:</div>
        <div class="col fw-light lh-lg fs-6"><?php echo $alumno->getNombre(); ?></div>
    </div>
    <br>
    <div class="row">
        <div class="col fw-bold lh-sm fs-5 text-blue" style="text-align: right;">Segundo Nombre:</div>
        <div class="col fw-light lh-lg fs-6"><?php echo $alumno->getSegundoNombre(); ?></div>
    </div>
    <br>
    <div class="row">
        <div class="col fw-bold lh-sm fs-5 text-blue" style="text-align: right;">Apellido:</div>
        <div class="col fw-light lh-lg fs-6"><?php echo $alumno->getApellido(); ?></div>
    </div>
    <br>
    <div class="row">
        <div class="col fw-bold lh-sm fs-5 text-blue" style="text-align: right;">Segundo Apellido:</div>
        <div class="col fw-light lh-lg fs-6"><?php echo $alumno->getSegundoApellido(); ?></div>
    </div>
    <br>
    <div class="row">
        <div class="col fw-bold lh-sm fs-5 text-blue" style="text-align: right;">Cedula:</div>
        <div class="col fw-light lh-lg fs-6"><?php echo $alumno->getCi(); ?></div>
    </div>
    <br>
    <div class="row">
        <div class="col fw-bold lh-sm fs-5 text-blue" style="text-align: right;">Correo:</div>
        <div class="col fw-light lh-lg fs-6"><?php echo $alumno->getCorreo(); ?></div>
    </div>
</div>