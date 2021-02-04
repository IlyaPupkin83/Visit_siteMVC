<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>Сайт-визитка</title>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
	<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
	<script type="text/javascript">
		function random(number) {

			return Math.floor(Math.random() * (number + 1));
		};


		$(document).ready(function() {

			var quotes = $('.quote');
			quotes.hide();

			var qlen = quotes.length;
			$('.quote:eq(' + random(qlen - 1) + ')').show();
		});
	</script>
</head>

<body>
	<div id="wrapper">
		<div id="header">
			<div id="logo">

			</div>
			<div id="menu">
				<ul>
					<li class="first active"><a href="/">Главная</a></li>
					<li><a href="/services">Услуги</a></li>
					<li><a href="/portfolio">Портфолио</a></li>
					<li class="last"><a href="/contacts">Контакты</a></li>
				</ul>
				<br class="clearfix" />
			</div>
		</div>
		<div id="page">
			<div id="sidebar">
				<div class="side-box">
					<h3>Случайная цитата</h3>
					<p align="justify" class="quote">
						«Сайт, как живой организм, изменяется и развивается.
						Нельзя сразу написать идеальный вариант и на этом откланяться - это утопия»
					</p>
					<p align="justify" class="quote">
						«Все должно быть очень просто, как текстовый файл и при этом функционально
						и тогда пользователи от нас уйдут»
					</p>
					<p align="justify" class="quote">
						«Критика - это когда критик объясняет автору, как сделал бы он, если бы умел»
					</p>
					<p align="justify" class="quote">
						«Сумасшедшим становиться тот, кто попытался разобраться в этом сумасшедшем мире»
					</p>
					<p align="justify" class="quote">
						«Опытный разработчик знает, какой выбор ведет к поставленной цели, в то время как
						новичок каждый раз делает шаг в неизвестность»
					</p>
				</div>
				<div class="side-box">
					<h3>Основное меню</h3>
					<ul class="list">
						<li class="first "><a href="/">Главная</a></li>
						<li><a href="/services">Услуги</a></li>
						<li><a href="/portfolio">Портфолио</a></li>
						<li class="last"><a href="/contacts">Контакты</a></li>
					</ul>
				</div>
			</div>
			<div id="content">
				<div class="box">
					<?php include 'application/views/' . $content_view; ?>
				</div>
				<br class="clearfix" />
			</div>
			<br class="clearfix" />
		</div>
		<div id="page-bottom">
			<div id="page-bottom-sidebar">
				<h3>Наши контакты</h3>
				<ul class="list">
					<li class="first">icq: 199534538</li>
					<li>skypeid: fgsxdsg</li>
					<li class="last">email: gffdgfdsd@gmail.com</li>
				</ul>
			</div>
			<div id="page-bottom-content">
				<h3>О Компании</h3>
				<p>
					Равным образом консультация с широким активом требуют определения и уточнения соответствующий условий активизации. Повседневная практика показывает, что новая модель организационной деятельности позволяет оценить значение существенных финансовых и административных условий. Не следует, однако забывать, что постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании дальнейших направлений развития. Значимость этих проблем настолько очевидна, что сложившаяся структура организации в значительной степени обуславливает создание системы обучения кадров, соответствует насущным потребностям. Не следует, однако забывать, что сложившаяся структура организации требуют определения и уточнения новых предложений.
				</p>
			</div>
			<br class="clearfix" />
		</div>
	</div>
	<div id="footer">
		<a href="/">Сайт-визитка</a> &copy; 2021</a>
	</div>
</body>

</html>