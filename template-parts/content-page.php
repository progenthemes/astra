<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

?>

<?php

add_action( 'astra_entry_content_page', 'astra_entry_content_page_template', 10 );
add_action( 'astra_entry_after', 'astra_page_comments' );
?>

<?php astra_entry_before(); ?>

<article <?php astra_attr( 'article', 'page' ); ?> <?php post_class(); ?>>

	<?php astra_entry_top(); ?>

	<?php astra_entry_content_page(); ?>

	<?php astra_entry_bottom(); ?>

</article><!-- #post-## -->

<?php astra_entry_after(); ?>