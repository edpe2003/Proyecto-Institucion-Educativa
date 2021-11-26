<div class="d-flex justify-content-center">
    <div class="col-9 col-sm-8 col-md-5 col-lg-3">
        <form action="controller/eliminarChat.php" method="POST">
            <div class="container">
                <div class=" align-middle container crystal text-center p-4 text-white rounded shadow-lg mt-3 mt-sm-3 mt-md-4 mt-lg-5 ">
                    <div class="col">
                        <div class="row">
                            <h4 for="descripcion">Que te parecio el chat? te fue de ayuda?</h4>
                        </div>
                        <div class="row mt15">
                            <textarea class="rounded" id="descripcion" name="descripcion" rows="4" cols="50" required></textarea>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-3">
                                <div class="d-grid row">
                                    <a class="btn btn-danger Brounded" href="home.php">Cancelar</a>
                                </div>
                            </div>
                            <div class="col-5 col-sm-6 col-md-6 col-lg-6"></div>
                            <div class="col-3">
                                <div class="d-grid  row">
                                    <input type='hidden' name='IDChat' value="<?php echo $_POST['IDChat'] ?>">
                                    <input class="btn btn-success Brounded" type="submit" value="Enviar" name="eliminar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>