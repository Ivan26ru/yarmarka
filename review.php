<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Yarmarka.pro</title>
	<!-- Css style -->
	<link rel="stylesheet" href="/css/main.css">
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
						<img src="/img/person.png" alt=""/>
					</div>
					<span class="head__more">
						<img src="/img/head-more.png" alt="">
					</span>
				</div>
			</nav>
		</div>
	</header>
<!-- Contant -->
	<section class="contant" id="contant">
		<div class="container">
			<nav class="menu">
				<img src="/img/menu-person.png" alt="" class="menu__photo"/>
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
						<img src="/img/icon-1.svg" alt=""/>
						<a href="#">Моя страница</a>
					</li>
					<li>
						<img src="/img/icon-2.svg" alt=""/>
						<a href="#">Мои сообщения</a>
						<span class="menu__quantity">1</span>
					</li>
					<li>
						<img src="/img/icon-3.svg" alt=""/>
						<a href="#">Мои отзывы</a>
						<span class="menu__quantity">12</span>
					</li>
					<li>
						<img src="/img/icon-4.svg" alt=""/>
						<a href="#">Мои объявления</a>
					</li>
				</ul>
				<ul class="menu__nav">
					<li>
						<img src="/img/icon-5.svg" alt=""/>
						<a href="#">Избранное</a>
					</li>
					<li>
						<img src="/img/icon-6.svg" alt=""/>
						<a href="#">История</a>
					</li>
				</ul>
				<ul class="menu__nav">
					<li>
						<img src="/img/icon-7.svg" alt=""/>
						<a href="#">Настройки</a>
					</li>
					<li>
						<img src="/img/icon-8.svg" alt=""/>
						<a href="#">Выйти</a>
					</li>
				</ul>
				<div class="menu__awards">
					<p>
						Мои награды
					</p>
					<div class="menu__icon">
						<img src="/img/menu-1.svg" alt=""/>
					</div>
					<div class="menu__icon">
						<img src="/img/menu-2.svg" alt=""/>
					</div>
					<div class="menu__icon">
						<img src="/img/menu-3.svg" alt=""/>
					</div>
					<div class="menu__icon">
						<img src="/img/menu-4.svg" alt=""/>
					</div>
					<div class="menu__icon">
						<img src="/img/menu-5.svg" alt=""/>
					</div>
					<div class="menu__icon">
						<img src="/img/menu-6.svg" alt=""/>
					</div>
					<div class="menu__icon">
						<img src="/img/menu-7.svg" alt=""/>
					</div>
					<div class="menu__icon">
						<img src="/img/menu-8.svg" alt=""/>
					</div>
					<div class="menu__icon">
						<img src="/img/menu-9.svg" alt=""/>
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
						<img src="/img/home-1.svg" alt=""/>
					</button>
					<button class="home__btn">
						<p>Резюме</p>
						<img src="/img/home-2.svg" alt=""/>
					</button>
					<button class="home__btn">
						<p>Барахолка</p>
						<img src="/img/home-3.svg" alt=""/>
					</button>
					<button class="home__btn">
						<p>Услуги</p>
						<img src="/img/home-4.svg" alt=""/>
					</button>
					<button class="home__btn">
						<p>Аренда</p>
						<img src="/img/home-5.svg" alt=""/>
					</button>
					<button class="home__btn">
						<p>Аренда</p>
						<img src="/img/home-6.svg" alt=""/>
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
								<img src="/img/vector.svg" alt=""/>
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
			 	<div class="recall">
			 		<h3 class="recall__title">
			 			Мои отзывы
			 			<span>
			 				(все отзывы)
			 			</span>
			 		</h3>
			 		<div class="recall__filter">
			 			<p class="recall__sorting">
			 				Сортировка:
			 			</p>
			 			<div class="recall__group">
			 				<p>5</p>
			 				<img src="img/reting.svg" alt=""/>
			 				<span> (4) </span>
			 			</div>
			 			<div class="recall__group">
			 				<p> 4</p>
			 				<img src="img/reting.svg" alt=""/>
			 				<span> (0) </span>
			 			</div>
			 			<div class="recall__group">
			 				<p>3 </p>
			 				<img src="img/reting.svg" alt=""/>
			 				<span> (0) </span>
			 			</div>
			 			<div class="recall__group">
			 				<p>2 </p>
			 				<img src="img/reting.svg" alt=""/>
			 				<span> (0) </span>
			 			</div>
			 			<div class="recall__group">
			 				<p>1 </p>
			 				<img src="img/reting.svg" alt=""/>
			 				<span> (0) </span>
			 			</div>
			 			<button class="recall__btn recall__btn_one">
			 				Барахолка
			 			</button>
			 			<button class="recall__btn">
			 				Услуги
			 			</button>
			 			<button class="recall__btn">
			 				Аренда
			 			</button>
			 		</div>
			 		<div class="recall__item">
			 			<div class="recall__up">
			 				<p class="recall__date">
			 					21.03.2021
			 				</p>
			 				<p class="recall__name">
			 					Валентина Ивановна
			 				</p>
			 				<div class="recall__riting">
			 					<img src="img/reting.svg" alt=""/>
			 					<img src="img/reting.svg" alt=""/>
			 					<img src="img/reting.svg" alt=""/>
			 					<img src="img/reting.svg" alt=""/>
			 					<img src="img/reting.svg" alt=""/>
			 				</div>
			 				<a href="#" class="recall__delet">
			 					Удалить
			 				</a>
			 			</div>
			 			<div class="recall__cont">
			 				<p>
			 					Все отлично! Хороший товар, покупкой абсолютно довольна! Устраивает внешний вид, именно то, что хотела. Также хочу отметить вежливость и пунктуальность продавца. На связь выходил моментально
			 				</p>
			 			</div>
			 		</div>
			 		<div class="recall__item">
			 			<div class="recall__up">
			 				<p class="recall__date">
			 					21.03.2021
			 				</p>
			 				<p class="recall__name">
			 					Валентина Ивановна
			 				</p>
			 				<div class="recall__riting">
			 					<img src="img/reting.svg" alt=""/>
			 					<img src="img/reting.svg" alt=""/>
			 					<img src="img/reting.svg" alt=""/>
			 					<img src="img/reting.svg" alt=""/>
			 					<img src="img/reting.svg" alt=""/>
			 				</div>
			 				<a href="#" class="recall__delet">
			 					Удалить
			 				</a>
			 			</div>
			 			<div class="recall__cont">
			 				<p>
			 					Все отлично! Хороший товар, покупкой абсолютно довольна! Устраивает внешний вид, именно то, что хотела. Также хочу отметить вежливость и пунктуальность продавца. На связь выходил моментально
			 				</p>
			 			</div>
			 		</div>
			 		<div class="recall__item">
			 			<div class="recall__up">
			 				<p class="recall__date">
			 					21.03.2021
			 				</p>
			 				<p class="recall__name">
			 					Валентина Ивановна
			 				</p>
			 				<div class="recall__riting">
			 					<img src="img/reting.svg" alt=""/>
			 					<img src="img/reting.svg" alt=""/>
			 					<img src="img/reting.svg" alt=""/>
			 					<img src="img/reting.svg" alt=""/>
			 					<img src="img/reting.svg" alt=""/>
			 				</div>
			 				<a href="#" class="recall__delet">
			 					Удалить
			 				</a>
			 			</div>
			 			<div class="recall__cont">
			 				<p>
			 					Все отлично! Хороший товар, покупкой абсолютно довольна! Устраивает внешний вид, именно то, что хотела. Также хочу отметить вежливость и пунктуальность продавца. На связь выходил моментально
			 				</p>
			 			</div>
			 		</div>
			 		<div class="recall__item">
			 			<div class="recall__up">
			 				<p class="recall__date">
			 					21.03.2021
			 				</p>
			 				<p class="recall__name">
			 					Валентина Ивановна
			 				</p>
			 				<div class="recall__riting">
			 					<img src="img/reting.svg" alt=""/>
			 					<img src="img/reting.svg" alt=""/>
			 					<img src="img/reting.svg" alt=""/>
			 					<img src="img/reting.svg" alt=""/>
			 					<img src="img/reting.svg" alt=""/>
			 				</div>
			 				<a href="#" class="recall__delet">
			 					Удалить
			 				</a>
			 			</div>
			 			<div class="recall__cont">
			 				<p>
			 					Все отлично! Хороший товар, покупкой абсолютно довольна! Устраивает внешний вид, именно то, что хотела. Также хочу отметить вежливость и пунктуальность продавца. На связь выходил моментально
			 				</p>
			 			</div>
			 		</div>
			 		<div class="recall__page">
		 				<a href="#" class="prev"><img src="/img/arrow.svg" alt=""/></a>
		 				<p>Стр <span>1</span>из 15</p>
		 				<a href="#" class="next"><img src="/img/arrow.svg" alt=""/></a>
		 				<input type="text" placeholder="1">
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