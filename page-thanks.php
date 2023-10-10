<?php
	/* Template Name:thanksページ */
get_header() ;

?>
<main>
	<section class="mainview">
		<div class="mainview__title">
			<span>contact</span>
			<h1>お問い合わせ完了</h1>
		</div>
		<div class="mainview__sp"><img src="<?php echo get_template_directory_uri() ?>/images/mv-contact-sp.jpg"
				alt="contacttop"></div>
		<div class="mainview__pc"><img src="<?php echo get_template_directory_uri() ?>/images/mv-contact-pc.jpg"
				alt="contacttop"></div>
	</section>
	<?php get_template_part('template/breadcrumb');?>

	<section class="thanks">
		<div class="thanks__inner inner">
			<h2 class="thanks__title">この度はお問い合わせをいただき<br class="u-mobile">誠にありがとうございます。</h2>
			<p class="thanks__text">担当者より改めてご連絡させていただきますので、<br>お待ちいただきますようよろしくお願いいたします。</p>
			<div class="thanks__top">
				<a href="<?php echo home_url(''); ?>">トップページに戻る</a>
			</div>
		</div>
	</section>
</main>
<?php get_footer() ;?>