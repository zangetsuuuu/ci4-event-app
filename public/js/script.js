/**
 * Adds a fixed class to the header when user scrolls past it,
 * and removes it when they scroll back up.
 */
const header = document.querySelector('header');
const navbar = document.getElementById('navbar');
const fixedNav = header.offsetTop;

window.addEventListener('scroll', () => {
    const scrolled = window.scrollY > fixedNav;
    header.classList.toggle('glass', scrolled);
    navbar.classList.toggle('border-b', !scrolled);
});