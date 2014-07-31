<?php
	wp_reset_postdata();
	$args = array( 'pagename' => 'terms-and-conditions' );
	$the_query = new WP_Query($args);
?>

<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
	
	<div id="terms-and-conditions">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</div>

<?php endwhile; // end of loop ?>

