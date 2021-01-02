<?php get_header(); ?>
<meta property="og:title" content="<?php the_title(); ?> - Роман Тузов">
<meta property="og:description" content="<?php the_content(); ?>">
<meta property="og:url" content="https://hutsonr.ru/posts/">
<meta property="og:image" content="https://hutsonr.ru/wp-content/uploads/2020/06/screenshot-11.png">
<meta property="og:image:width" content="968">
<meta property="og:image:height" content="504">
<title><?php the_title(); ?> - Роман Тузов</title>
<meta name="description" content="<?php the_content(); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>> 
<!-- Подключение смены темы -->
<?php
session_start();

if(!isset($_SESSION["theme"]))
{
    $_SESSION["theme"] = "light";
}
?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
<!-- Подключение смены темы (end) -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/lightzoom.css">
<header class="header" style="background: rgba(26, 25, 25, 0.98);">
   <div class="container">
      <h1 class="header__logo">
         <a href="<?php the_field('home_link','options'); ?>"><?php the_field('logo','options'); ?></a>
      </h1>
      <nav class="header__menu-wrapper">
         <ul>
            <li>
               <!-- <a class="theme-button" id="theme-button">Сменить тему</a> -->
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
						<a href="<?php the_field('home_link','options'); ?>#contact">Заказать сайт</a>
					</li>
				</ul>
			</nav>
	</div>

   <div class="work-single">
      <div class="single-post_header">
         <div class="single-post_main-img des">
            <img src="<?php the_field('work_img'); ?>" alt="<?php the_title(); ?>">
         </div>
         <div class="single-post_main-img mob">
            <img src="<?php the_field('work_img'); ?>" alt="<?php the_title(); ?>">
         </div>
         <div class="container">
            <div class="single-post_header-title">
               <h1><?php the_title(); ?></h1>
               <p><?php the_field('work_desc'); ?></p>
            </div>
         </div>
      </div>
      <div class="container work-wrapper">
         <div class="work-single__left">
            <?php if (get_field('work_video')): ?>
               <h2>Видео страниц</h2>
               <div class="work-single__video">
                  <iframe width="560" height="315" src="<?php the_field('work_video'); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>
            <?php endif; ?>
            <h2>Фото страниц</h2>
            <p>Нажмите на изображение, чтобы открыть во весь размер</p>
            <div class="work-single__foto des">
               <?php 
               $images = get_field('work_foto');
               foreach ( $images as $image ) {
                  ?>
                  <a href="<?php echo $image['sizes']['large']; ?>" class="lightzoom">
                     <img src="<?php echo $image['sizes']['medium_large']; ?>" alt="<?php the_title(); ?>">
                  </a>
                  <?php
               } ?>
            </div>
			<div class="work-single__foto mob">
               <?php 
               $images = get_field('work_foto');
               foreach ( $images as $image ) {
                  ?>
                  <a href="<?php echo $image['sizes']['large']; ?>" class="lightzoom">
                     <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php the_title(); ?>">
                  </a>
                  <?php
               } ?>
            </div>
         </div>
         <div class="work-single__right">
            <div class="work-single__right-item">
               <span>Тип разработки:</span><span> <?php the_field('work_type'); ?></span>
            </div>
            <div class="work-single__right-item">
               <span>Вёрстка:</span><span> <?php the_field('work_develop'); ?></span>
            </div>
            <div class="work-single__right-item">
               <span>Дизайн:</span><span> <?php the_field('work_design'); ?></span>
            </div>
            <div class="work-single__right-item">
               <span>Скроки создания:</span><span> <?php the_field('work_time'); ?> рабочих дней</span>
            </div>
            <div class="work-single__right-item">
               <span>Ссылка на страницу:</span><span> <a style="text-decoration: underline" target="_blank" href="<?php if (get_field('work_link')): ?>
                <?php the_field('work_link'); ?>
                <?php else: ?>
                  http://hutsonr.ru/error-404/
                <?php endif; ?>">Нажмите сюда</a></span>
            </div>
         </div>
      </div>
   </div>

<?php get_footer(); ?>