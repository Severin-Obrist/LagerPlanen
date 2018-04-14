<?php get_header();

/*
Template Name: Rezepte Site Template
*/

?>

<div class="container">
<?php
  $args = array( 'post_type' => 'rezept', 'posts_per_page' => 10 );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();
    get_template_part( 'content', get_post_format() );
  endwhile;

 ?>
</div>

 <?php get_footer(); ?>
