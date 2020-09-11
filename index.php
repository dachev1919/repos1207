<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/twentytwenty.css">
    <link rel="stylesheet" href="css/slick.css">
    <title>Document</title>
</head>
<body>
<header class="header">
    <div class="menu ">
        <div class="container">
            <nav class="menu__nav">
                <a href="#" class="menu__link">Главная</a>
                <a href="#" class="menu__link">Портфолио</a>
                <a href="#" class="menu__link">Каталог</a>
                <a href="#" class="menu__link">Контакты</a>
                <a href="#" class="menu__link">Отзывы</a>
                <a href="#" class="menu__link">О нас</a>
            </nav>
        </div>
        <!--/.container-->
    </div>
    <div class="navbar">
        <div class="container">
            <div class="navbar-wrap">
                <button class="menu-button navbar__menu-button">
                    <span class="menu-button__line"></span>
                    <span class="menu-button__line"></span>
                    <span class="menu-button__line"></span>
                </button>
                <div class="logo navbar__logo">
                    <stong class="logo__text">Dachev Write It</stong>
                    <span class="logo__description">Индивидуальная разработка сайтов</span>
                </div>
                <div class="navbar__mobile">
                    <a class="navbar__phone" href="tell:+380636219861">+38(063)-621-98-61</a>
                    <span class="navbar__work-time navbar__small-text">без выходных 9:00 - 21:00</span>
                </div>
                <div class="navbar__landline">
                    <a class="navbar__phone" href="tell:+380992290079">+38(099)-229-00-79</a>
                    <a class="navbar__email navbar__small-text" href="mailto:dachev1919@gmai.com">dachev1919@gmai.com</a>
                </div>
                <button class="button-o navbar__button">Получить консультацию</button>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.navbar -->
    <div class="hero">
        <div class="container">
            <h1 class="hero__title">
                Гарантия <br>максимального качества<br>за краткий период
            </h1>
            <span class="hero__subtitle">Dachev write it</span>
            <button class="button hero__button">Обратная связь</button>
        </div>
    </div>
    <!-- /.hero -->
</header>
<!-- /.header -->

