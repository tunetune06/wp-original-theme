<!-- 固定ページ(contact) -->
<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
  <div class="page-title">
    <h2 class="page-title__text"><?php the_title(); ?></h2>
  </div>
  <?php get_template_part('template-parts/breadcrumb'); ?>
  <main class="content-common">
    <?php the_content(); ?>
  </main>
<?php endwhile; ?>

<?php get_footer(); ?>