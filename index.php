<?php get_header(); ?>
<meta property="og:title" content="Roman Tuzov - Разработка и дизайн сайтов. Создайте свой личный сайт">
<meta property="og:description" content="Разрабатываю сайты, интернет магазины более 4 лет. Создам лендинг и любой WEB-сайт под ключ для любого вида бизнеса по вашим предпочтениям. Красивый дизайн. Низкие цены">
<meta property="og:url" content="https://hutsonr.ru/">
<meta property="og:locale" content="ru_RU">
<meta property="og:image" content="https://hutsonr.ru/wp-content/uploads/2020/06/screenshot-11.png">
<meta property="og:image:width" content="968">
<meta property="og:image:height" content="504">
<title>Roman Tuzov - Разработка и дизайн сайтов. Создайте свой личный сайт</title>
<meta name="description" content="Роман Тузов. Разрабатываю сайты, интернет магазины более 4 лет. Создам лендинг и любой WEB-сайт под ключ для любого вида бизнеса по вашим предпочтениям. Красивый дизайн. Низкие цены">
<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>> 
	<header class="header">
		<div class="container">
			<h1 class="header__logo">
				<a href="<?php the_field('home_link','options'); ?>"><?php the_field('logo','options'); ?></a>
			</h1>
			<nav class="header__menu-wrapper">
				<ul>
					<li>
						<a href="<?php the_field('home_link','options'); ?>">Главная</a>
						<a href="<?php the_field('home_link','options'); ?>posts">Статьи</a>
						<a href="https://hutsonr.ru/in-process/">FAQ</a>
						<a href="<?php the_field('home_link','options'); ?>#contact">Заказать сайт</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<svg
    class="ham hamRotate ham4"
    id="navToggle"
    viewBox="0 0 110 100"
    width="70"
  >
    <path
      class="line top"
      d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20"
    />
    <path class="line middle" d="m 70,50 h -40" />
    <path
      class="line bottom"
      d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20"
    />
  </svg>
	<div class="menu-overlay">
	  <!-- .... -->
	</div>
	<div class="menu">
	   <nav class="header__menu-wrapper">
				<ul>
					<li>
						<a href="<?php the_field('home_link','options'); ?>">Главная</a>
						<a href="<?php the_field('home_link','options'); ?>/posts">Статьи</a>
						<a href="https://hutsonr.ru/in-process/">FAQ</a>
						<a class="menu-contact" href="<?php the_field('home_link','options'); ?>#contact">Заказать сайт</a>
					</li>
				</ul>
			</nav>
	</div>
	<section class="main" style="background: url(<?php echo get_template_directory_uri() ?>/img/main-background.jpg) no-repeat;
  background-size: cover;
  background-position: center;">
		<div class="main__color-overlay--green"></div>
		<div class="main__color-overlay--dark"></div>
		<div class="main__text" data-aos="zoom-in-up" data-aos-duration="1000">
			<h1>ПОСМОТРИ, ОЦЕНИ, И ЗАКАЖИ СВОЙ САЙТ</h1>
		</div>
	</section>
	<section class="dev-preview">
		<div class="container">
			<div class="dev-preview__left" data-aos="fade-right" data-aos-duration="800">
				<h1>
					<?php the_field('second_title','options'); ?>
				</h1>
			</div>
			<div class="dev-preview__right" data-aos="fade-left" data-aos-duration="800">
				<img class="dev-preview__right-main_img" src="<?php echo get_template_directory_uri() ?>/img/iphone-min.png" alt="image">
			</div>
		</div>
	</section>
	<section class="about">
		<div class="container">
			<h1 class="about__main-text">Меня зовут Роман, и я делаю сайты</h1>
			<p>...которые являются воплощением великолепного дизайна и качественного кода. Я являюсь веб-разработчиком со стажем работы более 4 лет. И за всё это долгое время обучения и практики у меня имеются множество навыков, которые я постоянно продолжаю совершенствовать. Я изучал различные способы оптимизации кода, базовую настройку SEO и кроссбраузерную вёрстку. На сегодняшний день готов выполнить любые заказы на сайты, где могу применить все свои навыки, которые получил за долгое время обучения.</p>
			<div class="about-examples">
				<img src="https://hutsonr.ru/wp-content/uploads/2020/10/kikk-2017-min-min-1300x594-1.jpg" alt="image">
				<img src="https://hutsonr.ru/wp-content/uploads/2020/10/screenshot-1.png" alt="image">
			</div>
			<p>
				Хотелось бы отметить красивое восприятие сайта для пользователя и качественное оформление его программной части (код). Фриланс для меня — это основная работа, поэтому я всецело отдаюсь процессу создания и пытаюсь сдать сделанную работу в кратчайшие сроки (без учёта правок и изменений по идеи заказчика). Можете не беспокоиться о процессе разработки сайта, потому что я всё время буду показывать самые значительные этапы его создания.
			</p>
			<div class="about-skills">
					<h2 class="animate-title" data-aos="fade-left">Мои навыки</h2>
					<?php while ( have_rows('four_skills-repeat','options') ) : the_row(); ?>
			      <div class="skills" data-aos="fade-left">
			        <span class="name"><?php the_sub_field('four_title','options'); ?></span>
			        <div class="percent">
			          <div class="progress" style="width: <?php the_sub_field('four_percent','options'); ?>%;"></div>
			        </div>
			        <span class="value"><?php the_sub_field('four_percent','options'); ?>%</span>
			      </div>
		    	<?php endwhile; ?>
		      <div class="skills" data-aos="fade-left">
		        <span class="name name-pc">javascript</span>
		        <span class="name name-m">js</span>
		        <div class="percent">
		          <div class="progress" style="width: 65%;"></div>
		        </div>
		        <span class="value">65%</span>
		      </div>
		      <div class="skills" data-aos="fade-left">
		        <span class="name name-pc">wordpress</span>
		        <span class="name name-m">wp</span>
		        <div class="percent">
		          <div class="progress" style="width: 80%;"></div>
		        </div>
		        <span class="value">80%</span>
		      </div>
			</div>
		</div>
	</section>
	<div class="splash wdone-splash" style="background: url(<?php echo get_template_directory_uri() ?>/img/headerfon2.jpg) no-repeat;
  background-size: cover;
  background-position: top;">
		<div class="main__color-overlay--green"></div>
		<div class="main__color-overlay--dark"></div>
		<h1 data-aos="zoom-in-up" data-aos-duration="700">Что будет сделано на вашем сайте?</h1>
	</div>
	<section class="wdone">
		<div class="container">
			<h3 data-aos="fade-right" data-aos-duration="800">Для каждого сайта подбирается свой набор настроек взависимости от задач, ниже приведен вариант, который используется для разработки многостраничного сайта под ключ</h3>
			<div class="wdone-card-wrapper">
				<div class="wdone-card" data-aos="zoom-in-down" data-aos-duration="800">
					<div class="wdone-card--top">
						<span><img src="<?php echo get_template_directory_uri() ?>/img/sugar-cubes.svg" alt="base"></span><h4>База</h4>
					</div>
					<ul>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Регистрация домена</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Покупка премиум темы (если нужно)</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Создание структуры сайта</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Проработка адаптивности (красивый показ на любом устройстве)</span></li>
					</ul>
				</div>
				<div class="wdone-card" data-aos="zoom-in-down" data-aos-duration="800">
					<div class="wdone-card--top">
						<span><img src="<?php echo get_template_directory_uri() ?>/img/writing.svg" alt="writing"></span><h4>Наполнение</h4>
					</div>
					<ul>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Наполнение всех разделов сайта (тексты должны быть подготовлены)</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Создание рубрик (по необходимости)</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Добавление меню</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Создание доп. страниц</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Создание политики конфиденциальности</span></li>
					</ul>
				</div>
				<div class="wdone-card" data-aos="zoom-in-down" data-aos-duration="800">
					<div class="wdone-card--top">
						<span><img src="<?php echo get_template_directory_uri() ?>/img/vector.svg" alt="design"></span><h4>Дизайн</h4>
					</div>
					<ul>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Подбор шрифтов</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Подбор цветовой гаммы</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Дизайн лендинга</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Создание простого логотипа (по необходимости)</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Проработка шапки</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Проработка подвала</span></li>
					</ul>
				</div>
				<div class="wdone-card" data-aos="zoom-in-down" data-aos-duration="800">
					<div class="wdone-card--top">
						<span><img src="<?php echo get_template_directory_uri() ?>/img/base.svg" alt="security"></span><h4>Безопасность</h4>
					</div>
					<ul>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Скрытие страницы входа</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Ограниченные попытки входа в админ-панель</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Плагин для защиты сайта</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Анти-спам в комментариях</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Скрытие попытки узнать логин администратора</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Удаление версий у стилей и скриптов</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Скрытие ошибки входа на сайт</span></li>
					</ul>
				</div>
				<div class="wdone-card" data-aos="zoom-in-down" data-aos-duration="800">
					<div class="wdone-card--top">
						<span><img src="<?php echo get_template_directory_uri() ?>/img/magnifier.svg" alt="optimization"></span><h4>Оптимизация</h4>
					</div>
					<ul>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Заполнение Title и Description к сайту</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Проставление заголовков от H1 до H5</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Заполнение alt у картинок</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Настройка OpenGraph</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Настройка ЧПУ</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Добавление и настройка SEO плагина</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Создание карты XML</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Создание robots.txt</span></li>
						<li><span><img src="<?php echo get_template_directory_uri() ?>/img/done-tick.svg" alt="done"></span><span>Оптимизация картинок</span></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<div class="splash price-splash" style="background: url(<?php echo get_template_directory_uri() ?>/img/headerfon2.jpg) no-repeat;
  background-size: cover;
  background-position: bottom;">
		<div class="main__color-overlay--green"></div>
		<div class="main__color-overlay--dark"></div>
		<h1 data-aos="zoom-in-up" data-aos-duration="700">Стоимость и сроки создания</h1>
	</div>
	<section class="price" id="price">
  <div class="container">
		<h3 data-aos="fade-right" data-aos-duration="800">Формирование цены зависит от множества факторов и конечный результат будет сказан только после разговора с заказчиком. Ниже приведены не все типы сайтов и примерные цены стандартных заказов</h3>
		<div class="price-card-wrapper">
				<?php while ( have_rows('price-repeat','options') ) : the_row(); ?>
				<div class="price-card" data-aos="zoom-in-up" data-aos-duration="800">
					<h4 class="price-card_title"><?php the_sub_field('price-title','options'); ?></h4>
					<h4 class="price-card_cost"><?php the_sub_field('price-cost','options'); ?> ₽</h4>
					<h5 class="price-card_deadline">Сроки: от <?php the_sub_field('price-deadline','options'); ?></h5>
				</div>
    		<?php endwhile; ?>
		</div>
  </div>
