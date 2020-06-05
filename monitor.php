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
                    <div class="cont_text_v"><a href="pereferia.php">Периферийные устройства</a></div>
                    <div class="cont_text_p">Мониторы</div>
                </div>

                <div class="disp">
                    <div class="disp__bl">
                        <div class="disp__inp"><input type="text" placeholder="от 8 990"></div>
                        <div class="disp__ce">-</div>
                        <div class="disp__inp"><input type="text" placeholder="до 39 260 "></div>
                    </div>
                    <div class="proizvod">Производитель</div>
                    <div class="filter_setr" id="style">
                        <label for="check_label">
                            <input type="checkbox" name="spoiler" id="check_label">
                            <span class="sba"></span>
                            <div class="desc1">Samsung</div>
                            <div class="rigth">3</div>
                        </label>
                        <label for="check_label2">
                            <input type="checkbox" name="spoiler" id="check_label2">
                            <span class="sba"></span>
                            <div class="desc1">BenQ</div>
                            <div class="rigth">2</div>
                        </label>
                        <label for="check_label3">
                            <input type="checkbox" name="spoiler" id="check_label3">
                            <span class="sba"></span>
                            <div class="desc1">AOC</div>
                            <div class="rigth">1</div>
                        </label>
                        <label for="check_label4">
                            <input type="checkbox" name="spoiler" id="check_label4">
                            <span class="sba"></span>
                            <div class="desc1">Philips</div>
                            <div class="rigth">1</div>
                        </label>
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
                    <p>Мониторы</p>
                </div>
                <div class="catatl__cen">

                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img src="assets/img/peref/monirot/38_1be991d6e44dd1a3678c09c38de29c52.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a href="https://05.ru/catalog/computers/monitor/73211/">Монитор BenQ BL2780 27 черный</a>
                        </div>
                        <div class="product-card__price">13 490 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="monitor01"
                            data-sb-product-name="Монитор BenQ BL2780 27 черный" data-sb-product-price="13490"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/peref/monirot/38_1be991d6e44dd1a3678c09c38de29c52.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>

                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img src="assets/img/peref/monirot/38_e447127467dafd4ae60bab8cbf4d5071.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a href="https://05.ru/catalog/computers/monitor/4471/">Монитор Samsung S24E390HL 23,6 черный</a></div>
                        <div class="product-card__price">8 990 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="monitor02"
                            data-sb-product-name="Монитор Samsung S24E390HL 23,6 черный" data-sb-product-price="8990"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/peref/monirot/38_e447127467dafd4ae60bab8cbf4d5071.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>

                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img src="assets/img/peref/monirot/38_6cf7189aaf8fdabd872682e29e9eaab5.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a href="https://05.ru/catalog/computers/monitor/82238/">Монитор AOC C32G1 31,5 черный</a>
                        </div>
                        <div class="product-card__price">25 990 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="monitor03"
                            data-sb-product-name="Монитор AOC C32G1 31,5 черный" data-sb-product-price="25990"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/peref/monirot/38_6cf7189aaf8fdabd872682e29e9eaab5.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>

                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img src="assets/img/peref/monirot/38_a1cfb3a352f7ae4c11ea5440006efc9e.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a href="https://05.ru/catalog/computers/monitor/73210/">Монитор BenQ BL2480 23,8 черный</a></div>
                        <div class="product-card__price">9 990 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="monitor03"
                            data-sb-product-name="Монитор BenQ BL2480 23,8 черный" data-sb-product-price="9990"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/peref/monirot/38_a1cfb3a352f7ae4c11ea5440006efc9e.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>

                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img src="assets/img/peref/monirot/38_359c51fa4bd5127f86edc6100a4aeba8.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a href="https://05.ru/catalog/computers/monitor/83944/">Монитор Philips 276E9QDSB 27 черный</a></div>
                        <div class="product-card__price">13 590 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="monitor04"
                            data-sb-product-name="Монитор Philips 276E9QDSB 27 черный" data-sb-product-price="13590"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/peref/monirot/38_359c51fa4bd5127f86edc6100a4aeba8.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>

                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img src="assets/img/peref/monirot/38_a84520e5790350a359dc8b4b7107cd36.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/monitor/91389/">Монитор Samsung C27JG50QQI 26,9 черный</a></div>
                        <div class="product-card__price">23 990 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="monitor05"
                            data-sb-product-name="Монитор Samsung C27JG50QQI 26,9 черный" data-sb-product-price="23990"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/peref/monirot/38_a84520e5790350a359dc8b4b7107cd36.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>

                    <div class="grid1">
                        <div class="product-card__img">
                            <div class="product-card__img_cent"><img src="assets/img/peref/monirot/38_73d9330f7f551a1af571c6331d9c767b.jpg" alt=""></div>
                        </div>
                        <div class="product-card__title"><a
                                href="https://05.ru/catalog/computers/monitor/74843/">Монитор Samsung C27HG70QQI 27 серый</a></div>
                        <div class="product-card__price">39 260 ₽</div>
                        <div class="product__quantity"></div>
                        <div class="product-card__btn" data-sb-id-or-vendor-code="monitor06"
                            data-sb-product-name="Монитор Samsung C27HG70QQI 27 серый" data-sb-product-price="39260"
                            data-sb-product-quantity="1"
                            data-sb-product-img="assets/img/peref/monirot/38_73d9330f7f551a1af571c6331d9c767b.jpg">
                            <a href="#">
                                <img src="assets/img/Без названия.svg" alt="">
                                <span>В корзину</span>
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    </div>

    <?php require 'footer.php'; ?>

    </div>

</body>

</html>