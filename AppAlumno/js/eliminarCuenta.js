function eliminarCuenta() {
    var respuesta = confirm("Advertencia: Una vez que elimines tu perfil, todos los datos que tengas en este se eliminaran de forma permanente")
    if (respuesta){
        $.ajax({
            url: "controller/bajaPersona.php",
            success: function () {
                location.href = 'index.php';
            }
        });
    }
}