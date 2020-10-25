<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добрый картон</title>    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
    
</head>
<body>


    <div class="menu">
        <div class="menu-big">
            <div class="container">
                <div class="menu-wrapper">
                    <ul class="menu__list">
                        <li class="menu__list__item"><a href="#about">О компании</a></li>
                        <li class="menu__list__item"><a href="#features">Преимущества</a></li>
                        <li class="menu__list__item"><a href="#products">Наша продукция</a></li>
                        <li class="menu__list__item"><a href="#productions">Производство</a></li>
                        <li class="menu__list__item"><a href="#clients">Наши клиенты</a></li>
                        <li class="menu__list__item"><a href="#feedback">Отзывы</a></li>
                        <li class="menu__list__item"><a href="#feedback">Сертификаты</a></li>
                        <li class="menu__list__item"><a href="#map">Склад</a></li>
                        <li class="menu__list__item menu__list__item-last"><a href="#contacts">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="menu-mobile">
            <div class="container">
                <div class="menu-wrapper">
                    <ul class="menu__list">
                        <li class="menu__list__item"><a href="#about">О компании</a></li>
                        <li class="menu__list__item"><a href="#features">Преимущества</a></li>
                        <li class="menu__list__item"><a href="#products">Наша продукция</a></li>
                        <li class="menu__list__item"><a href="#productions">Производство</a></li>
                        <li class="menu__list__item"><a href="#clients">Наши клиенты</a></li>
                        <li class="menu__list__item"><a href="#feedback">Отзывы</a></li>
                        <li class="menu__list__item"><a href="#feedback">Сертификаты</a></li>
                        <li class="menu__list__item"><a href="#map">Склад</a></li>
                        <li class="menu__list__item"><a href="#contacts">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="overlay">
        <div class="overlay popup">
            <div class="popup-title">
                Форма обратной связи
            </div>
            <div class="popup__close">
                &times;
            </div>

            <div class="popup-form">
                <form action="#" class="popup-form__main">
                    <div class="popup-form__title">
                        Получите индивидуальное предложение<span class="popup-form__small">на производство и поставку изделий</span>
                    </div>
                    <div class="popup-form__subtitle">
                        Введите ваш номер телефона:
                    </div>
                    <input class="form__input popup__input" type="tel" placeholder="Введите телефон">
                    <button class="button popup__button">Оставить заявку!</button>
                </form>
                <span class="form-small popup-small">*Минимальный заказ 500шт.</span> 
            </div>
        </div>
    </div>
   

    <script src="./js/jquery-3.3.1.min.js"></script>
    <!--Мобильное меню-->
    <script>
       $(document).ready(function(){
                let link = $('.toggle-mnu'),
                        menu = $('.menu-mobile'),
                        menu_item = $('.menu__list__item');
                link.click(function(){
                    link.toggleClass('toggle-mnu-active');
                    menu.toggleClass('menu-mobile-active');
                }),
                menu_item.click(function(){
                    link.removeClass('toggle-mnu-active');
                    menu.removeClass('menu-mobile-active');
                });
            });
    </script>
    <!--Маски для ввода полей-->
    <script src="js/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script>
        jQuery(function($){
        $(".form__input").mask("+7 (999) 999-9999");
        $(".offer-form__input").mask("+7 (999) 999-9999");
        });
    </script>

    <script src="/js/wow.min.js"></script>
    <script>
        new WOW().init(); //инициализация анимации
    </script>
    <!--Показ/скрытие модального окна-->
    <script>
        $(document).ready(function(){
                $('.button').on("click", function(){
                    $('.overlay').show();
                });
                $('.popup__close').on("click", function(){
                    $('.overlay').hide();
                });
            });
    </script>

   <header class="header">
       <div class="container">
           <div class="row align-items-center">
               <div class="col-4 col-md-4">
                   <a href="#" class="toggle-mnu hidden-lg"><span></span></a>
                   <div class="header-logo hidden-mobile_header">
                       <img src="./image/header/header_logo.png" alt="Логотип">
                   </div>
                    
                    <div class="header-logo__phone hidden-laptop_header">
                        <img src="./image/header/header-logo__phone.png" alt="Логотип">
                     </div> 
               </div>
               <div class="col-8 col-md-8">
                    <div class="header-text">
                        <div class="header-phone">
                             <div class="header-text__phone">
                             8 (347) <span class="text-phone__strong">271-54-28 </span> 
                             </div>
    
                            <div class="header-text__phone">
                            8 (937) <span class="text-phone__strong">363-30-00</span>
                            </div>
                       </div>
                        <button class="button">
                            <img class="header-text__icon" src="./image/header/icon_phone.png" alt="Иконка телефона"><span class="header-text__order">Заказать звонок</span>
                        </button>
                    </div>
               </div>
           </div>
       </div>
   </header>

