<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name=“robots” content=“noindex”>
  <title>LOYAL SUPPORT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<?php
  $home = esc_url( home_url( '/' ) );
  $company = esc_url( home_url( '/company/' ) );
  $business = esc_url( home_url( '/business/' ) );
  $training = esc_url( home_url( '/training/' ) );
  $blog = esc_url( home_url( '/blog/' ) );
  $contact = esc_url( home_url( '/contact/' ) );
?>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header js-header">
    <div class="header__inner">
      <?php if(is_front_page()): ?>
        <h1 class="header__logo">
      <?php else :?>
        <div class="header__logo">
      <?php endif ;?>
      <a href="<?php echo $home; ?>" class="header__logo-link"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="Loyal Support"></a>
      <?php if(is_front_page()): ?>
        </h1>
      <?php else :?>
      </div>
      <?php endif ;?>
      <div class="header__spright">
        <a href="" class="header__sptel">
            <img src="<?php echo get_template_directory_uri() ?>/images/icon-tel2.svg" alt="電話アイコン">
        </a>
        <button class="header__drawer js-hamburger">
          <span></span>
          <span></span>
          <span></span>
          <div class="drawer-text">MENU</div>
          <div class="drawer-text--close">CLOSE</div>
        </button>
      </div>
    <nav class="header__sp-nav sp-nav js-drawer-menu">
      <ul class="sp-nav__items">
        <li class="sp-nav__item"><a href="<?php echo $home; ?>">ホーム</a></li>
        <li class="sp-nav__item"><a href="<?php echo $company; ?>">会社概要</a></li>
        <li class="sp-nav__item"><a href="<?php echo $business; ?>">事業内容</a></li>
        <li class="sp-nav__item"><a href="<?php echo $training; ?>">研修センター</a></li>
        <li class="sp-nav__item"><a href="<?php echo $blog; ?>">実績・事例</a></li>
        <li class="sp-nav__item sp-nav__item--contact">
          <a href="<?php echo $contact; ?>">
            <img src="<?php echo get_template_directory_uri() ?>/images/icon-mail.svg" alt="メールアイコン">
            <span>お問い合わせ</span>
          </a>
        </li>
      </ul>
    </nav>
    <div class="header__pcright">
    <nav class="header__pc-nav pc-nav">
      <a href="header__tel" class="header__tel">
          <img src="<?php echo get_template_directory_uri() ?>/images/icon-tel2.svg" alt="電話アイコン">
          <p>042-590-1827</p>
      </a>
      <ul class="pc-nav__items">
        <li class="pc-nav__item"><a href="<?php echo $home; ?>">TOP<span>トップ</span></a></li>
        <li class="pc-nav__item"><a href="<?php echo $company; ?>">COMPANY<span>会社概要</span></a></li>
        <li class="pc-nav__item"><a href="<?php echo $business; ?>">BUSINESS<span>事業内容</span></a></li>
        <li class="pc-nav__item"><a href="<?php echo $training; ?>">TRAINING<span>研修センター</span></a></li>
        <li class="pc-nav__item"><a href="<?php echo $blog; ?>">CASE<span>実績・事例</span></a></li>
      </ul>
    </nav>
    <div class="pc-nav__contact">
        <a href="<?php echo $contact; ?>">
          <img src="<?php echo get_template_directory_uri() ?>/images/icon-mail.svg" alt="メールアイコン">
          <span>お問い合わせ</span>
        </a>
    </div>
    </div>
  </div>
</header>