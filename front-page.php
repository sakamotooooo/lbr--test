<?php get_header(); ?>
<main>
  <section class="top-fv">
    <div class="top-fv__titles">
      <h2 class="top-fv__title">
        <img src="<?php echo get_template_directory_uri() ?>/images/fv-title.png" alt="">
      </h2>
      <span class="top-fv__subtitle">
        <img src="<?php echo get_template_directory_uri() ?>/images/fv-subtitle.png" alt="">
      </span>
    </div>
    <div class="top-fv__img">
      <img src="<?php echo get_template_directory_uri() ?>/images/fv01.jpg" alt="">
    </div>
  </section>
  <div class="top-fv__banner inner">
    <a href="">
      <img src="<?php echo get_template_directory_uri() ?>/images/banner.jpg" alt="">
    </a>
  </div>
  <section class="top-feature">
    <div class="inner">
      <span class="top-feature__englishtitle">feature</span>
        <div class="section-heading">
          <span class="section-heading__subtitle section-heading__subtitle--blue">feature</span>
          <h2 class="section-heading__title section-heading__title--blue">エルビーアールのこだわり</h2>
        </div>
        <p class="service-feature__summary top-service__summary">当社は、技術力を持つ特殊清掃のプロフェッショナルです。<br>
          また、環境に対する強い配慮を持ち、エコクリーニングに取り組んでいます。<br>
          清掃分野においては確かな専門知識を有し、お客様の要望に合わせたサービスを提供しています。
        </p>
        <div class="top-feature__lists">
          <div class="top-feature__wrap">
            <img src="<?php echo get_template_directory_uri() ?>/images/service-feature01.jpg" alt="">
            <p>技術力の高い特殊清掃</p>
          </div>
          <div class="top-feature__wrap">
            <img src="<?php echo get_template_directory_uri() ?>/images/service-feature02.jpg" alt="">
            <p>技術力の高い特殊清掃</p>
          </div>
          <div class="top-feature__wrap">
            <img src="<?php echo get_template_directory_uri() ?>/images/service-feature03.jpg" alt="">
            <p>技術力の高い特殊清掃</p>
          </div>
        </div>
        <div class="top-feature__button button">
          <a href="<?php echo esc_url(home_url('/service/')); ?>">詳しく見る</a>
        </div>
      </div>
  </section>
  <section class="top-service">
    <span class="top-service__englishtitle">service</span>
		<div class="section-heading">
			<span class="section-heading__subtitle section-heading__subtitle--blue">service</span>
			<h2 class="section-heading__title section-heading__title--blue">サービス内容</h2>
		</div>
    <p class="service-feature__summary top-service__summary">当社は、多岐にわたる建物タイプに対応し、オフィス、マンション、病院、住宅、商業施設など、<br>
      建物の種類やお客様の要望に合わせた高品質なクリーニングサービスを提供しています。<br>
      これまで蓄積した幅広い知識と経験に基づき、お客様のニーズに細かく対応し、<br>
      建物の清潔さと快適さを確保しています。
    </p>
		<div class="service-feature__wraps">
			<div class="service-feature__wrap service-feature__01">
				<div class="service-feature__texts">
					<span class="top-service__subenglish top-service__subenglish--left">apartment</span>
					<h3 class="service-feature__heading top-service__heading top-service__heading--01">マンション</h3>
					<p class="service-feature__text">大切な人と共に過ごす空間を、快適で心地よい場所に変えるお手伝いをさせていただきます。私たちの専門的な清掃で空間の美化に取り組みます。</p>
				</div>
				<div class="service-feature__img">
					<img src="<?php echo get_template_directory_uri() ?>/images/service-feature01.jpg" alt="">
				</div>
			</div>
			<div class="service-feature__wrap service-feature__02">
				<div class="service-feature__texts service-feature__texts--02">
					<span class="top-service__subenglish top-service__subenglish--right">buiding</span>
					<h3 class="service-feature__heading service-feature__heading--white top-service__heading top-service__heading--02">ビル</h3>
					<p class="service-feature__text">毎日出社していただく皆様が気持ちよくオフィスにお越しいただけるよう、プロの視点で徹底的な清掃を実施しております。清潔な環境は労働環境の向上に繋がり、生産性や快適さを高めます。私たちはオフィスの清潔さを維持し、快適な作業環境を提供することで、皆様の業務に集中できるようお手伝いさせていただきます。</p>
				</div>
				<div class="service-feature__img">
					<img src="<?php echo get_template_directory_uri() ?>/images/buiding.jpg" alt="">
				</div>
			</div>
			<div class="service-feature__wrap service-feature__01">
				<div class="service-feature__texts">
					<span class="top-service__subenglish top-service__subenglish--left">housing</span>
					<h3 class="service-feature__heading top-service__heading top-service__heading--03">住宅</h3>
					<p class="service-feature__text">プロの視点から、普段はできない清掃箇所を専門的に清掃作業を行います。普段は見過ごされるか、手が届きにくい場所でも、私たちのプロの清掃スキルと経験を活かし、最高のクオリティでお手伝いさせていただきます。清潔で快適な環境を提供し、お客様の満足度を高めるお手伝いをさせていただきます。</p>
				</div>
				<div class="service-feature__img">
					<img src="<?php echo get_template_directory_uri() ?>/images/house.jpg" alt="">
				</div>
			</div>
		</div>
    <div class="top-feature__button button">
          <a href="<?php echo esc_url(home_url('/service/')); ?>">詳しく見る</a>
    </div>
  </section>
  <div class="swiper top-swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="<?php echo get_template_directory_uri() ?>/images/slide01.jpg" alt="">
      </div>
      <div class="swiper-slide">
        <img src="<?php echo get_template_directory_uri() ?>/images/slide02.jpg" alt="">
      </div>
      <div class="swiper-slide">
        <img src="<?php echo get_template_directory_uri() ?>/images/slide03.jpg" alt="">
      </div>
      <div class="swiper-slide">
        <img src="<?php echo get_template_directory_uri() ?>/images/slide04.jpg" alt="">
      </div>
    </div>
  </div>
  <section class="top-news">
   <span class="top-service__englishtitle">news</span>
		<div class="section-heading">
			<span class="section-heading__subtitle section-heading__subtitle--blue">news</span>
			<h2 class="section-heading__title section-heading__title--blue">お知らせ</h2>
		</div>
  </section>

</main>
<?php get_template_part('template/contact-footer');?>

<?php get_footer() ;?>11