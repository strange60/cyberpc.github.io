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
                                    src="assets/img/komplekt/processor/38_79a232d8ac15e26bc975b057f0174d47.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/processor/87204/">Процессор Intel Core
                                i5-9400F OEM</a></div>
                        <div class="product-card__price">13 690 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="p01"
                            data-sb-product-name="Процессор Intel Core i5-9400F OEM" data-sb-product-price="13690"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/processor/38_79a232d8ac15e26bc975b057f0174d47.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/hdd/38_293f1d45606cc808d20ea45cfe191864.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/winchester/41172/">Жесткий диск
                                Seagate Barracuda ST1000DM010 1 Тб</a></div>
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
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/operativka/38_6cad3c616135dc081619cb113240a82d.jpg" alt="">
                            </div>
                        </div>
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
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/ssd/38_abaf7236659d7f6bb24541166c5e57bf.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/ssd-nakopiteli/83213/">Накопитель SSD
                                Crucial BX500 CT240BX500SSD1 240 Гб</a></div>
                        <div class="product-card__price">3 570 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="ssd01"
                            data-sb-product-name="Накопитель SSD Crucial BX500 CT240BX500SSD1 240 Гб"
                            data-sb-product-price="3570" data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/ssd/38_abaf7236659d7f6bb24541166c5e57bf.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/hdd/38_ddbb05fbae9f6969858775b2b00f6d09.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/winchester/78663/">Жесткий диск
                                Seagate Barracuda ST2000DM008 2 Тб</a></div>
                        <div class="product-card__price">5 390 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="hdd02"
                            data-sb-product-name="Жесткий диск Seagate Barracuda ST2000DM008 2 Тб" data-sb-product-price="5390"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/hdd/38_ddbb05fbae9f6969858775b2b00f6d09.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>

                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/ssd/38_f1c2e9cb663cdd685a3747148d18b07d.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/ssd-nakopiteli/57331/">Накопитель SSD
                                Kingston A400 SA400S37 240 Гб</a></div>
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
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/operativka/38_4dde9c42b42dadeef4821f0adec0d08c.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/system_memory/43614/">Оперативная
                                память Crucial CT8G4DFS824A 8 Гб DDR4</a></div>
                        <div class="product-card__price">3 090 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="op02"
                            data-sb-product-name="Оперативная память Crucial CT8G4DFS824A 8 Гб DDR4" data-sb-product-price="3090"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/operativka/38_4dde9c42b42dadeef4821f0adec0d08c.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/ssd/38_326b62a5f06ec5d7fefd27d55ea2ddc1.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/ssd-nakopiteli/83219/">Накопитель SSD
                                Western Digital Green WDS240G2G0A 240 Гб</a></div>
                        <div class="product-card__price">3 340 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="ssd03"
                            data-sb-product-name="Накопитель SSD Western Digital Green WDS240G2G0A 240 Гб"
                            data-sb-product-price="3340" data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/ssd/38_326b62a5f06ec5d7fefd27d55ea2ddc1.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/processor/38_10ee527f36bf104fc5380cb91cab1d14.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/processor/81138/">Процессор AMD Ryzen
                                5 2600 OEM</a></div>
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
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/ssd/38_757cb59b8baa540fc2396bedd61acb49.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/ssd-nakopiteli/48194/">Накопитель SSD
                                Kingston A400 SA400S37 120 Гб</a></div>
                        <div class="product-card__price">2 650 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="ssd04"
                            data-sb-product-name="Накопитель SSD Kingston A400 SA400S37 120 Гб"
                            data-sb-product-price="2650" data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/ssd/38_757cb59b8baa540fc2396bedd61acb49.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/hdd/38_ed905199cc76f0d54459cad558d120f1.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/winchester/65138/">Жесткий диск
                                Western Digital Purple (WD60PURZ) 6 Тб</a></div>
                        <div class="product-card__price">15 990 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="hdd03"
                            data-sb-product-name="Жесткий диск Western Digital Purple (WD60PURZ) 6 Тб" data-sb-product-price="15990"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/hdd/38_ed905199cc76f0d54459cad558d120f1.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/hdd/38_624416516ffda942e9f717253ec11b63.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/winchester/57341/">Жесткий диск
                                Western Digital Purple (WD40PURZ) 4 Тб</a></div>
                        <div class="product-card__price">9 990 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="hdd04"
                            data-sb-product-name="Жесткий диск Western Digital Purple (WD40PURZ) 4 Тб" data-sb-product-price="9990"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/hdd/38_624416516ffda942e9f717253ec11b63.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/ssd/38_d8dd3a021416ac05aa0b78585f3078fe.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/ssd-nakopiteli/75863/">Накопитель SSD
                                Samsung 860 EVO MZ-76E250BW 250 Гб</a></div>
                        <div class="product-card__price">4 190 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="ssd05"
                            data-sb-product-name="Накопитель SSD Samsung 860 EVO MZ-76E250BW 250 Гб"
                            data-sb-product-price="4190" data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/ssd/38_d8dd3a021416ac05aa0b78585f3078fe.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/processor/38_aa373e088e2a07c035474cbb21b77fca.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/processor/89788/">Процессор AMD Ryzen
                                5 3600 OEM</a></div>
                        <div class="product-card__price">15 190 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="p03"
                            data-sb-product-name="Процессор AMD Ryzen 5 3600 OEM" data-sb-product-price="15190"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/processor/38_aa373e088e2a07c035474cbb21b77fca.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/hdd/38_aa373e088e2a07c035474cbb21b77fca.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/winchester/59506/">Жесткий диск
                                Western Digital Purple (WD30PURZ) 3 Тб</a></div>
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
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/matplata/38_9bf26d1198986e9435b0c7c67ced5180.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/motherboard/84667/">Материнская плата
                                GIGABYTE H310M H 2.0</a></div>
                        <div class="product-card__price">4 240 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="m01"
                            data-sb-product-name="Материнская плата GIGABYTE H310M H 2.0" data-sb-product-price="4240"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/matplata/38_9bf26d1198986e9435b0c7c67ced5180.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/videokarta/38_c29a439010cc91d39bb4cb605718052a.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/video_board/89993/">Видеокарта Palit
                                GeForce GTX 1660 DUAL 6 Гб</a></div>
                        <div class="product-card__price">19 990 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="v08"
                            data-sb-product-name="Видеокарта MSI GeForce GTX 1660 GAMING X 6 Гб" data-sb-product-price="19990"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/videokarta/38_f209619df039786f6ae803e47912dd04.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/processor/38_e79e668b91e6b79dbc9f85537383e245.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/processor/73322/">Процессор AMD Ryzen
                                3 2200G OEM</a></div>
                        <div class="product-card__price">7 190 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="p04"
                            data-sb-product-name="Процессор AMD Ryzen 3 2200G OEM" data-sb-product-price="7190"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/processor/38_e79e668b91e6b79dbc9f85537383e245.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/matplata/38_694dfaee56418e740cc1c82928613d2e.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/motherboard/79444/">Материнская плата
                                GIGABYTE B450M DS3H</a></div>
                        <div class="product-card__price">6 040 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="m02"
                            data-sb-product-name="Материнская плата GIGABYTE B450M DS3H" data-sb-product-price="6040"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/matplata/38_694dfaee56418e740cc1c82928613d2e.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/processor/38_6e8a194333bb461bc0a871418b1df4a0.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/processor/74869/">Процессор Intel
                                Pentium G5400 OEM</a></div>
                        <div class="product-card__price">4 540 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="p05"
                            data-sb-product-name="Процессор Intel
                                Pentium G5400 OEM" data-sb-product-price="4540"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/processor/38_6e8a194333bb461bc0a871418b1df4a0.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/operativka/38_694dfaee56418e740cc1c82928613d2e.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/system_memory/20305/">Оперативная
                                память Crucial CT102464BD160B 8 Гб DDR3</a></div>
                        <div class="product-card__price">4 090 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="op03"
                            data-sb-product-name="Оперативная память Crucial CT102464BD160B 8 Гб DDR3" data-sb-product-price="4090"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/operativka/38_694dfaee56418e740cc1c82928613d2e.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/videokarta/38_ef8a4eb289f5d7f575d7abb9688ef7ad.png" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/video_board/99551/">Видеокарта MSI
                                GeForce GTX 1650 Super GAMING X 4 Гб</a></div>
                        <div class="product-card__price">16 490 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="v01"
                            data-sb-product-name="Видеокарта MSI GeForce GTX 1650 Super GAMING X 4 Гб" data-sb-product-price="16490"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/videokarta/38_ef8a4eb289f5d7f575d7abb9688ef7ad.png">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/processor/38_5c539d442f76c79f1289998be7b1c5b0.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/processor/89782/">Процессор Intel Core
                                i7-9700 OEM</a></div>
                        <div class="product-card__price">31 990 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="p06"
                            data-sb-product-name="Процессор Intel Core
                                i7-9700 OEM" data-sb-product-price="31990"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/processor/38_5c539d442f76c79f1289998be7b1c5b0.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/processor/38_c0faff5454f6269b002ea04fad64fa8e.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/processor/70155/">Процессор Intel Core
                                i5-8400 OEM</a></div>
                        <div class="product-card__price">15 990 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="p07"
                            data-sb-product-name="Процессор Intel Core
                                i5-8400 OEM" data-sb-product-price="15990"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/processor/38_c0faff5454f6269b002ea04fad64fa8e.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/blok/38_bb11ee950d3135ded7a320f8c110b7b1.png" alt=""></div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/power_unit/77750/">Блок питания
                                AeroCool VX-600 PLUS 600 Вт</a></div>
                        <div class="product-card__price">3 140 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="block01"
                            data-sb-product-name="Блок питания AeroCool VX-600 PLUS 600 Вт" data-sb-product-price="3140"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/blok/38_bb11ee950d3135ded7a320f8c110b7b1.png">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/videokarta/38_d0504438c9bb26ad054093459dfea021.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/video_board/66753/">Видеокарта
                                GIGABYTE GeForce GT 1030 GV-N1030OC-2GI 2 Гб</a></div>
                        <div class="product-card__price">6 490 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="v02"
                            data-sb-product-name="Видеокарта GIGABYTE GeForce GT 1030 GV-N1030OC-2GI 2 Гб" data-sb-product-price="6490"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/videokarta/38_d0504438c9bb26ad054093459dfea021.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/ssd/38_91fbf8ecbb6e06c171e1b3f6032c0178.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/ssd-nakopiteli/90349/">Накопитель SSD
                                Western Digital Green WDS120G2G0A 120 Гб</a></div>
                        <div class="product-card__price">2 770 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="ssd06"
                            data-sb-product-name="Накопитель SSD Western Digital Green WDS120G2G0A 120 Гб"
                            data-sb-product-price="2770" data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/ssd/38_91fbf8ecbb6e06c171e1b3f6032c0178.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/operativka/38_3d9a6e908e5c565441cc42636ae758f9.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/system_memory/96930/">Оперативная
                                память Kingston HyperX Fury HX430C15FB3A/16 16 Гб DDR4</a></div>
                        <div class="product-card__price">7 590 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="op04"
                            data-sb-product-name="Оперативная память Kingston HyperX Fury HX430C15FB3A/16 16 Гб DDR4" data-sb-product-price="7590"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/operativka/38_3d9a6e908e5c565441cc42636ae758f9.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/videokarta/38_c69a7c8efa7f9d3c830a77908e50a51f.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/video_board/81798/">Видеокарта MSI
                                GeForce GT 1030 OC AERO 2 Гб</a></div>
                        <div class="product-card__price">6 290 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="v03"
                            data-sb-product-name="Видеокарта MSI GeForce GT 1030 OC AERO 2 Гб" data-sb-product-price="6290"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/videokarta/38_c69a7c8efa7f9d3c830a77908e50a51f.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/ssd/38_5d5b6c6c4c9db2d713afaf5c1ab1d15b.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/ssd-nakopiteli/94968/">Накопитель SSD
                                GIGABYTE GP-GSTFS31120GNTD 120 Гб</a></div>
                        <div class="product-card__price">2 770 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="ssd07"
                            data-sb-product-name="Накопитель SSD GIGABYTE GP-GSTFS31120GNTD 120 Гб"
                            data-sb-product-price="2770" data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/ssd/38_5d5b6c6c4c9db2d713afaf5c1ab1d15b.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/processor/38_fd62254b24f70861e9dbcf69d7bddcae.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/processor/78712/">Процессор AMD Ryzen
                                5 2600 BOX</a></div>
                        <div class="product-card__price">10 690 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="p08"
                            data-sb-product-name="Процессор AMD Ryzen
                                5 2600 BOX" data-sb-product-price="10690"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/processor/38_fd62254b24f70861e9dbcf69d7bddcae.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/matplata/38_bd61e7562590d5b90fbfb42976fab11c.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/motherboard/92023/">Материнская плата
                                GIGABYTE B365 HD3</a></div>
                        <div class="product-card__price">7 990 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="m03"
                            data-sb-product-name="Материнская плата GIGABYTE B365 HD3" data-sb-product-price="7990"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/matplata/38_bd61e7562590d5b90fbfb42976fab11c.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/operativka/38_7cd253f851e9e6817a2053cf02c3381c.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/system_memory/83912/">Оперативная
                                память Crucial CT8G4SFS8266 8 Гб DDR4</a></div>
                        <div class="product-card__price">3 290 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="op05"
                            data-sb-product-name="Оперативная память Crucial CT8G4SFS8266 8 Гб DDR4" data-sb-product-price="3290"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/operativka/38_7cd253f851e9e6817a2053cf02c3381c.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/ssd/38_75d892722109e5313a9b410d0f33a5e7.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/ssd-nakopiteli/76681/">Накопитель SSD
                                Western Digital Green WDS240G2G0B 240 Гб</a></div>
                        <div class="product-card__price">3 290 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="ssd08"
                            data-sb-product-name="Накопитель SSD Western Digital Green WDS240G2G0B 240 Гб"
                            data-sb-product-price="3290" data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/ssd/38_75d892722109e5313a9b410d0f33a5e7.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/videokarta/38_9d5b5ebaf72c374a0ca8416a068c8be0.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/video_board/87992/">Видеокарта MSI
                                GeForce GTX 1650 GAMING X 4 Гб</a></div>
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
                                    src="assets/img/komplekt/videokarta/38_bd569150db847e82e23a8943d46d360b.png" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/video_board/100233/">Видеокарта
                                GIGABYTE GeForce GTX 1650 Super OC WINDFORCE 4 Гб</a></div>
                        <div class="product-card__price">16 490 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="v05"
                            data-sb-product-name="Видеокарта GIGABYTE GeForce GTX 1650 Super OC WINDFORCE 4 Гб" data-sb-product-price="16490"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/videokarta/38_bd569150db847e82e23a8943d46d360b.png">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/matplata/38_9b3e96488cb79634f8b61dc34d47c0bf.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/motherboard/90025/">Материнская плата
                                GIGABYTE B450M S2H</a></div>
                        <div class="product-card__price">4 690 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="m04"
                            data-sb-product-name="Материнская плата GIGABYTE B450M S2H" data-sb-product-price="4690"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/matplata/38_9b3e96488cb79634f8b61dc34d47c0bf.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/korpus/38_4b5731cafafd13ee14d5c8b6cbfa425d.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/tower/69963/">Корпус Zalman N2 без БП
                                черный</a></div>
                        <div class="product-card__price">2 990 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="korpus02"
                            data-sb-product-name="Корпус Zalman N2 без БП черный" data-sb-product-price="2990"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/korpus/38_4b5731cafafd13ee14d5c8b6cbfa425d.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/processor/38_9ea918f47557fd3afc34430293ecebdc.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/processor/64400/">Процессор AMD Ryzen
                                3 1200 OEM</a></div>
                        <div class="product-card__price">4 390 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="p09"
                            data-sb-product-name="Процессор AMD Ryzen
                                3 1200 OEM" data-sb-product-price="4390"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/processor/38_9ea918f47557fd3afc34430293ecebdc.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/processor/38_a056e98a07710fb4eaecc60d46f99c4a.png" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/processor/90382/">Процессор AMD Ryzen
                                5 3600 BOX</a></div>
                        <div class="product-card__price">16 690 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="p10"
                            data-sb-product-name="Процессор AMD Ryzen
                                5 3600 BOX" data-sb-product-price="16690"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/processor/38_a056e98a07710fb4eaecc60d46f99c4a.png">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img src="assets/img/komplekt/kuler/38_56672bf7119beee7d56e3c0eec486925.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a href="https://05.ru/catalog/computers/accessories/cooler/41232/">Кулер ID-Cooling SE-213V2</a></div>
                        <div class="product-card__price">1 190 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="kuler01"
                            data-sb-product-name="Кулер ID-Cooling SE-213V2" data-sb-product-price="1190"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/kuler/38_56672bf7119beee7d56e3c0eec486925.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/videokarta/38_b9ad120f64e3b8c54ec7c3c054569ba3.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/video_board/88350/">Видеокарта MSI
                                GeForce GTX 1660 ARMOR OC 6 Гб</a></div>
                        <div class="product-card__price">18 490 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="v06"
                            data-sb-product-name="Видеокарта MSI GeForce GTX 1660 ARMOR OC 6 Гб" data-sb-product-price="18490"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/videokarta/38_b9ad120f64e3b8c54ec7c3c054569ba3.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/matplata/38_24406735427f50698955dd47db2e017c.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/motherboard/80955/">Материнская плата
                                GIGABYTE Z390 UD</a></div>
                        <div class="product-card__price">10 390 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="m05"
                            data-sb-product-name="Материнская плата GIGABYTE Z390 UD" data-sb-product-price="10390"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/matplata/38_24406735427f50698955dd47db2e017c.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/videokarta/38_7e437cedaccdd4acaa8f404ffc53b439.jpg" alt="">
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
                                    src="assets/img/komplekt/operativka/38_3bab64f2dfc3ae8f76b901d4a2e9ffe0.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/system_memory/25329/">Оперативная
                                память Kingston ValueRAM KVR16LS11 4 Гб DDR3</a></div>
                        <div class="product-card__price">1 950 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="op06"
                            data-sb-product-name="Оперативная память Kingston ValueRAM KVR16LS11 4 Гб DDR3" data-sb-product-price="1950"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/operativka/38_3bab64f2dfc3ae8f76b901d4a2e9ffe0.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/processor/38_ef714c6c39b352afa3138a44dfb28e63.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/processor/89785/">Процессор AMD Ryzen
                                3 3200G OEM</a></div>
                        <div class="product-card__price">7 690 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="p11"
                            data-sb-product-name="Процессор AMD Ryzen
                                3 3200G OEM" data-sb-product-price="7690"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/processor/38_ef714c6c39b352afa3138a44dfb28e63.jpg">
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
                                href="https://05.ru/catalog/computers/accessories/video_board/86980/">Видеокарта MSI
                                GeForce GTX 1660 GAMING X 6 Гб</a></div>
                        <div class="product-card__price">19 990 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="v08"
                            data-sb-product-name="Видеокарта MSI GeForce GTX 1660 GAMING X 6 Гб" data-sb-product-price="19990"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/videokarta/38_f209619df039786f6ae803e47912dd04.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img src="assets/img/komplekt/kuler/38_c2901301d0d1b570826b76f96854a8d1.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a href="https://05.ru/catalog/computers/accessories/cooler/92032/">Кулер Deepcool GAMMAXX 300 FURY</a></div>
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
                                    src="assets/img/komplekt/blok/38_44f93812a48fa9f3aa7a9a87df25f275.jpg" alt=""></div>
                        </div>
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
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/korpus/38_8d228f58df9e9ebc78d7d0c04e539f34.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/tower/76333/">Корпус Zalman i3 Edge
                                без БП черный</a></div>
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

                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img
                                    src="assets/img/komplekt/kuler/38_04b1a1735adfc40d4d92dc8128e06f0f.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/accessories/cooler/100681/">СВО Gigabyte AORUS
                                LIQUID COOLER 280</a></div>
                        <div class="product-card__price">17 320 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="kuler07"
                            data-sb-product-name="СВО Gigabyte AORUS LIQUID COOLER 280" data-sb-product-price="17320"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/komplekt/kuler/38_04b1a1735adfc40d4d92dc8128e06f0f.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>
                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img src="assets/img/komplekt/blok/38_ece15ddd731aa84b81b0f0ab77e865a5.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a href="https://05.ru/catalog/computers/accessories/power_unit/71530/">Блок питания Thermaltake SPR-0600NHSAW 600 Вт</a></div>
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

                </div>

                <div class="list__st">
                    <a href="komlekt.php">
                        <div class="list__btn1">1</div>
                    </a>
                    <a href="komplekt2.php">
                        <div class="list__btn">2</div>
                    </a>
                </div>

            </div>

        </div>
    </div>
    </div>

    <?php require 'footer.php'; ?>

    </div>

</body>
</html>