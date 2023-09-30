<?php
	/* Template Name:lpページ */
?>
<?php get_header(); ?>

<main>
	<!-- 共通パーツ（LP） -->
	<!-- title -->
	<!-- <h2 class="lp-title">エルビーアールのサービス</h2> -->
	<!-- subTitle(black) -->
	<!-- <h3 class="lp-subTitle lp-subTitle--black">マンション</h3> -->
	<!-- subTitle(blue) -->
	<!-- <h3 class="lp-subTitle lp-subTitle--blue">技術力の高い特殊清掃</h3> -->
	<!-- text -->
	<!-- <p class="lp-text">人と地球にやさしい強アルカリ電解水をメインに使用しています。清掃業界の中でもいち早く導入をし、エコクリーニングをこころがけています。</p> -->
	<!-- 詳しく見るボタン -->
	<!-- <div class="lp-btn__wrap">
				<a href="" class="lp-btn">詳しく見る</a>
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
	<!-- お悩み解決 -->
	<section class="solution">
		<div class="solution__inner">
			<div class="solution__heading">
				<h2 class="solution__title u-desktop">こんなお困りごとありませんか？</h2>
			</div>
			<div class="solution__contents">
				<p class="solution__content">
					清掃が不十分で、<br>
					<span class="indent">改善法が分からない...</span>
				</p>
				<p class="solution__content">
					ビル・マンションに合う<br>
					<span class="indent">清掃サービスが不明...</span>
				</p>
				<p class="solution__content">
					清掃スタッフ管理が手間で、<br>
					<span class="indent">時間の有効利用法が分からない...</span>
				</p>
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
				<div class="triangle"></div>
				<p class="solution__text">
					清掃のプロフェッショナル集団の<br>
					<span>エルビーアール</span>が<br class="u-mobile">
					お悩み解決します
				</p>
			</div>
		</div>
	</section>
	<!-- スライド -->
	<div class="swiper lp-swiper">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<img src="<?php echo get_template_directory_uri() ?>/images/lp-slide01.jpg" alt="">
			</div>
			<div class="swiper-slide">
				<img src="<?php echo get_template_directory_uri() ?>/images/lp-slide02.jpg" alt="">
			</div>
			<div class="swiper-slide">
				<img src="<?php echo get_template_directory_uri() ?>/images/lp-slide03.jpg" alt="">
			</div>
			<div class="swiper-slide">
				<img src="<?php echo get_template_directory_uri() ?>/images/lp-slide04.jpg" alt="">
			</div>
			<div class="swiper-slide">
				<img src="<?php echo get_template_directory_uri() ?>/images/lp-slide05.jpg" alt="">
			</div>
			<div class="swiper-slide">
				<img src="<?php echo get_template_directory_uri() ?>/images/lp-slide06.jpg" alt="">
			</div>
			<div class="swiper-slide">
				<img src="<?php echo get_template_directory_uri() ?>/images/lp-slide07.jpg" alt="">
			</div>
			<div class="swiper-slide">
				<img src="<?php echo get_template_directory_uri() ?>/images/lp-slide08.jpg" alt="">
			</div>
		</div>
	</div>
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
	<!-- サービス -->
	<section class="lp-service">
		<div class="lp-service__inner">
			<h2 class="lp-title">エルビーアールのサービス</h2>
			<div class="lp-service__items">
				<div class="lp-service__item">
					<picture class="lp-service__img">
						<source media="(min-width:767px)"
							srcset="<?php echo get_template_directory_uri() ?>/images/lp-service-pc01.jpg" />
						<img width="390" height="250" loading="lazy"
							src="<?php echo get_template_directory_uri() ?>/images/lp-service01.jpg" alt="マンション">
					</picture>
					<div class="lp-service__content">
						<h3 class="lp-subTitle lp-subTitle--black">マンション</h3>
						<p class="lp-text lp-service__text">
							日常清掃 / カーペット洗浄 / 業務用エアコン洗浄 / 床洗浄ワックス作業 / 石材洗浄 /<br>
							シャンデリアメンテナンス / ガラス清掃
						</p>
						<div class="lp-btn__wrap">
							<a href="" class="lp-btn">詳しく見る</a>
						</div>
					</div>
				</div>
				<div class="lp-service__item">
					<picture class="lp-service__img">
						<source media="(min-width:767px)"
							srcset="<?php echo get_template_directory_uri() ?>/images/lp-service-pc02.jpg" />
						<img width="390" height="250" loading="lazy"
							src="<?php echo get_template_directory_uri() ?>/images/lp-service02.jpg" alt="ビル">
					</picture>
					<div class="lp-service__content">
						<h3 class="lp-subTitle lp-subTitle--black">ビル</h3>
						<p class="lp-text lp-service__text">
							日常清掃 / カーペット洗浄 / 業務用エアコン洗浄 / 床洗浄ワックス作業 / 石材洗浄 /
							シャンデリアメンテナンス / 大理石などの落書き / いす清掃 / ガラス清掃
						</p>
						<div class="lp-btn__wrap">
							<a href="" class="lp-btn">詳しく見る</a>
						</div>
					</div>
				</div>
				<div class="lp-service__item">
					<picture class="lp-service__img">
						<source media="(min-width:767px)"
							srcset="<?php echo get_template_directory_uri() ?>/images/lp-service-pc03.jpg" />
						<img width="390" height="250" loading="lazy"
							src="<?php echo get_template_directory_uri() ?>/images/lp-service03.jpg" alt="住宅">
					</picture>
					<div class="lp-service__content">
						<h3 class="lp-subTitle lp-subTitle--black">住宅</h3>
						<p class="lp-text lp-service__text">
							日常清掃 / カーペット洗浄 / エアコン洗浄 / 床洗浄ワックス作業 / 石材洗浄 /
							外壁高圧洗浄 / 外階段高圧洗浄 / ガラス清掃
						</p>
						<div class="lp-btn__wrap">
							<a href="" class="lp-btn">詳しく見る</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_template_part('template/contact-footer');?>

<?php get_footer() ;?>