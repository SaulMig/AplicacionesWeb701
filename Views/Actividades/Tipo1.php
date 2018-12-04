<?php
?>
<div class="container-fluid">
    <div class="row">
        <main role="main" class="col-md-12">

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h5>Actividades Recreativas</h5>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a class="nav-link btn btn-sm btn-outline-secondary" href="<?php echo URL ?>Actividades/agregarRecreativas">
                            Agregar
                        </a>
                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target=".bd-example-modal-lg">Agregar Modal</button>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php
                    require_once ("tabla.php");
                    ?>
                </div>
            </div>

        </main>

    </div>
</div>
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle" align="center">Agregar Nueva Actividad Recreativa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
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
                                           id="nombre" name="nombre"></input>
                                    <label for="nombre">Titulo</label>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"
                                           id="edad" name="edad"></input>
                                    <label for="edad">Descripcion</label>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="hora_inicio1" name="hora_inicio1"></input>
                                    <label for="hora_inicio1">Hora inicio</label>
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
                                <br>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button href="#!" class="btn btn-primary " id="enviar" data-id="" type="submit">Guardar</button>
            </div>
        </div>
    </div>
    <script type="text/javascript">


       $('#hora_inicio1').clockpicker({
            placement: 'top',
            align: 'left',
            donetext: 'Aceptar',
            //twelvehour: true,
            autoclose: true
        });


        $('#hora_fin').clockpicker({
            placement: 'top',
            align: 'left',
            donetext: 'Aceptar',
            //,,twelvehour: true,
            autoclose: true
        });
    </script>
</div>
