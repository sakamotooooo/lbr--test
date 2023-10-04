<?php get_header(); ?>

<main>
    <section class="mainview">
      <div class="mainview__sp"><img src="<?php echo get_template_directory_uri() ?>/images/mv-news-sp.jpg" alt="newstop"></div>
      <div class="mainview__pc"><img src="<?php echo get_template_directory_uri() ?>/images/mv-news-pc.jpg" alt="newstop"></div>
      <div class="mainview__inner">
        <div class="mainview__title  mainview__title--news-details">
            <span>news</span>
            <h1>お知らせ</h1>
        </div>
      </div>
    </section>
    <?php get_template_part('template/breadcrumb');?>
    <section class="news-details inner">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post();?>
        <div class="news-details__contents">
          <h1 class="news-details__title">
            <a href="<?php the_permalink()?>"><?php the_title()?></a>
          </h1>
          <time class="news-details__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
          <p class="news-details__content"><?php echo the_content(); ?></p>
        </div>
    <?php endwhile; endif; ?>
    <div class="news-details__button button">
        <a href="<?php echo esc_url(home_url('/news/')); ?>">一覧に戻る</a>
    </div>
    </section>
    <a class="pagetop" href="#">
		  <div class="pagetop__arrow"></div>
	  </a>
</main>

<?php get_template_part('template/contact-footer');?>

<?php get_footer(); ?>