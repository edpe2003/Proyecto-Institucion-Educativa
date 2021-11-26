<div class="container p-5 crystal my-5 Brounded shadow w-50">
  <div class="mb-5 text-white">
    <h1 style="text-align:center ">Datos del Alumno</h1>

    <form class="mt-5" action="controller/ModificarAlumno.php" method="post">

      <input type="hidden" name="idPersona" value="<?php echo $data[0]['IDPersona'] ?>">

      <div class="input-group m-3">
        <span class="input-group-text" id="nombre">Nombre:</span>
        <input type="text" class="form-control" value="<?php echo $data[0]['Nombre'] ?>" name="nombre" aria-label="nombre" aria-describedby="basic-addon1">
        <button class="btn btn-primary" type="submit" name="cambiarNombre">Cambiar</button>
      </div>

      <div class="input-group m-3">
        <span class="input-group-text" id="segundoNombre">Segundo Nombre:</span>
        <input type="text" class="form-control" value="<?php echo $data[0]['SegundoNombre'] ?>" name="segundoNombre" aria-label="segundoNombre" aria-describedby="basic-addon1">
        <button class="btn btn-primary" type="submit" name="cambiarSegundoNombre">Cambiar</button>
      </div>

      <div class="input-group m-3">
        <span class="input-group-text" id="Apellido">Apellido:</span>
        <input type="text" class="form-control" value="<?php echo $data[0]['Apellido'] ?>" name="apellido" aria-label="apellido" aria-describedby="basic-addon1">
        <button class="btn btn-primary" type="submit" name="cambiarApellido">Cambiar</button>
      </div>

      <div class="input-group m-3">
        <span class="input-group-text" id="segundoApellido">Segundo Apellido:</span>
        <input type="text" class="form-control" value="<?php echo $data[0]['SegundoApellido'] ?>" name="segundoApellido" aria-label="segundoApellido" aria-describedby="basic-addon1">
        <button class="btn btn-primary" type="submit" name="cambiarSegundoApellido">Cambiar</button>
      </div>

      <div class="input-group m-3">
        <span class="input-group-text" id="Nickname">Nickname:</span>
        <input type="text" class="form-control" value="<?php echo $data[0]['NickName'] ?>" name="nickname" aria-label="nickname" aria-describedby="basic-addon1">
        <button class="btn btn-primary" type="submit" name="cambiarNickname">Cambiar</button>
      </div>

      <div class="input-group m-3">
        <span class="input-group-text" id="Correo">Correo:</span>
        <input type="text" class="form-control" value="<?php echo $data[0]['correo'] ?>" name="correo" aria-label="correo" aria-describedby="basic-addon1">
        <button class="btn btn-primary" type="submit" name="cambiarCorreo">Cambiar</button>
      </div>

      <!--
      <div class="row input-group m-3">
        <div class="col-auto d-grid">
          <label for="nueva" id="nueva">Nueva Contraseña</label>
        </div>
        <div class="col-auto d-grid">
          <input type="password" class="form-control" name="nueva"  maxlength="16" minlength="8" aria-label="nueva" aria-describedby="basic-addon1">
        </div>
      </div>

      <div class="row input-group m-3">
        <div class="col-auto d-grid">
          <label for="confnueva" id="connewpass">Confirmar Nueva Contraseña</label>
        </div>
        <div class="col-auto d-grid">
          <input type="password" class="form-control" name="confnueva" id="connewpass" maxlength="16"  aria-label="connewpass" aria-describedby="basic-addon1" minlength="8">
        </div>
      </div>
      
      <div class="row">
        <input type="submit" value="Guardar" class="btn btn-primary d-grid my-3" name="cambiarDatos">
      </div>
      -->

      <div class="input-group m-3">
        <span class="input-group-text" id="Correo">Grupo: <?php echo $data[0]['nombre'] ?></span>
        <span class="input-group-text" id="Correo">orientacion: <?php echo $data[0]['orientacion'] ?></span>
      </div>
    </form>
    <form action="controller/estadoInscripcion.php" method="post" class="container">
      <input type="hidden" name="idPersona" value="<?php echo $data[0]['IDPersona'] ?>">
      <div class="row">
        <div class="col">
          <button type="submit" class="btn btn-danger Brounded" name="desaprobar">Desaprobar</button>
        </div>
        <div class="col d-flex justify-content-end">
          <button type="submit" class="btn btn-success Brounded d-flex" name="aprobar">Aprobar</button>
        </div>
      </div>



    </form>
  </div>
</div>