<section id="main">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xs-12 col-md-12 col-lg-5 col-xl-5">
                <div class="main-img hidden-mobile_main wow fadeInLeft" data-wow-delay="0.4s">
                    <img src="image/main/main-cardboard.png" alt="">
                </div>
            </div>
            <div class="col-xs-12 col-md-12 col-lg-7 col-xl-7">
                <div class="main-text">
                   <h1 class="main-text__title">Производство упаковки из гофрокартона</h1>
                    <p class="main-text__subtitle">с доставкой по всей России</p>
                    <div class="main-text__form">
                        <h3 class="form-title">Получите индивидуальное предложение на производство и поставку гофропродукции</h3>
                        <span class="form-title__important">Образцы упаковки бесплатно!</span>
                        <form class="form" action="#">
                            <input class="form__input" placeholder="Введите номер телефона" type="tel">
                            <button class="button button-big">Оставить заявку!</button>
                        </form> 
                        <span class="form-small">*Минимальный заказ 500шт.</span>    
                    </div>
                </div>
            </div>
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section> 


<section id="features">
    <div class="container">
        <div class="features-block">
            <div class="features-number">
                <h2 class="features-number__title">5 лет</h2>
                <p class="features-number__subtitle">На рынке изделий из гофрокартона</p>
            </div>

            <div class="features-number">
                <h2 class="features-number__title">до 5 000 000 м2</h2>
                <p class="features-number__subtitle">Ежемесячный объем производства гофрокартона</p>
            </div>

            <div class="features-number">
                <h2 class="features-number__title">4 000 м2</h2>
                <p class="features-number__subtitle">Площадь склада</p>
            </div>
        </div>
        <div class="features-wrapper">
            <div class="features-cards-first">
                <div class="features-card">
                    <div class="features-card__img">
                        <img src="./image/features/img_first.png" alt="">
                    </div>
                    <div class="features-card__text">
                        <h3 class="features-card__title">Производство</h3>
                        <p class="features-card__subtitle">4 технологические линии способны выполнить любой заказ любой сложности</p>
                    </div>
                </div>

                <div class="features-card wow fadeInUp" data-wow-delay="0.2s">
                    <div class="features-card__img">
                        <img src="./image/features/img_second.png" alt="">
                    </div>
                    <div class="features-card__text">
                        <h3 class="features-card__title">Бесплатные образцы</h3>
                        <p class="features-card__subtitle">Бесплатно делаем образцы гофроупаковки - это помогает заранее увидеть упаковку</p>
                    </div>
                </div>

                <div class="features-card wow fadeInUp" data-wow-delay="0.4s">
                    <div class="features-card__img">
                        <img src="./image/features/img_third.png" alt="">
                    </div>
                    <div class="features-card__text">
                        <h3 class="features-card__title">Стабильное качество</h3>
                        <p class="features-card__subtitle">Собственная лаборатория контролирует качество на каждом этапе производства</p>
                    </div>
                </div>
            </div>

            <div class="features-cards-second">
                <div class="features-card wow fadeInUp" data-wow-delay="0.6s">
                    <div class="features-card__img">
                        <img src="./image/features/img_fourth.png" alt="">
                    </div>
                    <div class="features-card__text">
                        <h3 class="features-card__title">Страховой запас</h3>
                        <p class="features-card__subtitle">Можем хранить запас гофропродукции на своих складах и поставлять его партиями</p>
                    </div>
                </div>

                <div class="features-card wow fadeInUp" data-wow-delay="0.8s">
                    <div class="features-card__img">
                        <img src="./image/features/img_fifth.png" alt="">
                    </div>
                    <div class="features-card__text">
                        <h3 class="features-card__title">Флексопечать</h3>
                        <p class="features-card__subtitle">Возможно нанесение вашего логотипа, текста или манипуляционных знаков</p>
                    </div>
                </div>

                <div class="features-card wow fadeInUp" data-wow-delay="1s">
                    <div class="features-card__img">
                        <img src="./image/features/img_sixth.png" alt="">
                    </div>
                    <div class="features-card__text">
                        <h3 class="features-card__title">Гидрофобные добавки</h3>
                        <p class="features-card__subtitle">На производстве реализована технология, которая позволяет гофрокартону стать прочнее</p>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</section>

