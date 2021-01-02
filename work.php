<?php //Template Name: Работы ?>
<?php get_header(); ?>
<meta property="og:title" content="Выполненные работы - Роман Тузов">
<meta property="og:description" content="Портфолио. На этой странице собраны все работы, выполненные веб-разработчиком HutsonR">
<meta property="og:url" content="https://hutsonr.ru/works/">
<meta property="og:image" content="https://hutsonr.ru/wp-content/uploads/2020/06/screenshot-11.png">
<meta property="og:image:width" content="968">
<meta property="og:image:height" content="504">
<title>Выполненные работы - Роман Тузов</title>
<meta name="description" content="Портфолио. На этой странице собраны все работы, выполненные веб-разработчиком HutsonR">
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
						<a href="<?php the_field('home_link','options'); ?>posts">Статьи</a>
						<a href="https://hutsonr.ru/in-process/">FAQ</a>
						<a href="<?php the_field('home_link','options'); ?>#contact">Заказать сайт</a>
					</li>
				</ul>
			</nav>
	</div>
		<main class="work_all">
			<div class="stars-container_work">
       <img src="https://hutsonr.ru/wp-content/uploads/2020/09/13325.jpg" alt="site">
      </div>
			<div class="container">
			<h1>Hover on the cards.</h1>
        <div class="wrapper">

          <?php  $query = new WP_Query( 'post_type=work' ); ?>
          <?php while ( $query->have_posts()):$query->the_post(); ?>
            <div class="card" style="background-image: url('<?php the_field('work_img'); ?>'); background-position: center;">
              <div class="card__content">
                <a target="_blank" href="<?php if (get_field('work_link')): ?>
                <?php the_field('work_link'); ?>
                <?php else: ?>
                  http://hutsonr.ru/error-404/
                <?php endif; ?>">
                 <div class="card__content--description">
                  <h3 class="roll-up">
                    <span><?php the_field('work_title'); ?></span>
                    <span><?php the_field('work_title'); ?></span>
                  </h3>
                  <p class="text-reveal">
                    <span>
                      <span><?php the_field('work_text'); ?></span>
                    </span>
                    <span>
                      <span><span><?php the_field('work_text'); ?></span></span>
                    </span>
                  </p>
                </div>
                </a>
              </div>
              <a class="work-single_btn" href="<?php echo get_the_permalink(); ?>">Посмотреть кейс</a>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </div>
			</div>
		</main>
<?php get_footer(); ?>