<?
$title = 'Корзина';
$link = '
        <link rel="stylesheet" href="css/products.css" />
        <link rel="stylesheet" href="css/product-card.css">
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
                        <h2 class="section-title">Корзина</h2>
                        <p class="section-subtitle">
                            Оставьте в заказе 1 штуку, если вы не знаете точное количество товара.
                            Вы сможете указать его при оформлении в комментариях в удобной вам форме: метрах, упаковках и т.п.
                            Менеджер уточнит детали заказа и учтёт скидку на объем.
                        </p>
                    </div>
                    <div class="products-content">
                    </div>
                    <div class="products-footer">
                        <div class="current-orders__total-amount">
                            <div class="total-amount__text">Всего:</div>
                            <div class="total-amount__amount">0 руб.</div>
                        </div>
                        <div class="products__button-products-action">
                            <a href="catalog.php" class="productCard-row__productCard-button productCard-button__continue">Продолжить покупки</a>
                            <a href="order.php" class="productCard-row__productCard-button productCard-button__order">Оформить</a>
                        </div>
                    </div> -->
            </div>
        </section>
        <!-- <section class="no-products">
                <div class="no-products-container">
                    <div class="no-products-content">
                        <img src="img/icons/big-cart-icon.svg" alt="Нет товаров" class="no-products-img">
                        <div class="section-title no-products-text">Корзина пуста</div>
                        <a href="catalog.php" class="no-products-link">Каталог</a>
                    </div>
                </div>
            </section> -->
    </main>
    <?php
    include('blocks/footer.php');
    ?>
