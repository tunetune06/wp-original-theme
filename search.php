<!-- 検索結果のページ -->
<?php get_header(); ?>
<div class="page-title">
  <h2 class="page-title__text">サイト内検索</h2>
</div>
<?php get_template_part('template-parts/breadcrumb'); ?>
<main class="my-archive">
  <h2 class="my-archive__page-title">「<?php the_search_query(); ?>」の検索結果</h2>
  <div class="my-archive__inner">
    <?php get_template_part('template-parts/loop', 'blog'); ?>
    <div class="sidebar-wrapper">
      <?php get_sidebar('categories'); ?>
      <?php get_sidebar('archives'); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>