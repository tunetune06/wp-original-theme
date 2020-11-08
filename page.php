<!-- 固定ページ -->
<?php get_header(); ?>

<main>
  <article class="section-common">
    <?php while(have_posts()) : the_post(); ?>
      <h2 class="section-title"><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <?php endwhile; ?>
  </article>
</main>

<?php get_footer(); ?>