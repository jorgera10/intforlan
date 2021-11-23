<?php
include "../_global/conexion.php";
include "../_global/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Intforlan</title>
    <link rel="stylesheet" href="../../bootstrap-5.1.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="../css/all.min.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/templatemo-style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/personalizado.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/cards.css">
    <link rel="icon" href="../img/Logo/Logos/LogoIntforlanBlanco.png" type="image/png">


</head>


<!--boton flotante-->
<div class="containerButon">
    <input type="checkbox" id="btn-mas">
    <div class="redes">

        <a href="../php/mostrarCarrito.php" ">
        <button type=" button" class="p-0 btn btn-primary position-relative" style="background: transparent;">
            <i class="fas fa-shopping-cart p-0 m-0 " style="color: #ffffff; background: transparent;"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                <?php echo (empty($_SESSION['CARRITO'])) ? 0 : count($_SESSION['CARRITO']); ?>
            </span>
            </button>
        </a>
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="https://www.instagram.com/intforlan_store/" class="fab fa-instagram"></a>
        <a href="https://wa.link/rl7zpd" class="fab fa-whatsapp"></a>
    </div>
    <div class="btn-mas">
        <label for="btn-mas" class="fa fa-plus"></label>
    </div>
</div>

<!--***********BODY********************-->

<body id="aboutPage">



    <!--       b ody                 -->
    <div class="parallax-window" data-parallax="scroll" data-image-src="../img/opcion_fondo2.jpg">
        <div class="container-fluid">
            <div class="row tm-brand-row">
                <div class="col-lg-4 col-11">
                    <div class="tm-brand-container tm-bg-white-transparent">
                        <button onclick="location.href='../index.php'" style="background-color: transparent; border: none;">
                            <i class=" text-center py-2  tm-brand-icon"><img src="../img/Logo/Logos/LogoIntforlanBlanco.png" width="45px" alt=""></i>
                        </button>
                        <div class="tm-brand-texts">
                            <h1 class="text-uppercase tm-brand-name"><a href="../index.php" style="color: #7b7579;">Intforlan</a></h1>
                            <p class="small">Somos tu mejor opción</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-1" >
                    <div class="tm-nav">
                        <nav class="navbar navbar-expand-lg navbar-light tm-bg-white-transparent tm-navbar">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <div class="tm-nav-link-highlight"></div>
                                        <a class="nav-link" href="../php/computadoras.php?pages=1">Computadores</a>
                                    </li>
                                    <li class="nav-item green-highlight ">
                                        <div class="tm-nav-link-highlight"></div>
                                        <a class="nav-link" href="../php/monitores.php?pages=1">Monitores</a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="tm-nav-link-highlight"></div>
                                        <a class="nav-link" href="../php/instrumentos.php?pages=1">Musica</a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="tm-nav-link-highlight"></div>
                                        <a class="nav-link" href="../php/pedestales.php?pages=1">Pedestales</a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="tm-nav-link-highlight"></div>
                                        <a class="nav-link" href="../php/celulares.php?pages=1">Móviles</a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="tm-nav-link-highlight"></div>
                                        <a class="nav-link" href="../php/Farraoke.php">Farraoke</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../php/mostrarCarrito.php">

                                            <button type="button" class="p-0 btn btn-primary position-relative"  style="background: transparent;">
                                                <i class="fas fa-shopping-cart p-0 m-0" style="background: transparent;"></i>
                                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                    <?php echo (empty($_SESSION['CARRITO'])) ? 0 : count($_SESSION['CARRITO']); ?>
                                                </span>
                                            </button>
                                        </a>

                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>