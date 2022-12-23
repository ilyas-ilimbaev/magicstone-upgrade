<?
$title = 'Избранное';
$link = '
        <link rel="stylesheet" href="css/products.css" />
    ';
include('blocks/head.php');
?>
<div class="wrapper">
    <?php
    include('blocks/header.php');
    ?>
    <main class="main">
        <section class="products">
            <div class="container">
                <!-- <div class="products-header">
                        <h2 class="section-title">Избранное</h2>
                        <p class="section-subtitle">Добавляйте в избранное товар, чтобы позже к нему вернуться</p>
                    </div>
                    <div class="products-content">
                    </div> -->
            </div>
        </section>
        <!-- <section class="no-products">
                <div class="no-products-container">
                    <div class="no-products-content">
                        <img src="img/icons/big-favorite-icon.svg" alt="Нет товаров" class="no-products-img">
                        <div class="section-title no-products-text">Избранных товаров нет</div>
                        <a href="catalog.php" class="no-products-link">Каталог</a>
                    </div>
                </div>
            </section> -->
    </main>
    <?php
    include('blocks/footer.php');
    ?>
</div>
<style>
    .basket-active {
        background-color: #DCDCE4;
        color: #44392E;
    }
</style>

<script>
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

    // Отображение избранных товаров
    document.querySelector(".container").innerHTML = showElectedId() ?
        `<div class="products-header">
                <h2 class="section-title">Избранное</h2>
                <p class="section-subtitle">Добавляйте в избранное товар, чтобы позже к нему вернуться</p>
            </div>
            <div class="products-content">
            ${showElectedId()}
            </div>` :
        `<section class="no-products">
        <div class="no-products-container">
            <div class="no-products-content">
                <img src="img/icons/big-favorite-icon.svg" alt="Нет товаров" class="no-products-img">
                <div class="section-title no-products-text">Избранных товаров нет</div>
                <a href="catalog.php" class="no-products-link">Каталог</a>
            </div>
        </div>
    </section>`

    function showElectedId() {
        let content = "";
        (JSON.parse(localStorage.getItem("elected")) || {
            content: []
        }).content.forEach((item) => {
            basket = checkBasket(item.id)

            if (item.discount == 0) {
                content += `
                        <div class="productCard-row">
                            <div class="productCard-row__productCard-left">
                                <a href="cerrad-loft-brick-cardamon.php?id=${item.id}" class="productCard-row__product-link">
                                    <img src="${item.img}" alt="${item.name}" class="productCard-row__productCard-img">
                                    <div class="productCard-row__productCard-info">
                                        <h3 class="productCard-row__productCard-title">${item.name}</h3>
                                        <p class="productCard-row__productCard-text">${item.category}</p>
                                        <div class="productCard-row__productCard-price">${item.price}</div>
                                    </div>
                                </a>
                            </div>
                            <div class="productCard-button__wrapper" data-id=${item.id}>
                                <span class="productCard-close">
                                    <svg class="close-product">
                                        <use xlink:href="img/icons/sprite.svg#close-product"></use>
                                    </svg>
                                </span>
                                <button class="productCard-row__productCard-button ${basket.check ? "basket-active" : ""} productCard-row__productCard-button-pseudotext" type="submit" data-id=${item.id} data-add="${basket.check ? "1" : "0"}">
                                </button>
                            </div>
                        </div>`;
            } else {
                content += `
                        <div class="productCard-row">
                            <div class="productCard-row__productCard-left">
                                <a href="cerrad-loft-brick-cardamon.php?id=${item.id}" class="productCard-row__product-link">
                                    <img src="${item.img}" alt="${item.name}" class="productCard-row__productCard-img">
                                    <div class="productCard-row__productCard-info">
                                        <h3 class="productCard-row__productCard-title">${item.name}</h3>
                                        <p class="productCard-row__productCard-text">${item.category}</p>
                                        <div class="product-row-item__price-old">${item.price}</div>
                                        <div class="productCard-row__productCard-price">${Math.round10((parseInt(item.price) * ((100 - +item.discount) / 100)), -2) + " руб./м²"}</div>
                                    </div>
                                </a>
                            </div>
                            <div class="productCard-button__wrapper" data-id=${item.id}>
                                <span class="productCard-close">
                                    <svg class="close-product">
                                        <use xlink:href="img/icons/sprite.svg#close-product"></use>
                                    </svg>
                                </span>
                                <button class="productCard-row__productCard-button ${basket.check ? "basket-active" : ""} productCard-row__productCard-button-pseudotext" type="submit" data-id=${item.id} data-add="${basket.check ? "1" : "0"}">
                                </button>
                            </div>
                        </div>`;
            }
        });
        return content
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

    let elected = JSON.parse(localStorage.getItem("elected")) || {
        content: []
    }

    // Кнопка добавить в корзину
    document.querySelectorAll(".productCard-row__productCard-button").forEach((elem) => {
        elem.addEventListener("click", (e) => {
            let btn = e.target.closest(".productCard-row__productCard-button")
            let id = btn.getAttribute("data-id")
            let check = btn.getAttribute("data-add")
            let count = 16
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
                counterBasketIncr()
            } else {
                btn.classList.remove("basket-active")
                btn.setAttribute("data-add", "0");
                storage.content = storage.content.reduce((acc, obj) => {
                    if (obj.id != id) acc.push(obj);
                    return acc;
                }, []);
                counterBasketDicr()
            }

            localStorage.setItem("basket", JSON.stringify(storage));
        })
    })

    document.querySelectorAll(".productCard-close").forEach(elem => {

        elem.addEventListener("click", (e) => {
            let id = e.target.closest(".productCard-button__wrapper").getAttribute("data-id")

            elected.content = elected.content.reduce((acc, obj) => {
                if (obj.id != id) acc.push(obj);
                return acc;
            }, []);

            localStorage.setItem("elected", JSON.stringify(elected));

            e.target.closest(".productCard-row").remove()

            counterFavoritesDicr()

            if (document.querySelector(".products-content").innerHTML.split(/\s+/).join('') == "") {
                document.querySelector(".container").innerHTML = `<section class="no-products">
        <div class="no-products-container">
            <div class="no-products-content">
                <img src="img/icons/big-favorite-icon.svg" alt="Нет товаров" class="no-products-img">
                <div class="section-title no-products-text">Избранных товаров нет</div>
                <a href="catalog.php" class="no-products-link">Каталог</a>
            </div>
        </div>
    </section>`
            }
        })
    })

    function counterBasketIncr() {
        document.querySelector(".header-cart-mini__count").innerHTML = +document.querySelector(".header-cart-mini__count").innerHTML + 1
    }

    function counterBasketDicr() {
        document.querySelector(".header-cart-mini__count").innerHTML = +document.querySelector(".header-cart-mini__count").innerHTML - 1
    }

    function counterFavoritesDicr() {
        document.querySelector(".header-favorites__count").innerHTML = +document.querySelector(".header-favorites__count").innerHTML - 1
    }
</script>
</body>

</html>