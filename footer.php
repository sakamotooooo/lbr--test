<?php
  $home = esc_url( home_url( '/' ) );
  $company = esc_url( home_url( '/company/' ) );
  $business = esc_url( home_url( '/business/' ) );
  $training = esc_url( home_url( '/training/' ) );
  $blog = esc_url( home_url( '/blog/' ) );
  $contact = esc_url( home_url( '/contact/' ) );
?>
<footer class="footer">
  <div class="footer__inner">
    <div class="footer__box">
      <div class="footer__top">
        <ul class="footer-nav__items">
          <li class="footer-nav__item"><a href="<?php echo $home; ?>">TOP<span>トップ</span></a></li>
          <li class="footer-nav__item"><a href="<?php echo $company; ?>">COMPANY<span>会社概要</span></a></li>
          <li class="footer-nav__item"><a href="<?php echo $business; ?>">BUSINESS<span>事業内容</span></a></li>
          <li class="footer-nav__item"><a href="<?php echo $case; ?>">CASE<span>実績・事例</span></a></li>
          <li class="footer-nav__item"><a href="<?php echo $training; ?>">TRAINING<span>研修センター</span></a></li>
          <li class="footer-nav__item"><a href="<?php echo $news; ?>">NEWS<span>お知らせ</span></a></li>
          <li class="footer-nav__item"><a href="<?php echo $contact; ?>">CONTACT<span>お問い合わせ</span></a></li>

        </ul>
        <div class="footer__logo">
          <a href="<?php echo $home; ?>" class="header__logo-link"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="Loyal Support"></a>
        </div>
      </div>
      <div class="footer__access">
        <p>LOYAL SUPPORT株式会社</p>
        <p>東京都東大和市南街二丁目59番地6プチセルダ203号</p>
      </div>
      <div class="footer__tellist">
        <div class="footer__tel">
          <p class="footer__teltext">TEL</p>
          <img src="<?php echo get_template_directory_uri() ?>/images/icon-tel2.svg" alt="電話">
          <p class="footer__telnumber">042-590-1827</p>
        </div>
        <div class="footer__tel">
          <p class="footer__teltext">FAX</p>
          <img src="<?php echo get_template_directory_uri() ?>/images/icon-fax.svg" alt="FAX">
          <p class="footer__telnumber">042-590-1828</p>
        </div>
      </div>
      <div class="footer__sns">
        <a href="<?php echo $home; ?>" class="header__logo-link"><img src="<?php echo get_template_directory_uri() ?>/images/facebook_icon.png" alt="Loyal Support"></a>
        <a href="<?php echo $home; ?>" class="header__logo-link"><img src="<?php echo get_template_directory_uri() ?>/images/logo_metaX-3.png" alt="Loyal Support"></a>
      </div>
      <p class="footer__copyright"><small lang="en">&copy;2023 LOYAL SUPPORT Inc. All Right Reserved.</small></p>
    </div>
    <div class="footer__contact">
        <p>サービスについてのご相談はこちら</p>
        <div class="footer__btn">
          <div class="btn footer__contactbtn">
            <a href="<?php echo $contact; ?>">お問い合わせ</a>
          </div>
        </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>