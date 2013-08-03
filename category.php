<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package Skeleton WordPress Theme Framework
 * @subpackage skeleton
 * @author Simple Themes - www.simplethemes.com
 */

get_header();
echo '<div id="blogContainer" class="sixteen columns">';
st_before_content($columns='two_thirds');

?>
	
<h1><?php
		printf( __( 'Category Archives: %s', 'skeleton' ), single_cat_title( '', false ) );
	?></h1>
	<?php
		$category_description = category_description();
		if ( ! empty( $category_description ) )
			echo '' . $category_description . '';
  
	/* Run the loop for the category page to output the posts.
	 * If you want to overload this in a child theme then include a file
	 * called loop-category.php and that will be used instead.
	 */
	get_template_part( 'loop', 'category' );
	st_after_content();
	get_sidebar();
	echo '</div>';
	get_footer();
?>
