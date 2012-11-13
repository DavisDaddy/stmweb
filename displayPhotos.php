<?php
/*
Template Name: displayPhotos
*/
?>

<?php

  get_header();

  echo "<div id='photos'>";

  the_title('<h1>', '</h1>');
  echo "Click image to advance to next image";
  echo "<br>";

  query_posts( array ( 'category_name' => 'photos', 'posts_per_page' => -1 ) );
  while (have_posts()) {
    the_post();
    the_title('<h2>', '</h2>');
    the_content();
  }

  echo "</div>";  // photos

  wp_reset_query();

  echo "<div id='mhsidebar'>";
    get_sidebar();
  echo "</div>";    /* end mhsidebar */


  echo "<div id='footer'>";
  get_footer();
  echo "</div>";    /* end footer */

?>

