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

	<!-- sectionのタイトル(blue)英語は小文字で入力してください（CSSで大文字にしてます） -->
	<!-- <div class="section-heading">
		<span class="section-heading__subtitle section-heading__subtitle--blue">feature</span>
		<h2 class="section-heading__title section-heading__title--black">エルビーアールのこだわり</h2>
	</div> -->

	<!-- sectionのタイトル(white) -->
	<!-- <div class="section-heading">
		<span class="section-heading__subtitle section-heading__subtitle--white">feature</span>
		<h2 class="section-heading__title section-heading__title--white">エルビーアールのこだわり</h2>
	</div> -->

	<!-- sectionのタイトル薄いのん英語は小文字で入力してください（CSSで大文字にしてます） -->
	<!--<div>で囲ってそのdivで位置調整してください。<span></span>は共通です。
	<div></div>はそれぞれにつけてください。 -->
	<!-- <div class="top-contact__thin">⬅️位置調整のdiv(section-headingにposition:relativeつけてます)
		<span class="section-heading__thin section-heading__thin--blue">
			contact
		</span>
	</div> -->



	<!-- サービス -->
	<section class="service">
		<div class="service__inner inner">
			<span class="top-service__englishtitle">service</span>
			<div class="section-heading">
				<span class="section-heading__subtitle section-heading__subtitle--blue">service</span>
				<h2 class="section-heading__title section-heading__title--black">サービス内容</h2>
			</div>
			<p class="service-feature__summary top-service__summary">当社は、多岐にわたる建物タイプに対応し、オフィス、マンション、病院、住宅、商業施設など、<br
					class="u-desktop">
				建物の種類やお客様の要望に合わせた高品質なクリーニングサービスを提供しています。<br class="u-desktop">
				これまで蓄積した幅広い知識と経験に基づき、お客様のニーズに細かく対応し、<br class="u-desktop">
				建物の清潔さと快適さを確保しています。
			</p>
			<div class="top-service__contents">
				<div class="service__content">
					<div class="service-text">
						<h3 class="service-feature__heading top-service__heading top-service__heading--01">マンション</h3>
						<p class="service-feature__text">大切な人と共に過ごす空間を、快適で心地よい場所に変えるお手伝いをさせていただきます。私たちの専門的な清掃で空間の美化に取り組みます。</p>
					</div>
					<div class="service__img">
						<img width="620" height="400" src="<?php echo get_template_directory_uri() ?>/images/lp-service-pc01.jpg"
							alt="">
					</div>
					<div class="service__bg u-desktop">
						<span class="service__subenglish">apartment</span>
					</div>
				</div>
			</div>
		</div>
	</section>



</main>
<?php get_footer() ;?>