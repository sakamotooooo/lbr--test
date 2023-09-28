<?php
	/* Template Name:thanksページ */
get_header() ;

?>
<main>
	<?php get_template_part('template/breadcrumb');?>

	<section class="thanks">
		<div class="thanks__inner inner">
			<h2 class="thanks__title">この度はお問い合わせをいただき誠にありがとうございます。</h2>
			<p class="thanks__text">担当者より改めてご連絡させていただきますので、お待ちいただきますようよろしくお願いいたします。</p>
			<a href="<?php echo home_url(''); ?>" class="thanks__top">トップページに戻る</a>
		</div>
	</section>

	<!-- sectionのタイトル -->
	<!-- <div class="section-heading">
		<span class="section-heading__subtitle section-heading__subtitle--blue">feature</span>
		<h2 class="section-heading__title section-heading__title--blue">エルビーアールのこだわり</h2>
	</div>
	<div class="section-heading">
		<span class="section-heading__subtitle section-heading__subtitle--white">feature</span>
		<h2 class="section-heading__title section-heading__title--white">エルビーアールのこだわり</h2>
	</div> -->

	<!-- sectionのタイトル薄いのん -->
	<!--<div>で囲ってそのdivで位置調整してください。<span></span>は共通です。
	<div></div>はそれぞれにつけてください。 -->
	<!-- <div class="top-contact__thin">⬅️位置調整のdiv(section-headingにposition:relativeつけてます)
		<span class="section-heading__thin section-heading__thin--blue">
			contact
		</span>
	</div> -->





</main>
<?php get_footer() ;?>