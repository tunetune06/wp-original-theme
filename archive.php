<!-- カテゴリー/月別ページ -->
<?php get_header(); ?>
<div class="page-title">
  <h2 class="page-title__text">Blog</h2>
</div>
<?php get_template_part('template-parts/breadcrumb'); ?>
<main class="my-archive">
  <?php if (is_month()) : ?>
    <h2 class="my-archive__page-title"><?php the_time('Y年m月'); ?></h2>
  <?php else : ?>
    <h2 class="my-archive__page-title"><?php the_category(); ?></h2>
  <?php endif; ?>
  <div class="my-archive__inner">
    <?php get_template_part('template-parts/loop', 'blog'); ?>
    <div class="pagination">
      <?php echo paginate_links(array(
        'type' => 'list',
        'mid_size' => '1',
        'prev_text' => '&laquo;',
        'next_text' => '&raquo;'
      )); ?>
    </div>
    <div class="sidebar-wrapper">
      <?php get_sidebar('categories'); ?>
      <?php get_sidebar('archives'); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>