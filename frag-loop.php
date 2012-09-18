<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article class="post" id="post-<?php the_ID(); ?>">

		<?php include (TEMPLATEPATH . '/frag-social.php'); ?>
			<div class="content">
				<header>
					<p class="post-meta"><time><?php the_time('j F Y'); ?></time>, por <span class="author"><?php the_author_posts_link() ?></span></p>
					<h1><?php if ( !is_single() ) { echo '<a href="'; the_permalink(); echo '" rel="bookmark">'; } ?><?php the_title(); ?><?php if ( !is_single() ) { echo '</a>'; } ?></h1>
					<p class="categories">Categorias: <?php the_category( ', ' ) ?></p>
					<?php if ( function_exists( 'btn_horz_fblike' ) ) : ?>
					<?php btn_horz_fblike(); ?>
					<?php endif; ?>
				</header>

				<?php if ( function_exists( 'the_post_thumbnail' ) ) the_post_thumbnail( array(250,9999), array( 'class' => ' alignleft' )); ?>
				<?php the_excerpt(); ?> 
				<?php if ( !is_single() ) { echo '<a class="read-more" href="'; the_permalink(); echo '" rel="bookmark">'; } ?><?php echo "Leia mais"; ?><?php if ( !is_single() ) { echo '</a>'; } ?>
				<?php if ( is_single() ) : ?>
				<?php if ( function_exists( 'related_posts' ) ) { related_posts(); } ?>
				<?php endif; ?>

				<?php if ( the_tags( '<p class="tags">Tags: ', ', ', '</p>' ) ); ?>
			</div>

	</article> <!-- end #post-<?php the_ID(); ?> -->

<?php if ( is_single() ) : ?>
	<?php incrementPostViews( get_the_ID() ); ?>
	<?php comments_template(); ?>
<?php endif; ?>

<?php endwhile; ?>
	<?php if ( is_home() || is_404() || is_category() || is_tag() || is_search() || is_author() ) : ?>
	<nav>
		<span><?php next_posts_link( '&laquo; Posts anteriores' ); ?></span>
		<span><?php previous_posts_link( 'Posts recentes &raquo;' ); ?></span>
	</nav>
	<?php endif; ?>
	<?php else: ?>
	<?php include (TEMPLATEPATH . '/frag-noposts.php'); ?>
<?php endif; ?>