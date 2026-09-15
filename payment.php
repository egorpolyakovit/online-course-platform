<html>
	<head>
		<title>Вы отправили заявку на курс обучения</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">		
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/landing.css">		
		<link rel="stylesheet" href="css/menu.css">
		<link rel="stylesheet" href="css/popup.css">
		<link rel="stylesheet" href="css/sim-slider.css">		
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">		
	</head>
	<body>
		<header>
			<a href="/" class="logo" title="Дистанционные курсы Высшей Школы Обучения"></a>
			<nav id="wideMenu">
				<ul>
					<li><a href="landing.php#course" title="О курсе обучения">О&nbsp;курсе</a></li>
					<li><a href="landing.php#program" title="Программа обучения по курсу дистанционного образования">Программа</a></li>
					<li><a href="landing.php#competencies" title="Компетенции студентов по результатам обучения">Компетенции</a></li>					
					<li><a href="landing.php#prices" title="Стоимость обучения">Стоимость</a></li>
					<li><a href="landing.php#faq" title="Ответы на вопросы">Ответы на&nbsp;вопросы</a></li>
					<li><a href="landing.php#orderForm" title="Записаться на обучение по курсу дистанционного образования" class="orderBtn">Записаться</a></li>					
				</ul>
			</nav>
			<a href="login.php" class="login" title="Авторизация студентов">Войти</a>
			<nav id="navigation" aria-label="Menu">
				<label for="toggle-mobile-menu" aria-label="Menu"></label>
				<input id="toggle-mobile-menu" type="checkbox">
				<ul id="main-menu">
					<li><a href="landing.php#course" title="О курсе обучения">О&nbsp;курсе</a></li>
					<li><a href="landing.php#program" title="Программа обучения по курсу дистанционного образования">Программа</a></li>
					<li><a href="landing.php#competencies" title="Компетенции студентов по результатам обучения">Компетенции</a></li>					
					<li><a href="landing.php#prices" title="Стоимость обучения">Стоимость</a></li>
					<li><a href="landing.php#faq" title="Ответы на вопросы">Ответы на&nbsp;вопросы</a></li>
					<li><a href="landing.php#orderForm" title="Записаться на обучение по курсу дистанционного образования">Записаться</a></li>
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
					<a href="#" onclick="look('lections');return false;" id="lection">
						<b>Лекции</b><i>10</i>
					</a>
				</li>
				<li>
					<a href="#" onclick="look('practice');return false;" id="practicum">
						<b>Практикумы</b><i>10</i>
					</a>
				</li>				
				<li>
					<a href="#" onclick="look('attestation');return false;" id="exam">
						<b>Аттестация</b>
					</a>
				</li>					
			</ul>
			<div class="copyright">
				<span class="copyright">2020 &copy; Курс дистанционного обучения «Введение&nbsp;в&nbsp;векторную&nbsp;графику»</span>
				<span class="notice"><i></i>Все материалы только для&nbsp;обучения студентов в&nbsp;учебно-методическом процессе.</span>
			</div>
		</nav>	

		<?php
		$fullname = trim($_POST['fullname']);
		$age = trim($_POST['age']);
		$email = trim($_POST['email']);	
		$phone = trim($_POST['phone']);		
		$educationForm = trim($_POST['educationForm']);
		$paymentMethod = trim($_POST['paymentMethod']);	
		$education = trim($_POST['education']);		

		// указываем адрес отправителя, можно указать адрес на домене Вашего сайта
		$fromMail = 'no-reply@example.com';
		$fromName = 'Заявка на обучение по курсу «Введение в векторную графику»';

		// Сюда введите Ваш email
		$emailTo = 'course-owner@example.com';
		$subject = 'Заявка на обучение по курсу «Введение в векторную графику»';
		$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
		$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
		$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

		$body = "Студент: $fullname\n\nВозраст: $age\n\nЭлектронная почта: $email\n\nТелефон: $phone\n\n $educationForm \n\n Платеж: $paymentMethod \n\n Образование: $education";

		?>			
		<section class="content" id="feedback">
			<article class="description" id="support">				
				<h1 id="support">Ваша заявка отправлена</h1>				
				<p>Ваша заявка на&nbsp;курс обучения отправлена преподавателю.</p>
				<p>Для записи на&nbsp;обучение необходимо оплатить целевой взнос за&nbsp;курс «Введение в&nbsp;векторную графику».</p>
				<p>Вы можете воспользоваться банковскими реквизитами курса или&nbsp;оплатить в&nbsp;режиме онлайн по&nbsp;шаблону платежа.</p>
				<p>По&nbsp;факту платежа и&nbsp;проверки персональных данных студента Вам&nbsp;будет предоставлен доступ к&nbsp;дистанционному курсу обучения.</p>
			</article>
			<article class="materials">
			</article>
				<script>
					var show;	 
					function look(lections)
					{
					param=document.getElementById(lections);
					if(param.style.display == "none")
					{
					if(show) show.style.display = "none";
					param.style.display = "block";
					show = param;
					}
					else param.style.display = "none";
					}
				</script>					
				<script>
					var show;	 
					function look(orderForm)
					{
					param=document.getElementById(orderForm);
					if(param.style.display == "none")
					{
					if(show) show.style.display = "none";
					param.style.display = "block";
					show = param;
					}
					else param.style.display = "none";
					}
				</script>					
				<div class="theory" id="lections" style="display:none">
					<ul class="contents">
						<li>
							<b>Лекции</b>
						</li>
						<li>
							<a href="#" onclick="look('orderForm');return false;" class="lection">
								<span>Лекция №1</span>
								<b>Введение в основы SVG графики</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('orderForm');return false;" class="lection">
								<span>Лекция №2</span>
								<b>Моделирование объектов в SVG графике</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('orderForm');return false;" class="lection">
								<span>Лекция №3</span>
								<b>Основные принципы дизайна логотипов на основе векторной графики</b>
							</a>
						</li>
						<li>	
							<a href="#" onclick="look('orderForm');return false;" class="lection">
								<span>Лекция №4</span>	
								<b>Программные решения для работы с векторной графикой</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('orderForm');return false;" class="lection">
								<span>Лекция №5</span>
								<b>Применение векторной SVG графики для полиграфии</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('orderForm');return false;" class="lection">
								<span>Лекция №6</span>
								<b>Система стандартизации бизнес-процессов с применением SVG графики</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('orderForm');return false;" class="lection">
								<span>Лекция №7</span>
								<b>Применение SVG графики для веб-разработки</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('orderForm');return false;" class="lection">
								<span>Лекция №8</span>
								<b>Дизайн векторной графики для приложений на платформах PC, iOS, Android</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('orderForm');return false;" class="lection">
								<span>Лекция №9</span>
								<b>Коммерческая SVG графика: применение в цифровых маркетплейсах</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('orderForm');return false;" class="lection">
								<span>Лекция №10</span>
								<b>Векторная графика для решения задач навигации и картографии</b>
							</a>
						</li>
					</ul>
					<p><a href="#" onclick="look('orderForm');return false;" title="Перейти к записи на обучение" class="backURL">Перейти к&nbsp;записи на&nbsp;обучение</a></p>
				</div>
				<script>
					var show;	 
					function look(practice)
					{
					param=document.getElementById(practice);
					if(param.style.display == "none")
					{
					if(show) show.style.display = "none";
					param.style.display = "block";
					show = param;
					}
					else param.style.display = "none";
					}
				</script>				
				<div class="practicum" id="practice" style="display:none">
					<ul class="contents">
						<li>
							<b>Практикумы</b>
						</li>					
						<li>
							<a href="#" onclick="look('orderForm');return false;" class="practicum">
								<span>Практикум №1</span>
								<b>Применение SVG графики для инженерных задач.</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('orderForm');return false;" class="practicum">
								<span>Практикум №2</span>
								<b>Урок инженерного моделирования базовых фигур в графических редакторах, коде SVG документов (с учетом детализации и масштабирования).</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('orderForm');return false;" class="practicum">
								<span>Практикум №3</span>
								<b>Отрисовка векторных логотипов с учетом базовых требований дизайна.</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('orderForm');return false;" class="practicum">
								<span>Практикум №4</span>
								<b>Применение программ Adobe Illustrator, Corel Draw, SVG Generator для отрисовки сложной SVG графики.</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('orderForm');return false;" class="practicum">
								<span>Практикум №5</span>
								<b>Верстка шаблонов и иллюстрирование страниц для классических книг.</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('orderForm');return false;" class="practicum">
								<span>Практикум №6</span>
								<b>Разработка каталога продукции по методологии БЭМ.</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('orderForm');return false;" class="practicum">
								<span>Практикум №7</span>
								<b>Верстка анимированной страницы HTML с применением JavaScript анимации.</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('orderForm');return false;" class="practicum">
								<span>Практикум №8</span>
								<b>Применение формата SVG  для дизайна приложений.</b>
							</a>
						</li>	
						<li>
							<a href="#" onclick="look('orderForm');return false;" class="practicum">
								<span>Практикум №9</span>
								<b>Основы отрисовки коммерческой графики для продаж в маркетплейсах.</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('orderForm');return false;" class="practicum">
								<span>Практикум №10</span>
								<b>Верстка схем городской навигации.</b>
							</a>
						</li>		
					</ul>
					<p><a href="#" onclick="look('orderForm');return false;" title="Перейти к записи на обучение" class="backURL">Перейти к&nbsp;записи на&nbsp;обучение</a></p>					
				</div>
				<script>
					var show;	 
					function look(attestation)
					{
					param=document.getElementById(attestation);
					if(param.style.display == "none")
					{
					if(show) show.style.display = "none";
					param.style.display = "block";
					show = param;
					}
					else param.style.display = "none";
					}
				</script>				
				<div class="exam" id="attestation" style="display:none">
					<h2>Аттестационный экзамен</h2>
					<p>Проведение экзамена по данному курсу определяет профессиональные навыки (от выбора задач до уровня решений) для определения профессиональных компетенций прошедших курс студентов.</p>
					<p>В завершении курса на экзамене студентам на выбор предоставляется ряд задач.</p>
					<p>Каждый аттестуемый студент имеет право выбрать две задачи для решения в течении двух аудиторных часов.</p>
					<p>Выбранные задачи покажут четкую профориентированность студента и качественные, количественные оценки решений (на сколько быстро и четко студент способен сформировать решение в уме и реализовать его в приложении к выбранным технологиям).</p>
					<h2 class="green">Задачи для экзамена</h2>
					<ol class="examination">
						<li>
							<b>Управление предприятием (производством).</b>
							<p><span class="count">1.1.</span><b>Подготовка каталога продукции гипермаркета со стандартизированной структурой по методологии БЭМ</b>.</p>
							<p><span class="count">1.2.</span><b>Подготовка схемы аэропорта с учетом правил пассажироперевозок</b>
							<span class="task"><b>Задача:</b> показать все функциональные возможности аэропорта по заданным визуальным приоритетам в заданной цветовой схеме и формате А3.</small></p>
							<p><span class="count">1.3.</span><b>Подготовка рекламной схемы описания нового смартфона с учетом актуальных технологий.</b></p>
						</li>
						<li>
							<b>Веб-дизайн (графические и логические рекламные навыки).</b>
							<p><span class="count">2.1.</span><b>Верстка целевой рекламной страницы и анимация SVG графики на основе шаблона HTML5</b>.
							<span class="task"><b>Задача:</b> показать преимущества новой услуги (на выбор - розничное кредитование, туризм, спортивный клуб), показать навыки веб-дизайнера.</span></p>
							<p><span class="count">2.2.</span><b>Дизайн уникального логотипа для компании на выбор из примеров в соответствии со всеми требованиями к разработке логотипа.</b>
							<span class="task"><b>Задача:</b> выявить навыки дизайнера логотипов (брендинг).</span></p>
							<p><span class="count">2.3.</span><b>Дизайн титульного изображения для приложения с целью размещения на рабочем столе смартфона iOS, Android</b>.
							<span class="task"><b>Задача:</b> подготовить уникальное изображение по заданной тематике под формат iOS, Android по стандартным модульным сеткам и цветовым палитрам.<br> 
							Проверка на уникальность, соответствие модульной сетке и формату экспорта в приложение.</span></p>
						</li>
						<li>
							<b>Картография (навигация в сложной логистике).</b>
							<p><span class="count">3.1.</span><b>Дизайн схемы проезда от офиса компании к складу с наименьшими потерями по времени на автомобиле, метро, автобусе.</b> 
							<span class="task"><b>Задача:</b> выявить практические навыки к картографии и логистике.</span></p>
							<p><span class="count">3.2.</span><b>Дизайн оригинальной схемы размещения отделов гипермаркета в соответствии с фирменным стилем компании.</b>
							<span class="task"><b>Задача:</b> показать навыки рекламного дизайна и картографии.</span></p>
							<p><span class="count">3.3.</span><b>Дизайн фрагмента схемы метро с учетом требований к навигации</b>.
							<span class="task"><b>Задача:</b> показать навыки картографии и применения SVG графики.</span></p>
						</li>
					</ol>
					<p><a href="#" onclick="look('orderForm');return false;" title="Перейти к записи на обучение" class="backURL">Перейти к&nbsp;записи на&nbsp;обучение</a></p>					
				</div>					
		</section>	
	</body>
</html>