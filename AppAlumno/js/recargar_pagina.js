function recargarConectados() {
    $.ajax({
        url: "controller/verGrupoPersona.php",
        type: "post",
        success: function (respuesta) {
            $("#recargar").html(respuesta);
        }
    })
}
setInterval("recargarConectados()", 1000);