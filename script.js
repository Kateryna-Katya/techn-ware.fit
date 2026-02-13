/**
 * PROJECT: techn-ware.fit
 * FINAL UNIFIED SCRIPT
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // 1. ПЛАВНЫЙ СКРОЛЛ (LENIS)
    let lenis;
    if (typeof Lenis !== 'undefined') {
        lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        });
        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);
    }

    // 2. АНИМАЦИИ ПРИ СКРОЛЛЕ (AOS)
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100,
            easing: 'ease-out-cubic'
        });
    }

    // 3. ИНИЦИАЛИЗАЦИЯ ВСЕХ БЛОКОВ
    initHeroThreeJS();
    initNavigation();
    initMentors();
    initFaq();
    initContactForm();
    initCookiePopup();
    
    // Lucide Icons
    if (typeof lucide !== 'undefined') lucide.createIcons();
});

/* --- ГЛОБАЛЬНАЯ НАВИГАЦИЯ И МОБИЛЬНОЕ МЕНЮ --- */
function initNavigation() {
    const header = document.querySelector('.header');
    const burger = document.querySelector('[data-burger]');
    const nav = document.querySelector('[data-nav]');

    window.addEventListener('scroll', () => {
        header.classList.toggle('header--scrolled', window.scrollY > 50);
    });

    if (burger && nav) {
        burger.addEventListener('click', () => {
            nav.classList.toggle('nav--active');
            burger.classList.toggle('burger--active');
            document.body.classList.toggle('no-scroll');
        });

        nav.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                nav.classList.remove('nav--active');
                burger.classList.remove('burger--active');
                document.body.classList.remove('no-scroll');
            });
        });
    }
}

/* --- THREE.JS HERO BACKGROUND --- */
function initHeroThreeJS() {
    const container = document.getElementById('hero-canvas');
    if (!container || typeof THREE === 'undefined') return;

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, container.offsetWidth / container.offsetHeight, 0.1, 2000);
    const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });

    renderer.setSize(container.offsetWidth, container.offsetHeight);
    container.appendChild(renderer.domElement);

    const geometry = new THREE.BufferGeometry();
    const vertices = [];
    for (let i = 0; i < 1500; i++) {
        vertices.push((Math.random() - 0.5) * 1500, (Math.random() - 0.5) * 1500, (Math.random() - 0.5) * 1500);
    }
    geometry.setAttribute('position', new THREE.Float32BufferAttribute(vertices, 3));
    const material = new THREE.PointsMaterial({ color: 0x5D5FEF, size: 2.5, transparent: true, opacity: 0.6 });
    const points = new THREE.Points(geometry, material);
    scene.add(points);

    camera.position.z = 700;
    let mouseX = 0, mouseY = 0;
    document.addEventListener('mousemove', (e) => {
        mouseX = (e.clientX - window.innerWidth / 2) / 100;
        mouseY = (e.clientY - window.innerHeight / 2) / 100;
    });

    function animate() {
        requestAnimationFrame(animate);
        points.rotation.y += 0.001;
        camera.position.x += (mouseX - camera.position.x) * 0.05;
        camera.position.y += (-mouseY - camera.position.y) * 0.05;
        camera.lookAt(scene.position);
        renderer.render(scene, camera);
    }
    animate();

    window.addEventListener('resize', () => {
        camera.aspect = container.offsetWidth / container.offsetHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(container.offsetWidth, container.offsetHeight);
    });
}

/* --- МЕНТОРЫ: ИНТЕРАКТИВНЫЙ СПИСОК --- */
function initMentors() {
    const items = document.querySelectorAll('.mentor-item');
    const imgs = document.querySelectorAll('.mentor-img');
    const quote = document.getElementById('mentor-quote-text');
    const quotes = { "1": "«Технологии, которые работают на вас — это стратегия.»", "2": "«Воплотите мечты в реальность через AI.»", "3": "«Постройте карьеру в ЕС осознанно.»" };

    items.forEach(item => {
        item.addEventListener('mouseenter', () => {
            const id = item.dataset.mentor;
            items.forEach(i => i.classList.remove('active'));
            item.classList.add('active');
            imgs.forEach(img => img.classList.toggle('active', img.dataset.mentorImg === id));
            if (quote) quote.innerText = quotes[id];
        });
    });
}

/* --- FAQ: АККОРДЕОН --- */
function initFaq() {
    document.querySelectorAll('.faq__header').forEach(header => {
        header.addEventListener('click', () => {
            const item = header.parentElement;
            const wasActive = item.classList.contains('active');
            document.querySelectorAll('.faq__item').forEach(i => i.classList.remove('active'));
            if (!wasActive) item.classList.add('active');
        });
    });
}

/* --- ФОРМА: ВАЛИДАЦИЯ И КАПЧА --- */
function initContactForm() {
    const form = document.getElementById('career-form');
    if (!form) return;

    const phone = document.getElementById('phone');
    const captchaLabel = document.getElementById('captcha-question');
    const success = document.getElementById('form-success');
    
    let n1 = Math.floor(Math.random() * 10), n2 = Math.floor(Math.random() * 10);
    if (captchaLabel) captchaLabel.innerText = `${n1} + ${n2}`;

    phone.addEventListener('input', (e) => e.target.value = e.target.value.replace(/[^0-9+]/g, ''));

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        if (parseInt(document.getElementById('captcha').value) !== (n1 + n2)) return alert('Ошибка капчи!');
        
        success.classList.add('active');
        form.reset();
    });

    document.getElementById('close-success')?.addEventListener('click', () => success.classList.remove('active'));
}

/* --- COOKIE POPUP LOGIC --- */
function initCookiePopup() {
    const popup = document.getElementById('cookie-popup');
    const acceptBtn = document.getElementById('cookie-accept');

    if (!localStorage.getItem('cookie-accepted')) {
        setTimeout(() => popup.classList.add('active'), 2000);
    }

    acceptBtn?.addEventListener('click', () => {
        localStorage.setItem('cookie-accepted', 'true');
        popup.classList.remove('active');
    });
}