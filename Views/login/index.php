<div class="container center">
    <div>
        <h5 class="red-text">
            <?php echo isset($_SESSION["error_login"])?$_SESSION["error_login"]:""?>
        </h5>
    </div>
    <div class="container">
        <h1 class="form-heading">login Form</h1>
        <div class="login-form">
            <div class="main-div">
                <form method="post" action="<?php echo URL?>login/verify">
                    <div class="panel">
                        <h3>Inicio de Sesión</h3>
                        <p>Por favor ingresa tu e-mail y contraseña</p>
                    </div>
                    <div class='form-group'>
                        <div class='input-field col s12'>
                            <input class='validate' type='email' name='email' id='email'>
                        </div>
                    </div>

                    <div class='form-group'>
                        <div class='input-field col s12'>
                            <input class='validate' type='password' name='password' id='password'>
                        </div>
                    </div>

                    <br />
                    <center>
                        <div class='row'>
                            <button type='submit' name='btn_login'><b>Entrar</b></button>
                        </div>

                    </center>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        Materialize.updateTextFields();
    });
</script>
