<!-- 個別投稿ページ -->
<?php get_header(); ?>

<main>
	<div class="section-common">
		<?php while(have_posts()) : the_post(); ?>
			<h2 class="article-title"><?php the_title(); ?></h2>
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="thumbnail-eye">
					<?php the_post_thumbnail('swwp-hero'); ?>
				</div>
			<?php endif; ?>
      <article>
        <?php the_content(); ?>
      </article>
    <?php endwhile; ?>
	</div>
</main>


<?php get_footer(); ?>