<main>
    <section class="offer bg-secondary">
        <div class="container">
            <div class="offer__block offer-block offer-block_request-bg">
                <h2 class="offer__title">Оставьте Вашу заявку</h2>
                <span class="offer__subtitle">и получите бесплатную консультацию для
                Вашего проекта</span>
                <form action="#" class="form offer__form">
                    <div class="form__row">
                        <div class="form__group">
                            <label for="" class="form__label">Дата создания</label>
                            <input type="date" class="input form__input">
                        </div>
                        <div class="form__group">
                            <label for="" class="form__label">Тип проекта</label>
                            <input type="hidden" name="type" id="select-type" value="Тип номер 1">
                            <div class="select form__select">
                                <div class="select__checked">Тип номер 1</div>
                                <ul class="select__dropdown">
                                    <li class="select__option" data-value="Тип номер 1">Тип номер 1</li>
                                    <li class="select__option" data-value="Тип номер 2">Тип номер 2</li>
                                </ul>
                            </div>
                        </div>
                        <div class="form__group">
                            <label for="" class="form__label" id="formLastLabel">Название</label>
                            <input type="text" class="input form__input">
                        </div>
                    </div>
                    <div class="form__row form__row-checkbox">
                        <div class="form__checkbox">
                            <input class="checkbox" type="checkbox" id="newClient">
                            <label class="checkbox-label" for="newClient">
                                Новый пользователь
                            </label>
                        </div>
                        <div class="form__checkbox">
                            <input class="checkbox" type="checkbox" id="getNotification">
                            <label class="checkbox-label" for="getNotification">
                                Получать уведомления
                            </label>
                        </div>
                    </div>
                    <!-- /.form__row -->
                    <div class="form__row">
                        <div class="form__group">
                            <input type="text" class="input form__input" placeholder="Ваше имя">
                        </div>
                        <div class="form__group">
                            <input type="tel" class="input form__input" placeholder="Ваш телефон">
                        </div>
                        <div class="form__group">
                            <input type="submit" class="button form__button" value="Получить консультацию">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /.offer -->
    <section class="features section">
        <div class="container">
            <h2 class="section-title section__title">Преимущество сотрудничества</h2>
            <div class="features-block">
                <div class="features-block__item"><img src="img/features/feature-1.png" alt="Бесплатная консультация" class="feature-block__image">
                    <!-- /.feature-block__image -->
                    <p class="features-block__text">Бесплатная консультация <br> от профессионала</p>
                    <!-- /.feature-block__text -->
                </div>
                <!-- /.feature-block__item -->
                <div class="features-block__item"><img src="img/features/feature-2.png" alt="Гарантия качества" class="feature-block__image">
                    <!-- /.feature-block__image -->
                    <p class="features-block__text">Долгосрочная гарантия <br> качества</p>
                    <!-- /.feature-block__text -->
                </div>
                <!-- /.feature-block__item -->
                <div class="features-block__item"><img src="img/features/feature-3.png" alt="Большой каталог работ" class="feature-block__image">
                    <!-- /.feature-block__image -->
                    <p class="features-block__text">Большой каталог <br> работ</p>
                    <!-- /.feature-block__text -->
                </div>
                <!-- /.feature-block__item -->
                <div class="features-block__item"><img src="img/features/feature-4.png" alt="Строгое соблюдение сроков" class="feature-block__image">
                    <!-- /.feature-block__image -->
                    <p class="features-block__text">Строгое соблюдение <br> сроков</p>
                    <!-- /.feature-block__text -->
                </div>
                <!-- /.feature-block__item -->
                <div class="features-block__item"><img src="img/features/feature-5.png" alt="Индивидуальное производство" class="feature-block__image">
                    <!-- /.feature-block__image -->
                    <p class="features-block__text">Индивидуальное <br> производство</p>
                    <!-- /.feature-block__text -->
                </div>
                <!-- /.feature-block__item -->
                <div class="features-block__item"><img src="img/features/feature-6.png" alt="Минимальная цена на рынке" class="feature-block__image">
                    <!-- /.feature-block__image -->
                    <p class="features-block__text">Минимальная цена <br> на рынке</p>
                    <!-- /.feature-block__text -->
                </div>
                <!-- /.feature-block__item -->
            </div>
            <!-- /.feature-block -->

        </div>
        <!-- /.container -->
    </section>
    <!-- /.features section -->
    <section class="section catalog">
        <div class="container">
            <h2 class="section-title section__title" style="padding-top: 25px;">Каталог сайтов</h2>
            <div class="catalog-block">
                <div class="catalog-card catalog__card">
                    <img class="catalog-card__image" src="img/catalog/catalog-image-1.jpg" alt="">
                    <span class="catalog-card__tag">Популярный макет</span>
                    <!-- /.catalog-card__tag -->
                    <div class="catalog-card__buttons">
                        <button class="button-fitting catalog-card__button">Примерить онлайн</button>
                        <!-- /.button-fitting catalog-card__button -->
                        <button class="button-add catalog-card__button">Заказать</button>
                        <!-- /.button-add catalog-card__button -->
                        <button class="button-like"><img src="img/like.png" alt=""></button>
                        <!-- /.button-like -->
                    </div>
                    <!-- /.catalog-card__button -->
                </div>
                <!-- /.catalog-card -->
                <div class="catalog-card catalog__card">
                    <img class="catalog-card__image" src="img/catalog/catalog-image-2.jpg" alt="">
                    <span class="catalog-card__tag">Популярный макет</span>
                    <!-- /.catalog-card__tag -->
                    <div class="catalog-card__buttons">
                        <button class="button-fitting catalog-card__button">Примерить онлайн</button>
                        <!-- /.button-fitting catalog-card__button -->
                        <button class="button-add catalog-card__button">Заказать</button>
                        <!-- /.button-add catalog-card__button -->
                        <button class="button-like"><img src="img/like.png" alt=""></button>
                        <!-- /.button-like -->
                    </div>
                    <!-- /.catalog-card__button -->
                </div>
                <!-- /.catalog-card -->
                <div class="catalog-card catalog__card">
                    <img class="catalog-card__image" src="img/catalog/catalog-image-3.jpg" alt="">
                    <span class="catalog-card__tag">Новый макет</span>
                    <!-- /.catalog-card__tag -->
                    <div class="catalog-card__buttons">
                        <button class="button-fitting catalog-card__button">Примерить онлайн</button>
                        <!-- /.button-fitting catalog-card__button -->
                        <button class="button-add catalog-card__button">Заказать</button>
                        <!-- /.button-add catalog-card__button -->
                        <button class="button-like"><img src="img/like.png" alt=""></button>
                        <!-- /.button-like -->
                    </div>
                    <!-- /.catalog-card__button -->
                </div>
                <!-- /.catalog-card -->
                <div class="catalog-card catalog__card">
                    <img class="catalog-card__image" src="img/catalog/catalog-image-4.jpg" alt="">
                    <span class="catalog-card__tag">Новый макет</span>
                    <!-- /.catalog-card__tag -->
                    <div class="catalog-card__buttons">
                        <button class="button-fitting catalog-card__button">Примерить онлайн</button>
                        <!-- /.button-fitting catalog-card__button -->
                        <button class="button-add catalog-card__button">Заказать</button>
                        <!-- /.button-add catalog-card__button -->
                        <button class="button-like"><img src="img/like.png" alt=""></button>
                        <!-- /.button-like -->
                    </div>
                    <!-- /.catalog-card__button -->
                </div>
                <!-- /.catalog-card -->
                <div class="catalog-card catalog__card">
                    <img class="catalog-card__image" src="img/catalog/catalog-image-5.jpg" alt="">
                    <span class="catalog-card__tag">Новый макет</span>
                    <!-- /.catalog-card__tag -->
                    <div class="catalog-card__buttons">
                        <button class="button-fitting catalog-card__button">Примерить онлайн</button>
                        <!-- /.button-fitting catalog-card__button -->
                        <button class="button-add catalog-card__button">Заказать</button>
                        <!-- /.button-add catalog-card__button -->
                        <button class="button-like"><img src="img/like.png" alt=""></button>
                        <!-- /.button-like -->
                    </div>
                    <!-- /.catalog-card__button -->
                </div>
                <!-- /.catalog-card -->
                <div class="catalog-card catalog__card">
                    <img class="catalog-card__image" src="img/catalog/catalog-image-6.jpg" alt="">
                    <span class="catalog-card__tag">Новый макет</span>
                    <!-- /.catalog-card__tag -->
                    <div class="catalog-card__buttons">
                        <button class="button-fitting catalog-card__button">Примерить онлайн</button>
                        <!-- /.button-fitting catalog-card__button -->
                        <button class="button-add catalog-card__button">Заказать</button>
                        <!-- /.button-add catalog-card__button -->
                        <button class="button-like"><img src="img/like.png" alt=""></button>
                        <!-- /.button-like -->
                    </div>
                    <!-- /.catalog-card__button -->
                </div>
                <!-- /.catalog-card -->
                <div class="catalog-card catalog__card">
                    <img class="catalog-card__image" src="img/catalog/catalog-image-7.jpg" alt="">
                    <span class="catalog-card__tag">Популярный макет</span>
                    <!-- /.catalog-card__tag -->
                    <div class="catalog-card__buttons">
                        <button class="button-fitting catalog-card__button">Примерить онлайн</button>
                        <!-- /.button-fitting catalog-card__button -->
                        <button class="button-add catalog-card__button">Заказать</button>
                        <!-- /.button-add catalog-card__button -->
                        <button class="button-like"><img src="img/like.png" alt=""></button>
                        <!-- /.button-like -->
                    </div>
                    <!-- /.catalog-card__button -->
                </div>
                <!-- /.catalog-card -->
                <div class="catalog-card catalog__card">
                    <img class="catalog-card__image" src="img/catalog/catalog-image-8.jpg" alt="">
                    <span class="catalog-card__tag">Популярный макет</span>
                    <!-- /.catalog-card__tag -->
                    <div class="catalog-card__buttons">
                        <button class="button-fitting catalog-card__button">Примерить онлайн</button>
                        <!-- /.button-fitting catalog-card__button -->
                        <button class="button-add catalog-card__button">Заказать</button>
                        <!-- /.button-add catalog-card__button -->
                        <button class="button-like"><img src="img/like.png" alt=""></button>
                        <!-- /.button-like -->
                    </div>
                    <!-- /.catalog-card__button -->
                </div>
                <!-- /.catalog-card -->
            </div>
            <!-- /.catalog-block -->
            <div class="catalog__link" style="padding-bottom: 24px">
                <a href="#" class="button catalog__link-more button_lg">смотреть весь каталог</a>
                <span class="catalog__description">Более 100 макетов на разные темы</span>
            </div>
            <!-- /.catalog-link -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section catalog -->
    <section class="section blog">
        <div class="container">
            <div class="blog__heading">
                <h3 class="blog__title">Полезное и важное о нас</h3>
                <a href="#" class="blog__link-more">Читать все статьи</a>
            </div>
            <div class="blog-list">
                <div class="blog-card blog-list__card">
                    <div class="blog-list__image">
                        <img src="img/blog-list/blog-post-1.jpg" alt="">
                    </div>
                    <!-- /.blog-list__image -->
                    <div class="blog-list__text">
                        Виды сайтов
                    </div>
                    <!-- /.blog-list__text -->
                </div>
                <!-- /.blog-card blog-list__card -->
                <div class="blog-card blog-list__card">
                    <div class="blog-list__image">
                        <img src="img/blog-list/blog-post-2.jpg" alt="">
                    </div>
                    <!-- /.blog-list__image -->
                    <div class="blog-list__text">
                        Список разработчиков
                    </div>
                    <!-- /.blog-list__text -->
                </div>
                <!-- /.blog-card blog-list__card -->
                <div class="blog-card blog-list__card">
                    <div class="blog-list__image">
                        <img src="img/blog-list/blog-post-3.jpg" alt="">
                    </div>
                    <!-- /.blog-list__image -->
                    <div class="blog-list__text">
                        Применяемые инструменты
                    </div>
                    <!-- /.blog-list__text -->
                </div>
                <!-- /.blog-card blog-list__card -->
                <div class="blog-card blog-list__card">
                    <div class="blog-list__image">
                        <img src="img/blog-list/blog-post-4.jpg" alt="">
                    </div>
                    <!-- /.blog-list__image -->
                    <div class="blog-list__text">
                        Список выполненных<br> проектов
                    </div>
                    <!-- /.blog-list__text -->
                </div>
                <!-- /.blog-card blog-list__card -->
            </div>
            <!-- /.blog-list -->
        </div>
    </section>
    <!-- /.section blog -->
    <section class="section price">
        <div class="container">
            <h2 class="section-title section__title" style="padding-top: 24px;">Цены и виды сайтов</h2>
            <!-- /.section-title section__title -->
            <div class="price-block">
                <div class="price-card price-block__card">
                    <div class="price-card__image"><img src="img/price/price-1.jpg" alt=""></div>
                    <div class="price-card__text">
                        <div class="price-card__pricetag">
                            <h4 class="price-card__title">Простые</h4>
                            <span class="price-card__cost">От 25 долларов</span></div>
                        <div class="price-card__button">
                            <button class="button">Оставить заявку</button>
                        </div>
                    </div>
                </div>
                <div class="price-card price-block__card">
                    <div class="price-card__image"><img src="img/price/price-2.jpg" alt=""></div>
                    <div class="price-card__text">
                        <div class="price-card__pricetag">
                            <h4 class="price-card__title">Средние</h4>
                            <span class="price-card__cost">От 25 долларов</span></div>
                        <div class="price-card__button">
                            <button class="button">Оставить заявку</button>
                        </div>
                    </div>
                </div>
                <div class="price-card price-block__card">
                    <div class="price-card__image"><img src="img/price/price-3.jpg" alt=""></div>
                    <div class="price-card__text">
                        <div class="price-card__pricetag">
                            <h4 class="price-card__title">Сложные</h4>
                            <span class="price-card__cost">От 25 долларов</span></div>
                        <div class="price-card__button">
                            <button class="button">Оставить заявку</button>
                        </div>
                    </div>
                </div>
                <div class="price-card price-block__card">
                    <div class="price-card__image"><img src="img/price/price-4.jpg" alt=""></div>
                    <div class="price-card__text">
                        <div class="price-card__pricetag">
                            <h4 class="price-card__title">Индивидуальные</h4>
                            <span class="price-card__cost">От 25 долларов</span></div>
                        <div class="price-card__button">
                            <button class="button">Оставить заявку</button>
                        </div>
                    </div>
                </div>
                <div class="price-card price-block__card">
                    <div class="price-card__image"><img src="img/price/price-5.jpg" alt=""></div>
                    <div class="price-card__text">
                        <div class="price-card__pricetag">
                            <h4 class="price-card__title">Особенные</h4>
                            <span class="price-card__cost">От 25 долларов</span></div>
                        <div class="price-card__button">
                            <button class="button">Оставить заявку</button>
                        </div>
                    </div>
                </div>
                <div class="price-card price-block__card">
                    <div class="price-card__image"><img src="img/price/price-6.jpg" alt=""></div>
                    <div class="price-card__text">
                        <div class="price-card__pricetag">
                            <h4 class="price-card__title">Дешевые</h4>
                            <span class="price-card__cost">От 25 долларов</span></div>
                        <div class="price-card__button">
                            <button class="button">Оставить заявку</button>
                        </div>
                    </div>
                </div>
                <div class="price-card price-block__card">
                    <div class="price-card__image"><img src="img/price/price-7.jpg" alt=""></div>
                    <div class="price-card__text">
                        <div class="price-card__pricetag">
                            <h4 class="price-card__title">Популярные</h4>
                            <span class="price-card__cost">От 25 долларов</span></div>
                        <div class="price-card__button">
                            <button class="button">Оставить заявку</button>
                        </div>
                    </div>
                </div>
                <div class="price-card price-block__card">
                    <div class="price-card__image"><img src="img/price/price-8.jpg" alt=""></div>
                    <div class="price-card__text">
                        <div class="price-card__pricetag">
                            <h4 class="price-card__title">Необычные</h4>
                            <span class="price-card__cost">От 25 долларов</span></div>
                        <div class="price-card__button">
                            <button class="button">Оставить заявку</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section price -->
    <section class="section steps">
        <div class="container">
            <h2 class="section-title section__title" style="padding-top: 40px">
                Этапы работ
            </h2>
            <!-- /.section-title section__title -->
            <div class="steps-block">
                <div class="step">
                    <img src="img/steps/step-1.png" alt="" class="step__image">
                    <!-- /.step__image -->
                    <h4 class="step__title">Заявка</h4>
                    <!-- /.step__title -->
                    <p class="step__text">Вы оставляете заявку на нашем сайте или по телефону</p>
                    <!-- /.step__text -->
                </div>
                <!-- /.step -->
                <div class="step">
                    <img src="img/steps/step-2.png" alt="" class="step__image">
                    <!-- /.step__image -->
                    <h4 class="step__title">Интервью</h4>
                    <!-- /.step__title -->
                    <p class="step__text">Мы связываемся с Вами в установленное время и уточняем пожелания</p>
                    <!-- /.step__text -->
                </div>
                <!-- /.step -->
                <div class="step">
                    <img src="img/steps/step-3.png" alt="" class="step__image">
                    <!-- /.step__image -->
                    <h4 class="step__title">Договор</h4>
                    <!-- /.step__title -->
                    <p class="step__text">Состовляем договор по оплате и сопровождению Вашего будущего продукта</p>
                    <!-- /.step__text -->
                </div>
                <!-- /.step -->
                <div class="step">
                    <img src="img/steps/step-4.png" alt="" class="step__image">
                    <!-- /.step__image -->
                    <h4 class="step__title">Дизайн</h4>
                    <!-- /.step__title -->
                    <p class="step__text">Мы создаем уникальный дизайн сайта с учетом всех пожеланий</p>
                    <!-- /.step__text -->
                </div>
                <!-- /.step -->
                <div class="step">
                    <img src="img/steps/step-5.png" alt="" class="step__image">
                    <!-- /.step__image -->
                    <h4 class="step__title">Производство</h4>
                    <!-- /.step__title -->
                    <p class="step__text">Производим полностью продукт включая все нюансы</p>
                    <!-- /.step__text -->
                </div>
                <!-- /.step -->
                <div class="step">
                    <img src="img/steps/step-6.png" alt="" class="step__image">
                    <!-- /.step__image -->
                    <h4 class="step__title">Сопровождение</h4>
                    <!-- /.step__title -->
                    <p class="step__text">Мы поддерживаем Вас дальнейшей консультацией</p>
                    <!-- /.step__text -->
                </div>
                <!-- /.step -->
            </div>
            <!-- /.steps-block -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section steps -->
    <section class="section before" style="padding-bottom: 24px">
        <div class="container">
            <h2 class="section-title section__title" style="margin-top: 0px; margin-bottom: 48px; padding-top: 48px">Результат улучшения Ваших сайтов</h2>
            <div class="before-slider-wrap">
                <div class="before-slider">
                    <div class="before-slider__item">
                        <div class="before-after">
                            <img src="img/before-slider/before.png" alt="">
                            <img src="img/before-slider/after.png" alt="">
                        </div>
                    </div>
                    <div class="before-slider__item">
                        <div class="before-after">
                            <img src="img/before-slider/before.png" alt="">
                            <img src="img/before-slider/after.png" alt="">
                        </div>
                    </div>
                    <div class="before-slider__item">
                        <div class="before-after">
                            <img src="img/before-slider/before.png" alt="">
                            <img src="img/before-slider/after.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- /.section-title section__title -->
                <div class="before-slider-arrows">
                    <button class="arrow arrow-left">
                        <img src="img/before-slider/left.png" alt="">
                    </button>
                    <button class="arrow arrow-right">
                        <img src="img/before-slider/right.png" alt="">
                    </button>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section before -->
    <section class="section reviews">
        <div class="container">
            <h2 class="section-title section__title" style="padding-top: 24px">Отзывы наших клиентов</h2>
            <!-- /.section-title section__title -->
            <div class="reviews-slider">
                <div class="reviews-slider__item">
                    <div class="reviews-slider__text">
                        Наряду с этим ощущение мира решительно контролирует непредвиденный гравитационный парадокс. Сомнение рефлектирует естественный закон исключённого третьего..
                    </div>
                    <!-- /.reviews-slider_text -->
                    <img src="img/reviews/review-1.png" alt="" class="reviews-slider__image">
                    <!-- /.reviews-slider__image -->
                    <span class="reviews-slider__name">Иванова Анастасия Ивановна</span>
                    <!-- /.reviews-slider__name -->
                </div>
                <!-- /.reviews-slider__item -->
                <div class="reviews-slider__item">
                    <div class="reviews-slider__text">
                        Наряду с этим ощущение мира решительно контролирует непредвиденный гравитационный парадокс. Сомнение рефлектирует естественный закон исключённого третьего..
                    </div>
                    <!-- /.reviews-slider_text -->
                    <img src="img/reviews/review-2.png" alt="" class="reviews-slider__image">
                    <!-- /.reviews-slider__image -->
                    <span class="reviews-slider__name">Воркун Василий Петрович</span>
                    <!-- /.reviews-slider__name -->
                </div>
                <!-- /.reviews-slider__item -->
                <div class="reviews-slider__item">
                    <div class="reviews-slider__text">
                        Наряду с этим ощущение мира решительно контролирует непредвиденный гравитационный парадокс. Сомнение рефлектирует естественный закон исключённого третьего..
                    </div>
                    <!-- /.reviews-slider_text -->
                    <img src="img/reviews/review-3.png" alt="" class="reviews-slider__image">
                    <!-- /.reviews-slider__image -->
                    <span class="reviews-slider__name">Снег Валентина Олександровна</span>
                    <!-- /.reviews-slider__name -->
                </div>
                <!-- /.reviews-slider__item -->
            </div>
            <!-- /.reviews-slider -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section reviews -->
    <section class="offer bg-secondary" style="background: white">
        <div class="container">
            <div class="offer__block offer-block offer-block_price-bg" style="margin-top: 100px;background-color: #f1f1f1;">
                <h2 class="offer__title">В поисках адекватной цены?</h2>
                <span class="offer__subtitle">Если вы уже связывались с другими разработчиками, но хотите ниже цену,
                свжитесь с нами и мы вам оформим максимально доступную скидку.</span>
                <form action="#" class="form offer__form">
                    <div class="form__row">
                        <div class="form__group">
                            <input type="text" class="input form__input" placeholder="Ваше имя">
                        </div>
                        <div class="form__group">
                            <input type="text" class="input form__input" placeholder="Ваш телефон">
                        </div>
                        <div class="form__group">
                            <input type="text" class="input form__input" placeholder="Ваша цена">
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form__group">
                            <input type="submit" class="button form__button form__button-price" value="Получить сумму со скидкой">
                        </div>
                        <div class="form__group">
                            <span class="form__policy" style="opacity: 45%;">Ваши данные надежно защищены. Отправление заявки ни к чему не обязывает.</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section offer bg-secondary -->
    <section class="section production">
        <div class="container">
            <h2 class="section-title section__title">
                О создании сайтов
            </h2>
            <!-- /.section__title -->
            <div class="factory-block">
                <div class="factory-block__image">
                    <img src="img/factory/factory-1.jpg" alt="">
                </div>
                <div class="factory-block__text">
                    <p>
                        "...Перед тем как создаем сайты, мы исследуем рабочую область рынка, далее анализируем ресурсы конкурентов, оцениваем экономическую эффективность.
                        Создание сайта в Киеве будет значительно более эффективным, если в нём учитываются факторы влияющие на результат.
                        Весь процесс включает множество работ: формирование технического задания, разработка дизайнерского макета, создание прототипа сайта, внедрение системы управления.
                    </p>
                    <p>
                        В качестве дополнительных услуг мы готовы предложить написание уникального текстового контента, фотосъёмку для разработки элементов дизайна сайта, услуги по вопросам регистрации торговых марок.
                        Чтобы сделать по-настоящему функциональный веб-сайт,
                        Вам не придётся работать со сторонними подрядчиками — все можно сделать в одной-единственной студии приехав к нам в офис в Харьков или Киев..."
                    </p>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section production -->
    <section class="section contacts"  style="padding-bottom: 48px;">
        <div class="container">
            <h2 class="section-title section__title" style="padding-top: 24px;margin-bottom: 35px">Контакты</h2>
            <!-- /.section-title section__title -->
            <div class="contacts-block">
                <div class="contacts-block__item">
                    <img src="img/contacts/contact-1.png" alt="" class="contacts__image">
                    <!-- /.contacts__image -->
                    <div class="contacts__text">
                        <a href="#" class="contacts__link">+38(099)-220-79-31</a>
                    </div>
                    <!-- /.contacts__text -->
                </div>
                <!-- /.contacts-block__item -->
                <div class="contacts-block__item">
                    <img src="img/contacts/contact-2.png" alt="" class="contacts__image">
                    <!-- /.contacts__image -->
                    <div class="contacts__text">
                        <address class="contacts__address">Украина, г.Николаев, ул.Соборная, 38</address>
                    </div>
                    <!-- /.contacts__text -->
                </div>
                <!-- /.contacts-block__item -->
                <div class="contacts-block__item">
                    <img src="img/contacts/contact-3.png" alt="" class="contacts__image">
                    <!-- /.contacts__image -->
                    <div class="contacts__text">
                        <a href="#" class="contacts__link">dachev191@gmail.com</a>
                    </div>
                    <!-- /.contacts__text -->
                </div>
                <!-- /.contacts-block__item -->
            </div>
            <!-- /.contacts-block -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section contacts -->
    <div class="map" id="map"">
        <script type="text/javascript" charset="utf-8" async
                src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4c73956bb7bfda8c4501a5c656f669b84ab9c7b1258c18c357381ebd285ffe0d&amp;width=100%25&amp;height=410&amp;lang=ru_RU&amp;scroll=false">
        </script>
    </div>
    <section class="section questions">
        <div class="container">
            <div class="questions-block">
                <h3 class="questions__title">Остались вопросы?</h3>
                <!-- /.questions__title -->
                <a href="#" class="questions__link">Задайте их менеджеру</a>
                <!-- /.questions__link --></div>
            <!-- /.questions-block -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section questions -->
