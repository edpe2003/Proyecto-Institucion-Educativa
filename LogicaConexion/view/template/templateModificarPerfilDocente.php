<div class="container p-3 p-sm-4 p-md-5 p-lg-5 bg-white my-5 Brounded shadow">
    <div class="mb-5">
        <h1 style="text-align:center">Modificacion de Perfil</h1>
        </form>

        <form action="">
            <div class="mb-4 text-center">
                <h4 style="text-align:center">Cambiar Avatar</h4>
                <div class="mb-3">
                    <img class="imgAvatar shadow-lg" src="../LogicaConexion/view/img/avatars/<?php echo $img ?>" alt="$img" width="110" height="100">
                </div>
                <div class="mb-3">
                    <button type="button" class="btn btn-primary Brounded mt-3" data-bs-toggle="modal" data-bs-target="#modalAvatar">
                        Cambiar Avatar
                    </button>
                    <?php
                    include('../LogicaConexion/view/components/modalAvatar.php');
                    ?>
                </div>
            </div>
        </form>

        <form action="controller/modificarDiasDisponibles.php" method="post">
            <div class="mt-5">
                <h4 style="text-align:center">Dias Disponibles</h4>
            </div>
            <div>
                <div class="row">
                    <div class="col" style="text-align: right;"><label for="Lunes">Lunes</label></div>
                    <div class="col"><input type="checkbox" name="0"></div>
                </div>
                <div class="row my-3">
                    <div class="col" style="text-align: right;"><label for="Martes">Martes</label></div>
                    <div class="col"><input type="checkbox" name="1"></div>
                </div>
                <div class="row my-3">
                    <div class="col" style="text-align: right;"><label for="Miercoles">Miercoles</label></div>
                    <div class="col"><input type="checkbox" name="2"></div>
                </div>
                <div class="row my-3">
                    <div class="col" style="text-align: right;"><label for="Jueves">Jueves</label></div>
                    <div class="col"><input type="checkbox" name="3"></div>
                </div>
                <div class="row">
                    <div class="col" style="text-align: right;"><label for="Viernes">Viernes</label></div>
                    <div class="col"><input type="checkbox" name="4"></div>
                </div>
                <div class="row">
                    <input type="submit" value="Guardar" class="btn btn-primary d-grid my-3" name="Dias">
                </div>
            </div>
        </form>
        <form action="controller/ModificarHorariosDisponibles.php" method="post">
            <h4 style="text-align:center">Horarios Disponibles</h4>
            <div class="mb-3 row">
                <label for="Hora_Inicio">Hora de Inicio</label>
                <input type="time" name="Hora_Inicio">

                <label for="Hora_Final">Hora de Finalizacion</label>
                <input type="time" name="Hora_Final">
            </div>
            <div class="row">
                <input type="submit" value="Guardar" class="btn btn-primary d-grid my-3" name="Horas">
            </div>
        </form>

        <form action="controller/ModificarContraseñaDocente.php" method="post">
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
                <input type="password" name="confnueva" id="confnueva" maxlength="16" minlength="8" required>
            </div>
            <div class="row">
                <input type="submit" value="Guardar" class="btn btn-primary d-grid my-3" name="pass">
            </div>
        </form>
    </div>
</div>