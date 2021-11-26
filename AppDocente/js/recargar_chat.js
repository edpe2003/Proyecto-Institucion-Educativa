function recargarChat() {
    $.ajax({
        url: "controller/IngresarChat.php",
        type: "post",
        success: function (response2) {
            response2 = JSON.parse(response2);
            $('#chat').html('');
            response2.forEach((chat) => {
                $('#chat').append(`<div class="container chatItemBg Brounded text-white p-2 mt-3 mb-3 text-center">
                                                <form action="home.php" method="POST">
                                                    <input class="btn btn-primary crystal Brounded p-2 px-5 text-white text-break chatItem fw-bold" type="submit" value="${chat.nombre}" name="ingresarChat">
                                                    <input type='hidden' name='nombre' value="${chat.nombre}">
                                                    <input type='hidden' name='IDChat' value="${chat.IDChat}">
                                                </form>
                                    
                                        </div>
                                    </div>`
                );
            })
        }
    });
}
setInterval("recargarChat()", 1000);