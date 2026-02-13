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
                <span class="section-subtitle">Юридический стандарт ЕС</span>
                <h1>Политика конфиденциальности</h1>

                <p>
                    Настоящая Политика конфиденциальности распространяется на персональные данные,
                    предоставляемые клиентами <strong><?= $domainTitle ?></strong>, как для оказания услуг по карьерному консалтингу, 
                    так и для других взаимодействий в электронном формате. Мы обеспечиваем техническую поддержку и информационное 
                    сопровождение в рамках экспертных программ и инновационных инициатив.
                </p>

                <p>
                    <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения и дополнения
                    в действующие положения Политики. Эти изменения имеют приоритет над текущими пунктами. 
                    Предоставляя свои данные, вы даете полное согласие на их обработку способами, предусмотренными настоящей Политикой.
                </p>
            </div>

            <div class="pages__content" data-aos="fade-up" data-aos-delay="100">
                
                <h2>Порядок сбора, хранения и уничтожения данных</h2>
                <p>
                    <strong><?= $domainTitle ?></strong> собирает персональные данные только с согласия
                    пользователя и исключительно для предоставления качественных услуг: доступа к платформе,
                    участия в стратегических сессиях, получения аналитических отчетов и внедрения инноваций. Для
                    предотвращения утечки данных мы используем современные протоколы шифрования и комплекс мер информационной безопасности.
                </p>
                <p>
                    Максимальный срок хранения персональных данных составляет 75 лет с даты получения информации. 
                    В остальных случаях компания хранит данные до завершения своей деятельности или до момента официального отзыва согласия пользователем. 
                    Уничтожение или обезличивание данных осуществляется по достижении цели сбора или по запросу клиента.
                </p>

                <h2>Техническая информация</h2>
                <p>При посещении ресурса <strong><?= $fullDomain ?></strong> автоматически собираются следующие данные:</p>
                <ul class="pages__list">
                    <li>Время доступа и IP-адрес устройства;</li>
                    <li>Источники перехода на интернет-ресурс;</li>
                    <li>Посещаемые страницы и просмотры информационных блоков;</li>
                    <li>Иная техническая информация, предоставляемая браузером;</li>
                    <li>Номер телефона (в случае звонка по контактам, указанным на сайте).</li>
                </ul>

                <h2>Персонализация и аутентификация</h2>
                <p>При заполнении форм обратной связи мы собираем информацию, необходимую для персонализации услуг:</p>
                <ul class="pages__list">
                    <li>Имя пользователя для идентификации;</li>
                    <li>E-mail и номер телефона для оперативной связи и экспертной поддержки.</li>
                </ul>

                <h2>Информация о действиях пользователя</h2>
                <ul class="pages__list">
                    <li>Сведения о соглашениях и контрактах между клиентом и <strong><?= $domainTitle ?></strong>;</li>
                    <li>Данные о запросах, отправленных через формы на сайте;</li>
                    <li>Сведения о полученных консультациях и пройденных программах карьерного апгрейда;</li>
                    <li>Произведенные платежи и иная финансовая информация, предусмотренная законодательством Италии и ЕС.</li>
                </ul>

                <h2>Передача данных третьим лицам</h2>
                <p>
                    <strong><?= $domainTitle ?></strong> не предоставляет данные клиентов третьим лицам, за исключением случаев:
                </p>
                <ul class="pages__list">
                    <li>Получения прямого согласия пользователя;</li>
                    <li>Требования компетентных органов <strong>Италии</strong> в соответствии с законодательством;</li>
                    <li>Случаев стратегического слияния или поглощения компании.</li>
                </ul>

                <h2>Использование Cookies</h2>
                <p>
                    Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона <strong>Италия</strong>), 
                    чтобы сделать использование <strong><?= $fullDomain ?></strong> максимально эффективным. Вы можете в любое время 
                    отключить Cookies в настройках своего браузера.
                </p>

                <div class="pages__contact-box">
                    <h2>Права пользователя</h2>
                    <p>
                        Если вы хотите отредактировать свои данные или полностью прекратить их обработку в соответствии с нормами <strong>GDPR</strong>, 
                        пожалуйста, свяжитесь с командой <strong><?= $domainTitle ?></strong>:
                    </p>
                    <ul class="pages__contact-info">
                        <li><strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></li>
                        <li><strong>Адрес:</strong> Via della Conciliazione, 4, 00193 Roma RM, Italy</li>
                    </ul>
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