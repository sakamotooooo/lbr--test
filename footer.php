<?php
$home = esc_url(home_url('/'));
$service = esc_url(home_url('/service/'));
$company = esc_url(home_url('/company/'));
$recruit = esc_url(home_url('/recruit/'));
$lp = esc_url(home_url('/lp/'));
$policy = esc_url(home_url('/policy/'));
$contact = esc_url(home_url('/contact/'));


?>
<footer class="footer">
	<div class="footer__inner">
		<div class="footer__top">
			<div class="footer__left">
				<div class="footer__logo">
					<a href="<?php echo $home; ?>" class="footer__logo-link"><img src="<?php echo get_template_directory_uri() ?>/images/logo-white.png" alt=""></a>
				</div>
				<div class="footer__access">
					<p>〒151-0053</p>
					<p>東京都渋谷区代々木3-43-3　アクティブ代々木105</p>
					<p>TEL：03-6276-5828</p>
				</div>
			</div>
			<nav class="footer__right">
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
			<div class="footer__bottominner">
				<div class="footer__sns">
					<a href="https://www.instagram.com/lbr0018/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri() ?>/images/insta.svg" alt="instagram"></a>
					<a href="https://www.tiktok.com/@lbr0018?is_from_webapp=1&sender_device=pc" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri() ?>/images/tiktok.svg" alt="tiktok"></a>
					<a href="https://x.com/lbr0018" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri() ?>/images/x.svg" alt="x"></a>
				</div>
				<p class="footer__copyright"><small lang="en">&copy;Copyright LBR Co.,Ltd All right reserved</small></p>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>