<section id="products">
    <div class="container">
        <h2 class="products_title">Наша продукция</h2>
        <div class="line">
            <img src="./image/products/title_line.png" alt="">
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="products-block-first">
                    <div class="products-block-first__one">
                        <div class="products-img">
                            <img src="./image/products/cardboard_first.png" alt="">
                        </div>
                        <h4>Гофрокороб 4-х клапанный</h4>
                        <button class="button-more">Подробнее</button>
                        <button class="button-receive">Получить расчет</button>
                    </div>
                    <div class="products-block-first__two">
                        <div class="products-img">
                            <img src="./image/products/cardboard_second.png" alt="">
                        </div>
                        <h4>Гофрокороб самосборный (сложная высечка)</h4>
                        <button class="button-more">Подробнее</button>
                        <button class="button-receive">Получить расчет</button>
                    </div>
                </div>
            </div>
            <!-- /.col-6 -->
            <div class="col-12 col-lg-6">
                <div class="products-block-second">
                    <div class="products-block-second__one">
                        <div class="products-img">
                            <img src="./image/products/cardboard_third.png" alt="">
                        </div>
                        <h4>Гофролоток</h4>
                        <button class="button-more">Подробнее</button>
                        <button class="button-receive">Получить расчет</button>
                    </div>
                    <div class="products-block-second__two">
                        <div class="products-img">
                            <img src="./image/products/cardboard_fourth.png" alt="">
                        </div>
                        <h4>Листовой гофрокартон</h4>
                        <button class="button-more">Подробнее</button>
                        <button class="button-receive">Получить расчет</button>
                    </div>
                </div>
           
            <!-- /.col-6 -->
        </div>
    </div>

</section>

<section id="offer">
    <div class="container">
        <div class="offer-block">
            <h1 class="offer-block__title">Получите индивидуальное предложение</h1>
            <p class="offer-block__subtitle">на производство и поставку изделий</p>
            <p class="offer-block__text">Введите ваш номер телефона</p>
        </div>
        <div class="offer-form">
            <form class="offer-form" action="#">
                <input class="offer-form__input" placeholder="+7 (ХХХ) ХХХ-ХХ-ХХ" type="tel">
                <button class="offer-button">Оставить заявку!</button>
                <span class="offer-form-small">*Минимальный заказ 500шт.</span>    
            </form> 
        </div>
    </div>
</section>

<section id="productions">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 order-lg-first col-12">
                <div class="productions-slider-top">
                    <img src="./image/productions/image-one.jpg" alt="">
                    <img src="./image/productions/image-two.jpg" alt="">
                    <img src="./image/productions/image-three.jpg" alt="">
                    <img src="./image/productions/image-four.jpg" alt="">
                    <img src="./image/productions/image-five.jpg" alt="">
                    <img src="./image/productions/image-six.jpg" alt="">
                </div>
                <div class="productions-slider-bottom">
                    <div class="productions-slider-item">
                        <img src="./image/productions/image-one.jpg" alt="">
                    </div>
                    <div class="productions-slider-item">
                        <img src="./image/productions/image-two.jpg" alt="">
                    </div>
                    <div class="productions-slider-item">
                        <img src="./image/productions/image-three.jpg" alt="">
                    </div>
                    <div class="productions-slider-item">
                        <img src="./image/productions/image-four.jpg" alt="">
                    </div>
                    <div class="productions-slider-item">
                        <img src="./image/productions/image-five.jpg" alt="">
                    </div>
                    <div class="productions-slider-item">
                        <img src="./image/productions/image-six.jpg" alt="">
                    </div>
                </div>
            </div>
            <!-- /.col-7 -->
            <div class="col-lg-5 col-12 order-first">
                <div class="productions-block">
                    <h2 class="productions-block__title">Производство</h2>
                    <p class="productions-block__text">Современное оборудование позволяет производить до 5 миллионов квадратных метров гофрокартона ежемесячно. Гофрокороба и лотки производятся по ГОСТу или чертежам заказчика.</p>
                    <p class="productions-block__text">Досконально прорабатываем конструкции коробов и составы сырья, учитывая условия хранения, транспортировки и производства вашей продукции.</p>
                    <p class="productions-block__text">Возможно нанесение цветной флексопечати на поверхность коробов.</p>
                </div>
            </div>
            <!-- /.col-5 -->
        </div>
    </div>
