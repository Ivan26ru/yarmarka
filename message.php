<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yarmarka.pro</title>
    <!-- Css style -->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<!-- Header -->
<header class="header" id="header">
    <div class="container container-head">
        <nav class="head">
            <a href="#" class="head__logo">
                <p>Найди свое</p>
                <p><span>ya</span>rmarka.<span>pro</span></p>
            </a>
            <div class="head__form">
                <form>
                    <label>
                        <select class="trade__piece choice" id="carts" name="carlist">
                            <option value="volvo">Выберите категорию</option>
                            <option value="saab">категорию-1</option>
                            <option value="opel">категорию-2</option>
                            <option value="audi">категорию-3</option>
                        </select>
                        <input type="text" placeholder="Найти...">
                        <select class="trade__piece choice" id="carts" name="carlist">
                            <option value="volvo">Москва</option>
                            <option value="saab">Санкт-Петербург</option>
                            <option value="opel">Казань</option>
                            <option value="audi">Екатеринбург</option>
                        </select>
                    </label>
                    <button class="btn">Найти</button>
                </form>
            </div>
            <div class="head__person">
                <p class="head__name">
                    Константин
                </p>
                <div class="head__photo">
                    <img src="img/person.png" alt=""/>
                </div>
                <span class="head__more">
						<img src="img/head-more.png" alt="">
					</span>
            </div>
        </nav>
    </div>
