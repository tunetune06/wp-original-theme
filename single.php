<!-- 個別投稿ページ -->
<?php get_header(); ?>
<div class="page-title">
	<h2 class="page-title__text">Blog</h2>
</div>
<?php get_template_part('template-parts/breadcrumb'); ?>
<div class="article-wrapper">
	<article class="my-article">
		<?php while (have_posts()) : the_post(); ?>
		<?php if (has_post_thumbnail()) : ?>
				<div class="my-article__eye">
					<?php the_post_thumbnail('my-hero'); ?>
				</div>
			<?php else : ?>
				<div class="my-article__eye">
					<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.jpg" alt="">
				</div>
			<?php endif; ?>
			<h2 class="my-article__title"><?php the_title(); ?></h2>
			<p class="my-article__date">
				<timedatetime="<?php echo get_the_date(DATE_W3C); ?>"><i class="fas fa-clock time-icon"></i><?php echo get_the_date(); ?></timedatetime=>
			</p>
			<?php the_category(); ?>
			<div class="my-article__content">
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
		<div class="post-links">
			<div class="post-link post-link_prev"><?php previous_post_link('<i class="fas fa-chevron-left"></i>%link'); ?></div>
			<div class="post-link post-link_next"><?php next_post_link('%link<i class="fas fa-chevron-right"></i>'); ?></div>
		</div>
	</article>
	<div class="sidebar-wrapper">
		<?php get_sidebar('categories'); ?>
		<?php get_sidebar('archives'); ?>
	</div>
</div>


<?php get_footer(); ?>