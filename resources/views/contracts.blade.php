@extends('layouts/main')

@section('title')
    <title>Контрактное производство</title>
@endsection

@section('content')
    <section>
        <main>
            <div class="container content-part">
                <div class="part-of-border-main">
                    <div class="part-of-border"></div>
                    <h2 class="header-text">Контрактное производство</h2>
                </div>
            </div>
        </main>
    </section>
@endsection

@section('footer')
    <footer>
        <div class="full-width-container-footer-1">
            <div class="container content-part content-part-footer">
                <div class="footer-block-1">
                    <div class="footer-item-1 footer-item-logo"><a href="/"><img src="img/bottom-logo.svg" alt="bottom-logo"></a></div>
                    <div class="footer-item-1 footer-item-phone"><a href="#">+7 (499) 686-10-14</a></div>
                    <div class="footer-item-1 footer-item-address">
                        <span><img src="img/mark.svg" alt=""></span>
                        <span>г. Мосвка, Холодильный пер. 4к1с8</span>
                    </div>
                    <div class="footer-item-1 footer-item-mail">
                        <span><img src="img/mail.svg" alt=""></span>
                        <a href="#">a.dragunov@tdaliance.ru</a>
                    </div>
                    <div class="footer-item-1 footer-item-social">
                        <a href="#"><img src="img/vk.svg" alt="vk"></a>
                        <a href="#"><img src="img/instagram.svg" alt="instagram"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="full-width-container-footer-2" style="border-bottom: solid 1px #EBEBF0;">
            <div class="container container-footer">
                <div class="container-footer-block container-footer-block-1">
                    <p>Контрактное производство</p>
                    <ul class="container-footer-item-1">
                        <li><a href="#">Автомобильная химия</a></li>
                        <li><a href="#">Бытовая химия</a></li>
                        <li><a href="#">Дезинфицирующие средства</a></li>
                        <li><a href="#">Пищевые аэрозоли</a></li>
                        <li><a href="#">Косметическая продукция</a></li>
                        <li><a href="#">Краски аэрозольные</a></li>
                    </ul>
                </div>
                <div class="container-footer-block container-footer-block-2">
                    <p>Собственные марки</p>
                    <ul>
                        <li><a href="#">Автохимия AG-Tech</a></li>
                        <li><a href="#">Автохимия AP</a></li>
                    </ul>
                </div>
                <div class="container-footer-block container-footer-block-3">
                    <p>О компании</p>
                    <ul>
                        <li><a href="#">Новости</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="full-width-container-footer-2 last-full-width-container-footer-2">
            <div class="container container-footer-2">
                <div class="last-footer-item-1">© 2022 «Aliance Production». Все права защищены.</div>
                <div class="last-footer-item-2"><a href="#">Политики конфиденциальности</a></div>
                <div class="last-footer-item-3"><span>Сделано в</span><img src="img/ruso.svg" alt="ruso"></div>
            </div>
        </div>
    </footer>
@endsection