<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?>
    <!-- Contant -->
    <section class="contant" id="contant">
        <div class="container">
            <nav class="menu">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/menu-person.png" alt="" class="menu__photo"/>
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
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon-1.svg" alt=""/>
                        <a href="#">Моя страница</a>
                    </li>
                    <li>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon-2.svg" alt=""/>
                        <a href="#">Мои сообщения</a>
                        <span class="menu__quantity">1</span>
                    </li>
                    <li>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon-3.svg" alt=""/>
                        <a href="#">Мои отзывы</a>
                        <span class="menu__quantity">12</span>
                    </li>
                    <li>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon-4.svg" alt=""/>
                        <a href="ads.php">Мои объявления</a>
                    </li>
                </ul>
                <ul class="menu__nav">
                    <li>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon-5.svg" alt=""/>
                        <a href="#">Избранное</a>
                    </li>
                    <li>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon-6.svg" alt=""/>
                        <a href="#">История</a>
                    </li>
                </ul>
                <ul class="menu__nav">
                    <li>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon-7.svg" alt=""/>
                        <a href="#">Настройки</a>
                    </li>
                    <li>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon-8.svg" alt=""/>
                        <a href="#">Выйти</a>
                    </li>
                </ul>
                <div class="menu__awards">
                    <p>
                        Мои награды
                    </p>
                    <div class="menu__icon">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/menu-1.svg" alt=""/>
                    </div>
                    <div class="menu__icon">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/menu-2.svg" alt=""/>
                    </div>
                    <div class="menu__icon">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/menu-3.svg" alt=""/>
                    </div>
                    <div class="menu__icon">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/menu-4.svg" alt=""/>
                    </div>
                    <div class="menu__icon">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/menu-5.svg" alt=""/>
                    </div>
                    <div class="menu__icon">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/menu-6.svg" alt=""/>
                    </div>
                    <div class="menu__icon">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/menu-7.svg" alt=""/>
                    </div>
                    <div class="menu__icon">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/menu-8.svg" alt=""/>
                    </div>
                    <div class="menu__icon">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/menu-9.svg" alt=""/>
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
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/home-1.svg" alt=""/>
                    </button>
                    <button class="home__btn">
                        <p>Резюме</p>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/home-2.svg" alt=""/>
                    </button>
                    <button class="home__btn">
                        <p>Барахолка</p>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/home-3.svg" alt=""/>
                    </button>
                    <button class="home__btn">
                        <p>Услуги</p>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/home-4.svg" alt=""/>
                    </button>
                    <button class="home__btn">
                        <p>Аренда</p>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/home-5.svg" alt=""/>
                    </button>
                    <button class="home__btn">
                        <p>Аренда</p>
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/home-6.svg" alt=""/>
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
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/vector.svg" alt=""/>
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
                <div class="offer">
                    <div class="offer__up">
                        <h3 class="offer__name">
                            Вакансии
                        </h3>
                        <div class="offer__level">
                            <p>Ваш уровень: <span>0</span></p>
                            <a href="#" class="offer__reting">(смотреть рейтинг)</a>
                        </div>
                    </div>
                    <p class="offer__text">
                        Просмотрите больше вакансий, чтобы найти ту самую! Разнообразие предложений от работодателей не позволит вам остаться без работы. Мы поможем подобрать должность, созданную для вас — приступим!
                    </p>
                    <div class="offer__contant">
                        <div class="offer__item">
                            <span class="offer__like" id="like"> </span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                    <div class="offer__down">
                        <a href="#" class="offer__btn btn">
                            Посмотреть еще
                        </a>
                        <a href="#" class="offer__link offer__link_place">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/offer-1.svg" alt=""/>
                            <span>Разместить</span>
                        </a>
                        <a href="#" class="offer__link offer__link_reting-shou">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/offer-2.svg" alt=""/>
                            <span>Мой рейтинг</span>
                        </a>
                        <a herf="#" class="offer__link offer__link_elect">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/offer-3.svg" alt=""/>
                            <span>Избранное</span>
                        </a>
                    </div>
                </div>
                <div class="home__blurb">
                    <div class="blurb"></div>
                    <div class="blurb"></div>
                </div>
                <div class="offer">
                    <div class="offer__up">
                        <h3 class="offer__name">
                            Резюме
                        </h3>
                        <div class="offer__level">
                            <p>Ваш уровень: <span>0</span></p>
                            <a href="#" class="offer__reting">(смотреть рейтинг)</a>
                        </div>
                    </div>
                    <p class="offer__text">
                        Многие отличные работники остаются без занятости только лишь потому, что их просто не заметили. Мы не допустим этого и не оставим без внимания тех, кто вам так нужен. Широкий спектр вакансий позволит вам найти лучших помощников для своего бизнеса!
                    </p>
                    <div class="offer__contant">
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                    <div class="offer__down">
                        <a href="#" class="offer__btn btn">
                            Посмотреть еще
                        </a>
                        <a href="#" class="offer__link offer__link_place">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/offer-1.svg" alt=""/>
                            <span>Разместить</span>
                        </a>
                        <a href="#" class="offer__link offer__link_reting-shou">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/offer-2.svg" alt=""/>
                            <span>Мой рейтинг</span>
                        </a>
                        <a herf="#" class="offer__link offer__link_elect">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/offer-3.svg" alt=""/>
                            <span>Избранное</span>
                        </a>
                    </div>
                </div>
                <div class="home__blurb">
                    <div class="blurb"></div>
                    <div class="blurb"></div>
                </div>
                <div class="offer">
                    <div class="offer__up">
                        <h3 class="offer__name">
                            Барахолка
                        </h3>
                        <div class="offer__level">
                            <p>Ваш уровень: <span>0</span></p>
                            <a href="#" class="offer__reting">(смотреть рейтинг)</a>
                        </div>
                    </div>
                    <p class="offer__text">
                        Абсолютное большинство вещей дома, в кладовке или в гараже имеют право на вторую жизнь. Кроме того, что это принесет вам доход, вы поможете сократить уровень отходов на 15%.Зачем выбрасывать вещь, если она может послужить еще кому-то?
                    </p>
                    <div class="offer__contant">
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                    <div class="offer__down">
                        <a href="#" class="offer__btn btn">
                            Посмотреть еще
                        </a>
                        <a href="#" class="offer__link offer__link_place">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/offer-1.svg" alt=""/>
                            <span>Разместить</span>
                        </a>
                        <a href="#" class="offer__link offer__link_reting-shou">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/offer-2.svg" alt=""/>
                            <span>Мой рейтинг</span>
                        </a>
                        <a herf="#" class="offer__link offer__link_elect">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/offer-3.svg" alt=""/>
                            <span>Избранное</span>
                        </a>
                    </div>
                </div>
                <div class="home__blurb">
                    <div class="blurb"></div>
                    <div class="blurb"></div>
                </div>
                <div class="offer">
                    <div class="offer__up">
                        <h3 class="offer__name">
                            Вакансии
                        </h3>
                        <div class="offer__level">
                            <p>Ваш уровень: <span>0</span></p>
                            <a href="#" class="offer__reting">(смотреть рейтинг)</a>
                        </div>
                    </div>
                    <p class="offer__text">
                        Просмотрите больше вакансий, чтобы найти ту самую! Разнообразие предложений от работодателей не позволит вам остаться без работы. Мы поможем подобрать должность, созданную для вас — приступим!
                    </p>
                    <div class="offer__contant">
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                    <div class="offer__down">
                        <a href="#" class="offer__btn btn">
                            Посмотреть еще
                        </a>
                        <a href="#" class="offer__link offer__link_place">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/offer-1.svg" alt=""/>
                            <span>Разместить</span>
                        </a>
                        <a href="#" class="offer__link offer__link_reting-shou">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/offer-2.svg" alt=""/>
                            <span>Мой рейтинг</span>
                        </a>
                        <a herf="#" class="offer__link offer__link_elect">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/offer-3.svg" alt=""/>
                            <span>Избранное</span>
                        </a>
                    </div>
                </div>
                <div class="home__blurb">
                    <div class="blurb"></div>
                    <div class="blurb"></div>
                </div>
                <div class="offer">
                    <div class="offer__up">
                        <h3 class="offer__name">
                            Вакансии
                        </h3>
                        <div class="offer__level">
                            <p>Ваш уровень: <span>0</span></p>
                            <a href="#" class="offer__reting">(смотреть рейтинг)</a>
                        </div>
                    </div>
                    <p class="offer__text">
                        Просмотрите больше вакансий, чтобы найти ту самую! Разнообразие предложений от работодателей не позволит вам остаться без работы. Мы поможем подобрать должность, созданную для вас — приступим!
                    </p>
                    <div class="offer__contant">
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                        <div class="offer__item">
                            <span class="offer__like" id="like"></span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/about.png" alt="" class="offer__photo"/>
                            <p class="offer__title">
                                Секретарской работы минимум! Только в Москве
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
                    <div class="offer__down">
                        <a href="#" class="offer__btn btn">
                            Посмотреть еще
                        </a>
                        <a href="#" class="offer__link offer__link_place">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/offer-1.svg" alt=""/>
                            <span>Разместить</span>
                        </a>
                        <a href="#" class="offer__link offer__link_reting-shou">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/offer-2.svg" alt=""/>
                            <span>Мой рейтинг</span>
                        </a>
                        <a herf="#" class="offer__link offer__link_elect">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/offer-3.svg" alt=""/>
                            <span>Избранное</span>
                        </a>
                    </div>
                </div>
            </main>
        </div>
    </section>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>