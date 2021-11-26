<!-- TEMPLATE DEL MODAL QUE SE USA A LA HORA DE GENERAR UNA CONSULTA-->

<form method="POST" action="controller/generarConsultaAlumno.php">

    <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="container-fluid modal-content crystal p-3  col-sm-8 abs-center my-4 rounded shadow-lg">
                <div class="justify-content-end d-grid gap-2">
                    <button type="button" class="btn btn-secondary btn-close" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="my-2">
                    <label for="correo" class="form-label p__white">Destinatario: </label>
                    <input name="correo" type="email" class="form-control" placeholder="Ingrese correo" required>
                </div>
                <div class="my-2">
                    <label for="asunto" class="form-label p__white">Asunto: </label>
                    <input name="asunto" type="text" class="form-control" placeholder="Ingrese Asunto" maxlength="60" required>
                </div>
                <div class="my-2">
                    <label for="contenido" class="form-label p__white">Consulta: </label>
                    <textarea name="contenido" type="text" class="form-control" placeholder="Ingrese contenido" maxlength="500" required></textarea>
                </div>
                <div class="my-2">
                    <input type="submit" class="btn btn-success w-100" name="crearConsulta" value="Enviar">
                </div>
            </div>
        </div>
    </div>

</form>