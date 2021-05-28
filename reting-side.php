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
						<img src="img/head-more.png" alt=""/>
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
            <a href="#" class="menu__rating">
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
            <div class="user">
                <div class="user__contant">
                    <div class="user__photo">
                        <img src="img/menu-person.png" alt=""/>
                    </div>
                    <div class="user__info">
                        <h1 class="user__name">
                            Виктор Юрьевич
                            <span class="user__status">new</span>
                        </h1>
                        <ul class="user__list">
                            <li>
                                <p>Уровень в разделе: <span class="user__semibold">(8lvl)</span></p>
                            </li>
                            <li>
                                <p>Опыт в разделе: <span  class="user__semibold">85 exp</span></p>
                            </li>
                            <li>
                                <p>Статус: <span  class="user__bold">Пользователь</span></p>
                            </li>
                            <li>
                                <p>Регистрация: <span class="user__regular">21.03.2021</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="rating rating-side">
                <h3>
                    Рейтинг: <span>Виктор Юрьевич</span>
                </h3>
                <div class="rating__item">
                    <div class="rating__info">
                        <div class="rating__ball">
                            <span>4/10</span>
                        </div>
                        <ul class="rating__lore">
                            <li class="rating__one">
                                <p class="rating__bold">
                                    Ветка:<span class="rating__bold rating__bold_big"> соискатель <span class="rating__italic">(Раздел сайта — Резюме)</span></span>
                                </p>
                            </li>
                            <li class="rating__two">
                                <p>
                                    Ваш ранг:<span> “Активист 1” </span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    Ваш уровень:<span> 5 LVL </span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    Текущий опыт:<span> 250 points</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="rating__reward">
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/menu-2.svg" alt=""/>
                            </div>
                            <span>Новичок</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/reting-2.svg" alt=""/>
                            </div>
                            <span>Пользователь</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/reting-3.svg" alt=""/>
                            </div>
                            <span>Энтузиаст</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/reting-4.svg" alt=""/>
                            </div>
                            <span>Активист 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/reting-5.svg" alt=""/>
                            </div>
                            <span>Активист 2</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/reting-6.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Профи 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/reting-7.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Профи 2</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/reting-8.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Профи 3</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/reting-9.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Лидер 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/reting-last.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Лидер 2</span>
                        </div>
                    </div>
                </div>
                <div class="rating__item">
                    <div class="rating__info">
                        <div class="rating__ball">
                            <span>4/10</span>
                        </div>
                        <ul class="rating__lore">
                            <li class="rating__one">
                                <p class="rating__bold">
                                    Ветка:<span class="rating__bold rating__bold_big"> работодатель <span class="rating__italic">(Раздел сайта — Вакансии)</span></span>
                                </p>
                            </li>
                            <li class="rating__two">
                                <p>
                                    Ваш ранг:<span> “Активист 1” </span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    Ваш уровень:<span> 4 LVL </span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    Текущий опыт:<span> 110 points</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="rating__reward">
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating2.1.svg" alt=""/>
                            </div>
                            <span>Новичок</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating2.2.svg" alt=""/>
                            </div>
                            <span>Пользователь</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating2.3.svg" alt=""/>
                            </div>
                            <span>Энтузиаст</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating2.4.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Активист 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating2.5.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Активист 2</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating2.6.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Профи 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating2.7.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Профи 2</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating2.8.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Профи 3</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating2.9.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Лидер 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating2.last.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Лидер 2</span>
                        </div>
                    </div>
                </div>
                <div class="rating__item">
                    <div class="rating__info">
                        <div class="rating__ball">
                            <span>4/10</span>
                        </div>
                        <ul class="rating__lore">
                            <li class="rating__one">
                                <p class="rating__bold">
                                    Ветка:<span class="rating__bold rating__bold_big"> торговец <span class="rating__italic">(Раздел сайта — Барахолка)</span></span>
                                </p>
                            </li>
                            <li class="rating__two">
                                <p>
                                    Ваш ранг:<span> “Активист 1” </span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    Ваш уровень:<span> 3 LVL </span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    Текущий опыт:<span> 800 points</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="rating__reward">
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating3.1.svg" alt=""/>
                            </div>
                            <span>Новичок</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating3.2.svg" alt=""/>
                            </div>
                            <span>Пользователь</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating3.3.svg" alt=""/>
                            </div>
                            <span>Энтузиаст</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating3.4.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Активист 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating3.5.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Активист 2</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating3.6.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Профи 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating3.7.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Профи 2</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating3.8.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Профи 3</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating3.9.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Лидер 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating3.last.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Лидер 2</span>
                        </div>
                    </div>
                </div>
                <div class="rating__item">
                    <div class="rating__info">
                        <div class="rating__ball">
                            <span>4/10</span>
                        </div>
                        <ul class="rating__lore">
                            <li class="rating__one">
                                <p class="rating__bold">
                                    Ветка:<span class="rating__bold rating__bold_big"> помощник<span class="rating__italic">(Раздел сайта — Услуги)</span></span>
                                </p>
                            </li>
                            <li class="rating__two">
                                <p>
                                    Ваш ранг:<span> “Активист 1” </span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    Ваш уровень:<span> 4 LVL </span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    Текущий опыт:<span> 110 points</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="rating__reward">
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating4.1.svg" alt=""/>
                            </div>
                            <span>Новичок</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating4.2.svg" alt=""/>
                            </div>
                            <span>Пользователь</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating4.3.svg" alt=""/>
                            </div>
                            <span>Энтузиаст</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating4.4.svg" alt=""/>
                            </div>
                            <span>Активист 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating4.5.svg" alt=""/>
                            </div>
                            <span>Активист 2</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating4.6.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Профи 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating4.7.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Профи 2</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating4.8.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Профи 3</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating4.9.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Лидер 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating4.last.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Лидер 2</span>
                        </div>
                    </div>
                </div>
                <div class="rating__item">
                    <div class="rating__info">
                        <div class="rating__ball">
                            <span>4/10</span>
                        </div>
                        <ul class="rating__lore">
                            <li class="rating__one">
                                <p class="rating__bold">
                                    Ветка:<span class="rating__bold rating__bold_big"> Арендодатель <span class="rating__italic">(Раздел сайта — Аренда)</span></span>
                                </p>
                            </li>
                            <li class="rating__two">
                                <p>
                                    Ваш ранг:<span> “Активист 1” </span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    Ваш уровень:<span> 4 LVL </span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    Текущий опыт:<span> 110 points</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="rating__reward">
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating5.1.svg" alt=""/>
                            </div>
                            <span>Новичок</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating5.2.svg" alt=""/>
                            </div>
                            <span>Пользователь</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating5.3.svg" alt=""/>
                            </div>
                            <span>Энтузиаст</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating5.4.svg" alt=""/>
                            </div>
                            <span>Активист 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating5.5.svg" alt=""/>
                            </div>
                            <span>Активист 2</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating5.6.svg" alt=""/>
                            </div>
                            <span>Профи 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating5.7.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Профи 2</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating5.8.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Профи 3</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating5.9.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Лидер 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating5.last.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Лидер 2</span>
                        </div>
                    </div>
                </div>
                <div class="rating__item">
                    <div class="rating__info">
                        <div class="rating__ball">
                            <span>4/10</span>
                        </div>
                        <ul class="rating__lore">
                            <li class="rating__one">
                                <p class="rating__bold">
                                    Ветка:<span class="rating__bold rating__bold_big"> Комьюнити <span class="rating__italic"></span></span>
                                </p>
                            </li>
                            <li class="rating__two">
                                <p>
                                    Ваш ранг:<span> “Активист 1” </span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    Ваш уровень:<span> 10 LVL </span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    Текущий опыт:<span> 1110 points</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="rating__reward">
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating6.1.svg" alt=""/>
                            </div>
                            <span>Новичок</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating6.2.svg" alt=""/>
                            </div>
                            <span>Пользователь</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating6.3.svg" alt=""/>
                            </div>
                            <span>Энтузиаст</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating6.4.svg" alt=""/>
                            </div>
                            <span>Активист 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating6.5.svg" alt=""/>
                            </div>
                            <span>Активист 2</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating6.6.svg" alt=""/>
                            </div>
                            <span>Профи 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating6.7.svg" alt=""/>
                            </div>
                            <span>Профи 2</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating6.8.svg" alt=""/>
                            </div>
                            <span>Профи 3</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating6.9.svg" alt=""/>
                            </div>
                            <span>Лидер 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating6.last.svg" alt=""/>
                            </div>
                            <span>Лидер 2</span>
                        </div>
                    </div>
                </div>
                <div class="rating__item">
                    <div class="rating__info">
                        <div class="rating__ball">
                            <span>4/10</span>
                        </div>
                        <ul class="rating__lore">
                            <li class="rating__one">
                                <p class="rating__bold">
                                    Ветка:<span class="rating__bold rating__bold_big"> общественник <span class="rating__italic"></span></span>
                                </p>
                            </li>
                            <li class="rating__two">
                                <p>
                                    Ваш ранг:<span> “Активист 1” </span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    Ваш уровень:<span> 4 LVL </span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    Текущий опыт:<span> 110 points</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="rating__reward">
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating7.1.svg" alt=""/>
                            </div>
                            <span>Новичок</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating7.2.svg" alt=""/>
                            </div>
                            <span>Пользователь</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating7.3.svg" alt=""/>
                            </div>
                            <span>Энтузиаст</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating7.4.svg" alt=""/>
                            </div>
                            <span>Активист 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating7.5.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Активист 2</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating7.6.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Профи 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating7.7.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Профи 2</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating7.8.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Профи 3</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating7.9.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Лидер 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating7.last.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Лидер 2</span>
                        </div>
                    </div>
                </div>
                <div class="rating__item">
                    <div class="rating__info">
                        <div class="rating__ball">
                            <span>4/10</span>
                        </div>
                        <ul class="rating__lore">
                            <li class="rating__one">
                                <p class="rating__bold">
                                    Ветка:<span class="rating__bold rating__bold_big"> агитатор <span class="rating__italic"></span></span>
                                </p>
                            </li>
                            <li class="rating__two">
                                <p>
                                    Ваш ранг:<span> “Активист 1” </span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    Ваш уровень:<span> 4 LVL </span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    Текущий опыт:<span> 110 points</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="rating__reward">
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating8.1.svg" alt=""/>
                            </div>
                            <span>Новичок</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating8.2.svg" alt=""/>
                            </div>
                            <span>Пользователь</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating8.3.svg" alt=""/>
                            </div>
                            <span>Энтузиаст</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating8.4.svg" alt=""/>
                            </div>
                            <span>Активист 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating8.5.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Активист 2</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating8.6.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Профи 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating8.7.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Профи 2</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating8.8.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Профи 3</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating8.9.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Лидер 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating8.last.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Лидер 2</span>
                        </div>
                    </div>
                </div>
                <div class="rating__item">
                    <div class="rating__info">
                        <div class="rating__ball">
                            <span>4/10</span>
                        </div>
                        <ul class="rating__lore">
                            <li class="rating__one">
                                <p class="rating__bold">
                                    Ветка:<span class="rating__bold rating__bold_big"> другие достижения <span class="rating__italic"></span></span>
                                </p>
                            </li>
                            <li class="rating__two">
                                <p>
                                    Ваш ранг:<span> “Активист 1” </span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    Ваш уровень:<span> 4 LVL </span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    Текущий опыт:<span> 110 points</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="rating__reward">
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating9.1.svg" alt=""/>
                            </div>
                            <span>Новичок</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating9.2.svg" alt=""/>
                            </div>
                            <span>Пользователь</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating9.3.svg" alt=""/>
                            </div>
                            <span>Энтузиаст</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating9.4.svg" alt=""/>
                            </div>
                            <span>Активист 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating9.5.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Активист 2</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating9.6.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Профи 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating9.7.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Профи 2</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating9.8.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Профи 3</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating9.9.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Лидер 1</span>
                        </div>
                        <div class="rating__go">
                            <div class="rating__icon">
                                <img src="img/rating9.last.svg" alt=""/>
                                <span></span>
                            </div>
                            <span>Лидер 2</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</section>
<!-- Footer -->
<footer class="footer" id="footer"
<script src="js/main.js"></script>
</body>
</html>