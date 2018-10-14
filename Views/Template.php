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

            <!-- Bootstrap core JavaScript -->
            <script type="text/javascript" src="<?php echo URL?>Public/jquery/jquery.min.js"></script>
            <script type="text/javascript" src="<?php echo URL?>Public/js/bootstrap.bundle.min.js"></script>

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
                                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Informacion turistica
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="http://google.com">Google</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Submenu</a></li>
                                                <li><a class="dropdown-item" href="#">Submenu0</a></li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu 1</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                                                        <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu 2</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                                                        <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Directorio Comercial
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="http://google.com">Google</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Submenu</a></li>
                                                <li><a class="dropdown-item" href="#">Submenu0</a></li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu 1</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                                                        <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu 2</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                                                        <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
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
                <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
                <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
                <ul class="navbar-nav px-3">
                    <li class="nav-item text-nowrap">
                        <a class="nav-link" href="<?php echo URL?>login/logout">Sign out</a>
                    </li>
                </ul>
            </nav>
            </main>


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
        </html>
        <?php
    }
}