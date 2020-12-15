<ul class="my-archive__lists">
  <!-- 記事ループ -->
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <a href="<?php the_permalink(); ?>">
        <li class="my-archive__list">
          <div class="thumbnail">
            <!-- 投稿日時 -->
            <time class="thumbnail__date" datetime="<?php echo get_the_date(DATE_W3C); ?>"><i class="fas fa-clock time-icon"></i><?php echo get_the_date(); ?></time>
            <!-- サムネイル画像 -->
            <?php if (has_post_thumbnail()) : ?>
              <p class="thumbnail__img"><?php the_post_thumbnail('my-thumbnail'); ?></p>
            <?php else : ?>
              <p class="thumbnail__img"><img src="<?php echo get_template_directory_uri(); ?>/images/noimage.jpg" alt="ノーイメージ画像"></p>
            <?php endif; ?>
          </div>
          <div class="blog__content">
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?></p>
          </div>
        </li>
      </a>
    <?php endwhile; ?>
  <?php else : ?>
    <p>投稿がありません。</p>
  <?php endif; ?>
  <div class="pagination">
    <?php echo paginate_links(array(
      'type' => 'list',
      'mid_size' => '1',
      'prev_text' => '&laquo;',
      'next_text' => '&raquo;'
    )); ?>
  </div>
</ul>