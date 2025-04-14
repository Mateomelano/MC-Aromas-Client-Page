<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/jpeg"
        href="https://res.cloudinary.com/dzfzqzdcu/image/upload/v1743554383/ari6vwivcy0ndoeqpmmw.jpg">
    <!-- Estilos -->
    <link rel="stylesheet" href="build/css/app.css?v=<?php echo time(); ?>">
    <!-- JS -->
    <script src="build/js/productos.js?v=<?php echo time(); ?>"></script>
    <!-- FUENTE MONTSERRAT -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- CDN sin CORS para íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>MC Aromas</title>
</head>

<body>

    <!--  NAVBAR  -->

    <nav class="navbar">
        <div class="nav-left">
            <i id="sidebar-icon" class="fas fa-bars"></i>
            <div class="search-container">
                <input type="text" placeholder="Buscar...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
        </div>

        <div class="nav-center">
            <a href="index.php">
                <img class="logo-central"
                    src="https://res.cloudinary.com/dzfzqzdcu/image/upload/v1744059260/ea4zbrhdcpl4eu9mdgwz.png"
                    alt="Logo">
            </a>
        </div>

        <div class="nav-right">
            <img src="https://res.cloudinary.com/dzfzqzdcu/image/upload/v1744059294/y0illgpwo5zv2yhyhvxs.png"
                class="carrito" alt="Carrito">
        </div>
    </nav>


    <!-- SIDEBAR -->
    <section>
        <div id="sidebar" class="sidebar">
            <div class="sidebar-header">
                <i id="close-sidebar" class="fas fa-times"></i>
            </div>
            <ul class="sidebar-menu">
                <li><a href="#">VER TODOS LOS PRODUCTOS</a></li>

                <li class="has-submenu">
                    <div class="submenu-toggle">
                        <span>SAPHIRUS</span>
                        <i class="fas fa-chevron-right arrow-icon"></i>
                    </div>
                    <ul class="submenu">
                        <li><a href="productos.php?marca=saphirus&categoria=sahumerios">Sahumerios</a></li>
                        <li><a href="productos.php?marca=saphirus&categoria=textiles">Textiles</a></li>
                        <li><a href="productos.php?marca=saphirus&categoria=aromatizantes">Aromatizantes</a></li>
                        <li><a href="productos.php?marca=saphirus&categoria=aromatizantes">Aerosoles</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <div class="submenu-toggle">
                        <span>AROMANZA</span>
                        <i class="fas fa-chevron-right arrow-icon"></i>
                    </div>
                    <ul class="submenu">
                        <li><a href="#">Sahumerios</a></li>
                        <li><a href="#">Textiles</a></li>
                        <li><a href="#">Aromatizantes</a></li>
                        <li><a href="#">Aerosoles</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <div class="submenu-toggle">
                        <span>SANDRA MARZAN</span>
                        <i class="fas fa-chevron-right arrow-icon"></i>
                    </div>
                    <ul class="submenu">
                        <li><a href="#">Sahumerios</a></li>
                        <li><a href="#">Textiles</a></li>
                        <li><a href="#">Aromatizantes</a></li>
                        <li><a href="#">Aerosoles</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <div class="submenu-toggle">
                        <span>SAGRADA MADRE</span>
                        <i class="fas fa-chevron-right arrow-icon"></i>
                    </div>
                    <ul class="submenu">
                        <li><a href="#">Sahumerios</a></li>
                        <li><a href="#">Textiles</a></li>
                        <li><a href="#">Aromatizantes</a></li>
                        <li><a href="#">Aerosoles</a></li>
                    </ul>
                </li>

                <!-- Repetí esto mismo para otras marcas -->
                <li><a href="#info">CONTACTANOS</a></li>
            </ul>
        </div>
    </section>



    <!-- FOOTER -->
    <section class="footer">
        <div class="footer-container">
            <div class="footer-column">
                <h3>Dónde encontrarnos</h3>
                <p>San Martin 235 Villa Maria</p>
                <p>Whatsapp: +54 9 353 459-5325</p>
                <p>Tel: 353 459 5325</p>
                <div class="footer-social">
                    <a href="https://www.instagram.com/merceriachela" target="_blank"><i
                            class="fab fa-instagram"></i></a>
                    <a href="#" onclick="abrirWhatsApp(); return false;" target="_blank" class="info-item"><i
                            class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <div class="footer-column">
                <h3>Nuestras marcas</h3>
                <ul>
                    <li><a href="#">Saphirus</a></li>
                    <li><a href="#">Aromanza</a></li>
                    <li><a href="#">Sagrada Madre</a></li>
                    <li><a href="#">Sandra Marzan</a></li>
                    <li><a href="#">Todos los productos</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Enlaces de interés</h3>
                <ul>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="#">Quienes somos</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Legales</h3>
                <ul>
                    <li><a href="#">Política de privacidad</a></li>
                    <li><a href="#">Términos y Condiciones</a></li>
                    <li><a href="#">Defensa al consumidor</a></li>
                    <li><a href="#">Devoluciones y reembolsos</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>MC AROMAS © 2025</p>
            <p>DEV + DESIGN BY <a href="https://mateomelano-portfolio.netlify.app/">MateoMelano</a></p>
        </div>
    </section>


    <!-- Botón de WhatsApp -->
    <a href="https://wa.me/1234567890" onclick="abrirWhatsApp(); " class="whatsapp-button" target="_blank"
        title="Chatea con nosotros en WhatsApp">
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/WhatsApp_icon.png" alt="WhatsApp" />
    </a>


</body>

</html>