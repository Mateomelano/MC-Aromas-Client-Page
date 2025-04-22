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
  <script src="build/js/banner.js?v=<?php echo time(); ?>"></script>
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
          src="https://res.cloudinary.com/dzfzqzdcu/image/upload/v1744059260/ea4zbrhdcpl4eu9mdgwz.png" alt="Logo">
      </a>
    </div>

    <div class="nav-right">
      <img src="https://res.cloudinary.com/dzfzqzdcu/image/upload/v1744059294/y0illgpwo5zv2yhyhvxs.png" class="carrito"
        alt="Carrito">
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
            <li><a href="productos.php?marca=saphirus&categoria=Textil">Textil</a></li>
            <li><a href="productos.php?marca=saphirus&categoria=Home Spray">Home Spray</a></li>
            <li><a href="productos.php?marca=saphirus&categoria=Aerosol">Aerosol</a></li>
            <li><a href="productos.php?marca=saphirus&categoria=Difusor">Difusor</a></li>
            <li><a href="productos.php?marca=saphirus&categoria=Difusor Premium">Difusor Premium</a></li>
            <li><a href="productos.php?marca=saphirus&categoria=Miniconcentrado">Mini concentrado</a></li>
            <li><a href="productos.php?marca=saphirus&categoria=Aparatos">Aparatos</a></li>
            <li><a href="productos.php?marca=saphirus&categoria=Aceite Esencial">Aceite Esencial</a></li>
            <li><a href="productos.php?marca=saphirus&categoria=Antihumedad">Antihumedad</a></li>
            <li><a href="productos.php?marca=saphirus&categoria=Aromatizantes Varios">Aromatizantes Varios</a></li>
            <li><a href="productos.php?marca=saphirus&categoria=Shiny">Línea Shiny</a></li>
            <li><a href="productos.php?marca=saphirus&categoria=Perfumes Milano">Perfumes Milano</a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <div class="submenu-toggle">
            <span>AROMANZA</span>
            <i class="fas fa-chevron-right arrow-icon"></i>
          </div>
          <ul class="submenu">
            <li><a href="productos.php?marca=aromanza&categoria=Tibetanosx8">Tibetanos x8</a></li>
            <li><a href="productos.php?marca=aromanza&categoria=Tibetanos Premium">Tibetanos Premium</a></li>
            <li><a href="productos.php?marca=aromanza&categoria=Tibetanos Slim">Tibetanos Slim</a></li>
            <li><a href="productos.php?marca=aromanza&categoria=Momentos">Momentos</a></li>
            <li><a href="productos.php?marca=aromanza&categoria=Conos">Conos</a></li>
            <li><a href="productos.php?marca=aromanza&categoria=Mini Tibetanos">Mini Tibetanos</a></li>
            <li><a href="productos.php?marca=aromanza&categoria=Magicos">Mágicos</a></li>
            <li><a href="productos.php?marca=aromanza&categoria=Rama">Rama</a></li>
            <li><a href="productos.php?marca=aromanza&categoria=Esferas Magicas">Esferas Mágicas</a></li>
            <li><a href="productos.php?marca=aromanza&categoria=Kits">Kits</a></li>
            <li><a href="productos.php?marca=aromanza&categoria=Mini Buena Onda">Mini Buena Onda</a></li>
            <li><a href="productos.php?marca=aromanza&categoria=Buena Onda">Buena Onda</a></li>
            <li><a href="productos.php?marca=aromanza&categoria=Velas Aromaticas">Velas Aromáticas</a></li>
            <li><a href="productos.php?marca=aromanza&categoria=Difusor">Difusor</a></li>
            <li><a href="productos.php?marca=aromanza&categoria=difusor de auto">Difusor de Auto</a></li>
            <li><a href="productos.php?marca=aromanza&categoria=textil">Textil</a></li>
            <li><a href="productos.php?marca=aromanza&categoria=Rocio Aurico">Rocío Aurico</a></li>

          </ul>
        </li>

        <li class="has-submenu">
          <div class="submenu-toggle">
            <span>SANDRA MARZAN</span>
            <i class="fas fa-chevron-right arrow-icon"></i>
          </div>
          <ul class="submenu">
            <li><a href="productos.php?marca=sandra%20marzan&categoria=Linea Hogar">Línea Hogar</a></li>
            <li><a href="productos.php?marca=sandra%20marzan&categoria=Linea Bebe Infantil">Línea Bebé/Infantil</a></li>
            <li><a href="productos.php?marca=sandra%20marzan&categoria=Linea Tal Cual">Línea Tal Cual</a></li>
            <li><a href="productos.php?marca=sandra%20marzan&categoria=Difusor">Difusor</a></li>
            <li><a href="productos.php?marca=sandra%20marzan&categoria=Aerosol">Aerosol</a></li>

          </ul>
        </li>

        <li class="has-submenu">
          <div class="submenu-toggle">
            <span>SAGRADA MADRE</span>
            <i class="fas fa-chevron-right arrow-icon"></i>
          </div>
          <ul class="submenu">
            <li><a href="productos.php?marca=sagrada%20madre&categoria=Palo Santo">Palo Santo</a></li>
            <li><a href="productos.php?marca=sagrada%20madre&categoria=Natural">Natural</a></li>
            <li><a href="productos.php?marca=sagrada%20madre&categoria=Botanicos">Botánicos</a></li>
            <li><a href="productos.php?marca=sagrada%20madre&categoria=Patagonia">Patagonia</a></li>
            <li><a href="productos.php?marca=sagrada%20madre&categoria=Cannabis">Cannabis</a></li>
            <li><a href="productos.php?marca=sagrada%20madre&categoria=9 Hierbas">9 Hierbas</a></li>
            <li><a href="productos.php?marca=sagrada%20madre&categoria=Sagrado">Sagrado</a></li>
            <li><a href="productos.php?marca=sagrada%20madre&categoria=Ritual">Ritual</a></li>
            <li><a href="productos.php?marca=sagrada%20madre&categoria=5 Elementos">5 elementos</a></li>
            <li><a href="productos.php?marca=sagrada%20madre&categoria=Yagra">Yagra</a></li>
            <li><a href="productos.php?marca=sagrada%20madre&categoria=India">India</a></li>
            <li><a href="productos.php?marca=sagrada%20madre&categoria=Varios">Varios</a></li>
            <li><a href="productos.php?marca=sagrada%20madre&categoria=Defumacion">Defumación</a></li>

          </ul>
        </li>

        <li class="has-submenu">
          <div class="submenu-toggle">
            <span>Otros</span>
            <i class="fas fa-chevron-right arrow-icon"></i>
          </div>
          <ul class="submenu">

            <li><a href="productos.php?marca=otros&categoria=Iluminarte">Iluminarte</a></li>
            <li><a href="productos.php?marca=otros&categoria=Sahumerios Importados">Sahumerios importados</a></li>
            <li><a href="productos.php?marca=otros&categoria=Sahumerios Nacionales">Sahumerios nacionales</a></li>
            <li><a href="productos.php?marca=otros&categoria=Velas">Velas</a></li>
            <li><a href="productos.php?marca=otros&categoria=Humidificadores">Humidificadores</a></li>
            <li><a href="productos.php?marca=otros&categoria=Figuras">Figuras</a></li>
            <li><a href="productos.php?marca=otros&categoria=Cascadas De Humo">Cascadas de humo</a></li>
            <li><a href="productos.php?marca=otros&categoria=Lamparas De Sal">Lámparas de Sal</a></li>
            <li><a href="productos.php?marca=otros&categoria=Porta Sahumerios">Portasahumerios</a></li>
            <li><a href="productos.php?marca=otros&categoria=Varios">Varios</a></li>

          </ul>
        </li>

        <!-- Repetí esto mismo para otras marcas -->
        <li><a href="#info">CONTACTANOS</a></li>
      </ul>
    </div>
  </section>

  <!--  BANNERS  -->

  <section class="banners">
    <div class="slider"></div>
    <div class="indicators"></div>
  </section>


  <!--  PRODUCTOS DESTACADOS  -->

  <section class="productos-destacados">
    <h2>Productos Destacados</h2>
    <div class="productos-destacados-container" id="productos-container">
      <!-- Acá se insertan los productos desde JS -->
    </div>
  </section>



  <!--  MARCAS  -->
  <section class="marcas">
    <div class="grid-mosaico">
      <div class="card saphirus">
        <div class="overlay">
          <a href="productos.php?marca=saphirus">VER PRODUCTOS</a>
        </div>
      </div>

      <div class="card aromanza">
        <div class="overlay">
          <a href="productos.php?marca=aromanza">VER PRODUCTOS</a>
        </div>
      </div>

      <div class="bloqueInferior">
        <div class="card sagrada">
          <div class="overlay">
            <a href="productos.php?marca=sagrada madre">VER PRODUCTOS</a>
          </div>
        </div>
        <div class="card sandra">
          <div class="overlay">
            <a href="productos.php?marca=sandra marzan">VER PRODUCTOS</a>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- INFO -->
  <section class="info" id="info">
    <div class="info-header">
      <a href="https://www.instagram.com/merceriachela" target="_blank" class="instagram-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-instagram-icon lucide-instagram">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
          <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
          <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
        </svg>
        <span>@merceriachela</span>
      </a>
      <p class="subtext">SEGUINOS</p>
    </div>

    <div class="info-flex">
      <a href="#" onclick="abrirWhatsApp(); return false;" target="_blank" class="info-item">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5" stroke="currentColor"
          class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
        </svg>
        <p>Contactate con nosotros</p>
      </a>

      <div class="info-item">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5" stroke="currentColor"
          class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
        </svg>

        <p>Pagos por Efectivo / Transeferencia</p>
      </div>

      <div class="info-item">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5" stroke="currentColor"
          class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
        </svg>
        <p>Sitio Seguro</p>
      </div>
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
          <a href="https://www.instagram.com/merceriachela" target="_blank"><i class="fab fa-instagram"></i></a>
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