</header>
<!-- Contant -->
<section class="contant" id="contant">
    <div class="container">
        <nav class="menu">
            <img src="img/menu-person.png" alt="" class="menu__photo"/>
            <div class="menu__info">
                <span class="level">1lvl</span>
                <span class="bal">1500/15000</span>
                <span class="status">new</span>
            </div>
            <a href="#" class="menu__reting">
                Посмотреть рейтинг
            </a>
            <ul class="menu__nav">
                <li>
                    <img src="img/icon-1.svg" alt=""/>
                    <a href="#">Моя страница</a>
                </li>
                <li>
                    <img src="img/icon-2.svg" alt=""/>
                    <a href="#">Мои сообщения</a>
                    <span class="menu__quantity">1</span>
                </li>
                <li>
                    <img src="img/icon-3.svg" alt=""/>
                    <a href="#">Мои отзывы</a>
                    <span class="menu__quantity">12</span>
                </li>
                <li>
                    <img src="img/icon-4.svg" alt=""/>
                    <a href="#">Мои объявления</a>
                </li>
            </ul>
            <ul class="menu__nav">
                <li>
                    <img src="img/icon-5.svg" alt=""/>
                    <a href="#">Избранное</a>
                </li>
                <li>
                    <img src="img/icon-6.svg" alt=""/>
                    <a href="#">История</a>
                </li>
            </ul>
            <ul class="menu__nav">
                <li>
                    <img src="img/icon-7.svg" alt=""/>
                    <a href="#">Настройки</a>
                </li>
                <li>
                    <img src="img/icon-8.svg" alt=""/>
                    <a href="#">Выйти</a>
                </li>
            </ul>
            <div class="menu__awards">
                <p>
                    Мои награды
                </p>
                <div class="menu__icon">
                    <img src="img/menu-1.svg" alt=""/>
                </div>
                <div class="menu__icon">
                    <img src="img/menu-2.svg" alt=""/>
                </div>
                <div class="menu__icon">
                    <img src="img/menu-3.svg" alt=""/>
                </div>
                <div class="menu__icon">
                    <img src="img/menu-4.svg" alt=""/>
                </div>
                <div class="menu__icon">
                    <img src="img/menu-5.svg" alt=""/>
                </div>
                <div class="menu__icon">
                    <img src="img/menu-6.svg" alt=""/>
                </div>
                <div class="menu__icon">
                    <img src="img/menu-7.svg" alt=""/>
                </div>
                <div class="menu__icon">
                    <img src="img/menu-8.svg" alt=""/>
                </div>
                <div class="menu__icon">
                    <img src="img/menu-9.svg" alt=""/>
                </div>
                <a href="#" class="menu__more">
                    Посмотреть все
                </a>
            </div>
        </nav>
        <main class="home">
            <div class="home__filter">
                <button class="home__btn">
                    <p>Вакансии</p>
                    <img src="img/home-1.svg" alt=""/>
                </button>
                <button class="home__btn">
                    <p>Резюме</p>
                    <img src="img/home-2.svg" alt=""/>
                </button>
                <button class="home__btn">
                    <p>Барахолка</p>
                    <img src="img/home-3.svg" alt=""/>
                </button>
                <button class="home__btn">
                    <p>Услуги</p>
                    <img src="img/home-4.svg" alt=""/>
                </button>
                <button class="home__btn">
                    <p>Аренда</p>
                    <img src="img/home-5.svg" alt=""/>
                </button>
                <button class="home__btn">
                    <p>Аренда</p>
                    <img src="img/home-6.svg" alt=""/>
                </button>
                <div class="blurb"></div>
            </div>
            <div class="home__search">
                <form>
                    <label>
                        <select class="trade__piece choice" id="carts" name="carlist">
                            <option value="volvo">Выберите категорию</option>
                            <option value="saab">категорию-1</option>
                            <option value="opel">категорию-2</option>
                            <option value="audi">категорию-3</option>
                        </select>
                        <input type="text" placeholder="Найти..." class="search">
                        <button class="search-btn">
                            <img src="img/vector.svg" alt=""/>
                        </button>
                        <select class="trade__piece choice" id="carts" name="carlist">
                            <option value="volvo">Москва</option>
                            <option value="saab">Санкт-Петербург</option>
                            <option value="opel">Казань</option>
                            <option value="audi">Екатеринбург</option>
                        </select>
                    </label>
                    <button class="btn">Найти</button>
                </form>
            </div>
            <div class="message">
                <div class="message__contant">
                    <div class="message__part">
                        <input type="text" class="message__search" placeholder="Найти среди сообщений ..."/>
                        <button>
                            <img src="img/vector.svg" alt=""/>
                        </button>
                        <div class="message__cont">
                            <div class="message_item">
                                <div class="offer__item">
                                    <span class="offer__like" id="like"> </span>
                                    <div class="offer__img">
                                        <span class="offer__like" id="like"> </span>
                                        <img src="img/about.png" alt="" class="offer__photo"/>
                                    </div>
                                    <div class="offer__message">
                                        <p class="offer__title">
                                            Секретарской работы минимум Только в Москве
                                        </p>
                                        <div class="offer__prise">
                                            <p>5000р</p>
                                            <span>Без опыта</span>
                                        </div>
                                        <div class="offer__place">
                                            <p>Москва</p>
                                            <span>Сегодня 11:10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="message__card">
                                    <div class="message__up">
                                        <div class="message__photo">
                                            <img src="img/like-user.svg" alt=""/>
                                        </div>
                                        <div class="message__name">
                                            <p>
                                                Алексей
                                            </p>
                                            <p class="message__level">
                                                (8lvl)
                                                <span></span>
                                            </p>
                                            <span class="message__time">
                                                Только что
                                            </span>
                                        </div>
                                    </div>
                                    <p class="message__about">
                                        Вы: <span>Добрый день! Когда можно будет узнать ...</span>
                                        <span class="message__quantity">1</span>
                                    </p>
                                </div>
                            </div>
                            <div class="message_item">
                                <div class="offer__item">
                                    <div class="offer__img">
                                        <span class="offer__like" id="like"> </span>
                                        <img src="img/about.png" alt="" class="offer__photo"/>
                                    </div>
                                    <div class="offer__message">
                                        <p class="offer__title">
                                            Секретарской работы минимум Только в Москве
                                        </p>
                                        <div class="offer__prise">
                                            <p>5000р</p>
                                            <span>Без опыта</span>
                                        </div>
                                        <div class="offer__place">
                                            <p>Москва</p>
                                            <span>Сегодня 11:10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="message__card">
                                    <div class="message__up">
                                        <div class="message__photo">
                                            <img src="img/like-user.svg" alt=""/>
                                        </div>
                                        <div class="message__name">
                                            <p>
                                                Алексей
                                            </p>
                                            <p class="message__level">
                                                (8lvl)
                                                <span></span>
                                            </p>
                                            <span class="message__time">
                                                Только что
                                            </span>
                                        </div>
                                    </div>
                                    <p class="message__about">
                                        Вы: <span>Добрый день! Когда можно будет узнать ...</span>
                                    </p>
                                </div>
                            </div>
                            <div class="message_item">
                                <div class="offer__item">
                                    <div class="offer__img">
                                        <span class="offer__like" id="like"> </span>
                                        <img src="img/about.png" alt="" class="offer__photo"/>
                                    </div>
                                    <div class="offer__message">
                                        <p class="offer__title">
                                            Секретарской работы минимум Только в Москве
                                        </p>
                                        <div class="offer__prise">
                                            <p>5000р</p>
                                            <span>Без опыта</span>
                                        </div>
                                        <div class="offer__place">
                                            <p>Москва</p>
                                            <span>Сегодня 11:10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="message__card">
                                    <div class="message__up">
                                        <div class="message__photo">
                                            <img src="img/like-user.svg" alt=""/>
                                        </div>
                                        <div class="message__name">
                                            <p>
                                                Алексей
                                            </p>
                                            <p class="message__level">
                                                (8lvl)
                                                <span></span>
                                            </p>
                                            <span class="message__time">
                                                Только что
                                            </span>
                                        </div>
                                    </div>
                                    <p class="message__about">
                                        Вы: <span>Добрый день! Когда можно будет узнать ...</span>
                                    </p>
                                </div>
                            </div>
                            <div class="message_item">
                                <div class="offer__item">
                                    <div class="offer__img">
                                        <span class="offer__like" id="like"> </span>
                                        <img src="img/about.png" alt="" class="offer__photo"/>
                                    </div>
                                    <div class="offer__message">
                                        <p class="offer__title">
                                            Секретарской работы минимум Только в Москве
                                        </p>
                                        <div class="offer__prise">
                                            <p>5000р</p>
                                            <span>Без опыта</span>
                                        </div>
                                        <div class="offer__place">
                                            <p>Москва</p>
                                            <span>Сегодня 11:10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="message__card">
                                    <div class="message__up">
                                        <div class="message__photo">
                                            <img src="img/like-user.svg" alt=""/>
                                        </div>
                                        <div class="message__name">
                                            <p>
                                                Алексей
                                            </p>
                                            <p class="message__level">
                                                (8lvl)
                                                <span></span>
                                            </p>
                                            <span class="message__time">
                                                Только что
                                            </span>
                                        </div>
                                    </div>
                                    <p class="message__about">
                                        Вы: <span>Добрый день! Когда можно будет узнать ...</span>
                                    </p>
                                </div>
                            </div>
                            <div class="message_item">
                                <div class="offer__item">
                                    <div class="offer__img">
                                        <span class="offer__like" id="like"> </span>
                                        <img src="img/about.png" alt="" class="offer__photo"/>
                                    </div>
                                    <div class="offer__message">
                                        <p class="offer__title">
                                            Секретарской работы минимум Только в Москве
                                        </p>
                                        <div class="offer__prise">
                                            <p>5000р</p>
                                            <span>Без опыта</span>
                                        </div>
                                        <div class="offer__place">
                                            <p>Москва</p>
                                            <span>Сегодня 11:10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="message__card">
                                    <div class="message__up">
                                        <div class="message__photo">
                                            <img src="img/like-user.svg" alt=""/>
                                        </div>
                                        <div class="message__name">
                                            <p>
                                                Алексей
                                            </p>
                                            <p class="message__level">
                                                (8lvl)
                                                <span></span>
                                            </p>
                                            <span class="message__time">
                                                Только что
                                            </span>
                                        </div>
                                    </div>
                                    <p class="message__about">
                                        Вы: <span>Добрый день! Когда можно будет узнать ...</span>
                                    </p>
                                </div>
                            </div>
                            <div class="message_item">
                                <div class="user__contant user__contant_message">
                                    <div class="user__photo">
                                        <span class="offer__like" id="like"> </span>
                                        <img src="img/empty-foon.png" alt="" class="offer__photo_empty"/>
                                    </div>
                                    <div class="user__info">
                                        <p class="user__name">
                                            Виктор Юрьевич
                                        </p>
                                        <ul class="user__list">
                                            <li>
                                                <p>Уровень в разделе: <span class="user__semibold">(8lvl)</span></p>
                                            </li>
                                            <li>
                                                <p>Опыт в разделе: <span  class="user__semibold">85 exp</span></p>
                                            </li>
                                            <li>
                                                <span class="user__status">new</span>
                                                <p>Регистрация: <span class="user__regular">21.03.2021</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="message__card">
                                    <div class="message__up">
                                        <div class="message__photo">
                                            <img src="img/like-user.svg" alt=""/>
                                        </div>
                                        <div class="message__name">
                                            <p>
                                                Алексей
                                            </p>
                                            <p class="message__level">
                                                (8lvl)
                                                <span></span>
                                            </p>
                                            <span class="message__time">
                                                Только что
                                            </span>
                                        </div>
                                    </div>
                                    <p class="message__about">
                                        Вы: <span>Добрый день! Когда можно будет узнать ...</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="message__part">
                        <div class="message__info">
                            <div class="message__title">
                                <div class="message__name message__name_title">
                                    <p>
                                        Алексей
                                    </p>
                                    <p class="message__level">
                                        (8lvl)
                                        <span></span>
                                    </p>
                                </div>
                                <div class="message__status">
                                    <p>
                                        Статус:
                                        <span class="message__user">
                                        Пользователь
                                    </span>
                                    </p>
                                </div>
                            </div>
                            <div class="message__data">
                                <div>
                                   <span> Уровень:</span>
                                    <span>Опыт:</span>
                                </div>
                                <div>
                                    <span>3lvl</span>
                                    <span>85 exp</span>
                                </div>
                            </div>
                        </div>
                        <div class="massage__container">
                            <div class="massage__text">
                                <div class="message__photo">
                                    <img src="img/like-user.svg" alt=""/>
                                </div>
                                <div class="message__name message__name_cont">
                                    <p>
                                        Алексей
                                        <span class="message__time">
                                            11:10
                                        </span>
                                    </p>
                                    <p class="message__list">
                                        Добрый день!
                                    </p>
                                </div>
                            </div>
                            <div class="massage__text">
                                <div class="message__photo">
                                    <img src="img/empty-foon.png" alt=""/>
                                </div>
                                <div class="message__name message__name_cont">
                                    <p>
                                        Вы
                                        <span class="message__time">
                                            11:10
                                        </span>
                                    </p>
                                    <p class="message__list">
                                        Добрый день! Когда можно будет узнать ...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="message__write">
                            <input type="text" placeholder="Напишите сообщение ..."/>
                            <a href="#" class="message__file">
                                <img src="img/file.svg" alt=""/>
                            </a>
                            <a href="#" class="message__go">
                                <img src="img/go.svg" alt=""/>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="message__down">
                    <a href="#" class="offer__link offer__link_place">
                        <img src="img/offer-1.svg" alt=""/>
                        <span>Разместить</span>
                    </a>
                    <a href="#" class="offer__link offer__link_reting-shou">
                        <img src="img/offer-2.svg" alt=""/>
                        <span>Мой рейтинг</span>
                    </a>
                    <a herf="#" class="offer__link offer__link_elect">
                        <img src="img/offer-3.svg" alt=""/>
                        <span>Избранное</span>
                    </a>
                </div>
            </div>
        </main>
    </div>
