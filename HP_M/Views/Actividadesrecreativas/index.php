<?php
?>
<div class="container-fluid">
    <div class="row">
        <main role="main" class="col-md-12">

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h5>Actividades Recreativas</h5>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <button type="button" class="nav-link btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#agregar">+</button>
                        <a href="<?php echo URL?>Actividadesrecreativas/print_pdf" target="_blank" class="nav-link btn btn-sm btn-outline-secondary">PDF</a>
                        <a href="#!" id="graficar_habitaciones" class="nav-link btn btn-sm btn-outline-secondary">Gráfica</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row " id="body_table">
                    <?php
                    require_once ("tabla.php");
                    ?>
                </div>
            </div>

        </main>

    </div>
</div>


<!-- Modal insertar -->
<div class="modal fade" id="agregar" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation"  id="save_emp" method="POST" action="<?php echo URL ?>Actividadesrecreativas/crear"  autocomplete="off" novalidate enctype="multipart/form-data">
                    <div class="form-row">
                        <input type="hidden" name="id_dato" value="<?php echo $row[0]?>">
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" required>
                            <div class="invalid-feedback">
                                Ingresa un titulo
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                            <div class="invalid-feedback">
                                Ingresa una descripcion
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="hora_inicio">Hora inicio</label>
                            <input type="time" class="form-control" id="hora_inicio" name="hora_inicio" required>
                            <div class="invalid-feedback">
                                Ingrese una hora
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="hora_fin">Hora fin</label>
                            <input type="time" class="form-control" id="hora_fin" name="hora_fin" required>
                            <div class="invalid-feedback">
                                Ingrese una hora
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" required>
                            <div class="invalid-feedback">
                                Ingresa un telefono
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input type="text" class="form-control" id="correo" name="correo" required>
                            <div class="invalid-feedback">
                                Ingresa un correo
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pagina">Pagina</label>
                            <input type="text" class="form-control" id="pagina" name="pagina" required>
                            <div class="invalid-feedback">
                                Ingresa una pagina
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ubicacion">Ubicacion</label>
                            <input type="text" class="form-control" id="ubicacion" name="ubicacion" required>
                            <div class="invalid-feedback">
                                Ingresa una ubicacion
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="imagen">imagen</label>
                            <input type="file" class="form-control" id="imagen" name="imagen" required>
                            <div class="invalid-feedback">
                                Ingresa una imagen
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit" href="#!" id="save_emp_ok">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="modal_eliminar">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">¿Desea eliminar el registro?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="eliminar_ok" data-dismiss="modal" >
                    Aceptar
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);


                $("#body_table").on("click","a.btn_eliminar",function(){
                    var id=$(this).data("id");
                    var url='<?php echo URL?>actividadesrecreativas/eliminar/'+id;
                    $("#eliminar_ok").attr("url",url);
                    $("#modal_eliminar").modal('show');
                });
                $("#eliminar_ok").click(function(){
                    $.get($(this).attr("url"),function(res){
                        $("#body_table").empty().append(res);
                    });
                });

                $("#body_table").on("click","a.btn_modificar",function(){
                    var id=$(this).data("id");
                    $.get("<?php echo URL?>actividadesrecreativas/modificar/"+id,function(res){
                        var datos=JSON.parse(res);
                        $("#update_actrecre_ok").data("id",datos["id_dato"]);
                        $("#titulo").val(datos["titulo"]);
                        $("#descripcion").val(datos["descripcion"]);
                        $("#hora_inicio").val(datos["hora_inicio"]);
                        $("#hora_fin").val(datos["hora_fin"]);
                        $("#telefono").val(datos["telefono"]);
                        $("#correo").val(datos["correo"]);
                        $("#pagina").val(datos["pagina"]);
                        $("#ubicacion").val(datos["ubicacion"]);
                        $("#imagen").val(datos["img"]);
                        Materialize.updateTextFields();
                        $('select').material_select();
                        $("#modificar").modal('show');
                        console.log(res);
                    });
                });
                $("#update_emp_ok").click(function(){
                    var id=$(this).data("id");
                    $.post("<?php echo URL?>Empleado_bienvenido/actualizar/"+id,$("#save_emp").serialize(),function(res){
                        $('#save_emp').find('input, select, textarea').val('');
                        $("#body_table").empty().append(res);

                        swal("Actualización completa", " ", "success");
                    })
                });

                $("#graficar_habitaciones").click(function(){
                    $.get("<?php echo URL?>Empleado_bienvenido/graficar",function(res){
                        $("#modal_grafica .modal-content p").empty().append(res);
                        $("#modal_grafica").modal('show');
                    });
                });

            });
        }, false);
    })();

</script>