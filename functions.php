<?php
/**
 * Functions
 */

/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
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
add_action( 'after_setup_theme', 'my_setup' );



/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init()
{

	wp_enqueue_style( 'styles-css', get_template_directory_uri() . '/css/styles.css', array(), '1.0.1', 'all' );

	wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.6.0.js', array( 'jquery' ), '1.0.1', true );
	wp_enqueue_style( 'swiper-css', '//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), '1.0.1', 'all' );
	wp_enqueue_style( 'splide-css', '//cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css', array(), '1.0.1', 'all' );

	wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700&family=Roboto:wght@400;500;700&display=swap', array(), '1.0.1', 'all' );

	wp_enqueue_script( 'splide-js','//cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array( 'jquery' ), '1.0.1', true );

	wp_enqueue_script( 'splide-loop-js','//cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js', '1.0.1', true );

	wp_enqueue_script( 'swiper-js','//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array( 'jquery' ), '1.0.1', true );
	wp_enqueue_script( 'script-js', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.1', true );

}
add_action('wp_enqueue_scripts', 'my_script_init');

add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
   return false;
}





/**
 * CSSとJavaScriptの読み込み
 *
 * @return void
 */
// function my_theme_script_init() {
//   // WordPress提供のjquery.jsを読み込まない
//   wp_deregister_script( 'jquery' );
//   // jQueryの読み込み
//   wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0' );
//   // Google Fonts
//   // 2つ以上読み込む際は分けて読み込みます
//   wp_enqueue_style( 'NotoSans', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap' );
//   wp_enqueue_style( 'KiwiMaru', '//fonts.googleapis.com/css2?family=Kiwi+Maru:wght@400;500&display=swap' );
//   // micromodal
//   wp_enqueue_script( 'micromodal', '//unpkg.com/micromodal/dist/micromodal.min.js', array(), '1.0.0' );
//   // Google Maps
//   wp_enqueue_script( 'map', '//maps.googleapis.com/maps/api/js?key=APIキーを入れます', array(), '1.0.0', false );
//   // Slick
//   wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '1.8.1', false );
//   wp_enqueue_style( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1', false );
//   wp_enqueue_style( 'slick-theme', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.8.1', false );
//   // Swiper
//   wp_enqueue_script( 'swiper', '//unpkg.com/swiper@8/swiper-bundle.min.js', array(), '8.0.0', false );
//   wp_enqueue_style( 'swiper', '//unpkg.com/swiper@8/swiper-bundle.min.css', array(), '8.0.0', false );
// 	//GSAP
// 	wp_enqueue_script( 'swiper', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js', array(), '3.11.5', false );
//   // 自作jsファイルの読み込み
//   wp_enqueue_script( 'main', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true );
//   // 自作cssファイルの読み込み
//   wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', false );
// }
// add_action( 'wp_enqueue_scripts', 'my_theme_script_init' );