<?php
	/* Template Name:contactページ */
?>
<?php get_header(); ?>
<main>
	<section class="mainview">
		<div class="mainview__title">
			<span>contact</span>
			<h1>お問い合わせ</h1>
		</div>
		<div class="mainview__sp"><img src="<?php echo get_template_directory_uri() ?>/images/mv-contact-sp.jpg"
				alt="contacttop"></div>
		<div class="mainview__pc"><img src="<?php echo get_template_directory_uri() ?>/images/mv-contact-pc.jpg"
				alt="contacttop"></div>
	</section>
	<?php get_template_part('template/breadcrumb');?>

	<section class="contact">
		<div class="contact__inner inner">
			<div class="contact__wrap">
				<h2 class="contact__read">弊社へのお問い合わせは、メールフォームに必須事項をご記入の上、ご送信ください。<br>
					基本的にE-mailで返信させていただきます。</h2>
				<p class="contact__text">Eメールアドレスに誤りがあると返信できないことがございますので、ご注意ください。</p>
				<span class="contact__fill-in">※の部分は必ずご記入ください</span>
			</div>
			<?php echo do_shortcode( '[mwform_formkey key="75"]' ); ?>

		</div>
		<a class="pagetop" href="#">
			<div class="pagetop__arrow"></div>
		</a>
	</section>
</main>
<?php get_footer() ;?>