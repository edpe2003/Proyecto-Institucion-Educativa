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
    echo DATATABLES_CSS;
    ?>

    <title>Gestionar Docentes</title>
</head>

<body class="bgG2">
    <?php
    require('controller/mostrarDocente.php');
    require_once '../LogicaConexion/view/components/userNavbarAdministrador.php';

    ?>
    <div class=" d-flex justify-content-center m-3 p-3">
        <div class="conteiner crystal m-3 p-4 shadow Brounded w-75">
            <div class="table-responsive text-center rounded text-white">
                <table id="tabla" class="table text-white">
                    <thead>
                        <?php
                        require_once '../LogicaConexion/view/template/templateInscripcionesDHead.php';
                        ?>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < count($IDDocente); $i++) {
                            include '../LogicaConexion/view/template/templateInscripcionesDBody.php';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
    echo BOOTSTRAP_BUNDLE_JS;
    echo DATATABLES_PDMAKER_FSFONTS;
    echo DATATABLES_LOCAL_JS;
    ?>
</body>

</html>