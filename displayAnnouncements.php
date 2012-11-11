<?php
/*
Template Name: displayAnnouncements
*/
?>

<?php

  get_header();

  echo "<div id='announcement'>";

  the_title('<h1>', '</h1>');
  echo "<br>";

  query_posts( array ( 'category_name' => 'announcements', 'posts_per_page' => -1 ) );
  while (have_posts()) {
    the_post();
    the_title('<h2>', '</h2>');
    echo "<h3>";
      the_time('F jS, Y');
    echo "</h3>";
    the_content();
  }

  echo "</div>";  // announcement

  wp_reset_query();

  echo "<div id='mhsidebar'>";
    get_sidebar();
  echo "</div>";    /* end mhsidebar */


  echo "<div id='footer'>";
  get_footer();
  echo "</div>";    /* end footer */

?>

