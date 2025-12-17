// Espera a que el DOM esté completamente cargado
document.addEventListener('DOMContentLoaded', () => {
    // 1. Obtener elementos del DOM
    const header = document.querySelector('.main-header'); 
    const burgerButton = document.querySelector('.burger-button');
    const burgerIcon = document.querySelector('.burger-icon');

    // 2. Agregar el event listener al botón
    burgerButton.addEventListener('click', () => {
        // Alternar la clase en el <header> principal para mostrar/ocultar el menú
        header.classList.toggle('menu-open');

        // Alternar la clase en el <span> para la animación de la 'X'
        burgerIcon.classList.toggle('is-active');

        // Alternar el estado de accesibilidad
        const isExpanded = burgerButton.getAttribute('aria-expanded') === 'true' || false;
        burgerButton.setAttribute('aria-expanded', !isExpanded);
    });
});