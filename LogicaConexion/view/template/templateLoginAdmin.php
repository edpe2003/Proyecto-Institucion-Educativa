
<div class="container-md p-5 bg-white my-5 rounded shadow w-50 ">
  <div class="text-end">
    <img src="../LogicaConexion/view/img/logos/logo.jpg" width="10%" alt="">
  </div>
  <div>
    <h1 class="fw-bold text-center pt-5">Bienvenido a MyQ</h1>
  </div>
  <form>
    <div class="my-4">
      <label for="mail" class="form-label">Correo Electronico</label>
      <input name="mail" type="email" class="form-control" id="mail" aria-describedby="emailHelp" required>
      <div id="emailHelp" class="form-text">Ej. example@gmail.com</div>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Contraseña</label>
      <input name="password" type="password" class="form-control" maxlength="16" minlength="8" id="password" required>
    </div>

    <div class="d-grid">
      <input type="submit" value="Logearse" name="login" class="btn btn-primary">
    </div>

  </form>
</div>