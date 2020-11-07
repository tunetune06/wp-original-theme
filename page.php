<!-- 固定ページ -->
<?php get_header(); ?>

<main>
  <div class="section-common">
    <?php while(have_posts()) : the_post(); ?>
      <h2 class="section-title"><?php the_title(); ?></h2>
      <article>
        <?php the_content(); ?>
      </article>
    <?php endwhile; ?>
  </div>
</main>

<?php get_footer(); ?>