<?php
/**
 * The template part for displaying a message that posts cannot be found
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<h2 class="page-title"><?php _e( 'Nothing Found', 'website4829605' ); ?></h2>
	</header><!-- .page-header -->
            </br>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'website4829605' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
