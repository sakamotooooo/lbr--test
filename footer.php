<?php
  $home = esc_url( home_url( '/' ) );
  $service = esc_url( home_url( '/company/' ) );
  $company = esc_url( home_url( '/business/' ) );
  $recruit = esc_url( home_url( '/training/' ) );
  $lp = esc_url( home_url( '/lp/' ) );
  $policy = esc_url( home_url( '/policy/' ) );

?>
<footer class="footer">
  <div class="footer__inner">
    <div class="footer__left">
      <div class="footer__logo">
        <a href="<?php echo $home; ?>" class="footer__logo-link"><img src="<?php echo get_template_directory_uri() ?>/images/logo-white.png" alt="Loyal Support"></a>
      </div>
      <div class="footer__access">
        <p>〒151-0053</p>
        <p>東京都渋谷区代々木3-43-3　アクティブ代々木105</p>
        <p>TEL：03-6276-5828</p>
      </div>
    </div>
    <div class="footer__right">
      <nav>
          <ul class="footer-nav__items">
          <li class="footer-nav__item"><a href="<?php echo $service; ?>">サービス</a></li>
          <li class="footer-nav__item"><a href="<?php echo $lp; ?>">お困りの方</a></li>
          <li class="footer-nav__item"><a href="<?php echo $company; ?>">会社概要</a></li>
          <li class="footer-nav__item"><a href="<?php echo $contact; ?>">お問い合わせ</a></li>
          <li class="footer-nav__item"><a href="<?php echo $recruit; ?>">採用情報</a></li>
          <li class="footer-nav__item"><a href="<?php echo $policy; ?>">プライバシーポリシー</a></li>
          </ul>
        </nav>
    </div>
    <div class="footer__bottom">
    <div class="footer__sns">
        <a href="<?php echo $home; ?>" class="header__logo-link"></a>
        <a href="<?php echo $home; ?>" class="header__logo-link"></a>
      </div>
      <p class="footer__copyright"><small lang="en">&copy;Copyright LBR Co.,Ltd All right reserved</small></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>