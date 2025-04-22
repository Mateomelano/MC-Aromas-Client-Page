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
                <input type="text" class="busqueda" placeholder="Buscar...">
                <button type="submit" class="btn-buscar"><i class="fas fa-search"></i></button>
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
                <li><a href="productos.php">VER TODOS LOS PRODUCTOS</a></li>

                <li class="has-submenu">
                    <div class="submenu-toggle">
                        <span>SAPHIRUS</span>
                        <i class="fas fa-chevron-right arrow-icon"></i>
                    </div>
                    <ul class="submenu">
                        <li><a href="productos.php?marca=saphirus&categoria=textil">Textil</a></li>
                        <li><a href="productos.php?marca=saphirus&categoria=homespray">Home Spray</a></li>
                        <li><a href="productos.php?marca=saphirus&categoria=aerosol">Aerosol</a></li>
                        <li><a href="productos.php?marca=saphirus&categoria=difusor">Difusor</a></li>
                        <li><a href="productos.php?marca=saphirus&categoria=difusorpremium">Difusor Premium</a></li>
                        <li><a href="productos.php?marca=saphirus&categoria=miniconcentrado">Mini concentrado</a></li>
                        <li><a href="productos.php?marca=saphirus&categoria=aparatos">Aparatos</a></li>
                        <li><a href="productos.php?marca=saphirus&categoria=aceiteesencial">Aceite Esencial</a></li>
                        <li><a href="productos.php?marca=saphirus&categoria=antihumedad">Antihumedad</a></li>
                        <li><a href="productos.php?marca=saphirus&categoria=aromatizantesvarios">Aromatizantes
                                Varios</a></li>
                        <li><a href="productos.php?marca=saphirus&categoria=shiny">Línea Shiny</a></li>
                        <li><a href="productos.php?marca=saphirus&categoria=perfumesmilano">Perfumes Milano</a></li>

                    </ul>
                </li>

                <li class="has-submenu">
                    <div class="submenu-toggle">
                        <span>AROMANZA</span>
                        <i class="fas fa-chevron-right arrow-icon"></i>
                    </div>
                    <ul class="submenu">
                        <li><a href="productos.php?marca=aromanza&categoria=tibetanosx8">Tibetanos x8</a></li>
                        <li><a href="productos.php?marca=aromanza&categoria=tibetanospremium">Tibetanos Premium</a></li>
                        <li><a href="productos.php?marca=aromanza&categoria=tibetanosslim">Tibetanos Slim</a></li>
                        <li><a href="productos.php?marca=aromanza&categoria=momentos">Momentos</a></li>
                        <li><a href="productos.php?marca=aromanza&categoria=conos">Conos</a></li>
                        <li><a href="productos.php?marca=aromanza&categoria=minitibetanos">Mini Tibetanos</a></li>
                        <li><a href="productos.php?marca=aromanza&categoria=magicos">Mágicos</a></li>
                        <li><a href="productos.php?marca=aromanza&categoria=rama">Rama</a></li>
                        <li><a href="productos.php?marca=aromanza&categoria=esferasmagicas">Esferas Mágicas</a></li>
                        <li><a href="productos.php?marca=aromanza&categoria=kits">Kits</a></li>
                        <li><a href="productos.php?marca=aromanza&categoria=minibuenaonda">Mini Buena Onda</a></li>
                        <li><a href="productos.php?marca=aromanza&categoria=buenaonda">Buena Onda</a></li>
                        <li><a href="productos.php?marca=aromanza&categoria=velasaromaticas">Velas Aromáticas</a></li>
                        <li><a href="productos.php?marca=aromanza&categoria=difusor">Difusor</a></li>
                        <li><a href="productos.php?marca=aromanza&categoria=difusordeauto">Difusor de Auto</a></li>
                        <li><a href="productos.php?marca=aromanza&categoria=textil">Textil</a></li>
                        <li><a href="productos.php?marca=aromanza&categoria=rocioaurico">Rocío Aurico</a></li>

                    </ul>
                </li>

                <li class="has-submenu">
                    <div class="submenu-toggle">
                        <span>SANDRA MARZAN</span>
                        <i class="fas fa-chevron-right arrow-icon"></i>
                    </div>
                    <ul class="submenu">
                        <li><a href="productos.php?marca=sandra%20marzan&categoria=lineahogar">Línea Hogar</a></li>
                        <li><a href="productos.php?marca=sandra%20marzan&categoria=lineabebeinfantil">Línea
                                Bebé/Infantil</a></li>
                        <li><a href="productos.php?marca=sandra%20marzan&categoria=lineatalcual">Línea Tal Cual</a></li>
                        <li><a href="productos.php?marca=sandra%20marzan&categoria=difusor">Difusor</a></li>
                        <li><a href="productos.php?marca=sandra%20marzan&categoria=aerosol">Aerosol</a></li>

                    </ul>
                </li>

                <li class="has-submenu">
                    <div class="submenu-toggle">
                        <span>SAGRADA MADRE</span>
                        <i class="fas fa-chevron-right arrow-icon"></i>
                    </div>
                    <ul class="submenu">
                        <li><a href="productos.php?marca=sagrada%20madre&categoria=palosanto">Palo Santo</a></li>
                        <li><a href="productos.php?marca=sagrada%20madre&categoria=natural">Natural</a></li>
                        <li><a href="productos.php?marca=sagrada%20madre&categoria=botanicos">Botánicos</a></li>
                        <li><a href="productos.php?marca=sagrada%20madre&categoria=patagonia">Patagonia</a></li>
                        <li><a href="productos.php?marca=sagrada%20madre&categoria=cannabis">Cannabis</a></li>
                        <li><a href="productos.php?marca=sagrada%20madre&categoria=9hierbas">9 Hierbas</a></li>
                        <li><a href="productos.php?marca=sagrada%20madre&categoria=sagrado">Sagrado</a></li>
                        <li><a href="productos.php?marca=sagrada%20madre&categoria=ritual">Ritual</a></li>
                        <li><a href="productos.php?marca=sagrada%20madre&categoria=5elementos">5 elementos</a></li>
                        <li><a href="productos.php?marca=sagrada%20madre&categoria=yagra">Yagra</a></li>
                        <li><a href="productos.php?marca=sagrada%20madre&categoria=india">India</a></li>
                        <li><a href="productos.php?marca=sagrada%20madre&categoria=varios">Varios</a></li>
                        <li><a href="productos.php?marca=sagrada%20madre&categoria=defumacion">Defumación</a></li>

                    </ul>
                </li>

                <li class="has-submenu">
                    <div class="submenu-toggle">
                        <span>Otros</span>
                        <i class="fas fa-chevron-right arrow-icon"></i>
                    </div>
                    <ul class="submenu">

                        <li><a href="productos.php?marca=otros&categoria=iluminarte">Iluminarte</a></li>
                        <li><a href="productos.php?marca=otros&categoria=sahumeriosimportados">Sahumerios importados</a>
                        </li>
                        <li><a href="productos.php?marca=otros&categoria=sahumeriosnacionales">Sahumerios nacionales</a>
                        </li>
                        <li><a href="productos.php?marca=otros&categoria=velas">Velas</a></li>
                        <li><a href="productos.php?marca=otros&categoria=humidificadores">Humidificadores</a></li>
                        <li><a href="productos.php?marca=otros&categoria=figuras">Figuras</a></li>
                        <li><a href="productos.php?marca=otros&categoria=cascadasdehumo">Cascadas de humo</a></li>
                        <li><a href="productos.php?marca=otros&categoria=lamparasdesal">Lámparas de Sal</a></li>
                        <li><a href="productos.php?marca=otros&categoria=portasahumerios">Portasahumerios</a></li>
                        <li><a href="productos.php?marca=otros&categoria=varios">Varios</a></li>

                    </ul>
                </li>

                <!-- Repetí esto mismo para otras marcas -->
                <li><a href="#info">CONTACTANOS</a></li>
            </ul>
        </div>
    </section>


    <!-- FILTROS -->
    <section class="filtros">
        <div class="filtro-container">
            <div class="search-container special2">
                <input type="text" class="busqueda" placeholder="Buscar...">
                <button type="submit" class="btn-buscar"><i class="fas fa-search"></i></button>
            </div>
            <label for="filtro-select"><i class="fas fa-filter"></i> Filtrar</label>
            <select id="filtro-select">
                <option value="preciomenor">Precio: Menor a Mayor</option>
                <option value="preciomayor">Precio: Mayor a Menor</option>
                <option value="az">A - Z</option>
                <option value="za">Z - A</option>
            </select>
            <button id="btn-reset-filtros">Ver todos los productos</button>
        </div>
    </section>


    <!-- PRODUCTOS -->
    <section class="productos">
        <div id="filtros-aplicados" class="filtros-activos" style="text-align:center; font-weight:500; margin: 10px 0;">
        </div>

        <div id="contenedor-productos" class="cards-container"></div>
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
                    <li><a href="productos.php?marca=saphirus">Saphirus</a></li>
                    <li><a href="productos.php?marca=aromanza">Aromanza</a></li>
                    <li><a href="productos.php?marca=sagrada madre">Sagrada Madre</a></li>
                    <li><a href="productos.php?marca=sandra marzan">Sandra Marzan</a></li>
                    <li><a href="productos.php">Todos los productos</a></li>
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

    <!-- Botón de subir arriba -->
    <a href="#" id="btnSubirArriba">
        <img src="https://cdn-icons-png.flaticon.com/512/14024/14024921.png" alt="Subir" />
    </a>


</body>

</html>