<?php
include "_global/config.php";
include "_global/conexion.php";
include '../_templates/headerProducto.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
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
<!--
Parallo Template
https://templatemo.com/tm-534-parallo
-->

<body id="servicesPage">
  <div class="parallax-window" data-parallax="scroll" data-image-src="../img/opcion_fondo2.jpg">
    <div class="container-fluid">
      <!-- Services header -->
      <section class="row" id="tmServices">
        <div class="col-12">
          <div class="parallax-window tm-services-parallax-header" data-parallax="scroll" data-z-index="101" <!--data-image-src="https://github.com/intforlan/IntforlanImages/blob/master/karaoke_v1.jpg?raw=true"-->>

            <div class="tm-bg-black-transparent text-center tm-services-header">
              <h2 class="text-uppercase tm-services-page-title">KARAOKE - FARRAOKE.COM</h2>
              <p class="tm-services-description mb-0 medium">
                Somos productores de programas de Karaoke Profesional para todos los bares del país por más de 20 años.<br>
                Contamos con éxitos musicales tanto nacionales como internacionales, de todo genero.<br> Y realizamos actualizaciones periódicamente para que disfrutes de los éxitos del momento.<br>
                Ahora puedes disfrutar del mismo sano entretenimeinto sin salir de casa, arma tus fiestas con Farraoke.com. <br> Te ayudamos a elegir la mejor opcion para tus eventos, sin instalaciones complicadas y con garantía de por vida de tu programa de Karaoke. <br>
                Prueba ahora nuestra version Free, creando una cuenta con tu email y contraseña en <a href="http://www.farraoke.com" target="_blank">www.farraoke.com</a> <br> o en tus dispositivos moviles descargando nuestra aplicacion de Google Play Store.<br>
              </p>
            </div>
          </div>
        </div>

        <!--  <div class="col-12">
            <div class="tm-bg-black-transparent tm-services-detail-box">
                <p>
                    Aenean convallis justo purus, id pulvinar enim finibus vitae. Fusce et bibendum nisi, vitae mollis turpis. Aliquam tellus mi, maximus vel orci
                    imperdiet, convallis cursus tortor. Donec sollicitudin metus sit amet nisl rhoncus, id ultrices risus interdum. Proin mollis nulla nulla, ac cursus enim ornare a. Cras quis porta lectus. Pellentesque eu ultrices arcu. Proin ac tristique dui. Praesent mi odio, aliquam ac leo sit amet, dictum sodales diam.
                </p>
                <p>
                    Quisque commodo, orci eget suscipit vestibulum, metus orci fringilla urna, eget dignissim justo odio sit amet tellus. Morbi dapibus molestie 
                    massa nec congue. Etiam lacinia pretium psuere. Integer sodales porttitor lobortis. Nam vestibulum vestibulum lectus non pulvinar.
                    Vivamus eget sapien vitae magna lobortis rhoncus molestie sit amet est. Fusce ultrices justo vitae blandit consequat.
                </p>
            </div>
          </div> -->

        <div class="col-12 tm-tabs-container">
          <div class="tm-tab-links">
            <ul class="tabs clearfix " data-tabgroup="first-tab-group">
              <li class=""><a href="#tab1" class="active">
                  <div class="icon-wrap"><img class="img_servicios" src="https://github.com/intforlan/IntforlanImages/blob/master/microfono.png?raw=true" width="50" height="50" alt="" /> </div>
                  KARAOKE USB
                </a></li>
              <li><a href="#tab2" class="">
                  <div class="icon-wrap"><img class="img_servicios" src="https://github.com/intforlan/IntforlanImages/blob/master/microfono.png?raw=true" width="50" height="50" alt="" /></div>
                  KARAOKE ONLINE
                </a></li>
              <li><a href="#tab3" class="">
                  <div class="icon-wrap"><img class="img_servicios" src="https://github.com/intforlan/IntforlanImages/blob/master/microfono.png?raw=true" width="50" height="50" alt="" /></div>
                  KIT KARAOKE 1
                </a></li>
              <li class=""><a href="#tab4" class="">
                  <div class="icon-wrap"><img class="img_servicios" src="https://github.com/intforlan/IntforlanImages/blob/master/microfono.png?raw=true" width="50" height="50" alt="" /> </div>
                  KIT KARAOKE 2
                </a></li>
              <li><a href="#tab5" class="">
                  <div class="icon-wrap"><img class="img_servicios" src="https://github.com/intforlan/IntforlanImages/blob/master/microfono.png?raw=true" width="50" height="50" alt="" /></div>
                  KIT KARAOKE 3
                </a></li>
              <li><a href="#tab6" class="">
                  <div class="icon-wrap"><img class="img_servicios" src="https://github.com/intforlan/IntforlanImages/blob/master/microfono.png?raw=true" width="50" height="50" alt="" /></div>
                  KIT KARAOKE 4
                </a></li>
            </ul>
          </div>
          <div class="tm-tab-contents">
            <div id="first-tab-group" class="tabgroup">
              <div id="tab1">
                <div class="row justify-content-evenly">
                  <div class="text-content col-12">
                    <center>
                      <h2 class="tm-service-tab-title">&bull; KARAOKE USB PORTABLE &bull;</h2>
                    </center>

                    <!-- 	<center><div class="container-services-slides col-12 w-100">

                    <div id="carouselExampleIndicators mx-auto" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                       <div class="carousel-inner ">
                        <div class="carousel-item active ">
                          <img class="d-block slides-tam" width="100%" height="100%" src="../Farraoke/img/.png" alt="First slide">
                        </div>
                        <div class="carousel-item ">
                          <img class="d-block slides-tam" width="100%" height="100%" src="" alt="Second slide">
                        </div>
                        <div class="carousel-item ">
                          <img class="d-block slides-tam" width="100%" height="100%" src="" alt="Third slide">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div> <!-- fin carousel
                  </div></center> -->
                    <h3>INCLUYE:</h3>
                    <p>* Flash memory con 9.600 temas clásicos y actuales de todo género musical.<br>
                      * Libro de canciones impreso anillado.<br>
                      * Actualizaciones y locales para garantía indefinida.<br>
                      * Puntaje al finalizar la interpretación.<br></p>
                    <center><img src="https://github.com/intforlan/IntforlanImages/blob/master/Farraoke_Usb.jpg?raw=true" width="600" height="400" alt="" /></center><br>

                    <h3>CARACTERÍSTICAS:</h3>
                    <p class="tm-service-tab-p">Buscador de temas por artista, género, nombre y número.
                      Gestiona la programación de temas sin límite.<br>
                      Opción para cantar acompañado de la voz original del cantante.<br>
                      Opción para mover el texto del karaoke por la pantalla.<br>
                      Administra automática del cambio de turnos.<br>
                      Califica al finalizar cada interpretación.<br>
                      Opciones de calificación: excelente, alta, media y baja.<br>
                      Icono para activar y desactivar puntaje.<br>
                      Funciones para reproducir, pasar, repetir, detener y pausar temas.<br>
                      Reproducción continua de videos de fondo en 4K.<br>
                      Opción para agregar videos de fondo en 4K.<br>
                      Reproductor de videos y audios.<br>
                      Opción para farrear con videos musicales de todo genero.<br>
                      Reproduce los videos originales del cantante.<br>
                      Opción para agregar videos originales de los temas.<br>
                      Indicador del curso de la canción.<br>
                      Despliegue de mensajes de cumpleaños, aniversarios, etc.<br>
                      Reporte de temas cantados.
                    </p>
						<a href="https://wa.link/rl7zpd" class="btn btn-outline-primary" target="_blank">Comprar Karaoke</a>
                  </div>
                </div>

              </div>
              <div id="tab2">

                <div class="row">
                  <div class="text-content col-12">
                    <center>
                      <h3 class="tm-service-tab-title">&bull; KARAOKE ONLINE &bull;</h3>
                    </center>
                    <h3>CARACTERÍSTICAS:</h3>
                    <p class="tm-service-tab-p">
                      Canta en tu dispositivo favorito en cualquier momento y en cualquier parte del mundo con tu cuenta de Karaoke Online, controla todo desde tu telefono celular, tu y tus invitados podran enviar sus canciones desde sus celulares, disfruta sin interrupciones con tu cuenta premium en cualquier parte el mundo, con calificación al finalizar cada tema, el mejor repertorio nacional e internacional disponible para ti.
                    </p>

                    <center><img src="https://github.com/intforlan/IntforlanImages/blob/master/FarraokeOnline.jpg?raw=true" width="600" height="600" alt="" /></center><br>

                    <h3>INCLUYE:</h3>
                    <p class="mb-0">
                      Plan de 12 meses - Cuenta Premium de <a href="http://www.farraoke.com" target="_blank">Farraoke.com</a> 
                    </p> <br>
					  <centr><a href="https://wa.link/rl7zpd" class="btn btn-outline-primary" target="_blank">Comprar Plan Premium</a></centr>
                  </div>
                  <!--  <div class="container-services-slides col-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner ">
                        <div class="carousel-item active ">
                          <img class="d-block slides-tam" src="../parallo v2 JRedit/templatemo_534_parallo/img/slide1_web.png" alt="First slide">
                        </div>
                        <div class="carousel-item ">
                          <img class="d-block slides-tam" src="../parallo v2 JRedit/templatemo_534_parallo/img/slide2_web.png" alt="Second slide">
                        </div>
                        <div class="carousel-item ">
                          <img class="d-block slides-tam" src="../parallo v2 JRedit/templatemo_534_parallo/img/slide3_web.png" alt="Third slide">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div> <!-- fin carousel
                  </div>-->
                </div>

              </div>
              <div id="tab3">
                <div class="text-content">
                  <center>
                    <h3 class="tm-service-tab-title">&bull; KIT KARAOKE 1 &bull;</h3>
                  </center>
                  <h3>INCLUYE:</h3>
                  <p class="mb-0">
                    - Karaoke en flash memory con 9.600 temas de todo genero musical.<br>
                    - Karaoke digital para: Celular, Tablet, Computador de toda marca, Tv box.<br>
                    - Libro impreso de canciones.<br>
                    - Micrófono con conexión Inalámbrica.<br>
                    - Receptor con pilas AA.<br>
                    - Cable de Micrófono (Canon a Plug)<br>
                    - Cable de audio.<br>
                  </p><br>
                  <center><img src="https://github.com/intforlan/IntforlanImages/blob/master/Kit%201.jpg?raw=true" width="600" height="400" alt="" /></center><br>
                  <h3>CARACTERÍSTICAS:</h3>
                  <p class="tm-service-tab-p">* Despliega la calificación al finalizar cada interpretación.<br>
                    * Opciones de calificación excelente, alta, media y baja.<br>
                    * Éxitos de todo género musical, pistas mp3 (no piano).<br>
                    * Fanfarria (aplausos).<br>
                    * Opción para activar o desactivar la voz del cantante.<br>
                    * Reproductor de videos musicales y audios.<br>
                    * Función para desplazar el texto por la pantalla.<br>
                    * Buscador de temas por artista, género, nombre y número.<br>
                    * Panel para programar temas sin limite.<br>
                    * Opción para repetir temas.<br>
                    * Icono para activar o desactivar puntaje.<br>
                    * Indicador del curso de la canción.<br>
                    * Permite pausar la canción a todo momento.<br>
                    * Reproducción de videos de fondo en 4K<br>
                    * Permite agregar videos de fondo en 4K<br>
                    * Reproducción del video de cada cantante<br>
                    * Despliega mensajes de cumpleaños, aniversarios, etc.<br>
                    * Reporte de temas cantados<br>
                    * Garantía Indefinida y Soporte Técnico.<br>
                  </p>
                  <a href="https://wa.link/rl7zpd" class="btn btn-outline-primary" target="_blank">Comprar KIT 1</a>
                </div>
              </div>
              <div id="tab4">
                <div class="text-content">
                  <center>
                    <h3 class="tm-service-tab-title">&bull; KIT KARAOKE 2 &bull;</h3>
                  </center>
                  <h3>INCLUYE:</h3>
                  <p class="mb-0">
                    * Flash memory con 9.600 temas clásicos y actuales de todo género musical.<br>
                    * Libro de canciones impreso anillado.<br>
                    * Actualizaciones y locales para garantía indefinida.<br>
                    * App para enviar temas desde tu teléfono celular.<br>
                    * Cuenta Premium para tu dispositivo favorito.<br>
                    * Puntaje al finalizar la interpretación.<br>
                    * 2 Micrófonos Inalámbricos profesional de 20 metros de alcance.<br>
                  </p><br>
                  <center><img src="https://github.com/intforlan/IntforlanImages/blob/master/Kit%202.jpg?raw=true" width="600" height="400" alt="" /></center><br>
                  <h3>CARACTERÍSTICAS:</h3>
                  <p class="tm-service-tab-p">* Buscador de temas por artista, género, nombre y número.<br>
                    * Gestiona la programación de temas sin límite.<br>
                    * Opción para cantar acompañado de la voz original del cantante.<br>
                    * Opción para mover el texto del karaoke por la pantalla.<br>
                    * Administra automática del cambio de turnos.<br>
                    * Califica al finalizar cada interpretación.<br>
                    * Opciones de calificación: excelente, alta, media y baja.<br>
                    * Icono para activar y desactivar puntaje.<br>
                    * Funciones para reproducir, pasar, repetir, detener y pausar temas.<br>
                    * Reproducción continua de videos de fondo en 4K.<br>
                    * Opción para agregar videos de fondo en 4K.<br>
                    * Reproductor de videos y audios.<br>
                    * Opción para farrear con videos musicales de todo genero.<br>
                    * Reproduce los videos originales del cantante.<br>
                    * Opción para agregar videos originales de los temas.<br>
                    * Indicador del curso de la canción.<br>
                    * Despliegue de mensajes de cumpleaños, aniversarios, etc.<br>
                    * Reporte de temas cantados.<br>
                  </p>
                  <a href="https://wa.link/rl7zpd"  class="btn btn-outline-primary" target="_blank">Comprar KIT 2</a>

                </div>
              </div>
              <div id="tab5">
                <div class="text-content">
                  <center>
                    <h3 class="tm-service-tab-title">&bull; KIT KARAOKE 3 &bull;</h3>
                  </center>
                  <h3>INCLUYE:</h3>
                  <p class="mb-0">
                    * Flash memory con 9.600 temas clásicos y actuales de todo género musical.<br>
                    * Libro de canciones impreso anillado.<br>
                    * Actualizaciones y locales para garantía indefinida.<br>
                    * App para enviar temas desde tu teléfono celular.<br>
                    * Cuenta Premium para tu dispositivo favorito.<br>
                    * Puntaje al finalizar la interpretación.<br>
                    * Micrófono Inalámbrico incorporado de 20 metros de alcance.<br>
                    * Parlante Recargable de 8" Bluetooth, Radio y USB.<br>
                    &nbsp;&nbsp;&nbsp;Con entradas para dos microfonos y cable auxiliar.
                  </p><br>
                  <center><img src="https://github.com/intforlan/IntforlanImages/blob/master/Kit%203.jpg?raw=true" width="600" height="400" alt="" /></center><br>
                  <h3>CARACTERÍSTICAS:</h3>
                  <p class="tm-service-tab-p">* Buscador de temas por artista, género, nombre y número.<br>
                    * Gestiona la programación de temas sin límite.<br>
                    * Opción para cantar acompañado de la voz original del cantante.<br>
                    * Opción para mover el texto del karaoke por la pantalla.<br>
                    * Administra automática del cambio de turnos.<br>
                    * Califica al finalizar cada interpretación.<br>
                    * Opciones de calificación: excelente, alta, media y baja.<br>
                    * Icono para activar y desactivar puntaje.<br>
                    * Funciones para reproducir, pasar, repetir, detener y pausar temas.<br>
                    * Reproducción continua de videos de fondo en 4K.<br>
                    * Opción para agregar videos de fondo en 4K.<br>
                    * Reproductor de videos y audios.<br>
                    * Opción para farrear con videos musicales de todo genero.<br>
                    * Reproduce los videos originales del cantante.<br>
                    * Opción para agregar videos originales de los temas.<br>
                    * Indicador del curso de la canción.<br>
                    * Despliegue de mensajes de cumpleaños, aniversarios, etc.<br>
                    * Reporte de temas cantados.<br>
                  </p>
                  <a href="https://wa.link/rl7zpd" class="btn btn-outline-primary" target="_blank">Comprar KIT 3</a>

                </div>
              </div>
              <div id="tab6">
                <div class="text-content">
                  <center>
                    <h3 class="tm-service-tab-title">&bull; KIT KARAOKE 4 &bull;</h3>
                  </center>
                  <h3>INCLUYE:</h3>
                  <p class="mb-0">
                    * Flash memory con 9.600 temas clásicos y actuales de todo género musical.<br>
                    * Libro de canciones impreso anillado.<br>
                    * Actualizaciones y locales para garantía indefinida.<br>
                    * App para enviar temas desde tu teléfono celular.<br>
                    * Cuenta Premium para tu dispositivo favorito.<br>
                    * Puntaje al finalizar la interpretación.<br>
                    <!--  * Micrófono Inalámbrico incorporado de 20 metros de alcance.<br>-->
                    * Caja Amplificada de 12" Bluetooth, Radio y USB.<br>
                    &nbsp;&nbsp;&nbsp;Con entradas para dos microfonos y cable auxiliar.
                  </p><br>
                  <center><img src="https://github.com/intforlan/IntforlanImages/blob/master/Kit%204.jpg?raw=true" width="600" height="400" alt="" /></center><br>
                  <h3>CARACTERÍSTICAS:</h3>
                  <p class="tm-service-tab-p">* Buscador de temas por artista, género, nombre y número.<br>
                    * Gestiona la programación de temas sin límite.<br>
                    * Opción para cantar acompañado de la voz original del cantante.<br>
                    * Opción para mover el texto del karaoke por la pantalla.<br>
                    * Administra automática del cambio de turnos.<br>
                    * Califica al finalizar cada interpretación.<br>
                    * Opciones de calificación: excelente, alta, media y baja.<br>
                    * Icono para activar y desactivar puntaje.<br>
                    * Funciones para reproducir, pasar, repetir, detener y pausar temas.<br>
                    * Reproducción continua de videos de fondo en 4K.<br>
                    * Opción para agregar videos de fondo en 4K.<br>
                    * Reproductor de videos y audios.<br>
                    * Opción para farrear con videos musicales de todo genero.<br>
                    * Reproduce los videos originales del cantante.<br>
                    * Opción para agregar videos originales de los temas.<br>
                    * Indicador del curso de la canción.<br>
                    * Despliegue de mensajes de cumpleaños, aniversarios, etc.<br>
                    * Reporte de temas cantados.<br>
                  </p>
                  <a href="https://wa.link/rl7zpd" class="btn btn-outline-primary" target="_blank">Comprar KIT 4</a>

                </div>
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

  <script src="../js/jquery.min.js"></script>
  <script src="../js/parallax.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script>
    $(function() {
      $('.tabgroup > div').hide();
      $('.tabgroup > div:first-of-type').show();
      $('.tabs a').click(function(e) {
        e.preventDefault();
        var $this = $(this),
          tabgroup = '#' + $this.parents('.tabs').data('tabgroup'),
          others = $this.closest('li').siblings().children('a'),
          target = $this.attr('href');
        others.removeClass('active');
        $this.addClass('active');
        $(tabgroup).children('div').hide();
        $(target).show();

        // Scroll to tab content (for mobile)
        if ($(window).width() < 992) {
          $('html, body').animate({
            scrollTop: $("#first-tab-group").offset().top
          }, 200);
        }
      })
    });
  </script>
</body>

</html>