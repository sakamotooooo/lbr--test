<?php
	/* Template Name:404ページ */
?>
<?php get_header(); ?>

<main>
	<?php get_template_part('template/breadcrumb');?>
	<main>
		<section class="errorpage">
			<div class="errorpage__inner inner">
				<h2 class="errorpage__message">
					誠に申し訳ございませんが、<br>
					お探しのページは一時的にアクセスができない状況にあるか、<br>
					移動もしくは削除された可能性があります。<br>
				</h2>
				<div class="btn btn--subpage">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOPページに戻る</a>
				</div>
			</div>
		</section>
	</main>

	<?php get_template_part('template/contact-footer');?>

	<?php get_footer() ;?>