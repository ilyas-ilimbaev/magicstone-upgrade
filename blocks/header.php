<?php



if ($toggle_open == NULL || $toggle_open == null) {
    $toggle_open = "";
}

?>

<div class="header">
    <div class="header-wrapper">
        <div class="header-top-container">
            <div class="header-top">
                <div class="header-logo">
                    <a href="index.php" class="logo-link" style="display: inline-block;">
                        <img src="img/logo.png" alt="Производственная компания MagicStone" class="logo">
                    </a>
                </div>
                <nav class="header-nav">
                    <ul class="nav-list">
                        <li class="nav-list-item">
                            <a href="index.php" class="list-item-link">Главная</a>
                        </li>
                        <li class="nav-list-item">
                            <a href="catalog.php" class="list-item-link">Каталог</a>
                        </li>
                        <li class="nav-list-item">
                            <a href="" class="list-item-link">Доставка</a>
                        </li>
                        <li class="nav-list-item">
                            <a href="" class="list-item-link">О нас</a>
                        </li>
                        <li class="nav-list-item">
                            <a href="" class="list-item-link">контакты</a>
                        </li>
                    </ul>
                </nav>
                <div class="header-search">
                    <form action="#" class="form-search">
                        <input class="form-search__input form-search__input-1" type="text" placeholder="Поиск">
                        <button class="form-search__btn" type="submit">

                        </button>
                    </form>
                    <div class="header-search__search-list">
                    </div>
                </div>
                <div class="header-right">
                    <span class="header-search-open" style="display: none">
                        <svg class="icon">
                            <use xlink:href="img/icons/sprite.svg#search-mob"></use>
                        </svg>
                    </span>
                    <a href="tel:+7 (495) 722-88-00" class="header-phone-link">+7 (495) 722-88-00</a>
                    <div class="header-actions">
                        <a href="favorites.php" class="header-favorites">
                            <div class="header-favorites__container">
                                <div class="header-favorites__icons header-actions__icons">
                                    <svg class="icon" width="32" height="29" viewBox="0 0 32 29" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16 2.90356C12.062 0.0383019 6.50567 0.375693 2.94873 3.91573C-0.982911 7.82871 -0.982911 14.1729 2.94873 18.0859L12.4406 27.5326C14.4064 29.4891 17.5936 29.4891 19.5594 27.5326L29.0513 18.0859C32.9829 14.1729 32.9829 7.82871 29.0513 3.91573C25.4943 0.375693 19.938 0.0383019 16 2.90356ZM14.8135 6.27742C12.1924 3.66877 7.94279 3.66877 5.32169 6.27742C2.70059 8.88607 2.70059 13.1155 5.32169 15.7242L14.8135 25.1709C15.4688 25.8231 16.5312 25.8231 17.1865 25.1709L26.6783 15.7242C29.2994 13.1155 29.2994 8.88607 26.6783 6.27742C24.0572 3.66877 19.8076 3.66877 17.1865 6.27742C16.5312 6.92959 15.4688 6.92959 14.8135 6.27742Z" fill="#44392E" />
                                    </svg>
                                </div>
                                <span class="header-favorites__count product-count-added"></span>
                            </div>
                        </a>
                        <a href="cart.php" class="header-cart-mini">
                            <div class="header-cart-mini__container">
                                <div class="header-cart-mini__icons header-actions__icons">
                                    <svg class="icon" width="32" height="29" viewBox="0 0 32 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.63935C0 0.73396 0.716344 0 1.6 0H4.8C5.62752 0 6.31851 0.646534 6.39343 1.49093L6.6975 4.91804H30.4C30.8638 4.91804 31.3048 5.12427 31.6087 5.48328C31.9126 5.8423 32.0495 6.31877 31.9839 6.78922L30.749 15.6464C30.4294 17.9383 28.593 19.6915 26.3392 19.8564L9.64468 21.0782C7.03656 21.2691 4.75914 19.286 4.52241 16.6179L3.33886 3.27869H1.6C0.716344 3.27869 0 2.54473 0 1.63935ZM6.98841 8.19673L7.70927 16.3211C7.78818 17.2104 8.54732 17.8715 9.41669 17.8079L26.1112 16.5861C26.8625 16.5311 27.4746 15.9467 27.5811 15.1827L28.5552 8.19673H6.98841Z" fill="#44392E" />
                                        <path d="M13.3333 26.3636C13.3333 27.8197 12.1394 29 10.6667 29C9.19391 29 8 27.8197 8 26.3636C8 24.9076 9.19391 23.7273 10.6667 23.7273C12.1394 23.7273 13.3333 24.9076 13.3333 26.3636Z" fill="#44392E" />
                                        <path d="M28.0001 26.3636C28.0001 27.8197 26.8062 29 25.3334 29C23.8607 29 22.6667 27.8197 22.6667 26.3636C22.6667 24.9076 23.8607 23.7273 25.3334 23.7273C26.8062 23.7273 28.0001 24.9076 28.0001 26.3636Z" fill="#44392E" />
                                    </svg>
                                </div>
                                <span class="header-cart-mini__count product-count-added"></span>
                            </div>
                        </a>
                    </div>
                    <div class="toggle-menu">
                        <span></span>
                    </div>
                    <?= $toggle_open ?>
                </div>
            </div>
        </div>
        <div class="header-mobile-menu">
            <div class="header-top">
                <div class="header-logo">
                    <a href="" class="logo-link" style="display: inline-block;">
                        <img src="img/logo.png" alt="Производственная компания MagicStone" class="logo">
                    </a>
                </div>
            </div>
            <div class="header-search header-search-mob">
                <div class="header-search-wrapper">
                    <div class="form-search-wrapper">
                        <form action="#" class="form-search form-search-mob">
                            <input class="form-search__input form-search__input-2" type="text" placeholder="Поиск">
                            <button class="form-search__btn" type="submit">

                            </button>
                        </form>
                    </div>
                    <div class="header-search__search-list header-search__search-list-mob">

                    </div>
                </div>
            </div>
            <nav class="header-nav header-nav-mobile">
                <div class="nav-list nav-list-mobile">
                    <a href="index.php" class="list-item-link list-item-link-mobile">Главная
                        <span class="header-nav-link-arrow">
                            <svg class="icon">
                                <use xlink:href="img/icons/sprite.svg#arrow-top"></use>
                            </svg>
                        </span>
                    </a>
                    <a href="catalog.php" class="list-item-link list-item-link-mobile">Каталог
                        <span class="header-nav-link-arrow">
                            <svg class="icon">
                                <use xlink:href="img/icons/sprite.svg#arrow-top"></use>
                            </svg>
                        </span>
                    </a>
                    <a href="" class="list-item-link list-item-link-mobile">Доставка
                        <span class="header-nav-link-arrow">
                            <svg class="icon">
                                <use xlink:href="img/icons/sprite.svg#arrow-top"></use>
                            </svg>
                        </span>
                    </a>
                    <a href="" class="list-item-link list-item-link-mobile">О нас
                        <span class="header-nav-link-arrow">
                            <svg class="icon">
                                <use xlink:href="img/icons/sprite.svg#arrow-top"></use>
                            </svg>
                        </span>
                    </a>
                    <a href="" class="list-item-link list-item-link-mobile">Контакты
                        <span class="header-nav-link-arrow">
                            <svg class="icon">
                                <use xlink:href="img/icons/sprite.svg#arrow-top"></use>
                            </svg>
                        </span>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</div>
