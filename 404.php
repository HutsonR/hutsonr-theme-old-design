<?php //Template Name: сайт-ошибка ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
    />
    <meta name="format-detection" content="telephone=no" />
    <title>Hutson веб-разработчик</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" href="#" type="image/png" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
		<main class="error" id="container">
      <div class="content">
        <h2>404</h2>
        <h4>Опа! Страница не найдена</h4>
        <p><?php the_field('error_text','options'); ?></p>
        <a href="<?php the_field('five_works-link','options'); ?>">на страницу работ</a>
      </div>
		</main>
<?php get_footer(); ?>