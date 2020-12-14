<!-- 投稿一覧ページ -->
<?php get_header(); ?>
<div class="page-title">
  <h2 class="page-title__text"><?php the_title(); ?></h2>
</div>
<?php get_template_part('template-parts/breadcrumb'); ?>
<main class="content-common">
  <section class="my-taxonomy">
        <h2 class="my-taxonomy__title"><?php echo single_term_title(''); ?></h2>
        <div class="my-taxonomy__inner">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php if (has_post_thumbnail()) : ?>
                  <p class="my-taxonmy__img"><?php the_post_thumbnail('my-hero'); ?></p>
                <?php else : ?>
                  <p class="my-taxonmy__img"><img src="<?php echo get_template_directory_uri(); ?>/images/noimage.jpg" alt="ノーイメージ画像"></p>
                <?php endif; ?>
                <p><?php the_title(); ?></p>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
  </section>
</main>
<?php get_footer(); ?>