<?
$title = 'Оформление заказа';
$link = '
        <link rel="stylesheet" href="css/products.css" />
        <link rel="stylesheet" href="css/product-card.css">
    ';
$script = '<script src="libs/jquery-3.6.1.min.js"></script>
           <script src="libs/jquery.validate/jquery.validate.js"></script>
';
include('blocks/head.php');
?>
<div class="wrapper">
    <?php
    include('blocks/header.php');
    ?>
    <main class="main">
        <section class="ordering">
            <div class="container">
                <div class="section-title ordering-title">Оформление заказа</div>
                <div class="ordering-wrapper">
                    <div class="ordering__сontact-details">
                        <form action="" class="contact-details" enctype="multipart/form-data" method="post" id="form" onsubmit="">
                            <div class="ordering__form-item">
                                <label class="ordering__name-field">Имя<span class="ordering__name-field-checkbox">*</span></label>
                                <input required type="text" name="name" class="ordering__form-field ordering__form-field-name">
                                <label id="fielding-error" class="error" for="name"></label>
                            </div>
                            <div class="ordering__form-item">
                                <label class="ordering__name-field">Телефон<span class="ordering__name-field-checkbox">*</span></label>
                                <input required type="text" name="phone" class="ordering__form-field ordering__form-field-tel">
                                <label id="fielding-error" class="error" for="phone"></label>
                            </div>
                            <div class="ordering__form-item">
                                <label class="ordering__name-field">Email<span class="ordering__name-field-checkbox">*</span></label>
                                <input required type="email" name="email" class="ordering__form-field ordering__form-field-email">
                                <label id="fielding-error" class="error" for="email"></label>
                            </div>
                            <div class="ordering__form-item">
                                <label class="ordering__name-field">Комментарий<span class="ordering__name-field-checkbox">*</span></label>
                                <textarea name="message" class="ordering__form-field ordering__form-field-comment"></textarea>
                                <label id="fielding-error" class="error" for="message"></label>
                            </div>
                            <div class="ordering__form-item form-btn">
                                <input class="ordering__form-btn-submit" type="submit" value="Оформить">
                            </div>
                        </form>
                        <div class="result"></div>
                    </div>
                    <div class="ordering__current-orders">
                        <div class="current-orders-header">
                            <div class="current-orders-header__title">Ваш заказ (0 товара)</div>
                        </div>
                        <div class="wrap-123-123-123">

                        </div>
                        <div class="current-orders__total-amount">
                            <div class="total-amount__text">Всего:</div>
                            <div class="total-amount__text total-amount__text-new total-amount__text-total"></div>
                            <div class="total-amount__text total-amount__text-new total-amount__text-sale"></div>
                            <div class="total-amount__amount">0 руб.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
    include('blocks/footer.php');
    ?>
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

    let basketLength = basket.content.length

    let basketLengthCount = 0

    let content = ""

    let totalPrice = 0
    let sale = 0

    basket.content.forEach((item) => {
        ajaxGet(`https://magmatika.ru/api/public/products/${item.id}`, "", (answer) => {
            answer = JSON.parse(answer)

            try {
                src = answer.attachments[0].url
            } catch (error) {
                src = "https://smartlanding.biz/wp-content/uploads/2015/03/kartinki-zaglushki.png"
            }

            totalPrice += answer.pricePerSquareMeter * item.count
            sale += answer.pricePerSquareMeter * item.count * (answer.discount / 100)

            if (answer.discount == 0) {
                content += `
              <div class="productCard-row">
                  <div class="productCard-row__productCard-left">
                        <a href="cerrad-loft-brick-cardamon.php?id=${item.id}" class="productCard-row__product-link">
                            <img src="${src}" alt="${answer.name}" class="productCard-row__productCard-img">
                            <div class="productCard-row__productCard-info">
                                <h3 class="productCard-row__productCard-title">${answer.name}</h3>
                                <p class="productCard-row__productCard-text">${answer.subCategory.category.name}</p>
                                <div class="productCard-row__productCard-price__wrapper">
                                    <div class="productCard-row__productCard-price">${answer.pricePerSquareMeter} руб./м²</div>
                                    <div class="productCard-row__productCard-product-quantity">
                                        <span class="productCard-product-quantity">x</span>
                                        <span class="productCard-product-quantity">${item.count}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                  </div>
              </div>`
            } else {
                content += `
              <div class="productCard-row">
                  <div class="productCard-row__productCard-left">
                      <a href="cerrad-loft-brick-cardamon.php?id=${item.id}" class="productCard-row__product-link">
                          <img src="${src}" alt="${answer.name}" class="productCard-row__productCard-img">
                          <div class="productCard-row__productCard-info">
                              <h3 class="productCard-row__productCard-title">${answer.name}</h3>
                              <p class="productCard-row__productCard-text">${answer.subCategory.category.name}</p>
                              <div class="product-row-item__price-old">${answer.pricePerSquareMeter} руб./м²</div>
                              <div class="productCard-row__productCard-price__wrapper">
                                    <div class="productCard-row__productCard-price">${Math.round10((answer.pricePerSquareMeter * ((100 - +answer.discount) / 100)), -2) + " руб./м²"}</div>
                                    <div class="productCard-row__productCard-product-quantity">
                                        <span class="productCard-product-quantity">x</span>
                                        <span class="productCard-product-quantity">${item.count}</span>
                                    </div>
                                </div>
                          </div>
                      </a>
                  </div>
              </div>`
            }



            basketLengthCount++
            publisher()
        })
    })

    document.querySelector(".ordering__form-btn-submit").addEventListener("click", () => {
        let basketLength = basket.content.length

        let basketLengthCount = 0

        objToGiveAway = {
            name: document.querySelector(".ordering__form-field-name").value,
            phone: document.querySelector(".ordering__form-field-tel").value,
            email: document.querySelector(".ordering__form-field-email").value,
            comment: document.querySelector(".ordering__form-field-comment").value
        }

        let contentToGiveAway = []

        basket.content.forEach((item) => {
            ajaxGet(`https://magmatika.ru/api/public/products/${item.id}`, "", (answer) => {
                answer = JSON.parse(answer)

                contentToGiveAway.push({
                    id: answer.id,
                    price: answer.pricePerSquareMeter,
                    sale: answer.discount,
                    count: item.count
                })

                basketLengthCount++
                answerToGiveAway(objToGiveAway, contentToGiveAway, basketLengthCount, basketLength)
            })
        })
    })


    if (basketLength == 0) {
        document.querySelector(".total-amount__amount").innerHTML = 0 + " руб."
        document.querySelector(".current-orders-header__title").innerHTML = "Ваш заказ (0 товаров)"

    }

    function answerToGiveAway(objToGiveAway, contentToGiveAway, basketLengthCount, basketLength) {
        if (basketLength != basketLengthCount) return

        objToGiveAway.products = contentToGiveAway
    }

    function publisher() {
        if (basketLength != basketLengthCount) return

        document.querySelector(".wrap-123-123-123").innerHTML = content
        document.querySelector(".total-amount__text-total").innerHTML = totalPrice + " руб."
        document.querySelector(".total-amount__text-sale").innerHTML = "-" + Math.round10(sale, -2) + " руб. (скидка)"
        document.querySelector(".total-amount__amount").innerHTML = (totalPrice - Math.round10(sale, -2)) + " руб."
        document.querySelector(".current-orders-header__title").innerHTML = `Ваш заказ (${basketLength} товара)`
    }
</script>

<script>
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
    });

    function validatePhone(tel) {
        const regex = /^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;
        return regex.test(tel);
    };
    //form validate
    $('.contact-details').validate({
        rules: {
            firstname: "required",
            number: {
                minlength: 11,
                maxlength: 12
            },
            name: {
                // required: true,
                minlength: 3
            },
            email: {
                // required: true,
                minlength: 5,
                email: true,
            },
            message: {
                // required: true,
                minlength: 34
            },
            phone: {
                required: true,
                validatePhone: true
            }
        },
        messages: {
            email: {
                // required: 'Введите email',
                email: 'отсутствует символ @',
                minlength: 'Слишком короткий e-mail!'
            },
            name: {
                minlength: 'Ваше имя слишком короткое'
            },
            message: {
                // required: 'Введите сообщение',
                minlength: 'Пожалуйста, укажите больше информации'
            },
        }
    })
</script>
</body>

</html>