<div class="d-flex justify-content-center">
    <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6">
        <div class="container bg-white p-2 p-sm-3 p-md-4 p-lg-5 my-5 rounded shadow .d-none .d-sm-block">

            <form action="controller/recuperarContraseña.php" method="POST">
                <label for="Correo" class="form-label">Correo</label>
                <input type="email" name="Correo" class="form-control" required>
                <br>
                <label for="CI" class="form-label">Cedula de Identidad</label>
                <input type="number" name="CI" class="form-control" required>

                <div class="container">
                    <div class="row">
                        <div class="col my-3">
                            <a href="home.php" class="btn btn-danger">Cancelar</a>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <button type="submit" name="confirmar" class="my-3 btn btn-success rounded">Confirmar</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>