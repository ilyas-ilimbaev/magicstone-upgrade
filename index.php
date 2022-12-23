<?
$title = 'MagicStone';
$link = '
        <link rel="stylesheet" href="css/swiper-bundle/swiper-bundle.min.css" />
    ';
include('blocks/head.php');
?>
<div class="wrapper">
    <header class="header-container">
        <div class="header-wrapper">
            <?php
            include('blocks/header.php');
            ?>
            <div class="header-center swiper">
                <div class="header-slide__desc">
                    <div class="header-slide__title">
                        Дизайн
                        Простота
                        Надежность
                    </div>
                    <a href="catalog.php" class="header-slide__btn">СМОТРЕТЬ КАТАЛОГ</a>
                </div>
                <div class="swiper-wrapper header-wrapper__slide">
                    <div class="header-slide swiper-slide"></div>
                    <div class="header-slide swiper-slide"></div>
                    <div class="header-slide swiper-slide"></div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </header>
    <main class="main">
        <section class="promo-products">
            <div class="container">
                <div class="promo-products__wrapper">
                    <div class="promo-products-item">
                        <div class="promo-products__img-container">
                            <img src="img/fasadnaya-plitka.jpg" alt="Фасадная плитка" class="promo-products-item__img">
                        </div>
                        <div class="promo-products-item__desc">
                            <h3 class="promo-products-item__title">Фасадная плитка</h3>
                            <p class="promo-products-item__text">
                                На нашем сайте представлена фасадная плитка для воплощния любых ваших идей
                            </p>
                        </div>
                    </div>
                    <div class="promo-products-item">
                        <div class="promo-products__img-container">
                            <img src="img/bruschatka.jpg" alt="Брусчатка" class="promo-products-item__img">
                        </div>
                        <div class="promo-products-item__desc">
                            <h3 class="promo-products-item__title">Брусчатка</h3>
                            <p class="promo-products-item__text">
                                Огромный выбор брусчатки для облагораживания придомового пространства
                            </p>
                        </div>
                    </div>
                    <div class="promo-products-item">
                        <div class="promo-products__img-container">
                            <img src="img/stupeni.jpg" alt="Ступени" class="promo-products-item__img">
                        </div>
                        <div class="promo-products-item__desc">
                            <h3 class="promo-products-item__title">Ступени</h3>
                            <p class="promo-products-item__text">
                                Немецкая прочность наших ступеней поспособствует привлекательности вашего дома на вечно
                            </p>
                        </div>
                    </div>
                    <div class="promo-products-item">
                        <div class="promo-products__img-container">
                            <img src="img/stroitelnyye-smesi.jpg" alt="Строительные смеси" class="promo-products-item__img">
                        </div>
                        <div class="promo-products-item__desc">
                            <h3 class="promo-products-item__title">Строительные смеси</h3>
                            <p class="promo-products-item__text">
                                На сайте представлен большой выбор строительных смесей
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-objects">
            <div class="container">
                <div class="our-objects__wrapper">
                    <h2 class="section-title">Наши объекты</h2>
                    <div class="our-objects-content">
                        <div class="our-objects__card-list">
                            <div class="our-objects__card card-list">
                                <div class="our-objects__card-blur">
                                    <img src="img/private-house-village-Solnechnoye.jpg" alt='Частный дом в поселении "Солнечное"' class="our-objects__card-img our-objects__card-img__blur">
                                </div>
                                <div class="our-objects__card-img__container">
                                    <img src="img/private-house-village-Solnechnoye.jpg" alt='Частный дом в поселении "Солнечное"' class="our-objects__card-img">
                                </div>
                                <div class="our-objects__card-desc">
                                    <h3 class="card-desc-title">Частный дом в поселении "Солнечное"</h3>
                                    <p class="card-desc-text">
                                        Двухэтажный частный дом был спроектирован архитектурной мастерской «Асадов».
                                        Построен по Рижскому шосее в послелении "Солнечное".
                                        Для проекта была использована кирпич Paradyz - Semir.
                                    </p>
                                </div>
                            </div>
                            <div class="our-objects__card card-list">
                                <div class="our-objects__card-blur">
                                    <img src="img/restaurant-Tilda-Food-and-Bar.jpg" alt="Ресторан Tilda Food & Bar" class="our-objects__card-img our-objects__card-img__blur">
                                </div>
                                <div class="our-objects__card-img__container">
                                    <img src="img/restaurant-Tilda-Food-and-Bar.jpg" alt="Ресторан Tilda Food & Bar" class="our-objects__card-img">
                                </div>
                                <div class="our-objects__card-desc">
                                    <h3 class="card-desc-title">Ресторан Tilda Food & Bar</h3>
                                    <p class="card-desc-text">
                                        Ресторан Tilda Food & Bar на Тверской оформлен клинкерной плиткой Cerrad Loft brick и Stroeher Sonderbrand №46
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="our-objects__card-column">
                            <div class="our-objects__card card-column">
                                <div class="our-objects__card-blur">
                                    <img src="img/the-residential-complex-literator-Moscow-Khamovniki.jpg" alt='Жилой комплекс "Литератор" Москва, Хамовники' class="our-objects__card-img our-objects__card-img__blur">
                                </div>
                                <div class="our-objects__card-img__container card-column-img-container">
                                    <img src="img/the-residential-complex-literator-Moscow-Khamovniki.jpg" alt='Жилой комплекс "Литератор" Москва, Хамовники' class="our-objects__card-img">
                                </div>
                                <div class="our-objects__card-desc">
                                    <h3 class="card-desc-title">Жилой комплекс "Литератор" Москва, Хамовники.</h3>
                                    <p class="card-desc-text">
                                        Малоэтажный жилой комплекс «Литератор» был спроектирован архитектурной мастерской
                                        «Сергей Киселев и Партнеры» и удостоился главной награды московского фестиваля
                                        «Золотое сечение 2017» в номинации «Реализация».
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contacts">
            <div class="container">
                <div class="contacts-wrapper">
                    <div class="contacts-content">
                        <h2 class="section-title contacts-title">Наши контакты</h2>
                        <ul class="contacts-list">
                            <li class="contacts-list-item">
                                <a href="tel:+7 (495) 722-88-00" class="contacts-list-item-link">+7 (495) 722-88-00</a>
                            </li>
                            <li class="contacts-list-item">
                                <a href="tel:+7 (495) 116-58-38" class="contacts-list-item-link">+7 (495) 116-58-38</a>
                            </li>
                            <li class="contacts-list-item">
                                <a href="mailto:magmatika08@gmail.com" class="contacts-list-item-link">magmatika08@gmail.com</a>
                            </li>
                            <li class="contacts-list-item">
                                Москва, Нахимовский пр-т, 24, <br> ЦДИ "Экспострой", пав. 3, стенд 433
                            </li>
                        </ul>
                        <div class="contacts-social">
                            <svg class="icon icon-inst">
                                <use xlink:href="img/icons/sprite.svg#instagram"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="contacts-map">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A8a405f21384f9e76b42e403a4b29f68ba29117ddc9e98c72fe9da95035139a4e&amp;source=constructor" width="900" height="467" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
    include('blocks/footer.php');
    ?>
</div>
<script src="libs/swiper-bundle/swiper-bundle.min.js"></script>
<script src="js/users-settSlide.js"></script>
</body>

</html>