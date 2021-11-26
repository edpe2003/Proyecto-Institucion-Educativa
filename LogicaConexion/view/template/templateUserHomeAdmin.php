<main class="my-5">

    <div class="container crystal p-4 Brounded scrollarea">
        <div class="row justify-content-center">
            <div class="col-6 ">
                <div class="card Brounded">
                    <div class="card-header">
                        Administración
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title">Inscripciones</h5>
                                <p class="card-text">Checkea, modifica y permite el ingreso a aquellos usuarios que lo pidan.</p>
                                <a href="inscripciones.php" class="btn btn-primary Brounded d-grid mt-5">Ir a la Pagina</a>
                            </div>
                            <div class="col">
                                <img src="../LogicaConexion/view/img/homeCards/inscripciones.jpg" class="card-img-top Brounded" alt="...">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card Brounded">
                    <div class="card-header">
                        Administración
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title">Gestión de Asignaturas</h5>
                                <p class="card-text">Crea nuevas asignaturas para aquellos grupos que administres.</p>
                                <a href="asignaturas.php" class="btn btn-primary Brounded d-grid mt-5">Ir a la Pagina</a>
                            </div>
                            <div class="col">
                                <img src="../LogicaConexion/view/img/homeCards/gesA.jpg" class="card-img-top Brounded" alt="...">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <div class="card Brounded">
                    <div class="card-header">
                        Administración
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title">Gestión de Grupos</h5>
                                <p class="card-text">Crea, Modifica y Administra todos tus grupos.</p>
                                <a href="grupos.php" class="btn btn-primary Brounded d-grid mt-5">Ir a la Pagina</a>
                            </div>
                            <div class="col">
                                <img src="../LogicaConexion/view/img/homeCards/gesG.jpg" class="card-img-top Brounded" alt="...">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card Brounded">
                    <div class="card-header">
                        Administración
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title">Gestión Docentes</h5>
                                <p class="card-text">Administra las asignaturas y materias de todos los docentes</p>
                                <div class=" d-grid">
                                    <a href="inscripcionesDocente.php" class="btn btn-primary Brounded d-grid mt-5">Ir a la página</a>
                                </div>
                            </div>
                            <div class="col">
                                <img src="../LogicaConexion/view/img/homeCards/gesD.jpg" class="card-img-top Brounded" alt="...">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <div class="card Brounded">
                    <div class="card-header">
                        Administración
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title">Gestionar Consultas</h5>
                                <p class="card-text">Gestionas todas aquellas consultas que se realizen en el sistema.</p>
                                <a href="consultas.php" class="btn btn-primary Brounded d-grid mt-5">Ir a la página</a>
                            </div>
                            <div class="col">
                                <img src="../LogicaConexion/view/img/homeCards/gesC.jpg" class="card-img-top Brounded" alt="...">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card Brounded">
                    <div class="card-header">
                        Administración
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title">Crea Asignaturas</h5>
                                <p class="card-text">Ahorra tiempo creando nuevas asignaturas directamente desde aqui!</p>
                                <div class=" d-grid">
                                    <button class=" btn btn-primary text-white mt-5 Brounded" data-bs-toggle="modal" data-bs-target="#ModalAsignatura">Crear</button>
                                </div>
                            </div>
                            <div class="col">
                                <img src="../LogicaConexion/view/img/homeCards/CA.jpg" class="card-img-top Brounded" alt="...">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</main>

<?php
include('../LogicaConexion/view/components/modalCrearAsignatura.php');
?>