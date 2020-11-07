<!-- フロントページ -->
<?php get_header(); ?>
<section class="fv">
  <div class="main-copy">
    <h2 class="fv-text">Shun Watanabe</h2>
    <p class="fv-sub-text">Welcome to my page</p>
  </div>
  <div class="fv-message section-common">
    <p><?php the_content(); ?></p>
  </div>
</section>
<?php get_footer(); ?>