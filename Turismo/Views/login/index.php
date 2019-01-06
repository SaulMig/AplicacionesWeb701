<div class="container center">
    <div>
        <h5 class="red-text">
            <?php echo isset($_SESSION["error_login"])?$_SESSION["error_login"]:""?>
        </h5>
    </div>
    <div class="container">
        <h1 class="form-heading">login Form</h1>
        <div class="login-form">
            <div class="main-div" >
                <img src="<?php echo URL?>Public/imagenes/users.png" alt="ok" width="80" heigh="80" class="img-raised  img-fluid">
                <form method="post" action="<?php echo URL?>login/verify"  autocomplete="off">
                    <br>
                    <div class="mb-3">
                        <label for="nombre">Correo</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Correo" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Correo requerido
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pass">Contraseña</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Contraseña requerida
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-secondary" name='btn_login'>Login</button>
                    </div>
                </form>
                <a href="#" class="forgot-password" data-toggle="modal" data-target="#exampleModalCenter">
                    Ha olvidado la contraseña?
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Recuperar contraseña</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class=" col-mb-12 modal-body row justify-content-md-center">
                <form id="restaurar" class="was-validated">
                    <div class="col-mb-12 ">
                        <label for="email">Correo</label>
                        <input type="email" class="form-control " id="email"  name="email"value="crishobbes@gmail.com" required>
                        <div class="invalid-feedback">Campo requerido</div>
                    </div>
                    <div class="col-mb-12">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control " id="nombre" name="nombre" value="Cristian" required>
                        <div class="invalid-feedback">Campo requerido</div>
                    </div>
                    <div class="col-mb-12 ">
                        <label for="numero">Telefono</label>
                        <input type="number" name="telefono" step="any" class="form-control" value="7223221534" id="telefono" required="">
                        <div class="invalid-feedback">Campo requerido (Solo numeros)</div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button"   class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" id="ok" class="btn btn-primary">Restaurar</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#ok').click(function(){
            $.post("<?php echo URL?>login/reset/",$("#restaurar").serialize(),function(res){
                var datos=JSON.parse(res);
                if (($.isEmptyObject(datos))==true){
                    alert("no coinsiden los regitros");
                }else{
                    alert("tu contraseña es: " + datos['pass']);
                }
            });
        });
    });

</script>