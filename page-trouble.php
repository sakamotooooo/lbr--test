<?php
	/* Template Name:troubleページ */
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
	<!-- お問い合わせ -->
	<!-- <div class="trouble-btn__items consultation">
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
			</div> -->

	<!-- MV -->
	<section class="trouble-mv">
		<div class="trouble-mv__inner">
			<div class="trouble-mv__wrap">
				<div class="trouble-mv__img">
					<img width="106" height="83" loading="lazy"
						src="<?php echo get_template_directory_uri() ?>/images/trouble-mv01.jpg" alt="清掃の指導を受けている様子">
				</div>
				<div class="trouble-mv__img">
					<img width="106" height="83" loading="lazy"
						src="<?php echo get_template_directory_uri() ?>/images/trouble-mv02.jpg" alt="電話対応をしている様子">
				</div>
				<div class="trouble-mv__img">
					<img width="106" height="83" loading="lazy"
						src="<?php echo get_template_directory_uri() ?>/images/trouble-mv03.jpg" alt="床の掃除をしている様子">
				</div>
				<div class="trouble-mv__img">
					<img width="106" height="83" loading="lazy"
						src="<?php echo get_template_directory_uri() ?>/images/trouble-mv04.jpg" alt="エアコンの掃除をしている様子">
				</div>
				<div class="trouble-mv__img">
					<img width="106" height="83" loading="lazy"
						src="<?php echo get_template_directory_uri() ?>/images/trouble-mv05.jpg" alt="ベランダを掃除している様子">
				</div>
				<div class="trouble-mv__img">
					<img width="106" height="83" loading="lazy"
						src="<?php echo get_template_directory_uri() ?>/images/trouble-mv06.jpg" alt="女性が掃除している様子">
				</div>
				<div class="trouble-mv__img">
					<img width="106" height="83" loading="lazy"
						src="<?php echo get_template_directory_uri() ?>/images/trouble-mv07.jpg" alt="マンションの写真">
				</div>
				<div class="trouble-mv__img">
					<img width="106" height="83" loading="lazy"
						src="<?php echo get_template_directory_uri() ?>/images/trouble-mv08.jpg" alt="換気扇を掃除している様子">
				</div>
				<div class="trouble-mv__img">
					<img width="106" height="83" loading="lazy"
						src="<?php echo get_template_directory_uri() ?>/images/trouble-mv09.jpg" alt="水で流している様子">
				</div>
			</div>
			<div class="trouble-mv__content">
				<h2 class="trouble-mv__title">清掃のことなら<br>エルビーアールに<br class="u-u-mobile">お任せ下さい！</h2>
				<p class="trouble-mv__text u-desktop">当社は、技術力を持つ特殊清掃のプロフェッショナルです。<br>
					清掃分野においては確かな専門知識を有し、お客様の要望に合わせたサービスを提供しています。</p>
			</div>
		</div>
	</section>
	</div>
	</section>

</main>
<?php get_template_part('template/contact-footer');?>

<?php get_footer() ;?>