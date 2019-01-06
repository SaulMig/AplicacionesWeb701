

<?php
?>
<div>
    <a class="btn-secondary col-form-label " href="<?php echo URL ?>Actividades/Tipo1" >
        Regresar
    </a>
</div>
 <form class="needs-validation"  method="POST" action="<?php echo URL?>Actividades/agregarRecreativas" novalidate id="save_img" enctype="multipart/form-data" autocomplete="off">
    <div class="container justify-content-md-center">
      <div class="py-5 text-center">
        <h2>Agregar</h2>
        <p class="lead">Agregar nueva actividad recreativa</p>
      </div>
      <div class="row justify-content-md-center">
        <div class="col-md-8 order-md-1">
          <form class="needs-validation" novalidate>
            <div class="mb-3">
              <label for="imagen">Selecionar imagen</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="imagen" name="imagen"required>

                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                <div class="invalid-feedback" style="width: 100%;">Es nesesario selecionar una imagen</div>
              </div>
            </div>
              <br>

                  <form class="form-signin" action="" method="post" id="actualizacion">
                      <input type="hidden" name="id" id="id">
                      <div class="form-group">

                          <input type="text" class="form-control"
                                 id="titulo" name="titulo"></input>
                          <label for="titulo">Titulo</label>
                      </div>
                      <div class="form-group">
                          <textarea class="form-control" rows="3" id="descripcion" name="descripcion"></textarea>
                          <label for="descripcion">Descripcion</label>
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control" id="hora_inicio" name="hora_inicio"></input>
                          <label for="hora_inicio">Hora inicio</label>
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control" id="hora_fin" name="hora_fin"></input>
                          <label for="hora_fin">Hora fin</label>
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control"
                                 id="Telefono" name="Telefono"></input>
                          <label for="Telefono">Telefono</label>
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control"
                                 id="Correo" name="Correo"></input>
                          <label for="Correo">Correo</label>
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control"
                                 id="Pagina" name="Pagina"></input>
                          <label for="Pagina">Pagina</label>
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control"
                                 id="ubicacion" name="ubicacion"></input>
                          <label for="ubicacion">Ubicacion</label>
                      </div>
          </div>
      </div>
      <div class="row justify-content-md-center">
        <button href="#!" class="btn btn-secondary " id="enviar" data-id="" type="submit">Guardar</button>
      </div>
  </form>
<br>
<br>
<br>
<script type="text/javascript">

    var input1 = $('#hora_inicio').clockpicker({
        placement: 'top',
        align: 'left',
        donetext: 'Aceptar',
        twelvehour: true
    });

    var input2 = $('#hora_fin').clockpicker({
        placement: 'top',
        align: 'left',
        donetext: 'Aceptar',
        twelvehour: true
    });
</script>