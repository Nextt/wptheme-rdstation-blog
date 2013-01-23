<aside id="sidebar" class="cases">
	<header>
		<h2>Estudos de caso</h2>
	</header>
	<?php

		$args = array(
		  'orderby' => 'name',
		  'show_count' => 0,
		  'pad_counts' => 0,
		  'hierarchical' => 1,
		  'taxonomy' => 'segments',
		  'title_li' => ''
		);

	?>
	<p>Veja aqui como nossos clientes de diversos segmentos vêm obtendo resultados melhores e mais consistentes em Marketing Digital.</p>
	<h3>Segmentos</h3>
	<ul>
		<?php wp_list_categories($args); ?>
	</ul>
	<hr />
	<ul class="widgets">
	<?php dynamic_sidebar( 'cases-sidebar' ); ?>
	</ul>
	<hr />
	<?php if ( is_option_setted('webprofile_twitter') ) { ?>
		<a href="http://twitter.com/<?php theme_webprofile_twitter(); ?>" class="twitter-follow-button" data-lang="pt">Siga @<?php theme_webprofile_twitter(); ?></a><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
	<?php } ?>
	<?php if ( is_option_setted('webprofile_feedburner') ) { ?>
		<a href="http://feeds.feedburner.com/<?php theme_webprofile_feedburner(); ?>" class="rss_icon" target="_blank">Feed RSS</a>
	<?php } else { ?>
		<a href="<?php bloginfo('rss2_url'); ?>" class="rss_icon" target="_blank">Feed RSS</a>
	<?php } ?>


</aside> <!-- #sidebar -->