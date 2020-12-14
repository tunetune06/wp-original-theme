<!-- 個別投稿ページ -->
<?php get_header(); ?>
<div class="page-title">
	<h2 class="page-title__text">Works</h2>
</div>
</main>
<?php get_template_part('template-parts/breadcrumb'); ?>
	<article class="w-article">
		<?php while (have_posts()) : the_post(); ?>
			<h2 class="w-article__title"><?php the_title(); ?></h2>
			<div class="my-article__content">
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	</article>
	<a class="w-article__link" href="<?php echo home_url(); ?>/works">Works一覧に戻る</a>
<main>


<?php get_footer(); ?>