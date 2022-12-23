<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MagicStone</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/swiper-bundle/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/swiper-slider.css">
    <link rel="stylesheet" href="css/product-card.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .elected-active {
            border-color: #EEC84A;
        }

        .elected-active>.favorites-icon path {
            fill: #EEC84A
        }

        .basket-active {
            background-color: #DCDCE4;
            color: #44392E;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <?php
        include('blocks/header.php');
        ?>
        <main class="main">
            <section class="productPage">
                <div class="container">
                    <div class="productCard-BiG">
                        <div class="productCard-slider">
                            <div class="slider__flex">
                                <div class="slider__col">
                                    <div class="slider__prev">Назад</div> <!-- Кнопка для переключения на предыдущий слайд -->
                                    <div class="slider__thumbs">
                                        <div class="swiper-container">
                                            <!-- Слайдер с превью -->
                                            <div class="swiper-wrapper swiper-wrapper-1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slider__next">Ещё 3</div> <!-- Кнопка для переключения на следующий слайд -->

                                </div>

                                <div class="slider__images">
                                    <div class="swiper-container">
                                        <!-- Слайдер с изображениями -->
                                        <div class="swiper-wrapper swiper-wrapper-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="productCard-info__wrapper">
                            <?php
                            $breadcrumbs = '
                                        <li class="breadcrumbs-list-item">
                                            <a href="catalog.php" class="breadcrumbs-list-item-link">Каталог</a>
                                        </li>
                                        <li class="breadcrumbs-list-item">
                                            <a href="" class="breadcrumbs-list-item-link breadcrumbs-list-item-link-2"></a>
                                        </li>
                                        <li class="breadcrumbs-list-item">
                                            <a href="#" class="breadcrumbs-list-item-link breadcrumbs-list-item-link-3"></a>
                                        </li>
                                    ';
                            include('blocks/breadcrumbs.php');
                            ?>
                            <div class="productCard-info">
                                <div class="productCard-info__header">
                                    <h2 class="productCard-title"></h2>
                                    <p class="productCard-subtitle"></p>
                                    <div class="product-row-item__price-old"></div>
                                    <div class="productCard-price"></div>
                                </div>
                                <div class="productCard-info__actions">
                                    <div class="productCard__add-basket">
                                        <div class="productCard__product-count">
                                            <button id="productCard__btn-plus" class="productCard__btn-plus" type="button">+</button>
                                            <input id="product-count" type="number" class="productCard__input-count" min="1" max="16" value="1">
                                            <button id="productCard__btn-minus" class="productCard__btn-minus" type="button">-</button>
                                        </div>
                                        <button type="button" id="modal-add-to-cart" class="productCard__btn-basket" data-add="0">Добавить в корзину</button>
                                    </div>
                                    <button type="button" class="productCard__btn-favorites productCard__btn-favorites-desc">
                                        <svg id="favorites-small" class="favorites-icon icon" width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 1.16648C7.16179 -0.571966 3.86274 -0.367261 1.75081 1.78059C-0.583604 4.15472 -0.583603 8.00393 1.75081 10.3781L7.38658 16.1097C8.55379 17.2968 10.4462 17.2968 11.6134 16.1097L17.2492 10.3781C19.5836 8.00393 19.5836 4.15472 17.2492 1.78059C15.1373 -0.367261 11.8382 -0.571966 9.5 1.16648ZM8.79553 3.2135C7.23925 1.63075 4.71603 1.63075 3.15975 3.2135C1.60348 4.79625 1.60348 7.3624 3.15975 8.94515L8.79553 14.6768C9.1846 15.0725 9.8154 15.0725 10.2045 14.6768L15.8402 8.94515C17.3965 7.3624 17.3965 4.79625 15.8402 3.2135C14.284 1.63075 11.7607 1.63075 10.2045 3.2135C9.8154 3.60919 9.1846 3.60919 8.79553 3.2135Z" fill="#44392E" />
                                        </svg>
                                        <span class="productCard__btn-favorites-text">
                                            В избранное
                                        </span>
                                    </button>
                                </div>
                                <div class="productCard-info__spec">
                                    <div class="productCard-info__spec-title">
                                        Характеристики
                                    </div>
                                    <div class="productCard-info__spec-el">
                                        <p class="spec-el-text spec-el-text__value-manufacturer-container"><span class="spec-el-text__name">Производитель:</span><span class="spec-el-text__value spec-el-text__value-manufacturer"></span></p>
                                        <p class="spec-el-text spec-el-text__value-color-container"><span class="spec-el-text__name">Цвет:</span><span class="spec-el-text__value spec-el-text__value-color"></span></p>
                                        <p class="spec-el-text spec-el-text__value-country-container"><span class="spec-el-text__name">Страна-производитель:</span><span class="spec-el-text__value spec-el-text__value-country"></span></p>
                                        <p class="spec-el-text spec-el-text__value-series-container"><span class="spec-el-text__name">Серия:</span><span class="spec-el-text__value spec-el-text__value-series"></span></p>
                                        <p class="spec-el-text spec-el-text__value-size-container"><span class="spec-el-text__name">Размер:</span><span class="spec-el-text__value spec-el-text__value-size"></span></p>
                                        <p class="spec-el-text spec-el-text__value-thickness-container"><span class="spec-el-text__name">Толщина:</span><span class="spec-el-text__value spec-el-text__value-thickness"></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-similar">
                        <h2 class="section-title productPage-title">Похожие товары</h2>
                        <div class="productPage-subSectionContainer">
                        </div>
                    </div>
                    <div class="product-reviewed">
                        <h2 class="section-title productPage-title">Ранее просмотренные товары</h2>
                        <div class="productPage-subSectionContainer previously_viewed_products">
                        </div>
                    </div>
                </div>
                <div id="popup-added-to-cart" class="popup-added-to-cart">
                    <div class="popup-added-to-cart__wrapper">
                        <div class="popup-added-to-cart-title">Товар добавлен в корзину</div>
                        <div class="popup-added-to-cart__btn-wrapper">
                            <div id="close-popup-added-to-cart" class="popup-added-to-cart__btn-link popup-added-to-cart__btn-border">Продолжить покупки</div>
                            <a href="cart.php" class="popup-added-to-cart__btn-link popup-added-to-cart__btn-background">Перейти в корзину</a>
                        </div>
                    </div>
                </div>
                <div class="overlay"></div>
            </section>
        </main>
        <?php
        include('blocks/footer.php');
        ?>
    </div>
    <script>
        // const modalLink = document.querySelector('#modal-add-to-cart');
        const popupAddtoCart = document.querySelector('#popup-added-to-cart');
        const ClosePopupAddtoCart = document.querySelector('#close-popup-added-to-cart');
        const overlay = document.querySelector('.overlay');

        overlay.addEventListener('click', e => {
            overlay.classList.remove('active');
            popupAddtoCart.classList.remove('active');
        });
        ClosePopupAddtoCart.addEventListener('click', e => {
            overlay.classList.remove('active');
            popupAddtoCart.classList.remove('active');
        });


        // Общее
        let id = window
            .location
            .search
            .replace('?', '')
            .split('&')
            .reduce(
                function(p, e) {
                    var a = e.split('=');
                    p[decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
                    return p;
                }, {}
            )['id'];

        function ajaxGet(url, parameters, callback) {
            parameters = encodeURIComponent(parameters)
            if (parameters === false || parameters === null || parameters === undefined) {
                parameters = "";
            }
            var request = new XMLHttpRequest();
            request.open('GET', url, true);
            request.addEventListener('readystatechange', function() {
                if ((request.readyState == 4) && (request.status == 200)) {
                    callback(request.responseText)
                } else {
                    if (request.readyState == 0) {
                        // showError(1, "Request not initialized")
                        alert("Request not initialized")
                    }
                    if (request.status == 403) {
                        // showError(2, "Forbidden")
                        alert("Forbidden")
                    }
                    if (request.status == 404) {
                        // showError(3, "Not Found")
                        alert("Not Found")
                    }

                }
            });
            request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
            request.send(parameters);
        }

        (function() {
            /**
             * Корректировка округления десятичных дробей.
             *
             * @param {String}  type  Тип корректировки.
             * @param {Number}  value Число.
             * @param {Integer} exp   Показатель степени (десятичный логарифм основания корректировки).
             * @returns {Number} Скорректированное значение.
             */
            function decimalAdjust(type, value, exp) {
                // Если степень не определена, либо равна нулю...
                if (typeof exp === 'undefined' || +exp === 0) {
                    return Math[type](value);
                }
                value = +value;
                exp = +exp;
                // Если значение не является числом, либо степень не является целым числом...
                if (isNaN(value) || !(typeof exp === 'number' && exp % 1 === 0)) {
                    return NaN;
                }
                // Сдвиг разрядов
                value = value.toString().split('e');
                value = Math[type](+(value[0] + 'e' + (value[1] ? (+value[1] - exp) : -exp)));
                // Обратный сдвиг
                value = value.toString().split('e');
                return +(value[0] + 'e' + (value[1] ? (+value[1] + exp) : exp));
            }

            // Десятичное округление к ближайшему
            if (!Math.round10) {
                Math.round10 = function(value, exp) {
                    return decimalAdjust('round', value, exp);
                };
            }
            // Десятичное округление вниз
            if (!Math.floor10) {
                Math.floor10 = function(value, exp) {
                    return decimalAdjust('floor', value, exp);
                };
            }
            // Десятичное округление вверх
            if (!Math.ceil10) {
                Math.ceil10 = function(value, exp) {
                    return decimalAdjust('ceil', value, exp);
                };
            }
        })();

        // Вывод данных о товаре
        ajaxGet(`https://magmatika.ru/api/public/products/${id}`, "", (answer) => {
            answer = JSON.parse(answer)

            document.querySelector(".productCard-title").innerHTML = answer['name'] // name
            document.querySelector(".breadcrumbs-list-item-link-3").innerHTML = answer['name']
            if (answer.discount == 0) {
                document.querySelector(".productCard-price").innerHTML = answer['pricePerSquareMeter'] + " руб./м²"
            } else {
                document.querySelector(".product-row-item__price-old").innerHTML = answer['pricePerSquareMeter'] + " руб./м²"
                document.querySelector(".productCard-price").innerHTML = Math.round10((answer['pricePerSquareMeter'] * ((100 - +answer.discount) / 100)), -2) + " руб./м²"

            }
            // pricePerSquareMeter
            document.querySelector(".productCard-subtitle").innerHTML = answer.subCategory.category['name'] // category
            document.querySelector(".breadcrumbs-list-item-link-2").innerHTML = answer.subCategory.category['name']
            document.querySelector(".breadcrumbs-list-item-link-2").setAttribute("href", `catalog.php?categoryLink=${answer.subCategory.category['link']}`)


            let productCardInfoSpecEl = ""

            if (answer['manufacturer'])
                productCardInfoSpecEl += `<p class="spec-el-text">
            <span class="spec-el-text__name">Производитель:</span>
            <span class="spec-el-text__value">${answer['manufacturer']}</span></p>`

            if (answer['color'])
                productCardInfoSpecEl += `<p class="spec-el-text">
            <span class="spec-el-text__name">Цвет:</span>
            <span class="spec-el-text__value">${answer['color']}</span></p>`

            if (answer['country'])
                productCardInfoSpecEl += `<p class="spec-el-text">
            <span class="spec-el-text__name">Страна-производитель:</span>
            <span class="spec-el-text__value">${answer['country']}</span></p>`

            if (answer['series'])
                productCardInfoSpecEl += `<p class="spec-el-text">
            <span class="spec-el-text__name">Серия:</span>
            <span class="spec-el-text__value">${answer['series']}</span></p>`

            if (answer['size'])
                productCardInfoSpecEl += `<p class="spec-el-text">
            <span class="spec-el-text__name">Размер:</span>
            <span class="spec-el-text__value">${answer['size']}</span></p>`

            if (answer['thickness'])
                productCardInfoSpecEl += `<p class="spec-el-text">
            <span class="spec-el-text__name">Толщина:</span>
            <span class="spec-el-text__value">${answer['thickness']}</span></p>`

            if (answer['additionalInfo'])
                productCardInfoSpecEl += `<p class="spec-el-text">
            <span class="spec-el-text__name">Дополнительная информация:</span>
            <span class="spec-el-text__value">${answer['additionalInfo']}</span></p>`

            document.querySelector(".productCard-info__spec-el").innerHTML = productCardInfoSpecEl

            document.querySelector(".productCard__btn-basket").setAttribute("data-id", id)

            document.querySelector(".productCard__btn-favorites").setAttribute("data-id", id)
            document.querySelector(".productCard__btn-favorites").setAttribute("data-name", answer['name'])
            document.querySelector(".productCard__btn-favorites").setAttribute("data-category", answer.subCategory.category['name'])
            document.querySelector(".productCard__btn-favorites").setAttribute("data-price", answer['pricePerSquareMeter'] + " руб./м²")
            document.querySelector(".productCard__btn-favorites").setAttribute("data-discount", answer['discount'])

            try {
                src = answer.attachments[0].url
            } catch (error) {
                src = "https://smartlanding.biz/wp-content/uploads/2015/03/kartinki-zaglushki.png"
            }
            document.querySelector(".productCard__btn-favorites").setAttribute("data-img", src)

            let imageSlide = ""
            answer.attachments.forEach(elem => {
                imageSlide += `<div class="swiper-slide"><div class="slider__image"><img src="${elem.url}" alt="" /></div></div>`
            });

            if (imageSlide == "") imageSlide = `<div class="swiper-slide"><div class="slider__image"><img src="https://smartlanding.biz/wp-content/uploads/2015/03/kartinki-zaglushki.png" alt="" /></div></div>`

            document.querySelector(".swiper-wrapper-1").innerHTML = imageSlide
            document.querySelector(".swiper-wrapper-2").innerHTML = imageSlide

            if (checkElected(id)) {
                document.querySelector(".productCard__btn-favorites").setAttribute("data-active", "1")
                document.querySelector(".productCard__btn-favorites").classList.add("elected-active")
            } else {
                document.querySelector(".productCard__btn-favorites").setAttribute("data-active", "0")
            }

            let basketCheck = checkBasket(id)

            if (basketCheck.check) {
                document.querySelector(".productCard__btn-basket").setAttribute("data-add", "1")
                document.querySelector(".productCard__btn-basket").classList.add("basket-active")
                document.querySelector(".productCard__btn-basket").innerHTML = "В корзине"
                document.querySelector(".productCard__input-count").value = basketCheck.count
            } else {
                document.querySelector(".productCard__btn-basket").setAttribute("data-add", "0")
            }

            document.querySelectorAll(".productCard__btn-plus").forEach((elem) => {
                elem.addEventListener("click", (e) => {
                    const count = e.target.closest(".productCard__product-count").querySelector(".productCard__input-count").value
                    if (+count == 16) return
                    e.target.closest(".productCard__product-count").querySelector(".productCard__input-count").value = +count + 1
                    // updateInputCount(e.target.closest(".productCard__product-count").querySelector(".productCard__input-count"))
                })
            })

            document.querySelectorAll(".productCard__btn-minus").forEach((elem) => {
                elem.addEventListener("click", (e) => {
                    const count = e.target.closest(".productCard__product-count").querySelector(".productCard__input-count").value
                    if (+count == 1) return
                    e.target.closest(".productCard__product-count").querySelector(".productCard__input-count").value = +count - 1
                    // updateInputCount(e.target.closest(".productCard__product-count").querySelector(".productCard__input-count"))
                })
            })

            showHistory()

            try {
                src = answer.attachments[0].url
            } catch (error) {
                src = "https://smartlanding.biz/wp-content/uploads/2015/03/kartinki-zaglushki.png"
            }
            addInHistory(id, answer['name'], answer['pricePerSquareMeter'] + " руб./м²", src, answer['discount'])

            showSimilarProducts(answer['color'], id)

            // Инициализация превью слайдера
            const sliderThumbs = new Swiper('.slider__thumbs .swiper-container', { // ищем слайдер превью по селектору
                // задаем параметры
                direction: 'vertical', // вертикальная прокрутка
                slidesPerView: 3, // показывать по 3 превью
                spaceBetween: 32, // расстояние между слайдами
                navigation: { // задаем кнопки навигации
                    nextEl: '.slider__next', // кнопка Next
                    prevEl: '.slider__prev' // кнопка Prev
                },
                freeMode: true, // при перетаскивании превью ведет себя как при скролле
                breakpoints: { // условия для разных размеров окна браузера
                    0: { // при 0px и выше
                        direction: 'horizontal', // горизонтальная прокрутка
                    },
                    768: { // при 768px и выше
                        direction: 'vertical', // вертикальная прокрутка
                    }
                }
            });
            // Инициализация слайдера изображений
            const sliderImages = new Swiper('.slider__images .swiper-container', { // ищем слайдер превью по селектору
                // задаем параметры
                direction: 'vertical', // вертикальная прокрутка
                slidesPerView: 1, // показывать по 1 изображению
                spaceBetween: 32, // расстояние между слайдами
                mousewheel: true, // можно прокручивать изображения колёсиком мыши
                navigation: { // задаем кнопки навигации
                    nextEl: '.slider__next', // кнопка Next
                    prevEl: '.slider__prev' // кнопка Prev
                },
                grabCursor: true, // менять иконку курсора
                thumbs: { // указываем на превью слайдер
                    swiper: sliderThumbs // указываем имя превью слайдера
                },
                breakpoints: { // условия для разных размеров окна браузера
                    0: { // при 0px и выше
                        direction: 'horizontal', // горизонтальная прокрутка
                    },
                    768: { // при 768px и выше
                        direction: 'vertical', // вертикальная прокрутка
                    }
                }
            });

        })

        function checkElected(id) {
            let content = (JSON.parse(localStorage.getItem("elected")) || {
                content: []
            }).content
            let check = 0
            content.forEach(obj => {
                if (obj.id == id) check = 1
            });
            return check ? true : false
        }

        function checkBasket(id) {
            let content = (JSON.parse(localStorage.getItem("basket")) || {
                content: []
            }).content
            let check = 0
            let count = 16
            content.forEach(obj => {
                if (obj.id == id) {
                    check = 1
                    count = obj.count
                }
            });
            return check ? {
                count: count,
                check: true
            } : {
                check: false
            }
        }

        // Кнопка добавить в избранное
        document.querySelector(".productCard__btn-favorites").addEventListener("click", (e) => {
            let btn = e.target.closest(".productCard__btn-favorites")

            let id = btn.getAttribute("data-id")
            let elected = btn.getAttribute("data-active")
            let storage = JSON.parse(localStorage.getItem("elected")) || {
                content: []
            };

            if (elected == "0") {
                btn.classList.add("elected-active");
                btn.setAttribute("data-active", "1");

                storage.content.push({
                    "id": btn.getAttribute("data-id"),
                    "name": btn.getAttribute("data-name"),
                    "category": btn.getAttribute("data-category"),
                    "price": btn.getAttribute("data-price"),
                    "img": btn.getAttribute("data-img"),
                    "discount": btn.getAttribute("data-discount")
                });
                counterFavoritesIncr()
            } else {
                btn.classList.remove("elected-active");
                btn.setAttribute("data-active", "0");
                storage.content = storage.content.reduce((acc, obj) => {
                    if (obj.id != id) acc.push(obj);
                    return acc;
                }, []);
                counterFavoritesDicr()
            }
            localStorage.setItem("elected", JSON.stringify(storage));
        })

        function counterFavoritesIncr() {
            document.querySelector(".header-favorites__count").innerHTML = +document.querySelector(".header-favorites__count").innerHTML + 1
        }

        function counterFavoritesDicr() {
            document.querySelector(".header-favorites__count").innerHTML = +document.querySelector(".header-favorites__count").innerHTML - 1
        }

        // Кнопка добавить в корзину
        document.querySelector(".productCard__btn-basket").addEventListener("click", (e) => {
            let btn = e.target
            let id = btn.getAttribute("data-id")
            let check = btn.getAttribute("data-add")
            let count = document.querySelector(".productCard__input-count").value
            let storage = JSON.parse(localStorage.getItem("basket")) || {
                content: []
            };

            if (check == "0") {
                btn.classList.add("basket-active")
                btn.setAttribute("data-add", "1");
                storage.content.push({
                    id: id,
                    count: count
                })
                overlay.classList.add('active');
                popupAddtoCart.classList.add('active');
                counterBasketIncr()
                document.querySelector(".productCard__btn-basket").innerHTML = "В корзине"
            } else {
                btn.classList.remove("basket-active")
                btn.setAttribute("data-add", "0");
                storage.content = storage.content.reduce((acc, obj) => {
                    if (obj.id != id) acc.push(obj);
                    return acc;
                }, []);
                counterBasketDicr()
                document.querySelector(".productCard__btn-basket").innerHTML = "Добавить в корзину"
            }

            localStorage.setItem("basket", JSON.stringify(storage));
        })

        function counterBasketIncr() {
            document.querySelector(".header-cart-mini__count").innerHTML = +document.querySelector(".header-cart-mini__count").innerHTML + 1
        }

        function counterBasketDicr() {
            document.querySelector(".header-cart-mini__count").innerHTML = +document.querySelector(".header-cart-mini__count").innerHTML - 1
        }

        // Добавление товара в историю просмотров
        function addInHistory(id, name, price, img, discount) {
            let storage = JSON.parse(localStorage.getItem("history")) || {
                content: []
            };

            storage.content = storage.content
                .reduce((acc, obj) => {
                    if (obj.id != id) acc.push(obj)
                    return acc;
                }, []).slice(0, 4)

            storage.content.unshift({
                id: id,
                name: name,
                price: price,
                img: img,
                discount: discount
            })

            localStorage.setItem("history", JSON.stringify(storage))
        }

        // Отображение истории
        function showHistory() {
            let storage = JSON.parse(localStorage.getItem("history")) || {
                content: []
            };

            let content = ""

            if (storage.content.length == 0) {
                document.querySelector(".product-reviewed").innerHTML = ""
                return
            }

            let length

            if (storage.content.length >= 4) {
                length = 3
            } else {
                length = storage.content.length - 1
            }

            for (let i = 0; i <= length; i++) {
                const elem = storage.content[i];
                if (elem.discount == 0) {
                    content += `
                    <a href="cerrad-loft-brick-cardamon.php?id=${elem.id}" class="productCard-link-product">
                        <div class="productCard-Small">
                            <img src="${elem.img}" alt="${elem.name}" class="productCard-Small__img">
                            <div class="productCard-Small__info">
                                <h3 class="productCard-Small__info-name">${elem.name}</h3>
                                <div class="productCard-Small__info-price">${elem.price}</div>
                            </div>
                        </div>
                    </a>`
                } else {
                    content += `
                        <a href="cerrad-loft-brick-cardamon.php?id=${elem.id}" class="productCard-link-product">
                            <div class="productCard-Small">
                                <div class="product-row-item__discount">СКИДКА ${elem.discount}%</div>
                                <img src="${elem.img}" alt="${elem.name}" class="productCard-Small__img">
                                <div class="productCard-Small__info">
                                    <h3 class="productCard-Small__info-name">${elem.name}</h3>
                                    <div class="product-row-item__price-old">${elem.price}</div>
                                    <div class="productCard-Small__info-price">${Math.round10((parseInt(elem.price) * ((100 - +elem.discount) / 100)), -2) + " руб./м²"}</div>
                                </div>
                            </div>
                        </a>`
                }

            }

            document.querySelector(".previously_viewed_products").innerHTML = content
        }

        function showSimilarProducts(color, idNow) {
            ajaxGet(`https://magmatika.ru/api/public/products?color=${color}&pageSize=6`, "", answer => {
                answer = JSON.parse(answer)
                let content = ""
                let count = 0
                answer.content.forEach(elem => {
                    count++
                    if (elem.id == id) return

                    if (count >= 6) return

                    try {
                        src = elem.attachments[0].url
                    } catch (error) {
                        src = "https://smartlanding.biz/wp-content/uploads/2015/03/kartinki-zaglushki.png"
                    }


                    if (elem.discount == 0) {
                        content += `
                            <a href="cerrad-loft-brick-cardamon.php?id=${elem.id}" class="productCard-link-product">
                                <div class="productCard-Small">
                                    <img src="${src}" alt="${elem.name}" class="productCard-Small__img">
                                    <div class="productCard-Small__info">
                                        <h3 class="productCard-Small__info-name">${elem.name}</h3>
                                        <div class="productCard-Small__info-price">${elem.pricePerSquareMeter} руб./м²</div>
                                    </div>
                                </div>
                            </a>`
                    } else {
                        content += `
                            <a href="cerrad-loft-brick-cardamon.php?id=${elem.id}" class="productCard-link-product">
                                <div class="productCard-Small">
                                <div class="product-row-item__discount">СКИДКА ${elem.discount}%</div>
                                    <img src="${src}" alt="${elem.name}" class="productCard-Small__img">
                                    <div class="productCard-Small__info">
                                        <h3 class="productCard-Small__info-name">${elem.name}</h3>
                                        <div class="product-row-item__price-old">${elem.pricePerSquareMeter} руб./м²</div>
                                    <div class="productCard-Small__info-price">${Math.round10((elem.pricePerSquareMeter * ((100 - +elem.discount) / 100)), -2) + " руб./м²"}</div>
                                    </div>
                                </div>
                            </a>`
                    }



                })
                if (content) {
                    document.querySelector(".productPage-subSectionContainer").innerHTML = content
                } else {
                    document.querySelector(".product-similar").innerHTML = ""
                }
            })
        }
    </script>
    <script src="libs/swiper-bundle/swiper-bundle.min.js"></script>
    <!-- <script src="js/productCard-slider.js"></script> -->
</body>

</html>