<?php get_header(); ?>

<main>
    <section class="mainview">
      <div class="mainview__title">
        <span>news</span>
        <h1>お知らせ</h1>
      </div>
      <div class="mainview__sp"><img src="<?php echo get_template_directory_uri() ?>/images/mv-news-sp.jpg" alt="newstop"></div>
      <div class="mainview__pc"><img src="<?php echo get_template_directory_uri() ?>/images/mv-news-pc.jpg" alt="newstop"></div>
    </section>
    <section class="news inner">
      <div class="news__contents">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post();?>
        <div class="news__content news-item">
          <time class="news-item__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
          <p class="news-item__title">
            <a href="<?php the_permalink()?>"><?php the_title()?></a>
          </p>
        </div>
        <?php endwhile; endif; ?>
      </div>
    </section>
    <div class="news__pagenavi">
    <?php wp_pagenavi() ?>
    </div>
</main>
<?php get_footer(); ?>