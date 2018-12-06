<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 10/05/2018
 * Time: 11:56 AM
 */

namespace Views;


use http\Url;

class Template
{
    public static function header()
    {
       ?>
        <!DOCTYPE html>
        <html>
        <head>

            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- Bootstrap core CSS -->
            <link type="text/css" href="<?php echo URL?>Public/css/bootstrap.min.css" rel="stylesheet">
            <link type="text/css" href="<?php echo URL?>Public/css/modern-business.css" rel="stylesheet">
            <link type="text/css" href="<?php echo URL?>Public/css/dashboard.css" rel="stylesheet">


            <!-- Custom styles for this template -->
            <link type="text/css" href="<?php echo URL?>Public/css/shop-homepage.css" rel="stylesheet">
            <link type="text/css" href="<?php echo URL?>Public/css/login.css" rel="stylesheet">
            <link type="text/css" href="<?php echo URL?>Public/css/style.css" rel="stylesheet">
            <link type="text/css" href="<?php echo URL ?>Public/css/shop-homepage.css" rel="stylesheet">
            <link type="text/css" href="<?php echo URL ?>Public/css/empleado.css" rel="stylesheet">
            <link type="text/css" href="<?php echo URL ?>Public/css/login.css" rel="stylesheet">
            <link type="text/css" href="<?php echo URL ?>Public/css/style3.css" rel="stylesheet">
            <link type="text/css" href="<?php echo URL ?>Public/css/formato.css" rel="stylesheet">
            <link type="text/css" href="<?php echo URL ?>Public/css/sweetalert.css" rel="stylesheet">
            <link type="text/css" href="<?php echo URL ?>Public/css/boostrap.css" rel="stylesheet">
            <link type="text/css" href="<?php echo URL ?>Public/css/glyphicons.css" rel="stylesheet">




            <!-- Bootstrap core JavaScript -->
            <script type="text/javascript" src="<?php echo URL?>Public/jquery/jquery.min.js"></script>
            <script type="text/javascript" src="<?php echo URL?>Public/js/bootstrap.bundle.min.js"></script>

            <script type="text/javascript" src="<?php echo URL ?>Public/js/jquery-1.11.2.min.js"></script>
            <script type="text/javascript" src="<?php echo URL ?>Public/js/bootstrap.js"></script>
            <script type="text/javascript" src="<?php echo URL ?>Public/js/jquery.validate.min.js"></script>
            <script type="text/javascript" src="<?php echo URL ?>Public/js/sweetalert.min.js"></script>
            <script type="text/javascript" src="<?php echo URL ?>Public/js/uifilter.js"></script>
            <script type="text/javascript" src="<?php echo URL ?>Public/js/highcharts.js"></script>

            <link type="text/css" href="<?php echo URL ?>Public/css/clockpicker.css" rel="stylesheet">
            <link type="text/css" href="<?php echo URL ?>Public/css/bootstrap-clockpicker.css" rel="stylesheet">
            <script type="text/javascript" src="<?php echo URL ?>Public/js/clockpicker.js"></script>

        </head>

        <body>


        <nav id="menusito">
            <?php if(!isset($_SESSION["username"]))
            {?>


            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top align-content-center" >
                <div class="container">
                    <a href="<?php echo URL?>inicio"><img src="<?php echo URL?>Public/imagenes/logo(2).png"></a>
                    <nav class="navbar navbar-expand-md navbar-light bg-light">
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Actividades
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="<?php echo URL?>Actividadesrecreativas/tabla">Recreativas</a></li>
                                        <li><a class="dropdown-item" href="<?php echo URL?>Actividadesdeportivas">Deportivas</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Restaurantes & Cafeterias
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Bares
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link " href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Hospedaje
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link " href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Shoping y Servicios
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <button  type="button" class="btn bg-transparent" data-toggle="modal" data-target="#modal_mapa">Mapa Turistico</button>
                                </li>
                            </ul>
                        </div>
                    </nav>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo URL?>login">Login</a>
                            </li>
                        </ul>
                </div>
                <?php }?>
            </nav>
        </nav>


        <?php

        if (isset($_SESSION["username"]))

        {
        ?>
            <main>
                <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
                <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#menu-toggle" id="menu-toggle">Menu</a>
                <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
                <ul class="navbar-nav px-3">
                    <li class="nav-item text-nowrap">
                        <a class="nav-link" href="<?php echo URL?>login/logout">Sign out</a>
                    </li>
                </ul>
                </nav>
                <div id="wrapper">
                    <div id="sidebar-wrapper">
                        <ul class="sidebar-nav">

                            <li class="sidebar-brand">
                                <a href="<?php echo URL ?>Empleado_bienvenido">Inicio</a>
                            </li>

                            <li>
                                <a href="<?php echo URL ?>Actividades/Tipo1">Actividades Recreativas</a>
                            </li>

                            <li>
                                <a href="<?php echo URL ?>">Actividades Deportivas</a>
                            </li>

                            <li>
                                <a href="<?php echo URL ?>">Restaurantes & Cafeterias</a>
                            </li>

                            <li>
                                <a href="<?php echo URL ?>">Bares</a>
                            </li>

                            <li>
                                <a href="<?php echo URL ?>">Hospedaje</a>
                            </li>

                            <li>
                                <a href="<?php echo URL ?>">Shoping & Servicios</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </main>
        <script>
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>


        <!--Import jQuery before materialize.js-->

        <?php
        }
        ?>


        <?php
    }

    public static function footer()
    {
        ?>
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
            </div>
            <!-- /.container -->
        </footer>
        </body>
        </html>
        </body>
        <div class="modal" tabindex="-1" role="dialog" id="modal_mapa">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Mapa Turistico de Valle de Bravo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15041.875604839568!2d-100.1296074638841!3d19.19848098544269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1544021107706" width="470" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
        </html>
        <?php
    }


}