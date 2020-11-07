<?php
// css,JavaScript読み込み
function add_my_styles_and_scripts() {
  // fontawesome読み込み
  wp_enqueue_style(
    'my-fa5',
    'https://use.fontawesome.com/releases/v5.6.3/css/all.css',
    array(),
    '5.6.3'
  );
  wp_enqueue_style(
    'google-font',
    'https://fonts.googleapis.com/css2?family=Sacramento&display=swap',
    array(),
    null
  );
  // style.css読み込み
  wp_enqueue_style(
    'my-template-style',
    get_theme_file_uri('/css/main.css'),
    array(),
    filemtime(get_theme_file_path('/css/main.css')),
  );
  // js読み込み
  wp_enqueue_script(
    'main-script', 
    get_theme_file_uri('/js/main.js'), 
    array(), 
    filemtime(get_theme_file_path('/js/main.js')), 
    true
  );
}
add_action('wp_enqueue_scripts', 'add_my_styles_and_scripts');

// 機能追加
function sw_wp_setup() {
  // タイトルタグ
  add_theme_support('title-tag');

  // 記事のサムネイル
  add_theme_support('post-thumbnails');

  // 画像サイズ追加
  add_image_size('swwp-thumbnail', 190, 130, true);

  add_image_size('swwp-hero', 900, 630, true);
  
  // グローバルメニュー
	register_nav_menus([
		'global' => 'Global Menu',
  ]);
}
add_action('after_setup_theme', 'sw_wp_setup');

// ウィジェっトフック
function swwp_widgets_init() {
  register_sidebar([
    'name' => 'Footer',
    'id' => 'footer',
  ]);
}
add_action('widgets_init', 'swwp_widgets_init');

// 抜粋の文字制限
function new_excerpt_mblength($length) {
  return 40;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');