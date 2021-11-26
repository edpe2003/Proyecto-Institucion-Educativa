<main class="bgG data-simplebar justify-content-center">
  <div class="col-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col">
      <div class="bg-light shadow-lg">
        <section id="enviar" class="py-2 ">
          <div class=" text-center bg-light">
            <div class="container p-2" style="background-image: url(../LogicaConexion/view/img/bg/chat/<?php echo $fondoChat; ?>);">
              <h1 class="text-white"> <?php if (isset($_POST['nombre'])) {
                                        echo '<a href="home.php" class="p__white"><i class="fas fa-chevron-left p-2"></i></a>' . $_POST['nombre'];
                                      } else {
                                        echo "HOME";
                                      }; ?> </h1>
            </div>
          </div>
        </section>

        <div class="container scrollarea chat" style="background-image: url(../LogicaConexion/view/img/bg/chat/<?php echo $fondoChat; ?>)" id="chatContainer">
          <?php
          if (isset($_POST['ingresarChat'])) {
            $_SESSION['IDChat'] = $_POST['IDChat'];
            include('../LogicaConexion/view/template/templateChat.php');
          }
          ?>
        </div>
        <section id="enviar" class="py-2">
          <div class="container text-center row">
            <div class="col-11 w-75">
              <input required class="form-control " type="text" id="msg" name="" maxlength="500" placeholder="Ingrese Mensaje" pattern="[A-Za-z]{4-16}" onkeyup="check(event)">
            </div>
            <div class="col-1 text-center w-25">
              <button onclick="enviar()" type="button" class="btn text-white colorNameChat Brounded fw-bold"><i class="fas fa-paper-plane"></i></button>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>