</section>
<!-- Footer -->
<footer class="footer" id="footer">
    <div class="container">
        <div class="footer-contant">
            <ul class="footer-menu">
                <li>
                    <a href="#">
                        Работа и вакансии
                    </a>
                </li>
                <li>
                    <a href="#">
                        Вакансии
                    </a>
                </li>
                <li>
                    <a href="#">
                        Свежие вакансии
                    </a>
                </li>
                <li>
                    <a href="#">
                        Вакансии Москва
                    </a>
                </li>
                <li>
                    <a href="#">
                        Вакансии от работодателя
                    </a>
                </li>
                <li>
                    <a href="#">
                        Прямые вакансии
                    </a>
                </li>
                <li>
                    <a href="#">
                        Вакансии для женщин
                    </a>
                </li>
                <li>
                    <a href="#">
                        Вакансии сегодня
                    </a>
                </li>
                <li>
                    <a href="#">
                        Работа в Москве
                    </a>
                </li>
            </ul>
            <ul class="footer-menu">
                <li>
                    <a href="#">
                        Бесплатные объявления
                    </a>
                </li>
                <li>
                    <a href="#">
                        Доска бесплатных объявления
                    </a>
                </li>
                <li>
                    <a href="#">
                        Подать объявление бесплатно
                    </a>
                </li>
                <li>
                    <a href="#">
                        Продажа БУ
                    </a>
                </li>
                <li>
                    <a href="#">
                        Бесплатные частные объявления
                    </a>
                </li>
                <li>
                    <a href="#">
                        Барахолка
                    </a>
                </li>
                <li>
                    <a href="#">
                        Купить на барахолке
                    </a>
                </li>
                <li>
                    <a href="#">
                        Частные объявления
                    </a>
                </li>
                <li>
                    <a href="#">
                        Объявления по продаже
                    </a>
                </li>
                <li>
                    <a href="#">
                        Купить БУ
                    </a>
                </li>
            </ul>
            <ul class="footer-menu">
                <li>
                    <a href="#">
                        Аренда
                    </a>
                </li>
                <li>
                    <a href="#">
                        Аренда в Москве
                    </a>
                </li>
                <li>
                    <a href="#">
                        Аренда квартир
                    </a>
                </li>
                <li>
                    <a href="#">
                        Аренда помещения
                    </a>
                </li>
                <li>
                    <a href="#">
                        Аренда машины
                    </a>
                </li>
                <li>
                    <a href="#">
                        Аренда автомобиля
                    </a>
                </li>
                <li>
                    <a href="#">
                        Сдача в аренду
                    </a>
                </li>
                <li>
                    <a href="#">
                        Аренда дома
                    </a>
                </li>
                <li>
                    <a href="#">
                        Аренда участка
                    </a>
                </li>
                <li>
                    <a href="#">
                        Аренда такси
                    </a>
                </li>
            </ul>
            <ul class="footer-menu">
                <li>
                    <a href="#">
                        Услуги
                    </a>
                </li>
                <li>
                    <a href="#">
                        Платные услуги
                    </a>
                </li>
                <li>
                    <a href="#">
                        Оказание услуг
                    </a>
                </li>
                <li>
                    <a href="#">
                        Предоставление услуг
                    </a>
                </li>
                <li>
                    <a href="#">
                        Товары и услуги
                    </a>
                </li>
                <li>
                    <a href="#" class="footer-logo">
                        <p>Найди свое</p>
                        <p><span>ya</span>rmarka.<span>pro</span></p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        Контакты
                    </a>
                </li>
                <li>
                    <a href="#">
                        Реклама
                    </a>
                </li>
                <li>
                    <a href="#">
                        Инвесторам
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<script src="js/main.js"></script>
</body>
</html>