</div>
<script>
    // Общее
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

    let basket = JSON.parse(localStorage.getItem("basket")) || {
        content: []
    }

    // Обновление тотал цены
    function updateTotalPrice() {
        let totalPrice = 0
        document.querySelectorAll(".cost-calculation__priceProduct-final").forEach((elem) => {
            totalPrice += parseInt(elem.innerText)
        })
        document.querySelector(".total-amount__amount").innerHTML = `~${totalPrice} руб.`
    }

    let basketLength = basket.content.length

    let basketLengthCount = 0

    let content = ""

    let totalPrice = 0

    basket.content.forEach((item) => {
        ajaxGet(`https://magmatika.ru/api/public/products/${item.id}`, "", (answer) => {
            answer = JSON.parse(answer)

            totalPrice += Math.round10((answer.pricePerSquareMeter * ((100 - +answer.discount) / 100)), -2) * item.count

            let src
            try {
                src = answer.attachments[0].url
            } catch (error) {
                src = "https://smartlanding.biz/wp-content/uploads/2015/03/kartinki-zaglushki.png"
            }

            if (answer.discount == 0) {
                content += `
                        <div class="productCard-row" data-id="${item.id}">
                            <div class="productCard-row__productCard-left">
                                <a href="cerrad-loft-brick-cardamon.php?id=${item.id}" class="productCard-row__product-link">
                                    <img src="${src}" alt="${answer.name}" class="productCard-row__productCard-img">
                                    <div class="productCard-row__productCard-info">
                                        <h3 class="productCard-row__productCard-title">${answer.name}</h3>
                                        <p class="productCard-row__productCard-text">${answer.subCategory.category.name}</p>
                                        <div class="productCard-row__productCard-price">${answer.pricePerSquareMeter} руб./м²</div>
                                    </div>
                                </a>
                            </div>
                            <div class="productCard-row__cost-calculation-wrapper">
                                <div class="productCard-row__cost-calculation">
                                    <div class="cost-calculation__items-left">
                                        <div class="productCard__product-count">
                                            <button class="productCard__btn-plus" type="button">+</button>
                                            <input id="product-count" type="number" class="productCard__input-count" min="1" max="16" value="${item.count}">
                                            <button class="productCard__btn-minus" type="button">-</button>
                                        </div>
                                    </div>
                                    <div class="cost-calculation__items-center">
                                        <span class="cost-calculation__multiply"></span>
                                        <div class="cost-calculation__priceProduct">${answer.pricePerSquareMeter} руб.</div>
                                        <span class="cost-calculation__equals"></span>
                                    </div>
                                    <div class="cost-calculation__items-right">
                                        <div class="cost-calculation__priceProduct-final">${answer.pricePerSquareMeter * item.count} руб.</div>
                                        <div class="cost-calculation__deleteProduct"></div>
                                    </div>
                                </div>
                            </div>
                        </div>`
            } else {
                content += `
                        <div class="productCard-row" data-id="${item.id}">
                            <div class="productCard-row__productCard-left">
                                <a href="cerrad-loft-brick-cardamon.php?id=${item.id}" class="productCard-row__product-link">
                                    <img src="${src}" alt="${answer.name}" class="productCard-row__productCard-img">
                                    <div class="productCard-row__productCard-info">
                                        <h3 class="productCard-row__productCard-title">${answer.name}</h3>
                                        <p class="productCard-row__productCard-text">${answer.subCategory.category.name}</p>
                                        <div class="product-row-item__price-old">${answer.pricePerSquareMeter} руб./м²</div>
                                        <div class="productCard-row__productCard-price">${Math.round10((answer.pricePerSquareMeter * ((100 - +answer.discount) / 100)), -2) + " руб./м²"}</div>
                                    </div>
                                </a>
                            </div>
                            <div class="productCard-row__cost-calculation-wrapper">
                                <div class="productCard-row__cost-calculation">
                                    <div class="cost-calculation__items-left">
                                        <div class="productCard__product-count">
                                            <button class="productCard__btn-plus" type="button">+</button>
                                            <input id="product-count" type="number" class="productCard__input-count" min="1" max="16" value="${item.count}">
                                            <button class="productCard__btn-minus" type="button">-</button>
                                        </div>
                                    </div>
                                    <div class="cost-calculation__items-center">
                                        <span class="cost-calculation__multiply"></span>
                                        <div class="cost-calculation__priceProduct">${Math.round10((answer.pricePerSquareMeter * ((100 - +answer.discount) / 100)), -2)} руб.</div>
                                        <span class="cost-calculation__equals"></span>
                                    </div>
                                    <div class="cost-calculation__items-right">
                                        <div class="cost-calculation__priceProduct-final">${Math.round10((answer.pricePerSquareMeter * ((100 - +answer.discount) / 100)), -2) * item.count} руб.</div>
                                        <div class="cost-calculation__deleteProduct"></div>
                                    </div>
                                </div>
                            </div>
                        </div>`
            }


            basketLengthCount++
            publisher()
        })
    })
    if (basket.content.length == 0) publisher()

    function publisher() {
        if (basketLength != basketLengthCount) return

        document.querySelector(".container").innerHTML = content ? `
        <div class="products-header">
                <h2 class="section-title">Корзина</h2>
                <p class="section-subtitle">
                    Оставьте в заказе 1 штуку, если вы не знаете точное количество товара.
                    Вы сможете указать его при оформлении в комментариях в удобной вам форме: метрах, упаковках и т.п.
                    Менеджер уточнит детали заказа и учтёт скидку на объем.
                </p>
            </div>
            <div class="products-content">
            ${content}
            </div>
            <div class="products-footer">
                <div class="current-orders__total-amount">
                    <div class="total-amount__text">Всего:</div>
                    <div class="total-amount__amount">0 руб.</div>
                </div>
                <div class="products__button-products-action">
                    <a href="catalog.php" class="productCard-row__productCard-button productCard-button__continue">Продолжить покупки</a>
                    <a href="order.php" class="productCard-row__productCard-button productCard-button__order">Оформить</a>
                </div>
            </div>
        ` : `
        <section class="no-products">
        <div class="no-products-container">
            <div class="no-products-content">
                <img src="img/icons/big-cart-icon.svg" alt="Нет товаров" class="no-products-img">
                <div class="section-title no-products-text">Корзина пуста</div>
                <a href="catalog.php" class="no-products-link">Каталог</a>
            </div>
        </div>
        </section>
        `

        if (!content) return

        document.querySelector(".total-amount__amount").innerHTML = totalPrice + " руб."

        document.querySelectorAll(".cost-calculation__deleteProduct").forEach((elem) => {
            elem.addEventListener("click", (e) => {
                let id = e.target.closest(".productCard-row").getAttribute("data-id")

                basket.content = basket.content.reduce((acc, obj) => {
                    if (obj.id != id) acc.push(obj);
                    return acc;
                }, []);

                localStorage.setItem("basket", JSON.stringify(basket));

                e.target.closest(".productCard-row").remove()

                counterBasketDicr()
                updateTotalPrice()

                if (document.querySelector(".products-content").innerHTML.split(/\s+/).join('') == "") {
                    document.querySelector(".container").innerHTML = `
                    <section class="no-products">
                    <div class="no-products-container">
                        <div class="no-products-content">
                            <img src="img/icons/big-cart-icon.svg" alt="Нет товаров" class="no-products-img">
                            <div class="section-title no-products-text">Корзина пуста</div>
                            <a href="catalog.php" class="no-products-link">Каталог</a>
                        </div>
                    </div>
                    </section>
                    `
                }
            })
        })

        function updateInputCount(elem) {
            let count = elem.value
            if (+count > 16) {
                count = 16
            } else
            if (+count < 1) {
                count = 1
            }

            count = Math.abs(count)

            if (count % 1 != 0) {
                elem.value = Math.trunc(count)
                count = elem.value
            }
            let standPrice = parseInt(elem.closest(".productCard-row__cost-calculation").querySelector(".cost-calculation__priceProduct").innerText)
            elem.closest(".productCard-row__cost-calculation").querySelector(".cost-calculation__priceProduct-final").innerText = (standPrice * count) + " руб."
            updateTotalPrice()

            let basket = JSON.parse(localStorage.getItem("basket")) || {
                content: []
            }
            basket.content.forEach((elem2) => {
                let id = elem.closest(".productCard-row").getAttribute("data-id")
                if (elem2.id != id) return
                elem2.count = count
            })
            localStorage.setItem("basket", JSON.stringify(basket));
        }

        document.querySelectorAll(".productCard__input-count").forEach((elem) => {
            elem.addEventListener("input", (e) => {
                updateInputCount(e.target)
            })
        })

        document.querySelectorAll(".productCard__btn-plus").forEach((elem) => {
            elem.addEventListener("click", (e) => {
                const count = e.target.closest(".productCard__product-count").querySelector(".productCard__input-count").value
                if (+count == 16) return
                e.target.closest(".productCard__product-count").querySelector(".productCard__input-count").value = +count + 1
                updateInputCount(e.target.closest(".productCard__product-count").querySelector(".productCard__input-count"))
            })
        })

        document.querySelectorAll(".productCard__btn-minus").forEach((elem) => {
            elem.addEventListener("click", (e) => {
                const count = e.target.closest(".productCard__product-count").querySelector(".productCard__input-count").value
                if (+count == 1) return
                e.target.closest(".productCard__product-count").querySelector(".productCard__input-count").value = +count - 1
                updateInputCount(e.target.closest(".productCard__product-count").querySelector(".productCard__input-count"))
            })
        })

        updateTotalPrice()
    }

    function counterBasketDicr() {
        document.querySelector(".header-cart-mini__count").innerHTML = +document.querySelector(".header-cart-mini__count").innerHTML - 1
    }
</script>

</body>

</html>