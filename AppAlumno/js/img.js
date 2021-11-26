function seleccionarImagen(img) {
    event.preventDefault();
    $.ajax({
        type: "post",
        data: {
            "img": img
        },
        url: "controller/avatar.php",
        success: function () {
            window.location.href = "perfil.php";
        }
    }) 
}