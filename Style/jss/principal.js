// 🔹 Sidebar (Menú desplegable)
const menuIcon = document.getElementById('menu-icon');
const sidebar = document.getElementById('sidebar');
const sidebarClose = document.getElementById('sidebar-close');

menuIcon.addEventListener('click', () => {
    sidebar.style.left = '0'; // Muestra el sidebar
});

sidebarClose.addEventListener('click', () => {
    sidebar.style.left = '-250px'; // Oculta el sidebar
});

// 🔹 Carrito de compras

