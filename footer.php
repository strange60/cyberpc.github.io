      
<?php
          if($_COOKIE['user'] == '');
        ?>
        <div class="popup-fade1">  
            <div class="popup1">
                <form action="validation-form/check.php" method="post" id="login1">
        <h1>Регистрация</h1>
                  <form action="validation-form/check.php" method="post">
                    <input type="text" name="login" id="login" placeholder="Введите логин"><br>
                    <input type="text" name="name" id="name" placeholder="Введите имя"><br>
                    <input type="password" name="pass" id="pass" placeholder="Введите пароль"><br>
                    <button type="submit" id="submit">Зарегистрироваться</button>
                  </form>
    </form>
            </div>
        </div>



<?php
      if($_COOKIE['user'] == '');
    ?>
<div class="popup-fade2">                
        <div class="popup2" >           
              <form action="validation-form/auth.php" method="post" id="login1">
                <h1>Авторизации</h1>
                <input type="text" name="login" id="login"  placeholder="Введите логин"><br>
                <input type="password" name="pass" id="pass" placeholder="Введите пароль"><br>
                <div class="bunt">
                <button id="submit" type="submit">Войти</button>
                </div>
              </form>
        </div>
</div> 

    <footer>

        <nav>
            <a href="https://www.instagram.com/cyberpc05"><img src="assets/img/logo_1.jpg" alt=""></a>
            <a href="https://www.youtube.com/channel/UCTbSpOo6eZOyW_gHWkXD_0Q"><img src="assets/img/logo_youtube.jpg" alt=""></a>
        </nav>

        <div class="pod__v">
            <p>©2020 CYBERPC LLC - сборка и продажа мощных компьютеров. Все права защищены.</p>
        </div>

        <div class="pod">
            <a href="polz-soglashenie.html">Пользовательское соглашение</a>
            <p>CYBERPC и логотип CYBERPC являются товарными знаками CYBERPC LLC., зарегистрированными в России и других странах.</p>
        </div>

    </footer>
 <div class="smart-basket__wrapper"><div class="smart-basket"><form class="smart-basket__form" method="POST" id="smart-basket__form" enctype="multipart/form-data"><div class="smart-basket__product-item"><div class="smart-basket__product-name">Товар</div><div class="smart-basket__product-id">ID</div><div class="smart-basket__product-price">Цена / ₽<span class="smart-basket__info-icon">?</span><span class="smart-basket__info-msgs">Цена за 1 товар или услугу<button class="smart-basket__info-msgs-close">×</button></span></div><div class="smart-basket__product-quantity smart-basket__product-quantity_header">Кол-во</div><div class="smart-basket__product-price-common">Общая цена / ₽</div><div class="smart-basket__product-delete">Удалить</div></div><div class="smart-basket__result-common"><div class="smart-basket__empty-title" style="">Корзина пуста. Вы не добавили ни одного товара</div><div class="smart-basket__success-title" style="display: none;">Заказ принят. Ожидайте звонка</div><div class="smart-basket__quantity-common"><span>Всего товаров: </span> 0</div><div class="smart-basket__price-common"><span>Общая стоимость: </span> <input name="finalPrice" class="smart-basket__total-cost" type="text" value="0.00 ₽"></div></div><div class="smart-basket__user-form"><div class="smart-basket__user-info"><div class="smart-basket__input-wrapper"><input class="smart-basket__user-input" type="text" placeholder="Введите имя" name="userName" required="required"></div><div class="smart-basket__input-wrapper"><input class="smart-basket__user-input" type="tel" placeholder="Введите телефон" name="userTel" required="required" maxlength="16"></div><div class="smart-basket__input-wrapper"><input class="smart-basket__user-input" type="email" placeholder="Введите e-mail" name="userEmail"></div><div class="smart-basket__agreement-wrapper"><input type="checkbox" name="agreement" class="smart-basket__input-agreement" id="smart-basket__input-agreement" checked="checked" value="Я принимаю условия пользовательского соглашения"><label class="smart-basket__label-agreement" for="smart-basket__input-agreement"></label><a class="smart-basket__link-agreement" href="https://smartlanding.biz" target="_blank" rel="nofollow">Я принимаю условия пользовательского соглашения</a></div></div><div class="smart-basket__footer"><button class="smart-basket__close-form">Продолжить покупки</button><button class="smart-basket__send-form" form="smart-basket__form" type="submit">Сделать заказ</button></div></div></form></div></div>

    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="smartbasket/js/smartbasket.min.js"></script>
    <script src="http://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
    <script src="assets/slick/slick.min.js"></script>
    <script src="assets/js/js.js"></script>
    <script src="assets/js/script.js"></script>