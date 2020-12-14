<?php
/*
Template Name: aboutページ
Description: aboutページのレイアウト用
*/
?>

<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
  <div class="page-title">
    <h2 class="page-title__text"><?php the_title(); ?></h2>
  </div>
  <?php get_template_part('template-parts/breadcrumb'); ?>
  <main class="about content-common">
    <p class="about__img"><img src="<?php echo get_template_directory_uri(); ?>/images/myface.jpg" alt="著者のイメージ画像"></p>
    <div class="about__content">
      <?php the_content(); ?>
    </div>
  </main>
<?php endwhile; ?>
<?php get_footer(); ?>