<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    include('../LogicaConexion/view/components/favicon.php');
    include('../LogicaConexion/view/template/const.php');
    echo BOOTSTRAP_CSS;
    echo FONTAWESOME;
    echo TAGS_CSS;
    ?>
    <title>Gestion Docente</title>
</head>

<body class="bgG2">
    <?php
    require('controller/gestionarDocente.php');
    require('controller/verGruposAsignaturas.php');
    require_once '../LogicaConexion/view/components/userNavbarAdministrador.php';
    ?>
    <a href="inscripcionesDocente.php" class="p__white"><i class="fas fa-chevron-left fa-3x p-2"></i></a>
    <div class="d-flex justify-content-center m-3 p-3">
        <div class="conteiner crystal m-3 p-4 shadow Brounded w-75">
            <div class="table-responsive rounded">
                <table class="table text-white">
                    <?php
                    require_once '../LogicaConexion/view/template/templateGestionarDHead.php';
                    include '../LogicaConexion/view/template/templateGestionarDBody.php';
                    ?>
                </table>
            </div>
        </div>
    </div>


    <?php
    echo BOOTSTRAP_BUNDLE_JS;
    ?>
</body>

</html>