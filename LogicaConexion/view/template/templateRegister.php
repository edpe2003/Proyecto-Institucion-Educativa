<div class="d-flex justify-content-center">
    <div class="col-xs-12 col-sm-10 col-md-7 col-lg-6">
        <div class="container bg-white p-2 p-sm-3 p-md-4 p-lg-5 my-5 rounded shadow">
            <div class="col">
                <div class="text-end">
                    <img src="../LogicaConexion/view/img/logos/logo.jpg" width="50px" class="p-2 p-sm-2 p-md-0 p-lg-0" alt="">
                </div>
                <div>
                    <h2 class="fw-bold text-center pt-1">¿No tienes cuenta?</h2>
                    <h1 class="fw-bold text-center">Registrate!</h1>
                </div>

                <form class="mt-5">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="Name" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="Name" id="Name" maxlength="15" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="SecondName" class="form-label">Segundo Nombre</label>
                                <input type="text" class="form-control" name="SecondName" maxlength="15" id="SecondName">
                            </div>
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="LastName" class="form-label">Apellido</label>
                                <input type="text" class="form-control" name="LastName" id="LastName" maxlength="15" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="ScndLastName" class="form-label">Segundo Apellido</label>
                                <input type="text" class="form-control" name="ScndLastName" id="ScndLastName" maxlength="15">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="Ci" class="form-label">Cedula</label>
                        <input name="Ci" type="number" class="form-control" max="9999999999" min="10000000" required>
                    </div>

                    <div class="mb-3">
                        <label for="Email" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" id="Email" name="Email" aria-describedby="emailHelp" maxlength="70" required>
                        <div id="emailHelp" class="form-text">Ej. example@gmail.com</div>
                    </div>

                    <div class="mb-3">
                        <label for="grupo" class="form-label">Ingresar al Grupo</label>
                        <select name="select" class="form-select">
                            <?php
                            if ($grupos != null) {
                                $i = 1;
                                foreach ($grupos as $row) {
                            ?>
                                    <option selected value=<?php echo $row['nombre']; ?>><?php echo $row['nombre']; ?></option>
                                <?php
                                    $i++;
                                }
                            } else {
                                ?>
                                <h3>No hay Grupos registrados</h3>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="Passwd" class="form-label">Contraseña</label>
                        <input type="password" maxlength="16" minlength="8" class="form-control" id="Passwd" name="Passwd" required>
                    </div>
                    <div class="mb-3">
                        <label for="VerfPasswd" class="form-label">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="VerfPasswd" name="VerfPasswd" required>
                    </div>
                    <div class="d-grid">
                        <input type="submit" class="btn btn-primary" name="registro" value="Confirmar">
                    </div>

                </form>
                <div class="my-3 text-center">
                    <span>Ya tienes una cuenta? Puedes ir a logearte! <a href="<?php echo DIR_LOGIN; ?>">AQUI!</a></span>
                </div>

            </div>
        </div>
    </div>
</div>