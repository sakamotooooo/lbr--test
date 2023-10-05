<title>
	<?php global $page, $paged;
	if (is_front_page()) : //トップページ 
	?>
		株式会社エルビーアール
	<?php
	elseif (is_page('service')) :
		wp_title('');
	elseif (is_page('company')) :
		wp_title('');
	elseif (is_page('recruit')) :
		wp_title('');
	elseif (is_page('lp')) :
		wp_title('');
	elseif (is_page('contact')) :
		wp_title('');
	elseif (is_post_type_archive('〇〇')) : ?>
		カスタム投稿のタイトル
	<?php elseif (is_home('')) :
		wp_title('');
	?>
	<?php elseif (is_single('')) : ?>
		<?php wp_title(''); ?>

	<?php
	elseif (is_404()) : //404ページ
		echo '404';
	endif;
	?>
</title>