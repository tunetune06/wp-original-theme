<!-- Works一覧ページ -->
<?php get_header(); ?>
<div class="page-title">
  <h2 class="page-title__text">Works</h2>
</div>
<main class="works-archive">
  <?php get_template_part('template-parts/breadcrumb'); ?>
  <div class="works-archive__inner">
    <?php
    $kinds = get_terms([
      'taxonomy' => 'kind'
    ]);
    if (!empty($kinds)) :
    ?>
      <?php foreach ($kinds as $kind) : ?>
        <section>
          <h2 class="works-archive__name"><?php echo $kind->name; ?></h2>
          <div>
            <?php
            // メニューの投稿タイプ
            $args = array(
              'post_type' => 'works',
              'posts_per_page' => -1,
            );
            // 料理の種類で絞り込む
            $taxquerysp = array('relation' => 'AND');
            $taxquerysp[] = array(
              'taxonomy' => 'kind',
              'terms' => $kind->slug,
              'field' => 'slug',
            );
            $args['tax_query'] = $taxquerysp;

            $the_query =  new WP_Query($args);
            if ($the_query->have_posts()) :
            ?>
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <ul class="works">

                  <li class="works__item">
                    <a class="works__link view-click" href="<?php the_permalink(); ?>">
                      <?php if (has_post_thumbnail()) : ?>
                        <p class="thumbnail__img"><?php the_post_thumbnail('my-hero'); ?></p>
                      <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/noimage.jpg" alt="ノーイメージ画像">
                      <?php endif; ?>
                    </a>
                    <p class="works__title"><?php the_title(); ?></p>
                  </li>
                </ul>
              <?php endwhile; ?>
            <?php else : ?>
              <p>準備中</p>
            <?php endif; ?>
          </div>
        </section>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>