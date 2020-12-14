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
    'https://fonts.googleapis.com/css2?family=Miltonian&family=Miltonian+Tattoo&display=swap',
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
    array('jquery'), 
    filemtime(get_theme_file_path('/js/main.js')), 
    true
  );
}
add_action('wp_enqueue_scripts', 'add_my_styles_and_scripts');

// タイトルタグの区切り文字変更
function my_document_title_separator($separator) {
  $separator = '|';
  return $separator;
}
add_filter('document_title_separator', 'my_document_title_separator');

// 機能追加
function my_wp_setup() {
  // タイトルタグ
  add_theme_support('title-tag');

  // 記事のサムネイル
  add_theme_support('post-thumbnails');

  // 画像サイズ指定
  add_image_size( 'my-thumbnail', 190, 130, true );

	add_image_size( 'my-hero', 1200, 630, true );

  // グローバルメニュー
	register_nav_menus([
		'global' => 'Global Menu',
  ]);
}
add_action('after_setup_theme', 'my_wp_setup');

// ウィジェっトフック
function my_widgets_init() {
  register_sidebar([
    'name' => 'Footer',
    'id' => 'footer',
  ]);
}
add_action('widgets_init', 'my_widgets_init');

// 抜粋の文字制限
function new_excerpt_mblength($length) {
  return 40;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');