<footer class="footer">
    <div class="container">
        <div class="footer-wrapper">
            <div class="footer-contacts footer-list-container">
                <ul class="footer-list">
                    <li class="footer-list-item">
                        <a href="tel:+7 (495) 722-88-00" class="footer-list-item-link">
                            <span class="footer-list-item__icon">
                                <svg class="icon icon-phone">
                                    <use xlink:href="img/icons/sprite.svg#phone"></use>
                                </svg>
                            </span>
                            <span class="footer-list-item__text">+7 (495) 722-88-00</span>
                        </a>
                    </li>
                    <li class="footer-list-item">
                        <a href="tel:+7 (495) 116-58-38" class="footer-list-item-link">
                            <span class="footer-list-item__icon"></span>+7 (495) 116-58-38
                        </a>
                    </li>
                    <li class="footer-list-item">
                        <a href="mailto:magmatika08@gmail.com" class="footer-list-item-link">
                            <span class="footer-list-item__icon">
                                <svg class="icon icon-mail">
                                    <use xlink:href="img/icons/sprite.svg#mail"></use>
                                </svg>
                            </span>
                            <span class="footer-list-item__text">magmatika08@gmail.com</span>
                        </a>
                    </li>
                    <li class="footer-list-item">
                        <a href="" class="footer-list-item-link">
                            <span class="footer-list-item__icon">
                                <svg class="icon icon-share">
                                    <use xlink:href="img/icons/sprite.svg#share"></use>
                                </svg>
                            </span>
                            <svg class="icon icon-inst">
                                <use xlink:href="img/icons/sprite.svg#instagram"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="footer-list-item">
                        <a href="" class="footer-list-item-link">
                            <span class="footer-list-item__icon">
                                <svg class="icon icon-map">
                                    <use xlink:href="img/icons/sprite.svg#map"></use>
                                </svg>
                            </span>
                            <span class="footer-list-item__text">
                                Москва, Нахимовский пр-т, 24,
                                ЦДИ "Экспострой", пав. 3, стенд 433
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-list-container">
                <h3 class="footer-title">Каталог</h3>
                <ul class="footer-list-prilist">
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="text-copyright">© ТПК “Магматика”</p>
            <a href="user-agreement.php" class="text-copyright link-term-services">Пользовательское соглашение</a>
        </div>
    </div>
</footer>
<script src="js/main.js"></script>
<script>
    showCatalogList2("footer-list-prilist")

    function showCatalogList2(classWrap = "filters-group-category") {
        ajaxGet("https://magmatika.ru/api/public/categories", "", (answer) => {
            let list = ""
            let listAll = JSON.parse(answer)
            let listMas = []
            listAll.forEach((elem) => {
                if (elem.status != "ENABLED") return
                if (!elem.link || !elem.name) return
                listMas.push(elem.link)
                list += `<li class="footer-list-item"><a href="/catalog.php?categoryLink=${elem.link}" class="footer-list-item-link">${elem.name}</a></li>`
            })
            document.querySelector(`.${classWrap}`).innerHTML = list
        })
    }
</script>