<script>
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

    let electedCount = JSON.parse(localStorage.getItem("elected")) || {
        content: []
    }

    let basketCount = JSON.parse(localStorage.getItem("basket")) || {
        content: []
    }

    document.querySelector(".header-favorites__count").innerHTML = electedCount.content.length
    document.querySelector(".header-cart-mini__count").innerHTML = basketCount.content.length;

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

    let globalSearchId = 0

    document.querySelector(".form-search__input-1").addEventListener("input", (e) => {
        globalSearchId++
        let searchId = globalSearchId

        if (e.target.value == "") {
            document.querySelector(".header-search__search-list").innerHTML = ""
            return
        }

        ajaxGet(`https://magmatika.ru/api/public/products?query=${e.target.value}&page=0&pageSize=4`, "", (answer) => {
            if (globalSearchId != searchId) return
            let links = ""
            JSON.parse(answer).content.forEach(elem => {
                try {
                    src = elem.attachments[0].url
                } catch (error) {
                    src = "https://smartlanding.biz/wp-content/uploads/2015/03/kartinki-zaglushki.png"
                }
                if (elem.discount == 0) {
                    links += `<a href="cerrad-loft-brick-cardamon.php?id=${elem.id}" class="search-list-item-link">
                                    <div class="search-list-item">
                                        <img src="${src}" alt="${elem.name}" class="search-list-item__img">
                                        <div class="search-list-item__parameter">
                                            <span class="parameter-title">${elem.name}</span>
                                            <span class="parameter-desc">${elem.subCategory.category.name}</span>
                                            <div class="parameter-price__wrapper">
                                                <span class="parameter-price">${elem.pricePerSquareMeter} руб./м²</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>`
                } else {
                    links += `<a href="cerrad-loft-brick-cardamon.php?id=${elem.id}" class="search-list-item-link">
                                    <div class="search-list-item">
                                        <img src="${src}" alt="${elem.name}" class="search-list-item__img">
                                        <div class="search-list-item__parameter">
                                            <span class="parameter-title">${elem.name}</span>
                                            <span class="parameter-desc">${elem.subCategory.category.name}</span>
                                            <div class="parameter-price__wrapper">
                                                <span class="parameter-price--old">${elem.pricePerSquareMeter} руб./м²</span>
                                                <span class="parameter-price parameter-price--new">${Math.round10((elem.pricePerSquareMeter * ((100 - +elem.discount)/100)), -2)} руб./м²</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>`
                }
            });
            document.querySelector(".header-search__search-list").innerHTML = links

        })
    })

    document.querySelector(".form-search__input-2").addEventListener("input", (e) => {
        globalSearchId++
        let searchId = globalSearchId

        if (e.target.value == "") {
            document.querySelector(".header-search__search-list-mob").innerHTML = ""
            return
        }

        ajaxGet(`https://magmatika.ru/api/public/products?query=${e.target.value}&page=0&pageSize=4`, "", (answer) => {
            if (globalSearchId != searchId) return
            let links = ""
            JSON.parse(answer).content.forEach(elem => {
                try {
                    src = elem.attachments[0].url
                } catch (error) {
                    src = "https://smartlanding.biz/wp-content/uploads/2015/03/kartinki-zaglushki.png"
                }
                if (elem.discount == 0) {
                    links += `<a href="cerrad-loft-brick-cardamon.php?id=${elem.id}" class="search-list-item-link">
                                    <div class="search-list-item">
                                        <img src="${src}" alt="${elem.name}" class="search-list-item__img">
                                        <div class="search-list-item__parameter">
                                            <span class="parameter-title">${elem.name}</span>
                                            <span class="parameter-desc">${elem.subCategory.category.name}</span>
                                            <div class="parameter-price__wrapper">
                                                <span class="parameter-price">${elem.pricePerSquareMeter} руб./м²</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>`
                } else {
                    links += `<a href="cerrad-loft-brick-cardamon.php?id=${elem.id}" class="search-list-item-link">
                                    <div class="search-list-item">
                                        <img src="${src}" alt="${elem.name}" class="search-list-item__img">
                                        <div class="search-list-item__parameter">
                                            <span class="parameter-title">${elem.name}</span>
                                            <span class="parameter-desc">${elem.subCategory.category.name}</span>
                                            <div class="parameter-price__wrapper">
                                                <span class="parameter-price--old">${elem.pricePerSquareMeter} руб./м²</span>
                                                <span class="parameter-price parameter-price--new">${Math.round10((elem.pricePerSquareMeter * ((100 - +elem.discount)/100)), -2)} руб./м²</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>`
                }


            });
            document.querySelector(".header-search__search-list-mob").innerHTML = links

        })
    })
</script>