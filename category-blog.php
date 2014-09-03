<?php
/*Template Name: Blog */
get_header(); ?>
	<div class="units-row">
		<div class="unit-100 testhead content"> Header Blog</div>
	</div>

<div class="units-container">
	<div class="units-row">
		<div class="unit-75 testblog">
			<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p><?php the_content(); ?></p>
			<?php endwhile; ?>
			<?php else : ?>
		<?php endif; ?>
		</div>
		<div class="unit-20 testblog unit-push-right"><?php get_sidebar(); ?></div>
	</div>
</div>
<?php get_footer(); ?>