</main>
<footer class="footer">
    <div class="container">
        <div class="footer-block">
            <div class="footer__description">
                <h4 class="footer__title">Dachev Write It</h4>
                <span class="footer__subtitle">компания производства сайтов</span>
                <span class="footer__copy">© Dachev Write It</span>
            </div>
            <!-- /.footer__description -->
            <div class="footer-pay__info">
                <img src="img/footer/payments-1.png" alt="" class="footer-pay__logo">
                <img src="img/footer/payments-2.png" alt="" class="footer-pay__logo">
                <img src="img/footer/payments-3.png" alt="" class="footer-pay__logo">
                <img src="img/footer/payments-4.png" alt="" class="footer-pay__logo">
            </div>
            <!-- /.footer-pay__info -->
            <div class="footer__contacts">
                <a href="#" class="footer__phone">+38(099)-220-79-31</a>
                <a href="#" class="footer__mail">dachev191@gmail.com</a>
                <div class="footer__social" style="margin-left: 80px; margin-right: 0;">
                    <a href="#" class="footer__social-link"><img src="img/footer/social-1.png" alt="" class="footer-social__image"></a>
                    <a href="#" class="footer__social-link"><img src="img/footer/social-2.png" alt="" class="footer-social__image"></a>
                    <a href="#" class="footer__social-link"><img src="img/footer/social-3.png" alt="" class="footer-social__image"></a>
                </div>
            </div>
            <!-- /.footer__contacts -->
        </div>
        <!-- /.footer-block -->
    </div>
    <!-- /.container -->
</footer>
<!-- /.footer -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="js/jquery.event.move.js"></script>
<script src="js/jquery.twentytwenty.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>