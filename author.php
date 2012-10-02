<?php get_header(); ?>
<?php $curauth = ( get_query_var( 'author_name' ) ) ? get_user_by( 'slug', get_query_var('author_name') ) : get_userdata( get_query_var( 'author' ) ); ?>

		<section id="content" class="author">
			<h1><span>Posts de "<?php echo $curauth->display_name; ?>" </span>
				<?php if (!empty($curauth->twitter)): ?>
				<a rel="me" href="<?php echo $curauth->twitter; ?>" target="_blank" class="twitter-icon" >&nbsp;</a>
				<?php endif; ?>

				<?php if (!empty($curauth->facebook)): ?>
				<a rel="me" href="<?php echo $curauth->facebook; ?>" target="_blank" class="facebook-icon" >&nbsp;</a>
				<?php endif; ?>

				<?php if (!empty($curauth->jabber)): ?>
				<a rel="me" href="<?php echo $curauth->jabber; ?>" target="_blank" class="googleplus-icon" >&nbsp;</a>
				<?php endif; ?>
			</h1>
<?php
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$args=array(
		'author' => $curauth->ID,
		'orderby' => 'date',
		'order' => 'DESC',
		'posts_per_page' => 10,
		'paged' => $paged,
		'caller_get_posts' => 1
	);
	$temp = $wp_query;  // assign orginal query to temp variable for later use   
	$wp_query = null;
	$wp_query = new WP_Query( $args ); 
	if ( have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
			<article class="post" id="post-<?php the_ID(); ?>">
				<div class="entry">
					<header>
						<p class="post-meta"><time><?php the_time( 'j F Y' ); ?></time></p>
						<h2>&raquo; <?php if ( !is_single() ) { echo '<a href="'; the_permalink(); echo '" rel="bookmark">'; } ?><?php the_title(); ?><?php if ( !is_single() ) { echo '</a>'; } ?></h2>
					</header>
				</div> <!-- end .entry -->
			</article> <!-- end #post-<?php the_ID(); ?> -->

		<?php endwhile; ?>
			<nav>
				<span><?php next_posts_link( '&laquo; Posts anteriores' ); ?></span>
				<span><?php previous_posts_link( 'Posts recentes &raquo;' ); ?></span>
			</nav>
		<?php else: ?>
<?php include (TEMPLATEPATH . '/frag-noposts.php'); ?>
	<?php endif;
	$wp_query = $temp;  //reset back to original query ?>
		</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>