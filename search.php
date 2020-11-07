<!-- 検索結果のページ -->
<?php get_header(); ?>
  <main>
    <div class="archive-wrapper section-common">
      <h2 class="section-title">検索結果</h2>
      <ul class="archive">
      <!-- 記事ループ -->
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>">
            <li class="archive-item">
              <div class="time-and-thumb-archive">
                <time class="date" datetime="<?php echo get_the_date(DATE_W3C); ?>"><i class="fas fa-clock time-icon"></i><?php echo get_the_date(); ?></time>
                <?php if ( has_post_thumbnail() ) : ?>
                  <div class="thumb thumb-archive"><?php the_post_thumbnail('swwp-thumbnail'); ?></div>
                <?php endif; ?>
              </div>
              <div class="data-archive">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
              </div>
            </li>
          </a>
          <?php endwhile; ?>
        <?php else : ?>
          <p>何も見つかりませんでした。</p>
        <?php endif; ?>
      </ul>
      <div class="pagination">
					<?php echo paginate_links( array(
					'type' => 'list',
					'mid_size' => '1',
					'prev_text' => '&laquo;',
					'next_text' => '&raquo;'
					) ); ?>
				</div>
    </div>
  </main>
  <?php get_footer(); ?>
  