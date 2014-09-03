<?php
get_header(); ?>

<div class="units-container">
	<div class="units-row">
		<div class="unit-75">
			<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
			<?php endwhile; ?>
			<?php else : ?>
		<?php endif; ?>
		</div>
		<div class="unit-20 unit-push-right"></div>
	</div>
</div>
<?php get_footer(); ?>
