<html>
	<head>
		<title>Дистанционные курсы Высшей Школы Обучения</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">		
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/landing.css">		
		<link rel="stylesheet" href="css/menu.css">
		<link rel="stylesheet" href="css/popup.css">
		<link rel="stylesheet" href="css/sim-slider.css">		
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">					
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />			
		<script>
			$(function() {
				$('.popup-youtube, .popup-vimeo').magnificPopup({
					disableOn: 700,
					type: 'iframe',
					mainClass: 'mfp-fade',
					removalDelay: 160,
					preloader: false,
					fixedContentPos: false
				});
			});
		</script>			
	</head>
	<body>
		<header>
			<a href="/" class="logo" title="Дистанционные курсы Высшей Школы Обучения"></a>
			<nav id="wideMenu">
				<ul>
					<li><a href="#course" title="О курсе обучения">О&nbsp;курсе</a></li>
					<li><a href="#program" title="Программа обучения по курсу дистанционного образования">Программа</a></li>
					<li><a href="#competencies" title="Компетенции студентов по результатам обучения">Компетенции</a></li>					
					<li><a href="#prices" title="Стоимость обучения">Стоимость</a></li>
					<li><a href="#faq" title="Ответы на вопросы">Ответы на&nbsp;вопросы</a></li>
					<li><a href="#orderForm" title="Записаться на обучение по курсу дистанционного образования" class="orderBtn">Записаться</a></li>					
				</ul>
			</nav>
			<a href="login.php" class="login" title="Авторизация студентов">Войти</a>
			<nav id="navigation" aria-label="Menu">
				<label for="toggle-mobile-menu" aria-label="Menu"></label>
				<input id="toggle-mobile-menu" type="checkbox">
				<ul id="main-menu">
					<li><a href="#course" title="О курсе обучения">О&nbsp;курсе</a></li>
					<li><a href="#program" title="Программа обучения по курсу дистанционного образования">Программа</a></li>
					<li><a href="#competencies" title="Компетенции студентов по результатам обучения">Компетенции</a></li>					
					<li><a href="#prices" title="Стоимость обучения">Стоимость</a></li>
					<li><a href="#faq" title="Ответы на вопросы">Ответы на&nbsp;вопросы</a></li>
					<li><a href="#orderForm" title="Записаться на обучение по курсу дистанционного образования">Записаться</a></li>
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
		<section class="content" id="about">
			<article id="landing">
				<div class="intro" id="course">
					<div class="greenBg">
						<i></i>
						<h2>
							<b>Дистанционные курсы</b>
							<small>Введение в векторную графику</small>
						</h2>
						<p><em>Срок обучения:</em> <span class="period">3&nbsp;месяца</span></p>
					</div>
					<div class="lightBg">
						<i></i>					
						<h2>О&nbsp;курсе обучения</h2>
						<p>Авторский курс изучения векторной графики для&nbsp;студентов предназначен для&nbsp;получения базовых знаний и 
						навыков применения векторной графики, определения специализации обучаемых студентов в&nbsp;ходе экзамена по&nbsp;курсу.</p>						
						<p>Прохождение курса позволит студентам получить практические навыки работы с&nbsp;векторной графикой для&nbsp;дизайна 
						и верстки макетов полиграфии, фирменного стиля и веб-интерфейсов.</p>
						<p class="btn">
							<a href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="popup-youtube enlargeVideo" title="Демо-доступ к курсу обучения">Демо-доступ к&nbsp;курсу</a>
						</p>
					</div>	
				</div>	
				<div class="programSlider" id="program">
					<h2 class="green">Программа курса обучения</h2>
					<div class="sim-slider">
					  <ul class="sim-slider-list">
						<li><img src="http://pvbk.spb.ru/inc/slider/imgs/no-image.gif" alt="screen"></li> <!-- это экран -->
						<li class="sim-slider-element"><img src="img/landing/slide-1.png" class="slide" alt="Программа курса обучения"></li>
						<li class="sim-slider-element"><img src="img/landing/slide-2.png" class="slide" alt="Программа курса обучения"></li>
						<li class="sim-slider-element"><img src="img/landing/slide-3.png" class="slide" alt="Программа курса обучения"></li>
						<li class="sim-slider-element"><img src="img/landing/slide-4.png" class="slide" alt="Программа курса обучения"></li>
						<li class="sim-slider-element"><img src="img/landing/slide-5.png" class="slide" alt="Программа курса обучения"></li>
						<li class="sim-slider-element"><img src="img/landing/slide-6.png" class="slide" alt="Программа курса обучения"></li>
						<li class="sim-slider-element"><img src="img/landing/slide-7.png" class="slide" alt="Программа курса обучения"></li>			
					  </ul>
					  <div class="sim-slider-arrow-left"></div>
					  <div class="sim-slider-arrow-right"></div>
					  <div class="sim-slider-dots"></div>
					</div>
				</div>
				<div class="contents" id="program">
					<h3 class="green">Интенсивный курс состоит из&nbsp;10&nbsp;лекций и 10&nbsp;практикумов.</h2>
					<div class="infoBlocks" id="landing">
						<div class="infoBlock" id="lectures">
							<i></i>
							<div class="textBlock">
								<h3>Лекции о&nbsp;векторной графике</h3>
								<p>Последовательное изучение основ векторной графики и её&nbsp;применение на&nbsp;практике в&nbsp;специализации по&nbsp;популярным направлениям: от&nbsp;рекламы до&nbsp;картографии.</p>						
							</div>
						</div>
						<div class="infoBlock" id="practicums">
							<i></i>
							<div class="textBlock">
								<h3>Практикумы для&nbsp;освоения</h3>
								<p>Детальное выполнение практических задач с&nbsp;применением векторной графики. Практическая&nbsp;работа с&nbsp;векторными форматами SVG, CDR и AI. Практикумы создания фирменного стиля, каталога и&nbsp;сопутствующей графики.</p>
							
							</div>
						</div>
						<div class="infoBlock" id="additional">
							<i></i>
							<div class="textBlock">
								<h3>Сопутствующие материалы</h3>
								<p>Слайды для&nbsp;изучения лекций, иллюстративные примеры, модульные сетки для&nbsp;форматов дизайна и&nbsp;т.д.</p>
							</div>
						</div>
						<div class="infoBlock" id="examination">
							<i></i>			
							<div class="textBlock">							
								<h3>Аттестационный экзамен</h3>
								<p>Для&nbsp;подтверждения квалификации по&nbsp;пройденному курсу обучения проводится экзамен с&nbsp;возможностью выбора задач для&nbsp;самостоятельного выполнения.</p>
								<p>Аттестационный экзамен направлен на&nbsp;профессиональное ориентирование студента.</p>
							</div>							
						</div>
						<div class="infoBlock" id="document">
							<i></i>
							<div class="textBlock">							
								<h3>Свидетельство о&nbsp;прохождении курса векторной графики</h3>
								<p>По&nbsp;завершении курса и&nbsp;аттестации каждый студент получает сертификат о&nbsp;прохождении курса векторной графики с&nbsp;указанием перечня знаний и&nbsp;практических навыков.</p>
							</div>
						</div>
					</div>
				</div>			
				<div class="competencies" id="landing">
					<h2 id="competencies">Компетенции <span class="mobileView">по&nbsp;результатам курса</span></h2>
					<p>Набор компетенций студентов по&nbsp;результатам обучающего курса.</p>
					<div class="competenciesChoice">
						<a href="#" onclick="look('theory');return false;" title="Теория">Теоретические знания</a>
						<a href="#" onclick="look('practics');return false;" title="Практика">Практические умения</a>								
					</div>
					<script>
						var show;	 
						function look(theory)
						{
						param=document.getElementById(theory);
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
						function look(practics)
						{
						param=document.getElementById(practics);
						if(param.style.display == "none")
						{
						if(show) show.style.display = "none";
						param.style.display = "block";
						show = param;
						}
						else param.style.display = "none";
						}
					</script>					
					<div class="competencies" id="theory" style="display:none">
						<h2>Теория</h2>
						<a href="#" class="close"></a>
						<ol>
							<li>Теоретическое знание основных форматов векторной графики.</li>
							<li>Теоретическое освоение моделирования композиции в&nbsp;векторной графике.</li>
							<li>Теоретическое освоение базовых принципов и&nbsp;требований к&nbsp;разработке логотипов и&nbsp;фирменного стиля.</li>
							<li>Введение в&nbsp;теоретическую часть применения программных инструментов для&nbsp;специализации по&nbsp;работе с&nbsp;векторной графикой.</li>
							<li>Освоение основных требований к&nbsp;применению векторной графики в&nbsp;полиграфии. </li>
							<li>Структурирование каталога продукции по&nbsp;методологии БЭМ с&nbsp;применением векторной графики.</li>
							<li>Освоение основных принципов применения SVG графики для&nbsp;задач веб-разработки.</li>
							<li>Теорические знания о&nbsp;дизайне векторной графики для&nbsp;приложений на&nbsp;платформах&nbsp;PC, iOS, Android.</li>
							<li>Базовые принципы создания коммерческой SVG графики.</li>
							<li>Освоение принципов проектирования прикладной векторной графики для&nbsp;решения задач навигации и&nbsp;картографии.</li>
						</ol>
					</div>
					<div class="competencies" id="practics" style="display:none">
						<h2>Практика</h2>
						<a href="#" class="close"></a>
						<ol>
							<li>Практические навыки применения SVG графики для&nbsp;инженерных задач.</li>
							<li>Практические навыки инженерного моделирования базовых фигур в&nbsp;графических редакторах, коде SVG документов (с&nbsp;учетом детализации и&nbsp;масштабирования).</li>
							<li>Практические навыки дизайна векторных логотипов с&nbsp;учетом базовых требований.</li>
							<li>Навыки применения программных инструментов Adobe Illustrator, Corel Draw, SVG Generator для&nbsp;дизайна комбинированной векторной графики.</li>
							<li>Верстка шаблонов фирменного стиля, иллюстрирование книг.</li>
							<li>Разработка каталога продукции по&nbsp;методологии БЭМ.</li>
							<li>Верстка анимированной страницы HTML&nbsp;с применением JavaScript анимации.</li>
							<li>Практические навыки применения формата SVG для&nbsp;дизайна приложений.</li>
							<li>Практические навыки дизайна коммерческой графики для&nbsp;коммерческих целей.</li>
							<li>Верстка схем городской навигации.</li>
						</ol>
					</div>
					<p class="notice"><a href="#" onclick="look('certificate');return false;" title="Все полученные студентом компетенции закреплены в «Свидетельстве об аттестации по курсу векторной графики»">Все&nbsp;полученные студентом компетенции закреплены в&nbsp;«Свидетельстве&nbsp;об&nbsp;аттестации по&nbsp;курсу векторной&nbsp;графики»</a></p>
					<script>
						var show;	 
						function look(certificate)
						{
						param=document.getElementById(certificate);
						if(param.style.display == "none")
						{
						if(show) show.style.display = "none";
						param.style.display = "block";
						show = param;
						}
						else param.style.display = "none";
						}
					</script>
					<div id="certificate" style="display:none">
						<img src="img/landing/frame-border-diploma.jpg" alt="Свидетельство колледжа об аттестации студента по курсу «Введение в векторную графику»" class="document">
						<p align="center"><small>Свидетельство колледжа об&nbsp;аттестации студента по&nbsp;курсу «Введение&nbsp;в&nbsp;векторную&nbsp;графику».</small></p>
					</div>
					<i></i>					
				</div>					
				<div class="green costOfCourse" id="prices">
					<h2>Стоимость курса обучения</h2>
					<p>Полная стоимость курса обучения по&nbsp;векторной графике.</p>
					<div class="columns">
						<div class="leftColumn">					
							<p>В&nbsp;стоимость курса обучения входят:</p>
							<ul>
								<li>10&nbsp;лекционных занятий,</li>
								<li>10&nbsp;практикумов,</li>
								<li>доступ к&nbsp;дистанционным материалам курса по&nbsp;векторной графике,</li>
								<li>аттестационный экзамен,</li>
								<li>официальное свидетельство о&nbsp;прохождении курса обучения.</li>
							</ul>
						</div>
						<div class="rightColumn">
							<span class="price">28<small>&nbsp;</small>000<small>&nbsp;</small>р.</span>
							<span class="timePeriod">3&nbsp;месяца дополнительного обучения</span>
						</div>
					</div>
				</div>
				<div class="faq" id="faq">
					<h2>Ответы на&nbsp;вопросы</h2>
					<p>Ключевые вопросы и&nbsp;ответы по&nbsp;курсу обучения.</p>
					<ul id="questions">
						<li><a href="faq.php#question1" target="_blank" title="Почему не срабатывает авторизация по логину и паролю?">Почему не срабатывает авторизация по логину и паролю?</a></li>
						<li><a href="faq.php#question2" target="_blank" title="Как скопировать материалы курса обучения?">Как скопировать материалы курса обучения?</a></li>
						<li><a href="faq.php#question3" target="_blank" title="Когда происходит публикация результатов аттестации?">Когда происходит публикация результатов аттестации?</a></li>
						<li><a href="faq.php#question4" target="_blank" title="Сколько недель длится обучение по курсу?">Сколько недель длится обучение по курсу?</a></li>
						<li><a href="faq.php#question5" target="_blank" title="Возможна ли досрочная сдача экзамена по данному курсу?">Возможна ли досрочная сдача экзамена по данному курсу?</a></li>
						<li><a href="faq.php#question6" target="_blank" title="Возможна ли переаттестация по курсу обучения?">Возможна ли переаттестация по курсу обучения?</a></li>
						<li><a href="faq.php#question7" target="_blank" title="Как задать вопрос преподавателю курса?">Как задать вопрос преподавателю курса?</a></li>
						<li><a href="faq.php#question8" target="_blank" title="Что необходимо для прохождения курса обучения?">Что необходимо для&nbsp;прохождения курса обучения?</a></li>
						<li><a href="faq.php#question9" target="_blank" title="Какую специальность может получить студент после прохождения курса?">Какую специальность может получить студент после прохождения курса?</a></li>						
					</ul>
					<a href="feedback.php" target="_blank" title="Задать вопрос преподавателю курса по векторной графике" class="whiteBtn">Задать вопрос</a>					
				</div>		
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
					function look(studentForm)
					{
					param=document.getElementById(studentForm);
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
							<a href="#" onclick="look('studentForm');return false;" class="lection">
								<span>Лекция №1</span>
								<b>Введение в основы SVG графики</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('studentForm');return false;" class="lection">
								<span>Лекция №2</span>
								<b>Моделирование объектов в SVG графике</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('studentForm');return false;" class="lection">
								<span>Лекция №3</span>
								<b>Основные принципы дизайна логотипов на основе векторной графики</b>
							</a>
						</li>
						<li>	
							<a href="#" onclick="look('studentForm');return false;" class="lection">
								<span>Лекция №4</span>	
								<b>Программные решения для работы с векторной графикой</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('studentForm');return false;" class="lection">
								<span>Лекция №5</span>
								<b>Применение векторной SVG графики для полиграфии</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('studentForm');return false;" class="lection">
								<span>Лекция №6</span>
								<b>Система стандартизации бизнес-процессов с применением SVG графики</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('studentForm');return false;" class="lection">
								<span>Лекция №7</span>
								<b>Применение SVG графики для веб-разработки</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('studentForm');return false;" class="lection">
								<span>Лекция №8</span>
								<b>Дизайн векторной графики для приложений на платформах PC, iOS, Android</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('studentForm');return false;" class="lection">
								<span>Лекция №9</span>
								<b>Коммерческая SVG графика: применение в цифровых маркетплейсах</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('studentForm');return false;" class="lection">
								<span>Лекция №10</span>
								<b>Векторная графика для решения задач навигации и картографии</b>
							</a>
						</li>
					</ul>
					<p><a href="#" onclick="look('studentForm');return false;" title="Перейти к записи на обучение" class="backURL">Перейти к&nbsp;записи на&nbsp;обучение</a></p>
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
							<a href="#" onclick="look('studentForm');return false;" class="practicum">
								<span>Практикум №1</span>
								<b>Применение SVG графики для инженерных задач.</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('studentForm');return false;" class="practicum">
								<span>Практикум №2</span>
								<b>Урок инженерного моделирования базовых фигур в графических редакторах, коде SVG документов (с учетом детализации и масштабирования).</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('studentForm');return false;" class="practicum">
								<span>Практикум №3</span>
								<b>Отрисовка векторных логотипов с учетом базовых требований дизайна.</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('studentForm');return false;" class="practicum">
								<span>Практикум №4</span>
								<b>Применение программ Adobe Illustrator, Corel Draw, SVG Generator для отрисовки сложной SVG графики.</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('studentForm');return false;" class="practicum">
								<span>Практикум №5</span>
								<b>Верстка шаблонов и иллюстрирование страниц для классических книг.</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('studentForm');return false;" class="practicum">
								<span>Практикум №6</span>
								<b>Разработка каталога продукции по методологии БЭМ.</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('studentForm');return false;" class="practicum">
								<span>Практикум №7</span>
								<b>Верстка анимированной страницы HTML с применением JavaScript анимации.</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('studentForm');return false;" class="practicum">
								<span>Практикум №8</span>
								<b>Применение формата SVG  для дизайна приложений.</b>
							</a>
						</li>	
						<li>
							<a href="#" onclick="look('studentForm');return false;" class="practicum">
								<span>Практикум №9</span>
								<b>Основы отрисовки коммерческой графики для продаж в маркетплейсах.</b>
							</a>
						</li>
						<li>
							<a href="#" onclick="look('studentForm');return false;" class="practicum">
								<span>Практикум №10</span>
								<b>Верстка схем городской навигации.</b>
							</a>
						</li>		
					</ul>
					<p><a href="#" onclick="look('studentForm');return false;" title="Перейти к записи на обучение" class="backURL">Перейти к&nbsp;записи на&nbsp;обучение</a></p>					
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
					<p><a href="#" onclick="look('studentForm');return false;" title="Перейти к записи на обучение" class="backURL">Перейти к&nbsp;записи на&nbsp;обучение</a></p>					
				</div>				
				<div class="gray orderForm" id="orderForm">
					<i id="studentForm"></i>
					<h2 class="green">Запись на курс обучения</h2>
					<div class="textIntro">
						<p>Запись студента на&nbsp;курс обучения после&nbsp;подтверждения факта оплаты.</p>
					</div>
					<form enctype="multipart/form-data" method="post" action="/payment.php" id="support" class="feedback">
						<div class="feedbackLogin">
							<label>Полное имя и фамилия:</label>
							<input name="fullname" value="" type="text" required="" placeholder="Укажите полное имя и фамилию" maxlength="255">
						</div>
						<div class="studentAge">
							<label>Возраст студента:</label>
							<select name="age">
								<option value="" disabled>Выберите ваш возраст</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
								<option value="32">32</option>
								<option value="33">33</option>
								<option value="34">34</option>
								<option value="35">35</option>
								<option value="36">36</option>
								<option value="37">37</option>
								<option value="38">38</option>
								<option value="39">39</option>
								<option value="40">40</option>	
							</select>
						</div>						
						<div class="feedbackEmail">
							<label>Эл.почта:</label>
							<input name="email" value="" type="email" required="" placeholder="Укажите вашу эл.почту" maxlength="255">
						</div>	
						<div class="feedbackPhone">
							<label>Контактный телефон:</label>
							<input name="phone" value="" type="text" required="" placeholder="+7(9XX)XXX-XX-XX" maxlength="255">
						</div>
						<div class="educationForm">
							<label>Форма обучения:</label>
							<select name="educationForm">
								<option value="" disabled>Выберите форму обучения</option>
								<option value="Обучение в колледже">Обучение в колледже</option>
								<option value="Дистанционное обучение">Дистанционное обучение</option>
							</select>
						</div>						
						<div class="paymentMethod">
							<label>Способ оплаты:</label>
							<select name="paymentMethod">
								<option value="" disabled>Выберите способ оплаты</option>
								<option value="Банковской картой">Банковской картой</option>
								<option value="Безналичным платежом">Безналичным платежом</option>	
							</select>
						</div>
						<div class="studentEducation">
							<label>Образование студента:</label>
							<textarea name="education" class="input input_textarea" required="" placeholder="Укажите ваше образование" title="Ваше образование" maxlength="2000"></textarea>
						</div>				
						<div class="loginBox button">					
							<input type="button" value="Отправить заявку" class="btn">					
						</div>					
					</form>			
				</div>			
			</article>
		</section>
		<script type="text/javascript" src="js/sim-slider.js"></script>
		<script>new Sim()</script>		
		<footer>
			<div class="copyright">
				<span class="copyright">2020 &copy; Курс дистанционного обучения «Введение&nbsp;в&nbsp;векторную&nbsp;графику»</span>
				<span class="notice"><i></i>Все материалы только для&nbsp;обучения студентов в&nbsp;учебно-методическом процессе.</span>
			</div>			
		</footer>
	</body>
</html>