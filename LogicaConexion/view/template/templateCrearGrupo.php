<main class="rel">
    <div class="container bg-light  w-50 shadow Brounded my-auto" style="max-height: 80vh">
        <form action="controller/crearGrupo.php" method="POST">

            <div class="bgAzul Brounded text-center p-2 my-3">
                <label for="nombreGrupo"><strong>Nombre del Grupo</strong></label>
                <input class="Brounded p-1" type="text" name="nombreGrupo" required>
            </div>


            <div class="bgAzul Brounded text-center p-2 my-3">
                <label for="nombreOrientacion"><strong>Nombre de la Orientacion</strong></label>
                <input class="Brounded p-1" type="text" name="nombreOrientacion" required>
            </div>


            <div style="width:100%; max-height: 20em; overflow: scroll">
                <?php
                include 'controller/mostrarAsignatura.php';

                if ($asignaturas != null) {
                    $i = 1;
                    foreach ($asignaturas as $row) {
                ?>

                        <div class="Brounded mx-auto my-2 text-center row">
                            <div class="text-dark">
                                <input class="mr-2 " type="checkbox" name="<?php echo $row['IDAsignatura']; ?>">
                                <label class="ml-2" for="<?php echo $row['IDAsignatura']; ?>"><strongB><?php echo $row['NomAsignatura']; ?></strongB></label>

                                <input type="hidden" value="<?php echo $row['IDAsignatura']; ?>" name="<?php echo "ID" . $row['IDAsignatura']; ?>">
                            </div>
                        </div>

                    <?php
                    }
                } else {
                    ?>
                    <div class="text-center">
                        <h3>No hay Asignaturas registradas</h3>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class=" d-grid mt-5 mb-2">
                <button class="btn btn-success Brounded" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</main>
