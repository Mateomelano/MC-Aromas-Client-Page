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
  
  