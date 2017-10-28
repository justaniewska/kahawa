<?php
/**
 * The template for displaying full width pages other than store pages.
 *
 * Template Name: Kahawa Page
 *
 * kahawa child theme for storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();
            the_content();

				/*do_action( 'storefront_page_before' );

				get_template_part( 'content', 'page' );*/

				/**
				 * Functions hooked in to storefront_page_after action
				 *
				 * @hooked storefront_display_comments - 10
				 */
				/*do_action( 'storefront_page_after' );
*/
			endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
