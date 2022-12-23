const toggleMenu = document.querySelector('.toggle-menu');
const mobileMenu = document.querySelector('.header-mobile-menu');
const filterItem = document.querySelectorAll('.filter-group__filter-item');
const filterGroup = document.querySelectorAll('.filters__filters-group');
const filterOpen = document.querySelector('.filters-group-title');

const bodyEl = document.body;

//прослушиваем событие клик по гамбургеру
toggleMenu.addEventListener('click', function () {
    this.classList.toggle('active');
    mobileMenu.classList.toggle('active');
    bodyEl.classList.toggle('noscroll');
});
