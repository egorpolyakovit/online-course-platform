<html>
	<head>
		<title>Ваше задание отправлено на проверку преподавателю</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">		
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/menu.css">
		<link rel="stylesheet" href="css/popup.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	</head>
	<body>
		<header>
			<a href="/" class="logo" title="Курс дистанционного обучения"></a>

			<a href="#searchForm" class="search" title="Поиск по курсу">Поиск по курсу</a>
			<a href="login.php" class="login" title="Авторизация студентов">Войти</a>
			<nav id="navigation" aria-label="Menu">
				<label for="toggle-mobile-menu" aria-label="Menu"></label>
				<input id="toggle-mobile-menu" type="checkbox">
				<ul id="main-menu">
					<li><a href="about.html" class="parentURL" title="О курсе">О курсе</a></li>
					<li><a href="rules.html" class="childURL" title="Правила дистанционного обучения">Правила обучения</a></li>					
					<li><a href="author.html" class="childURL" title="Автор курса обучения">Автор курса</a></li>					
					<li><a href="plan.html" class="childURL" title="План курса обучения">План курса обучения</a></li>
					<li><a href="calendar.html" class="childURL" title="Календарный план курса обучения">Календарный план</a></li>		
					<li><a href="#" class="parentURL" title="Методические материалы">Методические материалы</a></li>
					<li><a href="definitions.html" class="childURL" title="Термины и определения">Термины и определения</a></li>				
					<li><a href="literature.html" class="childURL" title="Литература">Литература</a></li>
					<li><a href="video.html" class="childURL" title="Видео материалы">Видео материалы</a></li>	
					<li><a href="additional.html" class="childURL" title="Сопутствующие материалы">Сопутствующие материалы</a></li>				
					<li><a href="lectures.html" class="parentURL" title="Лекции">Лекции</a></li>
					<li><a href="practicums.html" class="parentURL" title="Практикумы">Практикумы</a></li>
					<li><a href="tasks.html#practicum" class="childURL" title="Практикумы">Домашние задания</a></li>
					<li><a href="practice-tasks.html" class="childURL" title="Выполненные задания">Выполненные задания</a></li>					
					<li><a href="plan.html#examination" class="parentURL" title="Аттестация по курсу обучения">Аттестация</a></li>
					<li><a href="rules.html#examination" class="childURL" title="Правила проведения экзамена">Правила проведения экзамена</a></li>
					<li><a href="tasks.html#examination" class="childURL" title="Задания для экзамена">Задания для экзамена</a></li>
					<li><a href="upload.php" class="childURL" title="Загрузка решения по экзамену">Загрузка решения по&nbsp;экзамену</a></li>
					<li><a href="results.php" class="childURL" title="Результаты экзамена">Результаты экзамена</a></li>
					<li><a href="support.php" class="parentURL" title="Техническая поддержка">Техническая поддержка</a></li>					
					<li><a href="feedback.php" class="childURL" title="Обратная связь">Обратная связь</a></li>
				</ul>
			</nav>
		</header>
		<nav class="sideMenu">
			<div class="courseTitle">
				<a href="about.html">Введение в&nbsp;векторную&nbsp;графику</a>
				<small>Адаптация для&nbsp;студентов I&nbsp;курса</small>
			</div>
			<ul class="mainSections">
				<li>
					<a href="plan.html#lections" id="lection">
						<b>Лекции</b><i>10</i>
					</a>
				</li>
				<li>
					<a href="plan.html#practicums" id="practicum">
						<b>Практикумы</b><i>10</i>
					</a>
				</li>
				<li>
					<a href="tasks.html#practicum" id="tasks">
						<b>Задания</b><i>10</i>
					</a>
				</li>				
				<li>
					<a href="plan.html#exam" id="exam">
						<b>Аттестация</b>
					</a>
				</li>					
			</ul>
			<div class="copyright">
				<span class="copyright">2020 &copy; Курс дистанционного обучения «Введение&nbsp;в&nbsp;векторную&nbsp;графику»</span>
				<span class="notice"><i></i>Все материалы только для&nbsp;обучения студентов в&nbsp;учебно-методическом процессе.</span>
			</div>
		</nav>
		<script type="javascript">
			$(function() {
			  jQuery(function($) {
				$('#cyrilic').on('keypress', function() {
				  var that = this;
				  setTimeout(function() {
					var res = /[^а-яА-ЯїЇєЄіІёЁ ]/g.exec(that.value);
					that.value = that.value.replace(res, '');
				  }, 0);
				});
			  });
			})
		</script>
		<section class="content">
			<article class="description">				
				<h1 class="green" id="order">Ваше задание отправлено</h1>
				<div class="message" id="uploadComplete">
					<i></i>
					<p>Ваше задание отправлено на&nbsp;проверку преподавателю по&nbsp;курсу обучения.</p>
					<p>Ожидайте ответ на&nbsp;электронную почту в&nbsp;ближайшее время.</p>
					<a href="plan.html" class="btn">Вернуться к&nbsp;учебному курсу</a>
				</div>
			</article>
			<article class="materials">
				<h2>Методические материалы</h2>
				<ul>
					<li class="definitions"><a href="definitions.html">Термины и определения</a></li>				
					<li class="literature"><a href="literature.html">Рекомендуемая литература</a></li>
					<li class="video"><a href="video.html">Видео материалы</a></li>	
					<li class="additional"><a href="additional.html">Сопутствующие материалы</a></li>				
				</ul>
			</article>
			<div class="sectionNav">
				<a href="plan.html" class="educationPlan" title="Перейти к плану обучения">План обучения</a>
				<a href="examination.html" class="educationExam" title="Перейти к описанию экзамена">Экзамен по курсу</a>			
			</div>
		</section>
		<div id="searchForm" class="fade">
			<div class="popup">
				<div class="header">
					<h2>Поиск по курсу</h2>
					<a href="#" class="close"></a>
				</div>
				<div class="content">
					<script>$(function(){$("input#searching").on("input",function(){var a=$(this).val().toLowerCase();if(a.length<=2){$("ul#searching li").show()}else{$("ul#searching li").each(function(){if($(this).text().toLowerCase().indexOf(a)<0){$(this).hide()}})}})});</script>
					<input id="searching" value="" placeholder="Найти материал в курсе" size="20" class="" autocomplete="off">
					<ul class="course" id="searching">
						<li><a href="about.html" title="Описание курса векторной графики">Описание курса «Введение в векторную графику»</a></li>
						<li><a href="plan.html" title="План курса обучения">План курса обучения</a></li>
						<li><a href="methodic-materials.html" title="Методические материалы">Методические материалы</a></li>
						<li><a href="definitions.html" title="Термины и определения">Термины и определения</a></li>
						<li><a href="literature.html" title="Рекомендованная литература">Рекомендованная литература</a></li>
						<li><a href="lectures.html" title="Лекции">Лекции</a></li>
						<li><a href="lecture-1.html" class="lection">Лекция №1. Введение в основы SVG графики</a></li>
						<li><a href="lecture-2.html" class="lection">Лекция №2. Моделирование объектов в SVG графике</a></li>
						<li><a href="lecture-3.html" class="lection">Лекция №3. Основные принципы дизайна логотипов на основе векторной графики</a></li>
						<li><a href="lecture-4.html" class="lection">Лекция №4. Программные решения для работы с векторной графикой</a></li>
						<li><a href="lecture-5.html" class="lection">Лекция №5. Применение векторной SVG графики для полиграфии</a></li>
						<li><a href="lecture-6.html" class="lection">Лекция №6. Система стандартизации бизнес-процессов с применением SVG графики</a></li>
						<li><a href="lecture-7.html" class="lection">Лекция №7. Применение SVG графики для веб-разработки</a></li>
						<li><a href="lecture-8.html" class="lection">Лекция №8. Дизайн векторной графики для приложений на платформах PC, iOS, Android</a></li>
						<li><a href="lecture-9.html" class="lection">Лекция №9. Коммерческая SVG графика: применение в цифровых маркетплейсах</a></li>
						<li><a href="lecture-10.html" class="lection">Лекция №10. Векторная графика для решения задач навигации и картографии</a></li>						
						<li><a href="practicums.html" title="Практикумы">Практикумы</a></li>
						<li><a href="practicum-1.html" class="practicum">Практикум №1. Применение SVG графики для инженерных задач</a></li>
						<li><a href="practicum-2.html" class="practicum">Практикум №2. Урок инженерного моделирования базовых фигур в графических редакторах, коде SVG документов (с учетом детализации и масштабирования)</a></li>
						<li><a href="practicum-3.html" class="practicum">Практикум №3. Отрисовка векторных логотипов с учетом базовых требований дизайна</a></li>
						<li><a href="practicum-4.html" class="practicum">Практикум №4. Применение программ Adobe Illustrator, Corel Draw, SVG Generator для отрисовки сложной SVG графики</a></li>
						<li><a href="practicum-5.html" class="practicum">Практикум №5. Верстка шаблонов и иллюстрирование страниц для классических книг</a></li>
						<li><a href="practicum-6.html" class="practicum">Практикум №6. Разработка каталога продукции по методологии БЭМ</a></li>
						<li><a href="practicum-7.html" class="practicum">Практикум №7. Верстка анимированной страницы HTML с применением JavaScript анимации</a></li>
						<li><a href="practicum-8.html" class="practicum">Практикум №8. Применение формата SVG  для дизайна приложений.</a></li>	
						<li><a href="practicum-9.html" class="practicum">Практикум №9. Основы отрисовки коммерческой графики для продаж в маркетплейсах</a></li>
						<li><a href="practicum-10.html" class="practicum">Практикум №10. Верстка схем городской навигации</a></li>	
						<li><a href="plan.html#examination" title="Аттестация">Аттестация</a></li>						
						<li><a href="rules.html" title="Правила экзамена">Правила проведения экзамена</a></li>
						<li><a href="tasks.html" title="Задания для экзамена">Задания для экзамена</a></li>
						<li><a href="upload.php" title="Загрузка задания на экзамене">Загрузка задания на экзамене</a></li>								
						<li><a href="results.php" title="Результаты экзамена">Результаты экзамена</a></li>
					</ul>
				</div>
				<div class="mateBottomCorner"></div>
			</div>
		</div>		
	</body>
</html>