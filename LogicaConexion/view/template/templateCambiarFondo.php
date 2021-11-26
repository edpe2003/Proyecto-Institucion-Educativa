<div class="container p-3 p-sm-4 p-md-5 p-lg-5 bg-white my-5 Brounded shadow">
    <div class="mb-5">
        <h1 style="text-align:center">Cambiar Fondo del Chat</h1>

        <form action="">
            <div class="my-4 text-center">
                <div class="mb-3">
                    <div class="">
                        <img class="Brounded shadow-lg" src="../LogicaConexion/view/img/bg/chat/<?php echo $fondoChat;?>" alt="..." width="50%" height="50%">
                    </div>
                    <div>
                        <button type="button" class="btn btn-primary Brounded mt-3" data-bs-toggle="modal" data-bs-target="#modalFondoChat">
                            Cambiar Fondo
                        </button>
                        <?php
                        include('../LogicaConexion/view/components/modalFondoChat.php');
                        ?>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>