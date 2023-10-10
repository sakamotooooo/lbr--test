<title>
	<?php global $page, $paged;
	if (is_front_page()) : //トップページ 
	?>
		株式会社エルビーアール | ビルクリーニング、マンション清掃のプロフェッショナル集団
	<?php
	elseif (is_page('service')) :
	?>
		サービス | 株式会社エルビーアール
	<?php
	elseif (is_page('company')) :
	?>
		会社概要 | 株式会社エルビーアール
	<?php
	elseif (is_page('recruit')) :
	?>
		採用情報 | 株式会社エルビーアール
	<?php
	elseif (is_page('lp')) :
	?>
		清掃に関してお困りなら株式会社エルビーアールにお任せください
	<?php	
	elseif (is_page('contact')) :
	?>
		お問い合わせ | 株式会社エルビーアール
	<?php	
	elseif (is_page('thanks')) :
	?>
		お問い合わせありがとうございました | 株式会社エルビーアール 
	<?php
	elseif (is_post_type_archive('〇〇')) : ?>
		カスタム投稿のタイトル
	<?php elseif (is_home('')) :
	?>
		お知らせ | 株式会社エルビーアール 
	<?php elseif (is_single('')) : 
		wp_title(''); 
	?>
	 | 株式会社エルビーアール 
	<?php
	elseif (is_404()) : //404ページ
		echo '404ページ';
	endif;
	?>
</title>