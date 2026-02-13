/**
 * PROJECT: techn-ware.fit
 * DESCRIPTION: Career Upgrade Blog - Core Script
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // 1. Инициализация Lenis (Smooth Scroll)
    const lenis = new Lenis({
        duration: 1.2,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    });

    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // 2. Инициализация AOS (Animations)
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100,
        disable: 'mobile' // по желанию можно отключить на мобилках для FPS
    });

    // 3. Three.js - Hero Interactive Canvas
    initHeroVisual();

    // 4. Header & Navigation Logic
    initNavigation();

    // 5. Lucide Icons
    lucide.createIcons();
});

/**
 * Three.js Particle Cloud
 */
function initHeroVisual() {
    const container = document.getElementById('hero-canvas');
    if (!container) return;

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, container.offsetWidth / container.offsetHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });

    renderer.setSize(container.offsetWidth, container.offsetHeight);
    renderer.setPixelRatio(window.devicePixelRatio);
    container.appendChild(renderer.domElement);

    // Создаем частицы
    const particlesCount = 1500;
    const posArray = new Float32Array(particlesCount * 3);

    for (let i = 0; i < particlesCount * 3; i++) {
        posArray[i] = (Math.random() - 0.5) * 1500;
    }

    const geometry = new THREE.BufferGeometry();
    geometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));

    const material = new THREE.PointsMaterial({
        size: 2.5,
        color: 0x5D5FEF, // Наш акцентный цвет
        transparent: true,
        opacity: 0.6,
        blending: THREE.AdditiveBlending
    });

    const particlesMesh = new THREE.Points(geometry, material);
    scene.add(particlesMesh);

    camera.position.z = 600;

    // Интерактив с мышью
    let mouseX = 0;
    let mouseY = 0;

    document.addEventListener('mousemove', (event) => {
        mouseX = event.clientX - window.innerWidth / 2;
        mouseY = event.clientY - window.innerHeight / 2;
    });

    function animate() {
        requestAnimationFrame(animate);

        particlesMesh.rotation.y += 0.001;
        particlesMesh.rotation.x += 0.0005;

        // Плавное следование за мышью
        particlesMesh.rotation.y += mouseX * 0.00002;
        particlesMesh.rotation.x += mouseY * 0.00002;

        renderer.render(scene, camera);
    }

    // Ресайз
    window.addEventListener('resize', () => {
        camera.aspect = container.offsetWidth / container.offsetHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(container.offsetWidth, container.offsetHeight);
    });

    animate();
}

/**
 * Menu & Scroll effects
 */
function initNavigation() {
    const header = document.querySelector('.header');
    const burger = document.querySelector('[data-burger]');
    const nav = document.querySelector('[data-nav]');

    // Scroll effect
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('header--scrolled');
        } else {
            header.classList.remove('header--scrolled');
        }
    });

    // Burger menu
    if (burger && nav) {
        burger.addEventListener('click', () => {
            nav.classList.toggle('nav--active');
            burger.classList.toggle('burger--active');
            document.body.classList.toggle('no-scroll');
        });

        // Close on link click
        nav.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                nav.classList.remove('nav--active');
                burger.classList.remove('burger--active');
                document.body.classList.remove('no-scroll');
            });
        });
    }
}