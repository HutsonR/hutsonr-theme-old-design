<?php //Template Name: posts-app ?>
<?php get_header(); ?>
<header id="header" class="header" style="background: rgba(3, 25, 42, 0.95);">
   <a href="<?php the_field('home_link','options'); ?>" title="" class="header__name"
   ><h2>Roman Tuzov</h2></a
   >
   <div class="header-center" style="position: relative; left: auto !important; transform: translateX(0) !important;">
   <div class="night-mode">
      <input class="l" type="checkbox" id="switch-1">
   </div>
   <a href="<?php the_field('home_link','options'); ?>" title=""><h2>Главная</h2></a>
   <a href="/posts" title=""><h2>Статьи</h2></a>
   </div>
</header>
<div class="post-menu-overlay">
   <!-- .... -->
</div>
<div class="post-menu">
   <img class="close" src="<?php echo get_template_directory_uri() ?>/img/close-min.svg" alt="close">
   <a class="useful-app" href="https://hutsonr.ru/posts/app/">Полезные приложения</a>
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
   <h1>Полезные приложения</h1>
      <div class="posts-wrapper">
         <div class="post-left">
            <?php
            // 1 значение по умолчанию
            $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

            $the_query = new WP_Query( array(
               'posts_per_page' => 12,
               'paged'          => $paged,
               'post_type'      => 'app'
            ) );
            
            // цикл вывода полученных записей
            while( $the_query->have_posts() ){
               $the_query->the_post();
               ?>
            <div class="app-content">
               <?php
               $image = get_field('app-img');
               $image = $image['sizes']['medium_large'];
               if (!$image) $image = get_template_directory_uri() . '/img/no-image.jpg';
               echo "<img src='$image' alt='img'>";	?>
               <div class="post-content_text">
                  <h2><?php the_title(); ?></h2>
                  <p class="time"><img src="<?php echo get_template_directory_uri() ?>/img/clock.svg" alt="time"><?php the_time('F jS, Y'); ?></p>
                  <p><?php the_field('app-desc'); ?></p>
                  <a class="post-content-btn" href="<?php the_field('app-file'); ?>" download>Скачать приложение</a>
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
         <div class="post-right app desc">
            <?php if ( is_active_sidebar( 'true_side' ) ) : ?>
 
               <div id="true-side" class="sidebar">
            
                  <?php dynamic_sidebar( 'true_side' ); ?>
            
               </div>
            
            <?php endif; ?>
            <a class="useful-app" href="https://hutsonr.ru/posts/">Полезные статьи</a>
            <div class="post-right-popular">
               <h1>Популярные статьи</h1>
               <?php $populargb = new WP_Query('showposts=5&meta_key=post_views_count&orderby=meta_value_num' );
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
      </div>
   </div>
</div>

<?php get_footer(); ?>