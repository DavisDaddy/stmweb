<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<div id="fixed" class="widget-area">
  <ul class="xoxo">

    <li id="permanent">
      <div class="hours-title">
        <span class="block">Fall Worship Times</span class="block">
        <span class="block">(Beginning September 9, 2012)</span class="block">
      </div>
    </li>
    <li id="permanent">
      <div class="hours">
   
       <span class="block">Rite 1: 7:45 a.m. </span class="block">
       <span class="block">Contemporary: 9:00 a.m. </span class="block">
       <span class="block">Rite 2: 11:00 a.m.</span class="block">
       <span class="block">Healing Service: Tuesday 12:10 p.m.</span class="block">
     </div>
    </li>

    <li id="sidebar-link">
        <a class="sidebar"
        href="http://ec2-54-245-119-78.us-west-2.compute.amazonaws.com/contact-us/"
        title="contact us" target="_blank">Contact Us</a>

    </li>

  </ul>
</div>


		<div id="primary" class="widget-area" role="complementary">
			<ul class="xoxo">

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

			<li id="search" class="widget-container widget_search">
				<?php get_search_form(); ?>
			</li>

			<li id="archives" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Archives', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</li>

			<li id="meta" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Meta', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</li>

		<?php endif; // end primary widget area ?>
			</ul>
		</div><!-- #primary .widget-area -->

<div id="fixed" class="widget-area">
  <ul class="xoxo">
	



    <li id="permanent">
	<a href="http://www.integrityusa.org/" title="integrity usa" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/p3-integrity.png" alt="Integrity USA" target="_blank"/></a>
    </li>



    <li id="permanent">
       <?php DISPLAY_ACURAX_ICONS(); ?> 
    </li>




  </ul>
</div>

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

<?php endif; ?>

