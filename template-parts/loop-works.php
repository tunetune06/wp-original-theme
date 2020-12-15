<ul class="works">
  <li class="works__item">
    <a class="works__link" href="<?php the_permalink(); ?>">
      <?php if (has_post_thumbnail()) : ?>
        <p class="thumbnail__img"><?php the_post_thumbnail('my-hero'); ?></p>
      <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/noimage.jpg" alt="ノーイメージ画像">
      <?php endif; ?>
    </a>
    <p class="works__title"><?php the_title(); ?></p>
  </li>
</ul>