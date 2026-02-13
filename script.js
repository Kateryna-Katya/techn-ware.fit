// Initialize Lenis Smooth Scroll
const lenis = new Lenis();

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}

requestAnimationFrame(raf);

// Header Scroll Effect
const header = document.querySelector('.header');
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        header.classList.add('header--scrolled');
    } else {
        header.classList.remove('header--scrolled');
    }
});

// Mobile Menu Toggle
const burger = document.querySelector('[data-burger]');
const nav = document.querySelector('[data-nav]');

burger.addEventListener('click', () => {
    nav.classList.toggle('nav--active');
    burger.classList.toggle('burger--active');
});

// Close menu on link click
document.querySelectorAll('.nav__link').forEach(link => {
    link.addEventListener('click', () => {
        nav.classList.remove('nav--active');
        burger.classList.remove('burger--active');
    });
});

// Lucide Icons Initialization
lucide.createIcons();

console.log('<?= $domainTitle ?> project initialized');