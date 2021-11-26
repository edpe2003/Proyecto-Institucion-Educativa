function recargarChatR() {
    $.ajax({
        url: "controller/IngresarChat.php",
        type: "post",
        success: function (response2) {
            response2 = JSON.parse(response2);
            $('#chatR').html('');
            response2.forEach((chat) => {
                $('#chatR').append(`<div class="container chatItemBg Brounded text-white p-2 mt-3 mb-3 text-center">
                                        <div class="row">
                                            <div class="col-10">
                                                <form action="chatResponsive.php" method="POST">
                                                    <input class="btn btn-primary crystal Brounded p-2 px-5 text-white text-break chatItem fw-bold" type="submit" value="${chat.nombre}" name="ingresarChat">
                                                    <input type='hidden' name='nombre' value="${chat.nombre}">
                                                    <input type='hidden' name='IDChat' value="${chat.IDChat}">
                                                </form>
                                            </div>
                                    
                                        </div>
                                    </div>`
                );
            })
        }
    });
}
setInterval("recargarChatR()", 1000);