</section>
<div class="splash work-splash" style="background: url(<?php echo get_template_directory_uri() ?>/img/razrabotka-web-saita.jpg) no-repeat;
  background-size: cover;
  background-position: center;">
	<div class="main__color-overlay--green"></div>
	<div class="main__color-overlay--dark"></div>
	<h1 data-aos="zoom-in-up" data-aos-duration="700">Работы и отзывы</h1>
</div>
<section class="works">
	<div class="container">
		<h3 class="work-title">Выполненные работы</h3>
		<div class="owl-carousel owl-theme">
			<?php while ( have_rows('five_portfolio-repeat','options') ) : the_row(); ?>
				<img src="<?php the_sub_field('five_img','options'); ?>" alt="portfolio">
			<?php endwhile; ?>
		</div>
		<a class="works-btn" href="<?php the_field('five_works-link','options'); ?>">Все работы</a>
		<div class="line"></div>
		<h3 class="feedback-title">Отзывы клиентов</h3>
		<?php echo do_shortcode('[testimonial_view id="1"]'); ?>
	</div>
</section>
<section class="contact" id="contact">
	<h1>Обратная связь</h1>
	<div class="container">
		<p class="contact-main-p">Пишите мне на email roma_tuzov2016@mail.ru или используйте форму ниже</p>
		<p>Написать в <a href="https://t.me/HutsonR">telegram @HutsonR</a></p>
		<p>Написать в <a href="https://api.whatsapp.com/send?phone=79043417002">WhatsApp +79043417002</a></p>
		<form action="<?php echo get_template_directory_uri() ?>/mail.php" method="POST" accept-charset="utf-8">
      <div class="form-wrapper" data-aos="fade-right" data-aos-duration="800">
        <div class="col">
          <div class="inputBox">
            <input type="text" name="user_name" required="required" />
            <span class="form-text">Ваше имя</span>
            <span class="line"></span>
          </div>
        </div>
      </div>
      <div class="form-wrapper" data-aos="fade-left" data-aos-duration="800">
        <div class="col">
          <div class="inputBox">
            <input type="text" name="user_email" required="required" />
            <span class="form-text">Ваш email</span>
            <span class="line"></span>
          </div>
        </div>
      </div>
      <div class="form-wrapper" data-aos="fade-right" data-aos-duration="800">
        <div class="col">
          <div class="inputBox textarea">
            <textarea name="textsend" required="required"></textarea>
            <span class="form-text">Ваше обращение</span>
            <span class="line"></span>
          </div>
        </div>
      </div>
      <div class="form-wrapper" data-aos="fade-up" data-aos-duration="600">
        <div class="col">
		<input type="hidden" name="token" id="token">
          <button type="submit">Отправить</button>
        </div>
      </div>
    </form>
	</div>
</section>
<!-- script -->
<?php get_footer(); ?>