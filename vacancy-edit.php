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
            <div class="edit" id="edit">
                <div class="edit__up">
                    <div class="edit__part">
                        <h3 class="edit__name">
                            Вакансии - Публикация объявления
                        </h3>
                        <p class="edit__text">
                            <span class="green">РО</span>
                            — рейтинг объявления. Объявления с более высоким рейтингом с большей вероятностью будут заметны, а доверие соискателей к таким объявлениям выше. YARMARKA помогает реализовать ваши объявления. Расскажите подробнее о вакансии и условиях, опубликуйте фотографии и укажите место встречи.
                        </p>
                        <p class="edit__text">
                            <span class="blue">Подсказка:</span>
                            используйте ключевые слова в названии и описании объявления. Это слова, по которым соискатели ищут тот или иной товар. Например: <span class="italik">“Бариста”, “Кафе”, “Бармен”, “Бар”, “Barmen”</span> и другие.
                        </p>
                    </div>
                    <div class="edit__part">
                        <p>
                            Рейтинг объявления
                        </p>
                        <div class="edit__rating">
                            <span>4/10</span>
                        </div>
                    </div>
                </div>
                <ul class="edit__list">
                    <li class="edit__item align-center">
                        <span class="edit__title">
                            Название вакансии:
                        </span>
                        <div class="edit__cont">
                            <input class="edit__inp edit__inp_title"></input>
                        </div>
                        <div class="edit__status">
                            <p>Обязательно</p>
                        </div>
                    </li>
                    <li class="edit__item align-center">
                        <span class="edit__title">
                            Категория:
                        </span>
                        <div class="edit__cont">
                            <select class="edit__kategory" id="carts" name="kategory-list">
                                <option value="one">Выберите категорию</option>
                                <option value="two">категорию-1</option>
                                <option value="three">категорию-2</option>
                                <option value="four">категорию-3</option>
                            </select>
                        </div>
                        <div class="edit__status">
                            <p>Обязательно</p>
                        </div>
                    </li>
                    <li class="edit__item align-center">
                        <span class="edit__title">
                            Занятость:
                        </span>
                        <div class="edit__cont">
                            <button class="edit__employment">Полная</button>
                            <button class="edit__employment">Частичная</button>
                            <button class="edit__employment">Посменно</button>
                            <button class="edit__employment">Свободная</button>
                        </div>
                        <div class="edit__status">
                            <span>+1 РО</span>
                        </div>
                    </li>
                    <li class="edit__item">
                        <span class="edit__title">
                            Описание вакансии:
                        </span>
                        <div class="edit__cont">
                            <textarea name="textarea" id="" class="edit__about"></textarea>
                        </div>
                        <div class="edit__status">
                            <span>+2 РО</span>
                        </div>
                    </li>
                    <li class="edit__item align-center">
                        <span class="edit__title">
                            Зарплата:
                        </span>
                        <div class="edit__cont">
                            <input type="text" class="edit__inp edit__inp_rub"/>
                            <span class="rub">₽</span>
                            <button class="edit__fixed">Фиксированная</button>
                            <input type="text" class="edit__inp edit__inp_before"/>
                            <span class="before">От</span>
                        </div>
                        <div class="edit__status">
                            <span>+1 РО</span>
                        </div>
                    </li>
                    <li class="edit__item">
                        <span class="edit__title">
                             Фотографии:
                        </span>
                        <div class="edit__cont">
                            <div class="edit__picture">
                                <a href="#" class="edit__photo"></a>
                                <span class="edit__condition">
                                   От 1 до 6 фото
                                </span>
                            </div>
                        </div>
                        <div class="edit__status">
                            <span>+2 РО</span>
                        </div>
                    </li>
                    <li class="edit__item">
                        <span class="edit__title">
                            Место работы:
                        </span>
                        <div class="edit__cont">
                            <div class="edit__place">
                                <input type="text" class="edit__inp edit__inp_search" placeholder="Начните вводить адрес, а потом выберите из списка"/>
                                <img src="img/card.png" alt="" class="edit__card"/>
                            </div>
                        </div>
                        <div class="edit__status">
                            <span>+1 РО</span>
                        </div>
                    </li>
                    <li class="edit__item align-center">
                        <span class="edit__title">
                            Опыт работы:
                        </span>
                        <div class="edit__cont">
                            <select class="edit__experience" id="carts" name="experience-list">
                                <option value="one">Выберите опыт</option>
                                <option value="two">1 год</option>
                                <option value="three">2 года</option>
                                <option value="four">3 года</option>
                            </select>
                        </div>
                        <div class="edit__status">
                            <span>+1 РО</span>
                        </div>
                    </li>
                    <li class="edit__item align-center">
                        <span class="edit__title">
                            E-mail:
                        </span>
                        <div class="edit__cont">
                            <input type="text" class="edit__inp edit__inp_email"/>
                        </div>
                        <div class="edit__status">
                            <span>+1 РО</span>
                        </div>
                    </li>
                    <li class="edit__item align-center">
                        <span class="edit__title">
                            Телефон:
                        </span>
                        <div class="edit__cont">
                            <input type="text" class="edit__inp edit__inp_tel"/>
                        </div>
                        <div class="edit__status">
                            <span>+1 РО</span>
                        </div>
                    </li>
                </ul>
                <div class="edit__down">
                    <button class="edit__publish btn">
                        Опубликовать
                    </button>
                    <button class="edit__archive">
                        Добавить в архив
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
