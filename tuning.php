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
            <div class="tuning">
                <ul class="tuning__list">
                    <li>
                        <div class="tuning__main">
                            <div class="tuning__info">
                                <div class="tuning__photo"></div>
                                <div class="tuning__edit">
                                    <span class="tuning__title tuning__title_user">
                                        Аватар:
                                    </span>
                                    <a href="#" class="tuning__link tuning__link_edit">Редактировать фото</a>
                                    <a href="#" class="tuning__link tuning__link_download">Загрузить новое фото</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="tuning__item align-center">
                        <span class="tuning__title">
                            Адрес:
                        </span>
                        <div class="tuning__cont">
                            <input class="tuning__inp tuning__inp_title"></input>
                        </div>
                    </li>
                    <li class="tuning__item align-center">
                        <span class="tuning__title">
                            Регион:
                        </span>
                        <div class="tuning__cont">
                            <select class="tuning__kategory" id="carts" name="kategory-list">
                                <option value="one">Выберите регион</option>
                                <option value="two">регион-1</option>
                                <option value="three">регион-2</option>
                                <option value="four">регион-3</option>
                            </select>
                        </div>
                    </li>
                    <li class="tuning__item align-center">
                        <span class="tuning__title">
                            E-mail:
                        </span>
                        <div class="tuning__cont">
                            <input tape="mail" class="tuning__inp tuning__inp_title"></input>
                        </div>
                    </li>
                    <li class="tuning__item align-center">
                        <span class="tuning__title">
                            Телефон:
                        </span>
                        <div class="tuning__cont">
                            <input type="tel" class="tuning__inp tuning__inp_tel"/>
                        </div>
                    </li>
                    <li class="tuning__item tuning__item_pas align-center">
                        <span class="tuning__title">
                            Текущий пароль:
                        </span>
                        <div class="tuning__cont">
                            <input type="text" class="tuning__inp tuning__inp_pas"/>
                        </div>
                    </li>
                    <li class="tuning__item align-center">
                        <span class="tuning__title">
                            Новый пароль:
                        </span>
                        <div class="tuning__cont">
                            <input type="text" class="tuning__inp tuning__inp_pas"/>
                            <span class="tuning__eye"></span>
                        </div>
                    </li>
                    <li class="tuning__item align-center">
                        <span class="tuning__title">
                            Повторите пароль:
                        </span>
                        <div class="tuning__cont">
                            <input type="text" class="tuning__inp tuning__inp_pas"/>
                            <span class="tuning__eye"></span>
                        </div>
                    </li>
                </ul>
                <div class="tuning__down">
                    <div class="tuning__part">
                        <a href="#" class="tuning__title">
                             Служба поддержки
                         </a>
                        <button class="tuning__save btn">
                            Сохранить
                        </button>
                    </div>
                    <button class="tuning__delet">
                        Удалить аккаунт
                    </button>
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


