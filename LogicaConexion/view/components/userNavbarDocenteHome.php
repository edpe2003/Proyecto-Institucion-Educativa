<!-- NAVBAR QUE SE USA EN EL HOME Y DEMAS PAGINAS DEL USUARIO ALUMNO-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php"> <img src="../LogicaConexion/view/img/logos/LogoMyQ.png" alt="" width="80"> MyQ Docentes</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavDocente" aria-controls="mainNavDocente" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse flex-row-reverse transition" id="mainNavDocente">
            <ul class="navbar-nav">

                <li class="nav-item mx-3">
                    <div class="">
                        <button class="btn text-white navbarItem navBold w-100 m-1" data-bs-toggle="modal" data-bs-target="#ayuda"><i class="fas fa-info mx-2"></i>Ayuda</button>
                    </div>
                </li>

                <li class="nav-item mx-3 mt-1">
                    <div class="dropdown">
                        <a class="btn navbarItem  Brounded navBold text-white w-100 m-1" href="faqs.php" role="button">
                            <i class="far fa-lightbulb mx-2"></i>
                            FAQs
                        </a>
                    </div>
                </li>

                <li class="nav-item mx-3 mt-1">
                    <div class="dropdown">
                        <a class="btn navbarItem Brounded navBold text-white w-100 m-1" href="consultas.php">
                            <i class="fas fa-question mx-2"></i>
                            Consultas
                        </a>
                    </div>
                </li>


                <li class="nav-item mx-3 mt-1">
                    <a class="btn navbarItem Brounded navBold text-white w-100 m-1" href="grupos.php" role="button">
                        <i class="fas fa-users mx-2"></i>
                        Grupos
                    </a>

                </li>

                <li class="nav-item mx-3 mt-1">
                    <div class="dropdown">
                        <a class="btn navbarItem dropdown-toggle Brounded navBold text-white w-100 m-1" href="consultas.php" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user mx-2"></i>
                            Perfil
                        </a>

                        <ul class="dropdown-menu bg-dark p__white">
                            <li class="nav-item">
                                <a class="nav-link" href="perfil.php">Ver Perfil</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="controller/cerrarSesion.php">Cerrar sesión</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>




<?php
include('../LogicaConexion/view/components/modalAyudaD.php');
?>