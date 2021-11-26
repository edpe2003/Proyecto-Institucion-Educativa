<?php
session_start()
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Consultas</title>

    <!--Llamado a links de bootstrap y constantes-->
    <?php
    include('../LogicaConexion/view/components/favicon.php');
    include('../LogicaConexion/view/template/const.php');
    echo BOOTSTRAP_CSS;
    ;
    echo TAGS_CSS;
    echo FONTAWESOME;
    ?>
</head>

<body class="bgG2">
    <?php
    require_once '../LogicaConexion/view/components/userNavbarDocente.php';
    include('controller/mostrarRespuestaDocente.php');
    echo BOOTSTRAP_BUNDLE_JS;
    ?>
    <div class="d-flex justify-content-center">
        <div class="w-75">
            <?php
            if (isset($_POST['IDConsulta'])) {
                if ($consulta->getEstado() == 'Enviado') {
                    $consulta->setEstado('Leido');
                    $consulta->actualizarEstado();
                    include(DIR_TEMPLATE . '/templateDatosConsultasRespondiendo.php');
                    echo "<form action='controller/responderConsulta.php' method='post'>";
                    include(DIR_TEMPLATE . '/templateResponderConsulta.php');
                    echo "</form>";
                } else {
                    if ($consulta->getEstado() == 'Leido') {
                        include(DIR_TEMPLATE . '/templateDatosConsultasRespondiendo.php');
                        echo "<form action='controller/responderConsulta.php' method='post'>";
                        include(DIR_TEMPLATE . '/templateResponderConsulta.php');
                        echo "</form>";
                    } else {
                        include(DIR_TEMPLATE . '/templateDatosConsultas.php');
                    }
                }
            } else {
                echo "<script>
        location.href = 'consultas.php';
        </script>";
            }
            ?>
        </div>
    </div>
</body>

</html>