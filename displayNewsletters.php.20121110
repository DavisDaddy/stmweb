<?php
/*
Template Name: displayNewsletters
*/
?>

<?php

  get_header();

  /******
  echo "<h1>Some Recent Newsletters:</h1>";
  echo "<br>";
  echo "<br>";
  ******/

  echo "<div id='newsletter'>";

  query_posts('cat=6'); //  6 <--> newsletter
  while (have_posts()) {
    the_post();
    the_content();
  }

  echo "</div>";  // newsletter

  wp_reset_query();

  echo "<div id='mhsidebar'>";
    get_sidebar();
  echo "</div>";    /* end mhsidebar */


  echo "<div id='footer'>";
  get_footer();
  echo "</div>";    /* end footer */

?>

