<?php
	/* Template Name:lpページ */
?>
<?php get_header(); ?>

<main>
	<!-- 共通パーツ（LP） -->
	<!-- title -->
	<!-- <h2 class="trouble__title">エルビーアールのサービス</h2> -->
	<!-- subTitle(black) -->
	<!-- <h3 class="trouble__subTitle trouble__subTitle--black">マンション</h3> -->
	<!-- subTitle(blue) -->
	<!-- <h3 class="trouble__subTitle trouble__subTitle--blue">技術力の高い特殊清掃</h3> -->
	<!-- text -->
	<!-- <p class="trouble__text">人と地球にやさしい強アルカリ電解水をメインに使用しています。清掃業界の中でもいち早く導入をし、エコクリーニングをこころがけています。</p> -->
	<!-- 詳しく見るボタン -->
	<!-- <div class="trouble__btn">
				<a href="">詳しく見る</a>
			</div> -->

	<!-- MV -->
	<section class="trouble-mv">
		<div class="trouble-mv__inner">
			<picture class="trouble-mv__img">
				<source media="(min-width:767px)"
					srcset="<?php echo get_template_directory_uri() ?>/images/trouble-mv-pc.png" />
				<img width="106" height="83" loading="lazy"
					src="<?php echo get_template_directory_uri() ?>/images/trouble-mv.png" alt="清掃の指導を受けている様子">
			</picture>
			<div class="trouble-mv__content">
				<h2 class="trouble-mv__title">清掃のことなら<br>エルビーアールに<br class="u-u-mobile">お任せ下さい！</h2>
				<p class="trouble-mv__text u-desktop">当社は、技術力を持つ特殊清掃のプロフェッショナルです。<br>
					清掃分野においては確かな専門知識を有し、お客様の要望に合わせたサービスを提供しています。</p>
			</div>
		</div>
	</section>
	<!-- 相談 -->
	<div class="trouble-btn">
		<p class="trouble-btn__text">
			ご相談・ご質問等ございましたら、<br>
			お気軽にお問い合わせください。
		</p>
		<div class="trouble-btn__items consultation">
			<div class="trouble-btn__item consultation__item">
				<div class="consultation__telImg">
					<img width="17" height="30" loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/phone.png"
						alt="電話アイコン">
				</div>
				<div class="consultation__telDetails">
					<p class="consultation__telNumber">03-6276-5828</p>
					<p class="consultation__telTime">平日受付:9:00～18:00</p>
				</div>
			</div>
			<div class="trouble-btn__item consultation__item">
				<a href="<?php echo $contact; ?>">
					<span>お問い合わせ</span>
				</a>
			</div>
		</div>
	</div>
	<section class="solution">
		<div class="solution__inner">
			<div class="solution__heading">
				<h2 class="solution__title u-desktop">こんなお困りごとありませんか？</h2>
			</div>
			<div class="solution__contents">
				<p class="solution__content">清掃が不十分で、<br>
					改善法が分からない...</p>
				<p class="solution__content">ビル・マンションに合う<br>
					清掃サービスが不明...</p>
				<p class="solution__content">清掃スタッフ管理が手間で、<br>
					時間の有効利用法が分からない...</p>
			</div>
			<div class="solution__items">
				<div class="solution__item">
					<img loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/man01.png" alt="男の人のイラスト">
				</div>
				<div class="solution__item">
					<img loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/man02.png" alt="男の人のイラスト">
				</div>
				<div class="solution__item">
					<img loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/woman.png" alt="女の人のイラスト">
				</div>
			</div>
			<div class="solution__wrap">
				<p class="solution__text">
					清掃のプロフェッショナル集団の<br>
					<span>エルビーアール</span>が<br class="u-mobile">
					お悩み解決します
				</p>
			</div>
		</div>
	</section>

</main>
<?php get_template_part('template/contact-footer');?>

<?php get_footer() ;?>