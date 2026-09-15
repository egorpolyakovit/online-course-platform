<html>
	<head>
		<title>Ответы на вопросы по курсу обучения</title>
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
		<script type="javascript">
			$(function() {
			  jQuery(function($) {
				$('#search').on('keypress', function() {
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
			<article class="description" id="support">				
				<h1 id="support">Ответы на&nbsp;вопросы</h1>				
				<script type="javascript">
					$(function() {
					  jQuery(function($) {
						$('#search').on('keypress', function() {
						  var that = this;
						  setTimeout(function() {
							var res = /[^а-яА-ЯїЇєЄіІёЁ ]/g.exec(that.value);
							that.value = that.value.replace(res, '');
						  }, 0);
						});
					  });
					})
				</script>
				<input id="search" value="" placeholder="Введите ваш вопрос" size="20" autocomplete="off">				
				<script>$(function(){$("input#search").on("input",function(){var a=$(this).val().toLowerCase();if(a.length<=2){$("ul#questions li").show()}else{$("ul#questions li").each(function(){if($(this).text().toLowerCase().indexOf(a)<0){$(this).hide()}})}})});</script>				
				<div class="content" style="max-height:calc(100vh - 60px)">
					<ul class="faq" id="questions">
						<li id="question1">
							<b>Почему не срабатывает авторизация по логину и паролю?</b>
							<span class="answer">
								<p>Доступ к&nbsp;дистанционному курсу предоставляется по&nbsp;логину (эл.почте студента) и&nbsp;паролю из&nbsp;письма от&nbsp;teacher[at]highcourses.ru.</p>
								<p>В&nbsp;случае несрабатывания доступа укажите ваш логин и пароль в сообщении на почту преподавателя.</p>
								<p>Если обучение по&nbsp;курсу не&nbsp;оплачено (полностью), то&nbsp;доступ к&nbsp;материалам (лекций и практикумов) по&nbsp;выбранному курсу не&nbsp;предоставляется по&nbsp;правилам Образовательного Центра.</p>
							</span>
						</li>
						<li id="question2">
							<b>Как скопировать материалы курса обучения?</b>
							<span class="answer">
								<p>Курс обучения «Введение в векторную графику» является предметом авторского права. Копирование курса полностью для&nbsp;каких-либо целей запрещено по&nbsp;правилам Образовательного Центра.</p>
							</span>
						</li>
						<li id="question3">
							<b>Когда происходит публикация результатов аттестации?</b>
							<span class="answer">
								<p>После аттестации студента(ов) в&nbsp;течении 2х рабочих дней выполняется проверка со&nbsp;стороны преподавателя.</p>
								<p>Шкала оценки опубликована в курсе обучения.</p>
								<p>Результаты аттестации публикуются в личном кабинете студентов и отправляются на эл.почту по факту аттестации.</p>
								<p>Выдача Свидетельства об аттестации по курсу выполняется по&nbsp;факту прохождения аттестационного экзамена в&nbsp;назначеннное время по&nbsp;месту обучения.</p>
							</span>
						</li>	
						<li id="question4">
							<b>Сколько недель длится обучение по курсу?</b>
							<span class="answer">
								<p>Календарный план аудиторного обучения составляет 10&nbsp;недель (по&nbsp;1&nbsp;часу лекций и 2&nbsp;часа практикумов в&nbsp;неделю).</p>
								<p>Одиннадцатая неделя — аттестация студентов на&nbsp;экзамене.</p>
								<p>По&nbsp;результатам экзамена аттестованные студенты получают Свидетельства об&nbsp;аттестации по&nbsp;курсу.</p>
								<p>Неаттестованные студенты получают однократную возможность для&nbsp;пересдачи экзамена.</p>
							</span>
						</li>
						<li id="question5">
							<b>Возможна ли досрочная сдача экзамена по данному курсу?</b>
							<span class="answer">
								<p>В&nbsp;рамках вводного курса обучения по&nbsp;направлению «Векторная графика» возможна досрочная сдача аттестационного экзамена.</p>		
							</span>
						</li>
						<li id="question6">
							<b>Возможна ли переаттестация по курсу обучения?</b>
							<span class="answer">
								<p>В&nbsp;случае если на&nbsp;экзамене студент не&nbsp;получил необходимое количество баллов для&nbsp;аттестации, студенту предоставляется возможность для&nbsp;повторной аттестации (однократно).</p>
							</span>
						</li>
						<li id="question7">
							<b>Как задать вопрос преподавателю курса?</b>
							<span class="answer">
								<p>Да, консультации в&nbsp;ходе обучения допускаются. Преподаватель предоставит ответы в&nbsp;рамках материала лекций и&nbsp;практикумов (в&nbsp;ходе обучения).</p>
								<p>Для&nbsp;вопросов используйте электронную почту преподавателя: <b>teacher[at]highcourses.ru</b>.</p>
							</span>
						</li>
						<li id="question8">
							<b>Что необходимо для&nbsp;прохождения курса обучения?</b>
							<span class="answer">
								<p>Студенту потребуется ноутбук, доступ к&nbsp;сети Интернет и&nbsp;установленные графические редакторы Corel&nbsp;Draw, Adobe&nbsp;PhotoShop, Adobe&nbsp;Illustator, Adobe&nbsp;InDesign (достаточно пробных версий).</p>
							</span>
						</li>
						<li id="question9">
							<b>Какую специальность может получить студент после прохождения курса?</b>
							<span class="answer">
								<p>В практикумах и экзамене представлены управленческие, творческие и технические задачи.</p>							
								<p>Прохождение курса и аттестация направлены на определение профессиональной ориентированности студента.</p>
								<p>Это достигается путем самостоятельного выбора задач на&nbsp;экзамене и&nbsp;выполнение их в&nbsp;ходе аттестации.</p>
								<p>Качество исполнения выбранных задач позволит определить уровень знаний студентов.</p>								
								<p>Фактически экзамен — это аттестация по&nbsp;выбранному профессиональному направлению, т.к. задачи на&nbsp;экзамене — практические для&nbsp;предоставления результатов
								самостоятельного практического уровня студента (по&nbsp;освоенным навыкам).</p>
								<p>Приоритетно направление векторной графики необходимо в&nbsp;техническом дизайне, верстке веб и мобильных приложений, брендинге и рекламе.</p>
							</span>
						</li>						
					</ul>
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
				<div class="gray orderForm" id="orderForm">
					<h2 class="green">Запись на курс обучения</h2>
					<div class="textIntro">
						<p>Запись студента на&nbsp;курс обучения после&nbsp;подтверждения факта оплаты.</p>
					</div>
					<form enctype="multipart/form-data" method="post" action="mail" id="support" class="feedback">
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
						<div class="notice">
							<label class="checkbox-other">
								<input type="checkbox" checked> <span class="noticeText">Я&nbsp;подтверждаю согласие с&nbsp;обработкой персональных данных в&nbsp;соответствии <a href="rules.html" title="Правила дистанционного обучения">с&nbsp;правилами дистанционного обучения</a>.</span>
							</label>
						</div>					
						<div class="loginBox button">					
							<input type="button" value="Отправить заявку" class="btn">					
						</div>					
					</form>			
				</div>				
			</article>
			<article class="materials">
			</article>
		</section>	
	</body>
</html>