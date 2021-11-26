<div class="container-fluid crystal text-light  my-2 text-start p-5 rounded shadow mt-5">
    <div class="mb-3 h6">
        <label for="contenido" class="form-label">Responder: </label>
    </div>
    <div class="mb-3">
        <textarea name="contenido" class="form-control" type="text" placeholder="Ingrese contenido" maxlength="500" require></textarea>
    </div>
    <div class="mb-3">
        <input type="hidden" name="IDConsulta" value="<?php echo $IDConsulta; ?>">
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-success w-100" value="enviar">
    </div>
</div>