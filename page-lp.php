<?php
	/* Template Name:lpページ */
?>
<?php get_header(); ?>

<main>
	<!-- 共通パーツ（LP） -->
	<!-- title -->
	<!-- <h2 class="lp-title lp-title--blue">エルビーアールのサービス</h2> -->
	<!-- <h2 class="lp-title lp-title--white">エルビーアールのサービス</h2> -->
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
			<h2 class="lp-title lp-title--blue">エルビーアールのサービス</h2>
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
							<a href="<?php echo home_url('service#apartment'); ?>" class="lp-btn">詳しく見る</a>
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
							<a href="<?php echo home_url('service#buiding'); ?>" class="lp-btn">詳しく見る</a>
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
							<a href="<?php echo home_url('service#housing'); ?>" class="lp-btn">詳しく見る</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- こだわり -->
	<section class="commitment">
		<div class="commitment__inner inner">
			<h2 class="lp-title lp-title--blue">エルビーアールのこだわり</h2>
			<div class="commitment__items">
				<div class="commitment__item">
					<div class="commitment__img">
						<img width="360" height="244" loading="lazy"
							src="<?php echo get_template_directory_uri() ?>/images/commitment-img01.jpg" alt="技術力の高い特殊清掃">
					</div>
					<div class="commitment__content">
						<h3 class="lp-subTitle lp-subTitle--blue">技術力の高い特殊清掃</h3>
						<p class="lp-text commitment__text">
							例えば、商業施設やホテルなどに設置されているシャンデリアの清掃・大理石の研磨・ソファーのシミ汚れなど。他社にはない確かな実績と技術力があります！その他の対応に関してもご相談頂き対応できる事に関しては対応致します。
						</p>
					</div>
				</div>
				<div class="commitment__item">
					<div class="commitment__img">
						<img width="360" height="244" loading="lazy"
							src="<?php echo get_template_directory_uri() ?>/images/commitment-img02.jpg" alt="エコクリーニング">
					</div>
					<div class="commitment__content">
						<h3 class="lp-subTitle lp-subTitle--blue">エコクリーニングへのこだわり</h3>
						<p class="lp-text commitment__text">
							人と地球にやさしい強アルカリ電解水をメインに使用しています。清掃業界の中でもいち早く導入をし、エコクリーニングをこころがけています。
						</p>
					</div>
				</div>
				<div class="commitment__item">
					<div class="commitment__img">
						<img width="360" height="244" loading="lazy"
							src="<?php echo get_template_directory_uri() ?>/images/commitment-img03.jpg" alt="清掃のスペシャリスト">
					</div>
					<div class="commitment__content">
						<h3 class="lp-subTitle lp-subTitle--blue">清掃のスペシャリスト</h3>
						<p class="lp-text commitment__text">
							独自の研修・教育を受けた若いスタッフ・熟練スタッフが丁寧な作業を行っております。老若男女問わず、全てのスタッフが楽しく仕事ができる環境をご用意。。最大限の力を集結させ、お客様への満足と安心に繋がるようにサービスをご提供しております。
						</p>
					</div>
				</div>
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
	<!-- 実績 -->
	<section class="achievements">
		<div class="achievements__inner inner">
			<h2 class="lp-title lp-title--blue">エルビーアールの実績</h2>
			<div class="achievements__items">
				<div class="achievements__item">
					<div class="achievements__img">
						<img width="360" height="244" loading="lazy"
							src="<?php echo get_template_directory_uri() ?>/images/achievements-img01.jpg" alt="オフィスビル">
						<span class="achievements__tag">通常清掃</span>
					</div>
					<div class="achievements__content">
						<h3 class="lp-subTitle lp-subTitle--blue">東京都中央区 オフィスビル A</h3>
						<p class="lp-text achievements__text">
							各フロアのゴミ回収・机上ふき・掃除機がけ、フロアごとの給湯室や廊下階段などの日常の清掃作業を行いました。
						</p>
					</div>
				</div>
				<div class="achievements__item">
					<div class="achievements__img">
						<img width="360" height="244" loading="lazy"
							src="<?php echo get_template_directory_uri() ?>/images/achievements-img02.jpg" alt="高級マンション">
						<span class="achievements__tag">通常清掃</span>
					</div>
					<div class="achievements__content">
						<h3 class="lp-subTitle lp-subTitle--blue">東京都渋谷区 高級マンションA</h3>
						<p class="lp-text achievements__text">
							床など機械や道具を使用しての清掃作業がメインのご依頼。併せて高所でのガラス清掃作業も行いました。
						</p>
					</div>
				</div>
				<div class="achievements__item">
					<div class="achievements__img">
						<img width="360" height="244" loading="lazy"
							src="<?php echo get_template_directory_uri() ?>/images/achievements-img03.jpg" alt="水族館">
						<span class="achievements__tag">特殊清掃</span>
					</div>
					<div class="achievements__content">
						<h3 class="lp-subTitle lp-subTitle--blue">関東 某水族館</h3>
						<p class="lp-text achievements__text">
							高圧洗浄機でイオン水を使用したエコな清掃作業を実施しました。<br>
							その他カーペット・ソファーなどのシミ落とし。大理石にラクガキ消し。シャンデリアなどの清掃なども承っております。
						</p>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- 流れ -->
	<section class="flow">
		<div class="flow__inner inner">
			<h2 class="lp-title lp-title--blue">清掃までの流れ</h2>
			<div class="flow__items">
				<div class="flow__item">
					<div class="flow__circle">
						<p class="flow__number">STEP1</p>
						<div class="flow__img">
							<img width="100" height="100" loading="lazy"
								src="<?php echo get_template_directory_uri() ?>/images/flow01.png" alt="問い合わせ">
						</div>
					</div>
					<div class="flow__content">
						<h3 class="flow__title">問い合わせ</h3>
						<p class="flow__text">
							問い合わせフォームまたはお電話からご連絡をお願い致します。
						</p>
					</div>
				</div>
				<div class="flow__item">
					<div class="flow__circle">
						<p class="flow__number">STEP2</p>
						<div class="flow__img">
							<img width="100" height="100" loading="lazy"
								src="<?php echo get_template_directory_uri() ?>/images/flow02.png" alt="担当者からご連絡">
						</div>
					</div>
					<div class="flow__content">
						<h3 class="flow__title">担当者からご連絡</h3>
						<p class="flow__text">
							1～3営業日以内に弊社担当よりご連絡させていただきます。<br>
							※タイミングによってはご連絡が遅れてしまう場合がございますので予めご了承ください。
						</p>
					</div>
				</div>
				<div class="flow__item">
					<div class="flow__circle">
						<p class="flow__number">STEP3</p>
						<div class="flow__img">
							<img width="100" height="100" loading="lazy"
								src="<?php echo get_template_directory_uri() ?>/images/flow03.png" alt="打ち合わせ">
						</div>
					</div>
					<div class="flow__content">
						<h3 class="flow__title">打ち合わせ</h3>
						<p class="flow__text">
							今回の相談内容の詳細をお伺いさせていただきます。
						</p>
					</div>
				</div>
				<div class="flow__item">
					<div class="flow__circle">
						<p class="flow__number">STEP4</p>
						<div class="flow__img">
							<img width="100" height="100" loading="lazy"
								src="<?php echo get_template_directory_uri() ?>/images/flow04.png" alt="見積書">
						</div>
					</div>
					<div class="flow__content">
						<h3 class="flow__title">見積書</h3>
						<p class="flow__text">
							お打ち合わせにてお伺いした内容にて、見積書をお出しします。
						</p>
					</div>
				</div>
				<div class="flow__item">
					<div class="flow__circle">
						<p class="flow__number">STEP5</p>
						<div class="flow__img">
							<img width="100" height="100" loading="lazy"
								src="<?php echo get_template_directory_uri() ?>/images/flow05.png" alt="ご契約">
						</div>
					</div>
					<div class="flow__content">
						<h3 class="flow__title">ご契約</h3>
						<p class="flow__text">
							書類等を締結後、ご契約となります。
						</p>
					</div>
				</div>
				<div class="flow__item">
					<div class="flow__circle">
						<p class="flow__number">STEP6</p>
						<div class="flow__img">
							<img width="100" height="100" loading="lazy"
								src="<?php echo get_template_directory_uri() ?>/images/flow06.png" alt="作業">
						</div>
					</div>
					<div class="flow__content">
						<h3 class="flow__title">作業</h3>
						<p class="flow__text">
							当社スタッフが丁寧に作業を行います。
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- よくある質問 -->
	<section class="faq">
		<div class="faq__inner inner">
			<h2 class="lp-title lp-title--white">よくある質問</h2>
			<div class="faq__items">
				<dl class="faq__item">
					<dt class="faq__title js-accordion-title">
						<div class="faq__wrap">
							<span class="faq__q">Q</span>
							<span class="faq__question">対応エリアはどこまでですか？</span>
						</div>
					</dt>
					<dd class="faq__content">
						<div class="faq__wrap">
							<span class="faq__a">A</span>
							<span class="faq__answer">
								対応エリア→東京・神奈川・千葉・埼玉<br>
								上記以外のエリアをご希望の場合は応相談となります。
							</span>
						</div>
					</dd>
				</dl>
				<dl class="faq__item">
					<dt class="faq__title js-accordion-title">
						<div class="faq__wrap">
							<span class="faq__q">Q</span>
							<span class="faq__question">どのような作業内容が対応可能ですか？</span>
						</div>
					</dt>
					<dd class="faq__content">
						<div class="faq__wrap">
							<span class="faq__a">A</span>
							<span class="faq__answer">
								一例ですが、床清掃・ガラス清掃・空調清掃などございます。<br>
								その他にも特殊な清掃として、カーペット・ソファーのシミと落とし、大理石の落書き落としなどご要望に応じて、対応をしておりますのでまずはお気軽にご連絡ください。
							</span>
						</div>
					</dd>
				</dl>
				<dl class="faq__item">
					<dt class="faq__title js-accordion-title">
						<div class="faq__wrap">
							<span class="faq__q">Q</span>
							<span class="faq__question">見積に料金はかかりますか？</span>
						</div>
					</dt>
					<dd class="faq__content">
						<div class="faq__wrap">
							<span class="faq__a">A</span>
							<span class="faq__answer">
								完全無料で対応しております。
							</span>
						</div>
					</dd>
				</dl>
				<dl class="faq__item">
					<dt class="faq__title js-accordion-title">
						<div class="faq__wrap">
							<span class="faq__q">Q</span>
							<span class="faq__question">料金はどれくらいとなりますか？</span>
						</div>
					</dt>
					<dd class="faq__content">
						<div class="faq__wrap">
							<span class="faq__a">A</span>
							<span class="faq__answer">
								作業内容や広さによって異なりますので、お気軽にご連絡ください。
							</span>
						</div>
					</dd>
				</dl>
				<dl class="faq__item">
					<dt class="faq__title js-accordion-title">
						<div class="faq__wrap">
							<span class="faq__q">Q</span>
							<span class="faq__question">定期的な清掃をお願いしたいのですが…？</span>
						</div>
					</dt>
					<dd class="faq__content">
						<div class="faq__wrap">
							<span class="faq__a">A</span>
							<span class="faq__answer">
								当社では長年の実績と多数の定期清掃を手掛けておりますのでご安心ください。<br>
								まずはご相談いただければと思います。
							</span>
						</div>
					</dd>
				</dl>
			</div>
		</div>
	</section>
</main>
<?php get_template_part('template/contact-footer');?>

<?php get_footer() ;?>