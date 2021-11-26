var cant_mensaje = 0;
var idpersona;
idUsuario();

function check(e) {
    if (e.which == 13) {
        enviar();
    }
}

function recargar() {
    $.ajax({
        url: "ajax/mensajes.php",
        type: "post",
        success: function (response) {
            if (response != 0) {
                response = JSON.parse(response);
                if (response.length > cant_mensaje) {
                    $('#mensajes').html('');
                    let idpersonamensaje = null;
                    response.forEach((mensaje) => {
                        if (idpersona == mensaje.IDPersona) {
                            if (idpersonamensaje && idpersonamensaje == mensaje.IDPersona) {
                                $('#mensajes').append(`
                            <div class=" mensajeChat container bgMensajes Brounded text-white p-2 mt-3 mb-3">
                                <div class="p-3 row ">
                                    <div class=" col-12 ">
                                        ${mensaje.texto.replace(/</g, "&lt;").replace(/>/g, "&gt;")}
                                    </div>
                                    <div class="float-end col-12 m-2 d-flex flex-row-reverse">
                                        ${mensaje.fechaHora.replace(/</g, "&lt;").replace(/>/g, "&gt;")}
                                    </div>
                                </div>
                            </div>`);
                            } else {
                                $('#mensajes').append(`
                            <div class="mensajeChat container bgMensajes Brounded text-white p-2 mt-3 mb-3">
                                <div class="p-1 bg-light Brounded">
                                    <div class="colorNameChat Brounded">
                                        <img class="shadow-lg imgChat" src="../LogicaConexion/view/img/avatars/${mensaje.avatar}" width="100%" height="100%">
                                        <b class="mx-3">${mensaje.nombre.replace(/</g, "&lt;").replace(/>/g, "&gt;")}</b>
                                        <div class="float-end m-2">
                                            ${mensaje.fechaHora.replace(/</g, "&lt;").replace(/>/g, "&gt;")}
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3">
                                    ${mensaje.texto.replace(/</g, "&lt;").replace(/>/g, "&gt;")}
                                </div>
                            </div>`);
                            }
                        } else {
                            if (idpersonamensaje && idpersonamensaje == mensaje.IDPersona) {
                                $('#mensajes').append(`
                            <div class="mensajeChat container bgMensajes Brounded text-white p-2 mt-3 mb-3">
                                <div class="p-3 row ">
                                    <div class=" col-12 ">
                                        ${mensaje.texto.replace(/</g, "&lt;").replace(/>/g, "&gt;")}
                                    </div>
                                    <div class="float-end col-12 m-2 d-flex flex-row-reverse">
                                        ${mensaje.fechaHora.replace(/</g, "&lt;").replace(/>/g, "&gt;")}
                                    </div>
                                </div>
                            </div>`);
                            } else {
                                $('#mensajes').append(`
                            <div class="mensajeChat container bgMensajes Brounded text-white p-2 mt-3 mb-3">
                                <div class="p-1 bg-light Brounded">
                                    <div class="bg-secondary Brounded">
                                        <img class="shadow-lg imgChat" src="../LogicaConexion/view/img/avatars/${mensaje.avatar}" width="100%" height="100%">
                                        <b class="mx-3">${mensaje.nombre.replace(/</g, "&lt;").replace(/>/g, "&gt;")}</b>
                                        <div class="float-end m-2">
                                            ${mensaje.fechaHora.replace(/</g, "&lt;").replace(/>/g, "&gt;")}
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3">
                                    ${mensaje.texto.replace(/</g, "&lt;").replace(/>/g, "&gt;")}
                                </div>
                            </div>`);
                            }
                        }
                        idpersonamensaje = mensaje.IDPersona;
                    });

                    let element = document.getElementById("chatContainer");
                    element.scrollTop = element.scrollHeight
                }
                cant_mensaje = response.length;
            } else if(response == 0){
                location.href = 'home.php';
            }
        }
    })
}

function enviar() {
    if (document.getElementById("msg").value) {
        var mensaje = $("#msg").val();
        var parametros = {
            "mensaje": mensaje
        };
        $.ajax({
            type: "post",
            data: parametros,
            url: "ajax/enviar.php",
            success: function (response) {
                $("#hide").html(response);
                $("#msg").val('');
                recargar();
            }
        })
    }
}

function idUsuario(params) {
    $.ajax({
        url: "ajax/idpersona.php",
        type: "post",
        success: function (response) {
            idpersona = response;
        }
    })
}

setInterval("recargar()", 1000);

