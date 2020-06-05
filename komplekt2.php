<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="stylesheet" href="assets/css/slick1.css">
    <link rel="stylesheet" href="assets/slick/slick.css">
    <link rel="stylesheet" href="assets/slick/slick-theme.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylek.css">
    <link rel="stylesheet" href="smartbasket/css/smartbasket.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <div class="wrapper">

        <?php require 'header.php'; ?>

        <div class="container">
            <div class="content">
                <div class="cont_content">
                    <div class="cont_text_v">Комплектующие</div>
                    <div class="cont_text">
                        <ul class="text_ul">
                            <a href="processor.php" class="text_a">
                                <li>Процессоры</li>
                            </a>
                            <a href="matplata.php" class="text_a">
                                <li>Материниские платы</li>
                            </a>
                            <a href="videokarta.php" class="text_a">
                                <li>Видеокарты</li>
                            </a>
                            <a href="operativka.php" class="text_a">
                                <li>Оперативная память</li>
                            </a>
                            <a href="hdd.php" class="text_a">
                                <li>Накопители HDD</li>
                            </a>
                            <a href="ssd.php" class="text_a">
                                <li>Накопители SSD</li>
                            </a>
                            <a href="korpus.php" class="text_a">
                                <li>Корпуса</li>
                            </a>
                            <a href="blok.php" class="text_a">
                                <li>Блоки питания</li>
                            </a>
                            <a href="kuler.php" class="text_a">
                                <li>Кулеры и системы охлаждения</li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="disp">
                    <div class="disp__bl">
                        <div class="disp__inp"><input type="text" placeholder="от 1000"></div>
                        <div class="disp__ce">-</div>
                        <div class="disp__inp"><input type="text" placeholder="до 20000"></div>
                    </div>
                    <div class="disp__nv">
                        <div class="disp__bt"><button type="submit">Применить фильтры</button></div>
                        <div class="disp__bt1"><button type="reset">Сбросить фильтры</button></div>
                    </div>
                </div>
            </div>

            <div class="sidebar">
                <div class="main4">
                    <div class="sl4">
                        <div class="sl__slide4">
                            <a href="#"><img src="assets/img/sl15.png" alt="Картинка слайда 1" class="sl__img"></a>

                        </div>
                        <div class="sl__slide4">
                            <a href="#"><img src="assets/img/sl20.jpg" alt="Картинка слайда 2" class="sl__img"></a>

                        </div>
                        <div class="sl__slide4">
                            <a href="#"><img src="assets/img/sl15.png" alt="Картинка слайда 3" class="sl__img"></a>

                        </div>
                        <div class="sl__slide4">
                            <a href="#"><img src="assets/img/sl20.jpg" alt="Картинка слайда 4" class="sl__img"></a>

                        </div>
                    </div>
                </div>

                <div class="recomen">
                    <p>Сейчас покупают</p>
                </div>

                <div class="slik__cont">
                    <div class="main5">
                        <div class="sl5">
                            <div class="sl__slide5">
                                <a href="https://05.ru/catalog/computers/accessories/winchester/41172/"><img
                                        src="assets/img/komplekt/hdd/38_293f1d45606cc808d20ea45cfe191864.jpg"
                                        alt="Картинка слайда 1" class="sl__img"></a>
                                <div class="product-card__title"><a
                                        href="https://05.ru/catalog/computers/accessories/winchester/41172/">Жесткий
                                        диск Seagate Barracuda ST1000DM010 1 Тб</a></div>
                                <div class="product-card__price">3 290 ₽</div>
                                <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="hdd01"
                            data-sb-product-name="Жесткий диск Seagate Barracuda ST1000DM010 1 Тб" data-sb-product-price="3290"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/hdd/38_293f1d45606cc808d20ea45cfe191864.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                            </div>
                            <div class="sl__slide5">
                                <a href="https://05.ru/catalog/computers/accessories/system_memory/62608/"><img
                                        src="assets/img/komplekt/operativka/38_6cad3c616135dc081619cb113240a82d.jpg"
                                        alt="Картинка слайда 2" class="sl__img"></a>
                                <div class="product-card__title"><a
                                        href="https://05.ru/catalog/computers/accessories/system_memory/62608/">Оперативная
                                        память Crucial CT8G4DFS8266 8 Гб DDR4</a></div>
                                <div class="product-card__price">3 140 ₽</div>
                                <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="op01"
                            data-sb-product-name="Оперативная память Crucial CT8G4DFS8266 8 Гб DDR4" data-sb-product-price="3140"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/operativka/38_6cad3c616135dc081619cb113240a82d.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                            </div>
                            <div class="sl__slide5">
                                <a href="https://05.ru/catalog/computers/accessories/ssd-nakopiteli/57331/"><img
                                        src="assets/img/komplekt/ssd/38_abaf7236659d7f6bb24541166c5e57bf.jpg"
                                        alt="Картинка слайда 3" class="sl__img"></a>
                                <div class="product-card__title"><a
                                        href="https://05.ru/catalog/computers/accessories/ssd-nakopiteli/57331/">Накопитель
                                        SSD Kingston A400 SA400S37 240 Гб</a></div>
                                <div class="product-card__price">3 640 ₽</div>
                                <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="ssd02"
                            data-sb-product-name="Накопитель SSD Kingston A400 SA400S37 240 Гб"
                            data-sb-product-price="3640" data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/ssd/38_f1c2e9cb663cdd685a3747148d18b07d.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                            </div>
                            <div class="sl__slide5">
                                <a href="https://05.ru/catalog/computers/accessories/processor/81138/"><img
                                        src="assets/img/komplekt/processor/38_aa373e088e2a07c035474cbb21b77fca.jpg"
                                        alt="Картинка слайда 4" class="sl__img"></a>
                                <div class="product-card__title"><a
                                        href="https://05.ru/catalog/computers/accessories/processor/81138/">Процессор
                                        AMD Ryzen 5 2600 OEM</a></div>
                                <div class="product-card__price">8 990 ₽</div>
                                <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="p02"
                            data-sb-product-name="Процессор AMD Ryzen 5 2600 OEM" data-sb-product-price="8990"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/processor/38_10ee527f36bf104fc5380cb91cab1d14.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                            </div>
                            <div class="sl__slide5">
                                <a href="https://05.ru/catalog/computers/accessories/winchester/59506/"><img
                                        src="assets/img/komplekt/hdd/38_aa373e088e2a07c035474cbb21b77fca.jpg"
                                        alt="Картинка слайда 3" class="sl__img"></a>
                                <div class="product-card__title"><a
                                        href="https://05.ru/catalog/computers/accessories/winchester/59506/">Жесткий
                                        диск Western Digital Purple (WD30PURZ) 3 Тб</a></div>
                                <div class="product-card__price">7 990 ₽</div>
                                <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="hdd05"
                            data-sb-product-name="Жесткий диск Western Digital Purple (WD30PURZ) 3 Тб" data-sb-product-price="7990"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/hdd/38_aa373e088e2a07c035474cbb21b77fca.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                            </div>
                            <div class="sl__slide5">
                                <a href="https://05.ru/catalog/computers/accessories/video_board/87992/"><img
                                        src="assets/img/komplekt/videokarta/38_9d5b5ebaf72c374a0ca8416a068c8be0.jpg"
                                        alt="Картинка слайда 4" class="sl__img"></a>
                                <div class="product-card__title"><a
                                        href="https://05.ru/catalog/computers/accessories/video_board/87992/">Видеокарта
                                        MSI GeForce GTX 1650 GAMING X 4 Гб</a></div>
                                <div class="product-card__price">13 490 ₽</div>
                                <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="v04"
                            data-sb-product-name="Видеокарта MSI GeForce GTX 1650 GAMING X 4 Гб" data-sb-product-price="13490"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/videokarta/38_9d5b5ebaf72c374a0ca8416a068c8be0.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                            </div>
                            <div class="sl__slide5">
                                <a href="https://05.ru/catalog/computers/accessories/tower/76333/"><img src="
                                    assets/img/komplekt/korpus/38_8d228f58df9e9ebc78d7d0c04e539f34.jpg"
                                    alt="Картинка слайда 3" class="sl__img"></a>
                                <div class="product-card__title"><a
                                        href="https://05.ru/catalog/computers/accessories/tower/76333/">Корпус Zalman i3
                                        Edge без БП черный</a></div>
                                <div class="product-card__price">4 040 ₽</div>
                                <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="korpus01"
                            data-sb-product-name="Корпус Zalman i3 Edge без БП черный" data-sb-product-price="4040"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/korpus/38_8d228f58df9e9ebc78d7d0c04e539f34.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                            </div>
                            <div class="sl__slide5">
                                <a href="https://05.ru/catalog/computers/accessories/power_unit/3617/"><img
                                        src="assets/img/komplekt/blok/38_44f93812a48fa9f3aa7a9a87df25f275.jpg"
                                        alt="Картинка слайда 3" class="sl__img"></a>
                                <div class="product-card__title"><a
                                        href="https://05.ru/catalog/computers/accessories/power_unit/3617/">Блок питания
                                        Chieftec GPS-650A8 650 Вт</a></div>
                                <div class="product-card__price">3 890 ₽</div>
                                <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="block02"
                            data-sb-product-name="Блок питания Chieftec GPS-650A8 650 Вт" data-sb-product-price="3890"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/blok/38_44f93812a48fa9f3aa7a9a87df25f275.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="recomen">
                    <p>Комплектующие</p>
                </div>
                <div class="catatl__cen">


                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/ssd/38_d81ea5a646c9323ccaab9c993444c7a6.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/ssd-nakopiteli/89106/">Накопитель SSD
                                Samsung 970 EVO Plus MZ-V7S500BW 500 Гб</a></div>
                        <div class="product-card__price">10 270 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="ssd09"
                            data-sb-product-name="Накопитель SSD Samsung 970 EVO Plus MZ-V7S500BW 500 Гб"
                            data-sb-product-price="10270" data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/ssd/38_d81ea5a646c9323ccaab9c993444c7a6.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/blok/38_ece15ddd731aa84b81b0f0ab77e865a5.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/power_unit/71530/">Блок питания
                                Thermaltake SPR-0600NHSAW 600 Вт</a></div>
                        <div class="product-card__price">4 390 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="block03"
                            data-sb-product-name="Блок питания Thermaltake SPR-0600NHSAW 600 Вт" data-sb-product-price="4390"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/blok/38_ece15ddd731aa84b81b0f0ab77e865a5.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/korpus/38_bf7f4c323e56b373091d978a7ddabb6f.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/tower/69955/">Корпус Zalman N3 без БП
                                черный</a></div>
                        <div class="product-card__price">3 340 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="korpus03"
                            data-sb-product-name="Корпус Zalman N3 без БП черный" data-sb-product-price="3340"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/korpus/38_bf7f4c323e56b373091d978a7ddabb6f.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/kuler/38_c2901301d0d1b570826b76f96854a8d1.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/cooler/92032/">Кулер Deepcool GAMMAXX
                                300 FURY</a></div>
                        <div class="product-card__price">1 150 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="kuler02"
                            data-sb-product-name="Кулер Deepcool GAMMAXX 300 FURY" data-sb-product-price="1150"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/kuler/38_c2901301d0d1b570826b76f96854a8d1.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/operativka/38_bb527dc926c5d8844c2f0c00a1e668f0.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/system_memory/99037/">Оперативная
                                память Patriot PVB416G300C6K 16 Гб DDR4</a></div>
                        <div class="product-card__price">6 690 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="op07"
                            data-sb-product-name="Оперативная память Patriot PVB416G300C6K 16 Гб DDR4" data-sb-product-price="6690"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/operativka/38_bb527dc926c5d8844c2f0c00a1e668f0.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/videokarta/38_f209619df039786f6ae803e47912dd04.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/video_board/91971/">Видеокарта MSI
                                GeForce RTX 2060 Super GAMING X 8 Гб</a></div>
                        <div class="product-card__price">38 290 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="v07"
                            data-sb-product-name="Видеокарта MSI GeForce RTX 2060 Super GAMING X 8 Гб" data-sb-product-price="38290"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/videokarta/38_7e437cedaccdd4acaa8f404ffc53b439.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/blok/38_752ee873f456cb736f894a178c5fd10f.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/power_unit/48725/">Блок питания
                                Chieftec FORCE CPS-650S 650 Вт</a></div>
                        <div class="product-card__price">4 790 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="block04"
                            data-sb-product-name="Блок питания Chieftec FORCE CPS-650S 650 Вт" data-sb-product-price="4790"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/blok/38_752ee873f456cb736f894a178c5fd10f.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/korpus/38_2c224bbc134c0aa43d99a07bc0cf66fb.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/tower/84296/">Корпус Zalman S3 без БП
                                черный</a></div>
                        <div class="product-card__price">3 000 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="korpus03"
                            data-sb-product-name="Корпус Zalman S3 без БП черный" data-sb-product-price="3000"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/korpus/38_2c224bbc134c0aa43d99a07bc0cf66fb.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/kuler/38_5606b6adc51350e0f0752834f23fd8af.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/cooler/21325/">Кулер Deepcool Gammaxx
                                200T</a></div>
                        <div class="product-card__price">1 130 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="kuler04"
                            data-sb-product-name="Кулер Deepcool Gammaxx 200T" data-sb-product-price="1130"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/kuler/38_5606b6adc51350e0f0752834f23fd8af.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/blok/38_597807e6ae88d70586a88ce48d378de3.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/power_unit/94621/">Блок питания
                                BOOSTER ATX-450W8F 450 Вт</a></div>
                        <div class="product-card__price">1 190 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="block05"
                            data-sb-product-name="Блок питания BOOSTER ATX-450W8F 450 Вт" data-sb-product-price="1190"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/blok/38_597807e6ae88d70586a88ce48d378de3.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/operativka/38_15cd0a81ff76b9c58ebb0e97b90b4b75.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/system_memory/41863/">Оперативная
                                память Kingston KVR16S11/8 8 Гб DDR3</a></div>
                        <div class="product-card__price">2 990 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="op09"
                            data-sb-product-name="Оперативная память Kingston KVR16S11/8 8 Гб DDR3" data-sb-product-price="2990"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/operativka/38_15cd0a81ff76b9c58ebb0e97b90b4b75.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/videokarta/38_805f3a475bff9b13aa75d2b34a13d2ba.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/video_board/88658/">Видеокарта
                                GIGABYTE GeForce GTX 1650 GAMING OC 4 Гб</a></div>
                        <div class="product-card__price">13 490 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="v04"
                            data-sb-product-name="Видеокарта MSI GeForce GTX 1650 GAMING X 4 Гб" data-sb-product-price="13490"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/videokarta/38_9d5b5ebaf72c374a0ca8416a068c8be0.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/korpus/38_964548b6a3f78b83aa9f900fb2c957af.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/tower/94745/">Корпус GAMDIAS Apollo M1
                                без БП черный</a></div>
                        <div class="product-card__price">7 390 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="korpus04"
                            data-sb-product-name="Корпус GAMDIAS Apollo M1 без БП черный" data-sb-product-price="7390"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/korpus/38_964548b6a3f78b83aa9f900fb2c957af.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/blok/38_a862f5d89787dabda16d45f71fe5744c.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/power_unit/77439/">Блок питания
                                AeroCool VX-450 PLUS 450 Вт</a></div>
                        <div class="product-card__price">2 190 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="block06"
                            data-sb-product-name="Блок питания AeroCool VX-450 PLUS 450 Вт" data-sb-product-price="2190"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/blok/38_a862f5d89787dabda16d45f71fe5744c.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/kuler/38_ad0d0739bb553a41e7f46ba054f9cc40.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/cooler/29200/">Кулер Deepcool GAMMA
                                ARCHER PRO</a></div>
                        <div class="product-card__price">990 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="kuler04"
                            data-sb-product-name="Кулер Deepcool GAMMA ARCHER PRO" data-sb-product-price="990"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/kuler/38_ad0d0739bb553a41e7f46ba054f9cc40.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/operativka/38_52df179ea7c8cdb191853151bc27154a.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/system_memory/100239/">Оперативная
                                память ADATA AX4U320038G16A-ST41 8 Гб DDR4</a></div>
                        <div class="product-card__price">3 990 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="op10"
                            data-sb-product-name="Оперативная память ADATA AX4U320038G16A-ST41 8 Гб DDR4" data-sb-product-price="3990"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/operativka/38_52df179ea7c8cdb191853151bc27154a.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/blok/38_7675fe6123141b747b316547835de643.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/power_unit/20473/">Блок питания
                                Chieftec Smart GPS-500A8 500 Вт</a></div>
                        <div class="product-card__price">3 490 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="block07"
                            data-sb-product-name="Блок питания Chieftec Smart GPS-500A8 500 Вт" data-sb-product-price="3490"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/blok/38_7675fe6123141b747b316547835de643.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/korpus/38_61ba1b1e756f759c9e51197231c8bebd.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/tower/3420/">Корпус Zalman Z1 без БП
                                черный</a></div>
                        <div class="product-card__price">3 140 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="korpus05"
                            data-sb-product-name="Корпус Zalman Z1 без БП черный" data-sb-product-price="3140"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/korpus/38_61ba1b1e756f759c9e51197231c8bebd.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/videokarta/38_032a7ce32861b082e2e1f0e13c11a63b.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/video_board/88657/">Видеокарта Palit
                                GeForce GTX 1660 Ti STORM X OC 6 Гб</a></div>
                        <div class="product-card__price">23 560 ₽</div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="korpus20"
                            data-sb-product-name="Видеокарта Palit
                                GeForce GTX 1660 Ti STORM X OC 6 Гб" data-sb-product-price="23560"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/videokarta/38_032a7ce32861b082e2e1f0e13c11a63b.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/kuler/38_7b06df5aec9b8750a076944ec2b02ff9.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/cooler/98451/">Кулер ID-Cooling
                                ID-CPU-SE-224M-B</a></div>
                        <div class="product-card__price">1 610 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="kuler05"
                            data-sb-product-name="Кулер ID-Cooling ID-CPU-SE-224M-B" data-sb-product-price="1610"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/kuler/38_7b06df5aec9b8750a076944ec2b02ff9.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/operativka/38_1f82edbb318337ae1655e536007ca8f3.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/system_memory/92091/">Оперативная
                                память Kingston HX434C16FB3/8 8 Гб DDR4</a></div>
                        <div class="product-card__price">4 560 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="op11"
                            data-sb-product-name="Оперативная память Kingston HX434C16FB3/8 8 Гб DDR4" data-sb-product-price="4560"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/operativka/38_1f82edbb318337ae1655e536007ca8f3.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/blok/38_66d4a03a48cb35e006b5871ff6359307.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/power_unit/94619/">Блок питания
                                BOOSTER ATX-400W8F 400 Вт</a></div>
                        <div class="product-card__price">920 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="block08"
                            data-sb-product-name="Блок питания BOOSTER ATX-400W8F 400 Вт" data-sb-product-price="920"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/blok/38_66d4a03a48cb35e006b5871ff6359307.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/kuler/38_ee893025d1315ab5d98aef3d1eb1d9c7.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/cooler/64511/">Кулер ID-Cooling DK-03
                                Halo Intel</a></div>
                        <div class="product-card__price">570 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="kuler06"
                            data-sb-product-name="Кулер ID-Cooling DK-03 Halo Intel" data-sb-product-price="570"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/kuler/38_ee893025d1315ab5d98aef3d1eb1d9c7.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/korpus/38_8fe948cb7e542c08a438e18e4f5c67d6.png" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/tower/92036/">Корпус AeroCool TOR PRO
                                без БП черный</a></div>
                        <div class="product-card__price">7 830 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="korpus06"
                            data-sb-product-name="Корпус AeroCool TOR PRO без БП черный" data-sb-product-price="7830"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/korpus/38_8fe948cb7e542c08a438e18e4f5c67d6.png">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/blok/38_050fe82a6aff94f8a7c1a3d9881d483c.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/power_unit/30383/">Блок питания
                                Thermaltake TRS-0600P-2 600 Вт</a></div>
                        <div class="product-card__price">4 590 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="block09"
                            data-sb-product-name="Блок питания Thermaltake TRS-0600P-2 600 Вт" data-sb-product-price="4590"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/blok/38_050fe82a6aff94f8a7c1a3d9881d483c.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>


                    <div class="list__st">
                        <a href="komlekt.php">
                            <div class="list__btn">1</div>
                        </a>
                        <a href="komplekt2.php">
                            <div class="list__btn1">2</div>
                        </a>
                    </div>

                </div>

            </div>
        </div>

        <?php require 'footer.php'; ?>

    </div>

</body>
</html>
