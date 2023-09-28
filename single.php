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
    <section class="news-details inner">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post();?>
        <div class="news-details__contents">
          <h1 class="news-details__title">
            <a href="<?php the_permalink()?>"><?php the_title()?></a>
          </h1>
          <time class="news-details__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
          <p class="blog-content"><?php echo the_content(); ?></p>
        </div>
    <?php endwhile; endif; ?>
    </section>
    <div class="news-details__pagenavi">
    <?php wp_pagenavi() ?>
    </div>
</main>
<?php get_footer(); ?>