<!-- Template que se va a reutilizar para las aplicaciones de login -->

<div class="d-flex justify-content-center">
  <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6">
    <div class="container bg-white p-2 p-sm-3 p-md-4 p-lg-5 my-5 rounded shadow .d-none .d-sm-block">
      <div class="text-end ">
        <img src="../LogicaConexion/view/img/logos/logo.jpg" width="50px" alt="" class="p-2 p-sm-2 p-md-0 p-lg-0">
      </div>
      <div>
        <h1 class="fw-bold text-center">Bienvenido a MyQ</h1>
        <h1 class="fw-bold text-center">No tengas más dudas!</h1>
      </div>
      <div class="my-4">
        <label for="mail" class="form-label">Correo Electrónico</label>
        <input id="mail" name="mail" type="email" class="form-control" id="mail" aria-describedby="emailHelp" required>
        <div id="emailHelp" class="form-text">Ej. example@gmail.com</div>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input id="password" name="password" type="password" class="form-control" maxlength="16" minlength="8" id="password" required>
      </div>

      <div class="mb-3 container text-center">
        <div class="row">
          <div class="col"></div>
          <div class="col">
            <div class="g-recaptcha" data-sitekey="6LdfNOMcAAAAAJXRNVMrOATuMJwSuBMXiRFCF6qA"></div>
            <div id="captcha"></div>
          </div>
          <div class="col"></div>
        </div>
      </div>

      <div class="d-grid">
        <input type="button" onclick="comprobar()" value="Logearse" name="login" class="btn btn-primary">
      </div>
      <div class="my-3 text-center pt-3">
        <span>¿No tienes cuenta? ¡Puedes hacerte una! <a href="<?php echo DIR_REGISTER; ?>">¡AQUÍ!</a></span>
        <br>
        <span><a href="RecuperarContraseña.php">¿Olvidaste tu contraseña?</a></span>
      </div>
    </div>
  </div>
</div>
