<?php
/*Template Name: Blog Posts*/
get_header(); ?>

<div class="units-container">
	<div class="units-row">
		<div class="unit-100">
			<?php 
			// the query
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array(
				'posts_per_page' => 8,
				'paged' => $paged,
				'post_type' => $post);

			$the_query = new WP_Query( $args ); ?>

			<?php if ( $the_query->have_posts() ) : ?>

			  <!-- pagination here -->

			  <!-- the loop -->
			  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			    <h6><?php the_time('F j, Y'); ?></h6>
			    <p><?php the_excerpt(); ?></p>
			    <hr/>
			  <?php endwhile; ?>
			  <!-- end of the loop -->

			  <!-- pagination here -->
<nav>
    <ul>
        <li><?php previous_posts_link( '&laquo; PREV', $the_query->max_num_pages) ?></li> 
        <li><?php next_posts_link( 'NEXT &raquo;', $the_query->max_num_pages) ?></li>
    </ul>
</nav>
 

			  <?php wp_reset_postdata(); ?>
		
			<?php else:  ?>
			  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
