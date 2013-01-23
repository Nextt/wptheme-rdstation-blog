<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php $curauth = get_userdata( get_the_author_meta('ID'));?> 
	<article class="post" id="post-<?php the_ID(); ?>">

		<?php include (TEMPLATEPATH . '/frag-social.php'); ?>
			<div class="content">
				<header>
					<p class="post-meta"><time><?php the_time('j F Y'); ?></time>, por <span class="author"><?php the_author_posts_link() ?></span>

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
					<?php if ( function_exists( 'btn_horz_fblike' ) ) : ?>
					<?php btn_horz_fblike(); ?>
					<?php endif; ?>
				</header>

<?php 
				if ( function_exists( 'the_post_thumbnail' ) ) 
					the_post_thumbnail( array(250,9999), array( 'class' => ' alignright' ));

				if ( !is_single() ) :
					the_content('Continue lendo &raquo;'); ?>
					
					<p class="categories">Segmento: <?php $terms = get_the_terms( $post->ID , 'segments' ); foreach ( $terms as $term ) { echo $term->name; } ?></p>
				
<?php			else : 
					the_content(); ?>
					
					<p class="categories">Segmento: <?php $terms = get_the_terms( $post->ID , 'segments' ); foreach ( $terms as $term ) { echo $term->name; } ?></p>

					<a href="http://www.rdstation.com.br/" target="_blank"><img src="<?php echo bloginfo('template_directory'); ?>/images/rd-banner.png"></a>
				
<?php			if ( function_exists( 'related_posts' ) )
						related_posts();

				endif;

				if ( the_tags( '<p class="tags">Tags: ', ', ', '</p>' ) ); ?>


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