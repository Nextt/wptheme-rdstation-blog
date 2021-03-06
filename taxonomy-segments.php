<?php get_header(); ?>

<section id="content" class="cases">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php $curauth = get_userdata( get_the_author_meta('ID'));?> 
	<article class="post" id="post-<?php the_ID(); ?>">
		<?php include (TEMPLATEPATH . '/frag-social.php'); ?>
		<div class="content">
			<header>
				<p class="post-meta">
					<time><?php the_time( 'j F Y' ); ?></time> | <span class="author">Por <?php the_author_posts_link() ?></span>

					<?php if (!empty($curauth->twitter)): ?>
					<a rel="me" href="<?php echo $curauth->twitter; ?>" target="_blank" class="twitter-icon" >&nbsp;</a>
					<?php endif; ?>

					<?php if (!empty($curauth->facebook)): ?>
					<a rel="me" href="<?php echo $curauth->facebook; ?>" target="_blank" class="facebook-icon" >&nbsp;</a>
					<?php endif; ?>

					<?php if (!empty($curauth->jabber)): ?>
					<a rel="me" href="<?php echo $curauth->jabber; ?>" target="_blank" class="googleplus-icon" >&nbsp;</a>
					<?php endif; ?>
				
				</p>
				<h1><?php if ( !is_single() ) { echo '<a href="'; the_permalink(); echo '" rel="bookmark">'; } ?><?php the_title(); ?><?php if ( !is_single() ) { echo '</a>'; } ?></h1>
			</header>

			<?php if ( function_exists( 'the_post_thumbnail' ) ) the_post_thumbnail( array(250,9999), array( 'class' => ' alignleft' )); ?>
			<?php the_content( 'Leia mais...' ); ?>
			<hr />
		</div> <!-- end .entry -->
	</article> <!-- end #post-<?php the_ID(); ?> -->

	<?php endwhile; ?>
		<nav>
			<span><?php next_posts_link( '&laquo; Posts anteriores' ); ?></span>
			<span><?php previous_posts_link( 'Posts recentes &raquo;' ); ?></span>
		</nav>
	<?php else: ?>
		<?php include (TEMPLATEPATH . '/frag-noposts.php'); ?>
	<?php endif; ?>
</section>

<?php get_sidebar('cases'); ?>
<?php get_footer(); ?>