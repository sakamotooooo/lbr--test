<?php get_header(); ?>
<main>
    <section class="errorpage">
        <div class="errorpage__inner">
            <div class="errorpage__message">
                <span class="errorpage__404message">404 Not Found</span>
                <span class="errorpage__text">お探しのページは<br class="sp__show">見つかりませんでした。</span>
            </div>
            <div class="btn btn--subpage">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOPへ</a>
            </div>
        </div>
    </section>
  </main>
<?php get_footer(); ?>