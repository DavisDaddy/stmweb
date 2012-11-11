<?php
/*
Template Name: displayPodcasts
*/
?>

<?php

  get_header();

  echo "<div id='podcast'>";

  query_posts('cat=8'); //  8 <--> podcast
  while (have_posts()) {
    the_post();
    the_content();
  }

  echo "</div>";  // podcast

  wp_reset_query();

  echo "<div id='mhsidebar'>";
    get_sidebar();
  echo "</div>";    /* end mhsidebar */


  echo "<div id='footer'>";
  get_footer();
  echo "</div>";    /* end footer */

?>

