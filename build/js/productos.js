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
  const toggles = document.querySelectorAll(".submenu-toggle");

  toggles.forEach((toggle) => {
    toggle.addEventListener("click", () => {
      const submenu = toggle.nextElementSibling;
      const arrow = toggle.querySelector(".arrow-icon");

      submenu.classList.toggle("show");
      arrow.classList.toggle("rotate");
    });
  });

  // Sidebar open/close (por si usás un ícono de abrir)
  const sidebar = document.getElementById("sidebar");
  const openBtn = document.getElementById("sidebar-icon");
  const closeBtn = document.getElementById("close-sidebar");

  openBtn?.addEventListener("click", () => {
    sidebar.style.transform = "translateX(0)";
  });

  closeBtn?.addEventListener("click", () => {
    sidebar.style.transform = "translateX(-100%)";
  });

  sidebar.style.transform = "translateX(-100%)"; // oculta al iniciar
});

// PRODUCTOS GET
document.addEventListener("DOMContentLoaded", () => {
  fetch("src/php/get_productos.php")
    .then((response) => response.json())
    .then((data) => mostrarProductos(data))
    .catch((error) => console.error("Error al cargar productos:", error));
});

// FUNCIÓN PARA MOSTRAR PRODUCTOS
function mostrarProductos(productos) {
  const contenedor = document.getElementById("contenedor-productos");
  contenedor.innerHTML = "";

  productos.forEach((producto) => {
    const card = document.createElement("div");
    card.classList.add("card");

    card.innerHTML = `
      <img src="${producto.imagen}" alt="${producto.nombre}">
      <div class="card-content">
        <h3 class="producto-nombre">${producto.nombre}</h3>
        <p class="producto-descripcion">${producto.descripcion}</p>
        <p class="producto-precio">$ ${parseFloat(
          producto.precio
        ).toLocaleString("es-AR", { minimumFractionDigits: 2 })}</p>
        <p class="precio-mayorista">Precio Mayorista: $ ${parseFloat(
          producto.preciomayorista
        ).toLocaleString("es-AR", { minimumFractionDigits: 2 })}</p>
        <button onclick="agregarAlCarrito('${
          producto.nombre
        }')">Agregar al carrito</button>
      </div>
    `;

    contenedor.appendChild(card);
  });
}

// FUNCIÓN PARA CARGAR PRODUCTOS CON FILTROS
function cargarProductos(event) {
  const orden = document.getElementById("filtro-select")?.value || "";

  let busqueda = "";

  // Si el evento proviene de una input de búsqueda, usamos su valor
  if (event && event.target && event.target.classList.contains("busqueda")) {
    busqueda = event.target.value.trim();
  } 
  // Si viene de un botón, buscamos el input anterior más cercano
  else if (event && event.target && event.target.classList.contains("btn-buscar")) {
    const container = event.target.closest(".search-container");
    const input = container?.querySelector(".busqueda");
    if (input) {
      busqueda = input.value.trim();
    }
  } 
  // Si viene del filtro o es carga inicial, tomamos el primero con texto
  else {
    document.querySelectorAll(".busqueda").forEach((input) => {
      if (input.value.trim() !== "") {
        busqueda = input.value.trim();
      }
    });
  }

  fetch(`src/php/get_productos.php?orden=${orden}&busqueda=${encodeURIComponent(busqueda)}`)
    .then((response) => response.json())
    .then((data) => mostrarProductos(data))
    .catch((error) => console.error("Error al cargar productos:", error));
}

// CUANDO CARGA EL DOM
document.addEventListener("DOMContentLoaded", () => {
  const urlParams = new URLSearchParams(window.location.search);
  const busquedaURL = urlParams.get("busqueda");

  if (busquedaURL) {
    document.querySelectorAll(".busqueda").forEach((input) => {
      input.value = busquedaURL;
    });
  }

  cargarProductos(); // carga inicial

  const filtro = document.getElementById("filtro-select");
  if (filtro) {
    filtro.addEventListener("change", cargarProductos);
  }

  document.querySelectorAll(".btn-buscar").forEach((btn) => {
    btn.addEventListener("click", cargarProductos);
  });

  document.querySelectorAll(".busqueda").forEach((input) => {
    input.addEventListener("keyup", function (e) {
      if (e.key === "Enter") {
        cargarProductos(e);
      }
    });
  });
});

//FILTROS

//CARRITO
function agregarAlCarrito(nombreProducto) {
  alert(`Producto "${nombreProducto}" agregado al carrito (a futuro jeje)`);
}
