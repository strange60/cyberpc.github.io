
$(function () {
    $('.smart-basket__wrapper').smbasket({
        productElement: 'grid1',
        buttonAddToBasket: 'product-card__btn',
        productPrice: 'product-card__price',
        productSize: 'product__size-element',
        
        productQuantityWrapper: 'product__quantity',
        smartBasketMinArea: 'header__basket-min',
        countryCode: '+7',
        smartBasketCurrency: '₽',
        telIsRequired: true,
        emailIsRequired: true,
        smartBasketMinIconPath: 'smartbasket/img/shopping-basket-wight.svg',

        agreement: {
            isRequired: true,
            isChecked: true,
            isLink: 'polz-soglashenie.html',
        }
    });
});

// Слик слайдек

$('.sl').slick({
      autoplay: true,
      autoplaySpeed: 5000,
      dots: true,
      fade: true,
      cssEase: 'ease-in',
      speed: 400,
      infinite: true,
      waitForAnimate: false
  });
  

$('.sl1').slick({
      autoplay: false,
      autoplaySpeed: 3000,
      centerPadding: '60px',
      dots: false,
      cssEase: 'ease-in',
      speed: 400,
      infinite: true,
      slidesToShow: 6,
      slidesToScroll: 1,
      waitForAnimate: false,
      responsive: [
        {
          breakpoint: 1300,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 3,
          }
        },
        {
          breakpoint: 1000,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 930,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        }

        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
});


$('.sl2').slick({
      autoplay: false,
      autoplaySpeed: 3000,
      centerMode: true,
      centerPadding: '0px',
      dots: false,
      cssEase: 'ease-in',
      speed: 400,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows:false,
      waitForAnimate: false
  });

$('.sl4').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    centerMode: false,
    centerPadding: '0px',
    dots: false,
    cssEase: 'ease-in',
    speed: 400,
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    fade: false,
    arrows:false,
    waitForAnimate: false,
});



$('.sl5').slick({
    autoplay: false,
    autoplaySpeed: 3000,
    centerMode: false,
    centerPadding: '40px',
    dots: false,
    cssEase: 'ease-in',
    speed: 400,
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    fade: false,
    arrows: true,
    waitForAnimate: false,
    responsive: [
        {
          breakpoint: 1300,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 1000,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 930,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 630,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
});


  //Модальные окна

    //Модальные окно 1 - Процессор

  $(document).ready(function ($) {
    $('.td1').click(function () {
        $('.popup-fade').fadeIn();
        return false;
    });



    $('.popup-close').click(function () {
        $(this).parents('.popup-fade').fadeOut();
        return false;
        
        
    });

    $(document).keydown(function (e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $('.popup-fade').fadeOut();
        }
        
    });

    $('.popup-fade').click(function (e) {
        if ($(e.target).closest('.popup').length == 0) {
            $(this).fadeOut();
        }
        
        
    });

});


  //Модальные окно 2 - Кулер процессора

  $(document).ready(function ($) {
    $('.td2').click(function () {
        $('.modal-2').fadeIn();
        return false;
    });



    $('.popup-close').click(function () {
        $(this).parents('.modal-2').fadeOut();
        return false;
        
        
    });

    $(document).keydown(function (e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $('.modal-2').fadeOut();
        }
        
    });

    $('.modal-2').click(function (e) {
        if ($(e.target).closest('.modal-2_1').length == 0) {
            $(this).fadeOut();
        }
        
        
    });

});

  //Модальные окно 3 - Материнская плата

  $(document).ready(function ($) {
    $('.td3').click(function () {
        $('.modal-3').fadeIn();
        return false;
    });



    $('.popup-close').click(function () {
        $(this).parents('.modal-3').fadeOut();
        return false;
        
        
    });

    $(document).keydown(function (e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $('.modal-3').fadeOut();
        }
        
    });

    $('.modal-3').click(function (e) {
        if ($(e.target).closest('.modal-3_1').length == 0) {
            $(this).fadeOut();
        }
        
        
    });

});


/*Модальное окно 4 - Оперативная память */

  $(document).ready(function ($) {
    $('.td4').click(function () {
        $('.modal-4').fadeIn();
        return false;
    });



    $('.popup-close').click(function () {
        $(this).parents('.modal-4').fadeOut();
        return false;
        
        
    });

    $(document).keydown(function (e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $('.modal-4').fadeOut();
        }
        
    });

    $('.modal-4').click(function (e) {
        if ($(e.target).closest('.modal-4_1').length == 0) {
            $(this).fadeOut();
        }
        
        
    });

});


/*Модальное окно 5 - Видеокарта */

$(document).ready(function ($) {
    $('.td5').click(function () {
        $('.modal-5').fadeIn();
        return false;
    });



    $('.popup-close').click(function () {
        $(this).parents('.modal-5').fadeOut();
        return false;
        
        
    });

    $(document).keydown(function (e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $('.modal-5').fadeOut();
        }
        
    });

    $('.modal-5').click(function (e) {
        if ($(e.target).closest('.modal-5_1').length == 0) {
            $(this).fadeOut();
        }
        
        
    });

});


/*Модальное окно 6 - Жесткий диск */

