<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Карьерный апгрейд и инновации
    </title>
<link rel="icon" type="image/svg+xml"
    href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Cpath d='M4 24h6v4H4v-4zm8-8h6v12h-6V16zm8-8h6v20h-6V8zM22 2l6 6-6 6-6-6 6-6z' fill='%235D5FEF'/%3E%3C/svg%3E">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Syne:wght@600;700;800&display=swap"
        rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lenis@1.0.0/dist/lenis.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>

            <nav class="nav" data-nav>
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#strategies" class="nav__link">Стратегии</a></li>
                    <li><a href="./#cases" class="nav__link">Кейсы</a></li>
                    <li><a href="./#mentors" class="nav__link">Менторы</a></li>
                    <li><a href="./#faq" class="nav__link">Вопросы</a></li>
                </ul>
            </nav>

            <div class="header__actions">
                <a href="./#contact" class="btn btn--header">Связаться</a>
                <button class="burger" aria-label="Menu" data-burger>
                    <span></span>
                </button>
            </div>
        </div>
    </header>
<main>
    <section class="pages">
        <div class="container">
            <div class="pages__header" data-aos="fade-up">
                <span class="section-subtitle">Юридическое соглашение</span>
                <h1>Условия использования</h1>

                <p>
                    Добро пожаловать на платформу <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                    (далее — «Условия») представляют собой юридически обязывающий договор между вами (далее — «Пользователь») 
                    и <strong><?= $domainTitle ?></strong> (далее — «Компания»). 
                    Используя наш сайт и любые связанные с ним услуги, вы подтверждаете свое полное согласие с данными Условиями. 
                    Если вы не согласны, вы должны немедленно прекратить использование ресурса.
                </p>
            </div>

            <div class="pages__content" data-aos="fade-up" data-aos-delay="100">
                <h2>1. Предмет Соглашения</h2>
                <p>
                    Компания предоставляет Пользователю доступ к использованию сайта <strong><?= $fullDomain ?></strong>, 
                    включая доступ к инновационным материалам, статьям в блоге, экспертным консультациям и инструментам профессионального развития. 
                    Настоящее Соглашение регулирует все аспекты взаимодействия Пользователя с цифровой инфраструктурой платформы.
                </p>

                <h2>2. Обязанности и права Пользователя</h2>
                <p>
                    Вы обязуетесь использовать сайт исключительно в законных целях. При использовании платформы 
                    <strong><?= $domainTitle ?></strong> запрещается:
                </p>
                <ul class="pages__list">
                    <li>Распространять информацию, которая является незаконной, вредоносной или нарушает авторские права.</li>
                    <li>Предпринимать действия, направленные на нарушение безопасности сайта или перегрузку его систем.</li>
                    <li>Использовать автоматизированные скрипты (боты) для сбора информации без предварительного разрешения.</li>
                    <li>Предоставлять недостоверную информацию при регистрации на консультации или участии в программах.</li>
                </ul>

                <h2>3. Интеллектуальная собственность</h2>
                <p>
                    Весь контент, размещенный на сайте <strong><?= $fullDomain ?></strong> (тексты, графика, логотипы, программный код), 
                    является объектом интеллектуальной собственности Компании. Вам предоставляется ограниченная лицензия на использование 
                    материалов в личных целях для профессионального развития. Копирование или распространение Контента без письменного 
                    разрешения строго запрещено.
                </p>

                <h2>4. Ограничение ответственности</h2>
                <p>
                    Услуги предоставляются по принципу «как есть». Мы не гарантируем бесперебойную работу сайта в условиях динамически 
                    меняющегося рынка в <strong>Италии и странах ЕС</strong>. Компания не несет ответственности за прямые или косвенные 
                    убытки, возникшие в результате использования материалов платформы <strong><?= $domainTitle ?></strong>.
                </p>

                <h2>5. Изменения условий</h2>
                <p>
                    Мы оставляем за собой право изменять настоящие Условия. Изменения вступают в силу с момента их публикации на 
                    странице <strong><?= $fullDomain ?></strong>. Ваше дальнейшее использование сайта означает согласие с новой редакцией Условий.
                </p>

                <h2>6. Разрешение споров</h2>
                <p>
                    Все разногласия стороны стремятся разрешить путем переговоров. В случае недостижения согласия, 
                    спор подлежит рассмотрению в соответствии с действующим законодательством по месту деятельности Компании в <strong>Италии</strong>.
                </p>

                <div class="pages__contact-box">
                    <h2>Служба поддержки</h2>
                    <p>Если у вас возникли вопросы по данным Условиям, пожалуйста, свяжитесь с нами:</p>
                    <ul class="pages__contact-info">
                        <li><strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></li>
                        <li><strong>Телефон:</strong> <a href="tel:+390697637817">+39 06 9763 7817</a></li>
                        <li><strong>Адрес:</strong> Via della Conciliazione, 4, 00193 Roma RM, Italy</li>
                    </ul>
                </div>

                <div class="pages-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.05);">
                    <p style="font-size: 0.9rem; opacity: 0.5;">Последнее обновление: Февраль 2026</p>
                </div>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col footer__col--info">
                <a href="./#hero" class="logo footer__logo">
                    <span class="logo__dot"></span>
                    <span class="logo__text">
                        <?= $domainTitle ?>
                    </span>
                </a>
                <p class="footer__description">
                    Платформа года для тех, кто выбирает осознанный рост. Технологии, которые работают на вас в любой
                    точке Европы.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__list">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#strategies">Стратегии</a></li>
                    <li><a href="./#cases">Кейсы</a></li>
                    <li><a href="./#contact">Контакты</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Юридическая информация</h4>
                <ul class="footer__list">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__list footer__list--contacts">
                    <li><a href="tel:+390697637817">+39 06 9763 7817</a></li>
                    <li><a href="mailto:hello@<?= $fullDomain ?>">hello@
                            <?= $fullDomain ?>
                        </a></li>
                    <li><span class="footer__address">Via della Conciliazione, 4, 00193 Roma RM, Italy</span></li>
                </ul>
            </div>
        </div>

        <div class="container footer__bottom">
            <p>©
                <?= date('Y') ?>
                <?= $domainTitle ?>. Все права защищены. Предложение активно только в странах ЕС.
            </p>
        </div>
    </footer>
<div class="cookie-popup" id="cookie-popup">
    <div class="cookie-popup__content">
        <div class="cookie-popup__icon">
            <i data-lucide="cookie"></i>
        </div>
        <div class="cookie-popup__text">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                    политике</a>.</p>
        </div>
        <div class="cookie-popup__actions">
            <button class="btn btn--primary btn--sm" id="cookie-accept">Принять</button>
        </div>
    </div>
</div>
<script src="https://unpkg.com/lenis@1.1.13/dist/lenis.min.js"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://unpkg.com/lucide@latest"></script>

<script src="script.js"></script>
</body>

</html>