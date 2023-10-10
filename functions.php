<?php

/**
 * Functions
 */
/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup()
{
	add_theme_support('post-thumbnails'); /* アイキャッチ */
	add_theme_support('automatic-feed-links'); /* RSSフィード */
	add_theme_support('title-tag'); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action('after_setup_theme', 'my_setup');



/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init()
{
	wp_enqueue_style('styles-css', get_template_directory_uri() . '/css/styles.css', array(), '1.0.1', 'all');

	wp_enqueue_style('swiper-css', '//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), '1.0.1', 'all');

	wp_enqueue_style('google-font', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700&family=Roboto:wght@400;500;700&display=swap', array(), '1.0.1', 'all');

	wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.0.js', array('jquery'), '1.0.1', true);

	wp_enqueue_script('swiper-js', '//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array('jquery'), '1.0.1', true);
	wp_enqueue_script('inview-js', get_template_directory_uri() . '/js/jquery.inview.min.js', array('jquery'), '1.0.1', true);
	wp_enqueue_script('script-js', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.1', true);
}

add_action('wp_enqueue_scripts', 'my_script_init');


// <p></p>削除
function mvwpform_autop_filter() {
  if (class_exists('MW_WP_Form_Admin')) {
    $mw_wp_form_admin = new MW_WP_Form_Admin();
    $forms = $mw_wp_form_admin->get_forms();
    foreach ($forms as $form) {
      add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
    }
  }
}
mvwpform_autop_filter();

//ユーザー名を非表示に
function disable_author_archive_query() {
	if( preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING']) ){
	  wp_safe_redirect( home_url() );
	  exit;
	}
  }

//投稿詳細でタイトルを非表示に
function foo_pop($trail) {
	if ( is_single()) {
		array_shift($trail->trail);
}};
add_action('bcn_after_fill', 'foo_pop');