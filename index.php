<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/normalize.css">
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
            <div class="offer__block offer-block">
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
                            <input type="text" class="input form__input">
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

</main>
</body>
</html>