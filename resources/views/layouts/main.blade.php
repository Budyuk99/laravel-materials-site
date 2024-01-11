<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link type="image/x-icon" href="img/favicon.png" rel="shortcut icon">
    <link type="Image/x-icon" href="img/favicon.png" rel="icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">

    @yield('title')
</head>

<body>
    <!-- Modal window desktop -->
    <section class="modal-window">
        <div class="modal-window-block">
            <div class="modal-window-item">
                <h2 class="modal-header">Есть вопросы?</h2>
                <span class="close-modal">X</span>
            </div>
            <div>
                Оставьте заявку, наш менеджер свяжется с
                Вами в ближайшее время ответит на все интересующие
                вопросы и поможем даже в самых сложных случаях!
            </div>
            <div class="modal-callback-form-input-block">
                <div class="callback-form-input-item"><input type="text" placeholder="Имя"></div>
                <div class="callback-form-input-item"><label for="name">Номер телефона</label><input type="text" id="name"></div>
            </div>

            <div class="callback-form-input-submit"><input type="submit" value="Отправить"></div>
            <div class="callback-form-text modal-callback-form-text">
                <div class="callback-form-text-1"><img src="img/shield.svg" alt="shield"></div>
                <span>
                    Обращаясь к нам вы получаете не только профессиональную работу,
                    но и абсолютную конфиденциальность информации!
                </span>
            </div>
        </div>
    </section>

    <!-- Modal window mobile -->
    <section class="modal-window-mobile">
        <div class="modal-window-block">
            <div class="modal-window-item">
                <h2 class="modal-header">Есть вопросы?</h2>
                <span class="close-modal-mobile">X</span>
            </div>
            <div class="modal-window-mobile-text">
                Оставьте заявку, наш менеджер свяжется с
                Вами в ближайшее время ответит на все интересующие
                вопросы и поможем даже в самых сложных случаях!
            </div>
            <div class="modal-callback-form-input-block">
                <div class="callback-form-input-item"><input type="text" placeholder="Имя"></div>
                <div class="callback-form-input-item"><label for="name">Номер телефона</label><input type="text" id="name"></div>
            </div>

            <div class="callback-form-input-submit"><input type="submit" value="Отправить"></div>
            <div class="callback-form-text modal-callback-form-text">
                <div class="callback-form-text-1"><img src="img/shield.svg" alt="shield"></div>
                <span>
                    Обращаясь к нам вы получаете не только профессиональную работу,
                    но и абсолютную конфиденциальность информации!
                </span>
            </div>
        </div>
    </section>

    <header style="position: absolute; top: 0;">
        <div class="header">
            <div class="header-part-1"><a href="/"><img src="img/logo.svg" alt="Alliance Production"></a></div>
            <div class="container header-container">
                <div class="header-part-2">
                    <ul class="main-menu">
                        <li><a href="/about-company">О компании</a></li>
                        <li><a href="/contracts">Контрактное производство</a></li>
                        <li><a href="/trade-marks">Собственные торговые марки</a></li>
                        <li><a href="/news">Новости</a></li>
                        <li><a href="/contacts">Контакты</a></li>
                    </ul>
                </div>
                <div class="header-part-3">
                    <div><a href="tel:+375292829932" class="mobile-phone"><img src="img/phone.svg" alt="">+375 (29) 282-99-32</a></div>
                </div>
            </div>
            <div class="header-part-4">
                <p class="callback open-modal">Получить консультацию</p>
            </div>
        </div>

        <div class="mobile-menu-block">
            <div class="mobile-menu-item-3 open-modal-mobile"><img src="img/phone-white.svg" alt="phone-white"></div>
            <div class="mobile-menu-item-2"><a href="/"><img src="img/logo.svg" alt="Alliance Production"></a></div>
            <div class="mobile-menu-item-1">
                <div class="mobile-menu-block-2">
                    <div class="mobile-menu-part mobile-menu-part-first"></div>
                    <div class="mobile-menu-part mobile-menu-part-middle"></div>
                    <div class="mobile-menu-part mobile-menu-part-third"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile menu -->
    <div class="mobile-menu-hidden">
        <div class="mobile-menu-block-header">
            <div class="mobile-menu-item-3-header"></div>
            <div class="mobile-menu-item-2-header"><a href="/"></a></div>
            <div class="mobile-menu-item-1-header">
                <div class="close"></div>
            </div>
        </div>
        <div class="mobile-menu-hidden-body">
            <ul class="main-ul">
                <li><a href="#">О компании</a></li>
                <li><a href="#">Контрактное производство</a>
                    <ul class="pod-ul">
                        <li><a href="#">Автомобильная химия</a>
                        <li><a href="#">Бытовая химия</a>
                        <li><a href="#">Дезинфицирующие средства</a>
                        <li><a href="#">Пищевые аэрозоли</a>
                        <li><a href="#">Косметическая продукция</a>
                        <li><a href="#">Краски аэрозольные</a>
                    </ul>
                </li>
                <li><a href="#">Собственные торговые марки</a>
                    <ul class="pod-ul">
                        <li><a href="#">Автохимия AG-Tech</a>
                        <li><a href="#">Автохимия AP</a>
                    </ul>
                </li>
                <li><a href="#">Новости</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </div>
        <div class="mobile-menu-hidden-footer">
            <div class="footer-item-1 footer-item-phone footer-item-phone-mobile"><a href="#">+7 (499) 686-10-14</a></div>
            <div class="footer-item-1 footer-item-address-mobile" style="margin-top: 20px;">
                <span><img src="img/mark.svg" alt="mark"></span>
                <span>г. Мосвка, Холодильный пер. 4к1с8</span>
            </div>
            <div class="footer-item-1 footer-item-mail-mobile">
                <span><img src="img/mail.svg" alt="mail"></span>
                <a href="#">a.dragunov@tdaliance.ru</a>
            </div>
            <div class="footer-item-1 footer-item-social-mobile" style="margin-top: 20px;">
                <a href="#"><img src="img/vk.svg" alt="vk"></a>
                <a href="#"><img src="img/instagram.svg" alt="instagram"></a>
            </div>
        </div>
    </div>

    @yield('banner_section')

    @yield('content')

    @yield('footer')

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="swiper.js"></script>
    <script src="script.js"></script>
</body>

</html>