<?php
include "_global/config.php";
include "_global/conexion.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Intforlan Store</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/templatemo-style.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
  <link rel="stylesheet" href="css/personalizado.css">
  <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
  <link rel="stylesheet" href="style.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="img/Logo/Logos/LogoIntforlanBlanco.png" type="image/png">

</head>


<body id="aboutPage">
  
<!--
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
      <div class="logo_name">Intforlan</div>
      <i class='bx bx-menu' id="btn"></i>
    </div>

    <ul class="nav-list">
      <li>
        <a href="index.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Inicio</span>
        </a>
        <span class="tooltip">Inicio</span>
      </li>
      <li><a href="#">
        <i class='bx bx-laptop'></i>
        <span class="links_name">Computadoras</span>
      </a>
      <ul>
        
        <li><a href="php/Notebooks.php"><i class='bx bx-laptop'></i><span class="links_name">NoteBooks</span></a><span class="tooltip">Cases</span></li>
        <li><a href="php/MiniPC.php"><i class='bx bx-laptop'></i><span class="links_name">MiniPC</span></a><span class="tooltip">Cases</span></li>
          <li><a href="php/PC-Descktop.php?pages=1"><i class='bx bx-laptop'></i><span class="links_name">PC-Desktop</span></a><span class="tooltip">Cases</span></li>
        </ul>
        <span class="tooltip">Computadoras</span>
      </li>
      <li><a href="php/Monitores.php">
        <i class='bx bx-desktop'></i>
          <span class="links_name">Monitores</span>
        </a>
        <ul>

          <li><a href="php/Gaming.php"><i class='bx bx-desktop'></i><span class="links_name">Gaming</span></a><span class="tooltip">Cases</span></li>
          <li><a href="php/OficinaHogar.php"><i class='bx bx-desktop'></i><span class="links_name">Oficina/Hogar</span></a><span class="tooltip">Cases</span></li>
          <li><a href="php/Comerciales.php"><i class='bx bx-desktop'></i><span class="links_name">Comerciales</span></a><span class="tooltip">Cases</span></li>
          <li><a href="php/DisenoFotografia.php"><i class='bx bx-desktop'></i><span class="links_name">Diseno/Fotografia</span></a><span class="tooltip">Cases</span></li>
        </ul>
        <span class="tooltip">Monitores</span>
      </li>
    
      <li>
        <a href="php/celulares1.php">
          <i class='bx bx-mobile'></i>
          <span class="links_name">Celulares</span>
        </a>
        <ul>
          <li><a href="php/celulares.php"><i class='bx bx-mobile'></i><span class="links_name">Celulares</span></a><span class="tooltip">Cases</span></li>
          <li><a href="php/Tablets.php"><i class='bx bx-tab'></i></i><span class="links_name">Tablets</span></a><span class="tooltip">Cases</span></li>
        </ul>
        <span class="tooltip">Celulares</span>
      </li>
        <li>
          <a href="php/Componentes.php">
          <i class='bx bx-hdd'></i>
          <span class="links_name">Componentes</span>
        </a>
        <ul>
          <li><a href="php/Cases.php"><i class='bx bx-hdd'></i><span class="links_name">Cases</span></a><span class="tooltip">Cases</span></li>
          <li><a href="php/Coolers.php"><i class='bx bx-hdd'></i><span class="links_name">Coolers</span></a><span class="tooltip">Coolers</span></li>
          <li><a href="php/DiscoDuros.php"><i class='bx bx-hdd'></i></i><span class="links_name">Discos Duros</span></a><span class="tooltip">Discos Duros</span></li>
          <li><a href="php/FuentesdePoder.php"><i class='bx bx-hdd'></i></i><span class="links_name">Fuentes de poder</span></a><span class="tooltip">Fuentes de poder</span></li>
          <li><a href="php/MemoriasRam.php"><i class='bx bx-hdd'></i></i><span class="links_name">Memorias Ram</span></a><span class="tooltip">Memorias Ram</span></li>
          <li><a href="php/Motherboard.php"><i class='bx bx-hdd'></i></i><span class="links_name">Motherboard</span></a><span class="tooltip">Motherboard</span></li>
          <li><a href="php/Procesadores.php"><i class='bx bx-hdd'></i><span class="links_name">Procesadores</span></a><span class="tooltip">Procesadores</span></li>
          <li><a href="php/Tarjetasdevideo.php"><i class='bx bx-hdd'></i><span class="links_name">Tarjetas de video</span></a><span class="tooltip">Tarjetas de video</span></li>
          <li><a href="php/Ventiladores.php"><i class='bx bx-hdd'></i><span class="links_name">Ventiladores</span></a><span class="tooltip">Ventiladores</span></li>
        </ul>
        <span class="tooltip">Componentes</span>
      </li>
    
      <li>
        <a href="php/Instrumentos.php">
          <i class="fas fa-guitar"></i>
          <span class="links_name">Instrumentos</span>
        </a>
        <ul>
          <li><a href="php/Guitarras.php"><i class="fas fa-guitar"></i><span class="links_name">Guitarras</span></a><span class="tooltip">Cases</span></li>
          <li><a href="php/Violines.php"><i class="fas fa-guitar"></i><span class="links_name">Violines</span></a><span class="tooltip">Cases</span></li>
          
        </ul>
        <span class="tooltip">Instrumentos</span>
      </li>
      
    
  
        <li>
        <a href="php/AudioySonido.php">
          <i class='bx bx-music'></i>
          <span class="links_name">Audio y Sonido</span>
        </a>
        <ul>
          <li><a href="php/Parlantes.php"><i class='bx bx-speaker'></i><span class="links_name">Parlantes</span></a><span class="tooltip">Cases</span></li>
          <li><a href="php/Microfonos.php"><i class='bx bx-microphone'></i><span class="links_name">Microfonos</span></a><span class="tooltip">Cases</span></li>
          <li><a href="php/Audifonos.php"><i class='bx bx-headphone'></i><span class="links_name">Audifonos</span></a><span class="tooltip">Cases</span></li>
          
        </ul>
        <span class="tooltip">Instrumentos</span>
      </li>
      <li>
        <p>
          <i class="fas fa-microphone"></i>
          <span class="links_name">Karaoke</span>
        </p>
        <ul>
          <li><a href="php/KaraokePortable.php"><i class='bx bx-microphone'></i><span class="links_name">Karaoke Portable</span></a><span class="tooltip">Cases</span></li>
          <li><a href="php/Farraoke.php"><i class='bx bx-microphone'></i><span class="links_name">Farraoque</span></a><span class="tooltip">Cases</span></li>
          <li><a href="php/KaraokeOnline.php"><i class='bx bx-microphone'></i><span class="links_name">Karaoke Online</span></a><span class="tooltip">Cases</span></li>
          <li><a href="php/KITSdeKaraoke.php"><i class='bx bx-microphone'></i><span class="links_name">KITS de Karaoke</span></a><span class="tooltip">Cases</span></li>

        </ul>
        <span class="tooltip">Karaoke</span>
      </li>
      
    </ul>
  </div>
  <section class="home-section">
    
