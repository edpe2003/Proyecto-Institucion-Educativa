function recargarConectados() {
    $.ajax({
        url: "controller/verGrupoDocente.php",
        type: "post",
        success: function (respuesta) {
            $("#recargar").html(respuesta);
        }
    })
}
setInterval("recargarConectados()", 1000);