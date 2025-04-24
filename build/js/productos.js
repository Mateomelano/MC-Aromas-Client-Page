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

// FUNCIÓN PARA MOSTRAR PRODUCTOS
function mostrarProductos(productos) {
  const contenedor = document.getElementById("contenedor-productos");
  contenedor.innerHTML = "";

  // Si no hay productos, mostramos mensaje
  if (productos.length === 0) {
    contenedor.innerHTML = `
        <div class="no-productos" style="text-align:center; padding:2rem; color:#555;">
          <p>No se encontraron productos.</p>
        </div>
      `;
    return;
  }

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
      <button onclick="agregarAlCarrito('${producto.nombre}', ${producto.precio}, '${producto.imagen}', ${producto.preciomayorista} )">Agregar al carrito</button>

      </div>
    `;

    contenedor.appendChild(card);
  });
}

// FUNCIÓN PARA CARGAR PRODUCTOS CON FILTROS
// Variables globales para filtros
let filtrosActivos = {
  marca: "",
  categoria: "",
  busqueda: "",
};
// FUNCIÓN PARA CARGAR PRODUCTOS CON FILTROS
function cargarProductos() {
  const orden = document.getElementById("filtro-select")?.value || "";

  const url = `src/php/get_productos.php?orden=${orden}&busqueda=${encodeURIComponent(
    filtrosActivos.busqueda
  )}&marca=${encodeURIComponent(
    filtrosActivos.marca
  )}&categoria=${encodeURIComponent(filtrosActivos.categoria)}`;

  fetch(url)
    .then((response) => response.json())
    .then((data) => {
      mostrarProductos(data);
      mostrarFiltrosAplicados({
        marca: filtrosActivos.marca,
        categoria: filtrosActivos.categoria,
        busqueda: filtrosActivos.busqueda,
      });
    })
    .catch((error) => console.error("Error al cargar productos:", error));
}

// ACTUALIZAR LA BÚSQUEDA DESDE INPUTS
function actualizarBusquedaYRecargar() {
  document.querySelectorAll(".busqueda").forEach((input) => {
    if (input.value.trim() !== "") {
      filtrosActivos.busqueda = input.value.trim();
    }
  });

  cargarProductos();
}

// MOSTRAR FILTROS ACTIVOS
function mostrarFiltrosAplicados({ marca, categoria, busqueda }) {
  const contenedor = document.getElementById("filtros-aplicados");
  let texto = "";

  // Si hay marca o categoría, empezamos el texto
  if (marca || categoria) {
    texto = "Mostrando:";
    if (marca) texto += ` ${capitalizar(marca)}`;
    if (categoria) texto += ` - ${capitalizar(categoria)}`;
  }

  // Si también hay búsqueda, la agregamos al final
  if (busqueda) {
    // Si ya hay texto previo (marca o categoría), lo combinamos
    if (texto) {
      texto += ` - ${busqueda}`;
    } else {
      texto = `Resultados para: "${busqueda}"`;
    }
  }

  contenedor.textContent = texto;
}

// FUNCIONES AUXILIARES
function capitalizar(str) {
  return str.charAt(0).toUpperCase() + str.slice(1).toLowerCase();
}

// RESETEAR FILTROS
function agregarResetListener() {
  const btnReset = document.getElementById("btn-reset-filtros");
  if (btnReset) {
    btnReset.addEventListener("click", () => {
      window.location.href = "productos.php";
    });
  }
}

// INICIALIZACIÓN
document.addEventListener("DOMContentLoaded", () => {
  //SUBIR ARRIBA BOTON
  // Suavemente hace scroll hasta arriba
  document
    .getElementById("btnSubirArriba")
    .addEventListener("click", function (e) {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  const urlParams = new URLSearchParams(window.location.search);

  // Guardar filtros iniciales desde la URL
  filtrosActivos.busqueda = urlParams.get("busqueda") || "";
  filtrosActivos.marca = urlParams.get("marca") || "";
  filtrosActivos.categoria = urlParams.get("categoria") || "";

  // Reflejar búsqueda en inputs
  if (filtrosActivos.busqueda) {
    document.querySelectorAll(".busqueda").forEach((input) => {
      input.value = filtrosActivos.busqueda;
    });
  }

  // Carga inicial
  cargarProductos();
  agregarResetListener();

  // Evento de cambio de orden
  const filtro = document.getElementById("filtro-select");
  if (filtro) {
    filtro.addEventListener("change", cargarProductos);
  }

  // Buscar con botón
  document.querySelectorAll(".btn-buscar").forEach((btn) => {
    btn.addEventListener("click", () => {
      actualizarBusquedaYRecargar();
    });
  });

  // Buscar con Enter
  document.querySelectorAll(".busqueda").forEach((input) => {
    input.addEventListener("keyup", function (e) {
      if (e.key === "Enter") {
        actualizarBusquedaYRecargar();
      }
    });
  });
});

//CARRITO
let carrito = JSON.parse(localStorage.getItem("carrito")) || [];


function agregarAlCarrito(nombre, precio, imagenUrl, preciomayorista) {
  const productoExistente = carrito.find((p) => p.nombre === nombre);
  if (productoExistente) {
    productoExistente.cantidad++;
  } else {
    carrito.push({ nombre, precio: parseFloat(precio), imagenUrl, preciomayorista: parseFloat(preciomayorista) , cantidad: 1 });
  }
  actualizarCarrito();
  mostrarCarrito();
}

function actualizarCarrito() {
  let contenedor = document.getElementById("carritoContenido");
  contenedor.innerHTML = "";

  carrito.forEach((prod, index) => {
    let div = document.createElement("div");
    div.classList.add("carrito-producto");
    div.innerHTML = `
      <img src="${prod.imagenUrl}" alt="${prod.nombre}" class="carrito-img">
      <div class="carrito-producto-info">
        <div class="nombre">${prod.nombre}</div>
        <div class="precio"><strong>$${(prod.precio * prod.cantidad).toLocaleString("es-AR", { minimumFractionDigits: 2 })}</strong></div>
        <div class="preciomayorista"><strong>$${(prod.preciomayorista * prod.cantidad).toLocaleString("es-AR", { minimumFractionDigits: 2 })}</strong></div>
        <div class="cantidad-control">
          <button onclick="cambiarCantidad(${index}, -1)">−</button>
          <span>${prod.cantidad}</span>
          <button onclick="cambiarCantidad(${index}, 1)">+</button>
          <button class="eliminar" onclick="eliminarProducto(${index})"><i class="fa-regular fa-trash-can"></i></button>
        </div>
      </div>
    `;
    contenedor.appendChild(div);
  });

  const total = carrito.reduce((sum, p) => sum + p.precio * p.cantidad, 0);
  const totalmayorista = carrito.reduce((sum, p) => sum + p.preciomayorista * p.cantidad, 0);
  document.getElementById("carritoTotal").innerText = `$${total.toLocaleString("es-AR", { minimumFractionDigits: 2 })}`;
  document.getElementById("carritoTotalMayorista").innerText = `$${totalmayorista.toLocaleString("es-AR", { minimumFractionDigits: 2 })}`;


  const totalCantidad = carrito.reduce((acc, producto) => acc + producto.cantidad, 0);
  const contador = document.getElementById("contadorCarrito");

  contador.textContent = totalCantidad;
  contador.style.display = totalCantidad > 0 ? "inline-block" : "none";

  localStorage.setItem("carrito", JSON.stringify(carrito));

}

function cambiarCantidad(index, delta) {
  carrito[index].cantidad += delta;
  if (carrito[index].cantidad <= 0) {
    carrito.splice(index, 1);
  }
  actualizarCarrito();
}

function eliminarProducto(index) {
  carrito.splice(index, 1);
  actualizarCarrito();
}

function mostrarCarrito() {
  document.getElementById("carrito").classList.add("abierto");
}

document.addEventListener("DOMContentLoaded", () => {
  document.getElementById("cerrarCarrito").addEventListener("click", () => {
    document.getElementById("carrito").classList.remove("abierto");
  });

  const iconoCarrito = document.getElementById("iconoCarrito");
  if (iconoCarrito) {
    iconoCarrito.addEventListener("click", mostrarCarrito);
  }
  actualizarCarrito(); // ← Muy importante para que cargue lo guardado

});

//Whataspp Carrito Compra
function enviarPedidoWhatsApp() {
  const telefono = "5493534595325";
  if (carrito.length === 0) {
    alert("El carrito está vacío.");
    return;
  }

  let mensaje = "*🛒 Pedido desde la tienda online:*\n\n";

  carrito.forEach((prod) => {
    mensaje += `• *${prod.nombre}*\n`;
    mensaje += `  Cantidad: ${prod.cantidad}\n`;
    mensaje += `  Precio: $${(prod.precio * prod.cantidad).toLocaleString("es-AR", { minimumFractionDigits: 2 })}\n`;
    mensaje += `  Precio Mayorista: $${(prod.preciomayorista * prod.cantidad).toLocaleString("es-AR", { minimumFractionDigits: 2 })}\n\n`;
  });

  const total = carrito.reduce((sum, p) => sum + p.precio * p.cantidad, 0);
  const totalMayorista = carrito.reduce((sum, p) => sum + p.preciomayorista * p.cantidad, 0);

  mensaje += `*💵 Total: $${total.toLocaleString("es-AR", { minimumFractionDigits: 2 })}*\n`;
  mensaje += `*📦 Total Mayorista: $${totalMayorista.toLocaleString("es-AR", { minimumFractionDigits: 2 })}*`;

  const mensajeCodificado = encodeURIComponent(mensaje);
  const urlMobile = `https://wa.me/${telefono}?text=${mensajeCodificado}`;
  const urlWeb = `https://web.whatsapp.com/send?phone=${telefono}&text=${mensajeCodificado}`;

  const isMobile = /iPhone|Android|iPad|Mobile/i.test(navigator.userAgent);
  window.open(isMobile ? urlMobile : urlWeb, "_blank");

    // 🧹 Vaciar el carrito
    carrito = [];
    localStorage.removeItem("carrito");
    actualizarCarrito();
}

document.addEventListener("DOMContentLoaded", () => {
  const botonCompra = document.querySelector(".btn-iniciar-compra");
  if (botonCompra) {
    botonCompra.addEventListener("click", enviarPedidoWhatsApp);
  }
});
