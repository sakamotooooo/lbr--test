<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name=“robots” content=“noindex”>
  <?php get_template_part('template/title'); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="" />
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-23W0D20H0D"></script>
	<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());

	gtag('config', 'G-23W0D20H0D');
	</script>

	<?php wp_head(); ?>
</head>
<?php
$home = esc_url(home_url('/'));
$service = esc_url(home_url('/service/'));
$company = esc_url(home_url('/company/'));
$recruit = esc_url(home_url('/recruit/'));
$lp = esc_url(home_url('/lp/'));
$contact = esc_url(home_url('/contact/'));

?>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header js-header">
    <div class="header__inner">
      <?php if (is_front_page()) : ?>
        <h1 class="header__logo">
        <?php else : ?>
          <div class="header__logo">
          <?php endif; ?>
          <a href="<?php echo $home; ?>" class="header__logo-link"><img loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt=""></a>
          <?php if (is_front_page()) : ?>
        </h1>
      <?php else : ?>
    </div>
  <?php endif; ?>
  <button class="header__drawer js-hamburger">
    <span></span>
    <span></span>
    <span></span>
  </button>
  <nav class="header__sp-nav sp-nav js-drawer-menu">
    <ul class="sp-nav__items">
      <li class="sp-nav__item"><a href="<?php echo $service; ?>">サービス</a></li>
      <li class="sp-nav__item"><a href="<?php echo $company; ?>">会社概要</a></li>
      <li class="sp-nav__item"><a href="<?php echo $recruit; ?>">採用情報</a></li>
      <li class="sp-nav__item"><a href="<?php echo $lp; ?>">お困りの方</a></li>
      <li class="sp-nav__item">
        <div class="tel-box">
          <div class="tel-box__img">
            <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/phone.png" class="pc-nav__telimg" alt="電話アイコン">
          </div>
          <div class="tel-box__details">
            <div class="tel-box__number"><a href="tel:03-6276-5828">03-6276-5828</a></div>
            <p class="tel-box__time">平日受付:9:00～18:00</p>
          </div>
        </div>
      </li>
      <li class="sp-nav__contact">
        <a href="<?php echo $contact; ?>">
          <span>お問い合わせ</span>
        </a>
      </li>
    </ul>
  </nav>
  <div class="header__right">
    <nav class="header__pc-nav pc-nav">
      <ul class="pc-nav__items">
        <li class="pc-nav__item"><a href="<?php echo $service; ?>">サービス</a></li>
        <li class="pc-nav__item"><a href="<?php echo $company; ?>">会社概要</a></li>
        <li class="pc-nav__item"><a href="<?php echo $recruit; ?>">採用情報</a></li>
        <li class="pc-nav__item"><a href="<?php echo $lp; ?>">お困りの方</a></li>
        <li class="pc-nav__item pc-nav__tel">
          <div class="tel-box">
            <div class="tel-box__img">
              <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/phone.png" alt="電話アイコン">
            </div>
            <div class="tel-box__details">
              <p class="tel-box__number tel-box__number--pc">03-6276-5828</p>
              <p class="tel-box__time">平日受付:9:00～18:00</p>
            </div>
          </div>
        </li>
      </ul>
    </nav>
    <div class="pc-nav__contact">
      <a href="<?php echo $contact; ?>">
        <span>お問い合わせ</span>
      </a>
    </div>
  </div>
  </div>
  </header>
