<form action="controller/chat.php" method="POST">
    <div class="modal fade" id="ModalChat" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="container-fluid modal-content crystal p-3  col-sm-8 abs-center my-4 rounded shadow-lg text-white">

                <div class="justify-content-end d-grid gap-2">
                    <button type="button" class="btn btn-secondary btn-close" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>

                <div class="my-2 d-grid">
                    <label for="docente">Correo del docente:</label>
                    <?php include('controller/verDocentesDeGrupo.php') ?>
                </div>

                <div class="my-2 d-grid">
                    <label for="nombre">Nombre del chat:</label>
                    <input type="text" class="form-control" name="nombre" required placeholder="Ej. Matematica">
                </div>

                <div class=" mt-3 d-grid">
                    <input class="btn btn-success" type="submit" name="crear" value="Crear Chat">
                </div>

            </div>
        </div>
    </div>
</form>