<form action="controller/crearAsignatura.php" method="POST">
    <div class="modal fade" id="ModalAsignatura" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="container-fluid modal-content crystal p-3  col-sm-8 abs-center my-4 rounded shadow-lg text-white">

                <div class="justify-content-end d-grid gap-2">
                    <button type="button" class="btn btn-secondary btn-close" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>

                <div class="my-2 d-grid">
                    <label for="nombreAsg">Nombre de la Asignatura</label>
                    <input type="text" class="form-control" name="nombreAsg" placeholder="Ej: Matemática">
                </div>

                <div class="mt-3 d-grid">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>

            </div>
        </div>
    </div>
</form>