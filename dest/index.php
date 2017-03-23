<?php
include_once ('php/db.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="format-detection" content="telephone=no">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="images/favicon/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/android-icon-96x96.png">
		<link rel="manifest" href="images/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileColor" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<title>Index</title>
		<!-- Links-->
		<link href="css/libs/swiper.css" rel="stylesheet">
		<link href="css/libs/sweetalert.css" rel="stylesheet">
		<link href="css/template_styles.css" rel="stylesheet">
		<!-- JS-->
		<script type="text/javascript" src="js/libs/jquery v2.x.js"></script>
		<script type="text/javascript" src="js/libs/swiper.js"></script>
		<script type="text/javascript" src="js/libs/masked-input.js"></script>
		<script type="text/javascript" src="js/libs/sweetalert.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</head>
	<body>
		<div class="page">
			<!--HEADER-->
			<header class="page-header">
				<section class="well__header">
					<div class="container">
						<!-- = Inform panel =-->
						<div class="info-panel">
							<!-- = Inform panel brand =--><a class="info-panel__brand brand" href="#"><img src="images/header-logo.png" alt=""></a>
							<!-- = Inform panel btn =-->
							<div class="info-panel__btn-wrapp">
								<div class="info-panel__btn-singin"><a class="btn btn--type1" type="submit">Войти</a></div>
								<div class="info-panel__btn-registration"><a class="btn btn--type2" type="submit">Зарегистрироваться</a></div>
							</div>
							<!-- = Inform panel contact =-->
							<div class="info-panel__contact contact"><a class="contact__number" href="tel:+74852333444">+7&nbsp;(485)&nbsp;233-34-44</a><a class="contact__adress" href="mailto:info@redstaragency.ru">info@redstaragency.ru</a></div>
						</div>
					</div>
				</section>
				<section class="well__navigation">
					<div class="container">
						<nav class="nav-panel__nav"><a class="nav-panel__trigger" id="hamburger" href="#"><span></span></a>
							<ul class="navigation" id="navigation">
								<li class="navigation__item"><a class="navigation__link nav-list__link" href="#">Дилерам</a></li>
								<li class="navigation__item"><a class="navigation__link nav-list__link" href="#">Производство</a></li>
								<li class="navigation__item"><a class="navigation__link nav-list__link" href="#">Мастер-классы</a></li>
								<li class="navigation__item"><a class="navigation__link nav-list__link" href="#">Каталог продукции</a></li>
								<li class="navigation__item"><a class="navigation__link nav-list__link" href="#">Новости</a></li>
								<li class="navigation__item"><a class="navigation__link nav-list__link" href="#">О нас</a></li>
								<li class="navigation__item"><a class="navigation__link nav-list__link" href="#">Контакты</a></li>
							</ul>
						</nav>
					</div>
				</section>
			</header>
			<!--MAIN-->
			<main class="page-content">
				<!--= Section 1 .well__index--1 =-->
				<section class="well__index--1">
					<!--= swiper slider =-->
					<div class="swiper-container slider-container">
						<div class="swiper-wrapper slider-wrapper">
							<!--=slider 8 =
							-->
							<div class="swiper-slide slider" data-slide="1">
								<div class="slider__inside-container">
									<ul class="slider__nav-list nav-list">
										<li class="nav-list__item"><a class="nav-list__link" href="#">Главная</a></li>
										<li class="nav-list__item"><a class="nav-list__link" href="#">Услуги</a></li>
										<li class="nav-list__item"><a class="nav-list__link" href="#">Дилерам</a></li>
									</ul>
									<div class="slider__title">Оптовая продажа сайтов для творчества</div>
									<div class="slider__text">Гармонический интервал синхронно диссонирует композиционный рефрен, таким образом, сходные законы контрастирующего развития&nbsp;характерны и для процессов в психике</div>
									<div class="slider__btn"><a class="btn btn--type2">Заказать звонок</a></div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--= Section 2 .well__index--2 =-->
				<section class="well__index--2 bg-lightBlue">
					<!--= container =-->
					<div class="container">
						<h1 class="heading--1 text-center">Почему Redstar Agency?</h1>
						<ul class="advantages">
							<?php
                            foreach ($arAdvantages as $v){
                                ?>
							<li class="advantages__item">
								<div class="whyRS">
									<div class="whyRS__asside"><img class="whyRS__img" src="<?=$v['ICON_LINK']?>" alt=""></div>
									<div class="whyRS__cnt">
										<div class="whyRS__title"><?=$v['NAME']?></div>
										<div class="whyRS__text"><?=$v['TEXT']?></div>
									</div>
								</div>
							</li>
							<?php
                            }
                            ?>
						</ul>
					</div>
				</section>
				<!--= Section 3 .well__index--3 =-->
				<section class="well__index--3">
					<!--= container =-->
					<div class="container">
						<h3 class="heading--3 text-center">Каталог сайтов</h3>
						<div class="catallog-card-wraper">
							<?php
                            foreach ($arCatalog as $v){

                            ?>
							<a class="catallog-card text-center">
								<div class="catallog-card__head">
									<div class="catallog-card__img"><img src="<?=$v['IMG']?>" alt=""></div>
								</div>
								<div class="catallog-card__midle">
									<div class="catallog-card__title"><?=$v['NAME']?></div>
									<div class="catallog-card__text"><?=$v['TEXT']?></div>
									<div class="catallog-card__price"><?=$v['PRICE']?><span class="catallog-card__fa-ruble"></span></div>
								</div>
								<div class="catallog-card__footer">
									<div class="catallog-card__info">Подробнее о товаре</div>
								</div></a>

							<?php
                            }
                            ?>



							<div class="catallog-card__btn"><a class="btn btn--type1" type="submit">Посмотреть полный каталог</a></div>
						</div>
					</div>
				</section>
				<!--= Section 4 .well__index--4 =-->
				<section class="well__index--4 bg-lightBlue">
					<!--= container =-->
					<div class="container">
						<h2 class="heading--2 text-center">Узнать условия сотрудничества</h2>
						<p class="seoText text-center">Мы рады любым клиентам: розничным магазинам, интернет магазинам, крупным торговым сетям. Для каждого клиента мы подберем оптимальные условия работы. Свяжитесь с нами, мы обязательно договоримся.</p>
						<form class="form" action="#" method="post">
							<div class="form-group"><span>Имя</span>
								<label class="placeholder-color placeholder-effect2">
									<input class="form-input" type="text" name="name" placeholder="Ваше имя" required>
								</label>
							</div>
							<div class="form-group"><span>Телефон</span>
								<label class="placeholder-color">
									<input class="form-input" type="phone" id="phone" name="phone" placeholder="+7 (___) ___-__-__" required>
								</label>
							</div>
							<div class="form-group"><span>E-mail</span>
								<label class="placeholder-color placeholder-effect2">
									<input class="form-input" type="email" id="mail" name="email" placeholder="Ваш E-mail" required>
								</label>
							</div>
							<div class="form__btn">
								<a class="btn btn--type3" name="submit" id="submit">Отправить заявку</a>
							</div>
							<button type="submit" class="hide"></button>
						</form>
					</div>
				</section>
			</main>
			<!--FOOTER-->
			<footer class="page-footer">
				<section class="well__footer"></section>
			</footer>
		</div>
	</body>
</html>