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
                <span class="section-subtitle">Защита и прозрачность</span>
                <h1>Политика обработки персональных данных</h1>

                <p>
                    Настоящая политика обработки персональных данных (далее —
                    «Политика») определяет порядок и условия обработки персональных
                    данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                    устанавливает меры по обеспечению безопасности этих данных в соответствии с требованиями <strong>GDPR</strong>.
                </p>
            </div>

            <div class="pages__content" data-aos="fade-up" data-aos-delay="100">
                <h2>1. Общие положения</h2>
                <p>
                    1.1. Важнейшей целью и условием осуществления своей деятельности
                    Оператор считает соблюдение прав и свобод человека и гражданина при
                    обработке его персональных данных, в том числе защиты прав на
                    неприкосновенность частной жизни, личную и семейную тайну.
                </p>
                <p>
                    1.2. Настоящая Политика применяется ко всей информации, которую
                    Оператор может получить о посетителях (далее — «Пользователи»)
                    веб-сайта <strong><?= $fullDomain ?></strong>.
                </p>

                <h2>2. Основные понятия, используемые в Политике</h2>
                <ul class="pages__list">
                    <li>
                        <strong>Веб-сайт</strong> — совокупность графических и
                        информационных материалов, доступных в сети интернет по сетевому адресу
                        <strong><?= $fullDomain ?></strong>.
                    </li>
                    <li><strong>Пользователь</strong> — любой посетитель веб-сайта.</li>
                    <li>
                        <strong>Персональные данные</strong> — любая информация,
                        относящаяся прямо или косвенно к определенному Пользователю веб-сайта.
                    </li>
                    <li>
                        <strong>Согласие</strong> — добровольное, информированное и
                        сознательное выражение воли Пользователя на обработку его данных.
                    </li>
                </ul>

                <h2>3. Данные, которые мы обрабатываем</h2>
                <p>Оператор может обрабатывать следующие категории данных:</p>
                <ul class="pages__list">
                    <li>
                        <strong>Персональные данные, предоставляемые Пользователем:</strong>
                        <ul>
                            <li>Имя и фамилия;</li>
                            <li>Адрес электронной почты (Email);</li>
                            <li>Номера телефонов (валидация по стандартам <strong>Италии и ЕС</strong>).</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Данные, собираемые автоматически:</strong>
                        <ul>
                            <li>
                                Обезличенные данные о посетителях (файлы «cookie»), IP-адрес, тип браузера и аналитика взаимодействия с контентом блога.
                            </li>
                        </ul>
                    </li>
                </ul>

                <h2>4. Цели обработки персональных данных</h2>
                <ul class="pages__list">
                    <li>
                        Идентификация Пользователя для предоставления доступа к сервисам
                        консалтинговой платформы <strong><?= $domainTitle ?></strong>.
                    </li>
                    <li>
                        Установление обратной связи для ответов на запросы по карьерному росту и релокации.
                    </li>
                    <li>
                        Заключение и исполнение договоров на экспертные услуги в Европе.
                    </li>
                    <li>
                        Улучшение качества работы сайта и адаптация контента под интересы аудитории.
                    </li>
                </ul>

                <h2>5. Правовые основания обработки</h2>
                <p>
                    Оператор обрабатывает персональные данные Пользователя только при наличии добровольного согласия, выраженного путем заполнения форм на сайте или настройки параметров браузера (для cookie).
                </p>

                <h2>6. Безопасность данных</h2>
                <p>
                    Оператор принимает необходимые технические и организационные меры для
                    защиты данных от неправомерного доступа в соответствии с нормами <strong>GDPR</strong>.
                    Ваши данные никогда не будут переданы третьим лицам без вашего согласия, за исключением случаев, предусмотренных законом.
                </p>

                <div class="pages__contact-box">
                    <h2>Контактная информация</h2>
                    <p>
                        По любым вопросам, касающимся отзыва согласия или доступа к вашим данным на <strong><?= $domainTitle ?></strong>, обращайтесь к нам:
                    </p>
                    <ul class="pages__contact-info">
                        <li><strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></li>
                        <li><strong>Телефон:</strong> <a href="tel:+390697637817">+39 06 9763 7817</a></li>
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