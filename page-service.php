<?php
/* Template Name:serviceページ */
?>
<?php get_header(); ?>
<main>
	<section class="mainview">
		<div class="mainview__title">
			<span>service</span>
			<h1>サービス</h1>
		</div>
		<div class="mainview__sp"><img loading="lazy"
				src="<?php echo get_template_directory_uri() ?>/images/mv-service-sp.jpg" alt="servicetop"></div>
		<div class="mainview__pc"><img loading="lazy"
				src="<?php echo get_template_directory_uri() ?>/images/mv-service-pc.jpg" alt="servicetop"></div>
	</section>
	<?php get_template_part('template/breadcrumb'); ?>
	<section class="service">
		<div class="service__inner">
			<div class="section-heading">
				<span class="section-heading__subtitle section-heading__subtitle--blue">feature</span>
				<h2 class="section-heading__title section-heading__title--black">エルビーアールのこだわり</h2>
			</div>
			<div class="top-service__contents service__contents">
				<div class="service__content service__content--right service__content--right01">
					<span class="service-feature__number u-mobile">01</span>
					<div class="service__text service__text--sub01">
						<h3 class="service-feature__heading">技術力の高い特殊清掃</h3>
						<p class="service-feature__text service-feature__text--sub01">
							例えば、商業施設やホテルなどに設置されているシャンデリアの清掃・大理石の研磨・ソファーのシミ汚れなど。他社にはない確かな実績と技術力があります！その他の対応に関してもご相談頂き対応できる事に関しては対応致します。
						</p>
						<div class="service__subenglish service__subenglish--max u-desktop">
							<span class="service__subenglish--right u-desktop">01</span>
						</div>
					</div>
					<div class="service__img">
						<img loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/service-feature01.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="top-service__contents top-service__contents--02">
				<div class="service__content service__content--left service__content--center">
					<span class="service-feature__number service-feature__number--blue u-mobile">02</span>
					<div class="service__text service__text--white service__text--center">
						<h3 class="service-feature__heading service-feature__heading--white">エコクリーニングへの<br>こだわり</h3>
						<p class="service-feature__text">人と地球にやさしい強アルカリ電解水をメインに使用しています。清掃業界の中でもいち早く導入をし、エコクリーニングをこころがけています。</p>
						<div class="service__subenglish service__subenglish--maxright u-desktop">
							<span class="service__subenglish--left u-desktop">02</span>
						</div>
					</div>
					<div class="service__img">
						<img loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/service-feature02.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="top-service__contents">
				<div class="service__content service__content--right">
					<span class="service-feature__number u-mobile">03</span>
					<div class="service__text service__text--sub03">
						<h3 class="service-feature__heading">清掃のスペシャリスト</h3>
						<p class="service-feature__text">
							独自の研修・教育を受けた若いスタッフ・熟練スタッフが丁寧な作業を行っております。老若男女問わず、全てのスタッフが楽しく仕事ができる環境をご用意。最大限の力を集結させ、お客様への満足と安心に繋がるようにサービスをご提供しております。
						</p>
						<div class="service__subenglish service__subenglish--max u-desktop">
							<span class="service__subenglish--right u-desktop">03</span>
						</div>
					</div>
					<div class="service__img">
						<img loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/service-feature03.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="service-contents" id="service-contents">
		<div class="inner">
			<div class="section-heading">
				<span class="section-heading__subtitle section-heading__subtitle--blue">service</span>
				<h2 class="section-heading__title section-heading__title--black">サービス内容</h2>
			</div>
			<p class="service-contents__summary">
				当社は、多岐にわたる建物タイプに対応し、オフィス、マンション、病院、住宅、商業施設など、<br class="u-desktop">
				建物の種類やお客様の要望に合わせた高品質なクリーニングサービスを提供しています。<br class="u-desktop">
				これまで蓄積した幅広い知識と経験に基づき、お客様のニーズに細かく対応し、<br class="u-desktop">
				建物の清潔さと快適さを確保しています。
			</p>
			<div class="service-contents__buttons">
				<div class="button button--bottomarrow">
					<a href="#apartment">マンション</a>
				</div>
				<div class="button button--bottomarrow">
					<a href="#buiding">ビル</a>
				</div>
				<div class="button button--bottomarrow">
					<a href="#housing">住宅</a>
				</div>
			</div>
			<div class="service-contents__lists">
				<div class="service-contents__list" id="apartment">
					<div class="section-heading">
						<span class="section-heading__subtitle section-heading__subtitle--blue">apartment</span>
						<h3 class="section-heading__title section-heading__title--black service-contents__title">マンション</h3>
					</div>
					<p class="service-contents__detail01">大切な人々と共に過ごす空間を、快適で心地よい場所に変えるお手伝いをさせていただきます。私たちの専門的な清掃で空間の美化に取り組みます。</p>
					<p class="service-contents__detailtop">清掃サービス一覧</p>
					<p class="service-contents__detail02">日常清掃 / カーペット洗浄 / 業務用エアコン洗浄 / 床洗浄ワックス作業 / 石材洗浄 /<br class="u-desktop">
						シャンデリアメンテナンス / ガラス清掃
					</p>
					<div class="service-contents__images">
						<div class="service-contents__image service-contents__image--01">
							<img loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/apartment01.jpg" alt="">
						</div>
						<div class="service-contents__image">
							<img loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/apartment02.jpg" alt="">
						</div>
						<div class="service-contents__image">
							<img loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/apartment03.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="service-contents__list" id="buiding">
					<div class="section-heading">
						<span class="section-heading__subtitle section-heading__subtitle--blue">building</span>
						<h3 class="section-heading__title section-heading__title--black service-contents__title">ビル</h3>
					</div>
					<p class="service-contents__detail01">毎日出社していただく皆様が気持ちよくオフィスにお越しいただけるよう、<br class="u-desktop">
						プロの視点で徹底的な清掃を実施しております。<br class="u-desktop">
						清潔な環境は労働環境の向上に繋がり、生産性や快適さを高めます。<br class="u-desktop">
						私たちはオフィスの清潔さを維持し、快適な作業環境を提供することで、<br class="u-desktop">
						皆様の業務に集中できるようお手伝いさせていただきます。
					</p>
					<p class="service-contents__detailtop">清掃サービス一覧</p>
					<p class="service-contents__detail02">日常清掃 / カーペット洗浄 / 業務用エアコン洗浄 / 床洗浄ワックス作業 / 石材洗浄 /<br class="u-desktop">
						シャンデリアメンテナンス / 大理石などの落書き / いす清掃 / ガラス清掃
					</p>
					<div class="service-contents__images">
						<div class="service-contents__image service-contents__image--01">
							<img loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/buiding.jpg" alt="">
						</div>
						<div class="service-contents__image">
							<img loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/service-feature01.jpg" alt="">
						</div>
						<div class="service-contents__image">
							<img loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/service-feature04.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="service-contents__list" id="housing">
					<div class="section-heading">
						<span class="section-heading__subtitle section-heading__subtitle--blue">housing</span>
						<h3 class="section-heading__title section-heading__title--black service-contents__title">住宅</h3>
					</div>
					<p class="service-contents__detail01">プロの視点から、普段はできない清掃箇所を専門的に清掃作業を行います。<br class="u-desktop">
						普段は見過ごされるか、手が届きにくい場所でも、<br class="u-desktop">
						私たちのプロの清掃スキルと経験を活かし、<br class="u-desktop">
						最高のクオリティでお手伝いさせていただきます。<br class="u-desktop">
						清潔で快適な環境を提供し、お客様の満足度を高めるお手伝いをさせていただきます。
					</p>
					<p class="service-contents__detailtop">清掃サービス一覧</p>
					<p class="service-contents__detail02">日常清掃 / カーペット洗浄 / エアコン洗浄 / 床洗浄ワックス作業 / 石材洗浄 /<br class="u-desktop">
						外壁高圧洗浄 / 外階段高圧洗浄 / ガラス清掃
					</p>
					<div class="service-contents__images">
						<div class="service-contents__image service-contents__image--01">
							<img loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/house.jpg" alt="">
						</div>
						<div class="service-contents__image">
							<img loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/service-feature05.jpg" alt="">
						</div>
						<div class="service-contents__image">
							<img loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/service-feature06.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<a class="pagetop" href="#">
		<div class="pagetop__arrow"></div>
	</a>
</main>
<?php get_template_part('template/contact-footer'); ?>

<?php get_footer(); ?>