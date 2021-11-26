function comprobar() {
    let response = grecaptcha.getResponse();
    if (response.length != 0) {
        let correo = document.getElementById("mail").value;
        let contraseña = document.getElementById("password").value;
        $.ajax({
            type: "POST",
            data: {
                "mail": correo,
                "password": contraseña
            },
            url: "controller/validarDocente.php",
            success: function (res) {
                res = JSON.parse(res);
                if (res.estado==0) {
                    location.href = 'home.php';
                } else if(res.estado==1){
                    document.getElementById("captcha").innerHTML = "<div class='container bg-danger text-light p-2 center rounded mt-2'><b>Usuario o Contraseña incorrecta</b></div>";
                } else if(res.estado==2){
                    document.getElementById("captcha").innerHTML = "<div class='container bg-warning text-light p-2 center rounded mt-2'><b>Usuario no encontrado</b></div>";
                }
            }
        })
    } else {
        document.getElementById("captcha").innerHTML = "<div class='container bg-primary text-light p-2 center rounded mt-2'><b>Debes de completar el Captcha</b></div>";
    }
}