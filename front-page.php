<?php get_header(); ?>
<?php
  $home = esc_url( home_url( '/' ) );
  $company = esc_url( home_url( '/company/' ) );
  $business = esc_url( home_url( '/business/' ) );
  $training = esc_url( home_url( '/training/' ) );
  $blog = esc_url( home_url( '/blog/' ) );
  $contact = esc_url( home_url( '/contact/' ) );
?>
  <main>


<?php get_footer(); ?>