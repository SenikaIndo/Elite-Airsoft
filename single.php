<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage skeleton
 * @since skeleton 0.1
 */

get_header();
echo '<div id="blogContainer" class="sixteen columns">';
st_before_content($columns='two_thirds');
get_template_part( 'loop', 'single' );
st_after_content();
get_sidebar();
echo '</div>';
get_footer();
?>