</section>

<section id="clients">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="clients-title">Наши клиенты</h2>
            </div>

            <div class="col-lg-3 col-6">
                <div class="clients-icon">
                    <div class="clients-image">
                    <p><a href="##" class="clients-image__one"></a></p>
                </div>
                <div class="clients-image">
                    <p><a href="##" class="clients-image__five"></a></p>
                </div>
                <div class="clients-image">
                    <p><a href="##" class="clients-image__nine"></a></p>
                </div>
                </div>
                
            </div>
            <div class="col-lg-3 col-6">
                <div class="clients-image">
                    <p><a href="##" class="clients-image__two"></a></p>
                </div>
                <div class="clients-image">
                    <p><a href="##" class="clients-image__six"></a></p>
                </div>
                <div class="clients-image">
                    <p><a href="##" class="clients-image__ten"></a></p>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="clients-image">
                    <p><a href="##" class="clients-image__three"></a></p>
                </div>
                <div class="clients-image">
                    <p><a href="##" class="clients-image__seven"></a></p>
                </div>
                <div class="clients-image">
                    <p><a href="##" class="clients-image__eleven"></a></p>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="clients-image">
                    <p><a href="##" class="clients-image__four"></a></p>
                </div>
                <div class="clients-image">
                    <p><a href="##" class="clients-image__eight"></a></p>
                </div>
                <div class="clients-image">
                    <p><a href="##" class="clients-image__twelve"></a></p>
                </div>
            </div>
            

        </div>
    </div>
</section>

<section id="review">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="review-title">Отзывы о сотрудничестве</h2>
                <div class="review-slider">
                    <div class="review-slider__item">
                        <img src="./image/review/doc-1.jpg" alt="">
                    </div>
                    <div class="review-slider__item">
                        <img src="./image/review/doc-2.jpg" alt="">
                    </div>
                    <div class="review-slider__item">
                        <img src="./image/review/doc-3.jpg" alt="">
                    </div>
                    <div class="review-slider__item">
                        <img src="./image/review/doc-1.jpg" alt="">
                    </div>
                    <div class="review-slider__item">
                        <img src="./image/review/doc-2.jpg" alt="">
                    </div>
                </div>
            </div>
             
        </div>
       
    </div>

</section>

