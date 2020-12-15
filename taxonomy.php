<!-- 投稿一覧ページ -->
<?php get_header(); ?>
<div class="page-title">
  <h2 class="page-title__text">Works</h2>
</div>
<main class="works-archive">
  <?php get_template_part('template-parts/breadcrumb'); ?>
        <h2 class="works-archive__name"><?php echo single_term_title(''); ?></h2>
        <div class="works-archive__inner">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/loop', 'works'); ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
  </section>
</main>
<?php get_footer(); ?>