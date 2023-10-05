<?php get_header(); ?>

<main>
  <section class="mainview">
    <div class="mainview__title">
      <span>news</span>
      <h1>お知らせ</h1>
    </div>
    <div class="mainview__sp"><img loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/mv-news-sp.jpg" alt="newstop"></div>
    <div class="mainview__pc"><img loading="lazy" src="<?php echo get_template_directory_uri() ?>/images/mv-news-pc.jpg" alt="newstop"></div>
  </section>
  <?php get_template_part('template/breadcrumb'); ?>
  <?php
  $args = [
    'post_type' => 'post',
    'posts_per_page' => 16, // 表示件数
  ];
  $the_query = new WP_Query($args);
  ?>
  <section class="news inner">
    <div class="news__contents">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="news__content news-item">
            <time class="news-item__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
            <p class="news-item__title">
              <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
            </p>
          </div>
      <?php endwhile;
      endif; ?>
    </div>
  </section>
  <div class="news__pagenavi">
    <?php wp_pagenavi() ?>
  </div>
  <a class="pagetop" href="#">
    <div class="pagetop__arrow"></div>
  </a>
</main>
<?php get_template_part('template/contact-footer'); ?>
<?php get_footer(); ?>