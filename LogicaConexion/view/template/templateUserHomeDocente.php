<main class="bgG my-2">
  
<div class="d-none d-sm-none d-md-block d-lg-block col-md-5 col-lg-5 widhtEntrarChat">
    <div class="d-flex flex-column align-items-stretch flex-shrink-0 bgG scrollarea">
      <div class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
        <span class="fs-5 fw-semibold text-white">Chats</span>
        <div class="my-3" id="ModalConectadosID">
          <a href="#0">
            <button class=" btn text-white fw-light lh-1 fs-6" data-bs-toggle="modal" data-bs-target="#ModalConectados" aria-hidden="true">Personas conectadas</button>
            <button class=" btn text-white" data-bs-toggle="modal" data-bs-target="#ModalConectados"><i class="fas fa-user-friends fa-2x"></i></button>
          </a>
        </div>
      </div>
      <div class="container scrollarea ingresarChat" id="chat"></div>
    </div>
  </div>


  <div class="col-12 col-sm-12 d-md-none d-lg-none">
    <div class="d-flex flex-column align-items-stretch flex-shrink-0 bgG scrollarea">
      <div class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
        <span class="fs-5 fw-semibold text-white">Chats</span>
        <div class="my-3" id="ModalConectadosID">
          <a href="#0">
            <button class=" btn text-white fw-light lh-1 fs-6" data-bs-toggle="modal" data-bs-target="#ModalConectados" aria-hidden="true">Personas conectadas</button>
            <button class=" btn text-white" data-bs-toggle="modal" data-bs-target="#ModalConectados"><i class="fas fa-user-friends fa-2x"></i></button>
          </a>
        </div>
      </div>
      <div class="container scrollarea ingresarChat" id="chatR"></div>
    </div>
  </div>

  <?php
  include('../LogicaConexion/view/components/modalCrearChat.php');
  include('../LogicaConexion/view/components/modalConectados.php');
  ?>


  <div class="d-none d-sm-none d-md-block d-lg-block d-xl-bloc">
    <div class="col widhtChat">
      <div class="bg-light shadow-lg Brounded">
        <section id="enviar" class="py-2 ">
          <div class="container text-center bg-light Brounded">
            <div class="container p-2 bgNameChat" style="background-image: url(../LogicaConexion/view/img/bg/chat/<?php echo $fondoChat; ?>);">
              <h1 class="text-white"> <?php if (isset($_POST['nombre'])) {
                                        echo $_POST['nombre'];
                                      } else {
                                        echo "HOME";
                                      }; ?> </h1>
            </div>
          </div>
        </section>

        <div class="container scrollarea chat rounded" style="background-image: url(../LogicaConexion/view/img/bg/chat/<?php echo $fondoChat; ?>)" id="chatContainer">
          <?php
          if (isset($_POST['ingresarChat'])) {
            $_SESSION['IDChat'] = $_POST['IDChat'];
            include('../LogicaConexion/view/template/templateChat.php');
          }
          ?>
        </div>

        <?php
        if (isset($_POST['ingresarChat'])) {
        ?>
          <section id="enviar" class="py-2">
            <div class="container text-center row">
              <div class="col-11">
                <input required class="form-control " type="text" id="msg" name="" maxlength="500" placeholder="Ingrese Mensaje" pattern="[A-Za-z]{4-16}" onkeyup="check(event)">
              </div>
              <div class="col-1 text-center">
                <button onclick="enviar()" type="button" class="btn text-white colorNameChat Brounded fw-bold"><i class="fas fa-paper-plane"></i></button>
              </div>
            </div>
          </section>
        <?php
        }
        ?>
      </div>
    </div>
  </div>

</main>