$(document).ready(function ($) {
    $('.td6').click(function () {
        $('.modal-6').fadeIn();
        return false;
    });



    $('.popup-close').click(function () {
        $(this).parents('.modal-6').fadeOut();
        return false;
        
        
    });

    $(document).keydown(function (e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $('.modal-6').fadeOut();
        }
        
    });

    $('.modal-6').click(function (e) {
        if ($(e.target).closest('.modal-6_1').length == 0) {
            $(this).fadeOut();
        }
        
        
    });

});



/*Модальное окно 7 - Блок питания */

$(document).ready(function ($) {
    $('.td7').click(function () {
        $('.modal-7').fadeIn();
        return false;
    });



    $('.popup-close').click(function () {
        $(this).parents('.modal-7').fadeOut();
        return false;
        
        
    });

    $(document).keydown(function (e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $('.modal-7').fadeOut();
        }
        
    });

    $('.modal-7').click(function (e) {
        if ($(e.target).closest('.modal-7_1').length == 0) {
            $(this).fadeOut();
        }
        
        
    });

});

/*Модальное окно 8 - Корпус или Системный блок */

$(document).ready(function ($) {
    $('.td8').click(function () {
        $('.modal-8').fadeIn();
        return false;
    });



    $('.popup-close').click(function () {
        $(this).parents('.modal-8').fadeOut();
        return false;
        
        
    });

    $(document).keydown(function (e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $('.modal-8').fadeOut();
        }
        
    });

    $('.modal-8').click(function (e) {
        if ($(e.target).closest('.modal-8_1').length == 0) {
            $(this).fadeOut();
        }
        
        
    });

});

/*Модальное окно 9 - Периферийные устройства */

$(document).ready(function ($) {
    $('.td9').click(function () {
        $('.modal-9').fadeIn();
        return false;
    });



    $('.popup-close').click(function () {
        $(this).parents('.modal-9').fadeOut();
        return false;
        
        
    });

    $(document).keydown(function (e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $('.modal-9').fadeOut();
        }
        
    });

    $('.modal-9').click(function (e) {
        if ($(e.target).closest('.modal-9_1').length == 0) {
            $(this).fadeOut();
        }
        
        
    });

});



//Модальное окно регистрации

$(document).ready(function ($) {
    $('#grent1').click(function () {
        $('.popup-fade1').fadeIn();
        return false;
    });

    $('.popup-close').click(function () {
        $(this).parents('.popup-fade1').fadeOut();
        return false;
        
    });

    $(document).keydown(function (e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $('.popup-fade1').fadeOut();
        }
        
    });

    $('.popup-fade1').click(function (e) {
        if ($(e.target).closest('#login').length == 0) {
            $(this).fadeOut();
        }
        
        
    });
    
});

//Модальное окно Войти

$(document).ready(function ($) {
    $('#grent').click(function () {
        $('.popup-fade2').fadeIn();
        return false;
    });

    $('.popup-close').click(function () {
        $(this).parents('.popup-fade2').fadeOut();
        return false;
        
    });

    $(document).keydown(function (e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $('.popup-fade2').fadeOut();
        }
        
    });

    $('.popup-fade2').click(function (e) {
        if ($(e.target).closest('#login1').length == 0) {
            $(this).fadeOut();
        }
        
        
    });
    
});




//Код для замены картины с одной на другой


$(document).ready(function(){
            $('.td1').hover(
        function() {
            $('#pcimgtop').attr('src', 'assets/img/pc_1.png');
        },
        function() {
            $('#pcimgtop').attr('src', 'assets/img/pc_0.png');
        }
    );
        $('.td2').hover(
        function() {
            $('#pcimgtop').attr('src', 'assets/img/pc_2.png');
        },
        function() {
            $('#pcimgtop').attr('src', 'assets/img/pc_0.png');
        }
    );
            $('.td3').hover(
        function() {
            $('#pcimgtop').attr('src', 'assets/img/pc_3.png');
        },
        function() {
            $('#pcimgtop').attr('src', 'assets/img/pc_0.png');
        }
    );
            $('.td4').hover(
        function() {
            $('#pcimgtop').attr('src', 'https://storage-asset.msi.com/event/mb/2018/how-to-build-a-pc/images/pc_4.png');
        },
        function() {
            $('#pcimgtop').attr('src', 'assets/img/pc_0.png');
        }
    );
            $('.td5').hover(
        function() {
            $('#pcimgtop').attr('src', 'https://storage-asset.msi.com/event/mb/2018/how-to-build-a-pc/images/pc_5.png');
        },
        function() {
            $('#pcimgtop').attr('src', 'assets/img/pc_0.png');
        }
    );
            $('.td6').hover(
        function() {
            $('#pcimgtop').attr('src', 'https://storage-asset.msi.com/event/mb/2018/how-to-build-a-pc/images/pc_6.png');
        },
        function() {
            $('#pcimgtop').attr('src', 'assets/img/pc_0.png');
        }
    );
            $('.td7').hover(
        function() {
            $('#pcimgtop').attr('src', 'https://storage-asset.msi.com/event/mb/2018/how-to-build-a-pc/images/pc_7.png');
        },
        function() {
            $('#pcimgtop').attr('src', 'assets/img/pc_0.png');
        }
    );
            $('.td8').hover(
        function() {
            $('#pcimgtop').attr('src', 'https://storage-asset.msi.com/event/mb/2018/how-to-build-a-pc/images/pc_8.png');
        },
        function() {
            $('#pcimgtop').attr('src', 'assets/img/pc_0.png');
        }
    );

});



