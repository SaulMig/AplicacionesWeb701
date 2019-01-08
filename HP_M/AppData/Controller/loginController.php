<?php


namespace AppData\Controller;


class loginController
{
    private $login;

    public function __construct()
        {
            $this->login= new \AppData\Model\Login();
        }

    public function index()
        {
            //session_destroy();
        }
    public function verify()
        {
            $_SESSION["error_login"]="";

            if(isset($_POST)) {
                $this->login->set("email", $_POST["email"]);
                $this->login->set("pass", $_POST["password"]);
                $datos = $this->login->verify();
                if (mysqli_num_rows($datos) > 0) {
                    $datos=mysqli_fetch_assoc($datos);
                    $_SESSION["username"]=$datos["email"];
                    /*header("Location:" . URL . "Empleado_bienvenido");*/

                }
                else {
                    $_SESSION["error_login"] = "los datos no coinciden con nuestros registros";
                    header("Location:" . URL . "login");
                }
            }
        }
    public function reset()
    {
        if(isset($_POST)) {
            $this->login->set("email", $_POST["email"]);
            $this->login->set("nombre", $_POST["nombre"]);
            $this->login->set("telefono", $_POST["telefono"]);
            $datos = $this->login->recuperar();
            print_r(json_encode(mysqli_fetch_assoc($datos)));
        }

    }
    public function logout()
        {
            session_destroy();
//            header("Location:".URL);
        ?>

        <script type="text/javascript">
            window.location.href = "<?php echo URL?>";
        </script>
<?php

        }
}
