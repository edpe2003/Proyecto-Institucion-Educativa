<div class="container p-3 p-sm-4 p-md-5 p-lg-5 bg-white my-5 Brounded shadow">
    <div class="mb-5">
        <h1 style="text-align:center">Modificacion de Perfil</h1>

        <form action="">
            <div class="my-4 text-center">
                <h4 style="text-align:center">Cambiar Avatar</h4>
                <div class="mb-3">
                    <div class="">
                        <img class="imgAvatar shadow-lg" src="../LogicaConexion/view/img/avatars/<?php echo $img ?>" alt="$img" width="110" height="100">
                    </div>
                    <div>
                        <button type="button" class="btn btn-primary Brounded mt-3" data-bs-toggle="modal" data-bs-target="#modalAvatar">
                            Cambiar Avatar
                        </button>
                        <?php
                        include('../LogicaConexion/view/components/modalAvatar.php');
                        ?>
                    </div>

                </div>
            </div>
        </form>

        <form action="controller/ModificarNickAlumno.php" method="post">
            <div class="mt-5">
                <h4 style="text-align:center">Cambiar Nickname</h4>
                <label for="nickname">Nuevo Nickname</label>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-10 col-lg-10  d-grid">
                    <input maxlength="15" placeholder="Maximo 15 Caracteres" type="text" name="nickname" id="nickname">
                </div>

                <div class="d-none d-sm-none d-md-block d-lg-block col-md-2 col-lg-2">
                    <input type="submit" value="Guardar" name="nick" class="btn btn-primary d-grid">
                </div>

                <div class="d-grid d-sm-grid d-md-none d-lg-none mt15">
                    <input type="submit" value="Guardar" name="nick" class="btn btn-primary d-grid">
                </div>
            </div>
        </form>
        <br><br><br>
        <form action="controller/ModificarContraseñaAlumno.php" method="post">
            <div class="mt-5">
                <h4 style="text-align:center">Cambiar Contraseña</h4>
            </div>

            <div class="mb-3 row">
                <label for="antigua">Contraseña Actual</label>
                <input type="password" name="antigua" id="antigua" maxlength="16" minlength="8" required>
            </div>

            <div class="mb-3 row">
                <label for="nueva">Nueva Contraseña</label>
                <input type="password" name="nueva" id="nueva" maxlength="16" minlength="8" required>
            </div>

            <div class="mb-3 row">
                <label for="confnueva">Confirmar Nueva Contraseña</label>
                <input type="password" name="confnueva" id="connewpass" maxlength="16" minlength="8" required>
            </div>
            <div class="row">
                <input type="submit" value="Guardar" class="btn btn-primary d-grid my-3" name="pass">
            </div>
        </form>
    </div>
</div>