<section id="location">
    <div class="location-mobile">
        <div class="location-mobile__information">
            <h2 class="mobile-title">Контакты</h2>
            <div class="mobile-address">
                <h4 class="mobile-address__title">Адрес офиса</h4>
                <p class="mobile-address__subtitle">г. Уфа, Проспект октября, 46</p>
                <h4 class="mobile-address__title">Адрес склада</h4>
                <p class="mobile-address__subtitle">г. Уфа, ул. Майкопская, 65/2</p>
            </div>
            <div class="mobile-phone">
                <h4 class="mobile-phone__title">Тел. отдела продаж:</h4>
                <p class="mobile-phone__subtitle">8(347)271-54-28</p>
                <p class="mobile-phone__subtitle">8 (937)363-00-00</p>
                <button class="button location-button">Заказать звонок</button>
            </div>
            <div class="mobile-mail">
                <h4 class="mobile-mail__title">Е-mail</h4>
                <p class="mobile-mail__subtitle">urals.karton@gmail.com</p>
            </div>
        </div>
    </div>
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7795ed7adfd126fba9069befd2b0432c0ce3275e020359ee4006e16778519974&amp;width=100%25&amp;height=550&amp;lang=ru_RU&amp;scroll=false"></script>
    <div class="location-information">
        <div class="location-information__address">
            <div class="address-icon">
                <img src="./image/location/marker.png" alt="">
            </div>
            <div class="address-text">
                <h4 class="address-office__title">Адрес офиса</h4>
                <p class="address-office__subtitle">г. Уфа, Проспект октября, 46</p>
                <h4 class="address-stock__title">Адрес склада</h4>
                <p class="address-stock__subtitle">г. Уфа, ул. Майкопская, 65/2</p>
            </div>
        </div>
        <div class="location-information__phone">
            <div class="phone-icon">
                <img src="./image/location/phone.png" alt="">
            </div>
            <div class="address-phone__text">
                <h4 class="address-phone__title">Тел. отдела продаж:</h4>
                <p class="address-phone__subtitle">8(347)271-54-28</p>
                <p class="address-phone__subtitle">8 (937)363-00-00</p>
                <button class="button location-button">Заказать звонок</button>
            </div>
        </div>
        <div class="location-information__mail">
            <div class="mail-icon">
                <img src="./image/location/mail.png" alt="">  
            </div>
            <div class="address-mail__text">
                <h4 class="address-mail__title">Е-mail</h4>
                <p class="address-mail__subtitle">urals.karton@gmail.com</p>
            </div>
        </div>
    </div>
</section>

<section class="footer">
    <p class="footer-text">© www.gofra-ural.ru 2016, все права защищены</p>
</section>

<!--Подключаю библиотеку wow для работы с анимацией-->
<script src="js/wow.min.js"></script>
              <script>
              new WOW().init(); //инициализация анимации
              </script>

<!--Подключаю jquery для работы со слайдером-->
<script src="js/jquery-3.3.1.min.js"></script>   
<!--Подключаю skick-slider-->
<script src="slick/slick.min.js"></script>

<script type="text/javascript">
//подключение слайдера для дальнейшей работы с ним
    $(document).ready(function(){
      $('.productions-slider-top').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            asNavFor: '.productions-slider-bottom',
            fade: true,
            responsive: [
        {
            breakpoint: 991,
            settings: {
            arrows: true
            }   
        },
        {
            breakpoint: 769,
            settings: {
            arrows: true,
            prevArrow: '<div class="slider-arrow slider-arrow_prod slider-arrow_left"></div>',
            nextArrow: '<div class="slider-arrow slider-arrow_prod slider-arrow_right"></div>'
            }
        }
        ]
        });

      $('.productions-slider-bottom').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.productions-slider-top',
            focusOnSelect: true,
            prevArrow: '<div class="slider-arrow slider-arrow_prod slider-arrow_left"></div>',
            nextArrow: '<div class="slider-arrow slider-arrow_prod slider-arrow_right"></div>'
            });
            //подключение слайдера с отзывами
        $('.review-slider').slick({
            arrows: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '<div class="slider-review-arrow slider-review_left"></div>',
            nextArrow: '<div class="slider-review-arrow slider-review_right"></div>',
            responsive: [
        {
            breakpoint: 769,
            settings: {
                slidesToShow: 2,
                prevArrow: '<div class="slider-arrow slider-arrow_left fix-left_arrows"></div>',
                nextArrow: '<div class="slider-arrow slider-arrow_right fix-right_arrows"></div>'
            }
        },
        {
            breakpoint: 427,
            settings: {
                slidesToShow: 1,
                prevArrow: '<div class="slider-arrow slider-arrow_left fix-left_arrows"></div>',
                nextArrow: '<div class="slider-arrow slider-arrow_right fix-right_arrows"></div>'
            }
        }
        ]
        });
        });
</script>

<script>
    $(".toggle-mnu").click(function() {
    $(this).toggleClass("on");
    $(".main-mnu").slideToggle();
    return false;
  });
  </script>
  
  <?php wp_footer(); ?>

</body>
</html>
    