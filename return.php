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
                <span class="section-subtitle">Гарантия качества и прозрачность</span>
                <h1>Политика возврата средств</h1>
                
                <p>
                    Мы стремимся обеспечить максимальную ценность для каждого клиента <strong><?= $domainTitle ?></strong>. 
                    Если вы не удовлетворены качеством услуг или столкнулись с техническими трудностями, 
                    настоящая политика определяет порядок и условия возврата денежных средств.
                </p>
            </div>

            <div class="pages__content" data-aos="fade-up" data-aos-delay="100">
                <h2>Условия для оформления возврата</h2>
                <p>
                    Вы можете претендовать на полный или частичный возврат средств в следующих ситуациях:
                </p>
                <ul class="pages__list">
                    <li>
                        <strong>Несоответствие программы описанию:</strong> Если содержание консультации или экспертного материала существенно отличается от программы, заявленной на сайте <strong><?= $domainTitle ?></strong>.
                    </li>
                    <li>
                        <strong>Технические неисправности:</strong> При возникновении критических проблем на платформе <strong><?= $fullDomain ?></strong>, которые делают доступ к сессиям невозможным и не были устранены в течение 48 часов.
                    </li>
                    <li>
                        <strong>«Период охлаждения»:</strong> Если вы решили отказаться от участия в программе в течение 14 календарных дней с момента оплаты (при условии, что вы еще не получили доступ к основной части материалов).
                    </li>
                </ul>

                <h2>Процедура запроса</h2>
                <p>Чтобы инициировать процедуру возврата, пожалуйста, выполните следующие шаги:</p>
                <ul class="pages__list">
                    <li>Отправьте письмо на наш email: <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>.</li>
                    <li>В теме письма укажите: «Запрос на возврат средств: [Ваш ID или Email]».</li>
                    <li>Подробно опишите причину запроса со ссылкой на соответствующий пункт условий.</li>
                    <li>Наша служба поддержки в <strong>Риме</strong> рассмотрит заявку в течение 3-х рабочих дней.</li>
                </ul>

                <h2>Сроки и способ возврата</h2>
                <p>
                    После одобрения запроса средства возвращаются в течение 7–14 рабочих дней тем же способом, которым была совершена оплата. 
                    Обратите внимание, что фактический срок зачисления может зависеть от регламента вашего банка в <strong>Италии</strong> или стране вашего пребывания.
                </p>

                <h2>Исключения и ограничения</h2>
                <p>Возврат не осуществляется, если:</p>
                <ul class="pages__list">
                    <li>Запрос подан по истечении 14 дней с момента оплаты.</li>
                    <li>Вы уже изучили или скачали более 50% материалов программы.</li>
                    <li>Невозможность получения услуги вызвана проблемами на стороне пользователя (ПО, интернет-соединение).</li>
                    <li>Были нарушены Условия использования платформы <strong><?= $domainTitle ?></strong>.</li>
                </ul>

                <h2>Изменения в политике</h2>
                <p>
                    <strong><?= $domainTitle ?></strong> оставляет за собой право обновлять настоящую Политику. Актуальная версия всегда доступна в сети на <strong><?= $fullDomain ?></strong>.
                </p>

                <div class="pages__contact-box">
                    <h2>Служба поддержки</h2>
                    <p>По всем вопросам, связанным с возвратом или условиями консультаций, пожалуйста, обращайтесь:</p>
                    <ul class="pages__contact-info">
                        <li><strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></li>
                        <li><strong>Телефон:</strong> <a href="tel:+390697637817">+39 06 9763 7817</a></li>
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