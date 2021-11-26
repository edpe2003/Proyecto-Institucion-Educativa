<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Chat</title>
    <?php
    include('../LogicaConexion/view/components/favicon.php');
    include('../LogicaConexion/view/template/const.php');
    echo BOOTSTRAP_CSS;
    echo TAGS_CSS;
    echo FONTAWESOME;
    echo BOOTSTRAP_BUNDLE_JS;
    ?>

</head>

<body class="bgG2">
    <div class="rel">
        <?php
        require_once '../LogicaConexion/view/template/templateEliminarChat.php';
        ?>
    </div>
</body>

</html>