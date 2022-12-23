<?
$title = 'Каталог';
$link = '
    <!--Plugin CSS file with desired skin-->
    <link rel="stylesheet" href="libs/ion.rangeSlider-master/css/ion.rangeSlider.min.css"/>
    <link rel="stylesheet" href="css/catalog.css" />
    ';
$script = '
    <script src="libs/jquery-3.6.1.min.js"></script>
     <!--Plugin JavaScript file-->
    <script src="libs/ion.rangeSlider-master/js/ion.rangeSlider.min.js"></script>
    ';
include('blocks/head.php');
?>
<div class="wrapper">
    <?php
    $toggle_open = '
            <div class="toggle-filters">
                <span></span>
            </div>
        ';
    include('blocks/header.php');
    ?>
    <main class="main">
        <section class="product-catalog">
            <div class="container">
                <div class="product-catalog-wrapper">
                    <div class="product-catalog__filters">
                        <div class="section-title product-catalog-title">Каталог</div>
                        <div class="product-catalog__filters-fixed">
                            <div class="product-catalog__filters-container">
                                <div class="filters__filters-wrapper">
                                    <div class="filters__filters-group filters-category">
                                        <div id="filter-item-1" class="filter-item-1 filters-group-title">Категория
                                            <span class="arrow-top">
                                                <svg class="icon">
                                                    <use xlink:href="img/icons/sprite.svg#arrow-top"></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="filter-group__filter-item filters-group__category">
                                            <div class="filters-group filters-group-category">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="filters__filters-group filters-subCategory" style="display: none;">
                                        <div id="filter-item-2" class="filter-item-2 filters-group-title">Подкатегория
                                            <span class="arrow-top">
                                                <svg class="icon">
                                                    <use xlink:href="img/icons/sprite.svg#arrow-top"></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="filter-group__filter-item filters-group__subCategory filters-group__subCategory-1">
                                            <div class="filters-group filters-group__subCategory-123">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filters__filters-wrapper filters__filters-wrapper-secondary">
                                    <div id="filters-click" class="filters__filters-item-text">Фильтры
                                        <span class="arrow-top">
                                            <svg class="icon">
                                                <use xlink:href="img/icons/sprite.svg#arrow-top"></use>
                                            </svg>
                                        </span>
                                    </div>
                                    <select class="sorting-select" name="sorting">
                                        <option disabled>Сортировать</option>
                                        <option value="По умолчанию">По умолчанию</option>
                                        <option value="По возрастанию цены">По возрастанию цены</option>
                                        <option value="По убыванию цены">По убыванию цены</option>
                                    </select>
                                </div>
                                <div class="filters__filters-group-wrapper">
                                    <div class="filters__filters-group-wrapper-content">
                                        <div class="filters__filters-group filters-price" data-min-price="0" data-max-price="0">
                                            <div id="filter-item-3" class="filter-item-3 filters-group-title">Цена
                                                <span class="arrow-top">
                                                    <svg class="icon">
                                                        <use xlink:href="img/icons/sprite.svg#arrow-top"></use>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="filter-group__filter-item filters-group__filter-price">

                                            </div>
                                        </div>
                                        <div class="filters__filters-group filters-brands">
                                            <div id="filter-item-4" class="filter-item-4 filters-group-title">Производитель
                                                <span class="arrow-top">
                                                    <svg class="icon">
                                                        <use xlink:href="img/icons/sprite.svg#arrow-top"></use>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="filter-group__filter-item filters-group__brands-change">
                                                <div class="filters-group__checkbox-container filters-group-manufacturer">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="filters__filters-group filters-colors">
                                            <div id="filter-item-5" class="filter-item-5 filters-group-title">Цвет
                                                <span class="arrow-top">
                                                    <svg class="icon">
                                                        <use xlink:href="img/icons/sprite.svg#arrow-top"></use>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="filter-group__filter-item filters-group__colors">
                                                <div class="filters-group filters-group__colors-change">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="filters__filters-group filters-thickness">
                                            <div id="filter-item-6" class="filter-item-6 filters-group-title">Толщина
                                                <span class="arrow-top">
                                                    <svg class="icon">
                                                        <use xlink:href="img/icons/sprite.svg#arrow-top"></use>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="filter-group__filter-item filters-group__thickness">

                                            </div>

                                        </div>
                                        <button type="button" class="filter-groups__btn-open">Применить</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-catalog__product-row">
                        <div class="product-catalog__product-row-content">
                            <div class="product-catalog__category-name">Фасадная плитка</div>
                            <div class="product-catalog__sorting-panel">
                                <div class="sorting-panel">
                                    <div class="sorting-panel__filters">
                                        <div class="sorting-panel__filters-header">
                                            <div class="sorting-panel-header-text">Сортировать</div>
                                            <select class="select" name="sorting">
                                                <option disabled>По умолчанию</option>
                                                <option value="По умолчанию">По умолчанию</option>
                                                <option value="По возрастанию цены">По возрастанию цены</option>
                                                <option value="По убыванию цены">По убыванию цены</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search-result-no-product" style="display: none;">К сожалению, ничего не найдено</div>
                            <div class="product-row">
                            </div>
                            <!-- <div class="product-row__pagination">
                                <div class="pagination-wrapper">
                                    <div class="pagination-header">Страница:</div>
                                    <ul class="pagination-list">
                                        <li class="pagination-list-item open-page-number">
                                            <a href="##" class="pagination-list-item-link">1</a>
                                        </li>
                                        <li class="pagination-list-item">
                                            <a href="##" class="pagination-list-item-link">2</a>
                                        </li>
                                        <li class="pagination-list-item">
                                            <a href="##" class="pagination-list-item-link">3</a>
                                        </li>
                                        <li class="pagination-list-item">
                                            <a href="##" class="pagination-list-item-link">4</a>
                                        </li>
                                        <li class="pagination-list-item pagination-list-item-more">
                                            <a href="##" class="pagination-list-item-link">...</a>
                                        </li>
                                        <li class="pagination-list-item">
                                            <a href="##" class="pagination-list-item-link">5</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
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
    let params = window
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
        ) || {};

    let filterCounterTotal = 5
    let filterCounter = 0

    let totalCountUpdateContent = 0

    let countlist123 = 0

    var $inputFrom_price
    var $inputTo_price
    var instance_price

    function maxLengthInput(target, maxLength) {
        let selector = target.getAttribute("name")
        let elems = document.querySelectorAll(`input[name="${selector}"]:checked`)
        if (elems.length > maxLength) {
            elems.forEach(elem => {
                if (elem != target) {
                    elem.checked = false
                }
            })
        }
    }

    showCatalogList()

    showManufacturerList()

    showColorList()

    showPriceList()

    showThicknessList()

    constructor()

    function setCheckers() {
        if (filterCounterTotal != filterCounter) return
        let strParams = updateSample()
        updateVisibleSettings(strParams)
        document.querySelectorAll(".chenge-item").forEach(element => {
            element.addEventListener("change", (e) => {
                maxLengthInput(e.target, 1)
                onChengeParameter()
            })
        });
    }


    function showCatalogList(classWrap = "filters-group-category") {
        ajaxGet("https://magmatika.ru/api/public/categories", "", (answer) => {
            let list = ""
            let listAll = JSON.parse(answer)
            listAll.forEach((elem) => {
                if (elem.status != "ENABLED") return
                if (!elem.link || !elem.name) return
                list += `<label for="" class="filters-group__label-wrapper">
                            <input type="checkbox" name="filters-category" id="filters-group__radio" class="filters-group__radio chenge-item chenge-item-catalog" data-name="${elem.link}">
                            <div class="filters-group-item">${elem.name}</div>
                        </label>`
            })
            document.querySelector(`.${classWrap}`).innerHTML = list
            document.querySelectorAll(".chenge-item-catalog").forEach(elem => {
                elem.addEventListener("click", (e) => {
                    let link = e.target.getAttribute("data-name")
                    showSubCatalogList([link])
                })
            })

            filterCounter++

            setCheckers()
        })
    }

    function showSubCatalogList(list, classWrap = "filters-group__subCategory-123") {
        if (!list) {
            document.querySelector(`.filters-subCategory`).style.display = 'none'
        } else {
            document.querySelector(`.filters-subCategory`).style.display = 'flex'
        }

        list.forEach(category => {
            ajaxGet(`https://magmatika.ru/api/public/categories/subcategories/${category}`, "", (answer) => {
                let list = ""
                let listAll = JSON.parse(answer)
                listAll.forEach((elem) => {
                    if (!elem.name) return
                    list += `<label for="" class="filters-group__label-wrapper">
                                <input type="checkbox" name="filters-subcategory" id="filters-group__radio" class="filters-group__radio chenge-item chenge-item-subCat" data-name="${elem.link}">
                                <div class="filters-group-item">${elem.name}</div>
                            </label>`
                })

                document.querySelector(`.${classWrap}`).innerHTML = list

                document.querySelectorAll(".chenge-item-subCat").forEach(element => {
                    element.addEventListener("change", (e) => {
                        maxLengthInput(e.target, 1)
                        onChengeParameter()
                    })
                });

                let strParams = updateSample()
                const list2 = {
                    'subCategoryLink': 'filters-subcategory'
                }
                let arr = []
                strParams.split("?")[1].split("&").forEach((elem) => {
                    elem = elem.split("=")
                    let obj = {}
                    obj['name'] = elem[0]
                    obj['property'] = elem[1]
                    arr.push(obj)
                })

                arr.forEach(obj => {
                    if (list2.hasOwnProperty(obj['name'])) {
                        try {

                            if (obj['name'] == 'subCategoryLink') {

                                let str = `input[name="${list2[obj['name']]}"][data-name="${obj['property']}"]`
                                document.querySelector(str).checked = true
                            }
                        } catch (error) {}
                    }
                })
            })
        })

    }

    function showPriceList(classWrap = "filters-group__filter-price") {
        ajaxGet("https://magmatika.ru/api/public/products/getMinMaxPrice", "", (answer) => {
            let list = ""
            let listAll = JSON.parse(answer)
            list = `<div class="range-slider">
                        <input type="text" id="js-range-slider__price" class="js-range-slider" value="" data-min="${listAll.min}" data-max="${listAll.max}" />
                    </div>
                    <div class="filters-group__price-range">
                        <label for="" class="filters-group__range">
                            <div class="filters-group__label-text">от</div>
                            <input type="text" id="js-input-from__price" class="js-input-from__price filter-group__form-field" min="0" max="${listAll.max}" value="" />
                        </label>
                        <label for="" class="filters-group__range">
                            <div class="filters-group__label-text">до</div>
                            <input type="text" id="js-input-to__price" class="js-input-to__price filter-group__form-field" min="0" max="${listAll.max}" value="${listAll.max}" />
                        </label>
                    </div>`

            document.querySelector(`.${classWrap}`).innerHTML = list

            document.querySelector(".filters-price").setAttribute("data-max-price", listAll.max)
            document.querySelector(".filters-price").setAttribute("data-min-price", listAll.min)

            document.querySelector(".filters-price").setAttribute("data-total-max-price", listAll.max)
            document.querySelector(".filters-price").setAttribute("data-total-min-price", listAll.min)

            var $range_price = $("#js-range-slider__price");
            $inputFrom_price = $(".js-input-from__price");
            $inputTo_price = $(".js-input-to__price");
            instance_price;
            var min_price = listAll.min;
            var max_price = listAll.max;

            $range_price.ionRangeSlider({
                skin: "round",
                type: "double",
                min: min_price,
                max: max_price,
                step: Math.round10((max_price - min_price) * 0.125, 1),
                onStart: updateInputsPrice,
                onChange: updateInputsPrice
            });
            instance_price = $range_price.data("ionRangeSlider");

            function updateInputsPrice(data) {
                from = data.from;
                to = data.to;

                $inputFrom_price.prop("value", from);
                $inputTo_price.prop("value", to);

                document.querySelector(".filters-price").setAttribute("data-max-price", to)
                document.querySelector(".filters-price").setAttribute("data-min-price", from)

                if (countlist123 == 0) {
                    countlist123++
                } else {
                    onChengeParameter()
                }
            }

            $inputFrom_price.on("input", function() {
                var val = $(this).prop("value");

                // validate
                if (val < min_price) {
                    val = min_price;
                } else if (val > to) {
                    val = to;
                }

                instance_price.update({
                    from: val
                });
                $(this).val((i, val) => Math.max(this.min_price, Math.min(this.max_price, val)));

            });
            $inputTo_price.on("input", function() {
                var val = $(this).prop("value");

                // validate
                if (val < from) {
                    val = from;
                } else if (val > max_price) {
                    val = max_price;
                }

                instance_price.update({
                    to: val
                });
                $(this).val((i, v) => Math.max(this.min_price, Math.min(this.max_price, v)));

            });

            filterCounter++

            setCheckers()
        })


    }

    function showManufacturerList(classWrap = "filters-group-manufacturer") {
        ajaxGet("https://magmatika.ru/api/public/products/parameters/manufacturer", "", (answer) => {
            let list = ""
            let listAll = JSON.parse(answer)
            listAll.forEach((elem) => {
                if (!elem.parameter || !elem.count) return
                list += `<label for="" class="filters-group__label-wrapper filters-group__filter-item">
                            <input type="checkbox" name="filters-manufacturer" id="filters-group__radio" class="filters-group__radio chenge-item" data-name="${elem.parameter}">
                            <div class="filters-group__custom-radio"></div>
                            <div class="filters-group__label-text">${elem.parameter}<span class="filters-group__count-products-container">
                            (<span class="filters-group__count-products">${elem.count}</span>)
                            </span></div>
                        </label>`
            })
            document.querySelector(`.${classWrap}`).innerHTML = list

            filterCounter++

            setCheckers()
        })
    }

    function showThicknessList(classWrap = "filters-group__thickness") {
        ajaxGet("https://magmatika.ru/api/public/products/parameters/thickness", "", (answer) => {
            let list = ""
            let listAll = JSON.parse(answer)
            listAll.forEach((elem) => {
                if (!elem.parameter || !elem.count) return
                list += `<label for="" class="filters-group__label-wrapper filters-group__filter-item">
                            <input type="checkbox" name="filters-thickness" id="filters-group__radio" class="filters-group__radio chenge-item" data-name="${elem.parameter}">
                            <div class="filters-group__custom-radio"></div>
                            <div class="filters-group__label-text">${elem.parameter}<span class="filters-group__count-products-container">
                            (<span class="filters-group__count-products">${elem.count}</span>)
                            </span></div>
                        </label>`
            })
            document.querySelector(`.${classWrap}`).innerHTML = list

            filterCounter++

            setCheckers()
        })
    }

    function showColorList(classWrap = "filters-group__colors-change") {
        ajaxGet("https://magmatika.ru/api/public/products/parameters/color", "", (answer) => {
            let list = ""
            let listAll = JSON.parse(answer)
            listAll.forEach((elem) => {
                if (!elem.parameter || !elem.count) return
                // list += `<label for="" class="filters-group__label-wrapper filters-group-item-color-container">
                //             <input type="radio" name="filters-color" id="filters-group__radio" class="filters-group__radio chenge-item" data-name="${elem.parameter}">
                //             <div class="filters-group-item-color">${elem.parameter}</div>
                //         </label>`
                list += `<label for="" class="filters-group__label-wrapper filters-group__filter-item">
                            <input type="checkbox" name="filters-color" id="filters-group__radio" class="filters-group__radio chenge-item" data-name="${elem.parameter}">
                            <div class="filters-group__custom-radio"></div>
                            <div class="filters-group__label-text">${elem.parameter}<span class="filters-group__count-products-container">
                            (<span class="filters-group__count-products">${elem.count}</span>)
                            </span></div>
                        </label>`
            })
            document.querySelector(`.${classWrap}`).innerHTML = list

            filterCounter++

            setCheckers()
        })
    }

    function onChengeParameter() {
        AllParams = getAllSettings()

        let strParams = updateSample(AllParams, true)

        updateUrl(strParams)

        strParams += strParams ? "&page=0&pageSize=45" : "?page=0&pageSize=45" // убрать

        showCatalogContent(strParams)
    }

    function getAllSettings() {
        let settings = {}

        let category = document.querySelector(`input[name=filters-category]:checked`)
        let subCategory
        if (!category) {
            subCategory = null
        } else {
            subCategory = document.querySelector(`input[name=filters-subcategory]:checked`)
        }
        let manufacturer = document.querySelector(`input[name=filters-manufacturer]:checked`)
        let color = document.querySelector(`input[name=filters-color]:checked`)
        let thickness = document.querySelector(`input[name=filters-thickness]:checked`)
        let minPrice = document.querySelector(`.filters-price`)
        let maxPrice = document.querySelector(`.filters-price`)

        if (category) {
            category = category.getAttribute("data-name")
            settings.categoryLink = category
        }

        if (subCategory) {
            subCategory = subCategory.getAttribute("data-name")
            settings.subCategoryLink = subCategory
        }

        if (manufacturer) {
            manufacturer = manufacturer.getAttribute("data-name")
            settings.manufacturer = manufacturer
        }

        if (color) {
            color = color.getAttribute("data-name")
            settings.color = color
        }

        if (thickness) {
            thickness = thickness.getAttribute("data-name")
            settings.thickness = thickness
        }

        if (minPrice) {
            minPrice = minPrice.getAttribute("data-min-price")
            settings.minPrice = minPrice
        }

        if (maxPrice) {
            maxPrice = maxPrice.getAttribute("data-max-price")
            settings.maxPrice = maxPrice
        }

        return settings
    }

    function showCatalogContent(strParams = "", classWrap = "product-row") {
        document.querySelector(`.${classWrap}`).innerHTML = "Загрузка..."

        totalCountUpdateContent++
        let nowCountUpdateContent = totalCountUpdateContent

        if (strParams) {
            strParams += `&status=ENABLED`
        } else {
            strParams = `?status=ENABLED`
        }
        ajaxGet("https://magmatika.ru/api/public/products" + strParams + "", "", (answer) => {
            let content = ""
            let contentAll = JSON.parse(answer).content
            contentAll.forEach((elem) => {
                let src
                try {
                    src = elem.attachments[0].url
                } catch (error) {
                    src = "https://smartlanding.biz/wp-content/uploads/2015/03/kartinki-zaglushki.png"
                }
                if (elem.discount == 0) {
                    content += `
                            <div class="product-row-item">
                                <div class="product-row-item__img-wrapper">
                                    <a href="cerrad-loft-brick-cardamon.php?id=${elem.id}" class="product-row-item__product-link">
                                        <img src="${src}" alt="${elem.name}" class="product-row-item__img">
                                    </a>
                                </div>
                                <div class="product-row-item__product-info">
                                    <a href="cerrad-loft-brick-cardamon.php?id=${elem.id}" class="product-row-item__product-link">
                                        <div class="product-row-item__name">${elem.name}</div>
                                        <div class="product-row-item__price">${elem.pricePerSquareMeter} руб./м²</div>
                                    </a>
                                </div>
                            </div>
                            `
                } else {
                    content += `
                            <div class="product-row-item">
                                <div class="product-row-item__img-wrapper">
                                    <a href="cerrad-loft-brick-cardamon.php?id=${elem.id}" class="product-row-item__product-link">
                                        <img src="${src}" alt="${elem.name}" class="product-row-item__img">
                                        <div class="product-row-item__discount">СКИДКА ${elem.discount}%</div>
                                    </a>
                                </div>
                                <div class="product-row-item__product-info">
                                    <a href="cerrad-loft-brick-cardamon.php?id=${elem.id}" class="product-row-item__product-link">
                                        <div class="product-row-item__name">${elem.name}</div>
                                        <div class="product-row-item__price-old">${elem.pricePerSquareMeter} руб./м²</div>
                                        <div class="product-row-item__price product-row-item__price-new">${Math.round10((elem.pricePerSquareMeter * ((100 - +elem.discount)/100)), -2)} руб./м²</div>
                                    </a>
                                </div>
                            </div>
                            `
                }
            })

            if (totalCountUpdateContent != nowCountUpdateContent) return


            if (content) {
                document.querySelector(`.${classWrap}`).innerHTML = content
                document.querySelector(".search-result-no-product").style.display = "none"
            } else {
                document.querySelector(`.${classWrap}`).innerHTML = ""
                document.querySelector(".search-result-no-product").style.display = "block"
            }
        })
    }

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

    function getGetParam() {
        let params = (new URL(document.location)).searchParams;
        let obj = {}
        for (let value of params.keys()) {
            obj[value] = params.get(value)
        }
        return obj
    }

    function updateSample(newParam = {}, update = false) {
        let params = getGetParam()
        let oldCat = params['categoryLink']

        if (update) {
            params = {}
        }

        let newCat = ""

        for (key in newParam) {
            if (key == "categoryLink") {
                newCat = newParam[key]
            }
            if (!key || !newParam[key]) continue
            params[key] = newParam[key]
        }

        if (update) {
            if (newCat != oldCat) {
                delete params.subCategoryLink
            }

        }

        let urlParam = ""
        let count = 0
        for (key in params) {
            if (count == 0) {
                urlParam += "?" + key + "=" + params[key];
                count = 1
            } else {
                urlParam += "&" + key + "=" + params[key];
            }
        }
        return urlParam
    }

    function path(pathname) {
        var name = pathname.split("/").pop();
        return name;
    }

    function updateUrl(urlParam) {
        history.pushState(null, null, path(window.location.pathname) + urlParam);
    }

    function updateVisibleSettings(urlParam) {
        const list = {
            'categoryLink': 'filters-category',
            'manufacturer': 'filters-manufacturer',
            'color': 'filters-color',
            'thickness': 'filters-thickness',
            'minPrice': '',
            'maxPrice': ''
        }

        let categoryInput = ""

        let arr = []
        try {
            urlParam.split("?")[1].split("&").forEach((elem) => {
                elem = elem.split("=")
                let obj = {}
                obj['name'] = elem[0]
                obj['property'] = elem[1]
                arr.push(obj)
            })

            arr.forEach(obj => {
                if (list.hasOwnProperty(obj['name'])) {
                    try {
                        if (obj['name'] != 'minPrice' && obj['name'] != 'maxPrice') {
                            let str = `input[name="${list[obj['name']]}"][data-name="${obj['property']}"]`
                            document.querySelector(str).checked = true
                            if (list[obj['name']] == "filters-category") {
                                categoryInput = obj['property']
                            }
                        } else {
                            let price = obj['property']
                            let TotalMinPrice = document.querySelector('.filters-price').getAttribute("data-total-min-price")
                            let TotalMaxPrice = document.querySelector('.filters-price').getAttribute("data-total-max-price")
                            if (obj['name'] == 'minPrice') {
                                if (+TotalMaxPrice < +obj['property']) {
                                    price = TotalMaxPrice
                                }
                                if (+TotalMinPrice > +obj['property']) {
                                    price = TotalMinPrice
                                }
                                instance_price.update({
                                    from: parseInt(price)
                                });

                                $inputFrom_price.prop("value", parseInt(price));
                            } else {
                                if (+TotalMaxPrice < +obj['property']) {
                                    price = TotalMaxPrice
                                }
                                if (+TotalMinPrice > +obj['property']) {
                                    price = TotalMinPrice
                                }
                                instance_price.update({
                                    to: parseInt(price)
                                });

                                $inputTo_price.prop("value", parseInt(price));
                            }

                        }

                    } catch (error) {}
                }
            })
        } catch (err) {}

        try {
            if (categoryInput != "") {
                // document.querySelector("input")

                showSubCatalogList([categoryInput])
            }
        } catch (error) {}

    }

    function constructor() {
        let strParams = updateSample()

        strParams += strParams ? "&page=0&pageSize=100" : "?page=0&pageSize=100" // убрать
        showCatalogContent(strParams)
    }
