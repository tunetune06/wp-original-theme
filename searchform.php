<!-- 検索パーツ -->
<form id="form" method="get" action="<?php echo home_url('/'); ?>" class="search_container">
	<input id="s-box" name="s" type="text" size="25" placeholder="キーワード検索" value="<?php the_search_query(); ?>">
	<input type="submit" value="&#xf002" id="s-btn" class="fas fa-search">
</form>