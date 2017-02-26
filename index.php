<?php

?>

<html>
    <head>

        <!-- Page Title -->
        <title>Misto Bistro - Ahol a hazai konyha, és a mediterrán ízek találkoznak</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.ico">

        <!-- Meta data-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!--Style-->
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">

        <!--JavaScripts-->
        <script src="assets/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="page-holder">
            <!--
            <header class="header">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header"><a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt="Italiano" width="100"></a>
                            <div class="navbar-buttons">
                                <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="fa fa-align-justify"></i></button>
                            </div>
                        </div>
                        <div id="navigation" class="collapse navbar-collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#hero">Főoldal</a></li>
                                <li><a href="#about">Menu1</a></li>
                            </ul>
                            <a href="#" class="btn navbar-btn btn-unique hidden-sm hidden-xs" id="open-reservation">Online asztalfoglalás</a>
                        </div>
                    </div>
                </nav>
            </header>
            -->
            <header>
                <div class="container">
                    <nav>
                        <ul>
                            <li><?php echo file_get_contents("assets/img/home.svg"); ?></li>
                        </ul>
                    </nav>
                </div>
            </header>
        </div>
    </body>
</html>
