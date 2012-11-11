<?php
/*
Template Name: displayNewsletters
*/
?>

<?php

  get_header();

  echo "<div id='newsletter'>";

  the_title('<h1>', '</h1>');
  echo "<br>";

  echo "(Contact us if you are not currently receiving our newsletter via email.)";
  echo "<br>";
  echo "<br>";

  $print_image = TRUE;

  query_posts( array ( 'category_name' => 'newsletter', 'posts_per_page' => -1 ) );
  while (have_posts()) {
    the_post();
    the_title('<h2>', '</h2>');
    echo "<br>";
    the_content();
    if ($print_image) {
      echo "<img src='/wp-content/uploads/2012/11/iStock_000021959722_ExtraSmall.jpg'
                 alt='Quill and Ink'></img>";
      $print_image = FALSE;
    }

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

