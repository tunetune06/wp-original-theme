<!-- ヘッダーパーツ -->
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="header__title">
      <a href="<?php echo esc_url(home_url()); ?>"><img class="logo" src="<?php echo get_template_directory_uri() ?>/images/mylogo.png" alt="サイトのロゴ"></a>
      <h1 class="site-title"><?php bloginfo('description'); ?></h1>
    </div>
    <div class="nav-wrapper">
      <!-- グローバルメニュー読み込み -->
      <?php if (has_nav_menu('global')) : ?>
        <?php wp_nav_menu([
          'theme_location'  => 'global',
          'menu_id' => 'global-menu',
          'container' => 'nav',
          'container_class' => 'global-nav',
        ]); ?>
      <?php endif; ?>
      <!-- 検索窓読み込み -->
      <?php get_search_form(); ?>
    </div>
    <!-- ハンバーガーアイコン -->
    <button id="burger" class="burger">
      <span class="burger__item burger__item_top"></span>
      <span class="burger__item burger__item_center"></span>
      <span class="burger__item burger__item_bottom"></span>
    </button>
    <!-- ハンバーガメニュー -->
    <div id="menu">
      <!-- グローバルメニュー読み込み -->
      <?php if (has_nav_menu('global')) : ?>
        <?php wp_nav_menu([
          'theme_location'  => 'global',
          'menu_id' => 'global-menu',
          'container' => 'nav',
          'container_class' => 'global-nav',
        ]); ?>
      <?php endif; ?>
      <!-- 検索窓読み込み -->
      <?php get_search_form(); ?>
    </div>
  </header>