-->
  <!--****************************Padinna********************************************-->


  <div class="containerButon">
    <input type="checkbox" id="btn-mas">
    <div class="redes">
      <a href="php/mostrarCarrito.php" class="fas fa-store"></a>
      <a href="#" class="fab fa-facebook-f"></a>
        <a href="https://www.instagram.com/intforlan_store/" class="fab fa-instagram"></a>
        <a href="https://wa.link/rl7zpd" class="fab fa-whatsapp"></a>
    </div>
    <div class="btn-mas">
      <label for="btn-mas" class="fa fa-plus"></label>
    </div>
  </div>

  <div class="parallax-window" data-parallax="scroll" data-image-src="img/opcion_fondo2.jpg">
    <div class="container-fluid">
      <div class="row tm-brand-row">
        <div class="col-lg-4 col-11">
          <div class="tm-brand-container tm-bg-white-transparent">
            <button onclick="location.href='index.php'" style="background-color: transparent; border: none;">
              <i class=" text-center py-2  tm-brand-icon"><img src="img/Logo/Logos/LogoIntforlanBlanco.png" width="45px" alt=""></i>

            </button>
            <div class="tm-brand-texts">
              <h1 class="text-uppercase tm-brand-name"><a href="index.php" style="color: #7b7579;">Intforlan</a></h1>
              <p class="small">Somos tu mejor opción</p>
            </div>
          </div>
        </div>

        <div class="col-lg-8 col-1 tm-bg-white-transparent">
          <div class="tm-nav">
            <nav class="navbar navbar-expand-lg navbar-light  tm-navbar">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="php/computadoras.php?pages=1">Computadores</a>
                  </li>
                  <li class="nav-item green-highlight ">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="php/monitores.php?pages=1">Monitores<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="php/instrumentos.php?pages=1">Instrumentos</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="php/pedestales.php?pages=1">Pedestales</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="php/celulares.php?pages=1">Mobile</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="php/farraoke.php">Farraoke</a>
                  </li>

                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>



      <!-- Catalogo -->

      <section class="row" id="tmAbout">

        <div class="container">
          <div class="col-12">
            <div class="mb-3">
              <input onkeyup="buscar_ahora($('#buscar_1').val());" type="text" class="form-control" id="buscar_1" placeholder="Que estas buscando?" name="buscar_1">
            </div>
            <div id="datos_buscador" class="container pl-5 pr-5" style="display: flex;"> </div>

          </div>
        </div>

        <div class="col-lg-4">
          <div class="tm-bg-black-transparent tm-about-box">
            <div class="tm-about-number-container"><i class="fas fa-laptop"></i></div>
            <h3 class="tm-about-name">Computadores</h3>
            <p class="tm-about-description">
              ¿Necesitas una computadora?Aquí en Intforlan encontraras las mejores computadoras del mercado a un precio increible, ¡Que esperas para llevarte la tuya!
            </p>
            <a href="php/computadoras.php" class="btn btn-tertiary tm-btn-app-feature">Más productos</a>
          </div>
        </div>


        <div class="col-lg-4">
          <div class="tm-bg-black-transparent tm-about-box">
            <div class="tm-about-number-container"><i class="fas fa-mobile-alt"></i></div>
            <h3 class="tm-about-name">Celulares</h3>
            <p class="tm-about-description">
              Todo lo que necesitas al alcance de tus manos, la mejor tecnologia en celulares inteligentes ideales para recibir clases o convertirte en un gamer profecional
            </p>
            <a href="php/celulares.php" class="btn btn-tertiary tm-btn-app-feature">Más productos</a>
          </div>
        </div>


        <div class="col-lg-4">
          <div class="tm-bg-black-transparent tm-about-box">
            <div class="tm-about-number-container"><i class="fas fa-guitar"></i></div>
            <h3 class="tm-about-name">Instrumentos</h3>
            <p class="tm-about-description">
              Has pensado en convertirte en un artista de youtube? Pues Intforlan ayudara a convertir ese sueño en realidad con los mejores instrumentos musicales
            </p>
            <a href="php/instrumentos.php" class="btn btn-tertiary tm-btn-app-feature">Más productos</a>
          </div>
        </div>


        <div class="col-lg-4">
          <div class="tm-bg-black-transparent tm-about-box">
            <div class="tm-about-number-container"><i class="fab fa-acquisitions-incorporated"></i></div>
            <h3 class="tm-about-name">Pedestales</h3>
            <p class="tm-about-description">
              Disponesmos desde soporte para TV hasta un gran pedestal para piano, en Intforlan contamos con los mejores del país a precios incomparables
            </p>
            <a href="php/pedestales.php" class="btn btn-tertiary tm-btn-app-feature">Más productos</a>
          </div>
        </div>
        
        
        <div class="col-lg-4">
          <div class="tm-bg-black-transparent tm-about-box">
            <div class="tm-about-number-container"><i class="fas fa-desktop"></i></div>
            <h3 class="tm-about-name">Monitores</h3>
            <p class="tm-about-description">
              Te traemos las mejores modelos en Monitores LED FULL HD para que puedas disfrutar de tus vídeos, películas y juegos en alta definición...
            </p>
            <a href="php/monitores.php" class="btn btn-tertiary tm-btn-app-feature">Más productos</a>
          </div>
        </div>
        
        
        <div class="col-lg-4">
          <div class="tm-bg-black-transparent tm-about-box">
            <div class="tm-about-number-container"><i class="fas fa-microphone"></i></div>
            <h3 class="tm-about-name">Farraoke</h3>
            <p class="tm-about-description">
            Disfruta del mejor repertorio de los bares del país, repertorio Nacional e Internacional, con garantía indefinida y licencia 100% Original
            </p>
            <a href="php/Farraoke.php" class="btn btn-tertiary tm-btn-app-feature">Más productos</a>
          </div>
        </div>
      </section>




      <!-- App Features -->
      <section id="tmAppFeatures">
        <div class="row">
          <header class="col-12 text-center text-white tm-bg-black-transparent p-3 tm-app-header">
            <h2 class="text-uppercase mb-2 tm-app-feature-header">Formas de pago y Envios a todo el Elcuador</h2>

          </header>
        </div>



        <div class="row">
          <div class="col-lg-6">
            <div class="tm-bg-white-transparent tm-app-feature-box">
              <div class="tm-app-feature-icon-container">
                <i class="fas fa-4x px-3 py-4 fa-air-freshener tm-app-feature-icon fas fa-money-bill"></i>
              </div>
              <div class="tm-app-feature-description-box">
                <h3 class="mb-4 tm-app-feature-title">Efectivo</h3>
                <p class="tm-app-feature-description">La manera más facil y efectiva de adquirir tu producto, pagas al momento de recibir tu pedido.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="tm-bg-white-transparent tm-app-feature-box">
              <div class="tm-app-feature-icon-container">
                <i class="fas fa-4x px-4 py-4 fa-binoculars tm-app-feature-icon fas fa-exchange-alt"></i>
              </div>
              <div class="tm-app-feature-description-box">
                <h3 class="mb-4 tm-app-feature-title">Transferencia</h3>
                <p class="tm-app-feature-description">La forma mas rápida, eficiente y comoda de realizar tu compra a travez del banco del Pichinca</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="tm-bg-white-transparent tm-app-feature-box">
              <div class="tm-app-feature-icon-container">
                <i class="fas fa-4x px-4 py-4 fa-campground tm-app-feature-icon fas fa-file-invoice-dollar"></i>
              </div>
              <div class="tm-app-feature-description-box">
                <h3 class="mb-4 tm-app-feature-title">Depósito</h3>
                <p class="tm-app-feature-description">El modo mas seguro de realizar el pago de tu producto, sin preocupaciones y cargos adicionales</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="tm-bg-white-transparent tm-app-feature-box">
              <div class="tm-app-feature-icon-container">
                <i class="fas fa-4x px-2 py-4 fa-fire tm-app-feature-icon fas fa-motorcycle mx-auto"></i>
              </div>
              <div class="tm-app-feature-description-box">
                <h3 class="mb-4 tm-app-feature-title">Entregas a domicilo</h3>
                <p class="tm-app-feature-description">Contamos con repartidores experimentados, con todas las normas de bioseguridad y entregas en tres días hábiles </p>
              </div>
            </div>
          </div>
        </div>

      </section>

      <!-- Page footer -->
      <footer class="row">
        <p class="col-12 text-white text-center tm-copyright-text">
        Copyright &copy; 2021 Intforlan Official Website.
        Designed by <a href="#" class="tm-copyright-link">Intforlan</a>
        </p>
      </footer>
    </div>
    <!-- .container-fluid -->
  </div>


  <script type="text/javascript">
    function buscar_ahora(buscar) {
      var parametros = {
        "buscar": buscar
      };
      $.ajax({
        data: parametros,
        type: 'POST',
        url: '_archivos/buscador.php',
        success: function(data) {
          document.getElementById("datos_buscador").innerHTML = data;
        }
      });
    }
    //   buscar_ahora();
  </script>


  <script src="js/jquery.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  </section>
  <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", () => {
      sidebar.classList.toggle("open");
      menuBtnChange(); //calling the function(optional)
    });

    searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
      sidebar.classList.toggle("open");
      menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
      if (sidebar.classList.contains("open")) {
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
      } else {
        closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
      }
    }
  </script>
  <!--boton flotante-->

</body>

</html>