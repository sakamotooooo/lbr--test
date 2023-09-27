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
    <section class="news">
      <div class="news__inner">
        <div class="news__contents">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post();?>
          <div class="news__content news-item">
            <div class="news-item__info">
              <time class="news-item__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
              <span class="news-item__category"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->name; } ?></span>
            </div>
            <p class="news-item__block news-item__block--yellow">
              <a href="<?php the_permalink()?>" class="news-item__text"><?php the_title()?></a>
            </p>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </section>
    <!-- <div class="news__pagenavi">
    <?php wp_pagenavi() ?>
    </div> -->
</main>
<?php get_footer(); ?>