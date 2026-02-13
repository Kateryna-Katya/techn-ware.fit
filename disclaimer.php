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
                <span class="section-subtitle">Юридическая информация</span>
                <h1>Отказ от ответственности</h1>
                
                <p>
                    <strong>Общая информация:</strong> Все материалы, статьи и сведения,
                    опубликованные на сайте <strong><?= $domainTitle ?></strong>, носят исключительно
                    информационно-ознакомительный характер. Они не являются и не должны
                    рассматриваться как персональная инвестиционная рекомендация,
                    профессиональный юридический или финансовый совет, публичная оферта или призыв к совершению
                    каких-либо финансовых операций.
                </p>
            </div>

            <div class="pages__content" data-aos="fade-up" data-aos-delay="100">
                <p>
                    <strong>Отсутствие гарантий:</strong> Команда <strong><?= $domainTitle ?></strong> не дает никаких гарантий
                    относительно точности, полноты или актуальности представленной в блоге
                    информации. Любые упоминания потенциального карьерного роста, программ пассивного дохода или прошлых
                    результатов наших клиентов не гарантируют аналогичных результатов в будущем. 
                    Индивидуальные итоги вашей деятельности зависят от множества факторов, включая рыночные условия в <strong>Италии и ЕС</strong>, и могут существенно
                    отличаться от приведенных примеров.
                </p>

                <p>
                    <strong>Ограничение ответственности:</strong> Администрация сайта <strong><?= $fullDomain ?></strong>,
                    его владельцы и аффилированные лица не несут ответственности за
                    любые прямые или косвенные убытки, решения или действия,
                    предпринятые вами на основе информации с этого ресурса. Вся
                    ответственность за использование предложенных методологий и возможные последствия
                    лежит исключительно на пользователе. Контент платформы <strong><?= $domainTitle ?></strong> собирается из
                    источников, которые считаются надежными и общедоступными на момент публикации.
                </p>

                <p>
                    <strong>Предупреждение о рисках:</strong> Любая деятельность, направленная на
                    изменение финансового статуса или инвестиции в новые проекты, сопряжена с
                    определенным уровнем риска. Перед принятием
                    любыих важных стратегических решений мы настоятельно рекомендуем провести
                    собственное исследование и проконсультироваться с квалифицированным
                    независимым специалистом в соответствующей области.
                </p>

                <p>
                    <strong>Подтверждение пользователя:</strong> Продолжая использовать
                    сайт <strong><?= $domainTitle ?></strong>, вы подтверждаете, что вам исполнилось 18 лет, вы
                    действуете по собственной воле, полностью осознаете и принимаете все
                    упомянутые риски и условия данного отказа от ответственности.
                </p>

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