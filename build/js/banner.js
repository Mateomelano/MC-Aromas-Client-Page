// FUNCION BANNERS
document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".slider");
  const indicatorsContainer = document.querySelector(".indicators");

  if (!slider || !indicatorsContainer) return;

  fetch("src/php/get_banners.php")
    .then((response) => response.json())
    .then((banners) => {
      if (!banners.length) {
        console.warn("No hay banners disponibles.");
        return;
      }

      // Insertar los banners
      banners.forEach((url) => {
        const slide = document.createElement("div");
        slide.classList.add("slide");
        slide.innerHTML = `<img src="${url}" alt="Banner">`;
        slider.appendChild(slide);
      });

      const slides = document.querySelectorAll(".slide");

      // Crear indicadores
      banners.forEach((_, i) => {
        const dot = document.createElement("div");
        dot.classList.add("dot");
        dot.addEventListener("click", () => {
          currentIndex = i;
          updateSlider();
        });
        indicatorsContainer.appendChild(dot);
      });

      const indicators = indicatorsContainer.querySelectorAll(".dot");
      let currentIndex = 0;

      function updateSlider() {
        slider.style.transform = `translateX(-${currentIndex * 100}%)`;
        indicators.forEach((dot, i) =>
          dot.classList.toggle("active", i === currentIndex)
        );
      }

      function autoSlide() {
        currentIndex = (currentIndex + 1) % banners.length;
        updateSlider();
      }

      updateSlider();
      setInterval(autoSlide, 5000);
    })
    .catch((error) => console.error("Error al cargar banners:", error));
});

// FUNCION PRODUCTOS DESTACADOS
document.addEventListener("DOMContentLoaded", () => {
  fetch("src/php/get_prod_dest.php")
    .then((res) => res.json())
    .then((productos) => {
      const container = document.getElementById("productos-container");

      productos.forEach((producto) => {
        const card = document.createElement("div");
        card.className = "product-card";
        card.innerHTML = `
        <div class="product-image">
          <img src="${producto.imagen}" alt="${producto.nombre}" />
          <button class="add-to-cart">
            <i class="icon">🛒</i>
          </button>
        </div>
        <h3 class="product-title">${producto.nombre}</h3>
        <p class="product-price">$${parseFloat(producto.precio).toLocaleString(
          "es-AR",
          { minimumFractionDigits: 2 }
        )}</p>
        <p class="product-price-mayorista">Precio Mayorista: $${parseFloat(
          producto.preciomayorista
        ).toLocaleString("es-AR", { minimumFractionDigits: 2 })}</p>
      `;
        container.appendChild(card);
      });
    })
    .catch((error) => {
      console.error("Error al cargar productos:", error);
    });
});

// FUNCION WHATSAPP
function abrirWhatsApp() {
  const telefono = "5493534595325"; // sin espacios ni signos
  const mensaje = encodeURIComponent(
    "¡Hola! Quisiera más info sobre los productos."
  );

  const urlMobile = `https://wa.me/${telefono}?text=${mensaje}`;
  const urlWeb = `https://web.whatsapp.com/send?phone=${telefono}&text=${mensaje}`;

  const isMobile = /iPhone|Android|iPad|Mobile/i.test(navigator.userAgent);

  window.open(isMobile ? urlMobile : urlWeb, "_blank");
}

// FUNCION MOVER LOGO
function moverLogo() {
  const logo = document.querySelector(".logo-central");
  const navRight = document.querySelector(".nav-right");
  const navCenter = document.querySelector(".nav-center");

  if (window.innerWidth <= 980) {
    if (!navRight.contains(logo)) {
      navRight.appendChild(logo);
    }
  } else {
    if (!navCenter.contains(logo)) {
      navCenter.appendChild(logo);
    }
  }
}

window.addEventListener("load", moverLogo);
window.addEventListener("resize", moverLogo);

// SIDEBAR

document.addEventListener("DOMContentLoaded", () => {
  const toggles = document.querySelectorAll('.submenu-toggle');

  toggles.forEach(toggle => {
    toggle.addEventListener('click', () => {
      const submenu = toggle.nextElementSibling;
      const arrow = toggle.querySelector('.arrow-icon');

      submenu.classList.toggle('show');
      arrow.classList.toggle('rotate');
    });
  });

  // Sidebar open/close (por si usás un ícono de abrir)
  const sidebar = document.getElementById('sidebar');
  const openBtn = document.getElementById('sidebar-icon');
  const closeBtn = document.getElementById('close-sidebar');

  openBtn?.addEventListener('click', () => {
    sidebar.style.transform = 'translateX(0)';
  });

  closeBtn?.addEventListener('click', () => {
    sidebar.style.transform = 'translateX(-100%)';
  });

  sidebar.style.transform = 'translateX(-100%)'; // oculta al iniciar
});

