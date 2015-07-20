<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
	<link href="<?php bloginfo( 'template_url' ); ?>/css/style.css" rel="stylesheet" type="text/css" />
	<link href="<?php bloginfo( 'template_url' ); ?>/font.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/js/arcticmodal/jquery.arcticmodal-0.3.css">
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/js/arcticmodal/themes/simple.css">
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<?php wp_head();?>
</head>
<body>
<div class="main">
	<!--header-->
	<div class="header">
		<a class="logo" href="/"><img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" alt="" /></a>
		<img class="picture" src="<?php bloginfo( 'template_url' ); ?>/images/picture.png" alt="" />
	</div>
	<!--end header-->
	<!--menu-->
	<div class="menu">

		<ul id="nav">
			<li class="top"><a href="#" class="top_link">Главная</a></li>
			<li class="top"><a href="#" class="top_link">Образование</a>
				<ul class="sub">
					<li><a href="#" class="fly">Образование</a></li>
					<li><a href="#" class="fly">Европа</a>
						<ul>
							<div class="first">
								<li>А</li>
								<li><a href="#">Австрия</a></li>
								<li><a href="#">Албания</a></li>
								<li><a href="#">Андорра</a></li>
								<li>Б</li>
								<li><a href="#">Белоруссия</a></li>
								<li><a href="#">Бельгия</a></li>
								<li><a href="#">Болгария</a></li>
								<li><a href="#">Босния и</a></li>
								<li><a href="#">Герцеговина</a></li>
								<li>В</li>
								<li><a href="#">Ватикан</a></li>
								<li><a href="#">Великобритания</a></li>
								<li><a href="#">Венгрия</a></li>
								<li>Г</li>
								<li><a href="#">Германия</a></li>
								<li><a href="#">Греция</a></li>
								<li>Д</li>
								<li><a href="#">Дания</a></li>
								<li>И</li>
								<li><a href="#">Ирландия</a></li>
							</div>
							<div>
								<li><a href="#">Исландия</a></li>
								<li><a href="#">Испания</a></li>
								<li><a href="#">Италия</a></li>
								<li>К</li>
								<li><a href="#">Казахстан</a></li>
								<li><a href="#">Республика</a></li>
								<li><a href="#">Косово</a></li>
								<li>Л</li>
								<li><a href="#">Латвия</a></li>
								<li><a href="#">Литва</a></li>
								<li><a href="#">Лихтенштейн</a></li>
								<li><a href="#">Люксембург</a></li>
								<li>М</li>
								<li><a href="#">Республика</a></li>
								<li><a href="#">Македония</a></li>
								<li><a href="#">Монако</a></li>
								<li><a href="#">Молдавия</a></li>
								<li>Н</li>
								<li><a href="#">Нидерланды</a></li>
								<li><a href="#">Норвегия</a></li>
							</div>
							<div>
								<li>П</li>
								<li><a href="#">Польша</a></li>
								<li><a href="#">Португалия</a></li>
								<li>К</li>
								<li><a href="#">Республика</a></li>
								<li><a href="#">Кипр</a></li>
								<li>Р</li>
								<li><a href="#">Россия</a></li>
								<li>С</li>
								<li><a href="#">Сан-Марино</a></li>
								<li><a href="#">Сербия</a></li>
								<li><a href="#">Словакия</a></li>
								<li>Т</li>
								<li><a href="#">Турция</a></li>
								<li>У</li>
								<li><a href="#">Украина</a></li>
								<li>Ф</li>
								<li><a href="#">Финляндия</a></li>
								<li><a href="#">Франция</a></li>
								<li>Х</li>
								<li><a href="#">Хорватия</a></li>
							</div>
							<div class="last">
								<li>Ч</li>
								<li><a href="#">Черногория</a></li>
								<li><a href="#">Чехия</a></li>
								<li>Ш</li>
								<li><a href="#">Швейцария</a></li>
								<li><a href="#">Швеция</a></li>
								<li>Э</li>
								<li><a href="#">Эстония</a></li>
							</div>
						</ul>
					</li>
					<li><a href="#" class="fly">США</a></li>
				</ul>
			</li>
			<li class="top"><a href="#" id="" class="top_link">Бизнес</a></li>
			<li class="top"><a href="#" id="" class="top_link">Юридические  услуги</a></li>
			<li class="top"><a href="#" id="" class="top_link">О нас</a></li>
			<li class="top"><a href="#" id="" class="top_link">Контакти</a></li>
		</ul>
	</div>
	<!--end menu-->