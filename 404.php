<?php
/**
* Skeleton WordPress Theme Framework
* Author: Simple Themes
* URL: www.simplethemes.com
 * The template for displaying 404 pages (Not Found).
 *
 * @package Skeleton WordPress Theme Framework
 * @subpackage skeleton
 * @author Simple Themes - www.simplethemes.com
 */

get_header();
echo '<div id="blogContainer" class="sixteen columns">';
st_before_content($columns='two_thirds');
?>
	<h1><?php _e( 'Not Found', 'skeleton' ); ?></h1>
	<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'skeleton' ); ?></p>
	<?php get_search_form(); ?>
	
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php
st_after_content();
get_sidebar();
echo '</div>';
get_footer();
?>
