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

    <title>Ver Consultas</title>
</head>

<body class="bgG2">
    <?php
    include('controller/verConsulta.php');
    require_once '../LogicaConexion/view/components/userNavbarAdministrador.php';
    include ('../LogicaConexion/view/template/templateVerConsultasAdmin.php');

    echo BOOTSTRAP_BUNDLE_JS;
    ?>
</body>

</html>