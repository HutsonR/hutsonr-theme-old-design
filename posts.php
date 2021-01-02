<?php //Template Name: posts ?>
<?php get_header(); ?>
<meta property="og:title" content="Полезные статьи - Roman Tuzov">
<meta property="og:description" content="Полезные статьи на тему WordPress, под игровую тематику, маркетинг и продвижение вашего сайта, а также множество всего другого, что может вам пригодится в процессе вашего кодинга">
<meta property="og:url" content="https://hutsonr.ru/posts/">
<meta property="og:image" content="https://hutsonr.ru/wp-content/uploads/2020/06/screenshot-11.png">
<meta property="og:image:width" content="968">
<meta property="og:image:height" content="504">
<title>Полезные статьи - Roman Tuzov</title>
<meta name="description" content="Полезные статьи на тему WordPress, под игровую тематику, маркетинг и продвижение вашего сайта, а также множество всего другого, что может вам пригодится в процессе вашего кодинга">
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

if(isset($_COOKIE['cookieTheme'])){
  $_SESSION["theme"] = $_COOKIE['cookieTheme'];
}
?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
<!-- Подключение смены темы (end) -->
<header class="header" style="background: rgba(26, 25, 25, 0.98);">
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
						<a href="<?php the_field('home_link','options'); ?>#contact">Заказать сайт</a>
					</li>
				</ul>
			</nav>
	</div>
<div class="post-menu-overlay">
   <!-- .... -->
</div>
<div class="post-menu">
   <img class="close" src="<?php echo get_template_directory_uri() ?>/img/close-min.svg" alt="close">
   <a class="useful-app" href="https://hutsonr.ru/in-process">Полезные приложения</a>
   <div class="post-right-popular">
      <h1>Популярные статьи</h1>
      <?php $populargb = new WP_Query('showposts=4&meta_key=post_views_count&orderby=meta_value_num' );
      while ( $populargb->have_posts() ) {
         $populargb->the_post(); ?>
         <div class="post-content-right">
            <a href="<?php echo get_the_permalink(); ?>">
               <!-- <?php
               $image = get_field('post-img');
               $image = $image['sizes']['medium_large'];
               if (!$image) $image = get_template_directory_uri() . '/img/no-image.jpg';
               echo "<img src='$image' alt='img'>";	?> -->
               <div class="post-content_text">
                  <h2><?php the_title(); ?></h2>
                  <p><?php the_content(); ?></p>
               </div>
               <div class="post-content_bottom">
                  <p class="time"><img src="<?php echo get_template_directory_uri() ?>/img/clock.svg" alt="time"><?php the_time('F jS, Y'); ?></p>
               </div>
            </a>
         </div>
      <?php } ?>
   </div>
</div>
<div class="posts">
   <div class="container">
   <h1 class="posts-main-title">Статьи</h1>
    <!-- <a class="theme-button" id="theme-button">Сменить тему</a> -->
      <div class="posts-wrapper">
         <div class="post-right mobile">
            <?php if ( is_active_sidebar( 'true_side' ) ) : ?>
 
               <div id="true-side" class="sidebar">
            
                  <?php dynamic_sidebar( 'true_side' ); ?>
            
               </div>
            
            <?php endif; ?>
            <p class="post-menu-btn">Открыть меню</p>
         </div>
         <div class="post-left">
            <?php
            // 1 значение по умолчанию
            $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

            $the_query = new WP_Query( array(
               'posts_per_page' => 10,
               'paged'          => $paged,
            ) );
            
            // цикл вывода полученных записей
            while( $the_query->have_posts() ){
               $the_query->the_post();
               ?>
            <div class="post-content">
               <h2 class="category <?php echo get_field('kategoriya')['value']; ?>">
                  <?php
                  $categories = get_the_category($post_id);
                  if($categories){
                     foreach($categories as $category) {
                        echo '<a href="'. get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
                     }
                  }
                  ?>
               </h2>
               <?php
               $image = get_field('post-img');
               $image = $image['sizes']['medium_large'];
               if (!$image) $image = get_template_directory_uri() . '/img/no-image.jpg';
               echo "<img class='main-post_img' src='$image' alt='img'>";	?>
               <div class="post-content_text">
                  <h2><?php the_title(); ?></h2>
                  <p><?php the_content(); ?></p>
               </div>
               <a class="post-content-btn" href="<?php echo get_the_permalink(); ?>">Читать дальше <img src="<?php echo get_template_directory_uri() ?>/img/right-arrow-min.svg" alt="arrow"></a>
               <div class="post-content_bottom">
                  <p class="time"><img src="<?php echo get_template_directory_uri() ?>/img/clock.svg" alt="time"><?php the_time('F jS, Y'); ?></p>
               </div>
            </div>
            <?php 
            } 
            wp_reset_postdata();

            // пагинация для произвольного запроса
            $big = 999999999; // уникальное число ?>
            <div class="pag-links">
               <?php
               echo paginate_links( array(
                  'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                  'current' => max( 1, get_query_var('paged') ),
                  'total'   => $the_query->max_num_pages
               ) );
               ?>
            </div>
         </div>
         <div class="post-right desc">
            <?php if ( is_active_sidebar( 'true_side' ) ) : ?>
 
               <div id="true-side" class="sidebar">
            
                  <?php dynamic_sidebar( 'true_side' ); ?>
            
               </div>
            
            <?php endif; ?>
            <a class="useful-app" href="https://hutsonr.ru/in-process">Полезные приложения</a>
            <div class="post-right-popular">
               <h1>Популярные статьи</h1>
               <?php $populargb = new WP_Query('showposts=5&meta_key=post_views_count&orderby=meta_value_num' );
               while ( $populargb->have_posts() ) {
                  $populargb->the_post(); ?>
                  <div class="post-content-right">
                     <a href="<?php echo get_the_permalink(); ?>">
                        <div class="post-content_text">
                           <h2><?php the_title(); ?></h2>
                           <p><?php the_content(); ?></p>
                        </div>
                        <div class="post-content_bottom">
                           <p class="time"><img src="<?php echo get_template_directory_uri() ?>/img/clock.svg" alt="time"><?php the_time('F jS, Y'); ?></p>
                        </div>
                     </a>
                  </div>
               <?php } ?>
            </div>
         </div>
      </div>
   </div>
</div>

<?php get_footer(); ?>