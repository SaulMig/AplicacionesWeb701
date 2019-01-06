<?php
$row=mysqli_fetch_array($datos);
?>
<form class="was-validated"  method="POST" action="<?php echo URL?>actividadesrecreativas/actualizar" novalidate id="save_img" enctype="multipart/form-data" autocomplete="off">
    <div class="container justify-content-md-center">
        <div class="py-5 text-center">
            <h2>Actualizar</h2>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-8 order-md-1">
                <form class="needs-validation" novalidate>

                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $row[2]?>" required>
                        <div class="invalid-feedback">
                            Ingresa un titulo
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required><?php echo $row[3]?></textarea>
                        <div class="invalid-feedback">
                            Ingresa una descripcion
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="hora_inicio">Hora inicio</label>
                        <input type="time" class="form-control" id="hora_inicio" name="hora_inicio" value="<?php echo $row[4]?>" required>
                        <div class="invalid-feedback">
                            Ingrese una hora
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="hora_fin">Hora fin</label>
                        <input type="time" class="form-control" id="hora_fin" name="hora_fin" value="<?php echo $row[5]?>" required>
                        <div class="invalid-feedback">
                            Ingrese una hora
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $row[6]?>" required>
                        <div class="invalid-feedback">
                            Ingresa un telefono
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="text" class="form-control" id="correo" name="correo" value="<?php echo $row[7]?>" required>
                        <div class="invalid-feedback">
                            Ingresa un correo
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pagina">Pagina</label>
                        <input type="text" class="form-control" id="pagina" name="pagina" value="<?php echo $row[8]?>" required>
                        <div class="invalid-feedback">
                            Ingresa una pagina
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ubicacion">Ubicacion</label>
                        <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="<?php echo $row[9]?>" required>
                        <div class="invalid-feedback">
                            Ingresa una ubicacion
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="imagen">imagen</label>
                        <input type="file" class="form-control" id="imagen" name="imagen" value="data:image/jpg; base64, <?php echo base64_encode($row[10]); ?>" required>
                        <div class="invalid-feedback">
                            Ingresa una imagen
                        </div>
                    </div>
                    <br>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <button href="#!" class="btn btn-primary " id="enviar" data-id="" type="submit">Enviar</button>
    </div>
    <div id="carga">

    </div>
    <table>
        <thead>
        <tbody id="body" name="body">
        </tbody>
        </thead>
    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</form>