</script>
<script>
    $('.select').each(function() {
        const _this = $(this),
            selectOption = _this.find('option'),
            selectOptionLength = selectOption.length,
            selectedOption = selectOption.filter(':selected'),
            duration = 250; // длительность анимации 

        _this.hide();
        _this.wrap('<div class="sorting-panel-select"></div>');
        $('<div>', {
            id: 'desc-sort-panel',
            class: 'new-select',
            text: _this.children('option:disabled').text()
        }).insertAfter(_this);

        const selectHead = _this.next('#desc-sort-panel');
        const selectHeadAddClass = _this.next('.new-select');
        $('<div>', {
            id: 'desc-select__list',
            class: 'new-select__list'
        }).insertAfter(selectHead);

        const selectList = selectHead.next('#desc-select__list');
        for (let i = 1; i < selectOptionLength; i++) {
            $('<div>', {
                    class: 'new-select__item',
                    html: $('<span>', {
                        text: selectOption.eq(i).text()
                    })
                })
                .attr('data-value', selectOption.eq(i).val())
                .appendTo(selectList);
        }

        const selectItem = selectList.find('.new-select__item');
        selectList.slideUp(0);
        selectHeadAddClass.on('click', function() {
            if (!$(this).hasClass('on')) {
                selectHeadAddClass.addClass('on');
                selectList.slideDown(duration);

                selectItem.on('click', function() {
                    let chooseItem = $(this).data('value');

                    $('select').val(chooseItem).attr('selected', 'selected');
                    selectHeadAddClass.text($(this).find('span').text());

                    selectList.slideUp(duration);
                    selectHeadAddClass.removeClass('on');
                });

            } else {
                $(this).removeClass('on');
                selectList.slideUp(duration);
            }
        });
    });
    $('.sorting-select').each(function() {
        const _this = $(this),
            selectOption = _this.find('option'),
            selectOptionLength = selectOption.length,
            selectedOption = selectOption.filter(':selected'),
            duration = 250; // длительность анимации 

        _this.hide();
        _this.wrap('<div class="sorting-panel-select"></div>');
        $('<div>', {
            id: 'mob-sort-panel',
            class: 'new-select',
            text: _this.children('option:disabled').text()
        }).insertAfter(_this);

        const selectHead = _this.next('#mob-sort-panel');
        const selectHeadAddClass = _this.next('.new-select');
        $('<div>', {
            id: 'mob-select__list',
            class: 'new-select__list'
        }).insertAfter(selectHead);

        const selectList = selectHead.next('#mob-select__list');
        for (let i = 1; i < selectOptionLength; i++) {
            $('<div>', {
                    class: 'new-select__item mob-select__item',
                    html: $('<span>', {
                        text: selectOption.eq(i).text()
                    })
                })
                .attr('data-value', selectOption.eq(i).val())
                .appendTo(selectList);
        }

        const selectItem = selectList.find('.mob-select__item');

        selectList.slideUp(0);
        selectHeadAddClass.on('click', function() {
            if (!$(this).hasClass('on')) {
                selectHeadAddClass.addClass('on');
                selectList.slideDown(duration);

                selectItem.on('click', function() {
                    let chooseItem = $(this).data('value');

                    $('select').val(chooseItem).attr('selected', 'selected');
                    selectHeadAddClass.text($(this).find('span').text());

                    selectList.slideUp(duration);
                    selectHeadAddClass.removeClass('on');
                });

            } else {
                selectHeadAddClass.removeClass('on');
                selectList.slideUp(duration);
            }
        });
    });
</script>
<script src="js/filter-toggle.js"></script>
</body>

</html>